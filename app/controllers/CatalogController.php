<?php

declare(strict_types=1);

namespace app\controllers;

use flight\Engine;

class CatalogController
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
     * Catalog page
     */
    public function index(): void
    {
        $data = [
            'page_title' => 'Catálogo de Produtos - Madeiras de Qualidade Premium',
            'meta_description' => 'Explore nosso catálogo completo de madeiras nobres, compensados e MDF. Qualidade garantida para seus projetos.',
            'categories' => $this->getCategories(),
            'products' => $this->getAllProducts()
        ];

        // Set the content for the layout
        $content = $this->app->view()->fetch('catalog/index', $data);
        $data['content'] = $content;

        // Render with layout
        $this->app->render('layout', $data);
    }

    /**
     * Product detail page
     */
    public function show(int $id): void
    {
        $product = $this->getProductById($id);
        
        if (!$product) {
            $this->app->notFound();
            return;
        }

        $data = [
            'page_title' => $product['name'] . ' - Tronco Forte',
            'meta_description' => $product['description'],
            'product' => $product,
            'related_products' => $this->getRelatedProducts($product['category'])
        ];

        // Set the content for the layout
        $content = $this->app->view()->fetch('catalog/show', $data);
        $data['content'] = $content;

        // Render with layout
        $this->app->render('layout', $data);
    }

    /**
     * Get product categories
     */
    private function getCategories(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Madeiras Nobres',
                'description' => 'Madeiras de alta qualidade para projetos especiais',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=premium%20hardwood%20collection%20luxury%20wood%20samples&image_size=landscape_4_3',
                'count' => 8
            ],
            [
                'id' => 2,
                'name' => 'Compensados',
                'description' => 'Painéis versáteis para construção e móveis',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=plywood%20panels%20construction%20materials%20stack&image_size=landscape_4_3',
                'count' => 5
            ],
            [
                'id' => 3,
                'name' => 'MDF',
                'description' => 'Painéis de fibra para acabamentos',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=mdf%20panels%20smooth%20finish%20furniture%20making&image_size=landscape_4_3',
                'count' => 4
            ]
        ];
    }

    /**
     * Get all products
     */
    private function getAllProducts(): array
    {
        return [
            // Madeiras Nobres
            [
                'id' => 1,
                'name' => 'Mogno Brasileiro',
                'description' => 'Madeira nobre de alta qualidade, ideal para móveis finos e acabamentos premium.',
                'price' => 150.00,
                'unit' => 'm²',
                'category' => 'Madeiras Nobres',
                'in_stock' => true,
                'dimensions' => '2,20 x 1,60m',
                'thickness' => '25-50mm',
                'grade' => 'Premium',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=brazilian%20mahogany%20wood%20texture%20premium%20quality%20natural%20grain&image_size=landscape_4_3',
                'specifications' => [
                    'Densidade: 0,65 g/cm³',
                    'Durabilidade: Alta',
                    'Resistência: Excelente',
                    'Acabamento: Premium'
                ]
            ],
            [
                'id' => 2,
                'name' => 'Cedro Rosa',
                'description' => 'Madeira aromática e resistente, perfeita para construção e marcenaria.',
                'price' => 120.00,
                'unit' => 'm²',
                'category' => 'Madeiras Nobres',
                'in_stock' => true,
                'dimensions' => '2,20 x 1,60m',
                'thickness' => '20-40mm',
                'grade' => 'A',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=cedar%20wood%20texture%20aromatic%20natural%20grain%20construction&image_size=landscape_4_3',
                'specifications' => [
                    'Densidade: 0,55 g/cm³',
                    'Durabilidade: Média-Alta',
                    'Resistência: Boa',
                    'Aroma: Característico'
                ]
            ],
            [
                'id' => 3,
                'name' => 'Ipê Amarelo',
                'description' => 'Madeira extremamente resistente, ideal para áreas externas e estruturas.',
                'price' => 180.00,
                'unit' => 'm²',
                'category' => 'Madeiras Nobres',
                'in_stock' => false,
                'dimensions' => '2,20 x 1,60m',
                'thickness' => '30-60mm',
                'grade' => 'Extra',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=ipe%20yellow%20wood%20texture%20durable%20outdoor%20construction&image_size=landscape_4_3',
                'specifications' => [
                    'Densidade: 1,05 g/cm³',
                    'Durabilidade: Muito Alta',
                    'Resistência: Excepcional',
                    'Uso: Externo/Estrutural'
                ]
            ],
            // Compensados
            [
                'id' => 4,
                'name' => 'Compensado Naval',
                'description' => 'Painel resistente à umidade, ideal para áreas molhadas.',
                'price' => 85.00,
                'unit' => 'm²',
                'category' => 'Compensados',
                'in_stock' => true,
                'dimensions' => '2,20 x 1,60m',
                'thickness' => '6-25mm',
                'grade' => 'Naval',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=marine%20plywood%20waterproof%20construction%20panel&image_size=landscape_4_3',
                'specifications' => [
                    'Espessura: 6-25mm',
                    'Resistência: Água',
                    'Cola: Fenólica',
                    'Uso: Áreas úmidas'
                ]
            ],
            [
                'id' => 5,
                'name' => 'Compensado Multilaminado',
                'description' => 'Painel versátil para móveis e construção civil.',
                'price' => 65.00,
                'unit' => 'm²',
                'category' => 'Compensados',
                'in_stock' => true,
                'dimensions' => '2,75 x 1,83m',
                'thickness' => '3-30mm',
                'grade' => 'BB/CC',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=multilayer%20plywood%20furniture%20construction%20versatile&image_size=landscape_4_3',
                'specifications' => [
                    'Espessura: 3-30mm',
                    'Camadas: 3-15',
                    'Cola: Uréia',
                    'Uso: Móveis/Construção'
                ]
            ],
            // MDF
            [
                'id' => 6,
                'name' => 'MDF Cru',
                'description' => 'Painel de fibra para acabamentos e móveis planejados.',
                'price' => 45.00,
                'unit' => 'm²',
                'category' => 'MDF',
                'in_stock' => true,
                'dimensions' => '2,75 x 1,83m',
                'thickness' => '3-30mm',
                'grade' => 'Standard',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=raw%20mdf%20panel%20smooth%20surface%20furniture%20making&image_size=landscape_4_3',
                'specifications' => [
                    'Espessura: 3-30mm',
                    'Densidade: 0,75 g/cm³',
                    'Acabamento: Liso',
                    'Uso: Móveis planejados'
                ]
            ]
        ];
    }

    /**
     * Get product by ID
     */
    private function getProductById(int $id): ?array
    {
        $products = $this->getAllProducts();
        foreach ($products as $product) {
            if ($product['id'] === $id) {
                return $product;
            }
        }
        return null;
    }

    /**
     * Get related products by category
     */
    private function getRelatedProducts(string $category): array
    {
        $products = $this->getAllProducts();
        $related = [];
        
        foreach ($products as $product) {
            if ($product['category'] === $category && count($related) < 3) {
                $related[] = $product;
            }
        }
        
        return $related;
    }
}
