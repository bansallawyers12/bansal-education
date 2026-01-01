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
            <div class="bg-gradient-to-br from-blue-50 to-yellow-50 p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-105 border-l-4 border-blue-900 group animate-fade-in-up">
                <div class="w-40 h-40 mx-auto mb-6 hover:scale-110 transition-transform duration-300 relative animate-bounce-slow">
                    <div class="w-full h-full rounded-full overflow-hidden shadow-2xl ring-4 ring-yellow-500 ring-offset-4 ring-offset-white group-hover:ring-blue-900 transition-all duration-500">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400&h=400&fit=crop" alt="Education Counselling" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" style="object-position: center;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    </div>
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center ring-4 ring-yellow-500 ring-offset-4 ring-offset-white" style="display: none;">
                        <span class="text-white text-4xl font-bold">EC</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-900 transition-colors duration-300">Education Counselling</h3>
                <p class="text-gray-600 leading-relaxed group-hover:text-gray-800 transition-colors duration-300">Expert guidance to help you choose the right course and university that matches your career goals and interests.</p>
            </div>

            <!-- Service 2 -->
            <div class="bg-gradient-to-br from-yellow-50 to-blue-50 p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-105 border-l-4 border-yellow-500 group animate-fade-in-up-delay">
                <div class="w-40 h-40 mx-auto mb-6 hover:scale-110 transition-transform duration-300 relative animate-bounce-slow">
                    <div class="w-full h-full rounded-full overflow-hidden shadow-2xl ring-4 ring-yellow-500 ring-offset-4 ring-offset-white group-hover:ring-blue-900 transition-all duration-500">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&h=400&fit=crop" alt="Admission Support" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" style="object-position: center;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    </div>
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-yellow-500 to-blue-900 rounded-full flex items-center justify-center ring-4 ring-yellow-500 ring-offset-4 ring-offset-white" style="display: none;">
                        <span class="text-white text-4xl font-bold">AS</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-900 transition-colors duration-300">Admission Support</h3>
                <p class="text-gray-600 leading-relaxed group-hover:text-gray-800 transition-colors duration-300">Complete assistance with application forms, document preparation, and submission to ensure successful admission.</p>
            </div>

            <!-- Service 3 -->
            <div class="bg-gradient-to-br from-blue-50 to-yellow-50 p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-105 border-l-4 border-blue-900 group animate-fade-in-up-delay">
                <div class="w-40 h-40 mx-auto mb-6 hover:scale-110 transition-transform duration-300 relative animate-bounce-slow">
                    <div class="w-full h-full rounded-full overflow-hidden shadow-2xl ring-4 ring-yellow-500 ring-offset-4 ring-offset-white group-hover:ring-blue-900 transition-all duration-500">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=400&h=400&fit=crop" alt="Visa Assistance" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" style="object-position: center;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    </div>
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center ring-4 ring-yellow-500 ring-offset-4 ring-offset-white" style="display: none;">
                        <span class="text-white text-4xl font-bold">VA</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-900 transition-colors duration-300">Visa Assistance</h3>
                <p class="text-gray-600 leading-relaxed group-hover:text-gray-800 transition-colors duration-300">Professional help with visa applications, documentation, and interview preparation for Australian student visas.</p>
            </div>
        </div>
    </div>
</section>
@endsection

