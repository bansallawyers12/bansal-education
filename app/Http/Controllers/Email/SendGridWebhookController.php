<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use App\Models\InboundEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SendGridWebhookController extends Controller
{
    /**
     * Handle SendGrid Inbound Parse webhook.
     * SendGrid POSTs multipart/form-data with: from, to, subject, text, html, headers, etc.
     */
    public function handle(Request $request)
    {
        $from = $this->extractEmail($request->input('from', ''));
        $to = $this->extractEmail($request->input('to', ''));
        $subject = $request->input('subject', '(no subject)');
        $text = $request->input('text', '');
        $html = $request->input('html', $text);

        // Parse attachments from attachment-info (JSON): {"attachment1": {"filename": "x.pdf"}, ...}
        $attachments = [];
        $attachmentInfo = $request->input('attachment-info');
        if ($attachmentInfo) {
            $info = json_decode($attachmentInfo, true);
            if (is_array($info)) {
                foreach ($info as $a) {
                    $attachments[] = $a['filename'] ?? $a['name'] ?? 'unnamed';
                }
            }
        }

        // Extract Message-ID from headers for deduplication
        $messageId = $this->extractMessageId($request->input('headers', ''));

        if ($messageId && InboundEmail::where('message_id', $messageId)->exists()) {
            Log::info('Inbound email already stored', ['message_id' => $messageId]);
            return response('Processed', 200);
        }

        InboundEmail::create([
            'message_id' => $messageId,
            'from_address' => $from,
            'to_address' => $to,
            'subject' => $subject,
            'received_at' => now(),
            'status' => InboundEmail::STATUS_PENDING,
            'body_text' => $text,
            'body_html' => $html,
            'attachments' => $attachments,
        ]);

        Log::info('Inbound email stored', ['from' => $from, 'subject' => $subject]);

        return response('Processed', 200);
    }

    /**
     * Extract email address from "Name <email@example.com>" format.
     */
    private function extractEmail(string $field): string
    {
        if (empty($field)) {
            return 'unknown';
        }
        if (preg_match('/<([^>]+)>/', $field, $match)) {
            return trim($match[1]);
        }
        return trim($field);
    }

    /**
     * Extract Message-ID from raw headers string.
     */
    private function extractMessageId(string $headers): ?string
    {
        if (empty($headers)) {
            return null;
        }
        if (preg_match('/^Message-ID:\s*(.+)/mi', $headers, $match)) {
            return trim($match[1], " \t\n\r\0\x0B<>");
        }
        return null;
    }
}
