// Slider functionality
class Slider {
    constructor() {
        this.currentSlide = 0;
        this.slides = document.querySelectorAll('.slide');
        this.totalSlides = this.slides.length;
        this.intervalId = null;
        
        this.init();
    }

    init() {
        this.showSlide(this.currentSlide);
        this.startAutoSlide();
    }

    showSlide(index) {
        this.slides.forEach((slide, i) => {
            slide.style.transform = `translateX(${(i - index) * 100}%)`;
        });
    }

    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        this.showSlide(this.currentSlide);
    }

    startAutoSlide() {
        this.intervalId = setInterval(() => this.nextSlide(), 4000);
    }

    stopAutoSlide() {
        if (this.intervalId) {
            clearInterval(this.intervalId);
        }
    }
}

// Navbar functionality
class Navbar {
    constructor() {
        this.navbar = document.querySelector('.navbar');
        this.lastScrollTop = 0;
        this.menuToggle = document.querySelector('.menu-toggle');
        this.navLinks = document.querySelector('.nav-links');
        
        this.init();
    }

    init() {
        this.setupScrollHandler();
        this.setupMenuToggle();
    }

    setupScrollHandler() {
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
            
            if (currentScroll > this.lastScrollTop) {
                // Scrolling down
                this.navbar.style.transform = 'translateY(-100%)';
                this.navbar.classList.add('hidden');
            } else {
                // Scrolling up
                this.navbar.style.transform = 'translateY(0)';
                this.navbar.classList.remove('hidden');
            }
            
            this.lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
        });
    }

    setupMenuToggle() {
        if (this.menuToggle && this.navLinks) {
            this.menuToggle.addEventListener('click', () => {
                this.navLinks.classList.toggle('active');
            });
        }
    }
}

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const slider = new Slider();
    const navbar = new Navbar();
});

/* Add this JavaScript to handle the navbar scroll effect */
const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});