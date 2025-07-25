<?php

declare(strict_types=1);

namespace app\controllers;

use app\utils\UrlHelper;
use flight\Engine;

class BlogController
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
     * Blog index page
     */
    public function index(): void
    {
        $data = [
            'page_title' => 'Blog - Dicas e Novidades | Tronco Forte',
            'meta_description' => 'Acompanhe nosso blog com dicas sobre madeiras, projetos, sustentabilidade e novidades do setor madeireiro.',
            'posts' => $this->getAllPosts(),
            'categories' => $this->getCategories(),
            'featured_post' => $this->getFeaturedPost()
        ];

        // Set the content for the layout
        $content = $this->app->view()->fetch('blog/index', $data);
        $data['content'] = $content;
        $data['base_path'] = UrlHelper::getBasePath();
        $data['url_helper'] = UrlHelper::class;

        // Render with layout
        $this->app->render('layout', $data);
    }

    /**
     * Blog post detail page
     */
    public function show(int $id): void
    {
        $post = $this->getPostById($id);
        
        if (!$post) {
            $this->app->notFound();
            return;
        }

        $data = [
            'page_title' => $post['title'] . ' - Blog Tronco Forte',
            'meta_description' => $post['excerpt'],
            'post' => $post,
            'related_posts' => $this->getRelatedPosts($post['category'])
        ];

        // Set the content for the layout
        $content = $this->app->view()->fetch('blog/show', $data);
        $data['content'] = $content;
        $data['base_path'] = UrlHelper::getBasePath();
        $data['url_helper'] = UrlHelper::class;

        // Render with layout
        $this->app->render('layout', $data);
    }

    /**
     * Get all blog posts
     */
    private function getAllPosts(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Como Escolher a Madeira Ideal para Seu Projeto',
                'excerpt' => 'Guia completo para selecionar o tipo de madeira mais adequado para cada aplicação, considerando durabilidade, estética e custo.',
                'content' => 'A escolha da madeira certa é fundamental para o sucesso de qualquer projeto. Neste guia, vamos abordar os principais fatores a considerar...',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=wood%20selection%20guide%20different%20types%20samples%20comparison&image_size=landscape_4_3',
                'date' => '2024-01-15',
                'category' => 'Guias',
                'author' => 'Roberto Tronco',
                'read_time' => 8,
                'tags' => ['madeira', 'projetos', 'guia']
            ],
            [
                'id' => 2,
                'title' => 'Sustentabilidade na Indústria Madeireira',
                'excerpt' => 'Conheça nossas práticas sustentáveis e como contribuímos para a preservação das florestas brasileiras.',
                'content' => 'A sustentabilidade é um pilar fundamental em nossas operações. Desde 2005, implementamos práticas que garantem...',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=sustainable%20forestry%20certification%20environmental%20protection%20forest&image_size=landscape_4_3',
                'date' => '2024-01-10',
                'category' => 'Sustentabilidade',
                'author' => 'Carlos Madeira',
                'read_time' => 6,
                'tags' => ['sustentabilidade', 'meio ambiente', 'certificação']
            ],
            [
                'id' => 3,
                'title' => 'Tendências em Móveis de Madeira 2024',
                'excerpt' => 'Descubra as principais tendências em design de móveis de madeira para este ano.',
                'content' => 'O design de móveis de madeira está em constante evolução. Em 2024, observamos tendências que valorizam...',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=modern%20wooden%20furniture%20trends%202024%20design%20interior&image_size=landscape_4_3',
                'date' => '2024-01-05',
                'category' => 'Design',
                'author' => 'Ana Forte',
                'read_time' => 5,
                'tags' => ['móveis', 'design', 'tendências']
            ],
            [
                'id' => 4,
                'title' => 'Cuidados e Manutenção de Madeiras Nobres',
                'excerpt' => 'Dicas essenciais para preservar a beleza e durabilidade das madeiras nobres.',
                'content' => 'As madeiras nobres requerem cuidados especiais para manter sua beleza e durabilidade ao longo dos anos...',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=wood%20maintenance%20care%20noble%20hardwood%20preservation&image_size=landscape_4_3',
                'date' => '2024-01-01',
                'category' => 'Manutenção',
                'author' => 'Roberto Tronco',
                'read_time' => 7,
                'tags' => ['manutenção', 'cuidados', 'madeiras nobres']
            ]
        ];
    }

    /**
     * Get blog categories
     */
    private function getCategories(): array
    {
        return [
            ['name' => 'Guias', 'count' => 3],
            ['name' => 'Sustentabilidade', 'count' => 2],
            ['name' => 'Design', 'count' => 4],
            ['name' => 'Manutenção', 'count' => 2]
        ];
    }

    /**
     * Get featured post
     */
    private function getFeaturedPost(): array
    {
        $posts = $this->getAllPosts();
        return $posts[0]; // Return the first post as featured
    }

    /**
     * Get post by ID
     */
    private function getPostById(int $id): ?array
    {
        $posts = $this->getAllPosts();
        foreach ($posts as $post) {
            if ($post['id'] === $id) {
                return $post;
            }
        }
        return null;
    }

    /**
     * Get related posts by category
     */
    private function getRelatedPosts(string $category): array
    {
        $posts = $this->getAllPosts();
        $related = [];
        
        foreach ($posts as $post) {
            if ($post['category'] === $category && count($related) < 3) {
                $related[] = $post;
            }
        }
        
        return $related;
    }
}
