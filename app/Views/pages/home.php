<?php
/**
 * home.php
 * Full Home page: Hero, Stats, Sobre, Serviços, Projetos, Contacto CTA
 */

$copy = [
    'pt' => [
        /* HERO */
        'hero_tag'       => 'Beira · Moçambique',
        'hero_h1_a'      => 'CONSTRUÍMOS',
        'hero_h1_b'      => 'O SEU FUTURO',
        'hero_sub'       => 'Construção residencial e comercial com qualidade, rigor e compromisso. Na Beira e em todo o país.',
        'hero_cta1'      => 'Ver Serviços',
        'hero_cta2'      => 'Os Nossos Projetos',

        /* STATS */
        'stat1_num'      => '12+',
        'stat1_label'    => 'Anos de Experiência',
        'stat2_num'      => '200+',
        'stat2_label'    => 'Projectos Concluídos',
        'stat3_num'      => '98%',
        'stat3_label'    => 'Clientes Satisfeitos',
        'stat4_num'      => '50+',
        'stat4_label'    => 'Profissionais Certificados',

        /* SOBRE */
        'sobre_tag'      => 'Sobre Nós',
        'sobre_h2'       => 'Mais de uma Década a Construir Confiança',
        'sobre_p1'       => 'A ConstrucaoMz nasceu na Beira com uma missão clara: entregar obras de excelência, no prazo e dentro do orçamento. Da fundação ao acabamento, controlamos cada fase da construção com rigor técnico e transparência total.',
        'sobre_p2'       => 'A nossa equipa de engenheiros, arquitectos e mestres de obras experientes garante que cada projecto — seja uma moradia familiar, um edifício comercial ou uma unidade industrial — supera as expectativas do cliente.',
        'sobre_cta'      => 'Conhecer a Equipa',
        'sobre_badge1'   => 'Licenciados',
        'sobre_badge2'   => 'Certificados',
        'sobre_badge3'   => 'Garantia Total',

        /* SERVIÇOS */
        'servicos_tag'   => 'O Que Fazemos',
        'servicos_h2'    => 'Serviços de Construção Completos',
        'servicos_sub'   => 'Da concepção ao acabamento, oferecemos soluções integradas para todos os tipos de obra.',
        'servicos'       => [
            ['icon' => '🏠', 'title' => 'Construção Residencial',   'desc' => 'Moradias, apartamentos e condomínios construídos com materiais de primeira qualidade e acabamentos impecáveis.'],
            ['icon' => '🏢', 'title' => 'Construção Comercial',      'desc' => 'Escritórios, centros comerciais e espaços de negócio desenhados para maximizar funcionalidade e imagem.'],
            ['icon' => '🏭', 'title' => 'Construção Industrial',     'desc' => 'Armazéns, fábricas e infraestruturas industriais robustas, pensadas para eficiência e durabilidade.'],
            ['icon' => '🔨', 'title' => 'Remodelações',              'desc' => 'Transformamos espaços existentes. Desde pequenas obras até à renovação completa de edifícios.'],
            ['icon' => '📐', 'title' => 'Projecto & Consultoria',    'desc' => 'Apoio técnico desde o levantamento do terreno até à memória descritiva. Arquitectura e engenharia integradas.'],
            ['icon' => '🛡️', 'title' => 'Manutenção de Edifícios',  'desc' => 'Contratos de manutenção preventiva e correctiva para preservar o valor e a segurança da sua propriedade.'],
        ],

        /* PROJETOS */
        'projetos_tag'   => 'Portfólio',
        'projetos_h2'    => 'Obras que Falam por Si',
        'projetos_sub'   => 'Selecção de projectos entregues na Beira e em Moçambique.',
        'projetos_cta'   => 'Ver Todos os Projetos',
        'projetos'       => [
            ['cat' => 'Residencial', 'title' => 'Residências Buzi',       'loc' => 'Beira, Sofala',      'year' => '2023', 'color' => '#1A3A70'],
            ['cat' => 'Comercial',   'title' => 'Complexo Ponta Gêa',     'loc' => 'Beira, Sofala',      'year' => '2022', 'color' => '#0D1F4E'],
            ['cat' => 'Industrial',  'title' => 'Armazém Porto da Beira',  'loc' => 'Porto, Beira',       'year' => '2023', 'color' => '#2D4A80'],
            ['cat' => 'Comercial',   'title' => 'Hotel Costa do Sol',      'loc' => 'Beira, Sofala',      'year' => '2021', 'color' => '#142655'],
        ],

        /* CTA SECTION */
        'cta_h2'         => 'Pronto para Começar o Seu Projecto?',
        'cta_sub'        => 'Fale com a nossa equipa hoje. Orçamento sem compromisso na Beira e arredores.',
        'cta_btn1'       => 'Pedir Orçamento',
        'cta_btn2'       => 'Ligar Agora',

        /* CONTACTO STRIP */
        'cont_morada'    => 'Beira, Sofala, Moçambique',
        'cont_tel'       => '+258 84 000 0000',
        'cont_email'     => 'geral@construcaomz.co.mz',
        'cont_horario'   => 'Seg–Sex  7h–18h',
    ],
    'en' => [
        'hero_tag'       => 'Beira · Mozambique',
        'hero_h1_a'      => 'WE BUILD',
        'hero_h1_b'      => 'YOUR FUTURE',
        'hero_sub'       => 'Residential and commercial construction with quality, rigour, and commitment. In Beira and across the country.',
        'hero_cta1'      => 'Our Services',
        'hero_cta2'      => 'View Projects',
        'stat1_num'      => '12+',
        'stat1_label'    => 'Years of Experience',
        'stat2_num'      => '200+',
        'stat2_label'    => 'Completed Projects',
        'stat3_num'      => '98%',
        'stat3_label'    => 'Satisfied Clients',
        'stat4_num'      => '50+',
        'stat4_label'    => 'Certified Professionals',
        'sobre_tag'      => 'About Us',
        'sobre_h2'       => 'Over a Decade Building Trust',
        'sobre_p1'       => 'ConstrucaoMz was founded in Beira with a clear mission: to deliver excellent construction, on time and within budget. From foundation to finish, we control every phase with technical rigour and full transparency.',
        'sobre_p2'       => 'Our team of engineers, architects, and experienced site managers ensures that every project — residential, commercial or industrial — exceeds client expectations.',
        'sobre_cta'      => 'Meet the Team',
        'sobre_badge1'   => 'Licensed',
        'sobre_badge2'   => 'Certified',
        'sobre_badge3'   => 'Full Warranty',
        'servicos_tag'   => 'What We Do',
        'servicos_h2'    => 'Complete Construction Services',
        'servicos_sub'   => 'From concept to completion, integrated solutions for every type of project.',
        'servicos'       => [
            ['icon' => '🏠', 'title' => 'Residential Construction', 'desc' => 'Houses, apartments and condominiums built with premium materials and impeccable finishes.'],
            ['icon' => '🏢', 'title' => 'Commercial Construction',  'desc' => 'Offices, retail centres and business spaces designed for maximum functionality and image.'],
            ['icon' => '🏭', 'title' => 'Industrial Construction',  'desc' => 'Warehouses, factories and industrial infrastructure built for efficiency and durability.'],
            ['icon' => '🔨', 'title' => 'Renovations',              'desc' => 'We transform existing spaces, from minor works to complete building refurbishment.'],
            ['icon' => '📐', 'title' => 'Design & Consultancy',     'desc' => 'Technical support from site survey to specifications. Integrated architecture and engineering.'],
            ['icon' => '🛡️', 'title' => 'Building Maintenance',    'desc' => 'Preventive and corrective maintenance contracts to preserve the value and safety of your property.'],
        ],
        'projetos_tag'   => 'Portfolio',
        'projetos_h2'    => 'Works That Speak for Themselves',
        'projetos_sub'   => 'Selection of projects delivered in Beira and across Mozambique.',
        'projetos_cta'   => 'View All Projects',
        'projetos'       => [
            ['cat' => 'Residential', 'title' => 'Buzi Residences',      'loc' => 'Beira, Sofala', 'year' => '2023', 'color' => '#1A3A70'],
            ['cat' => 'Commercial',  'title' => 'Ponta Gêa Complex',    'loc' => 'Beira, Sofala', 'year' => '2022', 'color' => '#0D1F4E'],
            ['cat' => 'Industrial',  'title' => 'Port of Beira Warehouse','loc' => 'Port, Beira',  'year' => '2023', 'color' => '#2D4A80'],
            ['cat' => 'Commercial',  'title' => 'Costa do Sol Hotel',    'loc' => 'Beira, Sofala', 'year' => '2021', 'color' => '#142655'],
        ],
        'cta_h2'         => 'Ready to Start Your Project?',
        'cta_sub'        => 'Talk to our team today. Free quote in Beira and surroundings.',
        'cta_btn1'       => 'Request a Quote',
        'cta_btn2'       => 'Call Now',
        'cont_morada'    => 'Beira, Sofala, Mozambique',
        'cont_tel'       => '+258 84 000 0000',
        'cont_email'     => 'geral@construcaomz.co.mz',
        'cont_horario'   => 'Mon–Fri  7am–6pm',
    ],
];
$t = $copy[$lang ?? 'pt'];
?>

<!-- ===================================================
     1. HERO
=================================================== -->
<section id="home" class="relative min-h-screen flex items-center overflow-hidden bg-primary">

  <!-- Background: construction site atmosphere -->
  <div class="absolute inset-0 z-0">
    <!-- Geometric grid overlay -->
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(245,168,0,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(245,168,0,0.05) 1px, transparent 1px); background-size: 60px 60px;"></div>
    <!-- Diagonal dark overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary/95 to-secondary/80"></div>
    <!-- Accent glow -->
    <div class="absolute bottom-0 right-0 w-[600px] h-[600px] rounded-full bg-accent/10 blur-3xl"></div>
    <div class="absolute top-20 left-0 w-[300px] h-[300px] rounded-full bg-accent/5 blur-2xl"></div>
  </div>

  <!-- Large background blueprint number -->
  <div class="absolute right-0 top-1/2 -translate-y-1/2 text-[28vw] font-display font-black text-white/[0.03] leading-none select-none pointer-events-none" aria-hidden="true">MZ</div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 pt-32 pb-20 w-full">
    <div class="grid lg:grid-cols-2 gap-12 items-center">

      <!-- Text -->
      <div>
        <!-- Tag -->
        <div class="inline-flex items-center gap-2 bg-accent/15 border border-accent/30 text-accent text-xs font-semibold uppercase tracking-[0.2em] px-4 py-2 mb-8">
          <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
          <?= htmlspecialchars($t['hero_tag']) ?>
        </div>

        <!-- Headline -->
        <h1 class="font-display font-black text-white leading-[0.92] mb-6" style="font-size: clamp(3.5rem, 8vw, 7rem);">
          <?= htmlspecialchars($t['hero_h1_a']) ?><br>
          <span class="text-accent"><?= htmlspecialchars($t['hero_h1_b']) ?></span>
        </h1>

        <!-- Divider -->
        <div class="flex items-center gap-4 mb-6">
          <span class="gold-divider"></span>
          <span class="w-3 h-3 bg-accent transform rotate-45 flex-shrink-0"></span>
          <span class="gold-divider"></span>
        </div>

        <!-- Sub -->
        <p class="font-body text-white/70 text-lg leading-relaxed mb-10 max-w-lg">
          <?= htmlspecialchars($t['hero_sub']) ?>
        </p>

        <!-- CTAs -->
        <div class="flex flex-wrap gap-4">
          <a href="/servicos"
             class="inline-flex items-center gap-3 bg-accent text-primary font-display font-bold text-sm uppercase tracking-widest px-8 py-4 hover:bg-accent-dark transition-all duration-200 group">
            <?= htmlspecialchars($t['hero_cta1']) ?>
            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="/projetos"
             class="inline-flex items-center gap-3 border-2 border-white/30 text-white font-display font-bold text-sm uppercase tracking-widest px-8 py-4 hover:border-accent hover:text-accent transition-all duration-200 group">
            <?= htmlspecialchars($t['hero_cta2']) ?>
            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Right: stacked feature cards -->
      <div class="hidden lg:grid grid-cols-2 gap-4">
        <?php
        $features = [
            ['num' => '12+', 'label' => $t['stat1_label'], 'icon' => '📅'],
            ['num' => '200+','label' => $t['stat2_label'], 'icon' => '🏗️'],
            ['num' => '98%', 'label' => $t['stat3_label'], 'icon' => '⭐'],
            ['num' => '50+', 'label' => $t['stat4_label'], 'icon' => '👷'],
        ];
        foreach ($features as $i => $f):
        ?>
          <div class="bg-white/5 border border-white/10 backdrop-blur-sm p-6 flex flex-col gap-2 hover:border-accent/40 transition group <?= $i === 1 ? 'mt-6' : '' ?> <?= $i === 3 ? 'mt-6' : '' ?>">
            <span class="text-3xl"><?= $f['icon'] ?></span>
            <span class="font-display font-black text-accent text-4xl leading-none group-hover:scale-105 transition-transform"><?= $f['num'] ?></span>
            <span class="font-body text-white/60 text-sm leading-tight"><?= htmlspecialchars($f['label']) ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <!-- Scroll indicator -->
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-2 text-white/40 text-xs font-body tracking-widest uppercase">
    <span>Scroll</span>
    <div class="w-px h-10 bg-gradient-to-b from-white/30 to-transparent"></div>
  </div>
</section>


<!-- ===================================================
     2. STATS BAR (mobile)
=================================================== -->
<section class="bg-secondary py-10 lg:hidden">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-2 gap-6">
      <?php
      $stats = [
          ['num' => $t['stat1_num'], 'label' => $t['stat1_label']],
          ['num' => $t['stat2_num'], 'label' => $t['stat2_label']],
          ['num' => $t['stat3_num'], 'label' => $t['stat3_label']],
          ['num' => $t['stat4_num'], 'label' => $t['stat4_label']],
      ];
      foreach ($stats as $s):
      ?>
        <div class="text-center reveal stagger-child">
          <div class="font-display font-black text-accent text-4xl leading-none"><?= $s['num'] ?></div>
          <div class="font-body text-white/60 text-sm mt-1"><?= htmlspecialchars($s['label']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ===================================================
     3. SOBRE NÓS
=================================================== -->
<section id="sobre" class="py-24 bg-light">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-16 items-center">

      <!-- Visual side -->
      <div class="relative reveal">
        <!-- Main image placeholder -->
        <div class="relative z-10 bg-secondary aspect-[4/3] flex items-center justify-center overflow-hidden group">
          <img src="/assets/images/sobre-obra.jpg" alt="Equipa ConstrucaoMz em obra"
               class="w-full h-full object-cover opacity-70 group-hover:opacity-90 transition-opacity duration-500"
               onerror="this.parentElement.innerHTML='<div class=\'w-full h-full flex flex-col items-center justify-center gap-4\'><span class=\'text-7xl\'>🏗️</span><span class=\'text-white/50 font-body text-sm\'>ConstrucaoMz · Beira</span></div>'">
          <!-- Gold corner accent -->
          <div class="absolute top-0 left-0 w-16 h-16 border-t-4 border-l-4 border-accent"></div>
          <div class="absolute bottom-0 right-0 w-16 h-16 border-b-4 border-r-4 border-accent"></div>
        </div>
        <!-- Floating badge -->
        <div class="absolute -bottom-6 -right-6 lg:-right-10 bg-accent text-primary p-6 z-20 shadow-xl">
          <div class="font-display font-black text-4xl leading-none">12+</div>
          <div class="font-body font-semibold text-xs uppercase tracking-widest mt-1"><?= htmlspecialchars($t['stat1_label']) ?></div>
        </div>
        <!-- Background square -->
        <div class="absolute inset-0 translate-x-4 translate-y-4 bg-primary/20 -z-0"></div>
      </div>

      <!-- Text side -->
      <div class="reveal">
        <div class="inline-flex items-center gap-2 text-accent font-body font-semibold text-xs uppercase tracking-[0.2em] mb-4">
          <span class="gold-divider w-8"></span>
          <?= htmlspecialchars($t['sobre_tag']) ?>
        </div>
        <h2 class="font-display font-black text-primary text-4xl lg:text-5xl leading-tight mb-6">
          <?= htmlspecialchars($t['sobre_h2']) ?>
        </h2>
        <p class="font-body text-steel text-base leading-relaxed mb-4">
          <?= htmlspecialchars($t['sobre_p1']) ?>
        </p>
        <p class="font-body text-steel text-base leading-relaxed mb-8">
          <?= htmlspecialchars($t['sobre_p2']) ?>
        </p>

        <!-- Badges -->
        <div class="flex flex-wrap gap-3 mb-8">
          <?php foreach ([$t['sobre_badge1'], $t['sobre_badge2'], $t['sobre_badge3']] as $badge): ?>
            <span class="inline-flex items-center gap-2 bg-primary text-white font-body text-xs font-semibold uppercase tracking-widest px-4 py-2">
              <svg class="w-3.5 h-3.5 text-accent flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
              </svg>
              <?= htmlspecialchars($badge) ?>
            </span>
          <?php endforeach; ?>
        </div>

        <a href="/sobre"
           class="inline-flex items-center gap-3 bg-primary text-white font-display font-bold text-sm uppercase tracking-widest px-8 py-4 hover:bg-secondary transition group">
          <?= htmlspecialchars($t['sobre_cta']) ?>
          <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
          </svg>
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ===================================================
     4. SERVIÇOS
=================================================== -->
<section id="servicos" class="py-24 bg-primary texture-overlay">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Header -->
    <div class="text-center mb-16 reveal">
      <div class="inline-flex items-center gap-2 text-accent font-body font-semibold text-xs uppercase tracking-[0.2em] mb-4">
        <span class="gold-divider w-8"></span>
        <?= htmlspecialchars($t['servicos_tag']) ?>
        <span class="gold-divider w-8"></span>
      </div>
      <h2 class="font-display font-black text-white text-4xl lg:text-5xl leading-tight mb-4">
        <?= htmlspecialchars($t['servicos_h2']) ?>
      </h2>
      <p class="font-body text-white/60 text-base max-w-xl mx-auto">
        <?= htmlspecialchars($t['servicos_sub']) ?>
      </p>
    </div>

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 reveal">
      <?php foreach ($t['servicos'] as $i => $srv): ?>
        <div class="stagger-child card-lift bg-secondary/50 border border-white/10 p-8 hover:border-accent/50 group cursor-default">
          <div class="text-4xl mb-4"><?= $srv['icon'] ?></div>
          <h3 class="font-display font-bold text-white text-xl uppercase tracking-wide mb-3 group-hover:text-accent transition">
            <?= htmlspecialchars($srv['title']) ?>
          </h3>
          <div class="w-8 h-0.5 bg-accent mb-4 group-hover:w-16 transition-all duration-300"></div>
          <p class="font-body text-white/60 text-sm leading-relaxed">
            <?= htmlspecialchars($srv['desc']) ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ===================================================
     5. PROJETOS
=================================================== -->
<section id="projetos" class="py-24 bg-concrete">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14 reveal">
      <div>
        <div class="inline-flex items-center gap-2 text-accent font-body font-semibold text-xs uppercase tracking-[0.2em] mb-4">
          <span class="gold-divider w-8"></span>
          <?= htmlspecialchars($t['projetos_tag']) ?>
        </div>
        <h2 class="font-display font-black text-primary text-4xl lg:text-5xl leading-tight">
          <?= htmlspecialchars($t['projetos_h2']) ?>
        </h2>
        <p class="font-body text-steel text-base mt-2"><?= htmlspecialchars($t['projetos_sub']) ?></p>
      </div>
      <a href="/projetos"
         class="flex-shrink-0 inline-flex items-center gap-3 border-2 border-primary text-primary font-display font-bold text-sm uppercase tracking-widest px-6 py-3 hover:bg-primary hover:text-white transition group">
        <?= htmlspecialchars($t['projetos_cta']) ?>
        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
        </svg>
      </a>
    </div>

    <!-- Project cards -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
      <?php foreach ($t['projetos'] as $p): ?>
        <div class="stagger-child card-lift group cursor-pointer relative overflow-hidden">
          <!-- Image / Colour block -->
          <div class="aspect-[3/4] relative overflow-hidden"
               style="background: <?= htmlspecialchars($p['color']) ?>;">
            <!-- pattern -->
            <div class="absolute inset-0 opacity-10" style="background-image: repeating-linear-gradient(45deg, #fff 0, #fff 1px, transparent 0, transparent 50%); background-size: 20px 20px;"></div>
            <!-- building icon -->
            <div class="absolute inset-0 flex flex-col items-center justify-center gap-2 text-white/20">
              <svg class="w-20 h-20" fill="currentColor" viewBox="0 0 24 24">
                <path d="M3 21h18v-2H3v2zm0-4h18v-2H3v2zm0-4h18v-2H3v2zm0-4h18V7H3v2zm0-6v2h18V3H3z"/>
              </svg>
            </div>
            <!-- hover overlay -->
            <div class="absolute inset-0 bg-accent/0 group-hover:bg-accent/10 transition-all duration-300"></div>
            <!-- top label -->
            <div class="absolute top-4 left-4">
              <span class="bg-accent text-primary font-body font-bold text-xs uppercase tracking-widest px-3 py-1">
                <?= htmlspecialchars($p['cat']) ?>
              </span>
            </div>
          </div>
          <!-- Info -->
          <div class="bg-white p-5 border-b-4 border-transparent group-hover:border-accent transition-all duration-300">
            <h3 class="font-display font-bold text-primary text-lg uppercase tracking-wide leading-tight mb-1">
              <?= htmlspecialchars($p['title']) ?>
            </h3>
            <div class="flex items-center justify-between mt-2">
              <span class="font-body text-steel text-xs flex items-center gap-1">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                </svg>
                <?= htmlspecialchars($p['loc']) ?>
              </span>
              <span class="font-body text-steel text-xs"><?= htmlspecialchars($p['year']) ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ===================================================
     6. CTA BAND
=================================================== -->
<section class="py-20 bg-accent relative overflow-hidden">
  <!-- Diagonal accent -->
  <div class="absolute inset-0" style="background: repeating-linear-gradient(-45deg, rgba(0,0,0,0.04) 0, rgba(0,0,0,0.04) 2px, transparent 0, transparent 10px);"></div>
  <div class="relative max-w-4xl mx-auto px-6 text-center reveal">
    <h2 class="font-display font-black text-primary text-4xl lg:text-6xl uppercase leading-tight mb-4">
      <?= htmlspecialchars($t['cta_h2']) ?>
    </h2>
    <p class="font-body text-primary/70 text-lg mb-10">
      <?= htmlspecialchars($t['cta_sub']) ?>
    </p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="/contacto"
         class="inline-flex items-center gap-3 bg-primary text-white font-display font-bold text-sm uppercase tracking-widest px-10 py-4 hover:bg-secondary transition group">
        <?= htmlspecialchars($t['cta_btn1']) ?>
        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
        </svg>
      </a>
      <a href="tel:+258840000000"
         class="inline-flex items-center gap-3 border-2 border-primary/40 text-primary font-display font-bold text-sm uppercase tracking-widest px-10 py-4 hover:border-primary transition">
        <?= htmlspecialchars($t['cta_btn2']) ?>
      </a>
    </div>
  </div>
</section>


<!-- ===================================================
     7. CONTACTO STRIP
=================================================== -->
<section id="contacto" class="bg-secondary py-14">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 text-white">
      <?php
      $contact_items = [
          ['icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z', 'label' => 'Morada', 'value' => $t['cont_morada']],
          ['icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'label' => 'Telefone', 'value' => $t['cont_tel']],
          ['icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'label' => 'Email', 'value' => $t['cont_email']],
          ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => 'Horário', 'value' => $t['cont_horario']],
      ];
      foreach ($contact_items as $item):
      ?>
        <div class="flex items-start gap-4 reveal stagger-child">
          <div class="flex-shrink-0 w-10 h-10 bg-accent/15 flex items-center justify-center mt-0.5">
            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?= $item['icon'] ?>"/>
            </svg>
          </div>
          <div>
            <div class="font-display font-bold text-accent text-xs uppercase tracking-widest mb-1"><?= $item['label'] ?></div>
            <div class="font-body text-white/80 text-sm"><?= htmlspecialchars($item['value']) ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>