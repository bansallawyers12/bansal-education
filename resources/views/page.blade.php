@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($page->featured_image)
            <div class="mb-8">
                <img src="{{ asset('storage/' . $page->featured_image) }}" alt="{{ $page->title }}" class="w-full h-64 object-cover rounded-lg shadow-lg">
            </div>
        @endif

        <article class="bg-white rounded-lg shadow-lg p-8">
            <header class="mb-6">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $page->title }}</h1>
                @if($page->excerpt)
                    <p class="text-xl text-gray-600 mb-4">{{ $page->excerpt }}</p>
                @endif
                <div class="flex items-center text-sm text-gray-500">
                    <span>Published on {{ $page->published_at ? $page->published_at->format('F d, Y') : $page->created_at->format('F d, Y') }}</span>
                </div>
            </header>

            <div class="prose prose-lg max-w-none">
                {!! $page->content !!}
            </div>
        </article>
    </div>
</div>
@endsection

