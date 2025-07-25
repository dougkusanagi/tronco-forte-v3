<!-- Hero Section with Video Background -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Video Background -->
    <div class="absolute inset-0 z-0">
        <video autoplay muted loop playsinline class="w-full h-full object-cover">
            <source src="https://cdn.pixabay.com/video/2023/06/11/166808-835670743_large.mp4" type="video/mp4">
            <!-- Fallback image if video doesn't load -->
            <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=sustainable%20lumber%20mill%20forest%20management%20wood%20processing%20facility%20aerial%20view&image_size=landscape_4_3" 
                 alt="Tronco Forte Facility" 
                 class="w-full h-full object-cover">
        </video>
        
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/60"></div>
        
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/80"></div>
    </div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 relative z-10 text-center text-white">
        <div class="max-w-5xl mx-auto">
            <!-- Animated Badge -->
            <div class="inline-flex items-center bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-6 py-3 mb-8 animate-fade-in">
                <svg class="w-5 h-5 text-dourado-400 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/>
                </svg>
                <span class="text-sm font-semibold">Mais de 30 anos de tradição</span>
            </div>
            
            <h1 class="font-montserrat font-bold text-5xl md:text-6xl lg:text-7xl mb-8 leading-tight animate-slide-up">
                Sobre a <span class="text-dourado-400">Tronco Forte</span>
            </h1>
            
            <p class="text-xl md:text-2xl lg:text-3xl text-cremoso-100 mb-12 max-w-4xl mx-auto leading-relaxed animate-slide-up" style="animation-delay: 0.2s;">
                Mais de três décadas dedicadas à excelência em madeiras, 
                <span class="text-dourado-400 font-semibold">sustentabilidade</span> e relacionamentos duradouros.
            </p>
            
            <!-- Stats Row -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 animate-slide-up" style="animation-delay: 0.4s;">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-4xl font-bold text-dourado-400 mb-2">30+</div>
                    <div class="text-cremoso-200">Anos de Experiência</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-4xl font-bold text-dourado-400 mb-2">1500+</div>
                    <div class="text-cremoso-200">Projetos Realizados</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-4xl font-bold text-dourado-400 mb-2">100%</div>
                    <div class="text-cremoso-200">Sustentável</div>
                </div>
            </div>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center animate-slide-up" style="animation-delay: 0.6s;">
                <a href="#historia" class="bg-dourado-500 hover:bg-dourado-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-xl">
                    <span class="flex items-center justify-center space-x-2">
                        <span>Nossa História</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </span>
                </a>
                <a href="/catalogo" class="bg-white/10 backdrop-blur-sm border-2 border-white/30 hover:bg-white/20 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105">
                    <span class="flex items-center justify-center space-x-2">
                        <span>Ver Catálogo</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
        <a href="#historia" class="text-white/80 hover:text-white transition-colors">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </a>
    </div>
</section>

<!-- Company Story -->
<section id="historia" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="scroll-reveal">
                <h2 class="font-montserrat font-bold text-4xl text-carvao-900 mb-6">
                    Nossa <span class="text-mogno-600">História</span>
                </h2>
                <div class="space-y-6 text-lg text-carvao-700">
                    <p>
                        Fundada em 1990 por Roberto Tronco, a Tronco Forte nasceu de uma paixão 
                        pela madeira e um compromisso inabalável com a qualidade. O que começou 
                        como um pequeno depósito de madeiras se transformou em uma das principais 
                        madeireiras da região.
                    </p>
                    <p>
                        Desde o início, nossa missão tem sido clara: fornecer madeiras de 
                        qualidade superior enquanto preservamos o meio ambiente para as futuras 
                        gerações. Cada peça que sai de nosso estoque carrega consigo nossa 
                        tradição de excelência.
                    </p>
                    <p>
                        Hoje, com mais de 30 anos de experiência, continuamos a inovar e a 
                        expandir nossos serviços, sempre mantendo os valores que nos trouxeram 
                        até aqui: qualidade, sustentabilidade e compromisso com nossos clientes.
                    </p>
                </div>
            </div>
            <div class="scroll-reveal">
                <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=lumber%20company%20founder%20Roberto%20Tronco%20vintage%20photo%201990s%20wood%20business&image_size=square_hd" 
                     alt="História da Tronco Forte" 
                     class="rounded-2xl shadow-xl w-full">
            </div>
        </div>
    </div>
</section>

<!-- Company Timeline -->
<section class="py-20 bg-cremoso-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="font-montserrat font-bold text-4xl text-carvao-900 mb-6">
                Marcos da Nossa <span class="text-mogno-600">Trajetória</span>
            </h2>
            <p class="text-xl text-carvao-600 max-w-3xl mx-auto">
                Cada conquista representa nosso compromisso com a excelência e sustentabilidade
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <?php foreach ($company_history as $index => $milestone): ?>
            <div class="timeline-item scroll-reveal mb-12">
                <div class="flex flex-col md:flex-row <?= $index % 2 === 1 ? 'md:flex-row-reverse' : '' ?> items-center gap-8">
                    <div class="md:w-1/2">
                        <div class="bg-white rounded-2xl p-8 shadow-lg">
                            <div class="text-4xl font-bold text-mogno-600 mb-4"><?= $milestone['year'] ?></div>
                            <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-4">
                                <?= $milestone['title'] ?>
                            </h3>
                            <p class="text-carvao-700 text-lg"><?= $milestone['description'] ?></p>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img src="<?= $milestone['image'] ?>" 
                             alt="<?= $milestone['title'] ?>" 
                             class="rounded-xl shadow-lg w-full">
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Mission, Vision, Values -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="font-montserrat font-bold text-4xl text-carvao-900 mb-6">
                Nossos <span class="text-mogno-600">Valores</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <?php if (isset($company_values) && is_array($company_values)): ?>
                <?php foreach ($company_values as $value): ?>
                <div class="text-center scroll-reveal">
                    <div class="w-20 h-20 bg-mogno-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <div class="w-10 h-10 bg-mogno-600 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-lg"><?= substr($value['title'], 0, 1) ?></span>
                        </div>
                    </div>
                    <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-4">
                        <?= $value['title'] ?>
                    </h3>
                    <p class="text-carvao-700 text-lg"><?= $value['description'] ?></p>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center text-carvao-600">
                    <p>Valores da empresa em breve...</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-carvao-900 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 wood-texture opacity-5"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="font-montserrat font-bold text-4xl mb-6">
                Nossa <span class="text-dourado-400">Equipe</span>
            </h2>
            <p class="text-xl text-cremoso-200 max-w-3xl mx-auto">
                Profissionais experientes e apaixonados pelo que fazem
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($team_members as $member): ?>
            <div class="text-center scroll-reveal">
                <div class="relative mb-6">
                    <img src="<?= $member['photo'] ?>" 
                         alt="<?= $member['name'] ?>" 
                         class="w-48 h-48 rounded-full object-cover mx-auto shadow-xl">
                    <div class="absolute inset-0 rounded-full bg-gradient-to-t from-mogno-600/20 to-transparent"></div>
                </div>
                <h3 class="font-montserrat font-bold text-xl mb-2"><?= $member['name'] ?></h3>
                <p class="text-dourado-400 font-semibold mb-4"><?= $member['position'] ?></p>
                <p class="text-cremoso-200"><?= $member['bio'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Certifications -->
<section class="py-20 bg-cremoso-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="font-montserrat font-bold text-4xl text-carvao-900 mb-6">
                Certificações e <span class="text-mogno-600">Compromissos</span>
            </h2>
            <p class="text-xl text-carvao-600 max-w-3xl mx-auto">
                Reconhecimentos que validam nosso compromisso com a qualidade e sustentabilidade
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- FSC Certification -->
            <div class="bg-white rounded-xl p-8 text-center shadow-lg scroll-reveal">
                <div class="w-16 h-16 bg-floresta-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-floresta-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/>
                    </svg>
                </div>
                <h3 class="font-montserrat font-bold text-lg text-carvao-900 mb-2">FSC</h3>
                <p class="text-carvao-600 text-sm">Certificação de Manejo Florestal Responsável</p>
            </div>

            <!-- ISO 14001 -->
            <div class="bg-white rounded-xl p-8 text-center shadow-lg scroll-reveal">
                <div class="w-16 h-16 bg-floresta-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-floresta-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17 8C8 10 5.9 16.17 3.82 21.34l1.89.66C7.84 17.17 9.6 12.62 17 11l-1-3z"/>
                        <path d="M3.82 21.34C5.9 16.17 8 10 17 8l1 3c-7.4 1.62-9.16 6.17-11.29 11.34l-1.89-.66z"/>
                    </svg>
                </div>
                <h3 class="font-montserrat font-bold text-lg text-carvao-900 mb-2">ISO 14001</h3>
                <p class="text-carvao-600 text-sm">Sistema de Gestão Ambiental</p>
            </div>

            <!-- Carbon Neutral -->
            <div class="bg-white rounded-xl p-8 text-center shadow-lg scroll-reveal">
                <div class="w-16 h-16 bg-floresta-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-floresta-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                </div>
                <h3 class="font-montserrat font-bold text-lg text-carvao-900 mb-2">Carbono Neutro</h3>
                <p class="text-carvao-600 text-sm">Neutralidade de Carbono Certificada</p>
            </div>

            <!-- Quality Assurance -->
            <div class="bg-white rounded-xl p-8 text-center shadow-lg scroll-reveal">
                <div class="w-16 h-16 bg-floresta-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-floresta-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-montserrat font-bold text-lg text-carvao-900 mb-2">Qualidade</h3>
                <p class="text-carvao-600 text-sm">Controle de Qualidade Rigoroso</p>
            </div>
        </div>
    </div>
</section>

<!-- Statistics -->
<section class="py-20 bg-mogno-600 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 wood-texture opacity-10"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="font-montserrat font-bold text-4xl mb-6">
                Números que <span class="text-dourado-400">Impressionam</span>
            </h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center scroll-reveal" x-data="counter(25)">
                <div class="text-5xl font-bold text-dourado-400 mb-2" x-text="Math.floor(count)">0</div>
                <div class="text-cremoso-200">Anos de<br>Experiência</div>
            </div>
            <div class="text-center scroll-reveal" x-data="counter(500)">
                <div class="text-5xl font-bold text-dourado-400 mb-2" x-text="Math.floor(count) + '+'">0</div>
                <div class="text-cremoso-200">Projetos<br>Realizados</div>
            </div>
            <div class="text-center scroll-reveal" x-data="counter(50)">
                <div class="text-5xl font-bold text-dourado-400 mb-2" x-text="Math.floor(count)">0</div>
                <div class="text-cremoso-200">Tipos de<br>Madeira</div>
            </div>
            <div class="text-center scroll-reveal" x-data="counter(98)">
                <div class="text-5xl font-bold text-dourado-400 mb-2" x-text="Math.floor(count) + '%'">0</div>
                <div class="text-cremoso-200">Satisfação<br>dos Clientes</div>
            </div>
        </div>
    </div>
</section>

<!-- Sustainability Commitment -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="scroll-reveal">
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=sustainable%20forest%20management%20reforestation%20environmental%20protection%20green%20practices&image_size=landscape_4_3" 
                         alt="Compromisso com Sustentabilidade" 
                         class="rounded-2xl shadow-xl w-full">
                </div>
                <div class="scroll-reveal">
                    <h2 class="font-montserrat font-bold text-4xl text-carvao-900 mb-6">
                        Compromisso com a <span class="text-floresta-600">Sustentabilidade</span>
                    </h2>
                    <div class="space-y-6 text-lg text-carvao-700">
                        <p>
                            Acreditamos que é possível conciliar desenvolvimento econômico com 
                            preservação ambiental. Por isso, todas as nossas madeiras são 
                            provenientes de florestas manejadas de forma sustentável.
                        </p>
                        <p>
                            Nossos programas de reflorestamento já plantaram mais de 100.000 
                            árvores, contribuindo para a regeneração de áreas degradadas e 
                            sequestro de carbono da atmosfera.
                        </p>
                        <p>
                            Além disso, investimos continuamente em tecnologias limpas e 
                            processos que minimizam nosso impacto ambiental, sempre buscando 
                            a excelência em sustentabilidade.
                        </p>
                    </div>
                    <div class="mt-8">
                        <a href="/contato" class="btn-primary">
                            Conheça Nossos Projetos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-floresta-900 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 wood-texture opacity-10"></div>
    
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="max-w-4xl mx-auto scroll-reveal">
            <h2 class="font-montserrat font-bold text-4xl md:text-5xl mb-6">
                Faça parte da nossa história
            </h2>
            <p class="text-xl text-cremoso-100 mb-8 max-w-2xl mx-auto">
                Junte-se aos milhares de clientes que confiam na Tronco Forte 
                para seus projetos mais importantes.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contato" class="btn-primary bg-dourado-500 hover:bg-dourado-600 text-lg px-8 py-4">
                    Entre em Contato
                </a>
                <a href="/catalogo" class="btn-outline border-white text-white hover:bg-white hover:text-floresta-900 text-lg px-8 py-4">
                    Ver Catálogo
                </a>
            </div>
        </div>
    </div>
</section>