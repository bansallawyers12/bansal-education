@extends('layouts.app')

@section('title', 'About Us - Bansal Education Group')
@section('description', 'Learn about Bansal Education Group\'s mission, values, and commitment to providing quality education. Discover our story and what makes us different.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                About5555
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                    Bansal Education Group
                </span>
            </h1>
            <p class="mt-6 text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                Empowering students with quality education and comprehensive learning programs 
                that prepare them for a successful future in an ever-changing world.
            </p>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Our Story
                </h2>
                <p class="text-lg text-gray-600 mb-6">
                    Founded in 2008, Bansal Education Group began with a simple yet powerful vision: 
                    to provide accessible, high-quality education that empowers students to reach their 
                    full potential. What started as a small tutoring center has grown into a comprehensive 
                    educational institution serving thousands of students.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    Over the years, we have continuously evolved our teaching methodologies, 
                    embraced technological advancements, and expanded our course offerings to meet 
                    the diverse needs of our growing student community. Our commitment to excellence 
                    and student success remains unwavering.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="text-center sm:text-left">
                        <div class="text-3xl font-bold text-blue-600">10+</div>
                        <div class="text-gray-600">Years of Excellence</div>
                    </div>
                    <div class="text-center sm:text-left">
                        <div class="text-3xl font-bold text-purple-600">5000+</div>
                        <div class="text-gray-600">Students Served</div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-blue-100 to-purple-100 rounded-2xl p-8">
                    <div class="text-center">
                        <div class="w-24 h-24 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Quality Education</h3>
                        <p class="text-gray-600">Our commitment to providing the highest quality education has never wavered.</p>
                    </div>
                </div>
                <!-- Decorative elements -->
                <div class="absolute -top-4 -right-4 w-20 h-20 bg-yellow-400 rounded-full opacity-20"></div>
                <div class="absolute -bottom-4 -left-4 w-28 h-28 bg-pink-400 rounded-full opacity-20"></div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Our Mission & Vision
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Guiding principles that drive our commitment to educational excellence
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Mission -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h3>
                <p class="text-gray-600 leading-relaxed">
                    To provide accessible, high-quality education that empowers students to develop critical thinking skills, 
                    creativity, and a lifelong love for learning. We are committed to creating an inclusive environment 
                    where every student can thrive and reach their full potential.
                </p>
            </div>

            <!-- Vision -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-purple-700 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h3>
                <p class="text-gray-600 leading-relaxed">
                    To be the leading educational institution that transforms lives through innovative teaching methods, 
                    cutting-edge technology, and a commitment to academic excellence. We envision a future where every 
                    student has access to quality education that prepares them for success in an ever-evolving world.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Our Core Values
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                The principles that guide everything we do at Bansal Education Group
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Value 1 -->
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Excellence</h3>
                <p class="text-gray-600">
                    We strive for the highest standards in everything we do, from curriculum design to student support.
                </p>
            </div>

            <!-- Value 2 -->
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-green-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Integrity</h3>
                <p class="text-gray-600">
                    We maintain the highest ethical standards and transparency in all our interactions and decisions.
                </p>
            </div>

            <!-- Value 3 -->
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-purple-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Passion</h3>
                <p class="text-gray-600">
                    Our love for teaching and learning drives us to continuously improve and innovate.
                </p>
            </div>

            <!-- Value 4 -->
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-gradient-to-r from-orange-600 to-orange-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Innovation</h3>
                <p class="text-gray-600">
                    We embrace new technologies and teaching methods to enhance the learning experience.
                </p>
            </div>

            <!-- Value 5 -->
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Compassion</h3>
                <p class="text-gray-600">
                    We care deeply about our students' well-being and success, both academically and personally.
                </p>
            </div>

            <!-- Value 6 -->
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-gradient-to-r from-indigo-600 to-indigo-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Dedication</h3>
                <p class="text-gray-600">
                    We are committed to providing the best possible education and support to every student.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Meet Our Leadership Team
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Experienced educators and administrators dedicated to student success
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="h-64 bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                    <div class="w-32 h-32 bg-white rounded-full flex items-center justify-center">
                        <span class="text-4xl font-bold text-blue-600">DR</span>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Dr. Rajesh Bansal</h3>
                    <p class="text-blue-600 font-medium mb-2">Founder & Director</p>
                    <p class="text-gray-600 text-sm">
                        Ph.D. in Education with over 20 years of experience in educational leadership and curriculum development.
                    </p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="h-64 bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center">
                    <div class="w-32 h-32 bg-white rounded-full flex items-center justify-center">
                        <span class="text-4xl font-bold text-purple-600">PS</span>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Prof. Sarah Patel</h3>
                    <p class="text-purple-600 font-medium mb-2">Academic Director</p>
                    <p class="text-gray-600 text-sm">
                        Master's in Mathematics Education with 15 years of experience in innovative teaching methodologies.
                    </p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="h-64 bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center">
                    <div class="w-32 h-32 bg-white rounded-full flex items-center justify-center">
                        <span class="text-4xl font-bold text-green-600">MJ</span>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Mr. Michael Johnson</h3>
                    <p class="text-green-600 font-medium mb-2">Head of Science Department</p>
                    <p class="text-gray-600 text-sm">
                        Ph.D. in Physics with expertise in laboratory-based learning and scientific research methodologies.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Ready to Join Our Community?
        </h2>
        <p class="text-xl text-blue-100 mb-8">
            Become part of a learning community that values excellence, innovation, and student success.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition-all duration-200 shadow-lg hover:shadow-xl">
                Get Started Today
            </a>
            <a href="{{ route('courses') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-blue-600 transition-all duration-200">
                Explore Our Courses
            </a>
        </div>
    </div>
</section>
@endsection

