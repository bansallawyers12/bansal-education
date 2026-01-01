@extends('admin.layouts.app')

@section('title', 'Contact Request Details')
@section('page-title', 'Contact Request Details')

@section('content')
<div class="bg-white rounded-lg shadow-lg p-6">
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $contactRequest->full_name }}</h3>
            <p class="text-sm text-gray-500">Submitted on {{ $contactRequest->created_at->format('F d, Y \a\t g:i A') }}</p>
        </div>
        <div class="flex items-center space-x-2">
            @if($contactRequest->is_read)
                <form action="{{ route('admin.contact-requests.mark-unread', $contactRequest) }}" method="POST" class="inline">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg transition">
                        Mark as Unread
                    </button>
                </form>
            @else
                <form action="{{ route('admin.contact-requests.mark-read', $contactRequest) }}" method="POST" class="inline">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-lg transition">
                        Mark as Read
                    </button>
                </form>
            @endif
            <form action="{{ route('admin.contact-requests.destroy', $contactRequest) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this contact request?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg transition">
                    Delete
                </button>
            </form>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <!-- Contact Information -->
        <div class="bg-gray-50 rounded-lg p-4">
            <h4 class="text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">Contact Information</h4>
            <div class="space-y-3">
                <div>
                    <p class="text-xs text-gray-500 mb-1">Email</p>
                    <p class="text-sm font-medium text-gray-900">
                        <a href="mailto:{{ $contactRequest->email }}" class="text-blue-600 hover:text-blue-800">
                            {{ $contactRequest->email }}
                        </a>
                    </p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 mb-1">Phone</p>
                    <p class="text-sm font-medium text-gray-900">
                        <a href="tel:{{ $contactRequest->phone }}" class="text-blue-600 hover:text-blue-800">
                            {{ $contactRequest->phone }}
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Course Information -->
        <div class="bg-gray-50 rounded-lg p-4">
            <h4 class="text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">Course Information</h4>
            <div class="space-y-3">
                <div>
                    <p class="text-xs text-gray-500 mb-1">Preferred Course</p>
                    <p class="text-sm font-medium text-gray-900">
                        {{ $contactRequest->preferred_course ? ucfirst(str_replace('-', ' ', $contactRequest->preferred_course)) : 'Not specified' }}
                    </p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 mb-1">Education Level</p>
                    <p class="text-sm font-medium text-gray-900">
                        {{ $contactRequest->education_level ? ucfirst(str_replace('-', ' ', $contactRequest->education_level)) : 'Not specified' }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Message -->
    <div class="bg-gray-50 rounded-lg p-4">
        <h4 class="text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">Message</h4>
        <div class="prose max-w-none">
            <p class="text-sm text-gray-900 whitespace-pre-wrap">{{ $contactRequest->message }}</p>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-between">
        <a href="{{ route('admin.contact-requests.index') }}" class="text-navy hover:text-navy-dark font-medium">
            ← Back to Contact Requests
        </a>
        <div class="flex items-center space-x-2">
            <a href="mailto:{{ $contactRequest->email }}?subject=Re: Your Inquiry to Bansal Education Group" class="bg-navy hover:bg-navy-dark text-white font-semibold py-2 px-4 rounded-lg transition">
                Reply via Email
            </a>
        </div>
    </div>
</div>
@endsection

