import './bootstrap';

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#' && href !== '') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const offsetTop = target.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        }
    });
});

// Mobile menu toggle
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        const icon = mobileMenuBtn.querySelector('svg');
        if (mobileMenu.classList.contains('hidden')) {
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
        } else {
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
        }
    });
}

// Navbar background on scroll
const navbar = document.getElementById('navbar');
let lastScroll = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 100) {
        navbar.classList.add('bg-[#FDFBF7]', 'shadow-md');
        navbar.classList.remove('bg-[#FDFBF7]/95');
    } else {
        navbar.classList.remove('bg-[#FDFBF7]', 'shadow-md');
        navbar.classList.add('bg-[#FDFBF7]/95');
    }
    
    lastScroll = currentScroll;
});

// Intersection Observer for scroll animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-visible');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe all elements with animate-on-scroll class
document.querySelectorAll('.animate-on-scroll, .animate-on-scroll-delay-1, .animate-on-scroll-delay-2, .animate-on-scroll-delay-3, .animate-on-scroll-delay-4').forEach(el => {
    observer.observe(el);
});

// Counter animation
const counters = document.querySelectorAll('.counter');
const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
            const counter = entry.target;
            const targetValue = counter.getAttribute('data-target');
            const target = parseFloat(targetValue);
            const isDecimal = targetValue.includes('.');
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;
            
            counter.classList.add('counted');
            
            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    if (isDecimal) {
                        counter.textContent = current.toFixed(1);
                    } else {
                        counter.textContent = Math.floor(current);
                    }
                    requestAnimationFrame(updateCounter);
                } else {
                    if (isDecimal) {
                        counter.textContent = target.toFixed(1);
                    } else {
                        counter.textContent = target;
                    }
                }
            };
            
            updateCounter();
            counterObserver.unobserve(counter);
        }
    });
}, { threshold: 0.5 });

counters.forEach(counter => {
    counterObserver.observe(counter);
});

// Gallery carousel function (reusable)
function initGalleryCarousel(carouselId, dotsSelector, prevId, nextId) {
    const galleryCarousel = document.getElementById(carouselId);
    const galleryDots = document.querySelectorAll(dotsSelector);
    const galleryPrev = document.getElementById(prevId);
    const galleryNext = document.getElementById(nextId);

    if (!galleryCarousel || galleryDots.length === 0) return;

    let currentSlide = 0;
    const totalSlides = galleryDots.length;

    function updateCarousel() {
        galleryCarousel.style.transform = `translateX(-${currentSlide * 100}%)`;
        
        // Update dots
        galleryDots.forEach((dot, index) => {
            if (index === currentSlide) {
                dot.classList.add('active', 'bg-[#8B734C]');
                dot.classList.remove('bg-gray-300');
            } else {
                dot.classList.remove('active', 'bg-[#8B734C]');
                dot.classList.add('bg-gray-300');
            }
        });
    }

    // Dot navigation
    galleryDots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            updateCarousel();
        });
    });

    // Previous button
    if (galleryPrev) {
        galleryPrev.addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        });
    }

    // Next button
    if (galleryNext) {
        galleryNext.addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        });
    }

    // Touch/swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;

    galleryCarousel.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });

    galleryCarousel.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });

    function handleSwipe() {
        if (touchEndX < touchStartX - 50) {
            // Swipe left - next slide
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        }
        if (touchEndX > touchStartX + 50) {
            // Swipe right - previous slide
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }
    }
}

// Initialize all gallery carousels
initGalleryCarousel('gallery-carousel', '.gallery-dot', 'gallery-prev', 'gallery-next');
initGalleryCarousel('resort-gallery-carousel', '.resort-gallery-dot', 'resort-gallery-prev', 'resort-gallery-next');
initGalleryCarousel('cafe-gallery-carousel', '.cafe-gallery-dot', 'cafe-gallery-prev', 'cafe-gallery-next');

// Newsletter form handling
const newsletterForm = document.getElementById('newsletter-form');
if (newsletterForm) {
    newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const email = newsletterForm.querySelector('input[type="email"]').value;
        
        // Show success message (you can integrate with backend later)
        const button = newsletterForm.querySelector('button');
        const originalText = button.textContent;
        button.textContent = 'Subscribed!';
        button.classList.add('bg-green-500');
        button.classList.remove('bg-[#FDFBF7]');
        
        setTimeout(() => {
            button.textContent = originalText;
            button.classList.remove('bg-green-500');
            button.classList.add('bg-[#FDFBF7]');
            newsletterForm.reset();
        }, 2000);
    });
}

// Parallax effect for hero section
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const hero = document.querySelector('section.relative.min-h-screen');
    if (hero && scrolled < hero.offsetHeight) {
        const parallax = hero.querySelector('.absolute.inset-0.z-0');
        if (parallax) {
            parallax.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
    }
});

// Add fade-in animation on page load
window.addEventListener('load', () => {
    document.body.classList.add('loaded');
});

// Review sort functionality
const sortButtons = document.querySelectorAll('.sort-btn');
sortButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all buttons
        sortButtons.forEach(btn => {
            btn.classList.remove('active', 'bg-blue-600');
            btn.classList.add('bg-gray-700');
        });
        
        // Add active class to clicked button
        button.classList.add('active', 'bg-blue-600');
        button.classList.remove('bg-gray-700');
        
        // Here you can add logic to sort reviews based on data-sort attribute
        const sortType = button.getAttribute('data-sort');
        console.log('Sort by:', sortType);
        // Add your sorting logic here
    });
});
