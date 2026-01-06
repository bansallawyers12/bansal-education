@extends('layouts.app')

@section('title', "Home - Bansal Education Group")
@section('description', "Australia's most trusted education consultant. Expert guidance for university admissions, course selection, and career planning in Australia's top universities.")

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 py-20 lg:py-32 z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left fade-in slide-in-left">
                <div class="mb-4 animate-float">
                    <span class="inline-block bg-yellow-500 text-blue-900 text-sm font-semibold px-4 py-2 rounded-full pulse-slow animate-bounce-slow">
                        🇦🇺 Australia's Most Trusted Education Consultant
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight animate-fade-in-up">
                    Your Pathway to 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-yellow-500 animate-gradient-text">
                        Quality Education
                    </span>
                </h1>
                <p class="mt-6 text-xl text-gray-600 leading-relaxed animate-fade-in-up-delay">
                    Expert guidance for university admissions, course selection, and career planning in Australia's top universities. 
                    Join thousands of successful students who achieved their dreams with our proven consultancy services.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('contact') }}" class="bg-gradient-to-r from-blue-900 to-yellow-500 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:from-yellow-500 hover:to-blue-900 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 bounce-hover">
                            Book Free Consultation
                        </a>
                        <a href="{{ route('about') }}" class="border-2 border-blue-900 text-blue-900 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-900 hover:text-white transition-all duration-200 bounce-hover">
                            Learn More
                        </a>
                </div>
                <!-- Trust Badges -->
                <div class="mt-8 flex flex-wrap items-center justify-center lg:justify-start gap-6 stagger-animation">
                    <div class="text-center animate-scale-in hover:scale-110 transition-transform duration-300">
                        <div class="text-2xl font-bold text-blue-900 counter-animate">10+</div>
                        <div class="text-sm text-gray-600">Years Experience</div>
                    </div>
                    <div class="text-center animate-scale-in-delay hover:scale-110 transition-transform duration-300">
                        <div class="text-2xl font-bold text-blue-900 counter-animate">10,000+</div>
                        <div class="text-sm text-gray-600">Students Placed</div>
                    </div>
                    <div class="text-center animate-scale-in-delay-2 hover:scale-110 transition-transform duration-300">
                        <div class="text-2xl font-bold text-blue-900 counter-animate">95%</div>
                        <div class="text-sm text-gray-600">Success Rate</div>
                    </div>
                </div>
            </div>
            <div class="relative slide-in z-10 animate-float-slow">
                <div class="relative">
                    <!-- Beautiful Hero Image Card -->
                    <div class="relative rounded-3xl shadow-2xl overflow-hidden transform rotate-3 hover:rotate-0 hover:scale-105 transition-all duration-500 animate-card-float group">
                        <!-- Main Beautiful Image -->
                        <div class="relative h-[500px] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=800&h=600&fit=crop" 
                                 alt="Happy students studying together" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                 style="filter: blur(1.5px) !important;"
                                 loading="eager"
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800&h=600&fit=crop';">
                            <!-- Subtle Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/20 via-transparent to-yellow-500/20"></div>
                        </div>
                    </div>
                    
                    <!-- Floating Trust Badge - Bigger -->
                    <div class="absolute -bottom-8 -right-8 bg-white rounded-3xl shadow-2xl p-8 transform rotate-6 hover:rotate-0 transition-all duration-500 z-20 border-2 border-yellow-200 max-w-sm">
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-18 h-18 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center flex-shrink-0 pulse-slow shadow-lg" style="width: 72px; height: 72px;">
                                <svg class="w-9 h-9 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Trusted by Students</h3>
                                <p class="text-sm text-gray-600">Proven track record</p>
                            </div>
                        </div>
                        <div class="flex justify-between gap-6 pt-5 border-t border-gray-200">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-900 counter-animate">95%</div>
                                <div class="text-sm text-gray-500">Success Rate</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-yellow-600">10K+</div>
                                <div class="text-sm text-gray-500">Students</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Decorative floating elements -->
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-yellow-400 rounded-full opacity-20 blur-2xl pulse-slow z-0 animate-float"></div>
                <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-blue-600 rounded-full opacity-20 blur-2xl pulse-slow z-0 animate-float-reverse"></div>
            </div>
        </div>
    </div>
</section>

    <!-- Services Preview Section -->
    <section class="py-20 bg-white relative z-20 mt-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 animate-slide-in-bottom">
                Our Student Services
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-delay">
                Comprehensive support services designed to guide you through every step of your educational journey in Australia.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 stagger-animation">
            <!-- Service 1 -->
            <div class="bg-gradient-to-br from-blue-900 to-yellow-500 p-8 rounded-xl hover:shadow-2xl hover:scale-105 transition-all duration-500 border border-yellow-200 fade-in animate-card-hover group overflow-hidden relative">
                <div class="absolute top-0 right-0 w-32 h-32 opacity-10">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Education counselling" class="w-full h-full object-cover rounded-full" onerror="this.style.display='none';">
                </div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6 pulse-slow group-hover:rotate-360 transition-transform duration-700">
                        <svg class="w-8 h-8 text-blue-900 group-hover:scale-125 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 group-hover:scale-110 transition-transform duration-300">Education Counselling</h3>
                    <p class="text-white mb-6 group-hover:text-yellow-100 transition-colors duration-300">University selection guidance, course recommendations, and application assistance.</p>
                    <div class="bg-white text-blue-900 px-4 py-2 rounded-lg text-sm font-semibold text-center group-hover:bg-yellow-500 group-hover:text-white transition-all duration-300">
                        Complete guidance in 2-4 weeks
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="bg-white p-8 rounded-xl hover:shadow-2xl hover:scale-105 transition-all duration-500 border-2 border-yellow-500 fade-in animate-card-hover group overflow-hidden relative">
                <div class="absolute top-0 right-0 w-40 h-40 opacity-15">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&h=400&fit=crop" alt="Admission support" class="w-full h-full object-cover rounded-full" loading="lazy" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=400&fit=crop';">
                </div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mb-6 pulse-slow group-hover:rotate-360 transition-transform duration-700">
                        <svg class="w-8 h-8 text-white group-hover:scale-125 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-900 group-hover:scale-110 transition-all duration-300">Admission Support</h3>
                    <p class="text-gray-600 mb-6 group-hover:text-gray-700 transition-colors duration-300">Document preparation, SOP writing, and interview preparation.</p>
                    <div class="bg-gradient-to-r from-blue-900 to-yellow-500 text-white px-4 py-2 rounded-lg text-sm font-semibold text-center group-hover:from-yellow-500 group-hover:to-blue-900 transition-all duration-300">
                        Application process in 3-6 weeks
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="bg-gradient-to-br from-yellow-500 to-blue-900 p-8 rounded-xl hover:shadow-2xl hover:scale-105 transition-all duration-500 border border-blue-200 fade-in animate-card-hover group overflow-hidden relative">
                <div class="absolute top-0 right-0 w-32 h-32 opacity-10">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Career guidance" class="w-full h-full object-cover rounded-full" onerror="this.style.display='none';">
                </div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6 pulse-slow group-hover:rotate-360 transition-transform duration-700">
                        <svg class="w-8 h-8 text-blue-900 group-hover:scale-125 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 group-hover:scale-110 transition-transform duration-300">Career Guidance</h3>
                    <p class="text-white mb-6 group-hover:text-yellow-100 transition-colors duration-300">Industry-focused course selection, job market analysis, and skill development.</p>
                    <div class="bg-white text-blue-900 px-4 py-2 rounded-lg text-sm font-semibold text-center group-hover:bg-yellow-500 group-hover:text-white transition-all duration-300">
                        Career support throughout your journey
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12 animate-fade-in-up">
            <a href="/services.php" class="bg-gradient-to-r from-blue-900 to-yellow-500 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:from-yellow-500 hover:to-blue-900 transition-all duration-300 shadow-lg hover:shadow-2xl hover:scale-110 transform hover:-translate-y-2 animate-pulse-slow">
                View All Services
            </a>
        </div>
    </div>
</section>

<!-- Popular Courses Section -->
<section class="py-20 bg-gradient-to-b from-blue-50 via-white to-yellow-50 relative z-20 overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-yellow-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-1/2 w-96 h-96 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-block mb-4">
                <span class="bg-gradient-to-r from-blue-900 to-yellow-500 text-white text-sm font-semibold px-4 py-2 rounded-full shadow-lg">
                    🎓 Explore Opportunities
                </span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Popular 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-yellow-500">
                    Australian Courses
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Explore some of the most sought-after courses in Australia. From Business to IT, Engineering to Healthcare - find your perfect pathway to success.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Course 1: Business & Management -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden group transform hover:-translate-y-2 border-t-4 border-blue-900">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop" alt="Business & Management" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/60 to-blue-900/40"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4 group-hover:rotate-12 group-hover:scale-110 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-yellow-300 transition-colors">Business & Management</h3>
                        <p class="text-white/90 text-sm font-medium">Leadership & Corporate Careers</p>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <ul class="space-y-3 mb-5">
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>MBA & Commerce</span>
                        </li>
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Project Management</span>
                        </li>
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Marketing & HR</span>
                        </li>
                    </ul>
                    <div class="bg-gradient-to-r from-blue-50 to-yellow-50 rounded-xl p-4 border-l-4 border-yellow-500 shadow-sm">
                        <p class="text-sm text-gray-700">
                            <span class="font-bold text-blue-900">High Demand</span> - Excellent career prospects
                        </p>
                    </div>
                </div>
            </div>

            <!-- Course 2: IT & Computer Science -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden group transform hover:-translate-y-2 border-2 border-yellow-500">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=600&h=400&fit=crop" alt="IT & Computer Science" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-yellow-500/90 via-yellow-500/60 to-yellow-500/40"></div>
                    <div class="absolute inset-0 p-6 flex items-start gap-4">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center flex-shrink-0 group-hover:rotate-12 group-hover:scale-110 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-white mb-2">
                                IT & Computer Science
                            </h3>
                            <p class="text-white/90 text-sm font-medium">Tech Innovation & Future Skills</p>
                        </div>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <ul class="space-y-3 mb-5">
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Software Engineering</span>
                        </li>
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Cyber Security</span>
                        </li>
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Data Science & AI</span>
                        </li>
                    </ul>
                    <div class="bg-gradient-to-r from-yellow-50 to-blue-50 rounded-xl p-4 border-l-4 border-blue-900 shadow-sm">
                        <p class="text-sm text-gray-700">
                            <span class="font-bold text-yellow-600">Fast Growing</span> - Strong migration prospects
                        </p>
                    </div>
                </div>
            </div>

            <!-- Course 3: Engineering -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden group transform hover:-translate-y-2 border-t-4 border-blue-900">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=600&h=400&fit=crop" alt="Engineering" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/60 to-blue-900/40"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4 group-hover:rotate-12 group-hover:scale-110 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-yellow-300 transition-colors">Engineering</h3>
                        <p class="text-white/90 text-sm font-medium">Innovation & Infrastructure</p>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <ul class="space-y-3 mb-5">
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Civil & Mechanical</span>
                        </li>
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Electrical Engineering</span>
                        </li>
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Environmental & Telecom</span>
                        </li>
                    </ul>
                    <div class="bg-gradient-to-r from-blue-50 to-yellow-50 rounded-xl p-4 border-l-4 border-yellow-500 shadow-sm">
                        <p class="text-sm text-gray-700">
                            <span class="font-bold text-blue-900">Top Rated</span> - Global recognition
                        </p>
                    </div>
                </div>
            </div>

            <!-- Course 4: Healthcare -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden group transform hover:-translate-y-2 border-2 border-yellow-500">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=600&h=400&fit=crop" alt="Healthcare" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?w=600&h=400&fit=crop';">
                    <div class="absolute inset-0 bg-gradient-to-t from-yellow-500/90 via-yellow-500/60 to-yellow-500/40"></div>
                    <div class="absolute inset-0 p-6 flex items-start gap-4">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center flex-shrink-0 group-hover:rotate-12 group-hover:scale-110 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-white mb-2">
                                Healthcare
                            </h3>
                            <p class="text-white/90 text-sm font-medium">Nursing & Allied Health</p>
                        </div>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <ul class="space-y-3 mb-5">
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Nursing</span>
                        </li>
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Aged & Disability Care</span>
                        </li>
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Public Health</span>
                        </li>
                    </ul>
                    <div class="bg-gradient-to-r from-yellow-50 to-blue-50 rounded-xl p-4 border-l-4 border-blue-900 shadow-sm">
                        <p class="text-sm text-gray-700">
                            <span class="font-bold text-yellow-600">In Demand</span> - Excellent job security
                        </p>
                    </div>
                </div>
            </div>

            <!-- Course 5: Hospitality -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden group transform hover:-translate-y-2 border-t-4 border-blue-900">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=600&h=400&fit=crop" alt="Hospitality" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/60 to-blue-900/40"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4 group-hover:rotate-12 group-hover:scale-110 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-yellow-300 transition-colors">Hospitality</h3>
                        <p class="text-white/90 text-sm font-medium">Tourism & Culinary Arts</p>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <ul class="space-y-3 mb-5">
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Commercial Cookery</span>
                        </li>
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Hotel Management</span>
                        </li>
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Tourism & Events</span>
                        </li>
                    </ul>
                    <div class="bg-gradient-to-r from-blue-50 to-yellow-50 rounded-xl p-4 border-l-4 border-yellow-500 shadow-sm">
                        <p class="text-sm text-gray-700">
                            <span class="font-bold text-blue-900">Practical</span> - Hands-on training
                        </p>
                    </div>
                </div>
            </div>

            <!-- Course 6: Trade Courses -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden group transform hover:-translate-y-2 border-2 border-yellow-500">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=600&h=400&fit=crop" alt="Trade Courses" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-yellow-500/90 via-yellow-500/60 to-yellow-500/40"></div>
                    <div class="absolute inset-0 p-6 flex items-start gap-4">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center flex-shrink-0 group-hover:rotate-12 group-hover:scale-110 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-white mb-2">
                                Trade Courses
                            </h3>
                            <p class="text-white/90 text-sm font-medium">Hands-on Skills & PR Pathways</p>
                        </div>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <ul class="space-y-3 mb-5">
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Carpentry & Construction</span>
                        </li>
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Plumbing & Electrical</span>
                        </li>
                        <li class="flex items-center text-gray-700 group-hover:text-blue-900 transition-colors font-medium">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Automotive & Fabrication</span>
                        </li>
                    </ul>
                    <div class="bg-gradient-to-r from-yellow-50 to-blue-50 rounded-xl p-4 border-l-4 border-blue-900 shadow-sm">
                        <p class="text-sm text-gray-700">
                            <span class="font-bold text-yellow-600">PR Ready</span> - Strong migration pathways
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('courses') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-900 to-yellow-500 text-white px-10 py-4 rounded-lg font-bold text-lg shadow-lg hover:shadow-2xl hover:from-yellow-500 hover:to-blue-900 transition-all duration-300 transform hover:scale-105 hover:-translate-y-1">
                View All Courses
                <svg class="w-6 h-6 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
    
    <style>
        @keyframes blob {
            0%, 100% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
</section>

<!-- About Us Section -->
<section class="py-20 bg-gray-50 relative z-25">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-fade-in-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 animate-slide-in-left">
                    About 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-yellow-500 animate-gradient-text">
                        Bansal Education Group
                    </span>
                </h2>
                <div class="space-y-5 text-base md:text-lg text-gray-700 leading-relaxed">
                    <div class="bg-gradient-to-r from-blue-50 to-yellow-50 p-5 rounded-xl border-l-4 border-blue-900 animate-fade-in-up-delay">
                        <p>
                            Founded in <span class="font-bold text-blue-900">2018</span>, <span class="font-semibold text-blue-900">Bansal Education Group</span> provides <span class="font-semibold text-yellow-600">professional guidance and comprehensive support</span> in education and migration to Australia. Our team of qualified and experienced consultants delivers reliable advice and tailored solutions to meet the diverse needs of our clients.
                        </p>
                    </div>
                    
                    <div class="relative pl-5 border-l-4 border-yellow-500 animate-fade-in-up-delay">
                        <p>
                            Since our inception, we have consistently enrolled <span class="font-bold text-yellow-600">1,000+ students every year</span>, reflecting our strong outcomes, trusted processes, and client-first approach. The majority of our clients come from <span class="font-semibold text-blue-900">Asia and Southeast Asia</span>, giving us deep regional expertise and cultural understanding that enhances our advisory quality and student experience.
                        </p>
                    </div>
                    
                    <div class="bg-gradient-to-r from-blue-900 to-yellow-500 p-5 rounded-xl text-white shadow-lg animate-fade-in-up-delay">
                        <p>
                            With a strong focus on <span class="font-bold">integrity, professionalism, and client satisfaction</span>, we have built a solid reputation and set industry benchmarks over the years. Through a collaborative approach, we ensure each client receives the best possible opportunities via carefully customized pathways.
                        </p>
                    </div>
                    
                    <p class="text-center italic text-gray-600 font-medium animate-fade-in-up-delay">
                        At Bansal Education Group, we are committed to <span class="font-semibold text-blue-900">excellence, continuous improvement, and building long-term relationships</span> with our clients.
                    </p>
                </div>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 animate-slide-in-bottom">
                    <a href="{{ route('about') }}" class="bg-gradient-to-r from-blue-900 to-yellow-500 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:from-yellow-500 hover:to-blue-900 transition-all duration-300 shadow-lg hover:shadow-2xl hover:scale-110 transform animate-pulse-slow">
                        Learn More About Us
                    </a>
                    <a href="{{ route('contact') }}" class="border-2 border-blue-900 text-blue-900 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-900 hover:text-white transition-all duration-300 hover:scale-110 transform hover:shadow-xl">
                        Get in Touch
                    </a>
                </div>
            </div>
            <div class="relative animate-fade-in-up">
                <div class="bg-gradient-to-br from-blue-50 to-yellow-50 rounded-2xl p-8 shadow-2xl border-2 border-yellow-200 relative z-10 animate-card-float overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 opacity-5">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Students" class="w-full h-full object-cover rounded-full" onerror="this.style.display='none';">
                    </div>
                    <div class="relative z-10">
                        <div class="text-center mb-8">
                            <div class="w-24 h-24 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center mx-auto mb-6 animate-pulse-slow hover:rotate-360 transition-transform duration-500 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Team" class="w-full h-full object-cover" onerror="this.style.display='none'; this.parentElement.innerHTML='<svg class=\\'w-12 h-12 text-blue-900\\' fill=\\'none\\' stroke=\\'currentColor\\' viewBox=\\'0 0 24 24\\'><path stroke-linecap=\\'round\\' stroke-linejoin=\\'round\\' stroke-width=\\'2\\' d=\\'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z\\'/></svg>';">
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Our Impact</h3>
                            <p class="text-gray-600">Making a difference in students' lives</p>
                        </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-4 bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 hover:scale-110 animate-scale-in group">
                            <div class="text-3xl font-bold text-blue-900 mb-2 counter-animate group-hover:scale-125 transition-transform">10+</div>
                            <div class="text-xs text-gray-600 font-semibold">Years of Excellence</div>
                        </div>
                        <div class="text-center p-4 bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 hover:scale-110 animate-scale-in-delay group">
                            <div class="text-3xl font-bold text-yellow-600 mb-2 counter-animate group-hover:scale-125 transition-transform">10,000+</div>
                            <div class="text-xs text-gray-600 font-semibold">Students Helped</div>
                        </div>
                        <div class="text-center p-4 bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 hover:scale-110 animate-scale-in-delay-2 group">
                            <div class="text-3xl font-bold text-blue-900 mb-2 counter-animate group-hover:scale-125 transition-transform">95%</div>
                            <div class="text-xs text-gray-600 font-semibold">Success Rate</div>
                        </div>
                        <div class="text-center p-4 bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 hover:scale-110 animate-scale-in-delay-2 group">
                            <div class="text-3xl font-bold text-yellow-600 mb-2 counter-animate group-hover:scale-125 transition-transform">100+</div>
                            <div class="text-xs text-gray-600 font-semibold">Partner Universities</div>
                        </div>
                    </div>
                    
                    <div class="mt-6 pt-4 border-t-2 border-yellow-200">
                        <div class="flex items-center justify-center space-x-2 text-gray-700 group">
                            <svg class="w-5 h-5 text-yellow-600 group-hover:scale-125 group-hover:rotate-12 transition-all duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-semibold text-sm group-hover:text-blue-900 transition-colors">Trusted by Students Across Australia</span>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Decorative elements -->
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-yellow-500 rounded-full opacity-15 blur-2xl animate-float z-0"></div>
                <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-blue-900 rounded-full opacity-15 blur-2xl animate-float-reverse z-0"></div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-yellow-500 relative z-30 mt-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 animate-slide-in-bottom">
                Why Choose Bansal Education Group?
            </h2>
            <p class="text-xl text-white animate-fade-in-delay">
                Australia's most trusted education consultancy with proven results
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 stagger-animation">
            <div class="text-center fade-in hover:scale-110 transition-transform duration-300 animate-float">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2 counter-animate animate-bounce-slow">10+</div>
                <div class="text-white text-lg">Years of Educational Experience</div>
            </div>
            <div class="text-center fade-in hover:scale-110 transition-transform duration-300 animate-float-delay">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2 counter-animate animate-bounce-slow-delay">10,000+</div>
                <div class="text-white text-lg">Students Placed Successfully</div>
            </div>
            <div class="text-center fade-in hover:scale-110 transition-transform duration-300 animate-float-delay-2">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2 counter-animate animate-bounce-slow-delay-2">95%</div>
                <div class="text-white text-lg">University Admission Success Rate</div>
            </div>
            <div class="text-center fade-in hover:scale-110 transition-transform duration-300 animate-float-delay-3">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2 counter-animate animate-bounce-slow-delay-3">100+</div>
                <div class="text-white text-lg">Partnerships with Australian Universities</div>
            </div>
        </div>
    </div>
</section>
@endsection
