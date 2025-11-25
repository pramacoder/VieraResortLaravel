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
                    <a href="/cafe" class="text-sm font-medium text-[#8B734C] transition-colors font-semibold">Cafe & Resto</a>
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
                <a href="/resort" class="block text-sm font-medium text-[#1B1B18] hover:text-[#8B734C] transition-colors">Resort</a>
                <a href="/cafe" class="block text-sm font-medium text-[#8B734C] font-semibold">Cafe & Resto</a>
                <a href="/booking" class="block text-sm font-medium text-[#1B1B18] hover:text-[#8B734C] transition-colors">Book</a>
                <a href="/booking" class="block px-6 py-2.5 bg-[#8B734C] text-white rounded-lg font-medium text-center">Reserve</a>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <div class="absolute inset-0 z-0">
            <div class="w-full h-full bg-cover bg-center" style="background-image: url('{{ asset('VieraCafe&Resto.jpg') }}');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/70"></div>
        </div>
        <div class="relative z-10 container mx-auto px-4 lg:px-8 text-center max-w-4xl">
            <div class="animate-fade-in-up">
                <p class="text-sm uppercase tracking-wider text-white/80 mb-4">Welcome</p>
                <h1 class="text-5xl lg:text-7xl xl:text-8xl font-serif font-bold text-white mb-6 leading-tight" style="font-family: 'Cormorant Garamond', serif;">
                    Dine by the shore
                </h1>
                <p class="text-lg lg:text-xl text-white/90 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Where the sea meets your table and every meal tastes like home
                </p>
                <p class="text-lg lg:text-xl text-white/90 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Open everyday 08.00 am - 10.00 pm!!!
                </p>
                <a href="/booking" class="inline-block px-8 py-3.5 bg-[#8B734C] text-white rounded-lg font-semibold hover:bg-[#7A6340] transition-all transform hover:scale-105 shadow-lg">
                    Reserve
                </a>
            </div>
        </div>
    </section>

    {{-- We cook with what the sea and land give us --}}
    <section class="bg-[#FDFBF7] py-12 sm:py-16 lg:py-20 xl:py-32">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8 sm:gap-12 lg:gap-16 items-center">
                {{-- Left Section: Text Content --}}
                <div class="animate-on-scroll w-full lg:w-1/2 flex flex-col justify-center">
                    <p class="text-sm uppercase tracking-wider text-[#706F6C] mb-4">Sourced</p>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-serif font-bold text-[#1B1B18] mb-6 leading-tight" style="font-family: 'Cormorant Garamond', serif;">
                        We cook with what the sea and land give us
                    </h2>
                    <p class="text-base sm:text-lg text-[#706F6C] mb-6 leading-relaxed">
                        Every ingredient comes from nearby waters and local farms. We don't believe in shortcuts or long supply chains. What arrives at your table was caught or picked the same day.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3 text-[#706F6C]">
                            <div class="w-5 h-5 rounded-full bg-[#1B1B18] flex items-center justify-center flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span>Fish brought in by dawn boats</span>
                        </li>
                        <li class="flex items-center gap-3 text-[#706F6C]">
                            <div class="w-5 h-5 rounded-full bg-[#1B1B18] flex items-center justify-center flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span>Vegetables from the valley farms</span>
                        </li>
                        <li class="flex items-center gap-3 text-[#706F6C]">
                            <div class="w-5 h-5 rounded-full bg-[#1B1B18] flex items-center justify-center flex-shrink-0">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span>Herbs grown in our garden</span>
                        </li>
                    </ul>
                    <div class="flex flex-col sm:flex-row gap-4 items-start">
                        <a href="#menu" class="px-6 py-3 border border-[#1B1B18] bg-white text-[#1B1B18] rounded-lg font-semibold hover:bg-[#1B1B18] hover:text-white transition-all">
                            Explore
                        </a>
                        <a href="#menu" class="px-6 py-3 text-[#1B1B18] font-semibold hover:text-[#8B734C] transition-colors flex items-center gap-2 group">
                            Learn
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Right Section: Image --}}
                <div class="animate-on-scroll-delay-1 w-full lg:w-1/2">
                    <div class="relative rounded-2xl overflow-hidden">
                        <img src="{{ asset('VieraCafe&Resto2.png') }}" alt="Viera Cafe & Resto" class="w-full h-auto object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Menu Section --}}
    <section id="menu" class="bg-[#FDFBF7] py-20 lg:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-4xl lg:text-6xl font-serif font-bold text-[#1B1B18] mb-4" style="font-family: 'Cormorant Garamond', serif;">
                    Viera Café & Restaurant
                </h2>
                <p class="text-lg text-[#706F6C] max-w-2xl mx-auto">
                    Beverages & Restaurant
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 max-w-7xl mx-auto">
                {{-- Card 1: Food - Rice & Main Dishes, Chicken --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 lg:p-10 animate-on-scroll-delay-1">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-12 h-12 bg-[#8B734C] rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-serif font-bold text-[#1B1B18]" style="font-family: 'Cormorant Garamond', serif;">Food</h3>
                    </div>
                    
                    <div class="space-y-6">
                        {{-- Rice & Main Dishes --}}
                        <div>
                            <h4 class="text-lg font-semibold text-[#8B734C] mb-4 border-b border-[#E8E6E0] pb-2">Rice & Main Dishes</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Rice</span>
                                    <span class="font-semibold text-[#8B734C]">10K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Rice (Fried Chicken + Veg)</span>
                                    <span class="font-semibold text-[#8B734C]">30K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Viera Fried Rice</span>
                                    <span class="font-semibold text-[#8B734C]">30K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Fried Rice Club</span>
                                    <span class="font-semibold text-[#8B734C]">20K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Rice Egg</span>
                                    <span class="font-semibold text-[#8B734C]">20K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Fried Potato</span>
                                    <span class="font-semibold text-[#8B734C]">30K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Chicken Porridge</span>
                                    <span class="font-semibold text-[#8B734C]">20K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Instant Noodle Fried Rice + Egg</span>
                                    <span class="font-semibold text-[#8B734C]">30K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Wet Noodle Fried Rice (S)</span>
                                    <span class="font-semibold text-[#8B734C]">40K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Chicken Egg Vermicelli (L)</span>
                                    <span class="font-semibold text-[#8B734C]">40K</span>
                                </div>
                            </div>
                        </div>

                        {{-- Chicken Dishes --}}
                        <div>
                            <h4 class="text-lg font-semibold text-[#8B734C] mb-4 border-b border-[#E8E6E0] pb-2">Chicken</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Butter Fried Chicken</span>
                                    <span class="font-semibold text-[#8B734C]">50K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Crispy Fried Chicken Fillet</span>
                                    <span class="font-semibold text-[#8B734C]">40K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Chicken Katsu</span>
                                    <span class="font-semibold text-[#8B734C]">50K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Chicken Soup</span>
                                    <span class="font-semibold text-[#8B734C]">60K-120K</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 2: Food - Seafood, Vegetables, Other Dishes, Fried Food, Stew --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 lg:p-10 animate-on-scroll-delay-2">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-12 h-12 bg-[#8B734C] rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-serif font-bold text-[#1B1B18]" style="font-family: 'Cormorant Garamond', serif;">Food</h3>
                    </div>
                    
                    <div class="space-y-6">
                        {{-- Seafood --}}
                        <div>
                            <h4 class="text-lg font-semibold text-[#8B734C] mb-4 border-b border-[#E8E6E0] pb-2">Seafood</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Fish Soup</span>
                                    <span class="font-semibold text-[#8B734C]">85K-120K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Grilled Fish</span>
                                    <span class="font-semibold text-[#8B734C]">Call</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Fried Fish (Piece)</span>
                                    <span class="font-semibold text-[#8B734C]">10K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Crispy Fried Fish (Boneless)</span>
                                    <span class="font-semibold text-[#8B734C]">40K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Sea Shells / Clam</span>
                                    <span class="font-semibold text-[#8B734C]">40K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Crispy Fried Cuttlefish</span>
                                    <span class="font-semibold text-[#8B734C]">45K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Viera Fried Cuttlefish</span>
                                    <span class="font-semibold text-[#8B734C]">45K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Soy Sauce Cuttlefish</span>
                                    <span class="font-semibold text-[#8B734C]">40K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Stir Fry Crab (Sautee)</span>
                                    <span class="font-semibold text-[#8B734C]">70K-200K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Lobster</span>
                                    <span class="font-semibold text-[#8B734C]">100K-500K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Crunchy Shrimp Sweet & Sour</span>
                                    <span class="font-semibold text-[#8B734C]">45K</span>
                                </div>
                            </div>
                        </div>

                        {{-- Vegetables --}}
                        <div>
                            <h4 class="text-lg font-semibold text-[#8B734C] mb-4 border-b border-[#E8E6E0] pb-2">Vegetables</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Traditional Vegetable</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Seaweed</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Cah Spinach Mustard</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Papaya Flower + Mustard</span>
                                    <span class="font-semibold text-[#8B734C]">26K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Papaya Flower</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Papaya Leaf</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Capcay</span>
                                    <span class="font-semibold text-[#8B734C]">50K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Fruit Vegetable Salad</span>
                                    <span class="font-semibold text-[#8B734C]">40K</span>
                                </div>
                            </div>
                        </div>

                        {{-- Other Dishes --}}
                        <div>
                            <h4 class="text-lg font-semibold text-[#8B734C] mb-4 border-b border-[#E8E6E0] pb-2">Other Dishes</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Fried Egg</span>
                                    <span class="font-semibold text-[#8B734C]">10K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Cassava Roast</span>
                                    <span class="font-semibold text-[#8B734C]">30K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Cassava Roasted</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Papeda</span>
                                    <span class="font-semibold text-[#8B734C]">25K/50K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Papeda Fish Soup (5 Person)</span>
                                    <span class="font-semibold text-[#8B734C]">170K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Viera Soup (Fish Leader)</span>
                                    <span class="font-semibold text-[#8B734C]">60K</span>
                                </div>
                            </div>
                        </div>

                        {{-- Fried Food --}}
                        <div>
                            <h4 class="text-lg font-semibold text-[#8B734C] mb-4 border-b border-[#E8E6E0] pb-2">Fried Food</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Fried Cassava Banana</span>
                                    <span class="font-semibold text-[#8B734C]">30K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Chocolate Cheese Banana</span>
                                    <span class="font-semibold text-[#8B734C]">30K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Fried Crunchy Banana</span>
                                    <span class="font-semibold text-[#8B734C]">30K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Fried Cassava Crunchy Banana</span>
                                    <span class="font-semibold text-[#8B734C]">30K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Fried Sweet Potato</span>
                                    <span class="font-semibold text-[#8B734C]">30K</span>
                                </div>
                            </div>
                        </div>

                        {{-- Stew --}}
                        <div>
                            <h4 class="text-lg font-semibold text-[#8B734C] mb-4 border-b border-[#E8E6E0] pb-2">Stew</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Banana</span>
                                    <span class="font-semibold text-[#8B734C]">25K-50K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Sweet Potato</span>
                                    <span class="font-semibold text-[#8B734C]">25K-50K</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 3: Beverages - Beer, Drinks --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 lg:p-10 animate-on-scroll-delay-3">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-12 h-12 bg-[#8B734C] rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-serif font-bold text-[#1B1B18]" style="font-family: 'Cormorant Garamond', serif;">Beverages</h3>
                    </div>
                    
                    <div class="space-y-6">
                        {{-- Beer --}}
                        <div>
                            <h4 class="text-lg font-semibold text-[#8B734C] mb-4 border-b border-[#E8E6E0] pb-2">Beer</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Bottled Beer (L)</span>
                                    <span class="font-semibold text-[#8B734C]">76K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Bottled Beer (S)</span>
                                    <span class="font-semibold text-[#8B734C]">60K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Jumbo Canned Beer (L)</span>
                                    <span class="font-semibold text-[#8B734C]">65K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Small Canned Beer (S)</span>
                                    <span class="font-semibold text-[#8B734C]">40K</span>
                                </div>
                            </div>
                        </div>

                        {{-- Drinks --}}
                        <div>
                            <h4 class="text-lg font-semibold text-[#8B734C] mb-4 border-b border-[#E8E6E0] pb-2">Drinks</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Hot/Cold Coffee/Tea</span>
                                    <span class="font-semibold text-[#8B734C]">15K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Hot Spiced Coffee/Tea</span>
                                    <span class="font-semibold text-[#8B734C]">15K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Mocktail</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">ABC Mocca or Fresco</span>
                                    <span class="font-semibold text-[#8B734C]">15K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Gooday, Hot/Cold Milo</span>
                                    <span class="font-semibold text-[#8B734C]">15K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Hot/Cold White/Chocolate Milk</span>
                                    <span class="font-semibold text-[#8B734C]">15K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Coffee Milk</span>
                                    <span class="font-semibold text-[#8B734C]">15K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Hot Chocolate</span>
                                    <span class="font-semibold text-[#8B734C]">15K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Hot Ovaltine</span>
                                    <span class="font-semibold text-[#8B734C]">15K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Sprite, Fanta, Coca-Cola</span>
                                    <span class="font-semibold text-[#8B734C]">10K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Fresh Fruit Smoothie</span>
                                    <span class="font-semibold text-[#8B734C]">5K-10K</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 4: Beverages - Snacks, Juice --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 lg:p-10 animate-on-scroll-delay-4">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-12 h-12 bg-[#8B734C] rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-serif font-bold text-[#1B1B18]" style="font-family: 'Cormorant Garamond', serif;">Beverages</h3>
                    </div>
                    
                    <div class="space-y-6">
                        {{-- Snacks --}}
                        <div>
                            <h4 class="text-lg font-semibold text-[#8B734C] mb-4 border-b border-[#E8E6E0] pb-2">Snacks</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Banana Pan Cake</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">White Bread + Omelette</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Burger (Bread, Meat, Vegetables, Cheese)</span>
                                    <span class="font-semibold text-[#8B734C]">30K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Burger (Bread, Meat, Vegetables, Tomato)</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Burger (Bread, 2 Meat, Vegetables, Cheese)</span>
                                    <span class="font-semibold text-[#8B734C]">45K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Burger (Bread, 3 Meats, Vegetables, Cheese)</span>
                                    <span class="font-semibold text-[#8B734C]">50K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Viera Rainbow Salad</span>
                                    <span class="font-semibold text-[#8B734C]">24K</span>
                                </div>
                            </div>
                        </div>

                        {{-- Juice --}}
                        <div>
                            <h4 class="text-lg font-semibold text-[#8B734C] mb-4 border-b border-[#E8E6E0] pb-2">Juice</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Mango</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Avocado</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Cucumber</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Pineapple</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Soursop</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Dragon Fruit</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Papaya</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Orange/Lemon</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Red/White Melon</span>
                                    <span class="font-semibold text-[#8B734C]">25K</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-[#F5F5F3]">
                                    <span class="text-[#1B1B18]">Original Fruit Smoothie</span>
                                    <span class="font-semibold text-[#8B734C]">50K</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <p class="text-[#706F6C] italic">
                    Enjoy your food and drinks. Thank you and blessings.
                </p>
            </div>
        </div>
    </section>

    {{-- What we serve Menu Section --}}
    <section id="menu" class="bg-[#8B734C] py-20 lg:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16 animate-on-scroll">
                    <h2 class="text-4xl lg:text-6xl font-serif font-bold text-white mb-4" style="font-family: 'Cormorant Garamond', serif;">
                        VIERA CAFE & RESTO BUFFET MENU
                    </h2>
                    <p class="text-lg text-white/90 max-w-2xl mx-auto">
                        Lunch Buffet - Menu subject to confirmation
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    {{-- Buffet IDR 100,000 --}}
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 animate-on-scroll-delay-1 transform hover:scale-105 transition-transform">
                        <h3 class="text-2xl font-semibold text-white mb-2">Buffet IDR 100,000</h3>
                        <p class="text-white/70 mb-6">per person</p>
                        <div class="text-5xl font-bold text-white mb-8">100k</div>
                        <ul class="space-y-2.5 mb-8 text-sm">
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>White Rice</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Chicken Soup / Viera Soup</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Chicken (spicy, soy sauce, fried)</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Grilled Fish</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Pickles / Capcay</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Noodles / Vermicelli</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Eggs</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Fruit</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Mini Mineral Water</span>
                            </li>
                        </ul>
                        <a href="/booking" class="block w-full px-6 py-3 bg-white text-[#8B734C] rounded-lg font-semibold text-center hover:bg-[#FDFBF7] transition-colors">
                            Order now
                        </a>
                    </div>

                    {{-- Buffet IDR 150,000 --}}
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 animate-on-scroll-delay-2 transform hover:scale-105 transition-transform">
                        <h3 class="text-2xl font-semibold text-white mb-2">Buffet IDR 150,000</h3>
                        <p class="text-white/70 mb-6">per person</p>
                        <div class="text-5xl font-bold text-white mb-8">150k</div>
                        <ul class="space-y-2.5 mb-8 text-sm">
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>White Rice and Buras</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Enbal Bubuhuk / Stew</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Chicken</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Viera Fish Soup / Soto / Meatballs</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Grilled Fish</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Pickles / Cap cay</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Osengan Tempe / Tofu</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Noodles / Vermicelli</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Eggs</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Fruit ice</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Mineral water</span>
                            </li>
                        </ul>
                        <a href="/booking" class="block w-full px-6 py-3 bg-white text-[#8B734C] rounded-lg font-semibold text-center hover:bg-[#FDFBF7] transition-colors">
                            Order now
                        </a>
                    </div>

                    {{-- Buffet IDR 200,000 --}}
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 animate-on-scroll-delay-3 transform hover:scale-105 transition-transform">
                        <h3 class="text-2xl font-semibold text-white mb-2">Buffet IDR 200,000</h3>
                        <p class="text-white/70 mb-6">per person</p>
                        <div class="text-5xl font-bold text-white mb-8">200k</div>
                        <ul class="space-y-2.5 mb-8 text-sm">
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>White rice and buras</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Stew</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Chicken (free choice)</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Grilled fish</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Squid / crab</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Rendang / beef sticks</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Viera soup / soto / meatballs</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Capcay</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Lat</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Pickled Vegetables / Stir-fried Tempeh / Tofu</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Noodles / Rice Vermicelli</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Crackers</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Pudding</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Fruit Ice</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Mineral Water</span>
                            </li>
                            <li class="flex items-start gap-3 text-white/90">
                                <svg class="w-5 h-5 text-white mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Infused Water</span>
                            </li>
                        </ul>
                        <a href="/booking" class="block w-full px-6 py-3 bg-white text-[#8B734C] rounded-lg font-semibold text-center hover:bg-[#FDFBF7] transition-colors">
                            Order now
                        </a>
                    </div>
                </div>
                
                <div class="text-center mt-12">
                    <p class="text-white/80 text-sm italic">
                        Note: Menu subject to confirmation. Thank you.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Gallery Section --}}
    <section class="bg-[#FDFBF7] py-20 lg:py-32">
        <style>
            .cafe-gallery-item {
                position: relative;
                width: 300px;
                height: 300px;
                overflow: hidden;
                flex-shrink: 0;
            }
            .cafe-gallery-img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }
            .cafe-gallery-container {
                position: relative;
            }
            .cafe-gallery-grid {
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 1.5rem;
                flex-wrap: wrap;
            }
            #cafe-gallery-prev,
            #cafe-gallery-next {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                z-index: 20;
            }
            #cafe-gallery-prev {
                left: 1rem;
            }
            #cafe-gallery-next {
                right: 1rem;
            }
            @media (max-width: 768px) {
                .cafe-gallery-item {
                    width: 150px;
                    height: 150px;
                }
                #cafe-gallery-prev {
                    left: 0.5rem;
                }
                #cafe-gallery-next {
                    right: 0.5rem;
                }
            }
            @media (min-width: 1024px) {
                .cafe-gallery-item {
                    width: 300px;
                    height: 300px;
                }
            }
        </style>
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12 animate-on-scroll">
                    <h2 class="text-4xl lg:text-6xl font-serif font-bold text-[#1B1B18] mb-4" style="font-family: 'Cormorant Garamond', serif;">
                        Our gallery
                    </h2>
                    <p class="text-lg text-[#706F6C] max-w-2xl mx-auto">
                        See the place where good food and ocean views become one memory
                    </p>
                </div>

                {{-- Gallery Carousel --}}
                <div class="cafe-gallery-container relative">
                    {{-- Carousel Container --}}
                    <div class="relative overflow-hidden rounded-2xl max-w-7xl mx-auto">
                        <div class="flex transition-transform duration-500 ease-in-out" id="cafe-gallery-carousel" style="transform: translateX(0%);">
                            {{-- Slide 1 --}}
                            <div class="min-w-full flex-shrink-0">
                                <div class="cafe-gallery-grid">
                                    <div class="cafe-gallery-item group rounded-xl">
                                        <a href="{{ asset('GaleriCafe1.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('GaleriCafe1.png') }}" alt="Cafe Gallery 1" class="cafe-gallery-img group-hover:scale-110 transition-transform duration-700" loading="lazy">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl"></div>
                                        </a>
                                    </div>
                                    <div class="cafe-gallery-item group rounded-xl">
                                        <a href="{{ asset('GaleriCafe2.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('GaleriCafe2.png') }}" alt="Cafe Gallery 2" class="cafe-gallery-img group-hover:scale-110 transition-transform duration-700" loading="lazy">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl"></div>
                                        </a>
                                    </div>
                                    <div class="cafe-gallery-item group rounded-xl">
                                        <a href="{{ asset('GaleriCafe3.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('GaleriCafe3.png') }}" alt="Cafe Gallery 3" class="cafe-gallery-img group-hover:scale-110 transition-transform duration-700" loading="lazy">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Slide 2 --}}
                            <div class="min-w-full flex-shrink-0">
                                <div class="cafe-gallery-grid">
                                    <div class="cafe-gallery-item group rounded-xl">
                                        <a href="{{ asset('GaleriCafe4.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('GaleriCafe4.png') }}" alt="Cafe Gallery 4" class="cafe-gallery-img group-hover:scale-110 transition-transform duration-700" loading="lazy">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl"></div>
                                        </a>
                                    </div>
                                    <div class="cafe-gallery-item group rounded-xl">
                                        <a href="{{ asset('GaleriCafe5.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('GaleriCafe5.png') }}" alt="Cafe Gallery 5" class="cafe-gallery-img group-hover:scale-110 transition-transform duration-700" loading="lazy">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl"></div>
                                        </a>
                                    </div>
                                    <div class="cafe-gallery-item group rounded-xl">
                                        <a href="{{ asset('GaleriCafe6.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('GaleriCafe6.png') }}" alt="Cafe Gallery 6" class="cafe-gallery-img group-hover:scale-110 transition-transform duration-700" loading="lazy">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Slide 3 --}}
                            <div class="min-w-full flex-shrink-0">
                                <div class="cafe-gallery-grid">
                                    <div class="cafe-gallery-item group rounded-xl">
                                        <a href="{{ asset('GaleriCafe7.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('GaleriCafe7.png') }}" alt="Cafe Gallery 7" class="cafe-gallery-img group-hover:scale-110 transition-transform duration-700" loading="lazy">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl"></div>
                                        </a>
                                    </div>
                                    <div class="cafe-gallery-item group rounded-xl">
                                        <a href="{{ asset('GaleriCafe8.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('GaleriCafe8.png') }}" alt="Cafe Gallery 8" class="cafe-gallery-img group-hover:scale-110 transition-transform duration-700" loading="lazy">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl"></div>
                                        </a>
                                    </div>
                                    <div class="cafe-gallery-item group rounded-xl">
                                        <a href="{{ asset('GaleriCafe9.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('GaleriCafe9.png') }}" alt="Cafe Gallery 9" class="cafe-gallery-img group-hover:scale-110 transition-transform duration-700" loading="lazy">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Slide 4 --}}
                            <div class="min-w-full flex-shrink-0">
                                <div class="cafe-gallery-grid">
                                    <div class="cafe-gallery-item group rounded-xl">
                                        <a href="{{ asset('GaleriCafe10.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('GaleriCafe10.png') }}" alt="Cafe Gallery 10" class="cafe-gallery-img group-hover:scale-110 transition-transform duration-700" loading="lazy">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl"></div>
                                        </a>
                                    </div>
                                    <div class="cafe-gallery-item group rounded-xl">
                                        <a href="{{ asset('GaleriCafe1.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('GaleriCafe1.png') }}" alt="Cafe Gallery 11" class="cafe-gallery-img group-hover:scale-110 transition-transform duration-700" loading="lazy">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl"></div>
                                        </a>
                                    </div>
                                    <div class="cafe-gallery-item group rounded-xl">
                                        <a href="{{ asset('GaleriCafe2.png') }}" class="block w-full h-full" target="_blank">
                                            <img src="{{ asset('GaleriCafe2.png') }}" alt="Cafe Gallery 12" class="cafe-gallery-img group-hover:scale-110 transition-transform duration-700" loading="lazy">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Navigation Arrows --}}
                        <button id="cafe-gallery-prev" class="w-12 h-12 bg-white/90 hover:bg-white rounded-full shadow-lg flex items-center justify-center transition-all hover:scale-110">
                            <svg class="w-6 h-6 text-[#1B1B18]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button id="cafe-gallery-next" class="w-12 h-12 bg-white/90 hover:bg-white rounded-full shadow-lg flex items-center justify-center transition-all hover:scale-110">
                            <svg class="w-6 h-6 text-[#1B1B18]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    {{-- Pagination Dots --}}
                    <div class="flex justify-center gap-2 mt-8">
                        <button class="cafe-gallery-dot w-2.5 h-2.5 rounded-full bg-[#8B734C] transition-all active" data-index="0"></button>
                        <button class="cafe-gallery-dot w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-gray-400 transition-all" data-index="1"></button>
                        <button class="cafe-gallery-dot w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-gray-400 transition-all" data-index="2"></button>
                        <button class="cafe-gallery-dot w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-gray-400 transition-all" data-index="3"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

