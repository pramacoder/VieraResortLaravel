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
                    <a href="/booking" class="text-sm font-medium text-[#8B734C] transition-colors font-semibold">Book</a>
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
                <a href="/booking" class="block text-sm font-medium text-[#8B734C] font-semibold">Book</a>
                <a href="/booking" class="block px-6 py-2.5 bg-[#8B734C] text-white rounded-lg font-medium text-center">Reserve</a>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="bg-[#FDFBF7] py-16 lg:py-24 pt-32">
        <div class="container mx-auto px-4 lg:px-8 text-center max-w-4xl">
            <h1 class="text-5xl lg:text-7xl font-serif font-bold text-[#1B1B18] mb-6" style="font-family: 'Cormorant Garamond', serif;">
                Book your stay
            </h1>
            <p class="text-lg lg:text-xl text-[#706F6C] max-w-2xl mx-auto">
                Reserve your rooms at Viera Resort Ngurbloat and begin your escape today
            </p>
        </div>
    </section>

    {{-- WhatsApp Section --}}
    <section class="bg-[#FDFBF7] py-12 sm:py-16 lg:py-20 xl:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8 sm:gap-12 lg:gap-16 items-center">
                {{-- Left Section: Text Content --}}
                <div class="w-full lg:w-1/2 flex flex-col justify-center text-center lg:text-left">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-serif font-bold text-[#1B1B18] mb-6" style="font-family: 'Cormorant Garamond', serif;">
                        Message us on WhatsApp
                    </h2>
                    <p class="text-base sm:text-lg lg:text-xl text-[#706F6C] mb-8 max-w-2xl mx-auto lg:mx-0">
                        Connect instantly with our team to secure your reservation and answer any questions
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
<a href="https://wa.me/6281343339810" 
   class="px-8 py-3.5 bg-[#8B734C] text-white rounded-lg font-semibold hover:bg-[#7A6340] transition-colors inline-block">
    Book
</a>

<a href="https://wa.me/6281343339810" 
   class="px-8 py-3.5 bg-white text-[#8B734C] border-2 border-[#8B734C] rounded-lg font-semibold hover:bg-[#FDFBF7] transition-colors inline-block">
    Call
</a>

                    </div>
                </div>

                {{-- Right Section: Image --}}
                <div class="w-full lg:w-1/2">
                    <div class="rounded-lg overflow-hidden">
                        <img src="{{ asset('whatsapp_web.jpg') }}" alt="WhatsApp Viera Resort Ngurbloat" class="w-full h-auto object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Instagram Resort Section --}}
    <section class="bg-white py-12 sm:py-16 lg:py-20 xl:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row-reverse gap-8 sm:gap-12 lg:gap-16 items-center">
                {{-- Left Section: Text Content --}}
                <div class="w-full lg:w-1/2 flex flex-col justify-center text-center lg:text-left">
                    <div class="flex items-center justify-center lg:justify-start gap-3 mb-4">
                        <img src="{{ asset('instagramIcon.png') }}" alt="Instagram" class="w-8 h-8">
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-serif font-bold text-[#1B1B18]" style="font-family: 'Cormorant Garamond', serif;">
                            Follow us on Instagram
                        </h2>
                    </div>
                    <p class="text-base sm:text-lg lg:text-xl text-[#706F6C] mb-8 max-w-2xl mx-auto lg:mx-0">
                        Discover our resort's beautiful moments, stunning views, and guest experiences on Instagram
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="https://www.instagram.com/viera_resortngurbloat?igsh=eGdqeXQwdWFsbjI3" target="_blank" rel="noopener noreferrer" class="px-8 py-3.5 bg-[#8B734C] text-white rounded-lg font-semibold hover:bg-[#7A6340] transition-colors text-center">
                            Follow Resort
                        </a>
                    </div>
                </div>

                {{-- Right Section: Image --}}
                <div class="w-full lg:w-1/2">
                    <div class="rounded-lg overflow-hidden">
                        <img src="{{ asset('instagramIcon.png') }}" alt="Instagram Viera Resort" class="w-full h-auto object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Instagram Cafe Section --}}
    <section class="bg-[#FDFBF7] py-12 sm:py-16 lg:py-20 xl:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8 sm:gap-12 lg:gap-16 items-center">
                {{-- Left Section: Text Content --}}
                <div class="w-full lg:w-1/2 flex flex-col justify-center text-center lg:text-left">
                    <div class="flex items-center justify-center lg:justify-start gap-3 mb-4">
                        <img src="{{ asset('instagramIcon.png') }}" alt="Instagram" class="w-8 h-8">
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-serif font-bold text-[#1B1B18]" style="font-family: 'Cormorant Garamond', serif;">
                            Follow our Cafe
                        </h2>
                    </div>
                    <p class="text-base sm:text-lg lg:text-xl text-[#706F6C] mb-8 max-w-2xl mx-auto lg:mx-0">
                        Stay updated with our latest menu items, special offers, and dining experiences at Viera Cafe
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="https://www.instagram.com/viera.caffe_and_resto?igsh=bndrdWhrMmFyNjVs" target="_blank" rel="noopener noreferrer" class="px-8 py-3.5 bg-[#8B734C] text-white rounded-lg font-semibold hover:bg-[#7A6340] transition-colors text-center">
                            Follow Cafe
                        </a>
                    </div>
                </div>

                {{-- Right Section: Image --}}
                <div class="w-full lg:w-1/2">
                    <div class="rounded-lg overflow-hidden">
                        <img src="{{ asset('instagramIcon.png') }}" alt="Instagram Viera Cafe" class="w-full h-auto object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="bg-[#8B734C] py-16 lg:py-24">
        <div class="container mx-auto px-4 lg:px-8 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-4xl lg:text-6xl font-serif font-bold text-white mb-4" style="font-family: 'Cormorant Garamond', serif;">
                    Questions
                </h2>
                <p class="text-lg lg:text-xl text-[#FDFBF7] max-w-2xl mx-auto">
                    Find answers to common questions about your stay at Viera Resort Ngurbloat
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                {{-- FAQ Item 1 --}}
                <div class="bg-transparent">
                    <div class="w-12 h-12 bg-[#FDFBF7] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-[#8B734C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">
                        How do I book a room?
                    </h3>
                    <p class="text-[#FDFBF7] text-sm leading-relaxed">
                        Contact us through WhatsApp or call directly to check availability and complete your reservation.
                    </p>
                </div>

                {{-- FAQ Item 2 --}}
                <div class="bg-transparent">
                    <div class="w-12 h-12 bg-[#FDFBF7] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-[#8B734C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">
                        What payment methods are accepted?
                    </h3>
                    <p class="text-[#FDFBF7] text-sm leading-relaxed">
                        We accept cash, bank transfers, and mobile payment options for your convenience.
                    </p>
                </div>

                {{-- FAQ Item 3 --}}
                <div class="bg-transparent">
                    <div class="w-12 h-12 bg-[#FDFBF7] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-[#8B734C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">
                        What is your cancellation policy?
                    </h3>
                    <p class="text-[#FDFBF7] text-sm leading-relaxed">
                        Cancellations made seven days before arrival receive a full refund of your deposit.
                    </p>
                </div>

                {{-- FAQ Item 4 --}}
                <div class="bg-transparent">
                    <div class="w-12 h-12 bg-[#FDFBF7] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-[#8B734C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">
                        When are check-in and check-out times?
                    </h3>
                    <p class="text-[#FDFBF7] text-sm leading-relaxed">
                        Check-in begins at two in the afternoon and check-out is at eleven in the morning.
                    </p>
                </div>

                {{-- FAQ Item 5 --}}
                <div class="bg-transparent">
                    <div class="w-12 h-12 bg-[#FDFBF7] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-[#8B734C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">
                        Are there group booking discounts?
                    </h3>
                    <p class="text-[#FDFBF7] text-sm leading-relaxed">
                        Yes, we offer special rates for groups of ten or more guests booking together.
                    </p>
                </div>

                {{-- FAQ Item 6 --}}
                <div class="bg-transparent">
                    <div class="w-12 h-12 bg-[#FDFBF7] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-[#8B734C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">
                        Can I modify my reservation?
                    </h3>
                    <p class="text-[#FDFBF7] text-sm leading-relaxed">
                        Changes to dates or room types can be made through WhatsApp up to five days before arrival.
                    </p>
                </div>
            </div>

            {{-- Need More Help Section --}}
            <div class="text-center bg-[#7A6340] rounded-lg p-8 lg:p-12">
                <h3 class="text-3xl lg:text-4xl font-serif font-bold text-white mb-4" style="font-family: 'Cormorant Garamond', serif;">
                    Need more help?
                </h3>
                <p class="text-lg text-[#FDFBF7] mb-6 max-w-xl mx-auto">
                    Reach out to our team directly for personalized assistance
                </p>
                <button class="px-8 py-3.5 bg-[#FDFBF7] text-[#8B734C] rounded-lg font-semibold hover:bg-white transition-colors">
                    Contact
                </button>
            </div>
        </div>
    </section>

    {{-- Get in Touch Section --}}
    <section class="bg-[#FDFBF7] py-16 lg:py-24">
        <div class="container mx-auto px-4 lg:px-8 max-w-6xl">
            <div class="text-center mb-12">
                <p class="text-sm uppercase tracking-wider text-[#706F6C] mb-2">Reach</p>
                <h2 class="text-4xl lg:text-6xl font-serif font-bold text-[#1B1B18] mb-4" style="font-family: 'Cormorant Garamond', serif;">
                    Get in touch
                </h2>
                <p class="text-lg lg:text-xl text-[#706F6C] max-w-2xl mx-auto">
                    Multiple ways to connect with us for your booking
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Email --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#8B734C] rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-[#1B1B18] mb-2">Email</h3>
                    <p class="text-[#706F6C] mb-3 text-sm">
                        Send us your inquiry and we'll respond promptly
                    </p>
                    <a href="karmina.savsav@gmail.com" class="text-[#8B734C] underline hover:text-[#7A6340] transition-colors">
                        karmina.savsav@gmail.com
                    </a>
                </div>

                {{-- Phone --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#8B734C] rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-[#1B1B18] mb-2">Phone</h3>
                    <p class="text-[#706F6C] mb-3 text-sm">
                        Call us directly to discuss your reservation needs
                    </p>
                    <a href="https://wa.me/6281343339810" class="text-[#8B734C] underline hover:text-[#7A6340] transition-colors">
                        081343339810
                    </a>
                </div>

                {{-- Location --}}
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#8B734C] rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-[#1B1B18] mb-2">Location</h3>
                    <p class="text-[#706F6C] mb-3 text-sm">
                        Visit us or find directions to our resort office
                    </p>
                    <p class="text-[#8B734C] underline">
                        Ngurbloat, Bali, Indonesia
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-[#8B734C] text-white py-12 lg:py-16">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-8">
                {{-- Logo --}}
                <div class="lg:col-span-1">
                    <div class="text-2xl font-serif font-semibold mb-4" style="font-family: 'Cormorant Garamond', serif;">Logo</div>
                </div>

                {{-- Explore more --}}
                <div>
                    <h4 class="font-semibold mb-4">Explore more</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Our resort</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Booking options</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Room booking</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Contact us</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Plan ahead</a></li>
                    </ul>
                </div>

                {{-- Get started --}}
                <div>
                    <h4 class="font-semibold mb-4">Get started</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:opacity-80 transition-opacity">How it works</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Home routes</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Testimonials</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Reserve today</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Languages</a></li>
                    </ul>
                </div>

                {{-- Connect --}}
                <div>
                    <h4 class="font-semibold mb-4">Connect</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:opacity-80 transition-opacity">WhatsApp us</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Email address</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Videos</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Call us now</a></li>
                        <li><a href="#" class="hover:opacity-80 transition-opacity">Reviews</a></li>
                    </ul>
                </div>

                {{-- Updates --}}
                <div>
                    <h4 class="font-semibold mb-4">Updates</h4>
                    <p class="text-sm mb-4 text-[#FDFBF7]">
                        Get news about new rooms, dining experiences, and special offers delivered straight to your inbox.
                    </p>
                    <form class="flex flex-col gap-2">
                        <input type="email" placeholder="your@email.com" class="px-4 py-2 rounded-lg bg-white text-[#1B1B18] placeholder-[#706F6C] focus:outline-none focus:ring-2 focus:ring-[#FDFBF7]">
                        <button type="submit" class="px-4 py-2 bg-[#FDFBF7] text-[#8B734C] rounded-lg font-semibold hover:bg-white transition-colors">
                            Join
                        </button>
                    </form>
                    <p class="text-xs mt-2 text-[#FDFBF7] opacity-80">
                        We respect your privacy, so we will never share your information.
                    </p>
                </div>
            </div>

            {{-- Bottom Bar --}}
            <div class="border-t border-[#7A6340] pt-8 mt-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="flex flex-wrap gap-4 text-sm">
                        <a href="#" class="hover:opacity-80 transition-opacity">Privacy Policy</a>
                        <a href="#" class="hover:opacity-80 transition-opacity">Terms of Service</a>
                        <a href="#" class="hover:opacity-80 transition-opacity">Cookie Settings</a>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="hover:opacity-80 transition-opacity">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="hover:opacity-80 transition-opacity">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="hover:opacity-80 transition-opacity">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="hover:opacity-80 transition-opacity">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="hover:opacity-80 transition-opacity">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="text-center mt-6 text-sm text-[#FDFBF7] opacity-80">
                    © 2023 Viera Resort Ngurbloat
                </div>
            </div>
        </div>
    </footer>
@endsection

