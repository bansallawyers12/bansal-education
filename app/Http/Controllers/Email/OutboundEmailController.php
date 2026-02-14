<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use App\Models\OutboundEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class OutboundEmailController extends Controller
{
    public function outbox(Request $request): View
    {
        $emails = OutboundEmail::where('status', OutboundEmail::STATUS_PENDING)
            ->latest('created_at')
            ->paginate(15)
            ->withQueryString();

        $selected = null;
        $selectedId = $request->query('id');
        if ($selectedId) {
            $selected = OutboundEmail::where('status', OutboundEmail::STATUS_PENDING)->find($selectedId);
        } elseif ($emails->isNotEmpty()) {
            $selected = $emails->first();
        }

        return view('email.emails.outbox', [
            'emails'  => $emails,
            'selected' => $selected,
        ]);
    }

    public function sent(Request $request): View
    {
        $emails = OutboundEmail::where('status', OutboundEmail::STATUS_SENT)
            ->latest('sent_at')
            ->paginate(15)
            ->withQueryString();

        $selected = null;
        $selectedId = $request->query('id');
        if ($selectedId) {
            $selected = OutboundEmail::where('status', OutboundEmail::STATUS_SENT)->find($selectedId);
        } elseif ($emails->isNotEmpty()) {
            $selected = $emails->first();
        }

        return view('email.emails.sent', [
            'emails'  => $emails,
            'selected' => $selected,
        ]);
    }

    /**
     * Send a pending outbound email via SendGrid.
     */
    public function send(Request $request, OutboundEmail $email): RedirectResponse
    {
        if ($email->status !== OutboundEmail::STATUS_PENDING) {
            return redirect()->route('emails.outbox')->with('error', 'Email is not pending.');
        }

        try {
            Mail::mailer('sendgrid')->send([], [], function ($message) use ($email) {
                $message->to($email->to_address)
                    ->subject($email->subject)
                    ->from($email->from_address, $email->from_name ?? '');
                if ($email->body_html) {
                    $message->html($email->body_html);
                } else {
                    $message->text($email->body_text ?? '');
                }
            });

            $email->update([
                'status' => OutboundEmail::STATUS_SENT,
                'sent_at' => now(),
            ]);

            Log::info('Outbound email sent via SendGrid', ['id' => $email->id, 'to' => $email->to_address]);

            return redirect()->route('emails.outbox', request()->only('id'))->with('success', 'Email sent successfully.');
        } catch (\Throwable $e) {
            Log::error('Failed to send outbound email', ['id' => $email->id, 'error' => $e->getMessage()]);
            $email->update(['status' => OutboundEmail::STATUS_FAILED]);

            return redirect()
                ->route('emails.outbox', ['id' => $email->id])
                ->with('error', 'Failed to send: ' . $e->getMessage());
        }
    }

    public function drafts(Request $request): View
    {
        $emails = OutboundEmail::where('status', OutboundEmail::STATUS_DRAFT)
            ->latest('updated_at')
            ->paginate(15)
            ->withQueryString();

        $selected = null;
        $selectedId = $request->query('id');
        if ($selectedId) {
            $selected = OutboundEmail::where('status', OutboundEmail::STATUS_DRAFT)->find($selectedId);
        } elseif ($emails->isNotEmpty()) {
            $selected = $emails->first();
        }

        return view('email.emails.drafts', [
            'emails' => $emails,
            'selected' => $selected,
        ]);
    }

    public function trash(Request $request): View
    {
        $outbound = OutboundEmail::onlyTrashed()->latest('deleted_at')->paginate(15);
        $inbound = \App\Models\InboundEmail::onlyTrashed()->latest('deleted_at')->paginate(15, ['*'], 'inbound_page');

        return view('email.emails.trash', [
            'outbound' => $outbound,
            'inbound' => $inbound,
        ]);
    }

    public function destroy(OutboundEmail $email): RedirectResponse
    {
        $email->delete();
        $folder = match ($email->status) {
            OutboundEmail::STATUS_DRAFT => 'emails.drafts',
            OutboundEmail::STATUS_PENDING => 'emails.outbox',
            default => 'emails.sent',
        };
        return redirect()->route($folder)->with('success', 'Email moved to Trash.');
    }
}
