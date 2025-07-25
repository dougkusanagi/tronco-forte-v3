<?php

declare(strict_types=1);

namespace app\controllers;

use flight\Engine;

class HomeController
{
    /** @var Engine */
    protected Engine $app;

    /**
     * Constructor
     */
    public function __construct(Engine $app)
    {
        $this->app = $app;
    }

    /**
     * Homepage
     */
    public function index(): void
    {
        $data = [
            'page_title' => 'Tronco Forte - Madeireira de Qualidade Premium',
            'meta_description' => 'Madeireira Tronco Forte - Tradição, qualidade e sustentabilidade em madeiras nobres. Mogno, cedro, ipê e mais.',
            'featured_products' => $this->getFeaturedProducts(),
            'testimonials' => $this->getTestimonials(),
            'blog_posts' => $this->getLatestBlogPosts()
        ];

        // Set the content for the layout
        $content = $this->app->view()->fetch('home/index', $data);
        $data['content'] = $content;

        // Render with layout
        $this->app->render('layout', $data);
    }

    /**
     * Get featured products for homepage
     */
    private function getFeaturedProducts(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Mogno Brasileiro',
                'description' => 'Madeira nobre de alta qualidade, ideal para móveis finos e acabamentos premium.',
                'price' => 150.00,
                'unit' => 'm²',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=brazilian%20mahogany%20wood%20texture%20premium%20quality%20natural%20grain&image_size=landscape_4_3',
                'category' => 'Madeiras Nobres'
            ],
            [
                'id' => 2,
                'name' => 'Cedro Rosa',
                'description' => 'Madeira aromática e resistente, perfeita para construção e marcenaria.',
                'price' => 120.00,
                'unit' => 'm²',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=cedar%20wood%20texture%20aromatic%20natural%20grain%20construction&image_size=landscape_4_3',
                'category' => 'Madeiras Nobres'
            ],
            [
                'id' => 3,
                'name' => 'Ipê Amarelo',
                'description' => 'Madeira extremamente resistente, ideal para áreas externas e estruturas.',
                'price' => 180.00,
                'unit' => 'm²',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=ipe%20yellow%20wood%20texture%20durable%20outdoor%20construction&image_size=landscape_4_3',
                'category' => 'Madeiras Nobres'
            ]
        ];
    }

    /**
     * Get testimonials for homepage
     */
    private function getTestimonials(): array
    {
        return [
            [
                'name' => 'João Silva',
                'company' => 'Construtora Silva & Cia',
                'content' => 'Excelente qualidade e atendimento. Recomendo a Tronco Forte para todos os projetos.',
                'avatar' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=professional%20construction%20manager%20portrait%20smiling&image_size=square',
                'rating' => 5
            ],
            [
                'name' => 'Maria Santos',
                'company' => 'Arquitetura Moderna',
                'content' => 'Parceria de anos com resultados sempre excepcionais. Madeiras de primeira qualidade.',
                'avatar' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=female%20architect%20professional%20portrait%20confident&image_size=square',
                'rating' => 5
            ],
            [
                'name' => 'Carlos Oliveira',
                'company' => 'Móveis Artesanais',
                'content' => 'A Tronco Forte é nossa fornecedora exclusiva. Qualidade incomparável no mercado.',
                'avatar' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=craftsman%20woodworker%20portrait%20experienced&image_size=square',
                'rating' => 5
            ]
        ];
    }

    /**
     * Get latest blog posts for homepage
     */
    private function getLatestBlogPosts(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Como Escolher a Madeira Ideal para Seu Projeto',
                'excerpt' => 'Guia completo para selecionar o tipo de madeira mais adequado para cada aplicação.',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=wood%20selection%20guide%20different%20types%20samples&image_size=landscape_4_3',
                'date' => '2024-01-15',
                'category' => 'Guias'
            ],
            [
                'id' => 2,
                'title' => 'Sustentabilidade na Indústria Madeireira',
                'excerpt' => 'Nossas práticas sustentáveis e certificações ambientais.',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=sustainable%20forestry%20certification%20environmental%20protection&image_size=landscape_4_3',
                'date' => '2024-01-10',
                'category' => 'Sustentabilidade'
            ]
        ];
    }
}
