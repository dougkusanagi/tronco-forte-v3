<!-- Breadcrumb -->
<section class="bg-cremoso-50 py-4">
    <div class="container mx-auto px-4">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="/" class="text-carvao-600 hover:text-mogno-600 transition-colors">Início</a>
            <svg class="w-4 h-4 text-carvao-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <a href="/catalogo" class="text-carvao-600 hover:text-mogno-600 transition-colors">Catálogo</a>
            <svg class="w-4 h-4 text-carvao-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-mogno-600 font-semibold"><?= $product['name'] ?></span>
        </nav>
    </div>
</section>

<!-- Product Detail -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div class="space-y-4">
                <!-- Main Image -->
                <div class="relative">
                    <img id="main-image" 
                         src="<?= $product['image'] ?>" 
                         alt="<?= $product['name'] ?>" 
                         class="w-full h-96 lg:h-[500px] object-cover rounded-xl shadow-lg">
                    
                    <!-- Image Navigation -->
                    <button onclick="previousImage()" 
                            class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-2 shadow-lg transition-all">
                        <svg class="w-6 h-6 text-carvao-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button onclick="nextImage()" 
                            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-2 shadow-lg transition-all">
                        <svg class="w-6 h-6 text-carvao-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    
                    <!-- Zoom Button -->
                    <button onclick="openImageModal()" 
                            class="absolute top-4 right-4 bg-white/80 hover:bg-white rounded-full p-2 shadow-lg transition-all"
                            title="Ampliar imagem">
                        <svg class="w-5 h-5 text-carvao-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Thumbnail Images -->
                <div class="flex space-x-2 overflow-x-auto pb-2">
                    <img src="<?= $product['image'] ?>" 
                         alt="<?= $product['name'] ?> - Vista 1" 
                         class="thumbnail w-20 h-20 object-cover rounded-lg cursor-pointer border-2 border-mogno-600 flex-shrink-0"
                         onclick="changeMainImage(this.src)">
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=<?= urlencode($product['name']) ?>%20wood%20texture%20close%20up%20detail&image_size=square" 
                         alt="<?= $product['name'] ?> - Textura" 
                         class="thumbnail w-20 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-mogno-600 transition-colors flex-shrink-0"
                         onclick="changeMainImage(this.src)">
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=<?= urlencode($product['name']) ?>%20wood%20grain%20pattern%20natural&image_size=square" 
                         alt="<?= $product['name'] ?> - Grão" 
                         class="thumbnail w-20 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-mogno-600 transition-colors flex-shrink-0"
                         onclick="changeMainImage(this.src)">
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=<?= urlencode($product['name']) ?>%20wood%20sample%20finished%20surface&image_size=square" 
                         alt="<?= $product['name'] ?> - Acabamento" 
                         class="thumbnail w-20 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-mogno-600 transition-colors flex-shrink-0"
                         onclick="changeMainImage(this.src)">
                </div>
            </div>
            
            <!-- Product Info -->
            <div class="space-y-6">
                <!-- Header -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <span class="bg-mogno-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            <?= $product['category'] ?>
                        </span>
                        <?php if ($product['in_stock']): ?>
                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Em Estoque
                        </span>
                        <?php else: ?>
                        <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Sob Consulta
                        </span>
                        <?php endif; ?>
                    </div>
                    
                    <h1 class="font-montserrat font-bold text-3xl lg:text-4xl text-carvao-900 mb-4">
                        <?= $product['name'] ?>
                    </h1>
                    
                    <p class="text-lg text-carvao-700 leading-relaxed">
                        <?= $product['description'] ?>
                    </p>
                </div>
                
                <!-- Price -->
                <div class="bg-cremoso-50 rounded-xl p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-3xl lg:text-4xl font-bold text-mogno-600">
                                R$ <?= number_format($product['price'], 2, ',', '.') ?>
                            </span>
                            <div class="text-carvao-600"><?= $product['unit'] ?></div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm text-carvao-500">Preço por <?= $product['unit'] ?></div>
                            <div class="text-xs text-carvao-400">*Consulte condições especiais para grandes volumes</div>
                        </div>
                    </div>
                </div>
                
                <!-- Specifications -->
                <div class="bg-white border border-gray-200 rounded-xl p-6">
                    <h3 class="font-montserrat font-bold text-xl text-carvao-900 mb-4">Especificações Técnicas</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php foreach ($product['specifications'] as $spec => $value): ?>
                        <div class="flex justify-between py-2 border-b border-gray-100 last:border-b-0">
                            <span class="text-carvao-600 font-medium"><?= $spec ?>:</span>
                            <span class="text-carvao-900"><?= $value ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Quantity Calculator -->
                <div class="bg-mogno-50 border border-mogno-200 rounded-xl p-6" x-data="quantityCalculator">
                    <h3 class="font-montserrat font-bold text-xl text-carvao-900 mb-4">Calculadora de Quantidade</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-semibold text-carvao-700 mb-2">Área necessária (m²)</label>
                            <input type="number" 
                                   x-model="area" 
                                   @input="calculate" 
                                   placeholder="Ex: 10.5" 
                                   step="0.1" 
                                   min="0.1" 
                                   class="form-input">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-carvao-700 mb-2">Quantidade extra (%)</label>
                            <select x-model="extraPercent" @change="calculate" class="form-input">
                                <option value="5">5% (recomendado)</option>
                                <option value="10">10% (seguro)</option>
                                <option value="15">15% (muito seguro)</option>
                            </select>
                        </div>
                    </div>
                    <div x-show="totalQuantity > 0" class="bg-white rounded-lg p-4">
                        <div class="grid grid-cols-2 gap-4 text-center">
                            <div>
                                <div class="text-2xl font-bold text-mogno-600" x-text="totalQuantity.toFixed(2)"></div>
                                <div class="text-sm text-carvao-600"><?= $product['unit'] ?> necessários</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-mogno-600" x-text="'R$ ' + totalPrice.toLocaleString('pt-BR', {minimumFractionDigits: 2})"></div>
                                <div class="text-sm text-carvao-600">Valor estimado</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Actions -->
                <div class="space-y-4">
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button onclick="addToQuote(<?= $product['id'] ?>)" 
                                class="btn-primary flex-1 text-lg py-4">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Adicionar ao Orçamento
                        </button>
                        <a href="/contato" class="btn-secondary flex-1 text-lg py-4 text-center">
                            Solicitar Orçamento
                        </a>
                    </div>
                    
                    <div class="flex justify-center space-x-4">
                        <button onclick="shareProduct()" 
                                class="flex items-center space-x-2 text-carvao-600 hover:text-mogno-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                            </svg>
                            <span>Compartilhar</span>
                        </button>
                        <button onclick="printProduct()" 
                                class="flex items-center space-x-2 text-carvao-600 hover:text-mogno-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                            </svg>
                            <span>Imprimir</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Details Tabs -->
<section class="py-12 bg-cremoso-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto" x-data="{ activeTab: 'description' }">
            <!-- Tab Navigation -->
            <div class="flex flex-wrap border-b border-gray-200 mb-8">
                <button @click="activeTab = 'description'" 
                        :class="activeTab === 'description' ? 'border-mogno-600 text-mogno-600' : 'border-transparent text-carvao-600'"
                        class="px-6 py-3 border-b-2 font-semibold transition-colors hover:text-mogno-600">
                    Descrição Detalhada
                </button>
                <button @click="activeTab = 'applications'" 
                        :class="activeTab === 'applications' ? 'border-mogno-600 text-mogno-600' : 'border-transparent text-carvao-600'"
                        class="px-6 py-3 border-b-2 font-semibold transition-colors hover:text-mogno-600">
                    Aplicações
                </button>
                <button @click="activeTab = 'care'" 
                        :class="activeTab === 'care' ? 'border-mogno-600 text-mogno-600' : 'border-transparent text-carvao-600'"
                        class="px-6 py-3 border-b-2 font-semibold transition-colors hover:text-mogno-600">
                    Cuidados
                </button>
                <button @click="activeTab = 'sustainability'" 
                        :class="activeTab === 'sustainability' ? 'border-mogno-600 text-mogno-600' : 'border-transparent text-carvao-600'"
                        class="px-6 py-3 border-b-2 font-semibold transition-colors hover:text-mogno-600">
                    Sustentabilidade
                </button>
            </div>
            
            <!-- Tab Content -->
            <div class="bg-white rounded-xl p-8 shadow-lg">
                <!-- Description Tab -->
                <div x-show="activeTab === 'description'" x-transition>
                    <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-6">Sobre <?= $product['name'] ?></h3>
                    <div class="prose prose-lg max-w-none text-carvao-700">
                        <p class="mb-4">
                            <?= $product['detailed_description'] ?? $product['description'] ?>
                        </p>
                        <p class="mb-4">
                            Esta madeira é conhecida por suas características únicas de durabilidade, 
                            beleza natural e versatilidade de aplicação. Cada peça é cuidadosamente 
                            selecionada para garantir a máxima qualidade.
                        </p>
                        <p>
                            Nosso processo de secagem e tratamento garante que você receba um produto 
                            estável, livre de defeitos e pronto para uso em seus projetos mais exigentes.
                        </p>
                    </div>
                </div>
                
                <!-- Applications Tab -->
                <div x-show="activeTab === 'applications'" x-transition>
                    <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-6">Aplicações Recomendadas</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-semibold text-lg text-carvao-900 mb-3">Uso Interno</h4>
                            <ul class="space-y-2 text-carvao-700">
                                <li class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Móveis planejados</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Revestimentos internos</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Pisos e assoalhos</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Decoração</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-carvao-900 mb-3">Uso Externo</h4>
                            <ul class="space-y-2 text-carvao-700">
                                <li class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Decks e pergolados</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Fachadas</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Estruturas externas</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Paisagismo</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Care Tab -->
                <div x-show="activeTab === 'care'" x-transition>
                    <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-6">Cuidados e Manutenção</h3>
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-semibold text-lg text-carvao-900 mb-3">Armazenamento</h4>
                            <ul class="space-y-2 text-carvao-700">
                                <li>• Mantenha em local seco e arejado</li>
                                <li>• Evite contato direto com o solo</li>
                                <li>• Proteja da chuva e umidade excessiva</li>
                                <li>• Use separadores entre as peças</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-carvao-900 mb-3">Manutenção</h4>
                            <ul class="space-y-2 text-carvao-700">
                                <li>• Limpeza regular com pano seco</li>
                                <li>• Aplicação periódica de verniz ou óleo</li>
                                <li>• Inspeção regular para pragas</li>
                                <li>• Evite produtos químicos agressivos</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Sustainability Tab -->
                <div x-show="activeTab === 'sustainability'" x-transition>
                    <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-6">Compromisso Sustentável</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="font-semibold text-lg text-carvao-900 mb-3">Certificações</h4>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-carvao-700">Certificação FSC</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-carvao-700">Manejo Sustentável</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-carvao-700">Rastreabilidade</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-carvao-900 mb-3">Impacto Ambiental</h4>
                            <p class="text-carvao-700 mb-4">
                                Esta madeira é proveniente de florestas manejadas de forma sustentável, 
                                contribuindo para a preservação da biodiversidade e sequestro de carbono.
                            </p>
                            <p class="text-carvao-700">
                                Ao escolher nossos produtos, você está apoiando práticas responsáveis 
                                que garantem a regeneração florestal para as futuras gerações.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<?php if (!empty($related_products)): ?>
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-montserrat font-bold text-3xl text-carvao-900 mb-4">
                Produtos <span class="text-mogno-600">Relacionados</span>
            </h2>
            <p class="text-lg text-carvao-600">
                Outros produtos que podem interessar
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($related_products as $related): ?>
            <div class="card-product group">
                <div class="relative overflow-hidden rounded-t-xl">
                    <img src="<?= $related['image'] ?>" 
                         alt="<?= $related['name'] ?>" 
                         class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="image-overlay">
                        <a href="/catalogo/produto/<?= $related['id'] ?>" class="btn-primary">
                            Ver Detalhes
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-montserrat font-semibold text-xl text-carvao-900 mb-2">
                        <?= $related['name'] ?>
                    </h3>
                    <p class="text-carvao-600 mb-4"><?= $related['description'] ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-bold text-mogno-600">
                            R$ <?= number_format($related['price'], 2, ',', '.') ?>
                        </span>
                        <span class="text-sm text-carvao-500"><?= $related['unit'] ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Image Modal -->
<div id="image-modal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden flex items-center justify-center p-4">
    <div class="relative max-w-4xl max-h-full">
        <img id="modal-image" src="" alt="" class="max-w-full max-h-full object-contain">
        <button onclick="closeImageModal()" 
                class="absolute top-4 right-4 bg-white rounded-full p-2 hover:bg-gray-100 transition-colors">
            <svg class="w-6 h-6 text-carvao-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</div>

<script>
// Product detail functionality
const images = [
    '<?= $product['image'] ?>',
    'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=<?= urlencode($product['name']) ?>%20wood%20texture%20close%20up%20detail&image_size=square',
    'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=<?= urlencode($product['name']) ?>%20wood%20grain%20pattern%20natural&image_size=square',
    'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=<?= urlencode($product['name']) ?>%20wood%20sample%20finished%20surface&image_size=square'
];

let currentImageIndex = 0;

function changeMainImage(src) {
    document.getElementById('main-image').src = src;
    currentImageIndex = images.indexOf(src);
    
    // Update thumbnail borders
    document.querySelectorAll('.thumbnail').forEach((thumb, index) => {
        if (thumb.src === src) {
            thumb.classList.add('border-mogno-600');
            thumb.classList.remove('border-transparent');
        } else {
            thumb.classList.remove('border-mogno-600');
            thumb.classList.add('border-transparent');
        }
    });
}

function previousImage() {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    changeMainImage(images[currentImageIndex]);
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    changeMainImage(images[currentImageIndex]);
}

function openImageModal() {
    const mainImage = document.getElementById('main-image');
    const modal = document.getElementById('image-modal');
    const modalImage = document.getElementById('modal-image');
    
    modalImage.src = mainImage.src;
    modalImage.alt = mainImage.alt;
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeImageModal() {
    document.getElementById('image-modal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function addToQuote(productId) {
    // Add to quote functionality (same as catalog)
    showToast('Produto adicionado ao orçamento!');
}

function shareProduct() {
    if (navigator.share) {
        navigator.share({
            title: '<?= $product['name'] ?> - Tronco Forte',
            text: '<?= $product['description'] ?>',
            url: window.location.href
        });
    } else {
        navigator.clipboard.writeText(window.location.href);
        showToast('Link copiado para a área de transferência!');
    }
}

function printProduct() {
    window.print();
}

function showToast(message) {
    const toast = document.createElement('div');
    toast.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
    toast.textContent = message;
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.remove();
    }, 3000);
}

// Quantity Calculator Alpine.js component
document.addEventListener('alpine:init', () => {
    Alpine.data('quantityCalculator', () => ({
        area: 0,
        extraPercent: 5,
        totalQuantity: 0,
        totalPrice: 0,
        
        calculate() {
            if (this.area > 0) {
                this.totalQuantity = this.area * (1 + this.extraPercent / 100);
                this.totalPrice = this.totalQuantity * <?= $product['price'] ?>;
            } else {
                this.totalQuantity = 0;
                this.totalPrice = 0;
            }
        }
    }));
});

// Close modal on escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeImageModal();
    }
});

// Close modal on background click
document.getElementById('image-modal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeImageModal();
    }
});
</script>