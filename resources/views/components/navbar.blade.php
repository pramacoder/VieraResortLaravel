<nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-sm border-b border-[#E3E3E0]">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            {{-- Logo --}}
            <div class="flex-shrink-0">
                <a href="/" class="text-2xl font-serif font-bold text-[#1B1B18]">
                    {{ $logo ?? 'Logo' }}
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center space-x-8">
                @if(isset($links))
                    @foreach($links as $link)
                        <a href="{{ $link['url'] ?? '#' }}" class="text-sm font-medium text-[#1B1B18] hover:opacity-80 transition-opacity">
                            {{ $link['label'] ?? 'Link' }}
                        </a>
                    @endforeach
                @else
                    <a href="/" class="text-sm font-medium text-[#1B1B18] hover:opacity-80 transition-opacity">Home</a>
                    <a href="#resort" class="text-sm font-medium text-[#1B1B18] hover:opacity-80 transition-opacity">Resort</a>
                    <a href="#cafe" class="text-sm font-medium text-[#1B1B18] hover:opacity-80 transition-opacity">Cafe & Resto</a>
                    <div class="relative group">
                        <a href="#book" class="text-sm font-medium text-[#1B1B18] hover:opacity-80 transition-opacity flex items-center">
                            Book
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                    </div>
                @endif
                <a href="#book" class="px-6 py-2.5 bg-[#8B734C] text-white rounded-lg font-semibold hover:bg-[#7A6340] transition-colors">
                    Reserve
                </a>
            </div>

            {{-- Mobile Menu Button --}}
            <button class="lg:hidden p-2" id="mobile-menu-button" aria-label="Toggle menu">
                <svg class="w-6 h-6 text-[#1B1B18]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        {{-- Mobile Navigation --}}
        <div class="lg:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-4 space-y-2 border-t border-[#E3E3E0] mt-2">
                <a href="/" class="block px-3 py-2 text-sm font-medium text-[#1B1B18]">Home</a>
                <a href="#resort" class="block px-3 py-2 text-sm font-medium text-[#1B1B18]">Resort</a>
                <a href="#cafe" class="block px-3 py-2 text-sm font-medium text-[#1B1B18]">Cafe & Resto</a>
                <a href="#book" class="block px-3 py-2 text-sm font-medium text-[#1B1B18]">Book</a>
                <a href="#book" class="block px-3 py-2 text-center bg-[#8B734C] text-white rounded-lg font-semibold">Reserve</a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const button = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        
        if (button && menu) {
            button.addEventListener('click', function() {
                menu.classList.toggle('hidden');
            });
        }
    });
</script>
