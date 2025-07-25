<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?? 'Tronco Forte - Madeireira de Qualidade' ?></title>
    <meta name="description" content="<?= $meta_description ?? 'Madeireira Tronco Forte - Especializada em madeiras nobres, compensados e MDF. Qualidade, sustentabilidade e tradição há mais de 30 anos.' ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'mogno': {
                            50: '#fdf8f6',
                            100: '#f2e8e5',
                            200: '#eaddd7',
                            300: '#e0cec7',
                            400: '#d2bab0',
                            500: '#bfa094',
                            600: '#a18072',
                            700: '#977669',
                            800: '#8b6f63',
                            900: '#744c3a',
                        },
                        'dourado': {
                            50: '#fffbeb',
                            100: '#fef3c7',
                            200: '#fde68a',
                            300: '#fcd34d',
                            400: '#fbbf24',
                            500: '#f59e0b',
                            600: '#d97706',
                            700: '#b45309',
                            800: '#92400e',
                            900: '#78350f',
                        },
                        'carvao': {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        },
                        'cremoso': {
                            50: '#fefce8',
                            100: '#fef9c3',
                            200: '#fef08a',
                            300: '#fde047',
                            400: '#facc15',
                            500: '#eab308',
                            600: '#ca8a04',
                            700: '#a16207',
                            800: '#854d0e',
                            900: '#713f12',
                        }
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                        'montserrat': ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700;800;900&display=swap");
        
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background: #22c55e;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 32px rgba(34, 197, 94, 0.4);
            transition: all 0.3s ease;
            z-index: 1000;
        }
        
        .whatsapp-float:hover {
            background-color: #16a34a;
            transform: scale(1.1);
        }
        
        .hero-text {
            color: white;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }
        
        .hero-subtitle {
            color: #f3f4f6;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
        
        .footer-text {
            color: #d1d5db;
        }
        
        .footer-heading {
            color: white;
            font-weight: 600;
        }
        
        .footer-link {
            color: #d1d5db;
            transition: color 0.3s;
        }
        
        .footer-link:hover {
            color: #fbbf24;
        }
        
        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            transition: border-color 0.3s;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
        }
        
        .form-textarea {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            transition: border-color 0.3s;
            resize: vertical;
        }
        
        .form-textarea:focus {
            outline: none;
            border-color: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
        }
        
        .product-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transition: all 0.5s;
            overflow: hidden;
            border: 1px solid #f3f4f6;
        }
        
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            border-color: #fde68a;
        }
        
        .category-card {
            background: linear-gradient(to bottom right, white, #f9fafb);
            border-radius: 16px;
            padding: 32px;
            text-align: center;
            transition: all 0.5s;
            border: 1px solid #e5e7eb;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        
        .category-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            border-color: #fcd34d;
        }
        
        .btn-primary {
            background-color: #d97706;
            color: white;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 12px;
            transition: all 0.3s;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .btn-primary:hover {
            background-color: #b45309;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Meta Tags for SEO -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="Tronco Forte Madeireira">
    <meta property="og:title" content="<?= $page_title ?? 'Tronco Forte - Madeireira de Qualidade' ?>">
    <meta property="og:description" content="<?= $meta_description ?? 'Madeireira Tronco Forte - Especializada em madeiras nobres, compensados e MDF.' ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $_SERVER['REQUEST_URI'] ?? '' ?>">
    <meta property="og:image" content="/assets/images/og-image.jpg">
    <meta name="twitter:card" content="summary_large_image">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="/assets/js/app.js" defer></script>
</head>
<body class="font-inter text-carvao-900 bg-cremoso-50">
    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50" x-data="navigation">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-mogno-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xl">TF</span>
                        </div>
                        <div>
                            <h1 class="font-montserrat font-bold text-xl text-carvao-900">Tronco Forte</h1>
                            <p class="text-sm text-carvao-600">Madeireira</p>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="/" class="nav-link <?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' ?>">Início</a>
                    <a href="/sobre" class="nav-link <?= strpos($_SERVER['REQUEST_URI'], '/sobre') === 0 ? 'active' : '' ?>">Sobre</a>
                    <a href="/catalogo" class="nav-link <?= strpos($_SERVER['REQUEST_URI'], '/catalogo') === 0 ? 'active' : '' ?>">Catálogo</a>
                    <a href="/blog" class="nav-link <?= strpos($_SERVER['REQUEST_URI'], '/blog') === 0 ? 'active' : '' ?>">Blog</a>
                    <a href="/contato" class="nav-link <?= strpos($_SERVER['REQUEST_URI'], '/contato') === 0 ? 'active' : '' ?>">Contato</a>
                </nav>

                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="/contato" class="btn-primary">
                        Solicitar Orçamento
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button @click="isMobileMenuOpen = !isMobileMenuOpen" class="text-carvao-700 hover:text-mogno-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!isMobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path x-show="isMobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div x-show="isMobileMenuOpen" x-transition class="md:hidden py-4 border-t border-gray-200">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="nav-link <?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' ?>">Início</a>
                    <a href="/sobre" class="nav-link <?= strpos($_SERVER['REQUEST_URI'], '/sobre') === 0 ? 'active' : '' ?>">Sobre</a>
                    <a href="/catalogo" class="nav-link <?= strpos($_SERVER['REQUEST_URI'], '/catalogo') === 0 ? 'active' : '' ?>">Catálogo</a>
                    <a href="/blog" class="nav-link <?= strpos($_SERVER['REQUEST_URI'], '/blog') === 0 ? 'active' : '' ?>">Blog</a>
                    <a href="/contato" class="nav-link <?= strpos($_SERVER['REQUEST_URI'], '/contato') === 0 ? 'active' : '' ?>">Contato</a>
                    <a href="/contato" class="btn-primary inline-block text-center mt-4">
                        Solicitar Orçamento
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <?= $content ?? '' ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-mogno-800 to-mogno-900 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-dourado-500 to-dourado-600 rounded-xl flex items-center justify-center mr-4">
                            <span class="text-white font-bold text-xl">TF</span>
                        </div>
                        <div>
                            <h3 class="footer-heading font-montserrat font-bold text-2xl">Tronco Forte</h3>
                            <p class="footer-text">Madeiras de Qualidade</p>
                        </div>
                    </div>
                    <p class="footer-text mb-6 leading-relaxed max-w-md">
                        Há mais de 30 anos fornecendo madeiras de qualidade superior com compromisso 
                        ambiental e excelência no atendimento.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-dourado-600 hover:bg-dourado-700 text-white rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-dourado-600 hover:bg-dourado-700 text-white rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-dourado-600 hover:bg-dourado-700 text-white rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-dourado-600 hover:bg-dourado-700 text-white rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="footer-heading font-montserrat font-bold text-lg mb-6">Links Rápidos</h4>
                    <ul class="space-y-3">
                        <li><a href="/" class="footer-link">Início</a></li>
                        <li><a href="/sobre" class="footer-link">Sobre Nós</a></li>
                        <li><a href="/catalogo" class="footer-link">Catálogo</a></li>
                        <li><a href="/blog" class="footer-link">Blog</a></li>
                        <li><a href="/contato" class="footer-link">Contato</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="footer-heading font-montserrat font-bold text-lg mb-6">Contato</h4>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-dourado-400 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div>
                                <p class="footer-text text-sm">Rua das Madeiras, 123</p>
                                <p class="footer-text text-sm">São Paulo - SP</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-dourado-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <p class="footer-text text-sm">(11) 9999-9999</p>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-dourado-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <p class="footer-text text-sm">contato@troncoforte.com.br</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-mogno-600 mt-12 pt-8 text-center">
                <p class="footer-text text-sm">
                    © <?= date('Y') ?> Tronco Forte Madeireira. Todos os direitos reservados.
                </p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <div class="whatsapp-float">
        <a href="https://wa.me/5511999999999?text=Olá! Gostaria de solicitar um orçamento." 
           target="_blank" 
           rel="noopener noreferrer"
           title="Fale conosco no WhatsApp">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
            </svg>
        </a>
    </div>

    <!-- JavaScript -->
    <script src="/assets/js/app.js"></script>
</body>
</html>