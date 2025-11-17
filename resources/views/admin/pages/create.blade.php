@extends('admin.layouts.app')

@section('title', 'Create Page')
@section('page-title', 'Create New Page')

@section('content')
<form method="POST" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data" class="space-y-6">
    @csrf

    <div class="bg-white rounded-lg shadow p-6">
        <div class="space-y-4">
            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Page Title *</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title') }}" 
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-navy focus:border-transparent outline-none"
                    placeholder="Enter page title"
                >
            </div>

            <!-- Slug -->
            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug</label>
                <input 
                    type="text" 
                    id="slug" 
                    name="slug" 
                    value="{{ old('slug') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-navy focus:border-transparent outline-none"
                    placeholder="page-slug (auto-generated from title if left empty)"
                >
                <p class="mt-1 text-sm text-gray-500">The URL-friendly version of the title. Leave empty to auto-generate.</p>
            </div>

            <!-- Route Name (for frontend pages) -->
            <div>
                <label for="route_name" class="block text-sm font-medium text-gray-700 mb-2">Route Name (Optional)</label>
                <input 
                    type="text" 
                    id="route_name" 
                    name="route_name" 
                    value="{{ old('route_name') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-navy focus:border-transparent outline-none"
                    placeholder="e.g., home, about, courses, contact"
                >
                <p class="mt-1 text-sm text-gray-500">Link this page to a specific route (for frontend pages like home, about, etc.)</p>
            </div>

            <!-- Content -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                <textarea 
                    id="content" 
                    name="content" 
                    rows="15"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-navy focus:border-transparent outline-none"
                    placeholder="Enter page content (HTML supported)"
                >{{ old('content') }}</textarea>
            </div>

            <!-- Excerpt -->
            <div>
                <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-2">Excerpt</label>
                <textarea 
                    id="excerpt" 
                    name="excerpt" 
                    rows="3"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-navy focus:border-transparent outline-none"
                    placeholder="Short description of the page"
                >{{ old('excerpt') }}</textarea>
            </div>
        </div>
    </div>

    <!-- Publish Settings -->
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Publish Settings</h3>
        <div class="space-y-4">
            <!-- Status -->
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status *</label>
                <select 
                    id="status" 
                    name="status" 
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-navy focus:border-transparent outline-none"
                >
                    <option value="draft" {{ old('status', 'draft') === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
                    <option value="private" {{ old('status') === 'private' ? 'selected' : '' }}>Private</option>
                </select>
            </div>

            <!-- Published At -->
            <div>
                <label for="published_at" class="block text-sm font-medium text-gray-700 mb-2">Published Date</label>
                <input 
                    type="datetime-local" 
                    id="published_at" 
                    name="published_at" 
                    value="{{ old('published_at') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-navy focus:border-transparent outline-none"
                >
            </div>

            <!-- Is Homepage -->
            <div class="flex items-center">
                <input 
                    type="checkbox" 
                    id="is_homepage" 
                    name="is_homepage" 
                    value="1"
                    {{ old('is_homepage') ? 'checked' : '' }}
                    class="w-4 h-4 text-navy bg-gray-100 border-gray-300 rounded focus:ring-navy"
                >
                <label for="is_homepage" class="ml-2 text-sm font-medium text-gray-700">Set as homepage</label>
            </div>

            <!-- Order -->
            <div>
                <label for="order" class="block text-sm font-medium text-gray-700 mb-2">Order</label>
                <input 
                    type="number" 
                    id="order" 
                    name="order" 
                    value="{{ old('order', 0) }}"
                    min="0"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-navy focus:border-transparent outline-none"
                >
                <p class="mt-1 text-sm text-gray-500">Lower numbers appear first in listings.</p>
            </div>
        </div>
    </div>

    <!-- Featured Image -->
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Featured Image</h3>
        <div>
            <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-2">Upload Image</label>
            <input 
                type="file" 
                id="featured_image" 
                name="featured_image" 
                accept="image/*"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-navy focus:border-transparent outline-none"
            >
            <p class="mt-1 text-sm text-gray-500">Recommended size: 1200x600px. Max file size: 2MB.</p>
        </div>
    </div>

    <!-- SEO Settings -->
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">SEO Settings</h3>
        <div class="space-y-4">
            <!-- Meta Title -->
            <div>
                <label for="meta_title" class="block text-sm font-medium text-gray-700 mb-2">Meta Title</label>
                <input 
                    type="text" 
                    id="meta_title" 
                    name="meta_title" 
                    value="{{ old('meta_title') }}"
                    maxlength="255"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-navy focus:border-transparent outline-none"
                    placeholder="SEO title (leave empty to use page title)"
                >
            </div>

            <!-- Meta Description -->
            <div>
                <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-2">Meta Description</label>
                <textarea 
                    id="meta_description" 
                    name="meta_description" 
                    rows="3"
                    maxlength="500"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-navy focus:border-transparent outline-none"
                    placeholder="SEO description (recommended: 150-160 characters)"
                >{{ old('meta_description') }}</textarea>
            </div>

            <!-- Meta Keywords -->
            <div>
                <label for="meta_keywords" class="block text-sm font-medium text-gray-700 mb-2">Meta Keywords</label>
                <input 
                    type="text" 
                    id="meta_keywords" 
                    name="meta_keywords" 
                    value="{{ old('meta_keywords') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-navy focus:border-transparent outline-none"
                    placeholder="keyword1, keyword2, keyword3"
                >
            </div>
        </div>
    </div>

    <!-- Actions -->
    <div class="flex items-center justify-end space-x-4">
        <a href="{{ route('admin.pages.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
            Cancel
        </a>
        <button type="submit" class="px-6 py-2 bg-navy hover:bg-navy-dark text-white font-semibold rounded-lg transition">
            Create Page
        </button>
    </div>
</form>
@endsection

