<!-- Hero Section -->
<section class="hero-gradient min-h-screen flex items-center relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 wood-texture opacity-10"></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="animate-float absolute top-20 left-10 w-20 h-20 bg-dourado-400 rounded-full opacity-20"></div>
        <div class="animate-float absolute top-40 right-20 w-16 h-16 bg-floresta-400 rounded-full opacity-20" style="animation-delay: 1s;"></div>
        <div class="animate-float absolute bottom-32 left-1/4 w-12 h-12 bg-mogno-400 rounded-full opacity-20" style="animation-delay: 2s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Hero Content -->
            <div class="text-center lg:text-left" x-data="animatedText">
                <h1 class="font-montserrat font-bold text-4xl md:text-5xl lg:text-6xl hero-text mb-6 leading-tight">
                    <span class="block" x-text="currentWord"></span>
                    <span class="text-dourado-400">Tronco Forte</span>
                </h1>
                <p class="text-xl md:text-2xl hero-subtitle mb-8 max-w-2xl mx-auto lg:mx-0">
                    Há mais de 30 anos fornecendo madeiras de qualidade superior com 
                    <span class="text-dourado-400 font-semibold">compromisso ambiental</span> 
                    e excelência no atendimento.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="/catalogo" class="btn-primary text-lg px-8 py-4">
                        Ver Catálogo
                    </a>
                    <a href="#calculadora" class="btn-outline text-lg px-8 py-4 hero-btn-outline">
                        Calcular Orçamento
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 mt-12 pt-8 border-t border-cremoso-200/30">
                    <div class="text-center" x-data="counter(30)">
                        <div class="text-3xl font-bold text-dourado-400 mb-2" x-text="Math.floor(count)">0</div>
                        <div class="hero-stats-text text-sm">Anos de<br>Experiência</div>
                    </div>
                    <div class="text-center" x-data="counter(1500)">
                        <div class="text-3xl font-bold text-dourado-400 mb-2" x-text="Math.floor(count)">0</div>
                        <div class="hero-stats-text text-sm">Projetos<br>Realizados</div>
                    </div>
                    <div class="text-center" x-data="counter(90)">
                        <div class="text-3xl font-bold text-dourado-400 mb-2" x-text="Math.floor(count)">0</div>
                        <div class="hero-stats-text text-sm">Tipos de<br>Madeira</div>
                    </div>
                </div>
            </div>

            <!-- Hero Image -->
            <div class="relative">
                <div class="relative z-10">
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=modern%20lumber%20yard%20warehouse%20stacked%20wood%20planks%20professional%20lighting&image_size=square_hd" 
                         alt="Madeireira Tronco Forte" 
                         class="rounded-2xl shadow-2xl w-full h-auto">
                </div>
                <!-- Decorative Elements -->
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-dourado-400 rounded-full opacity-20 animate-pulse-slow"></div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-floresta-400 rounded-full opacity-20 animate-pulse-slow" style="animation-delay: 1s;"></div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#produtos" class="text-white hover:text-dourado-400 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </a>
    </div>
</section>

<!-- Featured Products Section -->
<section id="produtos" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="font-montserrat font-bold text-4xl text-carvao-900 mb-6">
                Nossos <span class="text-mogno-600">Produtos</span>
            </h2>
            <p class="text-xl text-carvao-600 max-w-3xl mx-auto">
                Oferecemos uma ampla variedade de madeiras selecionadas, 
                desde espécies nobres até soluções industriais.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($featured_products as $product): ?>
            <div class="group relative bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 scroll-reveal">
                <!-- Background Gradient -->
                <div class="absolute inset-0 bg-gradient-to-br from-mogno-50 via-white to-dourado-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <!-- Image Container -->
                <div class="relative overflow-hidden">
                    <img src="<?= $product['image'] ?>" 
                         alt="<?= $product['name'] ?>" 
                         class="w-full h-72 object-cover transition-transform duration-700 group-hover:scale-110">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Category Badge -->
                    <div class="absolute top-6 left-6">
                        <span class="bg-white/90 backdrop-blur-sm text-mogno-700 px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                            <?= $product['category'] ?>
                        </span>
                    </div>
                    
                    <!-- Price Badge -->
                    <div class="absolute top-6 right-6">
                        <div class="bg-mogno-600 text-white px-4 py-2 rounded-full shadow-lg">
                            <span class="text-lg font-bold">R$ <?= number_format($product['price'], 0, ',', '.') ?></span>
                            <span class="text-xs opacity-90">/<?= $product['unit'] ?></span>
                        </div>
                    </div>
                    
                    <!-- Quick Action Button -->
                    <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <button class="bg-white text-mogno-600 p-3 rounded-full shadow-lg hover:bg-mogno-50 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="relative p-8">
                    <!-- Wood Grain Icon -->
                    <div class="absolute top-0 left-8 transform -translate-y-1/2">
                        <div class="bg-dourado-500 text-white p-3 rounded-full shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="pt-6">
                        <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-4 group-hover:text-mogno-700 transition-colors">
                            <?= $product['name'] ?>
                        </h3>
                        
                        <p class="text-carvao-600 mb-6 leading-relaxed">
                            <?= $product['description'] ?>
                        </p>
                        
                        <!-- Features -->
                        <div class="flex items-center space-x-4 mb-6 text-sm text-carvao-500">
                            <div class="flex items-center space-x-1">
                                <svg class="w-4 h-4 text-floresta-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Certificado</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <svg class="w-4 h-4 text-dourado-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                </svg>
                                <span>Premium</span>
                            </div>
                        </div>
                        
                        <!-- Action Button -->
                        <a href="/catalogo/produto/<?= $product['id'] ?>" 
                           class="block w-full bg-gradient-to-r from-mogno-600 to-mogno-700 hover:from-mogno-700 hover:to-mogno-800 text-white text-center py-4 px-6 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <span class="flex items-center justify-center space-x-2">
                                <span>Ver Detalhes</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                
                <!-- Decorative Elements -->
                <div class="absolute bottom-0 right-0 w-32 h-32 bg-gradient-to-tl from-dourado-100 to-transparent opacity-50 rounded-tl-full transform translate-x-16 translate-y-16"></div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12">
            <a href="/catalogo" class="btn-primary text-lg px-8 py-4">
                Ver Catálogo Completo
            </a>
        </div>
    </div>
</section>

<!-- Budget Calculator Section -->
<section id="calculadora" class="py-20 bg-cremoso-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12 scroll-reveal">
                <h2 class="font-montserrat font-bold text-4xl text-carvao-900 mb-6">
                    Calculadora de <span class="text-mogno-600">Orçamento</span>
                </h2>
                <p class="text-xl text-carvao-600">
                    Calcule rapidamente o valor estimado do seu projeto
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-xl p-8 scroll-reveal" x-data="calculator">
                <form @submit.prevent="calculate">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <!-- Wood Type -->
                        <div>
                            <label class="block text-sm font-semibold text-carvao-700 mb-3">Tipo de Madeira</label>
                            <select x-model="material" class="form-input">
                                <option value="">Selecione o tipo</option>
                                <option value="mogno">Mogno (R$ 150/m³)</option>
                                <option value="cedro">Cedro (R$ 120/m³)</option>
                                <option value="ipê">Ipê (R$ 180/m³)</option>
                                <option value="compensado">Compensado (R$ 80/m³)</option>
                                <option value="mdf">MDF (R$ 45/m³)</option>
                            </select>
                        </div>

                        <!-- Width -->
                        <div>
                            <label class="block text-sm font-semibold text-carvao-700 mb-3">Largura (cm)</label>
                            <input type="number" 
                                   x-model="width" 
                                   placeholder="Ex: 200" 
                                   min="1" 
                                   class="form-input">
                        </div>

                        <!-- Height -->
                        <div>
                            <label class="block text-sm font-semibold text-carvao-700 mb-3">Altura (cm)</label>
                            <input type="number" 
                                   x-model="height" 
                                   placeholder="Ex: 300" 
                                   min="1" 
                                   class="form-input">
                        </div>

                        <!-- Thickness -->
                        <div>
                            <label class="block text-sm font-semibold text-carvao-700 mb-3">Espessura (cm)</label>
                            <input type="number" 
                                   x-model="thickness" 
                                   placeholder="Ex: 2.5" 
                                   step="0.1" 
                                   min="0.1" 
                                   class="form-input">
                        </div>
                    </div>

                    <!-- Calculate Button -->
                    <div class="text-center mb-8">
                        <button type="submit" class="btn-primary text-lg px-8 py-4">
                            Calcular Orçamento
                        </button>
                    </div>

                    <!-- Result -->
                    <div x-show="showResult" x-transition class="bg-mogno-50 border border-mogno-200 rounded-xl p-6">
                        <div class="text-center">
                            <h3 class="font-montserrat font-bold text-2xl text-mogno-800 mb-4">
                                Orçamento Estimado
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-mogno-600" x-text="'R$ ' + total.toFixed(2)"></div>
                                    <div class="text-sm text-carvao-600">Valor Total</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-verde-floresta-600" x-text="volume.toFixed(3) + ' m³'"></div>
                                    <div class="text-sm text-carvao-600">Volume Total</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-dourado-600" x-text="'R$ ' + pricePerUnit + '/m³'"></div>
                                    <div class="text-sm text-carvao-600">Preço por m³</div>
                                </div>
                            </div>
                            <p class="text-mogno-700 mb-6">
                                *Valor estimado. Entre em contato para orçamento detalhado.
                            </p>
                            <a href="/contato" class="btn-primary">
                                Solicitar Orçamento Oficial
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Sustainability Timeline -->
<section class="py-20 bg-floresta-900 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 wood-texture opacity-5"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="font-montserrat font-bold text-4xl mb-6">
                Nossa Jornada <span class="text-dourado-400">Sustentável</span>
            </h2>
            <p class="text-xl text-cremoso-200 max-w-3xl mx-auto">
                Comprometidos com o meio ambiente desde o primeiro dia
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="space-y-12">
                <!-- Timeline Item 1 -->
                <div class="timeline-item scroll-reveal">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/3">
                            <div class="text-6xl font-bold text-dourado-400 mb-2">1990</div>
                            <h3 class="font-montserrat font-bold text-2xl mb-4">Fundação</h3>
                            <p class="text-cremoso-200">
                                Iniciamos nossas atividades com foco em madeiras de reflorestamento.
                            </p>
                        </div>
                        <div class="md:w-2/3">
                            <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=vintage%20lumber%20mill%201990s%20sustainable%20forestry%20beginning&image_size=landscape_4_3" 
                                 alt="Fundação 1990" 
                                 class="rounded-xl shadow-lg w-full">
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="timeline-item scroll-reveal">
                    <div class="flex flex-col md:flex-row-reverse items-center gap-8">
                        <div class="md:w-1/3">
                            <div class="text-6xl font-bold text-dourado-400 mb-2">2005</div>
                            <h3 class="font-montserrat font-bold text-2xl mb-4">Certificação FSC</h3>
                            <p class="text-cremoso-200">
                                Obtivemos a certificação FSC, garantindo origem sustentável de nossas madeiras.
                            </p>
                        </div>
                        <div class="md:w-2/3">
                            <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=FSC%20certification%20sustainable%20forest%20management%20environmental%20protection&image_size=landscape_4_3" 
                                 alt="Certificação FSC 2005" 
                                 class="rounded-xl shadow-lg w-full">
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="timeline-item scroll-reveal">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/3">
                            <div class="text-6xl font-bold text-dourado-400 mb-2">2015</div>
                            <h3 class="font-montserrat font-bold text-2xl mb-4">Energia Renovável</h3>
                            <p class="text-cremoso-200">
                                Instalação de sistema de energia solar em nossa sede.
                            </p>
                        </div>
                        <div class="md:w-2/3">
                            <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=solar%20panels%20lumber%20mill%20renewable%20energy%20sustainable%20facility&image_size=landscape_4_3" 
                                 alt="Energia Renovável 2015" 
                                 class="rounded-xl shadow-lg w-full">
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 4 -->
                <div class="timeline-item scroll-reveal">
                    <div class="flex flex-col md:flex-row-reverse items-center gap-8">
                        <div class="md:w-1/3">
                            <div class="text-6xl font-bold text-dourado-400 mb-2">2024</div>
                            <h3 class="font-montserrat font-bold text-2xl mb-4">Carbono Neutro</h3>
                            <p class="text-cremoso-200">
                                Meta de neutralidade de carbono alcançada através de reflorestamento.
                            </p>
                        </div>
                        <div class="md:w-2/3">
                            <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=carbon%20neutral%20reforestation%20project%20environmental%20sustainability%20forest&image_size=landscape_4_3" 
                                 alt="Carbono Neutro 2024" 
                                 class="rounded-xl shadow-lg w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="font-montserrat font-bold text-4xl text-carvao-900 mb-6">
                O que nossos <span class="text-mogno-600">clientes</span> dizem
            </h2>
            <p class="text-xl text-carvao-600 max-w-3xl mx-auto">
                Mais de 30 anos construindo relacionamentos baseados em confiança e qualidade
            </p>
        </div>

        <div class="max-w-6xl mx-auto" x-data="testimonialCarousel">
            <div class="relative">
                <!-- Testimonials -->
                <div class="overflow-hidden">
                    <div class="flex transition-transform duration-500 ease-in-out" 
                         :style="`transform: translateX(-${currentSlide * 100}%)`">
                        <?php foreach ($testimonials as $index => $testimonial): ?>
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="bg-cremoso-50 rounded-2xl p-8 text-center max-w-4xl mx-auto">
                                <div class="mb-6">
                                    <svg class="w-12 h-12 text-mogno-400 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                    </svg>
                                </div>
                                <blockquote class="text-xl text-carvao-700 mb-8 italic">
                                    "<?= $testimonial['content'] ?>"
                                </blockquote>
                                <div class="flex items-center justify-center space-x-4">
                                    <img src="<?= $testimonial['avatar'] ?>" 
                                         alt="<?= $testimonial['name'] ?>" 
                                         class="w-16 h-16 rounded-full object-cover">
                                    <div class="text-left">
                                        <div class="font-semibold text-carvao-900"><?= $testimonial['name'] ?></div>
                                        <div class="text-carvao-600"><?= $testimonial['company'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="flex justify-center mt-8 space-x-2">
                    <?php foreach ($testimonials as $index => $testimonial): ?>
                    <button @click="currentSlide = <?= $index ?>" 
                            class="w-3 h-3 rounded-full transition-colors"
                            :class="currentSlide === <?= $index ?> ? 'bg-mogno-600' : 'bg-carvao-300'"></button>
                    <?php endforeach; ?>
                </div>

                <!-- Arrow Navigation -->
                <button @click="previousSlide" 
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-4 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-shadow">
                    <svg class="w-6 h-6 text-carvao-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button @click="nextSlide" 
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-4 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-shadow">
                    <svg class="w-6 h-6 text-carvao-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="py-20 bg-cremoso-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="font-montserrat font-bold text-4xl text-carvao-900 mb-6">
                Últimas do <span class="text-mogno-600">Blog</span>
            </h2>
            <p class="text-xl text-carvao-600 max-w-3xl mx-auto">
                Dicas, novidades e insights sobre o mundo da madeira
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($blog_posts as $post): ?>
            <article class="card group scroll-reveal">
                <div class="relative overflow-hidden rounded-t-xl">
                    <img src="<?= $post['image'] ?>" 
                         alt="<?= $post['title'] ?>" 
                         class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute top-4 left-4">
                        <span class="bg-mogno-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            <?= $post['category'] ?>
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="text-sm text-carvao-500 mb-3">
                        <?= date('d/m/Y', strtotime($post['date'])) ?>
                    </div>
                    <h3 class="font-montserrat font-semibold text-xl text-carvao-900 mb-3 group-hover:text-mogno-600 transition-colors">
                        <a href="/blog/<?= $post['id'] ?>"><?= $post['title'] ?></a>
                    </h3>
                    <p class="text-carvao-600 mb-4"><?= $post['excerpt'] ?></p>
                    <a href="/blog/<?= $post['id'] ?>" class="text-mogno-600 font-semibold hover:text-mogno-700 transition-colors">
                        Ler mais →
                    </a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12">
            <a href="/blog" class="btn-primary text-lg px-8 py-4">
                Ver Todos os Posts
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-mogno-600 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 wood-texture opacity-10"></div>
    
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="max-w-4xl mx-auto scroll-reveal">
            <h2 class="font-montserrat font-bold text-4xl md:text-5xl mb-6">
                Pronto para seu próximo projeto?
            </h2>
            <p class="text-xl text-cremoso-100 mb-8 max-w-2xl mx-auto">
                Entre em contato conosco e descubra como podemos transformar 
                suas ideias em realidade com nossas madeiras de qualidade.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contato" class="btn-primary bg-white text-mogno-600 hover:bg-cremoso-100 text-lg px-8 py-4">
                    Solicitar Orçamento
                </a>
                <a href="tel:+5511999999999" class="btn-outline border-white text-white hover:bg-white hover:text-mogno-600 text-lg px-8 py-4">
                    Ligar Agora
                </a>
            </div>
        </div>
    </div>
</section>