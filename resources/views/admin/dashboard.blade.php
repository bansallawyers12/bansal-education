@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="animate-fade-in">
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Pages -->
        <div class="bg-gradient-to-br from-white to-blue-50 rounded-2xl shadow-lg p-6 card-hover border border-blue-100/50">
            <div class="flex items-center justify-between">
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-600 mb-1">Total Pages</p>
                    <p class="text-4xl font-bold bg-gradient-to-r from-navy to-blue-600 bg-clip-text text-transparent">{{ $stats['total_pages'] }}</p>
                </div>
                <div class="p-4 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 text-white shadow-lg">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4 pt-4 border-t border-gray-200">
                <p class="text-xs text-gray-500">All pages in the system</p>
            </div>
        </div>

        <!-- Published Pages -->
        <div class="bg-gradient-to-br from-white to-green-50 rounded-2xl shadow-lg p-6 card-hover border border-green-100/50">
            <div class="flex items-center justify-between">
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-600 mb-1">Published</p>
                    <p class="text-4xl font-bold bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">{{ $stats['published_pages'] }}</p>
                </div>
                <div class="p-4 rounded-2xl bg-gradient-to-br from-green-500 to-emerald-600 text-white shadow-lg">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4 pt-4 border-t border-gray-200">
                <p class="text-xs text-gray-500">Live on website</p>
            </div>
        </div>

        <!-- Draft Pages -->
        <div class="bg-gradient-to-br from-white to-yellow-50 rounded-2xl shadow-lg p-6 card-hover border border-yellow-100/50">
            <div class="flex items-center justify-between">
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-600 mb-1">Drafts</p>
                    <p class="text-4xl font-bold bg-gradient-to-r from-yellow-600 to-amber-600 bg-clip-text text-transparent">{{ $stats['draft_pages'] }}</p>
                </div>
                <div class="p-4 rounded-2xl bg-gradient-to-br from-yellow-500 to-amber-500 text-white shadow-lg">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4 pt-4 border-t border-gray-200">
                <p class="text-xs text-gray-500">Pending review</p>
            </div>
        </div>

        <!-- Total Courses -->
        <div class="bg-gradient-to-br from-white to-purple-50 rounded-2xl shadow-lg p-6 card-hover border border-purple-100/50">
            <div class="flex items-center justify-between">
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-600 mb-1">Courses</p>
                    <p class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">{{ $stats['total_courses'] }}</p>
                </div>
                <div class="p-4 rounded-2xl bg-gradient-to-br from-purple-500 to-indigo-600 text-white shadow-lg">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4 pt-4 border-t border-gray-200">
                <p class="text-xs text-gray-500">Available courses</p>
            </div>
        </div>
    </div>

    <!-- Recent Pages -->
    <div class="bg-white/80 backdrop-blur-lg rounded-2xl shadow-xl border border-gray-200/50 overflow-hidden">
        <div class="bg-gradient-to-r from-navy to-navy-dark p-6">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-white">Recent Pages</h3>
                    <p class="text-sm text-blue-100 mt-1">Latest pages in your system</p>
                </div>
                <a href="{{ route('admin.pages.index') }}" class="px-4 py-2 bg-white/20 hover:bg-white/30 text-white rounded-lg text-sm font-medium transition-all duration-200 backdrop-blur-sm border border-white/30 hover:border-white/50">
                    View All →
                </a>
            </div>
        </div>
        <div class="p-6">
            @if($stats['recent_pages']->count() > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50/50">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Title</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Author</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-4 text-right text-xs font-semibold text-gray-700 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            @foreach($stats['recent_pages'] as $page)
                                <tr class="hover:bg-gradient-to-r hover:from-blue-50/50 hover:to-indigo-50/50 transition-all duration-200">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-gradient-to-br from-navy to-blue-600 rounded-lg flex items-center justify-center text-white font-bold shadow-md">
                                                {{ strtoupper(substr($page->title, 0, 1)) }}
                                            </div>
                                            <div>
                                                <div class="text-sm font-semibold text-gray-900">{{ $page->title }}</div>
                                                <div class="text-xs text-gray-500">/{{ $page->slug }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full shadow-sm
                                            {{ $page->status === 'published' ? 'bg-gradient-to-r from-green-100 to-emerald-100 text-green-800 border border-green-200' : 
                                               ($page->status === 'draft' ? 'bg-gradient-to-r from-yellow-100 to-amber-100 text-yellow-800 border border-yellow-200' : 
                                               'bg-gradient-to-r from-gray-100 to-slate-100 text-gray-800 border border-gray-200') }}">
                                            {{ ucfirst($page->status) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-gradient-to-br from-purple-400 to-pink-400 rounded-full flex items-center justify-center text-white text-xs font-bold mr-2 shadow-md">
                                                {{ strtoupper(substr($page->author->name ?? 'A', 0, 1)) }}
                                            </div>
                                            <span class="text-sm font-medium text-gray-700">{{ $page->author->name ?? 'N/A' }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                        {{ $page->created_at->format('M d, Y') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('admin.pages.edit', $page) }}" class="inline-flex items-center px-3 py-1.5 bg-gradient-to-r from-navy to-navy-dark text-white rounded-lg hover:from-navy-dark hover:to-navy transition-all duration-200 shadow-md hover:shadow-lg transform hover:scale-105">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-12">
                    <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <p class="text-gray-500 text-lg mb-2">No pages yet</p>
                    <a href="{{ route('admin.pages.create') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-navy to-navy-dark text-white rounded-lg hover:from-navy-dark hover:to-navy transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105 font-medium">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Create your first page
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

