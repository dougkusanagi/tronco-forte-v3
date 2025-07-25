<!-- Hero Section -->
<section class="bg-gradient-to-br from-mogno-800 to-mogno-900 text-white py-20 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 wood-texture opacity-10"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="font-montserrat font-bold text-4xl md:text-5xl lg:text-6xl mb-6">
                Entre em <span class="text-dourado-400">Contato</span>
            </h1>
            <p class="text-xl md:text-2xl text-cremoso-100 mb-8">
                Estamos prontos para atender você e transformar seus projetos em realidade.
            </p>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
            <!-- Phone -->
            <div class="text-center group">
                <div class="w-16 h-16 bg-mogno-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-mogno-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-mogno-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                </div>
                <h3 class="font-montserrat font-bold text-xl text-carvao-900 mb-2">Telefone</h3>
                <p class="text-carvao-600 mb-2"><?= $contact_info['phone'] ?></p>
                <p class="text-sm text-carvao-500"><?= $contact_info['phone_hours'] ?></p>
            </div>
            
            <!-- Email -->
            <div class="text-center group">
                <div class="w-16 h-16 bg-mogno-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-mogno-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-mogno-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="font-montserrat font-bold text-xl text-carvao-900 mb-2">E-mail</h3>
                <p class="text-carvao-600 mb-2"><?= $contact_info['email'] ?></p>
                <p class="text-sm text-carvao-500"><?= $contact_info['email_hours'] ?></p>
            </div>
            
            <!-- Address -->
            <div class="text-center group">
                <div class="w-16 h-16 bg-mogno-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-mogno-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-mogno-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="font-montserrat font-bold text-xl text-carvao-900 mb-2">Endereço</h3>
                <p class="text-carvao-600 mb-2"><?= $contact_info['address'] ?></p>
                <p class="text-sm text-carvao-500"><?= $contact_info['business_hours'] ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Map -->
<section class="py-20 bg-cremoso-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <h2 class="font-montserrat font-bold text-3xl text-carvao-900 mb-6">
                    Envie sua <span class="text-mogno-600">Mensagem</span>
                </h2>
                <p class="text-carvao-600 mb-8">
                    Preencha o formulário abaixo e entraremos em contato o mais breve possível.
                </p>
                
                <form id="contact-form" x-data="contactForm" @submit.prevent="submitForm" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-carvao-700 mb-2">Nome Completo *</label>
                            <input type="text" 
                                   id="name" 
                                   x-model="form.name"
                                   required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-mogno-500 focus:border-mogno-500 transition-colors"
                                   placeholder="Seu nome completo">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-carvao-700 mb-2">E-mail *</label>
                            <input type="email" 
                                   id="email" 
                                   x-model="form.email"
                                   required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-mogno-500 focus:border-mogno-500 transition-colors"
                                   placeholder="seu@email.com">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-carvao-700 mb-2">Telefone</label>
                            <input type="tel" 
                                   id="phone" 
                                   x-model="form.phone"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-mogno-500 focus:border-mogno-500 transition-colors"
                                   placeholder="(11) 99999-9999">
                        </div>
                        <div>
                            <label for="company" class="block text-sm font-semibold text-carvao-700 mb-2">Empresa</label>
                            <input type="text" 
                                   id="company" 
                                   x-model="form.company"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-mogno-500 focus:border-mogno-500 transition-colors"
                                   placeholder="Nome da empresa">
                        </div>
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-semibold text-carvao-700 mb-2">Assunto *</label>
                        <select id="subject" 
                                x-model="form.subject"
                                required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-mogno-500 focus:border-mogno-500 transition-colors">
                            <option value="">Selecione um assunto</option>
                            <option value="orcamento">Solicitação de Orçamento</option>
                            <option value="produto">Informações sobre Produtos</option>
                            <option value="entrega">Prazos de Entrega</option>
                            <option value="qualidade">Certificações e Qualidade</option>
                            <option value="parceria">Parcerias Comerciais</option>
                            <option value="outro">Outros Assuntos</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-semibold text-carvao-700 mb-2">Mensagem *</label>
                        <textarea id="message" 
                                  x-model="form.message"
                                  required 
                                  rows="6" 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-mogno-500 focus:border-mogno-500 transition-colors resize-vertical"
                                  placeholder="Descreva seu projeto, necessidades ou dúvidas..."></textarea>
                    </div>
                    
                    <!-- File Upload -->
                    <div>
                        <label for="files" class="block text-sm font-semibold text-carvao-700 mb-2">Anexos (opcional)</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-mogno-400 transition-colors">
                            <input type="file" 
                                   id="files" 
                                   multiple 
                                   accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"
                                   class="hidden"
                                   @change="handleFileUpload">
                            <label for="files" class="cursor-pointer">
                                <svg class="w-8 h-8 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                <span class="text-sm text-gray-600">Clique para anexar arquivos</span>
                                <p class="text-xs text-gray-400 mt-1">PDF, DOC, JPG, PNG (máx. 10MB cada)</p>
                            </label>
                        </div>
                        <div x-show="uploadedFiles.length > 0" class="mt-3">
                            <template x-for="file in uploadedFiles" :key="file.name">
                                <div class="flex items-center justify-between bg-gray-50 rounded p-2 mb-2">
                                    <span class="text-sm text-gray-700" x-text="file.name"></span>
                                    <button type="button" @click="removeFile(file)" class="text-red-500 hover:text-red-700">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </template>
                        </div>
                    </div>
                    
                    <!-- Privacy Policy -->
                    <div class="flex items-start space-x-3">
                        <input type="checkbox" 
                               id="privacy" 
                               x-model="form.privacy"
                               required 
                               class="mt-1 w-4 h-4 text-mogno-600 border-gray-300 rounded focus:ring-mogno-500">
                        <label for="privacy" class="text-sm text-carvao-600">
                            Concordo com a <a href="#" class="text-mogno-600 hover:underline">Política de Privacidade</a> 
                            e autorizo o uso dos meus dados para contato.
                        </label>
                    </div>
                    
                    <button type="submit" 
                            :disabled="loading"
                            :class="loading ? 'opacity-50 cursor-not-allowed' : ''"
                            class="btn-primary w-full text-lg py-4">
                        <span x-show="!loading">Enviar Mensagem</span>
                        <span x-show="loading" class="flex items-center justify-center">
                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Enviando...
                        </span>
                    </button>
                </form>
            </div>
            
            <!-- Map & Additional Info -->
            <div class="space-y-8">
                <!-- Map -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-6">Nossa Localização</h3>
                    <div class="aspect-video bg-gray-200 rounded-xl overflow-hidden">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.1!2d-46.6333!3d-23.5505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDMzJzAxLjgiUyA0NsKwMzcnNTkuOSJX!5e0!3m2!1spt!2sbr!4v1234567890123" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="mt-4">
                        <a href="https://maps.google.com/?q=-23.5505,-46.6333" 
                           target="_blank" 
                           class="btn-outline w-full text-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                            Abrir no Google Maps
                        </a>
                    </div>
                </div>
                
                <!-- Business Hours -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-6">Horário de Funcionamento</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-carvao-700 font-medium">Segunda a Sexta</span>
                            <span class="text-carvao-900 font-semibold">08:00 - 18:00</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-carvao-700 font-medium">Sábado</span>
                            <span class="text-carvao-900 font-semibold">08:00 - 12:00</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-carvao-700 font-medium">Domingo</span>
                            <span class="text-red-600 font-semibold">Fechado</span>
                        </div>
                    </div>
                    
                    <div class="mt-6 p-4 bg-mogno-50 rounded-lg">
                        <p class="text-sm text-mogno-700">
                            <strong>Atendimento de emergência:</strong> Para urgências, 
                            entre em contato pelo WhatsApp 24h.
                        </p>
                    </div>
                </div>
                
                <!-- Quick Contact -->
                <div class="bg-mogno-600 rounded-2xl p-8 text-white">
                    <h3 class="font-montserrat font-bold text-2xl mb-4">Contato Rápido</h3>
                    <p class="mb-6 text-mogno-100">
                        Precisa de uma resposta imediata? Use nossos canais de contato direto.
                    </p>
                    <div class="space-y-4">
                        <a href="tel:<?= $contact_info['phone'] ?>" 
                           class="flex items-center space-x-3 p-3 bg-white/10 rounded-lg hover:bg-white/20 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>Ligar Agora</span>
                        </a>
                        <a href="mailto:<?= $contact_info['email'] ?>" 
                           class="flex items-center space-x-3 p-3 bg-white/10 rounded-lg hover:bg-white/20 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>Enviar E-mail</span>
                        </a>
                        <button onclick="openWhatsApp()" 
                                class="flex items-center space-x-3 p-3 bg-white/10 rounded-lg hover:bg-white/20 transition-colors w-full">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.700"/>
                            </svg>
                            <span>WhatsApp</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="font-montserrat font-bold text-3xl lg:text-4xl text-carvao-900 mb-4">
                Perguntas <span class="text-mogno-600">Frequentes</span>
            </h2>
            <p class="text-lg text-carvao-600 max-w-2xl mx-auto">
                Encontre respostas para as dúvidas mais comuns sobre nossos produtos e serviços.
            </p>
        </div>
        
        <div class="max-w-4xl mx-auto" x-data="faqAccordion()">
            <?php foreach ($faq as $index => $item): ?>
            <div class="border border-gray-200 rounded-lg mb-4 overflow-hidden">
                <button @click="toggle(<?= $index ?>)" 
                        class="w-full px-6 py-4 text-left bg-white hover:bg-gray-50 transition-colors flex justify-between items-center">
                    <span class="font-semibold text-carvao-900"><?= $item['question'] ?></span>
                    <svg :class="activeIndex === <?= $index ?> ? 'rotate-180' : ''" 
                         class="w-5 h-5 text-carvao-600 transition-transform duration-200" 
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="activeIndex === <?= $index ?>" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 transform -translate-y-2"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 transform translate-y-0"
                     x-transition:leave-end="opacity-0 transform -translate-y-2"
                     class="px-6 py-4 bg-cremoso-50 border-t border-gray-200">
                    <p class="text-carvao-700"><?= $item['answer'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-12">
            <p class="text-carvao-600 mb-4">Não encontrou a resposta que procurava?</p>
            <a href="#contact-form" class="btn-primary">
                Entre em Contato Conosco
            </a>
        </div>
    </div>
</section>

<!-- Success Modal -->
<div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl p-8 max-w-md w-full text-center">
        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <h3 class="font-montserrat font-bold text-2xl text-carvao-900 mb-4">Mensagem Enviada!</h3>
        <p class="text-carvao-600 mb-6">
            Obrigado pelo seu contato. Retornaremos em até 24 horas.
        </p>
        <button onclick="closeSuccessModal()" class="btn-primary w-full">
            Fechar
        </button>
    </div>
</div>

<!-- Footer -->
<footer class="bg-carvao-900 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Company Info -->
            <div class="lg:col-span-2">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-mogno-500 to-mogno-700 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-montserrat font-bold text-2xl">Tronco Forte</h3>
                </div>
                <p class="text-cremoso-200 mb-6 leading-relaxed max-w-md">
                    Há mais de 25 anos fornecendo madeiras de qualidade superior com compromisso 
                    ambiental e excelência no atendimento.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-mogno-600 rounded-lg flex items-center justify-center hover:bg-mogno-700 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-mogno-600 rounded-lg flex items-center justify-center hover:bg-mogno-700 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-mogno-600 rounded-lg flex items-center justify-center hover:bg-mogno-700 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-mogno-600 rounded-lg flex items-center justify-center hover:bg-mogno-700 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h4 class="font-montserrat font-bold text-lg mb-6">Links Rápidos</h4>
                <ul class="space-y-3">
                    <li><a href="/" class="text-cremoso-200 hover:text-dourado-400 transition-colors">Início</a></li>
                    <li><a href="/sobre" class="text-cremoso-200 hover:text-dourado-400 transition-colors">Sobre Nós</a></li>
                    <li><a href="/catalogo" class="text-cremoso-200 hover:text-dourado-400 transition-colors">Catálogo</a></li>
                    <li><a href="/contato" class="text-cremoso-200 hover:text-dourado-400 transition-colors">Contato</a></li>
                    <li><a href="/blog" class="text-cremoso-200 hover:text-dourado-400 transition-colors">Blog</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h4 class="font-montserrat font-bold text-lg mb-6">Contato</h4>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-mogno-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <div>
                            <p class="text-cremoso-200 text-sm leading-relaxed">
                                Rua das Madeiras, 123<br>
                                Distrito Industrial<br>
                                São Paulo - SP, 01234-567
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-mogno-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <a href="tel:+5511999999999" class="text-cremoso-200 hover:text-dourado-400 transition-colors text-sm">
                            (11) 99999-9999
                        </a>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-mogno-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <a href="mailto:contato@troncoforte.com.br" class="text-cremoso-200 hover:text-dourado-400 transition-colors text-sm">
                            contato@troncoforte.com.br
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Bar -->
        <div class="border-t border-carvao-700 mt-12 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="flex items-center space-x-6">
                    <div class="flex items-center space-x-2">
                        <svg class="w-6 h-6 text-floresta-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-cremoso-200 text-sm font-medium">Certificação FSC</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-6 h-6 text-floresta-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        <span class="text-cremoso-200 text-sm font-medium">Sustentabilidade</span>
                    </div>
                </div>
                <p class="text-cremoso-300 text-sm">
                    © 2024 Tronco Forte. Todos os direitos reservados.
                </p>
            </div>
        </div>
    </div>
</footer>

<script>
// Contact form Alpine.js component
document.addEventListener('alpine:init', () => {
    Alpine.data('contactForm', () => ({
        form: {
            name: '',
            email: '',
            phone: '',
            company: '',
            subject: '',
            message: '',
            privacy: false
        },
        uploadedFiles: [],
        loading: false,
        
        async submitForm() {
            this.loading = true;
            
            try {
                // Simulate form submission
                await new Promise(resolve => setTimeout(resolve, 2000));
                
                // Show success modal
                document.getElementById('success-modal').classList.remove('hidden');
                document.body.style.overflow = 'hidden';
                
                // Reset form
                this.form = {
                    name: '',
                    email: '',
                    phone: '',
                    company: '',
                    subject: '',
                    message: '',
                    privacy: false
                };
                this.uploadedFiles = [];
                
            } catch (error) {
                alert('Erro ao enviar mensagem. Tente novamente.');
            } finally {
                this.loading = false;
            }
        },
        
        handleFileUpload(event) {
            const files = Array.from(event.target.files);
            const maxSize = 10 * 1024 * 1024; // 10MB
            
            files.forEach(file => {
                if (file.size > maxSize) {
                    alert(`Arquivo ${file.name} é muito grande. Máximo 10MB.`);
                    return;
                }
                
                if (!this.uploadedFiles.find(f => f.name === file.name)) {
                    this.uploadedFiles.push(file);
                }
            });
            
            // Clear input
            event.target.value = '';
        },
        
        removeFile(fileToRemove) {
            this.uploadedFiles = this.uploadedFiles.filter(file => file !== fileToRemove);
        }
    }));
    
    Alpine.data('faqAccordion', () => ({
        activeIndex: null,
        
        toggle(index) {
            this.activeIndex = this.activeIndex === index ? null : index;
        }
    }));
});

function openWhatsApp() {
    const phone = '5511999999999'; // Replace with actual WhatsApp number
    const message = encodeURIComponent('Olá! Gostaria de mais informações sobre os produtos.');
    window.open(`https://wa.me/${phone}?text=${message}`, '_blank');
}

function closeSuccessModal() {
    document.getElementById('success-modal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close modal on escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeSuccessModal();
    }
});

// Smooth scroll to form
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('a[href="#contact-form"]');
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('contact-form').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    });
});