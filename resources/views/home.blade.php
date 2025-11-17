@extends('layouts.app')

@section('title', 'Bansal Education Group - Excellence in Education')
@section('description', 'Leading educational institution providing quality education and comprehensive learning programs for students of all ages.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                    Excellence in 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                        Education
                    </span>
                </h1>
                <p class="mt-6 text-xl text-gray-600 leading-relaxed">
                    Empowering students with quality education, innovative learning methods, and comprehensive programs 
                    that prepare them for a successful future in an ever-changing world.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('courses') }}" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:from-blue-700 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Explore Courses
                    </a>
                    <a href="{{ route('about') }}" class="border-2 border-blue-600 text-blue-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-600 hover:text-white transition-all duration-200">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="bg-white rounded-2xl shadow-2xl p-8 transform rotate-3 hover:rotate-0 transition-transform duration-300">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Quality Education</h3>
                        <p class="text-gray-600">Comprehensive learning programs designed to nurture young minds and prepare them for success.</p>
                    </div>
                </div>
                <!-- Decorative elements -->
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-yellow-400 rounded-full opacity-20"></div>
                <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-pink-400 rounded-full opacity-20"></div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Why Choose Bansal Education Group?
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We are committed to providing exceptional educational experiences that inspire, 
                challenge, and prepare students for lifelong success.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="text-center p-8 rounded-xl hover:shadow-lg transition-shadow duration-300">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Expert Faculty</h3>
                <p class="text-gray-600">
                    Learn from experienced educators who are passionate about teaching and committed to student success.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="text-center p-8 rounded-xl hover:shadow-lg transition-shadow duration-300">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-purple-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Innovative Methods</h3>
                <p class="text-gray-600">
                    Cutting-edge teaching methodologies and technology integration for enhanced learning experiences.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="text-center p-8 rounded-xl hover:shadow-lg transition-shadow duration-300">
                <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-green-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Community Focus</h3>
                <p class="text-gray-600">
                    Building a supportive learning community where students can grow, collaborate, and thrive together.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="text-center p-8 rounded-xl hover:shadow-lg transition-shadow duration-300">
                <div class="w-16 h-16 bg-gradient-to-r from-orange-600 to-orange-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Fast Track Learning</h3>
                <p class="text-gray-600">
                    Accelerated learning programs designed to help students achieve their goals efficiently and effectively.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="text-center p-8 rounded-xl hover:shadow-lg transition-shadow duration-300">
                <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Proven Results</h3>
                <p class="text-gray-600">
                    Track record of student success with high achievement rates and positive learning outcomes.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="text-center p-8 rounded-xl hover:shadow-lg transition-shadow duration-300">
                <div class="w-16 h-16 bg-gradient-to-r from-indigo-600 to-indigo-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Flexible Schedules</h3>
                <p class="text-gray-600">
                    Convenient class timings and flexible learning options to accommodate diverse student needs.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Our Impact in Numbers
            </h2>
            <p class="text-xl text-blue-100">
                Building futures, one student at a time
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">5000+</div>
                <div class="text-blue-100 text-lg">Students Taught</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">95%</div>
                <div class="text-blue-100 text-lg">Success Rate</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">10+</div>
                <div class="text-blue-100 text-lg">Years Experience</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">50+</div>
                <div class="text-blue-100 text-lg">Expert Teachers</div>
            </div>
        </div>
    </div>
</section>

<!-- Courses Preview Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Popular Courses
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Discover our comprehensive range of courses designed to meet diverse learning needs and career aspirations.
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
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Science & Technology</h3>
                    <p class="text-gray-600 mb-4">
                        Comprehensive programs covering physics, chemistry, biology, and computer science with hands-on laboratory experience.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-blue-600 font-semibold">6 Months</span>
                        <a href="{{ route('courses') }}" class="text-blue-600 hover:text-blue-700 font-medium">Learn More →</a>
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
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Mathematics</h3>
                    <p class="text-gray-600 mb-4">
                        Advanced mathematical concepts, problem-solving techniques, and analytical thinking development.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-purple-600 font-semibold">4 Months</span>
                        <a href="{{ route('courses') }}" class="text-purple-600 hover:text-purple-700 font-medium">Learn More →</a>
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
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Language Arts</h3>
                    <p class="text-gray-600 mb-4">
                        Comprehensive language development, literature analysis, and communication skills enhancement.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-green-600 font-semibold">3 Months</span>
                        <a href="{{ route('courses') }}" class="text-green-600 hover:text-green-700 font-medium">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('courses') }}" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:from-blue-700 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl">
                View All Courses
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                What Our Students Say
            </h2>
            <p class="text-xl text-gray-600">
                Hear from our successful students about their learning journey
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">A</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Aisha Patel</h4>
                        <p class="text-gray-600 text-sm">Science Graduate</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">
                    "The quality of education at Bansal Education Group is exceptional. The teachers are knowledgeable and supportive, and the learning environment is perfect for academic growth."
                </p>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-green-600 to-blue-600 rounded-full flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">R</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Rajesh Kumar</h4>
                        <p class="text-gray-600 text-sm">Mathematics Student</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">
                    "I've seen tremendous improvement in my mathematical skills. The teaching methods are innovative and the faculty is always ready to help with any doubts."
                </p>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-600 to-pink-600 rounded-full flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">S</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Sarah Johnson</h4>
                        <p class="text-gray-600 text-sm">Language Arts Student</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">
                    "The language arts program has helped me develop strong communication skills. The personalized attention and modern teaching techniques make learning enjoyable."
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Ready to Start Your Learning Journey?
        </h2>
        <p class="text-xl text-blue-100 mb-8">
            Join thousands of successful students who have achieved their academic goals with our comprehensive educational programs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition-all duration-200 shadow-lg hover:shadow-xl">
                Get Started Today
            </a>
            <a href="{{ route('courses') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-blue-600 transition-all duration-200">
                Browse Courses
            </a>
        </div>
    </div>
</section>
@endsection

