<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?php
/**
 * app/Views/pages/sobre.php
 * Página Sobre Nós — ConstrucaoMz
 * Bilíngue PT | EN
 */
$lang = $lang ?? get_cookie('lang') ?? 'pt';

$t = [
    'pt' => [
        /* Página */
        'page_label'  => 'Quem Somos',
        'page_title'  => 'SOBRE NÓS',
        'bc_home'     => 'Início',
        'bc_page'     => 'Sobre Nós',

        /* Stats */
        'stats' => [
            ['val' => '12+',  'label' => 'Anos de Experiência'],
            ['val' => '200+', 'label' => 'Obras Concluídas'],
            ['val' => '98%',  'label' => 'Clientes Satisfeitos'],
            ['val' => '5',    'label' => 'Anos de Garantia'],
        ],

        /* História */
        'hist_label' => 'A Nossa História',
        'hist_title' => 'MAIS DE UMA DÉCADA A CONSTRUIR CONFIANÇA',
        'hist_p1'    => 'A ConstrucaoMz foi fundada na Beira em 2012 por um grupo de engenheiros moçambicanos com uma visão clara: construir o Moçambique do futuro com rigor técnico, materiais de excelência e total transparência com os clientes.',
        'hist_p2'    => 'Ao longo de mais de uma década, crescemos de uma pequena equipa de obra para uma empresa de referência nacional, com projectos em todas as províncias do país. A nossa filosofia permanece inalterada: cada obra é tratada como se fosse a nossa própria casa.',
        'hist_p3'    => 'Hoje, com mais de 200 obras concluídas e uma equipa de 80+ profissionais especializados, continuamos comprometidos com o mesmo propósito que nos fundou — construir com excelência, entregar dentro do prazo e superar as expectativas do cliente.',
        'hist_cta'   => 'Ver os Nossos Projectos',

        /* Missão / Visão / Valores */
        'mvv_label'  => 'O Que Nos Move',
        'mvv_title'  => 'MISSÃO, VISÃO & VALORES',
        'mvv' => [
            [
                'icon'  => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                'title' => 'MISSÃO',
                'desc'  => 'Construir infraestruturas de qualidade superior que melhorem a vida das pessoas e impulsionem o desenvolvimento de Moçambique, com rigor técnico, honestidade e compromisso absoluto com os prazos.',
            ],
            [
                'icon'  => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
                'title' => 'VISÃO',
                'desc'  => 'Ser a empresa de construção mais respeitada de Moçambique — reconhecida pela excelência das obras, pela ética nos negócios e pelo impacto positivo nas comunidades onde actuamos.',
            ],
            [
                'icon'  => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'title' => 'VALORES',
                'desc'  => 'Qualidade sem compromissos. Transparência total. Cumprimento rigoroso de prazos. Segurança em obra. Respeito pelo ambiente. Desenvolvimento das comunidades locais.',
            ],
        ],

        /* Diferenciais */
        'why_label' => 'Porquê a ConstrucaoMz',
        'why_title' => 'O QUE NOS DISTINGUE',
        'whys' => [
            ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'ISO 9001',              'desc' => 'Processos certificados e controlo rigoroso de qualidade em todas as fases de obra.'],
            ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',                                                                                                                                                                                        'title' => 'Entrega no Prazo',    'desc' => 'Mais de 95% das obras entregues dentro do cronograma acordado com o cliente.'],
            ['icon' => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z',                                                                          'title' => 'Orçamentos Fixos',    'desc' => 'Sem surpresas. Orçamentos detalhados e alterações sempre documentadas e aprovadas.'],
            ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z', 'title' => 'Equipa Sénior', 'desc' => 'Engenheiros e arquitectos com média de 12 anos de experiência em Moçambique.'],
            ['icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z',                                                               'title' => 'Garantia 5 Anos',    'desc' => 'Garantia estrutural de 5 anos e suporte pós-obra disponível para todos os clientes.'],
            ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Cobertura Nacional', 'desc' => 'Sede na Beira com equipas activas em Maputo, Nampula, Tete e outras províncias.'],
        ],

        /* Equipa */
        'team_label' => 'As Pessoas por Trás das Obras',
        'team_title' => 'A NOSSA EQUIPA DE LIDERANÇA',
        'team' => [
            ['name' => 'António Ferreira',   'role' => 'Director Geral & Fundador',      'exp' => '20 anos de experiência', 'initials' => 'AF', 'desc' => 'Engenheiro Civil formado pela UEM. Fundou a ConstrucaoMz após 8 anos em empresas de construção internacionais na região SADC.'],
            ['name' => 'Graça Machungo',     'role' => 'Directora de Operações',         'exp' => '15 anos de experiência', 'initials' => 'GM', 'desc' => 'Especialista em gestão de projectos de grande envergadura. Responsável pela coordenação de todas as obras em simultâneo.'],
            ['name' => 'Paulo Sitoi',        'role' => 'Director Técnico',               'exp' => '18 anos de experiência', 'initials' => 'PS', 'desc' => 'Engenheiro Estrutural com vasta experiência em obras industriais e infraestruturas portuárias em Moçambique.'],
            ['name' => 'Beatriz Tembe',      'role' => 'Arquitecta Chefe',               'exp' => '12 anos de experiência', 'initials' => 'BT', 'desc' => 'Arquitecta com especialização em design sustentável e integração de sistemas de energia solar em habitações e edifícios comerciais.'],
            ['name' => 'Carlos Nhantumbo',   'role' => 'Director Comercial',             'exp' => '10 anos de experiência', 'initials' => 'CN', 'desc' => 'Responsável pela relação com clientes e desenvolvimento de negócio. Especialista em construção residencial premium.'],
            ['name' => 'Fátima Mondlane',    'role' => 'Directora Financeira (CFO)',     'exp' => '14 anos de experiência', 'initials' => 'FM', 'desc' => 'Economista e gestora financeira com experiência no sector da construção civil e imobiliário em Moçambique e Angola.'],
        ],

        /* Certificações */
        'cert_label' => 'Credenciais & Reconhecimento',
        'cert_title' => 'LICENÇAS E CERTIFICAÇÕES',
        'certs' => [
            ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'ISO 9001:2015',                     'body' => 'Sistema de Gestão de Qualidade certificado internacionalmente.'],
            ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',                                                              'title' => 'Ministério de Obras Públicas',       'body' => 'Licença de empreiteiro de obras públicas — Classe A (máxima).'],
            ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',                                                 'title' => 'INSS Moçambique',                   'body' => 'Empresa regularmente registada e em dia com contribuições sociais.'],
            ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Câmara de Comércio',          'body' => 'Membro activo da Câmara de Comércio e Indústria de Sofala.'],
            ['icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z',                              'title' => 'Seguro de Responsabilidade Civil',  'body' => 'Cobertura total para todas as obras em curso em território nacional.'],
            ['icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z',                                                                                      'title' => 'Prémio Excelência 2023',            'body' => 'Reconhecida como melhor empresa de construção da região centro de Moçambique.'],
        ],

        /* CTA */
        'cta_label' => 'Pronto para Começar?',
        'cta_title' => 'VAMOS CONSTRUIR JUNTOS',
        'cta_sub'   => 'Fale connosco e descubra como podemos transformar o seu projecto em realidade.',
        'cta_btn1'  => 'Pedir Orçamento Gratuito',
        'cta_btn2'  => 'Ver os Nossos Serviços',
    ],

    'en' => [
        'page_label'  => 'Who We Are',
        'page_title'  => 'ABOUT US',
        'bc_home'     => 'Home',
        'bc_page'     => 'About Us',
        'stats' => [
            ['val' => '12+',  'label' => 'Years of Experience'],
            ['val' => '200+', 'label' => 'Completed Projects'],
            ['val' => '98%',  'label' => 'Satisfied Clients'],
            ['val' => '5',    'label' => 'Year Warranty'],
        ],
        'hist_label' => 'Our Story',
        'hist_title' => 'OVER A DECADE BUILDING TRUST',
        'hist_p1'    => 'ConstrucaoMz was founded in Beira in 2012 by a group of Mozambican engineers with a clear vision: to build the Mozambique of the future with technical rigour, premium materials and complete transparency with clients.',
        'hist_p2'    => 'Over more than a decade, we have grown from a small site team into a nationally recognised company, with projects in every province of the country. Our philosophy remains unchanged: every project is treated as if it were our own home.',
        'hist_p3'    => 'Today, with over 200 completed projects and a team of 80+ specialist professionals, we remain committed to the same purpose that founded us — building with excellence, delivering on time and exceeding client expectations.',
        'hist_cta'   => 'View Our Projects',
        'mvv_label'  => 'What Drives Us',
        'mvv_title'  => 'MISSION, VISION & VALUES',
        'mvv' => [
            ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'MISSION', 'desc' => 'To build superior quality infrastructure that improves people\'s lives and drives development in Mozambique, with technical rigour, honesty and absolute commitment to deadlines.'],
            ['icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z', 'title' => 'VISION', 'desc' => 'To be the most respected construction company in Mozambique — recognised for excellence in build quality, business ethics and positive impact on the communities where we operate.'],
            ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'title' => 'VALUES', 'desc' => 'Uncompromising quality. Full transparency. Strict deadline adherence. Site safety. Environmental respect. Local community development.'],
        ],
        'why_label' => 'Why ConstrucaoMz',
        'why_title' => 'WHAT SETS US APART',
        'whys' => [
            ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'ISO 9001',           'desc' => 'Certified processes and rigorous quality control at every stage of the build.'],
            ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',                                                                                                                                                    'title' => 'On-Time Delivery',  'desc' => 'Over 95% of projects delivered within the agreed schedule.'],
            ['icon' => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z',                                         'title' => 'Fixed Budgets',      'desc' => 'No surprises. Detailed quotes and changes always documented and client-approved.'],
            ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z', 'title' => 'Senior Team', 'desc' => 'Engineers and architects averaging 12 years of experience in Mozambique.'],
            ['icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z', 'title' => '5-Year Warranty',    'desc' => '5-year structural warranty and post-build support available to all clients.'],
            ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Nationwide Coverage', 'desc' => 'Headquartered in Beira with active teams in Maputo, Nampula, Tete and beyond.'],
        ],
        'team_label' => 'The People Behind the Builds',
        'team_title' => 'OUR LEADERSHIP TEAM',
        'team' => [
            ['name' => 'António Ferreira', 'role' => 'CEO & Founder',           'exp' => '20 years experience', 'initials' => 'AF', 'desc' => 'Civil Engineer from UEM. Founded ConstrucaoMz after 8 years with international construction firms across the SADC region.'],
            ['name' => 'Graça Machungo',   'role' => 'Director of Operations',  'exp' => '15 years experience', 'initials' => 'GM', 'desc' => 'Large-scale project management specialist. Responsible for coordinating all concurrent projects across the country.'],
            ['name' => 'Paulo Sitoi',      'role' => 'Technical Director',      'exp' => '18 years experience', 'initials' => 'PS', 'desc' => 'Structural Engineer with extensive experience in industrial works and port infrastructure throughout Mozambique.'],
            ['name' => 'Beatriz Tembe',    'role' => 'Lead Architect',          'exp' => '12 years experience', 'initials' => 'BT', 'desc' => 'Architect specialising in sustainable design and solar energy integration in residential and commercial buildings.'],
            ['name' => 'Carlos Nhantumbo', 'role' => 'Commercial Director',     'exp' => '10 years experience', 'initials' => 'CN', 'desc' => 'Responsible for client relations and business development. Specialist in premium residential construction.'],
            ['name' => 'Fátima Mondlane',  'role' => 'Chief Financial Officer', 'exp' => '14 years experience', 'initials' => 'FM', 'desc' => 'Economist and financial manager with experience in the construction and real estate sector in Mozambique and Angola.'],
        ],
        'cert_label' => 'Credentials & Recognition',
        'cert_title' => 'LICENCES AND CERTIFICATIONS',
        'certs' => [
            ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'ISO 9001:2015',                   'body' => 'Internationally certified Quality Management System.'],
            ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', 'title' => 'Ministry of Public Works',         'body' => 'Class A public works contractor licence (maximum grade).'],
            ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'title' => 'INSS Mozambique',             'body' => 'Fully registered company, up to date with all social contribution obligations.'],
            ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Chamber of Commerce', 'body' => 'Active member of the Sofala Chamber of Commerce and Industry.'],
            ['icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z', 'title' => 'Public Liability Insurance', 'body' => 'Full coverage for all projects currently underway across the country.'],
            ['icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z', 'title' => 'Excellence Award 2023', 'body' => 'Recognised as the best construction company in central Mozambique.'],
        ],
        'cta_label' => 'Ready to Start?',
        'cta_title' => 'LET\'S BUILD TOGETHER',
        'cta_sub'   => 'Talk to us and discover how we can turn your project into reality.',
        'cta_btn1'  => 'Get a Free Quote',
        'cta_btn2'  => 'View Our Services',
    ],
];

$l   = $t[$lang] ?? $t['pt'];
$wa  = 'https://wa.me/258853592701?text=' . urlencode($lang === 'en' ? 'Hello, I would like to request a quote.' : 'Olá, gostaria de pedir um orçamento.');
$tel = 'tel:+258853592701';
?>


<!-- ════════ HERO / CABEÇALHO ════════ -->
<section class="relative overflow-hidden bg-navy pt-[54px]">

  <div class="absolute inset-0 z-0">
    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=1400&q=80&auto=format&fit=crop"
         alt="" class="w-full h-full object-cover opacity-20" loading="eager">
    <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/90 to-navy/70"></div>
    <div class="absolute inset-0 overflow-hidden">
      <div class="absolute top-0 right-0 w-2/5 h-full bg-gold opacity-[0.03] skew-x-[-6deg] translate-x-20"></div>
    </div>
  </div>

  <div class="relative z-10 max-w-6xl mx-auto px-6 md:px-8 w-full pt-16 pb-10">

    <nav class="flex items-center gap-2 text-white/40 text-xs uppercase tracking-widest mb-8 animate-fadein" style="animation-delay:.05s">
      <a href="<?= base_url('/') ?>" class="hover:text-gold transition"><?= esc($l['bc_home']) ?></a>
      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
      <span class="text-gold"><?= esc($l['bc_page']) ?></span>
    </nav>

    <div class="mb-12 animate-fadein" style="animation-delay:.15s">
      <p class="sec-label"><?= esc($l['page_label']) ?></p>
      <h1 class="font-display text-white leading-[.88]" style="font-size:clamp(2.8rem,7vw,5.5rem)">
        <?= esc($l['page_title']) ?>
      </h1>
    </div>
  </div>

  <!-- Stats -->
  <div class="relative z-10">
    <div class="max-w-6xl mx-auto px-6 md:px-8">
      <div class="grid grid-cols-2 md:grid-cols-4 bg-navy/95 backdrop-blur-sm border-t border-white/10 divide-x divide-white/10">
        <?php foreach ($l['stats'] as $s) : ?>
        <div class="px-4 md:px-6 py-5 text-center">
          <div class="font-display text-gold text-2xl md:text-3xl"><?= $s['val'] ?></div>
          <div class="text-white/40 text-[10px] uppercase tracking-widest mt-0.5"><?= esc($s['label']) ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>


<!-- ════════ HISTÓRIA ════════ -->
<section class="py-20 md:py-28 bg-white overflow-hidden">
  <div class="max-w-6xl mx-auto px-6 md:px-8">
    <div class="grid md:grid-cols-2 gap-12 md:gap-20 items-center reveal">

      <!-- Imagem -->
      <div class="relative">
        <div class="overflow-hidden" style="aspect-ratio:4/3">
          <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=900&q=80&auto=format&fit=crop"
               alt="Obras ConstrucaoMz" class="w-full h-full object-cover" loading="lazy">
        </div>
        <!-- Badge fundação -->
        <div class="absolute -bottom-5 -right-5 w-28 h-28 bg-gold flex items-center justify-center shadow-xl z-10">
          <div class="text-center text-navy">
            <div class="font-display text-2xl leading-none">2012</div>
            <div class="text-[10px] font-bold uppercase tracking-widest mt-1">Fundada</div>
          </div>
        </div>
        <div class="absolute -top-4 -left-4 w-24 h-24 border-2 border-gold/30 -z-10 hidden md:block"></div>
      </div>

      <!-- Texto -->
      <div>
        <p class="sec-label"><?= esc($l['hist_label']) ?></p>
        <h2 class="font-display text-navy leading-tight mb-6" style="font-size:clamp(1.8rem,3vw,2.6rem)">
          <?= esc($l['hist_title']) ?>
        </h2>
        <div class="space-y-4 text-gray-500 text-sm leading-relaxed font-light mb-8">
          <p class="gold-bar"><?= esc($l['hist_p1']) ?></p>
          <p><?= esc($l['hist_p2']) ?></p>
          <p><?= esc($l['hist_p3']) ?></p>
        </div>
        <a href="<?= base_url('projetos') ?>" class="btn-gold">
          <?= esc($l['hist_cta']) ?>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>


<!-- ════════ MISSÃO / VISÃO / VALORES ════════ -->
<section class="py-20 md:py-24 bg-navy text-white relative overflow-hidden">
  <div class="absolute inset-0 opacity-5 bg-pattern-dots"></div>
  <div class="max-w-6xl mx-auto px-6 md:px-8 relative z-10">

    <div class="text-center mb-14 reveal">
      <p class="sec-label"><?= esc($l['mvv_label']) ?></p>
      <h2 class="font-display text-white" style="font-size:clamp(2rem,4vw,3rem)"><?= esc($l['mvv_title']) ?></h2>
    </div>

    <div class="grid md:grid-cols-3 gap-1 reveal">
      <?php foreach ($l['mvv'] as $i => $m) : ?>
      <div class="bg-white/5 border border-white/10 p-8 hover:border-gold/40 transition-colors duration-300 group">
        <div class="w-12 h-12 bg-gold/10 flex items-center justify-center mb-6 group-hover:bg-gold/20 transition-colors">
          <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $m['icon'] ?>"/>
          </svg>
        </div>
        <h3 class="font-display text-gold text-xs tracking-[.2em] mb-4"><?= esc($m['title']) ?></h3>
        <p class="text-white/60 text-sm leading-relaxed font-light"><?= esc($m['desc']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════ DIFERENCIAIS ════════ -->
<section class="py-20 md:py-24 bg-light">
  <div class="max-w-6xl mx-auto px-6 md:px-8">

    <div class="text-center mb-14 reveal">
      <p class="sec-label mx-auto"><?= esc($l['why_label']) ?></p>
      <h2 class="font-display text-navy" style="font-size:clamp(2rem,4vw,3rem)"><?= esc($l['why_title']) ?></h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 reveal">
      <?php foreach ($l['whys'] as $i => $w) : ?>
      <div class="bg-white p-7 border border-transparent hover:border-gold/30 transition-colors duration-300 group reveal"
           style="transition-delay:<?= $i * 0.08 ?>s">
        <div class="w-10 h-10 bg-navy flex items-center justify-center mb-4 group-hover:bg-gold transition-colors duration-300">
          <svg class="w-5 h-5 text-gold group-hover:text-navy transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $w['icon'] ?>"/>
          </svg>
        </div>
        <h4 class="font-display text-navy text-base tracking-wide mb-2"><?= esc($w['title']) ?></h4>
        <p class="text-gray-500 text-sm leading-relaxed font-light"><?= esc($w['desc']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════ EQUIPA ════════ -->
<section class="py-20 md:py-28 bg-white">
  <div class="max-w-6xl mx-auto px-6 md:px-8">

    <div class="text-center mb-14 reveal">
      <p class="sec-label mx-auto"><?= esc($l['team_label']) ?></p>
      <h2 class="font-display text-navy" style="font-size:clamp(2rem,4vw,3rem)"><?= esc($l['team_title']) ?></h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 reveal">
      <?php foreach ($l['team'] as $i => $member) : ?>
      <div class="group border border-gray-100 hover:border-gold/40 transition-colors duration-300 reveal"
           style="transition-delay:<?= $i * 0.08 ?>s">
        <!-- Cabeçalho colorido -->
        <div class="bg-navy px-6 pt-8 pb-6 flex items-end gap-4">
          <div class="w-16 h-16 bg-gold flex items-center justify-center flex-shrink-0">
            <span class="font-display text-navy text-xl"><?= $member['initials'] ?></span>
          </div>
          <div>
            <div class="font-display text-white text-base tracking-wide leading-tight"><?= esc($member['name']) ?></div>
            <div class="text-gold text-[10px] uppercase tracking-widest mt-1"><?= esc($member['role']) ?></div>
          </div>
        </div>
        <!-- Corpo -->
        <div class="p-6">
          <div class="flex items-center gap-2 text-xs text-gray-400 mb-3">
            <svg class="w-3 h-3 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <?= esc($member['exp']) ?>
          </div>
          <p class="text-gray-500 text-sm leading-relaxed font-light"><?= esc($member['desc']) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════ CERTIFICAÇÕES ════════ -->
<section class="py-20 md:py-24 bg-light">
  <div class="max-w-6xl mx-auto px-6 md:px-8">

    <div class="text-center mb-14 reveal">
      <p class="sec-label mx-auto"><?= esc($l['cert_label']) ?></p>
      <h2 class="font-display text-navy" style="font-size:clamp(2rem,4vw,3rem)"><?= esc($l['cert_title']) ?></h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 reveal">
      <?php foreach ($l['certs'] as $i => $c) : ?>
      <div class="bg-white border border-gray-100 p-6 flex gap-4 items-start hover:border-gold/40 hover:shadow-sm transition-all duration-300 reveal"
           style="transition-delay:<?= $i * 0.07 ?>s">
        <div class="w-10 h-10 bg-navy flex items-center justify-center flex-shrink-0">
          <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $c['icon'] ?>"/>
          </svg>
        </div>
        <div>
          <h4 class="font-display text-navy text-sm tracking-wide mb-1"><?= esc($c['title']) ?></h4>
          <p class="text-gray-500 text-xs leading-relaxed font-light"><?= esc($c['body']) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════ CTA FINAL ════════ -->
<section class="py-20 bg-navy relative overflow-hidden">
  <div class="absolute top-0 right-0 w-96 h-96 bg-gold opacity-5 rounded-full translate-x-48 -translate-y-24"></div>
  <div class="absolute bottom-0 left-0 w-72 h-72 bg-gold opacity-5 rounded-full -translate-x-36 translate-y-20"></div>

  <div class="max-w-4xl mx-auto px-6 md:px-8 text-center relative z-10 reveal">
    <p class="sec-label mx-auto"><?= esc($l['cta_label']) ?></p>
    <h2 class="font-display text-white mb-5" style="font-size:clamp(2rem,4vw,3.2rem)">
      <?= esc($l['cta_title']) ?>
    </h2>
    <p class="text-white/50 text-sm font-light mb-10 max-w-lg mx-auto"><?= esc($l['cta_sub']) ?></p>
    <div class="flex flex-wrap gap-4 justify-center">
      <a href="<?= base_url('servicos#orcamento') ?>" class="btn-gold">
        <?= esc($l['cta_btn1']) ?>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="<?= base_url('servicos') ?>" class="btn-outline">
        <?= esc($l['cta_btn2']) ?>
      </a>
    </div>
  </div>
</section>

<?= $this->endSection() ?>