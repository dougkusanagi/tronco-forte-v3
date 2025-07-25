<!-- Hero Section -->
<section class="bg-gradient-to-br from-mogno-800 to-mogno-900 text-white py-20 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 wood-texture opacity-10"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="font-montserrat font-bold text-4xl md:text-5xl lg:text-6xl mb-6">
                Blog <span class="text-dourado-400">Tronco Forte</span>
            </h1>
            <p class="text-xl md:text-2xl text-cremoso-100 mb-8">
                Descubra dicas, tendências e conhecimentos sobre madeiras, 
                sustentabilidade e projetos incríveis.
            </p>
        </div>
    </div>
</section>

<!-- Featured Post -->
<?php if ($featured_post): ?>
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="bg-gradient-to-r from-mogno-600 to-mogno-700 rounded-2xl overflow-hidden shadow-2xl">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="relative">
                        <img src="<?= $featured_post['image'] ?>" 
                             alt="<?= $featured_post['title'] ?>" 
                             class="w-full h-64 lg:h-full object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-cremoso-200 text-mogno-800 px-3 py-1 rounded-full text-sm font-semibold">
                                Destaque
                            </span>
                        </div>
                    </div>
                    <div class="p-8 lg:p-12 text-white">
                        <div class="flex items-center space-x-4 mb-4">
                            <span class="bg-white/20 text-white px-3 py-1 rounded-full text-sm">
                                <?= $featured_post['category'] ?>
                            </span>
                            <span class="text-cremoso-200 text-sm">
                                <?= date('d/m/Y', strtotime($featured_post['date'])) ?>
                            </span>
                        </div>
                        <h2 class="font-montserrat font-bold text-3xl lg:text-4xl mb-4">
                            <?= $featured_post['title'] ?>
                        </h2>
                        <p class="text-cremoso-100 text-lg mb-6 leading-relaxed">
                            <?= $featured_post['excerpt'] ?>
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=professional%20portrait%20<?= urlencode($featured_post['author']) ?>&image_size=square" 
                                     alt="<?= $featured_post['author'] ?>" 
                                     class="w-10 h-10 rounded-full object-cover">
                                <span class="text-cremoso-200"><?= $featured_post['author'] ?></span>
                            </div>
                            <a href="/blog/<?= $featured_post['id'] ?>" 
                               class="bg-white text-mogno-600 px-6 py-3 rounded-lg font-semibold hover:bg-cremoso-100 transition-colors">
                                Ler Artigo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Blog Filters -->
<section class="py-12 bg-cremoso-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto" x-data="blogFilters">
            <div class="flex flex-wrap items-center justify-between gap-4 mb-8">
                <!-- Categories Filter -->
                <div class="flex flex-wrap gap-2">
                    <button @click="setCategory('')" 
                            :class="selectedCategory === '' ? 'bg-mogno-600 text-white' : 'bg-white text-carvao-700 hover:bg-mogno-50'"
                            class="px-4 py-2 rounded-lg font-medium transition-colors">
                        Todas as Categorias
                    </button>
                    <?php foreach ($categories as $category): ?>
                    <button @click="setCategory('<?= $category['name'] ?>')" 
                            :class="selectedCategory === '<?= $category['name'] ?>' ? 'bg-mogno-600 text-white' : 'bg-white text-carvao-700 hover:bg-mogno-50'"
                            class="px-4 py-2 rounded-lg font-medium transition-colors">
                        <?= $category['name'] ?> (<?= $category['count'] ?>)
                    </button>
                    <?php endforeach; ?>
                </div>
                
                <!-- Search -->
                <div class="relative">
                    <input type="text" 
                           x-model="searchTerm"
                           @input="filterPosts"
                           placeholder="Buscar artigos..."
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-mogno-500 focus:border-mogno-500">
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
            
            <!-- Posts Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="posts-grid">
                <?php foreach ($posts as $post): ?>
                <article class="blog-post bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300" 
                         data-category="<?= $post['category'] ?>"
                         data-title="<?= strtolower($post['title']) ?>"
                         data-excerpt="<?= strtolower($post['excerpt']) ?>">
                    <div class="relative">
                        <img src="<?= $post['image'] ?>" 
                             alt="<?= $post['title'] ?>" 
                             class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-mogno-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                <?= $post['category'] ?>
                            </span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <button onclick="sharePost('<?= $post['id'] ?>', '<?= addslashes($post['title']) ?>')" 
                                    class="bg-white/80 hover:bg-white rounded-full p-2 transition-colors"
                                    title="Compartilhar">
                                <svg class="w-4 h-4 text-carvao-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <div class="flex items-center space-x-4 mb-3 text-sm text-carvao-500">
                            <span><?= date('d/m/Y', strtotime($post['date'])) ?></span>
                            <span>•</span>
                            <span><?= $post['read_time'] ?> min de leitura</span>
                        </div>
                        
                        <h3 class="font-montserrat font-bold text-xl text-carvao-900 mb-3 line-clamp-2">
                            <?= $post['title'] ?>
                        </h3>
                        
                        <p class="text-carvao-600 mb-4 line-clamp-3">
                            <?= $post['excerpt'] ?>
                        </p>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=professional%20portrait%20<?= urlencode($post['author']) ?>&image_size=square" 
                                     alt="<?= $post['author'] ?>" 
                                     class="w-8 h-8 rounded-full object-cover">
                                <span class="text-sm text-carvao-600"><?= $post['author'] ?></span>
                            </div>
                            <a href="/blog/<?= $post['id'] ?>" 
                               class="text-mogno-600 hover:text-mogno-700 font-semibold text-sm transition-colors">
                                Ler mais →
                            </a>
                        </div>
                        
                        <!-- Tags -->
                        <?php if (!empty($post['tags'])): ?>
                        <div class="flex flex-wrap gap-2 mt-4 pt-4 border-t border-gray-100">
                            <?php foreach ($post['tags'] as $tag): ?>
                            <span class="bg-cremoso-100 text-carvao-600 px-2 py-1 rounded text-xs">
                                #<?= $tag ?>
                            </span>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
            
            <!-- No Results -->
            <div x-show="filteredPosts.length === 0" 
                 x-transition
                 class="text-center py-16">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 20.4a7.962 7.962 0 01-5.657-2.109C5.687 17.635 5 16.4 5 15V8a2 2 0 012-2h10a2 2 0 012 2v7c0 1.4-.687 2.635-1.343 3.291z"></path>
                </svg>
                <h3 class="font-montserrat font-bold text-xl text-carvao-900 mb-2">Nenhum artigo encontrado</h3>
                <p class="text-carvao-600 mb-4">Tente ajustar os filtros ou termo de busca.</p>
                <button @click="clearFilters()" class="btn-primary">
                    Limpar Filtros
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="py-20 bg-mogno-600">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="font-montserrat font-bold text-3xl lg:text-4xl text-white mb-4">
                Receba Nossos <span class="text-cremoso-200">Artigos</span>
            </h2>
            <p class="text-xl text-cremoso-100 mb-8">
                Assine nossa newsletter e seja o primeiro a receber nossos novos conteúdos, 
                dicas exclusivas e novidades do setor madeireiro.
            </p>
            
            <form x-data="newsletter" @submit.prevent="subscribe" class="max-w-md mx-auto">
                <div class="flex flex-col sm:flex-row gap-4">
                    <input type="email" 
                           x-model="email"
                           required 
                           placeholder="Seu melhor e-mail"
                           class="flex-1 px-4 py-3 rounded-lg border-0 focus:ring-2 focus:ring-cremoso-300">
                    <button type="submit" 
                            :disabled="loading"
                            :class="loading ? 'opacity-50 cursor-not-allowed' : ''"
                            class="bg-cremoso-200 text-mogno-800 px-6 py-3 rounded-lg font-semibold hover:bg-cremoso-300 transition-colors">
                        <span x-show="!loading">Assinar</span>
                        <span x-show="loading">Enviando...</span>
                    </button>
                </div>
                <p class="text-cremoso-200 text-sm mt-4">
                    Prometemos não enviar spam. Você pode cancelar a qualquer momento.
                </p>
            </form>
        </div>
    </div>
</section>

<!-- Related Topics -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="font-montserrat font-bold text-3xl lg:text-4xl text-carvao-900 mb-4">
                Explore Mais <span class="text-mogno-600">Tópicos</span>
            </h2>
            <p class="text-lg text-carvao-600">
                Descubra outros assuntos que podem interessar você
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-16 h-16 bg-mogno-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-mogno-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-mogno-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="font-montserrat font-bold text-lg text-carvao-900 mb-2">Sustentabilidade</h3>
                <p class="text-carvao-600 text-sm">Práticas ecológicas e manejo responsável</p>
            </div>
            
            <div class="text-center group">
                <div class="w-16 h-16 bg-mogno-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-mogno-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-mogno-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="font-montserrat font-bold text-lg text-carvao-900 mb-2">Técnicas</h3>
                <p class="text-carvao-600 text-sm">Métodos de trabalho e acabamento</p>
            </div>
            
            <div class="text-center group">
                <div class="w-16 h-16 bg-mogno-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-mogno-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-mogno-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="font-montserrat font-bold text-lg text-carvao-900 mb-2">Tendências</h3>
                <p class="text-carvao-600 text-sm">Novidades e inovações do mercado</p>
            </div>
            
            <div class="text-center group">
                <div class="w-16 h-16 bg-mogno-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-mogno-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-mogno-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="font-montserrat font-bold text-lg text-carvao-900 mb-2">Projetos</h3>
                <p class="text-carvao-600 text-sm">Inspirações e casos de sucesso</p>
            </div>
        </div>
    </div>
</section>

<script>
// Blog functionality
document.addEventListener('alpine:init', () => {
    Alpine.data('blogFilters', () => ({
        selectedCategory: '',
        searchTerm: '',
        filteredPosts: [],
        
        init() {
            this.filteredPosts = Array.from(document.querySelectorAll('.blog-post'));
        },
        
        setCategory(category) {
            this.selectedCategory = category;
            this.filterPosts();
        },
        
        filterPosts() {
            const posts = document.querySelectorAll('.blog-post');
            this.filteredPosts = [];
            
            posts.forEach(post => {
                const category = post.dataset.category;
                const title = post.dataset.title;
                const excerpt = post.dataset.excerpt;
                
                const matchesCategory = !this.selectedCategory || category === this.selectedCategory;
                const matchesSearch = !this.searchTerm || 
                    title.includes(this.searchTerm.toLowerCase()) || 
                    excerpt.includes(this.searchTerm.toLowerCase());
                
                if (matchesCategory && matchesSearch) {
                    post.style.display = 'block';
                    this.filteredPosts.push(post);
                } else {
                    post.style.display = 'none';
                }
            });
        },
        
        clearFilters() {
            this.selectedCategory = '';
            this.searchTerm = '';
            this.filterPosts();
        }
    }));
    
    Alpine.data('newsletter', () => ({
        email: '',
        loading: false,
        
        async subscribe() {
            this.loading = true;
            
            try {
                // Simulate subscription
                await new Promise(resolve => setTimeout(resolve, 1500));
                
                showToast('Inscrição realizada com sucesso!');
                this.email = '';
                
            } catch (error) {
                showToast('Erro ao realizar inscrição. Tente novamente.', 'error');
            } finally {
                this.loading = false;
            }
        }
    }));
});

function sharePost(postId, title) {
    const url = `${window.location.origin}/blog/${postId}`;
    
    if (navigator.share) {
        navigator.share({
            title: title + ' - Tronco Forte Blog',
            url: url
        });
    } else {
        navigator.clipboard.writeText(url);
        showToast('Link copiado para a área de transferência!');
    }
}

function showToast(message, type = 'success') {
    const toast = document.createElement('div');
    const bgColor = type === 'success' ? 'bg-green-500' : 'bg-red-500';
    toast.className = `fixed top-4 right-4 ${bgColor} text-white px-6 py-3 rounded-lg shadow-lg z-50`;
    toast.textContent = message;
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.remove();
    }, 3000);
}

// Line clamp utility
const style = document.createElement('style');
style.textContent = `
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
`;
document.head.appendChild(style);
</script>