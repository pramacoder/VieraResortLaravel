@extends('layouts.app')

@section('content')
    {{-- Navigation --}}
    <x-navbar />

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

    {{-- Contact & Maps Section --}}
    <section class="bg-[#FDFBF7] py-12 sm:py-16 lg:py-20 xl:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8 sm:gap-12 lg:gap-16 items-start">
                {{-- Left Section: Contact (WhatsApp & Instagram) --}}
                <div class="w-full lg:w-1/2 flex flex-col justify-center text-center lg:text-left">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-serif font-bold text-[#1B1B18] mb-8" style="font-family: 'Cormorant Garamond', serif;">
                        Get in Touch
                    </h2>
                    
                    {{-- WhatsApp Section --}}
                    <div class="mb-8">
                        <h3 class="text-2xl sm:text-3xl font-serif font-semibold text-[#1B1B18] mb-4" style="font-family: 'Cormorant Garamond', serif;">
                            Message us on WhatsApp
                        </h3>
                        <p class="text-base sm:text-lg text-[#706F6C] mb-6 max-w-2xl mx-auto lg:mx-0">
                            Connect instantly with our team to secure your reservation and answer any questions
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                            <a href="https://wa.me/6281343339810" 
                               class="px-8 py-3.5 bg-[#8B734C] text-white rounded-lg font-semibold hover:bg-[#7A6340] transition-colors inline-block text-center">
                                Book
                            </a>
                            <a href="https://wa.me/6281343339810" 
                               class="px-8 py-3.5 bg-white text-[#8B734C] border-2 border-[#8B734C] rounded-lg font-semibold hover:bg-[#FDFBF7] transition-colors inline-block text-center">
                                Call
                            </a>
                        </div>
                    </div>

                    {{-- Instagram Section --}}
                    <div>
                        <div class="flex items-center justify-center lg:justify-start gap-3 mb-4">
                            <img src="{{ asset('instagramIcon.png') }}" alt="Instagram" class="w-8 h-8">
                            <h3 class="text-2xl sm:text-3xl font-serif font-semibold text-[#1B1B18]" style="font-family: 'Cormorant Garamond', serif;">
                                Follow us on Instagram
                            </h3>
                        </div>
                        <p class="text-base sm:text-lg text-[#706F6C] mb-6 max-w-2xl mx-auto lg:mx-0">
                            Discover our resort's beautiful moments and stay updated with our latest cafe offerings
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                            <a href="https://www.instagram.com/viera_resortngurbloat?igsh=eGdqeXQwdWFsbjI3" target="_blank" rel="noopener noreferrer" class="px-8 py-3.5 bg-[#8B734C] text-white rounded-lg font-semibold hover:bg-[#7A6340] transition-colors text-center">
                                Follow Resort
                            </a>
                            <a href="https://www.instagram.com/viera.caffe_and_resto?igsh=bndrdWhrMmFyNjVs" target="_blank" rel="noopener noreferrer" class="px-8 py-3.5 bg-white text-[#8B734C] border-2 border-[#8B734C] rounded-lg font-semibold hover:bg-[#FDFBF7] transition-colors text-center">
                                Follow Cafe
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Right Section: Maps --}}
                <div class="w-full lg:w-1/2">
                    <div class="rounded-lg overflow-hidden shadow-lg">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.309445902038!2d132.6339336!3d-5.6683192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d300500091e7ce3%3A0x7dd44b1682f7da09!2sVieraResort!5e0!3m2!1sid!2sid!4v1764076058941!5m2!1sid!2sid" 
                            width="100%" 
                            height="500" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-[400px] lg:h-[500px]">
                        </iframe>
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
                    <a href="https://www.google.com/maps/place/VieraResort/@-5.6683192,132.6339336,15z/data=!4m6!3m5!1s0x2d300500091e7ce3:0x7dd44b1682f7da09!8m2!3d-5.6683192!4d132.6339336!16s%2Fg%2F11c48_2jpw?entry=ttu&g_ep=EgoyMDI1MTEyMi4wIKXMDSoASAFQAw%3D%3D" class="text-[#8B734C] underline">
                        Ngurbloat, Kei Kecil, Indonesia
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

