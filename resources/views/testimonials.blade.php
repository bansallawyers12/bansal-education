@extends('layouts.app')

@section('title', 'Success Stories - Bansal Education Group')
@section('description', 'Read inspiring success stories from our students who achieved their dreams in Australia\'s top universities with our expert guidance.')

@section('content')
<!-- Success Stories Hero Section -->
<section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                Student 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-yellow-500">
                    Success Stories
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Hear from our successful students who achieved their dreams in Australia's top universities.
            </p>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-gray-50 p-8 rounded-xl border border-yellow-200 hover:shadow-xl transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">A</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Aisha Patel</h4>
                        <p class="text-gray-600 text-sm">University of Melbourne - Engineering</p>
                    </div>
                </div>
                <p class="text-gray-700 italic mb-4">
                    "Bansal Education Group helped me secure admission to University of Melbourne for Civil Engineering. Their guidance throughout the application process was exceptional. I couldn't have done it without them!"
                </p>
                <div class="flex text-yellow-400 mb-2">
                    ★★★★★
                </div>
                <div class="text-sm text-gray-500">
                    Admitted: 2023 | Course: Bachelor of Civil Engineering
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-gray-50 p-8 rounded-xl border border-yellow-200 hover:shadow-xl transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">R</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Rajesh Kumar</h4>
                        <p class="text-gray-600 text-sm">University of Sydney - Business</p>
                    </div>
                </div>
                <p class="text-gray-700 italic mb-4">
                    "The team at Bansal Education made my dream of studying in Australia a reality. They were patient, professional, and always available to answer my questions. Highly recommended!"
                </p>
                <div class="flex text-yellow-400 mb-2">
                    ★★★★★
                </div>
                <div class="text-sm text-gray-500">
                    Admitted: 2023 | Course: Master of Business Administration
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-gray-50 p-8 rounded-xl border border-yellow-200 hover:shadow-xl transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">P</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Priya Sharma</h4>
                        <p class="text-gray-600 text-sm">Monash University - Medicine</p>
                    </div>
                </div>
                <p class="text-gray-700 italic mb-4">
                    "I'm grateful to Bansal Education for their excellent support. They helped me navigate the complex admission process and secure a place at Monash University. Thank you!"
                </p>
                <div class="flex text-yellow-400 mb-2">
                    ★★★★★
                </div>
                <div class="text-sm text-gray-500">
                    Admitted: 2024 | Course: Bachelor of Medicine
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

