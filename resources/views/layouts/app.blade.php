<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Bansal Education Group - Excellence in Education')</title>
    <meta name="description" content="@yield('description', 'Bansal Education Group - Leading educational institution providing quality education and comprehensive learning programs for students of all ages.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=playfair-display:400,500,600,700" rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'navy': '#1e3a8a',
                        'navy-dark': '#1e40af',
                        'navy-light': '#3b82f6',
                        'navy-lighter': '#60a5fa',
                        'gold': '#f59e0b',
                        'gold-light': '#fbbf24',
                        'primary': '#1e3a8a',
                        'secondary': '#ffffff',
                        'accent': '#f59e0b',
                        'gradient-start': '#1e3a8a',
                        'gradient-end': '#1e40af'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        'serif': ['Playfair Display', 'ui-serif', 'Georgia', 'serif'],
                    }
                }
            }
        }
    </script>

    <!-- Additional Meta Tags -->
    <meta property="og:title" content="@yield('title', 'Bansal Education Group - Excellence in Education')">
    <meta property="og:description" content="@yield('description', 'Leading educational institution providing quality education and comprehensive learning programs.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
</head>
<body class="font-sans antialiased bg-white text-gray-900">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-36 py-2">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('logo.png') }}?v=3" alt="Bansal Education Group Logo" class="h-32 w-auto" style="height: 128px; width: auto; max-height: none;">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-navy border-b-2 border-gold' : 'text-gray-700 hover:text-navy hover:border-b-2 hover:border-gold' }} px-3 py-2 text-sm font-medium transition-colors duration-200">Home</a>
                        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-navy border-b-2 border-gold' : 'text-gray-700 hover:text-navy hover:border-b-2 hover:border-gold' }} px-3 py-2 text-sm font-medium transition-colors duration-200">About Us</a>
                        <a href="{{ route('courses') }}" class="{{ request()->routeIs('courses') ? 'text-navy border-b-2 border-gold' : 'text-gray-700 hover:text-navy hover:border-b-2 hover:border-gold' }} px-3 py-2 text-sm font-medium transition-colors duration-200">Courses</a>
                        <a href="#" class="text-gray-700 hover:text-navy hover:border-b-2 hover:border-gold px-3 py-2 text-sm font-medium transition-colors duration-200">Student Services</a>
                        <a href="#" class="text-gray-700 hover:text-navy hover:border-b-2 hover:border-gold px-3 py-2 text-sm font-medium transition-colors duration-200">Success Stories</a>
                        <a href="{{ url('/email') }}" class="{{ request()->is('email*') ? 'text-navy border-b-2 border-gold' : 'text-gray-700 hover:text-navy hover:border-b-2 hover:border-gold' }} px-3 py-2 text-sm font-medium transition-colors duration-200">Email</a>
                        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'bg-gradient-to-r from-blue-900 to-yellow-500 text-white border-2 border-yellow-500' : 'bg-gradient-to-r from-blue-900 to-yellow-500 text-white hover:from-yellow-500 hover:to-blue-900 border-2 border-yellow-500 hover:border-blue-900' }} px-6 py-2.5 text-sm font-bold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 transform">Contact Us</a>
                    </div>
                </div>


                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button bg-gray-100 inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-navy hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-navy" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Hamburger icon -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'bg-blue-50 text-navy' : 'text-gray-700 hover:text-navy hover:bg-gray-50' }} block px-3 py-2 text-base font-medium">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'bg-blue-50 text-navy' : 'text-gray-700 hover:text-navy hover:bg-gray-50' }} block px-3 py-2 text-base font-medium">About Us</a>
                <a href="{{ route('courses') }}" class="{{ request()->routeIs('courses') ? 'bg-blue-50 text-navy' : 'text-gray-700 hover:text-navy hover:bg-gray-50' }} block px-3 py-2 text-base font-medium">Courses</a>
                <a href="#" class="text-gray-700 hover:text-navy hover:bg-gray-50 block px-3 py-2 text-base font-medium">Student Services</a>
                <a href="#" class="text-gray-700 hover:text-navy hover:bg-gray-50 block px-3 py-2 text-base font-medium">Success Stories</a>
                <a href="{{ url('/email') }}" class="text-gray-700 hover:text-navy hover:bg-gray-50 block px-3 py-2 text-base font-medium">Email</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'bg-gradient-to-r from-blue-900 to-yellow-500 text-white border-2 border-yellow-500' : 'bg-gradient-to-r from-blue-900 to-yellow-500 text-white hover:from-yellow-500 hover:to-blue-900 border-2 border-yellow-500' }} block px-6 py-3 text-base font-bold rounded-lg shadow-lg text-center transition-all duration-300 hover:scale-105 transform">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('logo.png') }}?v=3" alt="Bansal Education Group Logo" class="h-20 w-auto" style="height: 80px; width: auto;">
                    </div>
                    <p class="text-gray-300 mb-4 max-w-md">
                        Empowering students with quality education and comprehensive learning programs. 
                        We are committed to nurturing young minds and preparing them for a successful future.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition-colors duration-200">About Us</a></li>
                        <li><a href="{{ url('/email') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Email</a></li>
                        <li><a href="{{ route('courses') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Our Courses</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Contact</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Admissions</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">News & Events</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                    <div class="space-y-2 text-gray-300">
                        <p class="flex items-center">
                            <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            123 Education Street, Learning City
                        </p>
                        <p class="flex items-center">
                            <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            +1 (555) 123-4567
                        </p>
                        <p class="flex items-center">
                            <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Info@bansaleducation.com.au
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-800">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm">
                        &copy; {{ date('Y') }} Bansal Education Group. All rights reserved.
                    </p>
                    <div class="mt-4 md:mt-0 flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors duration-200">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors duration-200">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for mobile menu -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>

