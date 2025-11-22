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
                    <a href="/resort" class="text-sm font-medium text-[#8B734C] transition-colors font-semibold">Resort</a>
                    <a href="/cafe" class="text-sm font-medium text-[#1B1B18] hover:text-[#8B734C] transition-colors">Cafe & Resto</a>
                    <a href="/booking" class="text-sm font-medium text-[#1B1B18] hover:text-[#8B734C] transition-colors">Book</a>
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
                <a href="/resort" class="block text-sm font-medium text-[#8B734C] font-semibold">Resort</a>
                <a href="/cafe" class="block text-sm font-medium text-[#1B1B18] hover:text-[#8B734C] transition-colors">Cafe & Resto</a>
                <a href="/booking" class="block text-sm font-medium text-[#1B1B18] hover:text-[#8B734C] transition-colors">Book</a>
                <a href="/booking" class="block px-6 py-2.5 bg-[#8B734C] text-white rounded-lg font-medium text-center">Reserve</a>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <div class="absolute inset-0 z-0">
            <div class="w-full h-full bg-gradient-to-br from-[#8B734C] via-[#7A6340] to-[#6B5635] opacity-90"></div>
            <div class="absolute inset-0 bg-cover bg-center mix-blend-overlay opacity-30" style="background-image: url('{{ asset('HalamanPhoto.jpg') }}');"></div>
        </div>
        <div class="relative z-10 container mx-auto px-4 lg:px-8 text-center max-w-4xl">
            <div class="animate-fade-in-up">
                <p class="text-sm uppercase tracking-wider text-white/80 mb-4">Welcome</p>
                <h1 class="text-5xl lg:text-7xl xl:text-8xl font-serif font-bold text-white mb-6 leading-tight" style="font-family: 'Cormorant Garamond', serif;">
                    Our Resort
                </h1>
                <p class="text-lg lg:text-xl text-white/90 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Experience luxury and tranquility in the heart of Ngurbloat, Kei Kecil
                </p>
            </div>
        </div>
    </section>

    {{-- Where rest meets refinement --}}
    <section class="bg-[#FDFBF7] py-12 sm:py-16 lg:py-20 xl:py-32">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8 sm:gap-12 lg:gap-16 items-center">
                {{-- Circular Image on Left (smaller size) --}}
                <div class="animate-on-scroll w-full lg:w-auto flex justify-center lg:justify-start">
                    <div class="relative w-56 sm:w-64 md:w-72 lg:w-80 xl:w-96 aspect-square">
                        <div class="w-full h-full rounded-full overflow-hidden shadow-2xl">
                            <img src="{{ asset('KamarPhoto.jpg') }}" alt="Viera Resort Room" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
                
                {{-- Content on Right (vertically centered) --}}
                <div class="animate-on-scroll-delay-1 w-full lg:flex-1 flex flex-col justify-center text-center lg:text-left">
                    {{-- Icon --}}
                    <div class="mb-4 sm:mb-6 flex justify-center lg:justify-start">
                        <svg class="w-7 h-7 sm:w-8 sm:h-8 text-[#1B1B18]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </div>
                    
                    {{-- Heading --}}
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl xl:text-6xl font-serif font-bold text-[#1B1B18] mb-4 sm:mb-6 leading-tight" style="font-family: 'Cormorant Garamond', serif;">
                        Where rest meets refinement
                    </h2>
                    
                    {{-- Paragraph --}}
                    <p class="text-base sm:text-lg lg:text-xl text-[#706F6C] mb-8 sm:mb-10 leading-relaxed font-serif max-w-2xl mx-auto lg:mx-0" style="font-family: 'Cormorant Garamond', serif;">
                        Our rooms offer the quiet you need and the elegance you deserve. Each space is built for those who understand the value of genuine comfort.
                    </p>
                    
                    {{-- Buttons --}}
                    <div class="flex flex-col sm:flex-row gap-4 items-center lg:items-start justify-center lg:justify-start">
                        <a href="#rooms" class="w-full sm:w-auto px-6 sm:px-8 py-2.5 sm:py-3 border border-[#1B1B18] bg-white text-[#1B1B18] rounded-lg font-semibold hover:bg-[#1B1B18] hover:text-white transition-all text-center">
                            Explore
                        </a>
                        <a href="#rooms" class="w-full sm:w-auto px-6 sm:px-8 py-2.5 sm:py-3 text-[#1B1B18] font-semibold hover:text-[#8B734C] transition-colors flex items-center justify-center lg:justify-start gap-2 group">
                            Learn
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Swimming Pool Section --}}
    <section class="bg-[#FDFBF7] py-20 lg:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                {{-- Header --}}
                <div class="text-center mb-16 animate-on-scroll">
                    <p class="text-sm uppercase tracking-wider text-[#706F6C] mb-4">Essentials</p>
                    <h2 class="text-4xl lg:text-5xl xl:text-6xl font-serif font-bold text-[#1B1B18] mb-4" style="font-family: 'Cormorant Garamond', serif;">
                        Swimming pool
                    </h2>
                    <p class="text-lg text-[#706F6C] max-w-2xl mx-auto">
                        Cool water and open sky, nothing more needed
                    </p>
                </div>

                {{-- Three Cards --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                    {{-- Card 1: Beachfront access --}}
                    <div class="group relative overflow-hidden rounded-2xl h-[500px] animate-on-scroll-delay-1">
                        <img src="{{ asset('GoodVibesOnTheBeach.png') }}" alt="Beachfront access" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8 text-white">
                            <p class="text-xs uppercase tracking-wider mb-2 opacity-80">Explore</p>
                            <h3 class="text-2xl lg:text-3xl font-serif font-bold mb-2" style="font-family: 'Cormorant Garamond', serif;">
                                Beachfront access
                            </h3>
                            <p class="text-sm lg:text-base mb-4 opacity-90">
                                Sand beneath your feet and the sound of the sea
                            </p>
                            <a href="#beach" class="inline-flex items-center gap-2 text-sm font-semibold hover:gap-4 transition-all">
                                Explore
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    {{-- Card 2: Recreational areas --}}
                    <div class="group relative overflow-hidden rounded-2xl h-[500px] animate-on-scroll-delay-2">
                        <img src="{{ asset('KolamPhoto.jpg') }}" alt="Recreational areas" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8 text-white">
                            <p class="text-xs uppercase tracking-wider mb-2 opacity-80">Recreation</p>
                            <h3 class="text-2xl lg:text-3xl font-serif font-bold mb-2" style="font-family: 'Cormorant Garamond', serif;">
                                Recreational areas
                            </h3>
                            <p class="text-sm lg:text-base mb-4 opacity-90">
                                Space to move, to breathe, to simply be yourself
                            </p>
                            <a href="#recreation" class="inline-flex items-center gap-2 text-sm font-semibold hover:gap-4 transition-all">
                                Explore
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    {{-- Card 3: Placeholder --}}
                    <div class="group relative overflow-hidden rounded-2xl h-[500px] animate-on-scroll-delay-3">
                        <img src="{{ asset('RoomServices.png') }}" alt="Room Services" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8 text-white">
                            <p class="text-xs uppercase tracking-wider mb-2 opacity-80">Tagline</p>
                            <h3 class="text-2xl lg:text-3xl font-serif font-bold mb-2" style="font-family: 'Cormorant Garamond', serif;">
                                Medium length section heading goes here
                            </h3>
                            <p class="text-sm lg:text-base mb-4 opacity-90">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                            </p>
                            <a href="#" class="inline-flex items-center gap-2 text-sm font-semibold hover:gap-4 transition-all">
                                Button
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Room Rates Section --}}
    <section class="bg-[#8B734C] py-20 lg:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16 animate-on-scroll">
                    <h2 class="text-4xl lg:text-6xl font-serif font-bold text-white mb-4" style="font-family: 'Cormorant Garamond', serif;">
                        Room rates
                    </h2>
                    <p class="text-lg text-white/90 max-w-2xl mx-auto">
                        Choose what fits your stay
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    {{-- Standard Room --}}
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 animate-on-scroll-delay-1 transform hover:scale-105 transition-transform">
                        <div class="text-sm text-white/70 mb-2">Per night</div>
                        <div class="text-5xl font-bold text-white mb-6">$85</div>
                        <h3 class="text-2xl font-semibold text-white mb-4">Standard room</h3>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Comfortable bed
                            </li>
                            <li class="flex items-center gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Private bathroom
                            </li>
                            <li class="flex items-center gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Ceiling fan
                            </li>
                        </ul>
                        <a href="/booking" class="block w-full px-6 py-3 bg-white text-[#8B734C] rounded-lg font-semibold text-center hover:bg-[#FDFBF7] transition-colors">
                            Book now
                        </a>
                    </div>

                    {{-- Deluxe Room --}}
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 animate-on-scroll-delay-2 transform hover:scale-105 transition-transform">
                        <div class="text-sm text-white/70 mb-2">Per night</div>
                        <div class="text-5xl font-bold text-white mb-6">$125</div>
                        <h3 class="text-2xl font-semibold text-white mb-4">Deluxe room</h3>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Ocean view
                            </li>
                            <li class="flex items-center gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Air conditioning
                            </li>
                            <li class="flex items-center gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Work desk
                            </li>
                            <li class="flex items-center gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Minibar
                            </li>
                        </ul>
                        <a href="/booking" class="block w-full px-6 py-3 bg-white text-[#8B734C] rounded-lg font-semibold text-center hover:bg-[#FDFBF7] transition-colors">
                            Book now
                        </a>
                    </div>

                    {{-- Suite --}}
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 animate-on-scroll-delay-3 transform hover:scale-105 transition-transform">
                        <div class="text-sm text-white/70 mb-2">Per night</div>
                        <div class="text-5xl font-bold text-white mb-6">$185</div>
                        <h3 class="text-2xl font-semibold text-white mb-4">Suite</h3>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Separate living area
                            </li>
                            <li class="flex items-center gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Premium bedding
                            </li>
                            <li class="flex items-center gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Balcony access
                            </li>
                            <li class="flex items-center gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Concierge service
                            </li>
                            <li class="flex items-center gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Spa amenities
                            </li>
                        </ul>
                        <a href="/booking" class="block w-full px-6 py-3 bg-white text-[#8B734C] rounded-lg font-semibold text-center hover:bg-[#FDFBF7] transition-colors">
                            Book now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Spaces Gallery --}}
    <section class="bg-[#FDFBF7] py-20 lg:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12 animate-on-scroll">
                    <h2 class="text-4xl lg:text-6xl font-serif font-bold text-[#1B1B18] mb-4" style="font-family: 'Cormorant Garamond', serif;">
                        Our spaces
                    </h2>
                    <p class="text-lg text-[#706F6C] max-w-2xl mx-auto">
                        Explore the various accommodations and facilities designed for your comfort and enjoyment
                    </p>
                </div>

                {{-- Gallery Carousel --}}
                <div class="relative">
                    {{-- Carousel Container --}}
                    <div class="relative overflow-hidden rounded-2xl">
                        <div class="flex transition-transform duration-500 ease-in-out" id="resort-gallery-carousel" style="transform: translateX(0%);">
                            {{-- Slide 1 --}}
                            <div class="min-w-full flex-shrink-0">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-6">
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Resort Space 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Resort Space 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Resort Space 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
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
                                            <img src="#" alt="Resort Space 4" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Resort Space 5" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Resort Space 6" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
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
                                            <img src="#" alt="Resort Space 7" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Resort Space 8" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl aspect-square">
                                        <a href="#" class="block w-full h-full">
                                            <img src="#" alt="Resort Space 9" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Navigation Arrows --}}
                        <button id="resort-gallery-prev" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/90 hover:bg-white rounded-full shadow-lg flex items-center justify-center transition-all hover:scale-110 z-10">
                            <svg class="w-6 h-6 text-[#1B1B18]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button id="resort-gallery-next" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/90 hover:bg-white rounded-full shadow-lg flex items-center justify-center transition-all hover:scale-110 z-10">
                            <svg class="w-6 h-6 text-[#1B1B18]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    {{-- Pagination Dots --}}
                    <div class="flex justify-center gap-2 mt-8">
                        <button class="resort-gallery-dot w-2.5 h-2.5 rounded-full bg-[#8B734C] transition-all active" data-index="0"></button>
                        <button class="resort-gallery-dot w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-gray-400 transition-all" data-index="1"></button>
                        <button class="resort-gallery-dot w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-gray-400 transition-all" data-index="2"></button>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="/booking" class="inline-block px-8 py-3.5 bg-[#8B734C] text-white rounded-lg font-semibold hover:bg-[#7A6340] transition-all transform hover:scale-105">
                        View all spaces
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
                        <li><a href="/resort" class="hover:opacity-80 transition-opacity">Our resort</a></li>
                        <li><a href="/cafe" class="hover:opacity-80 transition-opacity">Dining options</a></li>
                        <li><a href="/booking" class="hover:opacity-80 transition-opacity">Make booking</a></li>
                        <li><a href="/booking#contact" class="hover:opacity-80 transition-opacity">Contact us</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Plan ahead</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Get started</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/booking" class="hover:opacity-80 transition-opacity">Book now</a></li>
                        <li><a href="/resort" class="hover:opacity-80 transition-opacity">View rooms</a></li>
                        <li><a href="/cafe" class="hover:opacity-80 transition-opacity">See menu</a></li>
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
                </div>
            </div>
            <div class="border-t border-[#7A6340] pt-8 mt-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="flex flex-wrap gap-4 text-sm">
                        <a href="#" class="hover:opacity-80 transition-opacity">Privacy Policy</a>
                        <a href="#" class="hover:opacity-80 transition-opacity">Terms of Service</a>
                        <a href="#" class="hover:opacity-80 transition-opacity">Cookies Settings</a>
                    </div>
                    <div class="text-center text-sm text-white/80">
                        © 2025 Viera Resort Ngurbloat
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection

