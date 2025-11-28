<footer class="bg-[#8B734C] text-white">
    <div class="container mx-auto px-4 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-12">
            {{-- Logo --}}
            <div class="lg:col-span-1">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('Logo Viera Group.svg') }}" alt="logo" class="h-10 w-10 lg:h-12 lg:w-12 rounded-full object-cover">
                </a>
            </div>

            {{-- Explore More --}}
            <div>
                <h4 class="font-semibold mb-4">Explore more</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/resort" class="hover:opacity-80 transition-opacity">Our resort</a></li>
                    <li><a href="/cafe" class="hover:opacity-80 transition-opacity">Dining options</a></li>
                    <li><a href="/booking" class="hover:opacity-80 transition-opacity">Make booking</a></li>
                    <li><a href="/booking#contact" class="hover:opacity-80 transition-opacity">Contact us</a></li>
                    <li><a href="/resort" class="hover:opacity-80 transition-opacity">Plan ahead</a></li>
                </ul>
            </div>

            {{-- Get Started --}}
            <div>
                <h4 class="font-semibold mb-4">Get started</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/booking" class="hover:opacity-80 transition-opacity">Book now</a></li>
                    <li><a href="/resort" class="hover:opacity-80 transition-opacity">View rooms</a></li>
                    <li><a href="/cafe" class="hover:opacity-80 transition-opacity">See menu</a></li>
                    <li><a href="/booking" class="hover:opacity-80 transition-opacity">Reserve today</a></li>
                    <li><a href="/" class="hover:opacity-80 transition-opacity">Learn more</a></li>
                </ul>
            </div>

            {{-- Connect --}}
            <div>
                <h4 class="font-semibold mb-4">Connect</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="https://wa.me/6281343339810" target="_blank" rel="noopener noreferrer" class="hover:opacity-80 transition-opacity">WhatsApp us</a></li>
                    <li><a href="mailto:karmina.savsav@gmail.com" class="hover:opacity-80 transition-opacity">Email address</a></li>
                    <li><a href="https://www.google.com/maps/place/VieraResort/@-5.6683192,132.6313587,17z/data=!3m1!4b1!4m6!3m5!1s0x2d300500091e7ce3:0x7dd44b1682f7da09!8m2!3d-5.6683192!4d132.6339336!16s%2Fg%2F11yn34hcgn?entry=ttu&g_ep=EgoyMDI1MTExNy4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer" class="hover:opacity-80 transition-opacity">Visit us</a></li>
                    <li><a href="tel:081343339810" class="hover:opacity-80 transition-opacity">Call us now</a></li>
                    <li><a href="https://www.google.com/maps/place/VieraResort/@-5.6683192,132.6313587,17z/data=!3m1!4b1!4m6!3m5!1s0x2d300500091e7ce3:0x7dd44b1682f7da09!8m2!3d-5.6683192!4d132.6339336!16s%2Fg%2F11yn34hcgn?entry=ttu&g_ep=EgoyMDI1MTExNy4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer" class="hover:opacity-80 transition-opacity">Find us</a></li>
                </ul>
            </div>

            {{-- Updates/Newsletter --}}
            <div>
                <h4 class="font-semibold mb-4">Updates</h4>
                <p class="text-sm mb-4 opacity-90">Get news about new rooms, dining experiences, and special offers delivered straight to your inbox.</p>
                <form class="space-y-3">
                    <input 
                        type="email" 
                        placeholder="your@email.com" 
                        class="w-full px-4 py-2.5 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/60 focus:outline-none focus:border-white/40"
                    >
                    <button type="submit" class="w-full px-4 py-2.5 bg-white text-[#8B734C] rounded-lg font-semibold hover:bg-white/90 transition-colors">
                        Join
                    </button>
                </form>
                <p class="text-xs mt-3 opacity-75">We respect your privacy, so we will never share your information.</p>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="mt-12 pt-8 border-t border-white/20 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex flex-wrap gap-4 text-sm">
                <a href="/booking" class="hover:opacity-80 transition-opacity">Privacy Policy</a>
                <a href="/booking" class="hover:opacity-80 transition-opacity">Terms of Service</a>
                <a href="/booking" class="hover:opacity-80 transition-opacity">Cookies Settings</a>
            </div>
            <div class="flex items-center gap-4">
                <a href="https://www.instagram.com/viera_resortngurbloat?igsh=eGdqeXQwdWFsbjI3" target="_blank" rel="noopener noreferrer" class="hover:opacity-80 transition-opacity" aria-label="Instagram Resort">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/viera.caffe_and_resto?igsh=bndrdWhrMmFyNjVs" target="_blank" rel="noopener noreferrer" class="hover:opacity-80 transition-opacity" aria-label="Instagram Cafe">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="mt-6 text-center text-sm opacity-75">
            © {{ date('Y') }} Viera Resort Ngurbloat. All rights reserved.
        </div>
    </div>
</footer>
