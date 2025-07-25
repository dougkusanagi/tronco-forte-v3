<!-- Breadcrumb -->
<section class="bg-cremoso-50 py-4">
    <div class="container mx-auto px-4">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="/" class="text-carvao-600 hover:text-mogno-600 transition-colors">Início</a>
            <svg class="w-4 h-4 text-carvao-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <a href="/blog" class="text-carvao-600 hover:text-mogno-600 transition-colors">Blog</a>
            <svg class="w-4 h-4 text-carvao-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-mogno-600 font-semibold"><?= $post['title'] ?></span>
        </nav>
    </div>
</section>

<!-- Article Header -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Category & Date -->
            <div class="flex items-center space-x-4 mb-6">
                <span class="bg-mogno-600 text-white px-4 py-2 rounded-full font-semibold">
                    <?= $post['category'] ?>
                </span>
                <span class="text-carvao-500"><?= date('d/m/Y', strtotime($post['date'])) ?></span>
                <span class="text-carvao-400">•</span>
                <span class="text-carvao-500"><?= $post['read_time'] ?> min de leitura</span>
            </div>
            
            <!-- Title -->
            <h1 class="font-montserrat font-bold text-4xl lg:text-5xl text-carvao-900 mb-6 leading-tight">
                <?= $post['title'] ?>
            </h1>
            
            <!-- Excerpt -->
            <p class="text-xl text-carvao-600 mb-8 leading-relaxed">
                <?= $post['excerpt'] ?>
            </p>
            
            <!-- Author & Actions -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-8 border-b border-gray-200">
                <div class="flex items-center space-x-4">
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=professional%20portrait%20<?= urlencode($post['author']) ?>&image_size=square" 
                         alt="<?= $post['author'] ?>" 
                         class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <div class="font-semibold text-carvao-900"><?= $post['author'] ?></div>
                        <div class="text-sm text-carvao-500">Especialista em Madeiras</div>
                    </div>
                </div>
                
                <div class="flex items-center space-x-3">
                    <button onclick="shareArticle()" 
                            class="flex items-center space-x-2 bg-mogno-100 text-mogno-700 px-4 py-2 rounded-lg hover:bg-mogno-200 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                        </svg>
                        <span>Compartilhar</span>
                    </button>
                    <button onclick="printArticle()" 
                            class="flex items-center space-x-2 bg-gray-100 text-carvao-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                        </svg>
                        <span>Imprimir</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Image -->
<section class="py-8 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <img src="<?= $post['image'] ?>" 
                 alt="<?= $post['title'] ?>" 
                 class="w-full h-64 lg:h-96 object-cover rounded-2xl shadow-lg">
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-3">
                    <div class="prose prose-lg max-w-none">
                        <?= $post['content'] ?>
                    </div>
                    
                    <!-- Tags -->
                    <?php if (!empty($post['tags'])): ?>
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <h3 class="font-montserrat font-bold text-lg text-carvao-900 mb-4">Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($post['tags'] as $tag): ?>
                            <span class="bg-cremoso-100 text-carvao-700 px-3 py-1 rounded-full text-sm hover:bg-mogno-100 transition-colors cursor-pointer">
                                #<?= $tag ?>
                            </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Social Share -->
                    <div class="mt-8 pt-8 border-t border-gray-200">
                        <h3 class="font-montserrat font-bold text-lg text-carvao-900 mb-4">Compartilhe este artigo</h3>
                        <div class="flex space-x-4">
                            <button onclick="shareOnFacebook()" 
                                    class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                <span>Facebook</span>
                            </button>
                            <button onclick="shareOnTwitter()" 
                                    class="flex items-center space-x-2 bg-blue-400 text-white px-4 py-2 rounded-lg hover:bg-blue-500 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                                <span>Twitter</span>
                            </button>
                            <button onclick="shareOnLinkedIn()" 
                                    class="flex items-center space-x-2 bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                                <span>LinkedIn</span>
                            </button>
                            <button onclick="shareOnWhatsApp()" 
                                    class="flex items-center space-x-2 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.700"/>
                                </svg>
                                <span>WhatsApp</span>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Table of Contents -->
                    <div class="bg-cremoso-50 rounded-xl p-6 mb-8 sticky top-8">
                        <h3 class="font-montserrat font-bold text-lg text-carvao-900 mb-4">Índice</h3>
                        <nav class="space-y-2" id="table-of-contents">
                            <!-- Generated by JavaScript -->
                        </nav>
                    </div>
                    
                    <!-- Newsletter Signup -->
                    <div class="bg-mogno-600 rounded-xl p-6 text-white mb-8">
                        <h3 class="font-montserrat font-bold text-lg mb-3">Receba Mais Conteúdo</h3>
                        <p class="text-cremoso-100 text-sm mb-4">
                            Assine nossa newsletter e receba artigos exclusivos sobre madeiras.
                        </p>
                        <form x-data="sidebarNewsletter" @submit.prevent="subscribe" class="space-y-3">
                            <input type="email" 
                                   x-model="email"
                                   required 
                                   placeholder="Seu e-mail"
                                   class="w-full px-3 py-2 rounded text-carvao-900 text-sm">
                            <button type="submit" 
                                    :disabled="loading"
                                    class="w-full bg-cremoso-200 text-mogno-800 py-2 rounded font-semibold text-sm hover:bg-cremoso-300 transition-colors">
                                <span x-show="!loading">Assinar</span>
                                <span x-show="loading">Enviando...</span>
                            </button>
                        </form>
                    </div>
                    
                    <!-- Quick Links -->
                    <div class="bg-white border border-gray-200 rounded-xl p-6">
                        <h3 class="font-montserrat font-bold text-lg text-carvao-900 mb-4">Links Úteis</h3>
                        <div class="space-y-3">
                            <a href="/catalogo" class="flex items-center space-x-2 text-carvao-600 hover:text-mogno-600 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                                <span>Ver Catálogo</span>
                            </a>
                            <a href="/contato" class="flex items-center space-x-2 text-carvao-600 hover:text-mogno-600 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span>Fale Conosco</span>
                            </a>
                            <a href="/sobre" class="flex items-center space-x-2 text-carvao-600 hover:text-mogno-600 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Sobre Nós</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Posts -->
<?php if (!empty($related_posts)): ?>
<section class="py-20 bg-cremoso-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="font-montserrat font-bold text-3xl text-carvao-900 mb-12 text-center">
                Artigos <span class="text-mogno-600">Relacionados</span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($related_posts as $related): ?>
                <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="relative">
                        <img src="<?= $related['image'] ?>" 
                             alt="<?= $related['title'] ?>" 
                             class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-mogno-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                <?= $related['category'] ?>
                            </span>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <div class="text-sm text-carvao-500 mb-2">
                            <?= date('d/m/Y', strtotime($related['date'])) ?>
                        </div>
                        
                        <h3 class="font-montserrat font-bold text-xl text-carvao-900 mb-3 line-clamp-2">
                            <?= $related['title'] ?>
                        </h3>
                        
                        <p class="text-carvao-600 mb-4 line-clamp-3">
                            <?= $related['excerpt'] ?>
                        </p>
                        
                        <a href="/blog/<?= $related['id'] ?>" 
                           class="text-mogno-600 hover:text-mogno-700 font-semibold transition-colors">
                            Ler artigo →
                        </a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Back to Blog -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 text-center">
        <a href="/blog" 
           class="inline-flex items-center space-x-2 btn-outline">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span>Voltar ao Blog</span>
        </a>
    </div>
</section>

<script>
// Article functionality
document.addEventListener('alpine:init', () => {
    Alpine.data('sidebarNewsletter', () => ({
        email: '',
        loading: false,
        
        async subscribe() {
            this.loading = true;
            
            try {
                await new Promise(resolve => setTimeout(resolve, 1500));
                showToast('Inscrição realizada com sucesso!');
                this.email = '';
            } catch (error) {
                showToast('Erro ao realizar inscrição.', 'error');
            } finally {
                this.loading = false;
            }
        }
    }));
});

// Generate table of contents
function generateTableOfContents() {
    const headings = document.querySelectorAll('.prose h2, .prose h3');
    const toc = document.getElementById('table-of-contents');
    
    if (headings.length === 0) {
        toc.innerHTML = '<p class="text-sm text-carvao-500">Nenhum tópico encontrado</p>';
        return;
    }
    
    headings.forEach((heading, index) => {
        const id = `heading-${index}`;
        heading.id = id;
        
        const link = document.createElement('a');
        link.href = `#${id}`;
        link.className = `block text-sm text-carvao-600 hover:text-mogno-600 transition-colors py-1 ${heading.tagName === 'H3' ? 'pl-4' : ''}`;
        link.textContent = heading.textContent;
        
        link.addEventListener('click', (e) => {
            e.preventDefault();
            heading.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
        
        toc.appendChild(link);
    });
}

// Social sharing functions
function shareArticle() {
    if (navigator.share) {
        navigator.share({
            title: '<?= addslashes($post['title']) ?> - Tronco Forte Blog',
            text: '<?= addslashes($post['excerpt']) ?>',
            url: window.location.href
        });
    } else {
        navigator.clipboard.writeText(window.location.href);
        showToast('Link copiado para a área de transferência!');
    }
}

function shareOnFacebook() {
    const url = encodeURIComponent(window.location.href);
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank', 'width=600,height=400');
}

function shareOnTwitter() {
    const url = encodeURIComponent(window.location.href);
    const text = encodeURIComponent('<?= addslashes($post['title']) ?>');
    window.open(`https://twitter.com/intent/tweet?url=${url}&text=${text}`, '_blank', 'width=600,height=400');
}

function shareOnLinkedIn() {
    const url = encodeURIComponent(window.location.href);
    window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${url}`, '_blank', 'width=600,height=400');
}

function shareOnWhatsApp() {
    const url = encodeURIComponent(window.location.href);
    const text = encodeURIComponent('<?= addslashes($post['title']) ?> - ');
    window.open(`https://wa.me/?text=${text}${url}`, '_blank');
}

function printArticle() {
    window.print();
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

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    generateTableOfContents();
    
    // Add prose styles
    const style = document.createElement('style');
    style.textContent = `
        .prose {
            color: #374151;
            line-height: 1.75;
        }
        .prose h2 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.875rem;
            color: #1f2937;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }
        .prose h3 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 1.5rem;
            color: #1f2937;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
        }
        .prose p {
            margin-bottom: 1.25rem;
        }
        .prose ul, .prose ol {
            margin-bottom: 1.25rem;
            padding-left: 1.5rem;
        }
        .prose li {
            margin-bottom: 0.5rem;
        }
        .prose blockquote {
            border-left: 4px solid #8B4513;
            padding-left: 1rem;
            margin: 1.5rem 0;
            font-style: italic;
            color: #6b7280;
        }
        .prose strong {
            font-weight: 600;
            color: #1f2937;
        }
        .prose a {
            color: #8B4513;
            text-decoration: underline;
        }
        .prose a:hover {
            color: #A0522D;
        }
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
});
</script>