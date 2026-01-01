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
                        <a href="/services.php" class="{{ request()->is('services*') ? 'text-navy border-b-2 border-gold' : 'text-gray-700 hover:text-navy hover:border-b-2 hover:border-gold' }} px-3 py-2 text-sm font-medium transition-colors duration-200">Student Services</a>
                        <a href="/testimonials.php" class="{{ request()->is('testimonials*') ? 'text-navy border-b-2 border-gold' : 'text-gray-700 hover:text-navy hover:border-b-2 hover:border-gold' }} px-3 py-2 text-sm font-medium transition-colors duration-200">Success Stories</a>
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
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'bg-gradient-to-r from-blue-900 to-yellow-500 text-white border-2 border-yellow-500' : 'bg-gradient-to-r from-blue-900 to-yellow-500 text-white hover:from-yellow-500 hover:to-blue-900 border-2 border-yellow-500' }} block px-6 py-3 text-base font-bold rounded-lg shadow-lg text-center transition-all duration-300 hover:scale-105 transform">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Floating Call Button -->
    <a href="tel:0396021330" class="fixed bottom-4 right-4 md:bottom-6 md:right-6 z-50 bg-gradient-to-r from-blue-900 to-yellow-500 text-white rounded-full p-3 md:p-4 shadow-2xl hover:shadow-3xl transform hover:scale-110 transition-all duration-300 animate-bounce-slow group" aria-label="Call us now at 03 9602 1330">
        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
        </svg>
        <!-- Tooltip on hover -->
        <span class="absolute right-full mr-3 top-1/2 transform -translate-y-1/2 bg-gray-900 text-white text-sm font-semibold px-3 py-2 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none hidden md:block">
            Call Now: 03 9602 1330
            <span class="absolute left-full top-1/2 transform -translate-y-1/2 border-4 border-transparent border-l-gray-900"></span>
        </span>
    </a>

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
                        <li><a href="{{ route('courses') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Our Courses</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Student Services</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Contact</a></li>
                        <li><a href="{{ route('testimonials') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Success Stories</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                    <div class="space-y-2 text-gray-300">
                        <p class="flex items-start">
                            <svg class="h-5 w-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>Next to Flight Center<br>Level 8/278 Collins Street<br>Melbourne VIC 3000<br>Australia</span>
                        </p>
                        <p class="flex items-center">
                            <svg class="h-5 w-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="tel:0396021330" class="hover:text-white transition-colors">03 9602 1330</a>
                        </p>
                        <p class="flex items-center">
                            <svg class="h-5 w-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:Info@bansaleducation.com.au" class="hover:text-white transition-colors break-all">Info@bansaleducation.com.au</a>
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

    <!-- JavaScript -->
    <script>
        // Mobile menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                    // Add rotation animation to hamburger icon
                    this.classList.toggle('rotate-90');
                });
            }

            // Enhanced scroll effects
            window.addEventListener('scroll', function() {
                const nav = document.querySelector('nav');
                if (nav) {
                    if (window.scrollY > 100) {
                        nav.classList.add('shadow-xl', 'backdrop-blur-sm', 'bg-white/95');
                    } else {
                        nav.classList.remove('shadow-xl', 'backdrop-blur-sm', 'bg-white/95');
                    }
                }

                // Fade in animation for elements
                const elements = document.querySelectorAll('.fade-in');
                elements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;
                    
                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add('animate-fade-in');
                    }
                });

                // Slide in animation for cards
                const cards = document.querySelectorAll('.slide-in');
                cards.forEach(card => {
                    const cardTop = card.getBoundingClientRect().top;
                    const cardVisible = 200;
                    
                    if (cardTop < window.innerHeight - cardVisible) {
                        card.classList.add('animate-slide-in');
                    }
                });
            });

            // Counter animation for statistics
            const counters = document.querySelectorAll('[class*="text-4xl"], [class*="text-5xl"], [class*="text-2xl"], [class*="text-3xl"]');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const originalText = counter.textContent;
                        const target = parseInt(originalText.replace(/\D/g, ''));
                        
                        // Only animate if we have a valid number
                        if (!isNaN(target) && target > 0) {
                            const hasPlus = originalText.includes('+');
                            const hasPercent = originalText.includes('%');
                            const increment = target / 100;
                            let current = 0;
                            
                            const updateCounter = () => {
                                if (current < target) {
                                    current += increment;
                                    counter.textContent = Math.ceil(current) + (hasPlus ? '+' : '') + (hasPercent ? '%' : '');
                                    requestAnimationFrame(updateCounter);
                                } else {
                                    counter.textContent = target + (hasPlus ? '+' : '') + (hasPercent ? '%' : '');
                                }
                            };
                            
                            updateCounter();
                        }
                        observer.unobserve(counter);
                    }
                });
            });
            
            counters.forEach(counter => {
                observer.observe(counter);
            });
        });
    </script>

    <!-- Additional CSS for animations -->
    <style>
        /* Fade in animation */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .animate-fade-in {
            opacity: 1;
            transform: translateY(0);
        }

        /* Slide in animation */
        .slide-in {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s ease;
        }

        .animate-slide-in {
            opacity: 1;
            transform: translateX(0);
        }

        /* Pulse animation for important elements */
        .pulse-slow {
            animation: pulse 3s infinite;
        }

        /* Bounce animation for call-to-action buttons */
        .bounce-hover:hover {
            animation: bounce 0.6s ease;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        /* Float animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .animate-float-slow {
            animation: float 4s ease-in-out infinite;
        }

        .animate-float-reverse {
            animation: float 3s ease-in-out infinite reverse;
        }

        .animate-float-delay {
            animation: float 3s ease-in-out infinite;
            animation-delay: 0.5s;
        }

        .animate-float-delay-2 {
            animation: float 3s ease-in-out infinite;
            animation-delay: 1s;
        }

        .animate-float-delay-3 {
            animation: float 3s ease-in-out infinite;
            animation-delay: 1.5s;
        }

        /* Fade in up */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animate-fade-in-up-delay {
            animation: fadeInUp 0.8s ease-out 0.3s forwards;
            opacity: 0;
        }

        /* Slide in from left */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .slide-in-left {
            animation: slideInLeft 0.8s ease-out forwards;
        }

        /* Slide in from bottom */
        @keyframes slideInBottom {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slide-in-bottom {
            animation: slideInBottom 0.8s ease-out forwards;
        }

        /* Scale in */
        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-scale-in {
            animation: scaleIn 0.6s ease-out forwards;
        }

        .animate-scale-in-delay {
            animation: scaleIn 0.6s ease-out 0.2s forwards;
            opacity: 0;
        }

        .animate-scale-in-delay-2 {
            animation: scaleIn 0.6s ease-out 0.4s forwards;
            opacity: 0;
        }

        /* Gradient text animation */
        @keyframes gradientText {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .animate-gradient-text {
            background-size: 200% 200%;
            animation: gradientText 3s ease infinite;
        }

        /* Slow bounce */
        @keyframes bounceSlow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .animate-bounce-slow {
            animation: bounceSlow 2s ease-in-out infinite;
        }

        .animate-bounce-slow-delay {
            animation: bounceSlow 2s ease-in-out 0.5s infinite;
        }

        .animate-bounce-slow-delay-2 {
            animation: bounceSlow 2s ease-in-out 1s infinite;
        }

        .animate-bounce-slow-delay-3 {
            animation: bounceSlow 2s ease-in-out 1.5s infinite;
        }

        /* Slow spin */
        @keyframes spinSlow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .animate-spin-slow {
            animation: spinSlow 8s linear infinite;
        }

        /* Card float */
        @keyframes cardFloat {
            0%, 100% { transform: translateY(0px) rotate(3deg); }
            50% { transform: translateY(-10px) rotate(0deg); }
        }

        .animate-card-float {
            animation: cardFloat 4s ease-in-out infinite;
        }

        /* Card hover animation */
        @keyframes cardHover {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.02); }
        }

        .animate-card-hover {
            animation: cardHover 3s ease-in-out infinite;
        }

        /* Fade in with delay */
        .animate-fade-in {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .animate-fade-in-delay {
            animation: fadeInUp 0.6s ease-out 0.3s forwards;
            opacity: 0;
        }

        /* Pulse slow */
        @keyframes pulseSlow {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        .animate-pulse-slow {
            animation: pulseSlow 2s ease-in-out infinite;
        }

        /* Counter animation */
        .counter-animate {
            animation: scaleIn 0.8s ease-out forwards;
        }

        /* Staggered animation for cards */
        .stagger-animation > * {
            opacity: 0;
            transform: translateY(20px);
            animation: staggerFadeIn 0.6s ease forwards;
        }

        .stagger-animation > *:nth-child(1) { animation-delay: 0.1s; }
        .stagger-animation > *:nth-child(2) { animation-delay: 0.2s; }
        .stagger-animation > *:nth-child(3) { animation-delay: 0.3s; }
        .stagger-animation > *:nth-child(4) { animation-delay: 0.4s; }

        @keyframes staggerFadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</body>
</html>

