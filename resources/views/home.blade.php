@extends('layouts.app')

@section('content')
    {{-- Navigation --}}
    <nav class="fixed top-0 left-0 right-0 z-50 bg-[#FDFBF7]/95 backdrop-blur-sm border-b border-[#E8E6E0] transition-all duration-300" id="navbar">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <a href="/" class="text-2xl font-serif font-semibold text-[#1B1B18] transition-opacity hover:opacity-80" style="font-family: 'Cormorant Garamond', serif;">
                    Logo
                </a>
                <div class="hidden lg:flex items-center gap-8">
                    <a href="/" class="text-sm font-medium text-[#1B1B18] hover:text-[#8B734C] transition-colors">Home</a>
                    <a href="/resort" class="text-sm font-medium text-[#1B1B18] hover:text-[#8B734C] transition-colors">Resort</a>
                    <a href="/cafe" class="text-sm font-medium text-[#1B1B18] hover:text-[#8B734C] transition-colors">Cafe & Resto</a>
                    <div class="relative group">
                        <a href="/booking" class="text-sm font-medium text-[#1B1B18] hover:text-[#8B734C] transition-colors flex items-center gap-1">
                            Book
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                    </div>
                    <a href="/booking" class="px-6 py-2.5 bg-[#8B734C] text-white rounded-lg font-medium hover:bg-[#7A6340] transition-all transform hover:scale-105">
                        Reserve
                    </a>
                </div>
                <button class="lg:hidden text-[#1B1B18]" id="mobile-menu-btn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        {{-- Mobile Menu --}}
        <div class="lg:hidden hidden bg-[#FDFBF7] border-t border-[#E8E6E0]" id="mobile-menu">
            <div class="container mx-auto px-4 py-4 space-y-3">
                <a href="/" class="block text-sm font-medium text-[#1B1B18] hover:text-[#8B734C] transition-colors">Home</a>
                <a href="/resort" class="block text-sm font-medium text-[#1B1B18] hover:text-[#8B734C] transition-colors">Resort</a>
                <a href="/cafe" class="block text-sm font-medium text-[#1B1B18] hover:text-[#8B734C] transition-colors">Cafe & Resto</a>
                <a href="/booking" class="block text-sm font-medium text-[#1B1B18] hover:text-[#8B734C] transition-colors">Book</a>
                <a href="/booking" class="block px-6 py-2.5 bg-[#8B734C] text-white rounded-lg font-medium text-center">Reserve</a>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden" id="hero-section">
        {{-- Background Image with Overlay --}}
        <div class="absolute inset-0 z-0" id="hero-background">
            <div class="w-full h-full bg-gradient-to-br from-[#8B734C] via-[#7A6340] to-[#6B5635] opacity-90"></div>
            <div class="absolute inset-0 bg-cover bg-center mix-blend-overlay opacity-30" style="background-image: url('{{ asset('HalamanPhoto.jpg') }}');"></div>
        </div>
        
        {{-- Video Player (Hidden by default) --}}
        <div id="hero-video-container" class="absolute inset-0 z-20 hidden">
            <video id="hero-video" class="w-full h-full object-cover" controls>
                <source src="{{ asset('VieraVidio.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            {{-- Close Video Button --}}
            <button id="close-video-btn" class="absolute top-4 right-4 z-30 bg-black/50 hover:bg-black/70 text-white rounded-full p-3 transition-all transform hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        {{-- Content --}}
        <div class="relative z-10 container mx-auto px-4 lg:px-8 text-center max-w-4xl" id="hero-content">
            <div class="animate-fade-in-up">
                <p class="text-sm uppercase tracking-wider text-white/80 mb-4 animate-fade-in">WELCOME</p>
                <h1 class="text-5xl lg:text-7xl xl:text-8xl font-serif font-bold text-white mb-6 leading-tight animate-fade-in-up-delay" style="font-family: 'Cormorant Garamond', serif;">
                    Escape to Viera Resort Ngurbloat
                </h1>
                <p class="text-lg lg:text-xl text-white/90 mb-8 max-w-2xl mx-auto leading-relaxed animate-fade-in-up-delay-2">
                    Where the sea meets the sky and time slows down. A tropical paradise in Ngurbloat, Kei Kecil, where every day is an adventure.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up-delay-3">
                    <a href="#explore" class="px-8 py-3.5 bg-[#8B734C] text-white rounded-lg font-semibold hover:bg-[#7A6340] transition-all transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Explore
                    </a>
                    <button type="button" id="play-video-btn" class="px-8 py-3.5 bg-white/10 backdrop-blur-sm text-white border-2 border-white/30 rounded-lg font-semibold hover:bg-white/20 transition-all transform hover:scale-105 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                        Play video
                    </button>
                </div>
            </div>
            
            {{-- Scroll Indicator --}}
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce" id="scroll-indicator">
                <a href="#explore" class="flex flex-col items-center text-white/70 hover:text-white transition-colors">
                    <span class="text-xs mb-2">Scroll</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- What we provide Section --}}
    <section id="explore" class="bg-[#FDFBF7] py-20 lg:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 animate-on-scroll">
                <p class="text-sm uppercase tracking-wider text-[#706F6C] mb-4">Offerings</p>
                <h2 class="text-4xl lg:text-6xl font-serif font-bold text-[#1B1B18] mb-4" style="font-family: 'Cormorant Garamond', serif;">
                    What we provide
                </h2>
                <p class="text-lg text-[#706F6C] max-w-2xl mx-auto">
                    Everything you need for a proper escape
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                {{-- Card 1 --}}
                <div class="group animate-on-scroll-delay-1">
                    <div class="relative overflow-hidden rounded-2xl aspect-[4/3] mb-6">
                        <div class="absolute inset-0 bg-gradient-to-br from-orange-400 via-pink-500 to-purple-600 opacity-80"></div>
                        <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-700" style="background-image: url('{{ asset('KamarPhoto.jpg') }}');"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-2xl font-bold mb-2">Comfortable rooms with clean lines</h3>
                            <p class="text-sm opacity-90">Each room is designed for your maximum comfort</p>
                        </div>
                    </div>
                    <a href="#rooms" class="text-[#8B734C] font-medium hover:text-[#7A6340] transition-colors flex items-center gap-2 group-hover:gap-4 transition-all">
                        Read more
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                {{-- Card 2 --}}
                <div class="group animate-on-scroll-delay-2">
                    <div class="relative overflow-hidden rounded-2xl aspect-[4/3] mb-6">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-400 via-cyan-500 to-teal-600 opacity-80"></div>
                        <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-700" style="background-image: url('{{ asset('GoodVibesOnTheBeach.png') }}');"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-2xl font-bold mb-2">Beach access like nowhere else</h3>
                            <p class="text-sm opacity-90">Enjoy direct access to the pristine Ngurbloat beach</p>
                        </div>
                    </div>
                    <a href="#beach" class="text-[#8B734C] font-medium hover:text-[#7A6340] transition-colors flex items-center gap-2 group-hover:gap-4 transition-all">
                        Read more
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                {{-- Card 3 --}}
                <div class="group animate-on-scroll-delay-3">
                    <div class="relative overflow-hidden rounded-2xl aspect-[4/3] mb-6">
                        <div class="absolute inset-0 bg-gradient-to-br from-amber-400 via-orange-500 to-red-600 opacity-80"></div>
                        <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-700" style="background-image: url('{{ asset('VieraCafe&Resto.jpg') }}');"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-2xl font-bold mb-2">Cafe and restaurant on-site</h3>
                            <p class="text-sm opacity-90">Fresh food, locally prepared, and served with a smile</p>
                        </div>
                    </div>
                    <a href="#cafe" class="text-[#8B734C] font-medium hover:text-[#7A6340] transition-colors flex items-center gap-2 group-hover:gap-4 transition-all">
                        Read more
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- The measure of a good place Section --}}
    <section class="bg-[#8B734C] py-20 lg:py-32 relative overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            {{-- Header Section --}}
            <div class="mb-12 lg:mb-16 animate-on-scroll">
                <div class="flex flex-col lg:flex-row lg:items-start gap-6 lg:gap-12">
                    {{-- Left: Numbers label and Title --}}
                    <div class="lg:w-1/2">
                        <p class="text-sm uppercase tracking-wider text-white/70 mb-4" style="font-family: 'Instrument Sans', sans-serif;">Numbers</p>
                        <h2 class="text-4xl lg:text-6xl xl:text-7xl font-serif font-bold text-white mb-6" style="font-family: 'Cormorant Garamond', serif;">
                            The measure of a good place
                        </h2>
                    </div>
                    {{-- Right: Description --}}
                    <div class="lg:w-1/2 lg:pt-12">
                        <p class="text-lg lg:text-xl text-white/90 leading-relaxed" style="font-family: 'Cormorant Garamond', serif;">
                            Viera Resort Ngurbloat stands on simple facts. Guests return because the place works. The numbers tell what matters most.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Grid Layout: Numbers and Images --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                {{-- Left Column: Number 4 --}}
                <div class="animate-on-scroll-delay-1">
                    <div class="bg-[#8B734C] border border-white/20 rounded-lg p-8 lg:p-12 h-full flex flex-col items-center justify-center text-center">
                        <div class="text-6xl lg:text-7xl xl:text-8xl font-bold text-white mb-4 counter" data-target="4">0</div>
                        <p class="text-lg lg:text-xl text-white/90" style="font-family: 'Cormorant Garamond', serif;">
                            Rooms facing the water.
                        </p>
                    </div>
                </div>

                {{-- Middle Column: Image (top) and Number 5.0 (bottom) --}}
                <div class="space-y-6 lg:space-y-8">
                    {{-- Image Top --}}
                    <div class="animate-on-scroll-delay-2">
                        <div class="relative rounded-lg overflow-hidden shadow-xl aspect-[4/3]">
                            <img src="{{ asset('RoomServices.png') }}" alt="Viera Resort" class="w-full h-full object-cover">
                        </div>
                    </div>
                    {{-- Number Bottom --}}
                    <div class="animate-on-scroll-delay-3">
                        <div class="bg-[#8B734C] border border-white/20 rounded-lg p-8 lg:p-12 text-center">
                            <div class="text-6xl lg:text-7xl xl:text-8xl font-bold text-white mb-4 counter" data-target="5.0">0</div>
                            <p class="text-lg lg:text-xl text-white/90" style="font-family: 'Cormorant Garamond', serif;">
                                Guest rating out of five.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Right Column: Number 50 (top) and Image (bottom) --}}
                <div class="space-y-6 lg:space-y-8">
                    {{-- Number Top --}}
                    <div class="animate-on-scroll-delay-4">
                        <div class="bg-[#8B734C] border border-white/20 rounded-lg p-8 lg:p-12 text-center">
                            <div class="text-6xl lg:text-7xl xl:text-8xl font-bold text-white mb-4 counter" data-target="50">0</div>
                            <p class="text-lg lg:text-xl text-white/90" style="font-family: 'Cormorant Garamond', serif;">
                                Steps to the beach.
                            </p>
                        </div>
                    </div>
                    {{-- Image Bottom --}}
                    <div class="animate-on-scroll-delay-5">
                        <div class="relative rounded-lg overflow-hidden shadow-xl aspect-[4/3]">
                            <img src="{{ asset('GoodVibesOnTheBeach.png') }}" alt="Viera Resort Beach" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- See the place Gallery Section --}}
    <section class="bg-[#FDFBF7] py-20 lg:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-7xl mx-auto animate-on-scroll">
                <div class="text-center mb-12">
                    <h2 class="text-4xl lg:text-6xl font-serif font-bold text-[#1B1B18] mb-4" style="font-family: 'Cormorant Garamond', serif;">
                        See the place
                    </h2>
                    <p class="text-lg text-[#706F6C] max-w-2xl mx-auto">
                        The resort speaks for itself in light and shadow
                    </p>
                </div>

                {{-- Gallery Carousel --}}
                <div class="relative">
                    {{-- Carousel Container --}}
                    <div class="relative overflow-hidden rounded-2xl">
                        <div class="flex transition-transform duration-500 ease-in-out" id="gallery-carousel" style="transform: translateX(0%);">
                            {{-- Slide 1 --}}
                            <div class="min-w-full flex-shrink-0">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-6">
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Gallery Image 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Gallery Image 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Gallery Image 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Slide 2 --}}
                            <div class="min-w-full flex-shrink-0">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-6">
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Gallery Image 4" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Gallery Image 5" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Gallery Image 6" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Slide 3 --}}
                            <div class="min-w-full flex-shrink-0">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-6">
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Gallery Image 7" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Gallery Image 8" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Gallery Image 9" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Navigation Arrows --}}
                        <button id="gallery-prev" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/90 hover:bg-white rounded-full shadow-lg flex items-center justify-center transition-all hover:scale-110 z-10">
                            <svg class="w-6 h-6 text-[#1B1B18]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button id="gallery-next" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/90 hover:bg-white rounded-full shadow-lg flex items-center justify-center transition-all hover:scale-110 z-10">
                            <svg class="w-6 h-6 text-[#1B1B18]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    {{-- Pagination Dots --}}
                    <div class="flex justify-center gap-2 mt-8">
                        <button class="gallery-dot w-2.5 h-2.5 rounded-full bg-[#8B734C] transition-all active" data-index="0"></button>
                        <button class="gallery-dot w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-gray-400 transition-all" data-index="1"></button>
                        <button class="gallery-dot w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-gray-400 transition-all" data-index="2"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Reviews & Ratings Section --}}
    <section class="bg-[#1B1B18] py-20 lg:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto">
                {{-- Header --}}
                <div class="mb-8 animate-on-scroll">
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-2">VieraResort</h2>
                    <p class="text-sm text-gray-400 mb-4">
                        8JJM+MHF, Ngurbloat Beach, Tanjung, Ngilngof, Manyeuw, Southeast Maluku Regency, Maluku, Indonesia
                    </p>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex items-center gap-2">
                            <span class="text-4xl font-bold text-white">5,0</span>
                            <div class="flex gap-0.5">
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                        </div>
                        <span class="text-white">4 ulasan</span>
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <button class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-lg text-sm font-medium transition-colors">
                        Tulis ulasan
                    </button>
                </div>

                {{-- Sort Options --}}
                <div class="mb-6 animate-on-scroll-delay-1">
                    <p class="text-sm text-gray-400 mb-3">Urutkan menurut</p>
                    <div class="flex flex-wrap gap-2">
                        <button class="sort-btn px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium active" data-sort="relevant">
                            Paling relevan
                        </button>
                        <button class="sort-btn px-4 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-lg text-sm font-medium" data-sort="newest">
                            Terbaru
                        </button>
                        <button class="sort-btn px-4 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-lg text-sm font-medium" data-sort="highest">
                            Rating tertinggi
                        </button>
                        <button class="sort-btn px-4 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-lg text-sm font-medium" data-sort="lowest">
                            Rating terendah
                        </button>
                    </div>
                </div>

                {{-- Reviews List --}}
                <div class="space-y-6">
                    {{-- Review 1 --}}
                    <div class="bg-gray-800 rounded-lg p-6 animate-on-scroll-delay-2">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 rounded-full bg-amber-700 flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-semibold">L</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <h3 class="font-semibold text-white">Liesye TeSa</h3>
                                </div>
                                <p class="text-xs text-gray-400 mb-2">1 ulasan - 2 foto</p>
                                <div class="flex items-center gap-3">
                                    <div class="flex gap-0.5">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    </div>
                                    <span class="text-xs text-gray-400">3 minggu lalu</span>
                                    <span class="px-2 py-0.5 bg-gray-700 text-white text-xs rounded">BARU</span>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                </svg>
                            </button>
                        </div>
                        <p class="text-white leading-relaxed mb-3">
                            Mantuuuulll poollll suasana tenang, sunset bgussnya kyaa ngajak ke surgaaa 😭😍 penginpn estetik pelayannya buat nyamn juga 🥰🥰🥰🥰 best viera resort 👍
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-400">
                            <span>Arahkan kursor untuk memberikan reaksi</span>
                            <button class="hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- Review 2 --}}
                    <div class="bg-gray-800 rounded-lg p-6 animate-on-scroll-delay-3">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 rounded-full bg-teal-600 flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-semibold">M</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <h3 class="font-semibold text-white">Mario Tethool</h3>
                                </div>
                                <p class="text-xs text-gray-400 mb-2">3 ulasan - 1 foto</p>
                                <div class="flex items-center gap-3">
                                    <div class="flex gap-0.5">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    </div>
                                    <span class="text-xs text-gray-400">4 hari lalu</span>
                                    <span class="px-2 py-0.5 bg-gray-700 text-white text-xs rounded">BARU</span>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center justify-between text-sm text-gray-400">
                            <span>Arahkan kursor untuk memberikan reaksi</span>
                            <button class="hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- Review 3 --}}
                    <div class="bg-gray-800 rounded-lg p-6 animate-on-scroll-delay-4">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-semibold">K</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <h3 class="font-semibold text-white">Karmina Savsavubun06</h3>
                                </div>
                                <p class="text-xs text-gray-400 mb-2">1 ulasan - 18 foto</p>
                                <div class="flex items-center gap-3">
                                    <div class="flex gap-0.5">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    </div>
                                    <span class="text-xs text-gray-400">3 minggu lalu</span>
                                    <span class="px-2 py-0.5 bg-gray-700 text-white text-xs rounded">BARU</span>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center justify-between text-sm text-gray-400">
                            <span>Arahkan kursor untuk memberikan reaksi</span>
                            <button class="hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- Review 4 --}}
                    <div class="bg-gray-800 rounded-lg p-6 animate-on-scroll-delay-5">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="w-10 h-10 rounded-full bg-indigo-600 flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-semibold">C</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <h3 class="font-semibold text-white">Clemenia Maria</h3>
                                </div>
                                <p class="text-xs text-gray-400 mb-2">1 foto</p>
                                <div class="flex items-center gap-3">
                                    <div class="flex gap-0.5">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    </div>
                                    <span class="text-xs text-gray-400">3 minggu lalu</span>
                                    <span class="px-2 py-0.5 bg-gray-700 text-white text-xs rounded">BARU</span>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center justify-between text-sm text-gray-400">
                            <span>Arahkan kursor untuk memberikan reaksi</span>
                            <button class="hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Make your reservation Section --}}
    <section class="relative py-20 lg:py-32 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="w-full h-full bg-cover bg-center" style="background-image: url('{{ asset('SunsetOnTheBeach.png') }}');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/70"></div>
        </div>
        <div class="relative z-10 container mx-auto px-4 lg:px-8 text-center">
            <div class="max-w-3xl mx-auto animate-on-scroll">
                <p class="text-sm uppercase tracking-wider text-white/80 mb-4">Book your stay</p>
                <h2 class="text-4xl lg:text-6xl font-serif font-bold text-white mb-6" style="font-family: 'Cormorant Garamond', serif;">
                    Make your reservation now
                </h2>
                <p class="text-lg text-white/90 mb-8 leading-relaxed">
                    Contact us through WhatsApp to secure your dates and begin your escape
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/booking" class="px-8 py-3.5 bg-[#8B734C] text-white rounded-lg font-semibold hover:bg-[#7A6340] transition-all transform hover:scale-105 shadow-lg">
                        Book now
                    </a>
                    <a href="#contact" class="px-8 py-3.5 bg-white/10 backdrop-blur-sm text-white border-2 border-white/30 rounded-lg font-semibold hover:bg-white/20 transition-all transform hover:scale-105">
                        Contact us
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-[#8B734C] text-white py-12 lg:py-16">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-8">
                <div class="lg:col-span-1">
                    <div class="text-2xl font-serif font-semibold mb-4" style="font-family: 'Cormorant Garamond', serif;">Logo</div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Explore more</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Our resort</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Dining options</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Make booking</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Contact us</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Plan ahead</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Get started</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/booking" class="hover:opacity-80 transition-opacity">Book now</a></li>
                        <li><a href="#explore" class="hover:opacity-80 transition-opacity">View rooms</a></li>
                        <li><a href="#cafe" class="hover:opacity-80 transition-opacity">See menu</a></li>
                        <li><a href="/booking" class="hover:opacity-80 transition-opacity">Reserve today</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Learn more</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Connect</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:opacity-80 transition-opacity">WhatsApp us</a></li>
                        <li><a href="mailto:info@vieraresort.com" class="hover:opacity-80 transition-opacity">Email us</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Visit us</a></li>
                        <li><a href="tel:+6281234567890" class="hover:opacity-80 transition-opacity">Call us now</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Find us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Updates</h4>
                    <p class="text-sm mb-4 text-white/90">
                        Get news about new rooms, dining experiences, and special offers delivered straight to your inbox.
                    </p>
                    <form class="flex flex-col gap-2" id="newsletter-form">
                        <input type="email" placeholder="your@email.com" required class="px-4 py-2 rounded-lg bg-white text-[#1B1B18] placeholder-[#706F6C] focus:outline-none focus:ring-2 focus:ring-white/50">
                        <button type="submit" class="px-4 py-2 bg-[#FDFBF7] text-[#8B734C] rounded-lg font-semibold hover:bg-white transition-colors">
                            Join
                        </button>
                    </form>
                    <p class="text-xs mt-2 text-white/70">
                        We respect your privacy, so we will never share your information.
                    </p>
                </div>
            </div>
            <div class="border-t border-[#7A6340] pt-8 mt-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="flex flex-wrap gap-4 text-sm">
                        <a href="#" class="hover:opacity-80 transition-opacity">Privacy Policy</a>
                        <a href="#" class="hover:opacity-80 transition-opacity">Terms of Service</a>
                        <a href="#" class="hover:opacity-80 transition-opacity">Cookies Settings</a>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="hover:opacity-80 transition-opacity transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="hover:opacity-80 transition-opacity transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="hover:opacity-80 transition-opacity transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="hover:opacity-80 transition-opacity transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="hover:opacity-80 transition-opacity transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="text-center mt-6 text-sm text-white/80">
                    © 2025 Viera Resort Ngurbloat
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const playVideoBtn = document.getElementById('play-video-btn');
            const closeVideoBtn = document.getElementById('close-video-btn');
            const heroVideo = document.getElementById('hero-video');
            const heroVideoContainer = document.getElementById('hero-video-container');
            const heroContent = document.getElementById('hero-content');
            const heroBackground = document.getElementById('hero-background');
            const scrollIndicator = document.getElementById('scroll-indicator');

            // Function to show video
            function showVideo() {
                heroVideoContainer.classList.remove('hidden');
                heroContent.classList.add('hidden');
                heroBackground.classList.add('hidden');
                scrollIndicator.classList.add('hidden');
                heroVideo.play();
            }

            // Function to hide video and show content
            function hideVideo() {
                heroVideoContainer.classList.add('hidden');
                heroContent.classList.remove('hidden');
                heroBackground.classList.remove('hidden');
                scrollIndicator.classList.remove('hidden');
                heroVideo.pause();
                heroVideo.currentTime = 0;
            }

            // Play video button
            if (playVideoBtn) {
                playVideoBtn.addEventListener('click', function() {
                    showVideo();
                });
            }

            // Close video button
            if (closeVideoBtn) {
                closeVideoBtn.addEventListener('click', function() {
                    hideVideo();
                });
            }

            // When video ends, show content again
            if (heroVideo) {
                heroVideo.addEventListener('ended', function() {
                    hideVideo();
                });
            }
        });
    </script>
@endsection
