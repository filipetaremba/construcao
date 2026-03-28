<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?php
/**
 * app/Views/pages/servicos.php
 * Página de Serviços — ConstrucaoMz
 * Bilíngue PT | EN
 */
$lang = $lang ?? get_cookie('lang') ?? 'pt';

$t = [
    'pt' => [
        /* Breadcrumb */
        'bc_home'       => 'Início',
        'bc_page'       => 'Serviços',

        /* Stats */
        'stats' => [
            ['val' => '12+',  'label' => 'Anos de Experiência'],
            ['val' => '200+', 'label' => 'Obras Concluídas'],
            ['val' => '98%',  'label' => 'Clientes Satisfeitos'],
            ['val' => '5',    'label' => 'Anos de Garantia'],
        ],

        /* Intro */
        'intro_label'   => 'A Nossa Especialidade',
        'intro_title'   => 'CONSTRUÇÃO DE EXCELÊNCIA EM MOÇAMBIQUE',
        'intro_p1'      => 'A ConstrucaoMz oferece um portfólio completo de serviços de construção civil, cobrindo desde habitações unifamiliares a grandes infraestruturas industriais. Cada projecto é tratado com a mesma atenção ao detalhe e compromisso de qualidade.',
        'intro_p2'      => 'Com sede na Beira e actuação em todo o território nacional, dispomos de equipas técnicas especializadas, equipamentos modernos e uma rede de fornecedores certificados para garantir resultados superiores.',

        /* Serviços */
        'srv_label'     => 'Serviços Detalhados',
        'srv_title'     => 'TUDO O QUE CONSTRUÍMOS',

        'services' => [
            [
                'id'       => 'residencial',
                'tag'      => 'Residencial',
                'icon'     => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
                'title'    => 'CONSTRUÇÃO RESIDENCIAL',
                'headline' => 'A sua casa ideal, construída com excelência.',
                'desc'     => 'Construímos moradias unifamiliares, apartamentos e condomínios fechados com materiais de primeira qualidade e acabamentos premium. Cada habitação é desenhada para maximizar o conforto, a funcionalidade e a valorização patrimonial.',
                'features' => [
                    'Moradias Unifamiliares',
                    'Apartamentos & Condomínios',
                    'Casas de Férias & Quintas',
                    'Acabamentos de Luxo',
                    'Arquitectura Moderna & Tradicional',
                    'Sistemas de Energia Solar integrados',
                ],
                'img'      => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=900&q=80&auto=format&fit=crop',
                'img_alt'  => 'Construção Residencial Moçambique',
            ],
            [
                'id'       => 'comercial',
                'tag'      => 'Comercial',
                'icon'     => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                'title'    => 'CONSTRUÇÃO COMERCIAL',
                'headline' => 'Espaços que potenciam o seu negócio.',
                'desc'     => 'Desenvolvemos escritórios, centros comerciais, hotéis, restaurantes e espaços de retalho projectados para maximizar a produtividade, a imagem corporativa e a experiência do cliente. Construção com prazos rigorosos para não comprometer o seu plano de negócios.',
                'features' => [
                    'Escritórios & Coworkings',
                    'Centros Comerciais & Lojas',
                    'Hotéis & Alojamentos',
                    'Restaurantes & Espaços F&B',
                    'Clínicas & Espaços de Saúde',
                    'Escolas & Centros de Formação',
                ],
                'img'      => 'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=900&q=80&auto=format&fit=crop',
                'img_alt'  => 'Construção Comercial Beira',
            ],
            [
                'id'       => 'industrial',
                'tag'      => 'Industrial',
                'icon'     => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16M3 21h18M9 7h1m-1 4h1m4-4h1m-1 4h1M5 21V9l4-4v6l4-4v4',
                'title'    => 'CONSTRUÇÃO INDUSTRIAL',
                'headline' => 'Infraestruturas robustas para operações de grande escala.',
                'desc'     => 'Construímos armazéns, fábricas, hangares, plataformas logísticas e infraestruturas portuárias com estruturas de aço e betão armado dimensionadas para as mais exigentes cargas e condições ambientais de Moçambique.',
                'features' => [
                    'Armazéns & Centros Logísticos',
                    'Fábricas & Unidades de Produção',
                    'Hangares & Infraestrutura Aeroportuária',
                    'Estruturas Metálicas Pesadas',
                    'Infraestruturas Portuárias',
                    'Instalações de Energia & Utilities',
                ],
                'img'      => 'https://images.unsplash.com/photo-1565008447742-97f6f38c985c?w=900&q=80&auto=format&fit=crop',
                'img_alt'  => 'Construção Industrial Moçambique',
            ],
            [
                'id'       => 'remodelacao',
                'tag'      => 'Remodelação',
                'icon'     => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z',
                'title'    => 'REMODELAÇÃO & RENOVAÇÃO',
                'headline' => 'Transforme o seu espaço sem partir do zero.',
                'desc'     => 'Renovamos completamente espaços residenciais e comerciais existentes — desde reconfiguração de plantas e substituição de revestimentos a instalações eléctricas e hidráulicas. Devolvemos vida e modernidade aos seus imóveis com o mínimo de transtorno.',
                'features' => [
                    'Reconfiguração de Plantas',
                    'Revestimentos & Pavimentos',
                    'Instalações Eléctricas & Hidráulicas',
                    'Cozinhas & Casas de Banho',
                    'Fachadas & Coberturas',
                    'Pintura & Acabamentos Decorativos',
                ],
                'img'      => 'https://images.unsplash.com/photo-1562259949-e8e7689d7828?w=900&q=80&auto=format&fit=crop',
                'img_alt'  => 'Remodelação de interiores Beira',
            ],
            [
                'id'       => 'consultoria',
                'tag'      => 'Consultoria',
                'icon'     => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
                'title'    => 'PROJECTO & CONSULTORIA',
                'headline' => 'Planeie com rigor antes de construir.',
                'desc'     => 'Oferecemos serviços de engenharia e gestão de projecto: desde a elaboração de projecto técnico e licenciamento até à supervisão e fiscalização de obras de terceiros. A nossa equipa de engenheiros garante que o seu investimento é protegido em cada fase.',
                'features' => [
                    'Projecto de Arquitectura & Engenharia',
                    'Licenciamento & Aprovações',
                    'Gestão e Coordenação de Obra',
                    'Fiscalização de Terceiros',
                    'Avaliação e Peritagem de Imóveis',
                    'Consultoria em Eficiência Energética',
                ],
                'img'      => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=900&q=80&auto=format&fit=crop',
                'img_alt'  => 'Consultoria e Projecto de Construção',
            ],
        ],

        /* Diferenciais */
        'why_label'  => 'Porquê a ConstrucaoMz',
        'why_title'  => 'O QUE NOS DISTINGUE',
        'whys' => [
            ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Qualidade Certificada',     'desc' => 'Processos ISO 9001, materiais testados e controlo rigoroso em cada fase da obra.'],
            ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',                                                                                                                                                                                           'title' => 'Entrega no Prazo',        'desc' => 'Cronogramas realistas com acompanhamento semanal e relatórios de progresso ao cliente.'],
            ['icon' => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z',                                                                              'title' => 'Transparência Total',     'desc' => 'Orçamento detalhado sem surpresas. Alterações documentadas e aprovadas pelo cliente.'],
            ['icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z',                                                                  'title' => 'Suporte Pós-Obra',        'desc' => 'Garantia estrutural de 5 anos e equipa disponível para qualquer questão após a entrega.'],
            ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z', 'title' => 'Equipa Especializada', 'desc' => 'Engenheiros, arquitectos e mestres de obra com mais de 10 anos de experiência em Moçambique.'],
            ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Cobertura Nacional', 'desc' => 'Com sede na Beira, executamos obras em Maputo, Nampula, Tete e demais províncias.'],
        ],

        /* FAQ */
        'faq_label' => 'Perguntas Frequentes',
        'faq_title' => 'TUDO O QUE PRECISA DE SABER',
        'faqs' => [
            ['q' => 'Quanto tempo demora a receber um orçamento?',                'a' => 'Respondemos em menos de 24 horas úteis após receber os detalhes do projecto. Para obras mais complexas, podemos agendar uma visita técnica gratuita ao local para elaborar uma proposta mais precisa.'],
            ['q' => 'A ConstrucaoMz trabalha fora da Beira?',                     'a' => 'Sim. Temos equipas que actuam em todo o território nacional — Maputo, Nampula, Tete, Sofala e outras províncias. Os custos de deslocação são incluídos de forma transparente no orçamento.'],
            ['q' => 'Que garantia oferecem nas obras?',                           'a' => 'Todas as nossas obras incluem 5 anos de garantia estrutural e 1 ano em acabamentos. Qualquer problema identificado dentro do prazo de garantia é resolvido sem custo adicional para o cliente.'],
            ['q' => 'Posso acompanhar o progresso da obra em tempo real?',       'a' => 'Sim. Enviamos relatórios semanais de progresso com fotografias e percentagem de conclusão. Para obras maiores, disponibilizamos acesso a um painel online com actualizações diárias.'],
            ['q' => 'Trabalham com projectos de arquitectura do cliente?',        'a' => 'Absolutamente. Podemos executar a obra com base em projectos de arquitectura e engenharia existentes, ou fornecer o serviço completo de projecto + execução caso necessário.'],
            ['q' => 'Como é feito o pagamento das obras?',                        'a' => 'Trabalhamos com planos de pagamento faseados, alinhados com o progresso da obra. Tipicamente: sinal na assinatura do contrato, pagamentos intermédios por fases, e saldo na entrega da obra.'],
            ['q' => 'Fornecem os materiais ou o cliente tem de comprar?',         'a' => 'Podemos fazer das duas formas. No modelo mais comum (empreitada completa), fornecemos todos os materiais com as nossas condições negociadas com fornecedores certificados. Também aceitamos o modelo de mão-de-obra apenas.'],
            ['q' => 'A empresa está devidamente licenciada e registada?',         'a' => 'Sim. A ConstrucaoMz está registada no INSS, licenciada pelo Ministério de Obras Públicas e detentora de certificação de qualidade. Toda a documentação pode ser disponibilizada antes da assinatura do contrato.'],
        ],

        /* CTA final */
        'cta_label'  => 'Pronto para Começar?',
        'cta_title'  => 'PEÇA O SEU ORÇAMENTO GRATUITO',
        'cta_sub'    => 'Fale connosco hoje. Respondemos em menos de 24 horas com uma proposta personalizada para o seu projecto.',
        'cta_btn1'   => 'Pedir Orçamento Online',
        'cta_btn2'   => 'Ligar Agora',
        'cta_btn3'   => 'WhatsApp',
    ],

    'en' => [
        'bc_home'       => 'Home',
        'bc_page'       => 'Services',
        'stats' => [
            ['val' => '12+',  'label' => 'Years of Experience'],
            ['val' => '200+', 'label' => 'Completed Projects'],
            ['val' => '98%',  'label' => 'Satisfied Clients'],
            ['val' => '5',    'label' => 'Year Warranty'],
        ],
        'intro_label'   => 'Our Expertise',
        'intro_title'   => 'EXCELLENCE IN CONSTRUCTION ACROSS MOZAMBIQUE',
        'intro_p1'      => 'ConstrucaoMz offers a full portfolio of civil construction services, covering everything from single-family homes to large industrial infrastructure. Each project is approached with the same attention to detail and commitment to quality.',
        'intro_p2'      => 'Headquartered in Beira and operating nationwide, we have specialised technical teams, modern equipment and a network of certified suppliers to guarantee superior results.',
        'srv_label'     => 'Detailed Services',
        'srv_title'     => 'EVERYTHING WE BUILD',
        'services' => [
            [
                'id'       => 'residential',
                'tag'      => 'Residential',
                'icon'     => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
                'title'    => 'RESIDENTIAL CONSTRUCTION',
                'headline' => 'Your ideal home, built with excellence.',
                'desc'     => 'We build single-family homes, apartments and gated communities with premium materials and high-end finishes. Each residence is designed to maximise comfort, functionality and property value.',
                'features' => ['Single-Family Homes', 'Apartments & Condominiums', 'Holiday Homes & Farms', 'Luxury Finishes', 'Modern & Traditional Architecture', 'Integrated Solar Energy Systems'],
                'img'      => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=900&q=80&auto=format&fit=crop',
                'img_alt'  => 'Residential Construction Mozambique',
            ],
            [
                'id'       => 'commercial',
                'tag'      => 'Commercial',
                'icon'     => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                'title'    => 'COMMERCIAL CONSTRUCTION',
                'headline' => 'Spaces that power your business.',
                'desc'     => 'We develop offices, shopping centres, hotels, restaurants and retail spaces designed to maximise productivity, corporate image and customer experience. Strict deadlines so your business plan stays on track.',
                'features' => ['Offices & Co-working Spaces', 'Shopping Centres & Retail', 'Hotels & Accommodation', 'Restaurants & F&B Spaces', 'Clinics & Healthcare Facilities', 'Schools & Training Centres'],
                'img'      => 'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=900&q=80&auto=format&fit=crop',
                'img_alt'  => 'Commercial Construction Beira',
            ],
            [
                'id'       => 'industrial',
                'tag'      => 'Industrial',
                'icon'     => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16M3 21h18M9 7h1m-1 4h1m4-4h1m-1 4h1M5 21V9l4-4v6l4-4v4',
                'title'    => 'INDUSTRIAL CONSTRUCTION',
                'headline' => 'Robust infrastructure for large-scale operations.',
                'desc'     => 'We build warehouses, factories, hangars, logistics platforms and port infrastructure with steel and reinforced concrete structures dimensioned for the most demanding loads and environmental conditions in Mozambique.',
                'features' => ['Warehouses & Logistics Centres', 'Factories & Production Units', 'Hangars & Airport Infrastructure', 'Heavy Steel Structures', 'Port Infrastructure', 'Energy & Utilities Installations'],
                'img'      => 'https://images.unsplash.com/photo-1565008447742-97f6f38c985c?w=900&q=80&auto=format&fit=crop',
                'img_alt'  => 'Industrial Construction Mozambique',
            ],
            [
                'id'       => 'renovation',
                'tag'      => 'Renovation',
                'icon'     => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z',
                'title'    => 'RENOVATION & REMODELLING',
                'headline' => 'Transform your space without starting from scratch.',
                'desc'     => 'We completely renovate existing residential and commercial spaces — from floor plan reconfiguration and new finishes to electrical and plumbing installations. We bring life and modernity back to your properties with minimum disruption.',
                'features' => ['Floor Plan Reconfiguration', 'Cladding & Flooring', 'Electrical & Plumbing', 'Kitchens & Bathrooms', 'Facades & Roofing', 'Painting & Decorative Finishes'],
                'img'      => 'https://images.unsplash.com/photo-1562259949-e8e7689d7828?w=900&q=80&auto=format&fit=crop',
                'img_alt'  => 'Interior renovation Beira',
            ],
            [
                'id'       => 'consulting',
                'tag'      => 'Consulting',
                'icon'     => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
                'title'    => 'DESIGN & CONSULTING',
                'headline' => 'Plan rigorously before you build.',
                'desc'     => 'We offer engineering and project management services: from technical design and licensing to supervision and inspection of third-party works. Our team of engineers ensures your investment is protected at every stage.',
                'features' => ['Architecture & Engineering Design', 'Licensing & Approvals', 'Project Management & Coordination', 'Third-Party Inspection', 'Property Valuation & Expert Reports', 'Energy Efficiency Consulting'],
                'img'      => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=900&q=80&auto=format&fit=crop',
                'img_alt'  => 'Construction Consulting and Design',
            ],
        ],
        'why_label'  => 'Why ConstrucaoMz',
        'why_title'  => 'WHAT SETS US APART',
        'whys' => [
            ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Certified Quality',    'desc' => 'ISO 9001 processes, tested materials and rigorous control at every stage of the build.'],
            ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',                                                                                                                                                                                           'title' => 'On-Time Delivery',   'desc' => 'Realistic timelines with weekly tracking and progress reports delivered to the client.'],
            ['icon' => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z',                                                                              'title' => 'Full Transparency',  'desc' => 'Detailed quotes with no surprises. All changes documented and approved by the client.'],
            ['icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z',                                                                  'title' => 'Post-Build Support',  'desc' => '5-year structural warranty and a team available for any questions after handover.'],
            ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z', 'title' => 'Expert Team', 'desc' => 'Engineers, architects and site managers with 10+ years of experience in Mozambique.'],
            ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Nationwide Coverage', 'desc' => 'Based in Beira, we execute projects in Maputo, Nampula, Tete and all other provinces.'],
        ],
        'faq_label' => 'Frequently Asked Questions',
        'faq_title' => 'EVERYTHING YOU NEED TO KNOW',
        'faqs' => [
            ['q' => 'How long does it take to receive a quote?',                  'a' => 'We respond within 24 business hours after receiving your project details. For more complex works, we can arrange a free technical site visit to prepare a more precise proposal.'],
            ['q' => 'Does ConstrucaoMz work outside Beira?',                     'a' => 'Yes. We have teams operating across the entire country — Maputo, Nampula, Tete, Sofala and other provinces. Travel costs are included transparently in the quote.'],
            ['q' => 'What warranty do you offer on completed works?',             'a' => 'All our projects include a 5-year structural warranty and 1-year warranty on finishes. Any issue identified within the warranty period is resolved at no additional cost to the client.'],
            ['q' => 'Can I track the progress of my project in real time?',      'a' => 'Yes. We send weekly progress reports with photos and completion percentages. For larger works, we provide access to an online dashboard with daily updates.'],
            ['q' => 'Do you work with the client\'s own architectural plans?',   'a' => 'Absolutely. We can execute the build based on existing architectural and engineering plans, or provide the complete design + build service if required.'],
            ['q' => 'How are payments structured?',                              'a' => 'We work with phased payment plans aligned with project progress. Typically: a deposit at contract signing, milestone payments at key stages, and the final balance at handover.'],
            ['q' => 'Do you supply materials or does the client purchase them?', 'a' => 'Both options are available. In the most common model (full contract), we supply all materials at negotiated prices with certified suppliers. We also accept a labour-only model.'],
            ['q' => 'Is the company properly licensed and registered?',          'a' => 'Yes. ConstrucaoMz is registered with INSS, licensed by the Ministry of Public Works and holds quality certification. All documentation can be provided before contract signing.'],
        ],
        'cta_label'  => 'Ready to Start?',
        'cta_title'  => 'GET YOUR FREE QUOTE',
        'cta_sub'    => 'Talk to us today. We respond within 24 hours with a personalised proposal for your project.',
        'cta_btn1'   => 'Request Online Quote',
        'cta_btn2'   => 'Call Now',
        'cta_btn3'   => 'WhatsApp',
    ],
];

$l   = $t[$lang] ?? $t['pt'];
$wa  = 'https://wa.me/258853592701?text=' . urlencode($lang === 'en' ? 'Hello, I would like to request a quote.' : 'Olá, gostaria de pedir um orçamento.');
$tel = 'tel:+258853592701';
?>


<!-- ════════ INTRO ════════ -->
<section class="py-16 md:py-24 bg-white">
  <div class="max-w-6xl mx-auto px-6 md:px-8">
    <div class="grid md:grid-cols-2 gap-12 items-center reveal">
      <div>
        <p class="sec-label"><?= esc($l['intro_label']) ?></p>
        <h2 class="font-display text-navy leading-tight mb-6" style="font-size:clamp(1.8rem,3.5vw,2.8rem)">
          <?= esc($l['intro_title']) ?>
        </h2>
      </div>
      <div class="space-y-4 text-gray-500 font-light text-base leading-relaxed">
        <p class="gold-bar"><?= esc($l['intro_p1']) ?></p>
        <p><?= esc($l['intro_p2']) ?></p>
      </div>
    </div>

    <!-- Âncoras de navegação rápida -->
    <div class="flex flex-wrap gap-3 mt-12 reveal">
      <?php foreach ($l['services'] as $s) : ?>
      <a href="#<?= $s['id'] ?>"
         class="border border-navy/20 text-navy text-xs font-bold uppercase tracking-widest px-4 py-2 hover:bg-navy hover:text-white hover:border-navy transition-all duration-200 flex items-center gap-2">
        <svg class="w-3 h-3 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        <?= esc($s['tag']) ?>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════ LISTA DE SERVIÇOS ════════ -->
<section class="bg-light py-4">
  <div class="max-w-6xl mx-auto px-6 md:px-8 py-4">
    <div class="text-center mb-16 reveal">
      <p class="sec-label mx-auto"><?= esc($l['srv_label']) ?></p>
      <h2 class="font-display text-navy" style="font-size:clamp(2rem,4vw,3rem)"><?= esc($l['srv_title']) ?></h2>
    </div>
  </div>
</section>

<?php foreach ($l['services'] as $i => $srv) : ?>
<section id="<?= $srv['id'] ?>" class="py-16 md:py-24 <?= $i % 2 === 0 ? 'bg-white' : 'bg-light' ?>">
  <div class="max-w-6xl mx-auto px-6 md:px-8">
    <div class="grid md:grid-cols-2 gap-12 md:gap-20 items-center <?= $i % 2 !== 0 ? 'md:[&>*:first-child]:order-2' : '' ?>">

      <!-- Imagem -->
      <div class="reveal relative group">
        <div class="overflow-hidden" style="aspect-ratio:4/3">
          <img src="<?= $srv['img'] ?>" alt="<?= esc($srv['img_alt']) ?>"
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
        </div>
        <!-- Tag -->
        <div class="absolute top-4 left-4 bg-gold text-navy text-[10px] font-bold uppercase tracking-widest px-3 py-1.5">
          <?= esc($srv['tag']) ?>
        </div>
        <!-- Detalhe decorativo -->
        <?php if ($i % 2 === 0) : ?>
        <div class="absolute -bottom-4 -right-4 w-20 h-20 border-2 border-gold/30 -z-10 hidden md:block"></div>
        <?php else : ?>
        <div class="absolute -bottom-4 -left-4 w-20 h-20 border-2 border-gold/30 -z-10 hidden md:block"></div>
        <?php endif; ?>
      </div>

      <!-- Conteúdo -->
      <div class="reveal">
        <p class="sec-label"><?= esc($srv['tag']) ?></p>
        <h3 class="font-display text-navy leading-tight mb-3" style="font-size:clamp(1.6rem,3vw,2.4rem)">
          <?= esc($srv['title']) ?>
        </h3>
        <p class="text-gold font-display text-lg mb-5 tracking-wide"><?= esc($srv['headline']) ?></p>
        <div class="gold-bar mb-7">
          <p class="text-gray-500 text-sm leading-relaxed font-light"><?= esc($srv['desc']) ?></p>
        </div>

        <!-- Features -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mb-8">
          <?php foreach ($srv['features'] as $f) : ?>
          <div class="flex items-center gap-2.5 text-sm text-navy font-medium">
            <div class="w-1.5 h-1.5 bg-gold rounded-full flex-shrink-0"></div>
            <?= esc($f) ?>
          </div>
          <?php endforeach; ?>
        </div>

        <div class="flex flex-wrap gap-3">
          <a href="#orcamento" class="btn-gold">
            <?= $lang === 'en' ? 'Request Quote' : 'Pedir Orçamento' ?>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="<?= $wa ?>" target="_blank" rel="noopener" class="btn-outline-dark flex items-center gap-2">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a8.4 8.4 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479s1.065 2.876 1.213 3.074c.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.109.549 4.09 1.508 5.815L.057 23.99l6.303-1.657A11.954 11.954 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.003-1.365l-.36-.214-3.718.976.99-3.62-.233-.374A9.818 9.818 0 0112 2.182c5.426 0 9.818 4.392 9.818 9.818S17.426 21.818 12 21.818z"/></svg>
            WhatsApp
          </a>
        </div>
      </div>

    </div>
  </div>
</section>
<?php endforeach; ?>


<!-- ════════ DIFERENCIAIS ════════ -->
<section class="py-20 md:py-28 bg-navy text-white relative overflow-hidden">
  <div class="absolute inset-0 opacity-5 bg-pattern-dots"></div>
  <div class="max-w-6xl mx-auto px-6 md:px-8 relative z-10">

    <div class="text-center mb-16 reveal">
      <p class="sec-label"><?= esc($l['why_label']) ?></p>
      <h2 class="font-display text-white" style="font-size:clamp(2rem,4vw,3rem)"><?= esc($l['why_title']) ?></h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 reveal">
      <?php foreach ($l['whys'] as $i => $w) : ?>
      <div class="border border-white/10 p-7 hover:border-gold/50 transition-colors duration-300 group reveal"
           style="transition-delay:<?= $i * 0.08 ?>s">
        <div class="w-11 h-11 bg-white/5 group-hover:bg-gold/10 flex items-center justify-center mb-5 transition-colors duration-300">
          <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $w['icon'] ?>"/>
          </svg>
        </div>
        <h4 class="font-display text-white text-lg tracking-wide mb-3"><?= esc($w['title']) ?></h4>
        <p class="text-white/50 text-sm leading-relaxed font-light"><?= esc($w['desc']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ════════ FAQ ════════ -->
<section class="py-20 md:py-28 bg-white">
  <div class="max-w-4xl mx-auto px-6 md:px-8">

    <div class="text-center mb-16 reveal">
      <p class="sec-label mx-auto"><?= esc($l['faq_label']) ?></p>
      <h2 class="font-display text-navy" style="font-size:clamp(2rem,4vw,3rem)"><?= esc($l['faq_title']) ?></h2>
    </div>

    <div class="space-y-1 reveal" id="faq-list">
      <?php foreach ($l['faqs'] as $i => $faq) : ?>
      <div class="faq-item border border-gray-200 hover:border-gold/40 transition-colors duration-200">
        <button class="faq-btn w-full text-left flex items-center justify-between gap-4 px-6 py-5 group"
                aria-expanded="false">
          <span class="font-display text-navy text-base md:text-lg tracking-wide group-hover:text-gold transition-colors duration-200">
            <?= esc($faq['q']) ?>
          </span>
          <span class="flex-shrink-0 w-8 h-8 border border-gray-300 group-hover:border-gold flex items-center justify-center transition-colors duration-200">
            <svg class="faq-icon w-4 h-4 text-gray-400 group-hover:text-gold transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
          </span>
        </button>
        <div class="faq-body overflow-hidden" style="max-height:0; transition:max-height .35s ease, padding .35s ease;">
          <p class="text-gray-500 text-sm leading-relaxed font-light px-6 pb-5"><?= esc($faq['a']) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ════════ CTA FINAL + MINI FORM ════════ -->
<section id="orcamento" class="py-20 md:py-28 bg-navy relative overflow-hidden">
  <div class="absolute top-0 right-0 w-96 h-96 bg-gold opacity-5 rounded-full translate-x-48 -translate-y-24"></div>
  <div class="absolute bottom-0 left-0 w-72 h-72 bg-gold opacity-5 rounded-full -translate-x-36 translate-y-20"></div>

  <div class="max-w-6xl mx-auto px-6 md:px-8 relative z-10">
    <div class="grid lg:grid-cols-5 gap-12 items-start">

      <!-- Info -->
      <div class="lg:col-span-2 reveal">
        <p class="sec-label"><?= esc($l['cta_label']) ?></p>
        <h2 class="font-display text-white leading-tight mb-5" style="font-size:clamp(2rem,3.5vw,3rem)">
          <?= esc($l['cta_title']) ?>
        </h2>
        <p class="text-white/50 text-sm leading-relaxed font-light mb-8"><?= esc($l['cta_sub']) ?></p>

        <div class="space-y-3 mb-10">
          <a href="#orcamento-form" class="btn-gold w-full justify-center">
            <?= esc($l['cta_btn1']) ?>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <div class="grid grid-cols-2 gap-3">
            <a href="<?= $tel ?>" class="flex items-center justify-center gap-2 border border-white/20 text-white text-xs font-bold uppercase tracking-widest py-3 hover:border-gold hover:text-gold transition">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              <?= esc($l['cta_btn2']) ?>
            </a>
            <a href="<?= $wa ?>" target="_blank" rel="noopener"
               class="flex items-center justify-center gap-2 bg-green-600 hover:bg-green-700 text-white text-xs font-bold uppercase tracking-widest py-3 transition">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a8.4 8.4 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479s1.065 2.876 1.213 3.074c.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.109.549 4.09 1.508 5.815L.057 23.99l6.303-1.657A11.954 11.954 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.003-1.365l-.36-.214-3.718.976.99-3.62-.233-.374A9.818 9.818 0 0112 2.182c5.426 0 9.818 4.392 9.818 9.818S17.426 21.818 12 21.818z"/></svg>
              <?= esc($l['cta_btn3']) ?>
            </a>
          </div>
        </div>

        <div class="border-t border-white/10 pt-6 space-y-3">
          <div class="flex items-center gap-3 text-white/50 text-sm">
            <svg class="w-4 h-4 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            Beira, Sofala — Moçambique
          </div>
          <a href="<?= $tel ?>" class="flex items-center gap-3 text-white/50 hover:text-gold text-sm transition">
            <svg class="w-4 h-4 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            +258 853 592 701
          </a>
        </div>
      </div>

      <!-- Formulário -->
      <div class="lg:col-span-3 reveal" id="orcamento-form">
        <div class="bg-white/5 border border-white/10 p-8 md:p-10">

          <p class="font-display text-white text-xl tracking-wide mb-7">
            <?= $lang === 'en' ? 'Quick Quote Request' : 'Pedido de Orçamento Rápido' ?>
          </p>

          <?php if (session()->has('form_success')) : ?>
          <div class="bg-green-500/20 border border-green-400/30 text-green-300 text-sm p-4 mb-6 flex items-center gap-2">
            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <?= $lang === 'en' ? 'Message sent! We will be in touch shortly.' : 'Mensagem enviada! Entraremos em contacto em breve.' ?>
          </div>
          <?php endif; ?>

          <form action="<?= base_url('contacto/enviar') ?>" method="post" novalidate>

            <div class="grid sm:grid-cols-2 gap-5 mb-5">
              <div>
                <label class="field-label"><?= $lang === 'en' ? 'Name *' : 'Nome *' ?></label>
                <input type="text" name="nome" required placeholder="<?= $lang === 'en' ? 'Your name' : 'O seu nome' ?>"
                       value="<?= old('nome') ?>" class="field">
              </div>
              <div>
                <label class="field-label"><?= $lang === 'en' ? 'Phone / WhatsApp' : 'Telefone / WhatsApp' ?></label>
                <input type="tel" name="telefone" placeholder="+258 85 000 0000"
                       value="<?= old('telefone') ?>" class="field">
              </div>
            </div>

            <div class="mb-5">
              <label class="field-label">Email *</label>
              <input type="email" name="email" required placeholder="email@exemplo.com"
                     value="<?= old('email') ?>" class="field">
            </div>

            <div class="mb-5">
              <label class="field-label"><?= $lang === 'en' ? 'Service *' : 'Serviço *' ?></label>
              <select name="tipo" required class="field">
                <option value="" disabled <?= old('tipo') ? '' : 'selected' ?>>
                  <?= $lang === 'en' ? 'Select a service' : 'Seleccione o serviço' ?>
                </option>
                <?php foreach ($l['services'] as $s) : ?>
                <option value="<?= $s['id'] ?>" <?= old('tipo') === $s['id'] ? 'selected' : '' ?>>
                  <?= esc($s['tag']) ?>
                </option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="mb-6">
              <label class="field-label"><?= $lang === 'en' ? 'Brief description *' : 'Descrição breve *' ?></label>
              <textarea name="mensagem" required rows="4"
                        placeholder="<?= $lang === 'en' ? 'Describe your project briefly...' : 'Descreva brevemente o seu projecto...' ?>"
                        class="field resize-none"><?= old('mensagem') ?></textarea>
            </div>

            <?= csrf_field() ?>

            <button type="submit" class="btn-gold w-full justify-center py-4 text-sm">
              <?= $lang === 'en' ? 'SEND REQUEST' : 'ENVIAR PEDIDO' ?>
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
            </button>

            <p class="text-white/25 text-[10px] text-center mt-3">
              <?= $lang === 'en' ? 'Your data is treated with full confidentiality.' : 'Os seus dados são tratados com total confidencialidade.' ?>
            </p>

          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
// ── FAQ Accordion ──
(function () {
  document.querySelectorAll('.faq-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      const item    = this.closest('.faq-item');
      const body    = item.querySelector('.faq-body');
      const icon    = item.querySelector('.faq-icon');
      const isOpen  = this.getAttribute('aria-expanded') === 'true';

      // Fecha todos
      document.querySelectorAll('.faq-item').forEach(el => {
        el.querySelector('.faq-btn').setAttribute('aria-expanded', 'false');
        el.querySelector('.faq-body').style.maxHeight = '0';
        el.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
        el.querySelector('.faq-item-border')?.classList.remove('border-gold');
      });

      // Abre o clicado se estava fechado
      if (!isOpen) {
        this.setAttribute('aria-expanded', 'true');
        body.style.maxHeight = body.scrollHeight + 32 + 'px';
        icon.style.transform = 'rotate(45deg)';
        item.style.borderColor = '#E8A020';
        item.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      } else {
        item.style.borderColor = '';
      }
    });
  });
})();
</script>
<?= $this->endSection() ?>