<?php

declare(strict_types=1);

namespace app\controllers;

use app\utils\UrlHelper;
use flight\Engine;

class AboutController
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
     * About page
     */
    public function index(): void
    {
        $data = [
            'page_title' => 'Sobre a Tronco Forte - Nossa História e Valores',
            'meta_description' => 'Conheça a história da Tronco Forte, nossos valores, missão e a equipe especializada em madeiras de qualidade.',
            'company_history' => $this->getCompanyHistory(),
            'team_members' => $this->getTeamMembers(),
            'company_values' => $this->getCompanyValues()
        ];

        // Set the content for the layout
        $content = $this->app->view()->fetch('about/index', $data);
        $data['content'] = $content;
        $data['base_path'] = UrlHelper::getBasePath();
        $data['url_helper'] = UrlHelper::class;

        // Render with layout
        $this->app->render('layout', $data);
    }

    /**
     * Get company history timeline
     */
    private function getCompanyHistory(): array
    {
        return [
            [
                'year' => '1985',
                'title' => 'Fundação da Empresa',
                'description' => 'Início das atividades com foco em madeiras nobres e atendimento personalizado.',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=lumber%20company%20founding%201985%20vintage%20sawmill&image_size=landscape_4_3'
            ],
            [
                'year' => '1995',
                'title' => 'Expansão Regional',
                'description' => 'Ampliação do negócio para atender toda a região sudeste.',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=business%20expansion%20regional%20growth%20lumber%20industry&image_size=landscape_4_3'
            ],
            [
                'year' => '2005',
                'title' => 'Certificação Sustentável',
                'description' => 'Obtenção das primeiras certificações ambientais e práticas sustentáveis.',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=environmental%20certification%20sustainable%20forestry%20green%20practices&image_size=landscape_4_3'
            ],
            [
                'year' => '2015',
                'title' => 'Modernização',
                'description' => 'Investimento em tecnologia e processos modernos de beneficiamento.',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=modern%20lumber%20mill%20technology%20industrial%20equipment&image_size=landscape_4_3'
            ],
            [
                'year' => '2024',
                'title' => 'Liderança no Mercado',
                'description' => 'Reconhecimento como referência em qualidade e sustentabilidade.',
                'image' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=market%20leadership%20quality%20lumber%20industry%20success&image_size=landscape_4_3'
            ]
        ];
    }

    /**
     * Get team members
     */
    private function getTeamMembers(): array
    {
        return [
            [
                'name' => 'Roberto Tronco',
                'position' => 'Fundador e CEO',
                'bio' => 'Com 40 anos de experiência, Roberto é especialista em madeiras nobres e fundou a empresa com a visão de oferecer produtos de qualidade superior.',
                'photo' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=experienced%20lumber%20company%20ceo%20professional%20portrait&image_size=square'
            ],
            [
                'name' => 'Ana Forte',
                'position' => 'Diretora Comercial',
                'bio' => 'Ana lidera nossa equipe comercial há 25 anos, focando no relacionamento com clientes e desenvolvimento de novos mercados.',
                'photo' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=professional%20commercial%20director%20woman%20confident&image_size=square'
            ],
            [
                'name' => 'Carlos Madeira',
                'position' => 'Engenheiro Florestal',
                'bio' => 'Carlos é responsável por nossas práticas sustentáveis e certificações ambientais, garantindo o manejo responsável dos recursos.',
                'photo' => 'https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=forest%20engineer%20professional%20environmental%20specialist&image_size=square'
            ]
        ];
    }

    /**
     * Get company values
     */
    private function getCompanyValues(): array
    {
        $values = [
            [
                'title' => 'Qualidade',
                'description' => 'Compromisso com a excelência em todos os produtos e serviços.',
                'icon' => 'award'
            ],
            [
                'title' => 'Sustentabilidade',
                'description' => 'Práticas responsáveis para preservação do meio ambiente.',
                'icon' => 'leaf'
            ],
            [
                'title' => 'Tradição',
                'description' => 'Décadas de experiência e conhecimento no setor madeireiro.',
                'icon' => 'clock'
            ],
            [
                'title' => 'Inovação',
                'description' => 'Investimento contínuo em tecnologia e processos modernos.',
                'icon' => 'lightbulb'
            ]
        ];
        
        // Debug: ensure values are being returned
        error_log('Company values: ' . json_encode($values));
        
        return $values;
    }
}
