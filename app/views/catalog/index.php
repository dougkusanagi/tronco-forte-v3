<!-- Hero Section -->
<section class="bg-gradient-to-br from-mogno-800 to-mogno-900 text-white py-20 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 wood-texture opacity-10"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="font-montserrat font-bold text-4xl md:text-5xl lg:text-6xl mb-6">
                Nosso <span class="text-dourado-400">Catálogo</span>
            </h1>
            <p class="text-xl md:text-2xl text-cremoso-100 mb-8">
                Descubra nossa ampla seleção de madeiras de qualidade superior, 
                desde espécies nobres até soluções industriais.
            </p>
        </div>
    </div>
</section>

<!-- Filters Section -->
<section class="py-8 bg-white border-b border-gray-200 sticky top-20 z-40">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <!-- Categories Filter -->
            <div class="flex flex-wrap gap-2">
                <button class="px-4 py-2 rounded-full bg-mogno-600 text-white font-semibold transition-colors" 
                        onclick="filterProducts('all')">
                    Todas
                </button>
                <?php foreach ($categories as $category): ?>
                <button class="px-4 py-2 rounded-full bg-gray-200 text-carvao-700 hover:bg-mogno-100 font-semibold transition-colors" 
                        onclick="filterProducts('<?= strtolower(str_replace(' ', '-', $category['name'])) ?>')">
                    <?= $category['name'] ?> (<?= $category['count'] ?>)
                </button>
                <?php endforeach; ?>
            </div>

            <!-- Search -->
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="text" 
                           placeholder="Buscar produtos..." 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-mogno-500 focus:border-mogno-500"
                           onkeyup="searchProducts(this.value)">
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                
                <!-- Sort -->
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-mogno-500 focus:border-mogno-500" 
                        onchange="sortProducts(this.value)">
                    <option value="name">Ordenar por Nome</option>
                    <option value="price-low">Menor Preço</option>
                    <option value="price-high">Maior Preço</option>
                    <option value="category">Categoria</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="py-20 bg-cremoso-50">
    <div class="container mx-auto px-4">
        <div id="products-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <?php foreach ($products as $product): ?>
            <div class="product-card group scroll-reveal relative bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" 
                 data-category="<?= strtolower(str_replace(' ', '-', $product['category'])) ?>"
                 data-name="<?= strtolower($product['name']) ?>"
                 data-price="<?= $product['price'] ?>">
                
                <!-- Gradient Overlay Background -->
                <div class="absolute inset-0 bg-gradient-to-br from-mogno-50 via-white to-dourado-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <!-- Product Image -->
                <div class="relative overflow-hidden h-72">
                    <img src="<?= $product['image'] ?>" 
                         alt="<?= $product['name'] ?>" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 lazy-load"
                         loading="lazy">
                    
                    <!-- Dark Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <!-- Category Badge -->
                    <div class="absolute top-6 left-6 bg-white/90 backdrop-blur-sm text-mogno-700 px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                        <?= $product['category'] ?>
                    </div>
                    
                    <!-- Availability Badge -->
                    <?php if ($product['in_stock']): ?>
                    <div class="absolute top-6 right-6 bg-floresta-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                        Em Estoque
                    </div>
                    <?php else: ?>
                    <div class="absolute top-6 right-6 bg-dourado-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                        Sob Consulta
                    </div>
                    <?php endif; ?>
                    
                    <!-- Quick Action Button -->
                    <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                        <button onclick="addToQuote(<?= $product['id'] ?>)" 
                                class="bg-mogno-600 hover:bg-mogno-700 text-white p-3 rounded-full shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Wood Grain Decorative Element -->
                    <div class="absolute -top-16 -right-16 w-32 h-32 bg-gradient-to-tl from-dourado-100 to-transparent rounded-full opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                </div>
                
                <!-- Product Info -->
                <div class="relative p-8">
                    <!-- Decorative Element -->
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-dourado-500 w-6 h-6 rounded-full"></div>
                    
                    <div class="pt-6">
                        <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-4 group-hover:text-mogno-700 transition-colors duration-300">
                            <?= $product['name'] ?>
                        </h3>
                        <p class="text-carvao-600 mb-6 leading-relaxed line-clamp-2">
                            <?= $product['description'] ?>
                        </p>
                        
                        <!-- Specifications -->
                        <div class="space-y-3 mb-6">
                            <?php if (!empty($product['dimensions'])): ?>
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-mogno-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-mogno-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="text-xs text-carvao-500 block">Dimensões</span>
                                    <span class="text-sm font-semibold text-carvao-700"><?= $product['dimensions'] ?></span>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if (!empty($product['thickness'])): ?>
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-floresta-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-floresta-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="text-xs text-carvao-500 block">Espessura</span>
                                    <span class="text-sm font-semibold text-carvao-700"><?= $product['thickness'] ?></span>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if (!empty($product['grade'])): ?>
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-dourado-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-dourado-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="text-xs text-carvao-500 block">Grau</span>
                                    <span class="text-sm font-semibold text-carvao-700"><?= $product['grade'] ?></span>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Price Section -->
                        <div class="bg-gradient-to-r from-mogno-50 to-dourado-50 rounded-2xl p-6 mb-6">
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-3xl font-bold text-mogno-600">
                                        R$ <?= number_format($product['price'], 2, ',', '.') ?>
                                    </span>
                                    <div class="text-sm text-carvao-500 font-medium"><?= $product['unit'] ?></div>
                                </div>
                                <div class="flex space-x-2">
                                    <button onclick="shareProduct(<?= $product['id'] ?>)" 
                                            class="bg-white text-carvao-600 p-3 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105"
                                            title="Compartilhar produto">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Action Button -->
                        <a href="/catalogo/produto/<?= $product['id'] ?>" 
                           class="block w-full bg-gradient-to-r from-mogno-600 to-mogno-700 hover:from-mogno-700 hover:to-mogno-800 text-white text-center py-4 px-6 rounded-xl font-semibold transition-all duration-300 hover:scale-105 shadow-xl group-hover:shadow-2xl">
                            <div class="flex items-center justify-center space-x-2">
                                <span>Ver Detalhes</span>
                                <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- No Results Message -->
        <div id="no-results" class="text-center py-20 hidden">
            <div class="max-w-md mx-auto">
                <svg class="w-24 h-24 text-gray-400 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-4">
                    Nenhum produto encontrado
                </h3>
                <p class="text-carvao-600 mb-6">
                    Tente ajustar os filtros ou termos de busca para encontrar o que procura.
                </p>
                <button onclick="clearFilters()" class="btn-primary">
                    Limpar Filtros
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Quote Summary (Fixed Bottom) -->
<div id="quote-summary" class="fixed bottom-4 right-4 bg-white rounded-lg shadow-xl p-4 max-w-sm hidden z-50">
    <div class="flex items-center justify-between mb-3">
        <h4 class="font-montserrat font-bold text-lg text-carvao-900">Orçamento</h4>
        <button onclick="toggleQuoteSummary()" class="text-carvao-500 hover:text-carvao-700">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div id="quote-items" class="space-y-2 mb-4 max-h-40 overflow-y-auto">
        <!-- Quote items will be added here dynamically -->
    </div>
    <div class="border-t pt-3">
        <div class="flex justify-between items-center mb-3">
            <span class="font-semibold text-carvao-900">Total de itens:</span>
            <span id="quote-count" class="font-bold text-mogno-600">0</span>
        </div>
        <a href="/contato" class="btn-primary w-full text-center block">
            Solicitar Orçamento
        </a>
    </div>
</div>

<!-- Categories Info Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="font-montserrat font-bold text-4xl text-carvao-900 mb-6">
                Nossas <span class="text-mogno-600">Categorias</span>
            </h2>
            <p class="text-xl text-carvao-600 max-w-3xl mx-auto">
                Conheça melhor cada categoria de produtos que oferecemos
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Madeiras Nobres -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 scroll-reveal">
                <div class="w-20 h-20 bg-gradient-to-br from-mogno-100 to-mogno-200 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                    <i data-lucide="shield-check" class="w-10 h-10 text-mogno-600"></i>
                </div>
                <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-4 text-center">Madeiras Nobres</h3>
                <p class="text-carvao-600 mb-6 text-center leading-relaxed">
                    Espécies premium como mogno, cedro e ipê, ideais para projetos de alto padrão 
                    que exigem beleza e durabilidade excepcionais.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-mogno-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i data-lucide="shield" class="w-4 h-4 text-mogno-600"></i>
                        </div>
                        <span class="text-carvao-700 font-medium">Resistência superior</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-mogno-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i data-lucide="sparkles" class="w-4 h-4 text-mogno-600"></i>
                        </div>
                        <span class="text-carvao-700 font-medium">Beleza natural única</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-mogno-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i data-lucide="file-check" class="w-4 h-4 text-mogno-600"></i>
                        </div>
                        <span class="text-carvao-700 font-medium">Certificação de origem</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-mogno-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i data-lucide="star" class="w-4 h-4 text-mogno-600"></i>
                        </div>
                        <span class="text-carvao-700 font-medium">Acabamento premium</span>
                    </div>
                </div>
            </div>

            <!-- Compensados -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 scroll-reveal">
                <div class="w-20 h-20 bg-gradient-to-br from-floresta-100 to-floresta-200 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                    <i data-lucide="layers" class="w-10 h-10 text-floresta-600"></i>
                </div>
                <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-4 text-center">Compensados</h3>
                <p class="text-carvao-600 mb-6 text-center leading-relaxed">
                    Painéis versáteis e resistentes, perfeitos para móveis, construção civil 
                    e projetos que demandam estabilidade dimensional.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-floresta-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i data-lucide="ruler" class="w-4 h-4 text-floresta-600"></i>
                        </div>
                        <span class="text-carvao-700 font-medium">Estabilidade dimensional</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-floresta-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i data-lucide="wrench" class="w-4 h-4 text-floresta-600"></i>
                        </div>
                        <span class="text-carvao-700 font-medium">Versatilidade de uso</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-floresta-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i data-lucide="dollar-sign" class="w-4 h-4 text-floresta-600"></i>
                        </div>
                        <span class="text-carvao-700 font-medium">Ótimo custo-benefício</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-floresta-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i data-lucide="move-3d" class="w-4 h-4 text-floresta-600"></i>
                        </div>
                        <span class="text-carvao-700 font-medium">Várias espessuras</span>
                    </div>
                </div>
            </div>

            <!-- MDF -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 scroll-reveal">
                <div class="w-20 h-20 bg-gradient-to-br from-dourado-100 to-dourado-200 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                    <i data-lucide="square" class="w-10 h-10 text-dourado-600"></i>
                </div>
                <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-4 text-center">MDF</h3>
                <p class="text-carvao-600 mb-6 text-center leading-relaxed">
                    Painéis de fibra de média densidade, ideais para móveis planejados, 
                    decoração e projetos que exigem acabamento liso.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-dourado-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i data-lucide="mirror" class="w-4 h-4 text-dourado-600"></i>
                        </div>
                        <span class="text-carvao-700 font-medium">Superfície lisa</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-dourado-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i data-lucide="settings" class="w-4 h-4 text-dourado-600"></i>
                        </div>
                        <span class="text-carvao-700 font-medium">Fácil usinagem</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-dourado-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i data-lucide="palette" class="w-4 h-4 text-dourado-600"></i>
                        </div>
                        <span class="text-carvao-700 font-medium">Aceita diversos acabamentos</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-dourado-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i data-lucide="balance-scale" class="w-4 h-4 text-dourado-600"></i>
                        </div>
                        <span class="text-carvao-700 font-medium">Densidade uniforme</span>
                    </div>
                </div>
            </div>
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
                Não encontrou o que procura?
            </h2>
            <p class="text-xl text-cremoso-100 mb-8 max-w-2xl mx-auto">
                Nossa equipe especializada pode ajudar você a encontrar a madeira 
                perfeita para seu projeto específico.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contato" class="btn-primary bg-white text-mogno-600 hover:bg-cremoso-100 text-lg px-8 py-4">
                    Falar com Especialista
                </a>
                <a href="tel:+5511999999999" class="btn-outline border-white text-white hover:bg-white hover:text-mogno-600 text-lg px-8 py-4">
                    Ligar Agora
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Catalog functionality
let quoteItems = [];

function filterProducts(category) {
    const products = document.querySelectorAll('.product-card');
    const buttons = document.querySelectorAll('button[onclick^="filterProducts"]');
    
    // Update button states
    buttons.forEach(btn => {
        btn.classList.remove('bg-mogno-600', 'text-white');
        btn.classList.add('bg-gray-200', 'text-carvao-700');
    });
    event.target.classList.remove('bg-gray-200', 'text-carvao-700');
    event.target.classList.add('bg-mogno-600', 'text-white');
    
    // Filter products
    let visibleCount = 0;
    products.forEach(product => {
        if (category === 'all' || product.dataset.category === category) {
            product.style.display = 'block';
            visibleCount++;
        } else {
            product.style.display = 'none';
        }
    });
    
    // Show/hide no results message
    document.getElementById('no-results').classList.toggle('hidden', visibleCount > 0);
}

function searchProducts(query) {
    const products = document.querySelectorAll('.product-card');
    const searchTerm = query.toLowerCase();
    let visibleCount = 0;
    
    products.forEach(product => {
        const name = product.dataset.name;
        if (name.includes(searchTerm)) {
            product.style.display = 'block';
            visibleCount++;
        } else {
            product.style.display = 'none';
        }
    });
    
    document.getElementById('no-results').classList.toggle('hidden', visibleCount > 0);
}

function sortProducts(criteria) {
    const grid = document.getElementById('products-grid');
    const products = Array.from(document.querySelectorAll('.product-card'));
    
    products.sort((a, b) => {
        switch(criteria) {
            case 'name':
                return a.dataset.name.localeCompare(b.dataset.name);
            case 'price-low':
                return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
            case 'price-high':
                return parseFloat(b.dataset.price) - parseFloat(a.dataset.price);
            case 'category':
                return a.dataset.category.localeCompare(b.dataset.category);
            default:
                return 0;
        }
    });
    
    products.forEach(product => grid.appendChild(product));
}

function addToQuote(productId) {
    if (!quoteItems.includes(productId)) {
        quoteItems.push(productId);
        updateQuoteSummary();
        
        // Show success message
        showToast('Produto adicionado ao orçamento!');
    } else {
        showToast('Produto já está no orçamento!');
    }
}

function removeFromQuote(productId) {
    quoteItems = quoteItems.filter(id => id !== productId);
    updateQuoteSummary();
}

function updateQuoteSummary() {
    const summary = document.getElementById('quote-summary');
    const count = document.getElementById('quote-count');
    const items = document.getElementById('quote-items');
    
    count.textContent = quoteItems.length;
    
    if (quoteItems.length > 0) {
        summary.classList.remove('hidden');
        
        // Update items list (simplified - in real app would fetch product details)
        items.innerHTML = quoteItems.map(id => `
            <div class="flex justify-between items-center text-sm">
                <span>Produto #${id}</span>
                <button onclick="removeFromQuote(${id})" class="text-red-500 hover:text-red-700">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        `).join('');
    } else {
        summary.classList.add('hidden');
    }
}

function toggleQuoteSummary() {
    document.getElementById('quote-summary').classList.add('hidden');
}

function shareProduct(productId) {
    if (navigator.share) {
        navigator.share({
            title: 'Produto Tronco Forte',
            url: `/catalogo/produto/${productId}`
        });
    } else {
        // Fallback - copy to clipboard
        navigator.clipboard.writeText(window.location.origin + `/catalogo/produto/${productId}`);
        showToast('Link copiado para a área de transferência!');
    }
}

function clearFilters() {
    // Reset search
    document.querySelector('input[placeholder="Buscar produtos..."]').value = '';
    
    // Reset category filter
    filterProducts('all');
    
    // Reset sort
    document.querySelector('select').value = 'name';
    sortProducts('name');
}

function showToast(message) {
    // Simple toast notification
    const toast = document.createElement('div');
    toast.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
    toast.textContent = message;
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.remove();
    }, 3000);
}
</script>