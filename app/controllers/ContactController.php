<?php

declare(strict_types=1);

namespace app\controllers;

use app\utils\UrlHelper;
use flight\Engine;

class ContactController
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
     * Contact page
     */
    public function index(): void
    {
        $data = [
            'page_title' => 'Contato - Fale Conosco | Tronco Forte',
            'meta_description' => 'Entre em contato com a Tronco Forte. Solicite orçamentos, tire dúvidas e conheça nossos produtos e serviços.',
            'contact_info' => $this->getContactInfo(),
            'faq' => $this->getFAQ()
        ];

        // Set the content for the layout
        $content = $this->app->view()->fetch('contact/index', $data);
        $data['content'] = $content;
        $data['base_path'] = UrlHelper::getBasePath();
        $data['url_helper'] = UrlHelper::class;

        // Render with layout
        $this->app->render('layout', $data);
    }

    /**
     * Handle contact form submission
     */
    public function submit(): void
    {
        $request = $this->app->request();
        
        // Validate form data
        $name = trim($request->data->name ?? '');
        $email = trim($request->data->email ?? '');
        $phone = trim($request->data->phone ?? '');
        $projectType = trim($request->data->project_type ?? '');
        $message = trim($request->data->message ?? '');
        
        $errors = [];
        
        if (empty($name)) {
            $errors[] = 'Nome é obrigatório';
        }
        
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email válido é obrigatório';
        }
        
        if (empty($message)) {
            $errors[] = 'Mensagem é obrigatória';
        }
        
        if (!empty($errors)) {
            $this->app->json([
                'success' => false,
                'errors' => $errors
            ], 400);
            return;
        }
        
        // Here you would typically save to database or send email
        // For now, we'll just simulate success
        
        $this->app->json([
            'success' => true,
            'message' => 'Mensagem enviada com sucesso! Entraremos em contato em breve.'
        ]);
    }

    /**
     * Get contact information
     */
    private function getContactInfo(): array
    {
        return [
            'address' => 'Rua das Madeiras, 123 - Distrito Industrial\nSão Paulo - SP, 01234-567',
            'phone' => '(11) 9999-9999',
            'phone_hours' => 'Segunda a Sexta: 8h às 18h',
            'email' => 'contato@troncoforte.com.br',
            'email_hours' => 'Resposta em até 24h',
            'business_hours' => 'Seg-Sex: 8h às 18h | Sáb: 8h às 12h',
            'whatsapp' => '5511999999999',
            'hours' => [
                'weekdays' => 'Segunda a Sexta: 8h às 18h',
                'saturday' => 'Sábado: 8h às 12h',
                'sunday' => 'Domingo: Fechado'
            ],
            'coordinates' => [
                'lat' => -23.5505,
                'lng' => -46.6333
            ]
        ];
    }

    /**
     * Get FAQ data
     */
    private function getFAQ(): array
    {
        return [
            [
                'question' => 'Quais tipos de madeira vocês trabalham?',
                'answer' => 'Trabalhamos com madeiras nobres como mogno, cedro, ipê, além de compensados e MDF de alta qualidade.'
            ],
            [
                'question' => 'Vocês fazem entrega?',
                'answer' => 'Sim, fazemos entrega em toda a região metropolitana. Para outras localidades, consulte condições especiais.'
            ],
            [
                'question' => 'Como solicitar um orçamento?',
                'answer' => 'Você pode solicitar através do formulário de contato, WhatsApp ou visitando nossa loja física.'
            ],
            [
                'question' => 'Vocês têm certificação ambiental?',
                'answer' => 'Sim, todas as nossas madeiras possuem certificação de origem e seguimos práticas sustentáveis.'
            ],
            [
                'question' => 'Qual o prazo de entrega?',
                'answer' => 'O prazo varia conforme o produto e quantidade. Geralmente entre 3 a 10 dias úteis.'
            ]
        ];
    }
}
