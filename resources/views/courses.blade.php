@extends('layouts.app')

@section('title', 'Our Courses - Bansal Education Group')
@section('description', 'Explore our comprehensive range of courses designed to meet diverse learning needs and career aspirations. Quality education for all levels.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                Our 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                    Courses
                </span>
            </h1>
            <p class="mt-6 text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                Comprehensive educational programs designed to meet diverse learning needs 
                and prepare students for success in their chosen fields.
            </p>
        </div>
    </div>
</section>

<!-- Course Categories -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Course Categories
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Choose from our diverse range of educational programs
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Science & Technology -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl hover:shadow-lg transition-shadow duration-300">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Science & Technology</h3>
                <p class="text-gray-600 mb-6">
                    Comprehensive programs covering physics, chemistry, biology, and computer science with hands-on laboratory experience.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li>• Physics Fundamentals</li>
                    <li>• Chemistry Lab Techniques</li>
                    <li>• Biology & Life Sciences</li>
                    <li>• Computer Programming</li>
                </ul>
            </div>

            <!-- Mathematics -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-xl hover:shadow-lg transition-shadow duration-300">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-purple-700 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Mathematics</h3>
                <p class="text-gray-600 mb-6">
                    Advanced mathematical concepts, problem-solving techniques, and analytical thinking development.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li>• Algebra & Geometry</li>
                    <li>• Calculus & Statistics</li>
                    <li>• Applied Mathematics</li>
                    <li>• Mathematical Modeling</li>
                </ul>
            </div>

            <!-- Language Arts -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-xl hover:shadow-lg transition-shadow duration-300">
                <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-green-700 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Language Arts</h3>
                <p class="text-gray-600 mb-6">
                    Comprehensive language development, literature analysis, and communication skills enhancement.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li>• English Literature</li>
                    <li>• Creative Writing</li>
                    <li>• Public Speaking</li>
                    <li>• Grammar & Composition</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Featured Courses -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Featured Courses
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Our most popular and highly-rated educational programs
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Course 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">Science</span>
                        <span class="text-gray-500 text-sm">6 Months</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Advanced Physics</h3>
                    <p class="text-gray-600 mb-4">
                        Comprehensive study of classical and modern physics with laboratory experiments and real-world applications.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-blue-600">$299</span>
                        <a href="{{ route('contact') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors duration-200">
                            Enroll Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Course 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="bg-purple-100 text-purple-800 text-sm font-medium px-3 py-1 rounded-full">Mathematics</span>
                        <span class="text-gray-500 text-sm">4 Months</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Calculus Mastery</h3>
                    <p class="text-gray-600 mb-4">
                        Master differential and integral calculus with practical problem-solving techniques and applications.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-purple-600">$249</span>
                        <a href="{{ route('contact') }}" class="bg-purple-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-purple-700 transition-colors duration-200">
                            Enroll Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Course 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full">Language</span>
                        <span class="text-gray-500 text-sm">3 Months</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Creative Writing</h3>
                    <p class="text-gray-600 mb-4">
                        Develop your writing skills through creative exercises, storytelling techniques, and literary analysis.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-green-600">$199</span>
                        <a href="{{ route('contact') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-green-700 transition-colors duration-200">
                            Enroll Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Course 4 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="bg-orange-100 text-orange-800 text-sm font-medium px-3 py-1 rounded-full">Programming</span>
                        <span class="text-gray-500 text-sm">8 Months</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Web Development</h3>
                    <p class="text-gray-600 mb-4">
                        Learn modern web development with HTML, CSS, JavaScript, and popular frameworks.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-orange-600">$399</span>
                        <a href="{{ route('contact') }}" class="bg-orange-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-orange-700 transition-colors duration-200">
                            Enroll Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Course 5 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="bg-red-100 text-red-800 text-sm font-medium px-3 py-1 rounded-full">Business</span>
                        <span class="text-gray-500 text-sm">5 Months</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Business Analytics</h3>
                    <p class="text-gray-600 mb-4">
                        Learn data analysis, statistical modeling, and business intelligence tools for decision making.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-red-600">$349</span>
                        <a href="{{ route('contact') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-red-700 transition-colors duration-200">
                            Enroll Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Course 6 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="bg-indigo-100 text-indigo-800 text-sm font-medium px-3 py-1 rounded-full">Language</span>
                        <span class="text-gray-500 text-sm">6 Months</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Public Speaking</h3>
                    <p class="text-gray-600 mb-4">
                        Master the art of public speaking, presentation skills, and confident communication.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-indigo-600">$179</span>
                        <a href="{{ route('contact') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-indigo-700 transition-colors duration-200">
                            Enroll Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Course Features -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Why Choose Our Courses?
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Discover what makes our educational programs stand out
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Flexible Schedule</h3>
                <p class="text-gray-600 text-sm">Learn at your own pace with flexible class timings</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-purple-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Expert Instructors</h3>
                <p class="text-gray-600 text-sm">Learn from experienced and qualified educators</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-green-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Certification</h3>
                <p class="text-gray-600 text-sm">Receive recognized certificates upon completion</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-orange-600 to-orange-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Support</h3>
                <p class="text-gray-600 text-sm">24/7 academic support and guidance</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Ready to Start Learning?
        </h2>
        <p class="text-xl text-blue-100 mb-8">
            Join thousands of students who have transformed their lives through our educational programs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition-all duration-200 shadow-lg hover:shadow-xl">
                Enroll Today
            </a>
            <a href="{{ route('about') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-blue-600 transition-all duration-200">
                Learn More About Us
            </a>
        </div>
    </div>
</section>
@endsection

