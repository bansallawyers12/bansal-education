@extends('layouts.app')

@section('title', "Courses - Bansal Education Group")
@section('description', "Explore popular Australian courses including Engineering, Business, Healthcare, IT, Hospitality, and Trade courses from top universities with expert guidance.")

@section('content')
<!-- Courses Hero Section -->
<section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6 animate-fade-in-up">
                Popular 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-yellow-500 animate-gradient-text">
                    Australian Courses
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up-delay">
                Australia is one of the world's leading study destinations, offering a wide range of courses that combine academic excellence, hands-on training, and strong career outcomes.
            </p>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-12 bg-gradient-to-br from-white to-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl p-8 md:p-10 shadow-lg border-l-4 border-yellow-500 animate-fade-in-up">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                </div>
                <div class="flex-1">
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                        Whether students want to build a professional career, gain practical trade skills, or explore specialised fields, <span class="font-semibold text-blue-900">Australia provides pathways for every learner</span>. Below are some of the most popular Australian courses, including in-demand trade courses.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Courses Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-12">
            <!-- Course 1: Business & Management -->
            <div class="bg-gradient-to-br from-blue-50 to-yellow-50 rounded-2xl p-8 md:p-10 shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 border-l-4 border-blue-900 animate-fade-in-up group">
                <div class="flex flex-col md:flex-row gap-6 items-start">
                    <div class="flex-shrink-0">
                        <div class="w-40 h-40 mx-auto mb-4 hover:scale-110 transition-transform duration-300 relative">
                            <div class="w-full h-full rounded-full overflow-hidden shadow-2xl ring-4 ring-yellow-500 ring-offset-4 ring-offset-white group-hover:ring-blue-900 transition-all">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&h=400&fit=crop" alt="Business & Management" class="w-full h-full object-cover" style="object-position: center;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            </div>
                            <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center ring-4 ring-yellow-500 ring-offset-4 ring-offset-white" style="display: none;">
                                <span class="text-white text-4xl font-bold">BM</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3 group-hover:text-blue-900 transition-colors duration-300">Business & Management</h3>
                        <p class="text-lg text-gray-700 mb-4 group-hover:text-gray-800 transition-colors duration-300">Business courses in Australia are highly sought after for their global relevance and strong employment prospects.</p>
                        
                        <div class="mb-4">
                            <h4 class="font-semibold text-blue-900 mb-3 text-lg">Popular Programs:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg hover:bg-yellow-50 hover:scale-105 hover:shadow-md transition-all duration-300 animate-fade-in">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Bachelor of Business / Commerce</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Master of Business Administration (MBA)</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Project Management</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Human Resource Management</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Marketing & Digital Marketing</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-lg p-4 border-l-4 border-yellow-500 shadow-md hover:shadow-lg hover:border-yellow-600 transition-all duration-300 group-hover:bg-yellow-50">
                            <p class="text-gray-700"><span class="font-semibold text-blue-900">Why choose it?</span> These programs prepare students for leadership, entrepreneurship, and corporate careers.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course 2: IT & Computer Science -->
            <div class="bg-gradient-to-br from-yellow-50 to-blue-50 rounded-2xl p-8 md:p-10 shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 border-l-4 border-yellow-500 animate-fade-in-up-delay group">
                <div class="flex flex-col md:flex-row gap-6 items-start">
                    <div class="flex-shrink-0">
                        <div class="w-40 h-40 mx-auto mb-4 hover:scale-110 transition-transform duration-300 relative">
                            <div class="w-full h-full rounded-full overflow-hidden shadow-2xl ring-4 ring-yellow-500 ring-offset-4 ring-offset-white group-hover:ring-blue-900 transition-all">
                                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400&h=400&fit=crop" alt="Information Technology" class="w-full h-full object-cover" style="object-position: center;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            </div>
                            <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-yellow-500 to-blue-900 rounded-full flex items-center justify-center ring-4 ring-yellow-500 ring-offset-4 ring-offset-white" style="display: none;">
                                <span class="text-white text-4xl font-bold">IT</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3 group-hover:text-blue-900 transition-colors duration-300">Information Technology (IT) & Computer Science</h3>
                        <p class="text-lg text-gray-700 mb-4 group-hover:text-gray-800 transition-colors duration-300">With rapid advancements in technology, IT is one of the fastest-growing industries in Australia.</p>
                        
                        <div class="mb-4">
                            <h4 class="font-semibold text-blue-900 mb-3 text-lg">Popular Programs:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg hover:bg-yellow-50 hover:scale-105 hover:shadow-md transition-all duration-300 animate-fade-in">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Software Engineering</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Cyber Security</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Data Science & Analytics</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Artificial Intelligence (AI)</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Networking & Cloud Computing</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-lg p-4 border-l-4 border-yellow-500 shadow-md hover:shadow-lg hover:border-yellow-600 transition-all duration-300 group-hover:bg-yellow-50">
                            <p class="text-gray-700"><span class="font-semibold text-blue-900">Why choose it?</span> High job demand, excellent salaries, and strong migration prospects.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course 3: Health & Allied Health -->
            <div class="bg-gradient-to-br from-blue-50 to-yellow-50 rounded-2xl p-8 md:p-10 shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 border-l-4 border-blue-900 animate-fade-in-up-delay group">
                <div class="flex flex-col md:flex-row gap-6 items-start">
                    <div class="flex-shrink-0">
                        <div class="w-40 h-40 mx-auto mb-4 hover:scale-110 transition-transform duration-300 relative">
                            <div class="w-full h-full rounded-full overflow-hidden shadow-2xl ring-4 ring-yellow-500 ring-offset-4 ring-offset-white group-hover:ring-blue-900 transition-all">
                                <img src="https://images.unsplash.com/photo-1551601651-2a8555f1a136?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=400&q=80" alt="Health & Allied Health" class="w-full h-full object-cover" style="object-position: center;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            </div>
                            <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center ring-4 ring-yellow-500 ring-offset-4 ring-offset-white" style="display: none;">
                                <span class="text-white text-4xl font-bold">HA</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3 group-hover:text-blue-900 transition-colors duration-300">Health & Allied Health</h3>
                        <p class="text-lg text-gray-700 mb-4 group-hover:text-gray-800 transition-colors duration-300">Australia is known for its high-quality healthcare training.</p>
                        
                        <div class="mb-4">
                            <h4 class="font-semibold text-blue-900 mb-3 text-lg">Popular Programs:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg hover:bg-yellow-50 hover:scale-105 hover:shadow-md transition-all duration-300 animate-fade-in">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Nursing</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Aged Care</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Disability Support</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Public Health</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Medical Laboratory Science</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-lg p-4 border-l-4 border-yellow-500 shadow-md hover:shadow-lg hover:border-yellow-600 transition-all duration-300 group-hover:bg-yellow-50">
                            <p class="text-gray-700"><span class="font-semibold text-blue-900">Why choose it?</span> Strong employment opportunities and a highly respected global qualification.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course 4: Engineering -->
            <div class="bg-gradient-to-br from-yellow-50 to-blue-50 rounded-2xl p-8 md:p-10 shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 border-l-4 border-yellow-500 animate-fade-in-up-delay group">
                <div class="flex flex-col md:flex-row gap-6 items-start">
                    <div class="flex-shrink-0">
                        <div class="w-40 h-40 mx-auto mb-4 hover:scale-110 transition-transform duration-300 relative">
                            <div class="w-full h-full rounded-full overflow-hidden shadow-2xl ring-4 ring-yellow-500 ring-offset-4 ring-offset-white group-hover:ring-blue-900 transition-all">
                                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=400&h=400&fit=crop" alt="Engineering" class="w-full h-full object-cover" style="object-position: center;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            </div>
                            <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-yellow-500 to-blue-900 rounded-full flex items-center justify-center ring-4 ring-yellow-500 ring-offset-4 ring-offset-white" style="display: none;">
                                <span class="text-white text-4xl font-bold">EN</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3 group-hover:text-blue-900 transition-colors duration-300">Engineering</h3>
                        <p class="text-lg text-gray-700 mb-4 group-hover:text-gray-800 transition-colors duration-300">Engineering remains one of the top fields with wide specialisations.</p>
                        
                        <div class="mb-4">
                            <h4 class="font-semibold text-blue-900 mb-3 text-lg">Popular Programs:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg hover:bg-yellow-50 hover:scale-105 hover:shadow-md transition-all duration-300 animate-fade-in">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Civil Engineering</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Mechanical Engineering</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Electrical Engineering</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Telecommunications Engineering</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Environmental Engineering</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-lg p-4 border-l-4 border-yellow-500 shadow-md hover:shadow-lg hover:border-yellow-600 transition-all duration-300 group-hover:bg-yellow-50">
                            <p class="text-gray-700"><span class="font-semibold text-blue-900">Why choose it?</span> High demand across construction, energy, and infrastructure industries.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course 5: Hospitality & Tourism -->
            <div class="bg-gradient-to-br from-blue-50 to-yellow-50 rounded-2xl p-8 md:p-10 shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 border-l-4 border-blue-900 animate-fade-in-up-delay group">
                <div class="flex flex-col md:flex-row gap-6 items-start">
                    <div class="flex-shrink-0">
                        <div class="w-40 h-40 mx-auto mb-4 hover:scale-110 transition-transform duration-300 relative">
                            <div class="w-full h-full rounded-full overflow-hidden shadow-2xl ring-4 ring-yellow-500 ring-offset-4 ring-offset-white group-hover:ring-blue-900 transition-all">
                                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=400&h=400&fit=crop" alt="Hospitality & Tourism" class="w-full h-full object-cover" style="object-position: center;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            </div>
                            <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center ring-4 ring-yellow-500 ring-offset-4 ring-offset-white" style="display: none;">
                                <span class="text-white text-4xl font-bold">HT</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3 group-hover:text-blue-900 transition-colors duration-300">Hospitality & Tourism</h3>
                        <p class="text-lg text-gray-700 mb-4 group-hover:text-gray-800 transition-colors duration-300">Australia's hospitality industry is vibrant and globally recognised.</p>
                        
                        <div class="mb-4">
                            <h4 class="font-semibold text-blue-900 mb-3 text-lg">Popular Programs:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg hover:bg-yellow-50 hover:scale-105 hover:shadow-md transition-all duration-300 animate-fade-in">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Commercial Cookery</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Hospitality Management</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Tourism & Hotel Management</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-white p-3 rounded-lg">
                                    <svg class="w-5 h-5 text-yellow-600 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Bakery & Patisserie</span>
                    </div>
                </div>
            </div>

                        <div class="bg-white rounded-lg p-4 border-l-4 border-yellow-500 shadow-md hover:shadow-lg hover:border-yellow-600 transition-all duration-300 group-hover:bg-yellow-50">
                            <p class="text-gray-700"><span class="font-semibold text-blue-900">Why choose it?</span> Hands-on training and strong job opportunities, especially in major cities and tourist areas.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trade Courses Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 animate-slide-in-bottom">Popular Trade Courses (VET Courses)</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-delay">
                Trade courses are ideal for students who prefer practical, hands-on careers with excellent job prospects and pathways to permanent residency.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Trade 1: Automotive -->
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 border-t-4 border-blue-900 animate-fade-in-up group">
                <div class="w-32 h-32 mx-auto mb-4 hover:scale-110 transition-transform duration-300 relative">
                    <div class="w-full h-full rounded-full overflow-hidden shadow-xl ring-4 ring-yellow-500 ring-offset-2 ring-offset-white group-hover:ring-blue-900 transition-all">
                        <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=400&h=400&fit=crop" alt="Automotive" class="w-full h-full object-cover" style="object-position: center;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    </div>
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center ring-4 ring-yellow-500 ring-offset-2 ring-offset-white" style="display: none;">
                        <span class="text-white text-3xl font-bold">AU</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-blue-900 transition-colors duration-300">Automotive</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Automotive Servicing
                    </li>
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Light Vehicle Mechanical Technology
                    </li>
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Automotive Electrical Technology
                    </li>
                </ul>
            </div>

            <!-- Trade 2: Carpentry & Construction -->
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 border-t-4 border-yellow-500 animate-fade-in-up-delay group">
                <div class="w-32 h-32 mx-auto mb-4 hover:scale-110 transition-transform duration-300 relative">
                    <div class="w-full h-full rounded-full overflow-hidden shadow-xl ring-4 ring-yellow-500 ring-offset-2 ring-offset-white group-hover:ring-blue-900 transition-all">
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=400&h=400&fit=crop" alt="Carpentry & Construction" class="w-full h-full object-cover" style="object-position: center;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    </div>
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-yellow-500 to-blue-900 rounded-full flex items-center justify-center ring-4 ring-yellow-500 ring-offset-2 ring-offset-white" style="display: none;">
                        <span class="text-white text-3xl font-bold">CC</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-blue-900 transition-colors duration-300">Carpentry & Construction</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Carpentry
                    </li>
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Building & Construction
                    </li>
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Wall & Floor Tiling
                    </li>
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Painting & Decorating
                    </li>
                </ul>
            </div>

            <!-- Trade 3: Plumbing -->
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 border-t-4 border-blue-900 animate-fade-in-up-delay group">
                <div class="w-32 h-32 mx-auto mb-4 hover:scale-110 transition-transform duration-300 relative">
                    <div class="w-full h-full rounded-full overflow-hidden shadow-xl ring-4 ring-yellow-500 ring-offset-2 ring-offset-white group-hover:ring-blue-900 transition-all">
                        <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=400&h=400&fit=crop" alt="Plumbing" class="w-full h-full object-cover" style="object-position: center;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    </div>
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center ring-4 ring-yellow-500 ring-offset-2 ring-offset-white" style="display: none;">
                        <span class="text-white text-3xl font-bold">PL</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-blue-900 transition-colors duration-300">Plumbing</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Plumbing
                    </li>
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Gas Fitting
                    </li>
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Pipefitting
                    </li>
                </ul>
            </div>

            <!-- Trade 4: Electrical Trades -->
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 border-t-4 border-yellow-500 animate-fade-in-up-delay group">
                <div class="w-32 h-32 mx-auto mb-4 hover:scale-110 transition-transform duration-300 relative">
                    <div class="w-full h-full rounded-full overflow-hidden shadow-xl ring-4 ring-yellow-500 ring-offset-2 ring-offset-white group-hover:ring-blue-900 transition-all">
                        <img src="https://images.unsplash.com/photo-1581092921461-eab62e97a780?w=400&h=400&fit=crop" alt="Electrical Trades" class="w-full h-full object-cover" style="object-position: center;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    </div>
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-yellow-500 to-blue-900 rounded-full flex items-center justify-center ring-4 ring-yellow-500 ring-offset-2 ring-offset-white" style="display: none;">
                        <span class="text-white text-3xl font-bold">EL</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-blue-900 transition-colors duration-300">Electrical Trades</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Electrotechnology Electrician
                    </li>
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Industrial Electrical Technology
                    </li>
                </ul>
            </div>

            <!-- Trade 5: Engineering Trades -->
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 border-t-4 border-blue-900 animate-fade-in-up-delay group">
                <div class="w-32 h-32 mx-auto mb-4 hover:scale-110 transition-transform duration-300 relative">
                    <div class="w-full h-full rounded-full overflow-hidden shadow-xl ring-4 ring-yellow-500 ring-offset-2 ring-offset-white group-hover:ring-blue-900 transition-all">
                        <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=400&h=400&fit=crop" alt="Engineering Trades" class="w-full h-full object-cover" style="object-position: center;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    </div>
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-900 to-yellow-500 rounded-full flex items-center justify-center ring-4 ring-yellow-500 ring-offset-2 ring-offset-white" style="display: none;">
                        <span class="text-white text-3xl font-bold">ET</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-blue-900 transition-colors duration-300">Engineering Trades</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Fabrication (Welding)
                    </li>
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Mechanical Fitting
                    </li>
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Metal Machining
                    </li>
                </ul>
            </div>

            <!-- Trade 6: Hair & Beauty -->
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 border-t-4 border-yellow-500 animate-fade-in-up-delay group">
                <div class="w-32 h-32 mx-auto mb-4 hover:scale-110 transition-transform duration-300 relative">
                    <div class="w-full h-full rounded-full overflow-hidden shadow-xl ring-4 ring-yellow-500 ring-offset-2 ring-offset-white group-hover:ring-blue-900 transition-all">
                        <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=400&h=400&fit=crop" alt="Hair & Beauty" class="w-full h-full object-cover" style="object-position: center;" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    </div>
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-yellow-500 to-blue-900 rounded-full flex items-center justify-center ring-4 ring-yellow-500 ring-offset-2 ring-offset-white" style="display: none;">
                        <span class="text-white text-3xl font-bold">HB</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-blue-900 transition-colors duration-300">Hair & Beauty</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Hairdressing
                    </li>
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Barbering
                    </li>
                    <li class="flex items-center hover:text-blue-900 hover:translate-x-2 transition-all duration-300">
                        <svg class="w-4 h-4 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Beauty Therapy
                    </li>
                </ul>
            </div>
        </div>

        <!-- Why Trade Courses Section -->
        <div class="bg-gradient-to-r from-blue-900 to-yellow-500 rounded-2xl p-8 md:p-10 text-white shadow-xl animate-fade-in-up hover:shadow-2xl transition-all duration-500">
            <h3 class="text-2xl md:text-3xl font-bold mb-6 text-center animate-bounce-slow">Why Trade Courses?</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center group hover:scale-110 transition-all duration-300 animate-fade-in-up">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 hover:scale-125 hover:rotate-360 transition-all duration-700 group-hover:shadow-lg animate-pulse-slow">
                        <svg class="w-8 h-8 text-blue-900 group-hover:text-yellow-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <p class="font-semibold text-lg group-hover:text-yellow-200 transition-colors duration-300">High demand across Australia</p>
                </div>
                <div class="text-center group hover:scale-110 transition-all duration-300 animate-fade-in-up-delay">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 hover:scale-125 hover:rotate-360 transition-all duration-700 group-hover:shadow-lg animate-pulse-slow">
                        <svg class="w-8 h-8 text-blue-900 group-hover:text-yellow-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <p class="font-semibold text-lg group-hover:text-yellow-200 transition-colors duration-300">Practical, skill-based learning</p>
                </div>
                <div class="text-center group hover:scale-110 transition-all duration-300 animate-fade-in-up-delay">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 hover:scale-125 hover:rotate-360 transition-all duration-700 group-hover:shadow-lg animate-pulse-slow">
                        <svg class="w-8 h-8 text-blue-900 group-hover:text-yellow-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <p class="font-semibold text-lg group-hover:text-yellow-200 transition-colors duration-300">Strong job security</p>
                </div>
                <div class="text-center group hover:scale-110 transition-all duration-300 animate-fade-in-up-delay">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 hover:scale-125 hover:rotate-360 transition-all duration-700 group-hover:shadow-lg animate-pulse-slow">
                        <svg class="w-8 h-8 text-blue-900 group-hover:text-yellow-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <p class="font-semibold text-lg group-hover:text-yellow-200 transition-colors duration-300">Often linked to PR pathways</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-900 to-yellow-500 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 animate-fade-in-up animate-bounce-slow">
            Need Help Choosing the Right Course?
        </h2>
        <p class="text-xl text-white mb-8 max-w-3xl mx-auto animate-fade-in-up-delay">
            Our expert consultants can help you find the perfect course that aligns with your career goals and interests.
        </p>
        <a href="{{ route('contact') }}" class="bg-white text-blue-900 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-2xl hover:scale-110 transform inline-block animate-pulse-slow hover:animate-none hover:bg-gradient-to-r hover:from-yellow-100 hover:to-blue-50 group">
            <span class="group-hover:scale-110 inline-block transition-transform duration-300">Get Free Course Consultation</span>
        </a>
    </div>
</section>
@endsection
