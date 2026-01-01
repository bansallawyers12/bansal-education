<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactRequest;
use Illuminate\Http\Request;

class ContactRequestController extends Controller
{
    /**
     * Display a listing of contact requests
     */
    public function index(Request $request)
    {
        $query = ContactRequest::latest();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        // Filter by read status
        if ($request->filled('status')) {
            if ($request->status === 'read') {
                $query->where('is_read', true);
            } elseif ($request->status === 'unread') {
                $query->where('is_read', false);
            }
        }

        $contactRequests = $query->paginate(15);
        $unreadCount = ContactRequest::where('is_read', false)->count();

        return view('admin.contact-requests.index', compact('contactRequests', 'unreadCount'));
    }

    /**
     * Display the specified contact request
     */
    public function show(ContactRequest $contactRequest)
    {
        // Mark as read when viewing
        if (!$contactRequest->is_read) {
            $contactRequest->update(['is_read' => true]);
        }

        return view('admin.contact-requests.show', compact('contactRequest'));
    }

    /**
     * Mark contact request as read
     */
    public function markAsRead(ContactRequest $contactRequest)
    {
        $contactRequest->update(['is_read' => true]);

        return redirect()->back()->with('success', 'Contact request marked as read.');
    }

    /**
     * Mark contact request as unread
     */
    public function markAsUnread(ContactRequest $contactRequest)
    {
        $contactRequest->update(['is_read' => false]);

        return redirect()->back()->with('success', 'Contact request marked as unread.');
    }

    /**
     * Remove the specified contact request
     */
    public function destroy(ContactRequest $contactRequest)
    {
        $contactRequest->delete();

        return redirect()->route('admin.contact-requests.index')
            ->with('success', 'Contact request deleted successfully.');
    }
}
