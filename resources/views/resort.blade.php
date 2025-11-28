@extends('layouts.app')

@section('content')
    {{-- Navigation --}}
    <x-navbar />

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
                        <a href="#spaces" class="w-full sm:w-auto px-6 sm:px-8 py-2.5 sm:py-3 border border-[#1B1B18] bg-white text-[#1B1B18] rounded-lg font-semibold hover:bg-[#1B1B18] hover:text-white transition-all text-center">
                            Explore
                        </a>
                        <a href="#packages" class="w-full sm:w-auto px-6 sm:px-8 py-2.5 sm:py-3 text-[#1B1B18] font-semibold hover:text-[#8B734C] transition-colors flex items-center justify-center lg:justify-start gap-2 group">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Room Rates Section --}}
    <section id="packages" class="bg-[#8B734C] py-20 lg:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 animate-on-scroll">
                    <h2 class="text-4xl lg:text-6xl font-serif font-bold text-white mb-4" style="font-family: 'Cormorant Garamond', serif;">
                        Our Packages
                    </h2>
                    <p class="text-lg text-white/90 max-w-2xl mx-auto">
                        Choose the perfect package for your stay
                    </p>
                </div>

                {{-- Package Cards Grid --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-stretch">
                    {{-- Beachfront Room Package --}}
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 lg:p-10 animate-on-scroll-delay-1 transform hover:scale-105 transition-transform flex flex-col">
                    <div class="text-center mb-8">
                        <div class="text-sm text-white/70 mb-2">Per malam</div>
                            <div class="text-4xl lg:text-5xl font-bold text-white mb-6">IDR. 1.200.000</div>
                            <h3 class="text-2xl lg:text-2xl font-semibold text-white mb-2">Beachfront Room</h3>
                    </div>
                    
                        <div class="mb-8 flex-grow">
                            <h4 class="text-lg font-semibold text-white mb-6 text-center">Facilities included:</h4>
                            <div class="grid grid-cols-1 gap-4">
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3 text-white/90">
                                    <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>1 room for 2 people</span>
                                </li>
                                <li class="flex items-center gap-3 text-white/90">
                                    <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Toiletries</span>
                                </li>
                                <li class="flex items-center gap-3 text-white/90">
                                    <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Welcome Drink</span>
                                </li>
                                <li class="flex items-center gap-3 text-white/90">
                                    <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Breakfast</span>
                                </li>
                                <li class="flex items-center gap-3 text-white/90">
                                    <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Umbrella house</span>
                                </li>
                                <li class="flex items-center gap-3 text-white/90">
                                    <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Swimming pool</span>
                                </li>
                                <li class="flex items-center gap-3 text-white/90">
                                    <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Rooftop</span>
                                </li>
                                <li class="flex items-center gap-3 text-white/90">
                                    <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>WiFi access</span>
                                </li>
                                <li class="flex items-center gap-3 text-white/90">
                                    <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Jacuzzi</span>
                                </li>
                                <li class="flex items-center gap-3 text-white/90">
                                    <svg class="w-5 h-5 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Cleaning services and others</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                        <div class="space-y-3 mt-auto">
                            <a href="/booking" class="block w-full px-6 py-3 bg-white text-[#8B734C] rounded-lg font-semibold text-center hover:bg-[#FDFBF7] transition-colors">
                                Book now
                            </a>
                            <button onclick="openRulesModal('room')" class="block w-full px-6 py-3 bg-transparent border-2 border-white text-white rounded-lg font-semibold text-center hover:bg-white hover:text-[#8B734C] transition-colors">
                                Rules
                            </button>
                        </div>
                    </div>

                    {{-- Swimming Pool Package --}}
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 lg:p-10 animate-on-scroll-delay-2 transform hover:scale-105 transition-transform flex flex-col">
                        <div class="text-center mb-8">
                            <div class="text-sm text-white/70 mb-2">Per orang</div>
                            <div class="text-4xl lg:text-5xl font-bold text-white mb-6">IDR. 250.000</div>
                            <h3 class="text-2xl lg:text-2xl font-semibold text-white mb-2">Swimming Pool Package</h3>
                            <p class="text-sm text-white/80">Open 09.00 - 18.00 Setiap hari</p>
                        </div>
                        
                        <div class="mb-8 flex-grow">
                            <h4 class="text-lg font-semibold text-white mb-6 text-center">Package includes:</h4>
                            <div class="grid grid-cols-1 gap-6">
                                                            {{-- Additional Items --}}
                                                            <div>
                                                                <ul class="space-y-2">
                                                                    <li class="flex items-center gap-3 text-white/90">
                                                                        <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                                        </svg>
                                                                        <span>Handuk</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                {{-- Snack Options --}}
                                <div>
                                    <h5 class="text-base font-semibold text-white mb-3">Snack Options:</h5>
                                    <ul class="space-y-2">
                                        <li class="flex items-center gap-3 text-white/90">
                                            <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span>Pisang Enbal</span>
                                        </li>
                                        <li class="flex items-center gap-3 text-white/90">
                                            <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span>Roti Bakar</span>
                                        </li>
                                        <li class="flex items-center gap-3 text-white/90">
                                            <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span>Kentang Goreng</span>
                                        </li>
                                    </ul>
                                </div>

                                {{-- Drink Options --}}
                                <div>
                                    <h5 class="text-base font-semibold text-white mb-3">Drink Options:</h5>
                                    <ul class="space-y-2">
                                        <li class="flex items-center gap-3 text-white/90">
                                            <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span>Aqua</span>
                                        </li>
                                        <li class="flex items-center gap-3 text-white/90">
                                            <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span>Sprite</span>
                                        </li>
                                        <li class="flex items-center gap-3 text-white/90">
                                            <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span>Fanta</span>
                                        </li>
                                        <li class="flex items-center gap-3 text-white/90">
                                            <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span>Coca Cola</span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        
                        <div class="space-y-3 mt-auto">
                    <a href="/booking" class="block w-full px-6 py-3 bg-white text-[#8B734C] rounded-lg font-semibold text-center hover:bg-[#FDFBF7] transition-colors">
                        Book now
                    </a>
                            <button onclick="openRulesModal('pool')" class="block w-full px-6 py-3 bg-transparent border-2 border-white text-white rounded-lg font-semibold text-center hover:bg-white hover:text-[#8B734C] transition-colors">
                                Rules
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Rules Modal --}}
    <div id="rulesModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 transition-all duration-300" style="background-color: rgba(0, 0, 0, 0.05);">
        <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-hidden shadow-2xl border border-gray-200 transform transition-all duration-300 scale-95 opacity-0" id="modalDialog">
            {{-- Modal Header --}}
            <div class="flex items-center justify-between p-6 border-b border-gray-200">
                <h3 id="modalTitle" class="text-2xl font-serif font-bold text-[#1B1B18]" style="font-family: 'Cormorant Garamond', serif;">
                    Tata Tertib
                </h3>
                <button onclick="closeRulesModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            {{-- Modal Content --}}
            <div class="p-6 overflow-y-auto max-h-[60vh]">
                <div id="modalContent">
                    <!-- Content will be populated by JavaScript -->
                </div>
            </div>
            
            {{-- Modal Footer --}}
            <div class="p-6 border-t border-gray-200">
                <button onclick="closeRulesModal()" class="w-full px-6 py-3 bg-[#8B734C] text-white rounded-lg font-semibold hover:bg-[#7A6340] transition-colors">
                    Sudah Membaca
                </button>
            </div>
        </div>
    </div>

    {{-- Our Spaces Gallery --}}
    <section id="spaces" class="bg-[#FDFBF7] py-20 lg:py-32">
        <style>
            .resort-gallery-item {
                position: relative;
                width: 300px;
                height: 300px;
                overflow: hidden;
                flex-shrink: 0;
            }
            .resort-gallery-img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }
            .resort-gallery-container {
                position: relative;
            }
            .resort-gallery-grid {
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 1.5rem;
                flex-wrap: wrap;
            }
            #resort-gallery-prev,
            #resort-gallery-next {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                z-index: 20;
            }
            #resort-gallery-prev {
                left: 1rem;
            }
            #resort-gallery-next {
                right: 1rem;
            }
            @media (max-width: 768px) {
                .resort-gallery-item {
                    width: 150px;
                    height: 150px;
                }
                #resort-gallery-prev {
                    left: 0.5rem;
                }
                #resort-gallery-next {
                    right: 0.5rem;
                }
            }
            @media (min-width: 1024px) {
                .resort-gallery-item {
                    width: 300px;
                    height: 300px;
                }
            }
        </style>
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
                            <div class="min-w-full shrink-0">
                                <div class="flex justify-center items-center gap-3 md:gap-4 lg:gap-6 flex-wrap">
                                    <div class="group relative overflow-hidden rounded-xl w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 lg:w-64 lg:h-64 shrink-0">
                                        <a href="{{ asset('Screenshot 2025-11-25 211730.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('Screenshot 2025-11-25 211730.png') }}" alt="Resort Space 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 lg:w-64 lg:h-64 shrink-0">
                                        <a href="{{ asset('Screenshot 2025-11-25 211738.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('Screenshot 2025-11-25 211738.png') }}" alt="Resort Space 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 lg:w-64 lg:h-64 shrink-0">
                                        <a href="{{ asset('Screenshot 2025-11-25 211747.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('Screenshot 2025-11-25 211747.png') }}" alt="Resort Space 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Slide 2 --}}
                            <div class="min-w-full shrink-0">
                                <div class="flex justify-center items-center gap-3 md:gap-4 lg:gap-6 flex-wrap">
                                    <div class="group relative overflow-hidden rounded-xl w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 lg:w-64 lg:h-64 shrink-0">
                                        <a href="{{ asset('Screenshot 2025-11-25 211753.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('Screenshot 2025-11-25 211753.png') }}" alt="Resort Space 4" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 lg:w-64 lg:h-64 shrink-0">
                                        <a href="{{ asset('Screenshot 2025-11-25 211758.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('Screenshot 2025-11-25 211758.png') }}" alt="Resort Space 5" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 lg:w-64 lg:h-64 shrink-0">
                                        <a href="{{ asset('Screenshot 2025-11-25 211804.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('Screenshot 2025-11-25 211804.png') }}" alt="Resort Space 6" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Slide 3 --}}
                            <div class="min-w-full shrink-0">
                                <div class="flex justify-center items-center gap-3 md:gap-4 lg:gap-6 flex-wrap">
                                    <div class="group relative overflow-hidden rounded-xl w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 lg:w-64 lg:h-64 shrink-0">
                                        <a href="{{ asset('Screenshot 2025-11-25 211817.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('Screenshot 2025-11-25 211817.png') }}" alt="Resort Space 7" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 lg:w-64 lg:h-64 shrink-0">
                                        <a href="{{ asset('Screenshot 2025-11-25 211823.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('Screenshot 2025-11-25 211823.png') }}" alt="Resort Space 8" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    </div>
                                    <div class="group relative overflow-hidden rounded-xl w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 lg:w-64 lg:h-64 shrink-0">
                                        <a href="{{ asset('Screenshot 2025-11-25 211730.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('Screenshot 2025-11-25 211730.png') }}" alt="Resort Space 9" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
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

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    <script>
        // Rules content data
        const rulesContent = {
            room: {
                title: 'Rules of Beachfront Room',
                content: `
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-lg font-semibold text-[#1B1B18] mb-3">Identitas & Pembayaran:</h4>
                            <ul class="space-y-2 text-[#706F6C]">
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span><strong>Setiap tamu yang check-in WAJIB MEMPERLIHATKAN IDENTITAS DIRI</strong> dan membayar penginapan sesuai tarif</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="text-lg font-semibold text-[#1B1B18] mb-3">Pemesanan:</h4>
                            <ul class="space-y-2 text-[#706F6C]">
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Pemesanan dapat dilakukan secara daring dan online</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span><strong>Untuk bookingan yang ingin di-keep tanggal tertentu WAJIB DILAKUKAN PELUNASAN DIAWAL</strong> sebelum tanggal check-in</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="text-lg font-semibold text-[#1B1B18] mb-3">Waktu Check-in & Check-out:</h4>
                            <ul class="space-y-2 text-[#706F6C]">
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span><strong>Waktu check-in pukul 12.00 WIB</strong> dan <strong>waktu check-out 14.00 WIB</strong></span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span><strong>Check-in lebih awal sebelum jam 12.00 WIB</strong> dikenakan biaya tambahan <strong>Rp. 100.000</strong></span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span><strong>Terlambat check-out di atas jam 14.00 - 18.00</strong> dikenakan tambahan biaya <strong>Rp. 300.000</strong></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                `
            },
            pool: {
                title: 'Rules of Swimming Pool Package',
                content: `
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-lg font-semibold text-[#1B1B18] mb-3">Kenyamanan:</h4>
                            <ul class="space-y-2 text-[#706F6C]">
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Gunakan pakaian renang yang layak sesuai aturan yang berlaku</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Hindari berbuat gaduh atau mendorong orang lain di tepi kolam</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Patuhilah aturan kolam renang yang spesifik seperti larangan membawa barang tertentu</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Jaga barang berharga dengan menyimpannya di loker jika tersedia</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Jangan berenang saat gelap jika pencahayaan terbatas, karena pandangan akan terbatas</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="text-lg font-semibold text-[#1B1B18] mb-3">Etika dan Kebersihan:</h4>
                            <ul class="space-y-2 text-[#706F6C]">
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Mandi dan membilas tubuh sebelum masuk kolam untuk menjaga kebersihan air</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Mengenakan pakaian renang yang sesuai</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Gunakan toilet untuk buang air, jangan melakukannya di dalam kolam renang</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Tidak makan, minum, dan merokok di area pinggir kolam</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Buang sampah pada tempatnya</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="text-lg font-semibold text-[#1B1B18] mb-3">Keselamatan:</h4>
                            <ul class="space-y-2 text-[#706F6C]">
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Lakukan pemanasan sebelum berenang untuk menghindari cedera seperti kram</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Tidak berlari di sekitar area kolam renang yang bisa menyebabkan terpleset atau jatuh</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="text-lg font-semibold text-[#1B1B18] mb-3">Umum:</h4>
                            <ul class="space-y-2 text-[#706F6C]">
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Awasi anak-anak saat berenang dan pastikan mereka didampingi oleh orang dewasa</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Jangan berenang saat sakit terutama penyakit menular untuk mencegah penyebaran</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Hindari berenang saat hujan deras atau ada kilat</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Periksa area sekitar sebelum melompat ke dalam kolam untuk memastikan tidak ada orang atau benda lain di bawah</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-[#8B734C] mt-1">•</span>
                                    <span>Perhatikan kedalaman kolam dan pilih area yang sesuai dengan kemampuan berenang Anda, terutama bagi pemula</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                `
            }
        };

        // Function to open rules modal
        function openRulesModal(type) {
            const modal = document.getElementById('rulesModal');
            const modalDialog = document.getElementById('modalDialog');
            const modalTitle = document.getElementById('modalTitle');
            const modalContent = document.getElementById('modalContent');
            
            if (rulesContent[type]) {
                modalTitle.textContent = rulesContent[type].title;
                modalContent.innerHTML = rulesContent[type].content;
                
                // Show modal
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
                
                // Trigger animation
                setTimeout(() => {
                    modalDialog.classList.remove('scale-95', 'opacity-0');
                    modalDialog.classList.add('scale-100', 'opacity-100');
                }, 10);
            }
        }

        // Function to close rules modal
        function closeRulesModal() {
            const modal = document.getElementById('rulesModal');
            const modalDialog = document.getElementById('modalDialog');
            
            // Trigger close animation
            modalDialog.classList.remove('scale-100', 'opacity-100');
            modalDialog.classList.add('scale-95', 'opacity-0');
            
            // Hide modal after animation
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            }, 300);
        }

        // Close modal when clicking outside
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('rulesModal');
            if (modal) {
                modal.addEventListener('click', function(e) {
                    if (e.target === this) {
                        closeRulesModal();
                    }
                });
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const modal = document.getElementById('rulesModal');
                if (modal && !modal.classList.contains('hidden')) {
                    closeRulesModal();
                }
            }
        });

        // Prevent modal dialog from closing when clicked
        document.addEventListener('DOMContentLoaded', function() {
            const modalDialog = document.getElementById('modalDialog');
            if (modalDialog) {
                modalDialog.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }
        });

        // Gallery functionality (existing code)
        document.addEventListener('DOMContentLoaded', function() {
            let currentSlide = 0;
            const totalSlides = 3;
            const carousel = document.getElementById('resort-gallery-carousel');
            const dots = document.querySelectorAll('.resort-gallery-dot');
            const prevBtn = document.getElementById('resort-gallery-prev');
            const nextBtn = document.getElementById('resort-gallery-next');

            function updateCarousel() {
                const translateX = -currentSlide * 100;
                carousel.style.transform = `translateX(${translateX}%)`;
                
                // Update dots
                dots.forEach((dot, index) => {
                    if (index === currentSlide) {
                        dot.classList.add('active');
                        dot.classList.remove('bg-gray-300', 'hover:bg-gray-400');
                        dot.classList.add('bg-[#8B734C]');
                    } else {
                        dot.classList.remove('active', 'bg-[#8B734C]');
                        dot.classList.add('bg-gray-300', 'hover:bg-gray-400');
                    }
                });
            }

            // Previous button
            prevBtn.addEventListener('click', function() {
                currentSlide = currentSlide > 0 ? currentSlide - 1 : totalSlides - 1;
                updateCarousel();
            });

            // Next button
            nextBtn.addEventListener('click', function() {
                currentSlide = currentSlide < totalSlides - 1 ? currentSlide + 1 : 0;
                updateCarousel();
            });

            // Dot navigation
            dots.forEach((dot, index) => {
                dot.addEventListener('click', function() {
                    currentSlide = index;
                    updateCarousel();
                });
            });

            // Auto-play (optional)
            setInterval(function() {
                currentSlide = currentSlide < totalSlides - 1 ? currentSlide + 1 : 0;
                updateCarousel();
            }, 5000);
        });
    </script>
@endsection

