@extends('layouts.app')

@section('content')
    {{-- Navigation --}}
    <x-navbar />

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
                    <a href="/cafe" class="text-[#8B734C] font-medium hover:text-[#7A6340] transition-colors flex items-center gap-2 group-hover:gap-4 transition-all">
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

    {{-- Reviews & Ratings Section --}}
    <section class="bg-[#1B1B18] py-20 lg:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto">
                {{-- Header --}}
                <div class="mb-8 animate-on-scroll">
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-2">VieraResort on Gmaps</h2>
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
                    <a href="https://www.google.com/maps/place/VieraResort/@-5.6683192,132.6313587,17z/data=!3m1!4b1!4m6!3m5!1s0x2d300500091e7ce3:0x7dd44b1682f7da09!8m2!3d-5.6683192!4d132.6339336!16s%2Fg%2F11yn34hcgn?entry=ttu&g_ep=EgoyMDI1MTExNy4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer" class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-lg text-sm font-medium transition-colors inline-block">
                        Tulis ulasan
                    </a>
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
                                </div>
                            </div>
                        </div>
                        <p class="text-white leading-relaxed mb-3">
                            Mantuuuulll poollll suasana tenang, sunset bgussnya kyaa ngajak ke surgaaa 😭😍 penginpn estetik pelayannya buat nyamn juga 🥰🥰🥰🥰 best viera resort 👍
                        </p>
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
                                </div>
                            </div>
                        </div>
                        <p class="text-white leading-relaxed mb-3">
                            Pelayanan sangat baik, fasilitas lengkap dan nyaman. Cocok untuk liburan bersama keluarga. Recommended!
                        </p>
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
                                </div>
                            </div>
                        </div>
                        <p class="text-white leading-relaxed mb-3">
                            Tempat yang sangat indah dengan pemandangan yang menakjubkan. Kolam renangnya luas dan bersih. Pasti akan kembali lagi!
                        </p>
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
                                </div>
                            </div>
                        </div>
                        <p class="text-white leading-relaxed mb-3">
                            Suasana sangat tenang dan nyaman. Kamar bersih dan rapi. Staff sangat ramah dan membantu. Pengalaman menginap yang menyenangkan!
                        </p>
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

