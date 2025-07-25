// Alpine.js components and functionality
// Note: Alpine.js is loaded via CDN in the layout

// Wait for Alpine.js to be available
document.addEventListener('alpine:init', () => {
    // Dados globais do Alpine
    Alpine.data('navigation', () => ({
        isMobileMenuOpen: false,
        
        toggleMobileMenu() {
            this.isMobileMenuOpen = !this.isMobileMenuOpen;
        },
        
        closeMobileMenu() {
            this.isMobileMenuOpen = false;
        }
    }));

    // Componente para texto animado
    Alpine.data('animatedText', () => ({
        words: ['Qualidade', 'Tradição', 'Sustentabilidade', 'Excelência'],
        currentIndex: 0,
        currentWord: 'Qualidade',
        
        init() {
            this.animateWords();
        },
        
        animateWords() {
            setInterval(() => {
                this.currentIndex = (this.currentIndex + 1) % this.words.length;
                this.currentWord = this.words[this.currentIndex];
            }, 3000);
        }
    }));

    // Componente para calculadora de orçamento
    Alpine.data('calculator', () => ({
        material: '',
        width: '',
        height: '',
        thickness: '',
        quantity: 1,
        result: 0,
        showResult: false,
        total: 0,
        volume: 0,
        pricePerUnit: 0,
        
        materials: {
            'mogno': { name: 'Mogno', price: 150 },
            'cedro': { name: 'Cedro', price: 120 },
            'ipê': { name: 'Ipê', price: 180 },
            'compensado': { name: 'Compensado', price: 80 },
            'mdf': { name: 'MDF', price: 45 }
        },
        
        calculate() {
            if (this.material && this.width && this.height && this.thickness) {
                const area = (parseFloat(this.width) * parseFloat(this.height)) / 10000; // m²
                this.volume = area * (parseFloat(this.thickness) / 100); // m³
                this.pricePerUnit = this.materials[this.material].price;
                this.total = this.volume * this.pricePerUnit * this.quantity;
                this.result = this.total.toFixed(2);
                this.showResult = true;
            }
        },
        
        reset() {
            this.material = '';
            this.width = '';
            this.height = '';
            this.thickness = '';
            this.quantity = 1;
            this.result = 0;
            this.showResult = false;
            this.total = 0;
            this.volume = 0;
            this.pricePerUnit = 0;
        }
    }));

    // Componente para contador animado
    Alpine.data('counter', (target, duration = 2000) => ({
        count: 0,
        target: target,
        
        init() {
            this.animateCounter();
        },
        
        animateCounter() {
            const increment = this.target / (duration / 16);
            const timer = setInterval(() => {
                this.count += increment;
                if (this.count >= this.target) {
                    this.count = this.target;
                    clearInterval(timer);
                }
            }, 16);
        }
    }));

    // Componente para depoimentos carousel
    Alpine.data('testimonials', () => ({
        currentSlide: 0,
        testimonials: [
            {
                name: 'João Silva',
                company: 'Construtora Silva & Cia',
                text: 'Excelente qualidade e atendimento. Recomendo a Tronco Forte para todos os projetos.',
                image: 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=professional%20construction%20manager%20portrait%20smiling&image_size=square'
            },
            {
                name: 'Maria Santos',
                company: 'Arquitetura Moderna',
                text: 'Parceria de anos com resultados sempre excepcionais. Madeiras de primeira qualidade.',
                image: 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=female%20architect%20professional%20portrait%20confident&image_size=square'
            },
            {
                name: 'Carlos Oliveira',
                company: 'Móveis Artesanais',
                text: 'A Tronco Forte é nossa fornecedora exclusiva. Qualidade incomparável no mercado.',
                image: 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=craftsman%20woodworker%20portrait%20experienced&image_size=square'
            }
        ],
        
        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.testimonials.length;
        },
        
        prevSlide() {
            this.currentSlide = this.currentSlide === 0 ? this.testimonials.length - 1 : this.currentSlide - 1;
        },
        
        goToSlide(index) {
            this.currentSlide = index;
        }
    }));

    // Alias para testimonialCarousel (compatibilidade)
    Alpine.data('testimonialCarousel', () => ({
        currentSlide: 0,
        testimonials: [
            {
                name: 'João Silva',
                company: 'Construtora Silva & Cia',
                text: 'Excelente qualidade e atendimento. Recomendo a Tronco Forte para todos os projetos.',
                image: 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=professional%20construction%20manager%20portrait%20smiling&image_size=square'
            },
            {
                name: 'Maria Santos',
                company: 'Arquitetura Moderna',
                text: 'Parceria de anos com resultados sempre excepcionais. Madeiras de primeira qualidade.',
                image: 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=female%20architect%20professional%20portrait%20confident&image_size=square'
            },
            {
                name: 'Carlos Oliveira',
                company: 'Móveis Artesanais',
                text: 'A Tronco Forte é nossa fornecedora exclusiva. Qualidade incomparável no mercado.',
                image: 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=craftsman%20woodworker%20portrait%20experienced&image_size=square'
            }
        ],
        
        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.testimonials.length;
        },
        
        prevSlide() {
            this.currentSlide = this.currentSlide === 0 ? this.testimonials.length - 1 : this.currentSlide - 1;
        },
        
        goToSlide(index) {
            this.currentSlide = index;
        }
    }));

    // Componente para formulário de contato
    Alpine.data('contactForm', () => ({
        formData: {
            name: '',
            email: '',
            phone: '',
            projectType: '',
            message: ''
        },
        isSubmitting: false,
        submitted: false,
        
        async submitForm() {
            this.isSubmitting = true;
            
            // Simular envio do formulário
            await new Promise(resolve => setTimeout(resolve, 2000));
            
            this.isSubmitting = false;
            this.submitted = true;
            
            // Reset form after 3 seconds
            setTimeout(() => {
                this.submitted = false;
                this.resetForm();
            }, 3000);
        },
        
        resetForm() {
            this.formData = {
                name: '',
                email: '',
                phone: '',
                projectType: '',
                message: ''
            };
        }
    }));

    // Componente para FAQ
    Alpine.data('faq', () => ({
        openItems: [],
        
        toggle(index) {
            if (this.openItems.includes(index)) {
                this.openItems = this.openItems.filter(item => item !== index);
            } else {
                this.openItems.push(index);
            }
        },
        
        isOpen(index) {
            return this.openItems.includes(index);
        }
    }));
});

// Scroll reveal animation
function initScrollReveal() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('.scroll-reveal').forEach(el => {
        observer.observe(el);
    });
}

// Lazy loading para imagens
function initLazyLoading() {
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy-loading');
                imageObserver.unobserve(img);
            }
        });
    });
    
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
}

// Smooth scroll para links internos
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Inicializar quando o DOM estiver carregado
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar funcionalidades
    initScrollReveal();
    initLazyLoading();
    initSmoothScroll();
    
    // Auto-start carousel
    setInterval(() => {
        const testimonialComponent = document.querySelector('[x-data*="testimonials"]');
        if (testimonialComponent && testimonialComponent._x_dataStack) {
            testimonialComponent._x_dataStack[0].nextSlide();
        }
    }, 5000);
});

// Função para WhatsApp
window.openWhatsApp = function(message = 'Olá! Gostaria de saber mais sobre os produtos da Tronco Forte.') {
    const phone = '5511999999999'; // Substituir pelo número real
    const url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank');
};

// Função para compartilhar
window.shareContent = function(title, text, url) {
    if (navigator.share) {
        navigator.share({ title, text, url });
    } else {
        // Fallback para navegadores que não suportam Web Share API
        const shareUrl = `https://wa.me/?text=${encodeURIComponent(text + ' ' + url)}`;
        window.open(shareUrl, '_blank');
    }
};