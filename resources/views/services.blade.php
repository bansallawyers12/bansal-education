@extends('layouts.app')

@section('title', 'Student Services - Bansal Education Group')
@section('description', 'Comprehensive student services including education counselling, admission support, and career guidance for your Australian education journey.')

@section('content')
<!-- Services Hero Section -->
<section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 py-20 lg:py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-20 h-20 bg-yellow-500 rounded-full animate-float"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-blue-900 rounded-full animate-float-reverse"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-yellow-500 rounded-full animate-bounce-slow"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6 animate-fade-in-up animate-bounce-slow">
                Our 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-yellow-500 animate-gradient-text">
                    Student Services
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up-delay animate-slide-in-bottom">
                Comprehensive support designed to guide you through every step of your educational journey in Australia.
            </p>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-16 bg-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-900 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-0 left-0 w-40 h-40 bg-yellow-500 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 1s;"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="bg-gradient-to-r from-blue-50 to-yellow-50 rounded-2xl p-8 md:p-12 border-l-4 border-yellow-500 animate-fade-in-up hover:shadow-xl hover:scale-105 transition-all duration-500 group">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center group-hover:rotate-360 transition-transform duration-700 animate-pulse-slow">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                </div>
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-4xl mx-auto text-center group-hover:text-gray-800 transition-colors duration-300">
                    At Bansal Education, we provide <span class="font-semibold text-blue-900 animate-gradient-text">personalised and reliable student services</span> to ensure your study experience in Australia is smooth, stress-free, and successful. From choosing the right course to securing admission and building your future career, our expert team supports you at every stage.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Comprehensive support for your educational journey</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Education Counselling</h3>
                <p class="text-gray-600 leading-relaxed">Expert guidance to help you choose the right course and university that matches your career goals and interests.</p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Admission Support</h3>
                <p class="text-gray-600 leading-relaxed">Complete assistance with application forms, document preparation, and submission to ensure successful admission.</p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Visa Assistance</h3>
                <p class="text-gray-600 leading-relaxed">Professional help with visa applications, documentation, and interview preparation for Australian student visas.</p>
            </div>
        </div>
    </div>
</section>
@endsection

