@extends('admin.layouts.app')

@section('title', 'Pages')
@section('page-title', 'Pages')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <div class="flex items-center space-x-4">
        <a href="{{ route('admin.pages.create') }}" class="bg-navy hover:bg-navy-dark text-white font-semibold py-2 px-4 rounded-lg transition">
            + Add New Page
        </a>
    </div>
</div>

<!-- Search and Filter -->
<div class="bg-white rounded-lg shadow p-6 mb-6">
    <form method="GET" action="{{ route('admin.pages.index') }}" class="flex flex-wrap gap-4">
        <div class="flex-1 min-w-[200px]">
            <input 
                type="text" 
                name="search" 
                value="{{ request('search') }}" 
                placeholder="Search pages..." 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-navy focus:border-transparent outline-none"
            >
        </div>
        <div>
            <select name="status" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-navy focus:border-transparent outline-none">
                <option value="">All Status</option>
                <option value="published" {{ request('status') === 'published' ? 'selected' : '' }}>Published</option>
                <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="private" {{ request('status') === 'private' ? 'selected' : '' }}>Private</option>
            </select>
        </div>
        <button type="submit" class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-lg transition">
            Filter
        </button>
        @if(request('search') || request('status'))
            <a href="{{ route('admin.pages.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg transition">
                Clear
            </a>
        @endif
    </form>
</div>

<!-- Pages Table -->
<div class="bg-white rounded-lg shadow overflow-hidden">
    @if($pages->count() > 0)
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Author</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($pages as $page)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-2">
                                <div class="text-sm font-medium text-gray-900">{{ $page->title }}</div>
                                @if($page->route_name)
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Frontend Page</span>
                                @endif
                            </div>
                            <div class="text-sm text-gray-500">/{{ $page->slug }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $page->author->name ?? 'N/A' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                {{ $page->status === 'published' ? 'bg-green-100 text-green-800' : 
                                   ($page->status === 'draft' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-800') }}">
                                {{ ucfirst($page->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $page->created_at->format('M d, Y') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex items-center justify-end space-x-2">
                                <a href="{{ route('admin.pages.preview', $page) }}" target="_blank" class="text-blue-600 hover:text-blue-800" title="Preview Page">
                                    <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    Preview
                                </a>
                                <span class="text-gray-300">|</span>
                                <a href="{{ route('admin.pages.edit', $page) }}" class="text-navy hover:text-navy-dark font-medium">Edit</a>
                                <span class="text-gray-300">|</span>
                                <form action="{{ route('admin.pages.destroy', $page) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this page?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
            {{ $pages->links() }}
        </div>
    @else
        <div class="p-6 text-center">
            <p class="text-gray-500 mb-4">No pages found.</p>
            <a href="{{ route('admin.pages.create') }}" class="text-navy hover:underline">Create your first page</a>
        </div>
    @endif
</div>
@endsection

