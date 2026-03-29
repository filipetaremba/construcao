<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?php
/**
 * app/Views/pages/home.php
 *
 * Extende layouts/main.php
 * Variáveis disponíveis (herdadas do layout):
 *   $lang         (string)
 *   $current_page (string)
 */
$lang = $lang ?? get_cookie('lang') ?? 'pt';
?>

<!-- ════════ HERO ════════ -->
<section id="hero" class="relative min-h-screen flex items-center overflow-hidden bg-navy">

  <!-- Imagem de fundo -->
  <div class="absolute inset-0 z-0">
    <img src="<?= base_url('assets/images/hero-bg.jpeg') ?>"
         alt="" class="w-full h-full object-cover opacity-40" loading="eager">
    <div class="absolute inset-0 bg-gradient-to-r from-navy/70 via-navy/40 to-navy/10"></div>
    <!-- Acento diagonal decorativo -->
    <div class="absolute inset-0 overflow-hidden">
      <div class="absolute top-0 right-0 w-1/3 h-full bg-gold opacity-[0.04] skew-x-[-8deg] translate-x-12"></div>
    </div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-8 w-full pt-24 pb-32">
    <div class="max-w-2xl">
      <p class="sec-label mb-5 animate-fadein" style="animation-delay:.1s"></p>
      <h1 class="font-display text-white leading-[.88] mb-6 animate-fadein"
          style="font-size:clamp(3.2rem,8vw,7.2rem);animation-delay:.2s">
        <br>
        ESPECIALISTAS<br>
        EM <span class="text-gold">CONSTRUÇÃO</span>
      </h1>
      <p class="text-white/60 text-base leading-relaxed mb-10 max-w-md font-light animate-fadein"
         style="animation-delay:.35s">
        Construção residencial, comercial e industrial com qualidade, rigor e compromisso na Beira e em todo Moçambique.
      </p>
      <div class="flex flex-wrap gap-4 animate-fadein" style="animation-delay:.5s">
        <a href="#servicos" class="btn-gold">
          Os Nossos Serviços
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        <a href="#orcamento" class="btn-outline">Pedir Orçamento</a>
      </div>
    </div>
  </div>

  <!-- Tira de estatísticas -->
  <!-- <div class="absolute bottom-0 left-0 right-0 z-10 animate-fadein" style="animation-delay:.7s">
    <div class="max-w-6xl mx-auto px-6 md:px-8">
      <div class="grid grid-cols-3 bg-navy/90 backdrop-blur-sm border-t border-white/10 divide-x divide-white/10">
        <div class="px-4 md:px-8 py-5 text-center">
          <div class="font-display text-gold text-3xl md:text-4xl counter" data-target="12">0</div>
          <div class="text-white/50 text-[10px] mt-1 uppercase tracking-widest">Anos de<br class="md:hidden"> Experiência</div>
        </div>
        <div class="px-4 md:px-8 py-5 text-center">
          <div class="font-display text-gold text-3xl md:text-4xl counter" data-target="200">0</div>
          <div class="text-white/50 text-[10px] mt-1 uppercase tracking-widest">Projectos<br class="md:hidden"> Concluídos</div>
        </div>
        <div class="px-4 md:px-8 py-5 text-center">
          <div class="font-display text-gold text-3xl md:text-4xl">98%</div>
          <div class="text-white/50 text-[10px] mt-1 uppercase tracking-widest">Clientes<br class="md:hidden"> Satisfeitos</div>
        </div>
      </div>
    </div>
  </div> -->
</section>


<!-- ════════ SOBRE NÓS ════════ -->
<section id="sobre" class="py-20 md:py-28 bg-white overflow-hidden">
  <div class="max-w-6xl mx-auto px-6 md:px-8">
    <div class="grid md:grid-cols-2 gap-12 md:gap-20 items-center">

      <!-- Coluna imagem -->
      <div class="reveal relative">
        <a href="<?= base_url('sobre') ?>" class="block overflow-hidden group" style="aspect-ratio:4/3">
          <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=900&q=80&auto=format&fit=crop"
               alt="Equipa ConstrucaoMz em obra"
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
        </a>
        <!-- Badge anos -->
        <div class="absolute -bottom-5 -right-5 w-24 h-24 bg-gold flex items-center justify-center shadow-xl z-10">
          <div class="text-center text-navy">
            <div class="font-display text-3xl leading-none">12+</div>
            <div class="text-[10px] font-bold uppercase tracking-widest">Anos</div>
          </div>
        </div>
        <!-- Borda decorativa -->
        <div class="absolute -top-4 -left-4 w-24 h-24 border-2 border-gold/30 -z-10"></div>
      </div>

      <!-- Coluna texto -->
      <div class="reveal">
        <p class="sec-label">Quem Somos</p>
        <h2 class="font-display text-navy leading-tight mb-6" style="font-size:clamp(2rem,4vw,3rem)">
          MAIS DE UMA DÉCADA<br>A CONSTRUIR CONFIANÇA
        </h2>
        <div class="gold-bar mb-8">
          <p class="text-gray-500 text-base leading-relaxed font-light">
            A ConstrucaoMz nasceu na Beira com uma missão clara: entregar obras de excelência, no prazo e dentro do orçamento. Da fundação ao acabamento, controlamos cada fase com rigor técnico e transparência total. acabamento, controlamos cada fase com rigor técnico e transparência totalacabamentoo 
          </p>
        </div>

        <!-- <div class="grid grid-cols-3 gap-4 mb-8">
          <?php
          $badges = [
            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>', 'label' => 'Licenciados'],
            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>', 'label' => 'Certificados'],
            ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>', 'label' => 'Garantia'],
          ];
          foreach ($badges as $b) : ?>
          <div class="text-center p-4 bg-light">
            <div class="w-10 h-10 bg-navy flex items-center justify-center mx-auto mb-2">
              <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><?= $b['icon'] ?></svg>
            </div>
            <div class="text-navy text-[10px] font-bold uppercase tracking-wide"><?= $b['label'] ?></div>
          </div>
          <?php endforeach; ?>
        </div> -->

        <a href="<?= base_url('sobre') ?>" class="btn-gold">
          Saber Mais
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ════════ SERVIÇOS ════════ -->
<section id="servicos" class="py-20 md:py-28 bg-light">
  <div class="max-w-6xl mx-auto px-6 md:px-8">

    <div class="text-center mb-14 reveal">
      <p class="sec-label mx-auto">O Que Fazemos</p>
      <h2 class="font-display text-navy" style="font-size:clamp(2rem,4vw,3rem)">
        SERVIÇOS COMPLETOS<br>DE CONSTRUÇÃO
      </h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-1 reveal">
      <?php
      $services = [
        ['icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',           'title' => 'RESIDENCIAL', 'desc' => 'Moradias e apartamentos com materiais de primeira qualidade e acabamentos de excelência.',    'link' => '/servicos#residencial'],
        ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',             'title' => 'COMERCIAL',   'desc' => 'Escritórios e espaços de negócio projetados para maximizar a produtividade e imagem.',  'link' => '/servicos#comercial'],
        ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16M3 21h18M9 7h1m-1 4h1m4-4h1m-1 4h1M5 21V9l4-4v6l4-4v4',                                                              'title' => 'INDUSTRIAL',  'desc' => 'Armazéns e infraestruturas robustas para o setor industrial e logístico.',              'link' => '/servicos#industrial'],
        ['icon' => 'M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z', 'title' => 'REMODELAÇÃO', 'desc' => 'Renovação completa de espaços existentes com acabamento impecável e moderno.',          'link' => '/servicos#remodelacao'],
      ];
      foreach ($services as $i => $s) : ?>
      <a href="<?= base_url(ltrim($s['link'], '/')) ?>"
         class="svc-card bg-white p-8 flex flex-col gap-4 group relative overflow-hidden reveal"
         style="transition-delay:<?= $i * 0.1 ?>s">
        <div class="absolute inset-x-0 bottom-0 h-1 bg-gold transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
        <div class="w-12 h-12 bg-navy flex items-center justify-center flex-shrink-0 group-hover:bg-gold transition-colors duration-300">
          <svg class="w-5 h-5 text-gold group-hover:text-navy transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $s['icon'] ?>"/>
          </svg>
        </div>
        <div>
          <h3 class="font-display text-navy text-xl tracking-wide mb-2"><?= $s['title'] ?></h3>
          <p class="text-gray-500 text-sm leading-relaxed font-light"><?= $s['desc'] ?></p>
        </div>
        <div class="mt-auto flex items-center gap-1 text-gold text-xs font-bold uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          Ver mais
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
          </svg>
        </div>
      </a>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-10 reveal">
      <a href="<?= base_url('servicos') ?>" class="btn-outline-dark">
        Todos os Serviços
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>

  </div>
</section>


<!-- ════════ PROJETOS ════════ -->
<section id="projetos" class="py-20 md:py-28 bg-white">
  <div class="max-w-6xl mx-auto px-6 md:px-8">

    <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-14 gap-4 reveal">
      <div>
        <p class="sec-label">Portfólio</p>
        <h2 class="font-display text-navy" style="font-size:clamp(2rem,4vw,3rem)">OBRAS EM DESTAQUE</h2>
      </div>
      <a href="<?= base_url('projetos') ?>"
         class="flex items-center gap-2 text-navy text-sm font-bold uppercase tracking-widest hover:text-gold transition group">
        Ver Todos
        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>

    <?php
    $projects = [
      ['slug' => 'residencias-buzi',    'img' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1000&q=80&auto=format&fit=crop', 'alt' => 'Residências Buzi',       'tag' => 'Residencial', 'title' => 'RESIDÊNCIAS BUZI',        'loc' => 'Beira, Sofala · 2023', 'col' => 'md:col-span-2', 'ratio' => '16/9'],
      ['slug' => 'complexo-ponta-gea',  'img' => 'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=700&q=80&auto=format&fit=crop',  'alt' => 'Complexo Ponta Gêa',    'tag' => 'Comercial',   'title' => 'COMPLEXO PONTA GÊA',      'loc' => 'Beira · 2022',         'col' => '',              'ratio' => '9/10'],
      ['slug' => 'armazem-porto-beira', 'img' => 'https://images.unsplash.com/photo-1565008447742-97f6f38c985c?w=700&q=80&auto=format&fit=crop',  'alt' => 'Armazém Porto da Beira','tag' => 'Industrial',  'title' => 'ARMAZÉM PORTO DA BEIRA',  'loc' => 'Porto, Beira · 2023',  'col' => '',              'ratio' => '4/3'],
      ['slug' => 'hotel-costa-do-sol',  'img' => 'https://images.unsplash.com/photo-1590856029826-c7a73142bbf1?w=1000&q=80&auto=format&fit=crop', 'alt' => 'Hotel Costa do Sol',    'tag' => 'Comercial',   'title' => 'HOTEL COSTA DO SOL',      'loc' => 'Beira, Sofala · 2021', 'col' => 'md:col-span-2', 'ratio' => '16/7'],
    ];
    ?>

    <div class="grid md:grid-cols-3 gap-4 reveal">
      <?php foreach ($projects as $p) : ?>
      <a href="<?= base_url('projetos/') ?>"
         class="proj-card <?= $p['col'] ?> relative overflow-hidden cursor-pointer group block"
         style="aspect-ratio:<?= $p['ratio'] ?>">
        <img src="<?= $p['img'] ?>" alt="<?= esc($p['alt']) ?>"
             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
        <div class="overlay absolute inset-0"></div>
        <div class="absolute bottom-0 left-0 p-6">
          <span class="bg-gold text-navy text-[10px] font-bold uppercase tracking-widest px-2 py-1 mb-2 inline-block"><?= $p['tag'] ?></span>
          <h3 class="font-display text-white text-xl md:text-2xl tracking-wide"><?= $p['title'] ?></h3>
          <p class="text-white/60 text-xs mt-1 flex items-center gap-1">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <?= $p['loc'] ?>
          </p>
        </div>
        <div class="absolute top-4 right-4 w-8 h-8 bg-gold flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <svg class="w-4 h-4 text-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
          </svg>
        </div>
      </a>
      <?php endforeach; ?>
    </div>

    <div class="md:hidden mt-8 text-center">
      <a href="<?= base_url('projetos') ?>" class="btn-gold">
        Ver Todos os Projetos
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>

  </div>
</section>


<!-- ════════ PROCESSO DE TRABALHO ════════ -->
<section class="py-20 bg-navy text-white relative overflow-hidden">
  <div class="absolute inset-0 opacity-5 bg-pattern-dots"></div>

  <div class="max-w-6xl mx-auto px-6 md:px-8 relative z-10">
    <div class="text-center mb-14 reveal">
      <p class="sec-label">Porquê Escolher-nos</p>
      <h2 class="font-display text-white" style="font-size:clamp(2rem,4vw,3rem)">
        O NOSSO PROCESSO DE TRABALHO
      </h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 reveal">
      <?php
      $steps = [
        ['num' => '01', 'title' => 'Consulta Inicial', 'desc' => 'Reunião gratuita para entender os seus objetivos, prazo e orçamento disponível.'],
        ['num' => '02', 'title' => 'Projecto & Plano',  'desc' => 'Elaboramos o projeto técnico, estimativas detalhadas e cronograma de obra.'],
        ['num' => '03', 'title' => 'Execução',          'desc' => 'Construção controlada com supervisão diária, relatórios semanais ao cliente.'],
        ['num' => '04', 'title' => 'Entrega & Garantia','desc' => 'Entrega com vistoria rigorosa e garantia de 5 anos em estrutura.'],
      ];
      foreach ($steps as $i => $step) : ?>
      <div class="relative reveal" style="transition-delay:<?= $i * 0.12 ?>s">
        <div class="font-display text-gold/20 text-8xl absolute -top-4 -left-2 leading-none select-none"><?= $step['num'] ?></div>
        <div class="relative z-10 pt-6">
          <div class="w-10 h-1 bg-gold mb-4"></div>
          <h3 class="font-display text-white text-xl tracking-wide mb-3"><?= $step['title'] ?></h3>
          <p class="text-white/50 text-sm leading-relaxed font-light"><?= $step['desc'] ?></p>
        </div>
        <?php if ($i < 3) : ?>
        <div class="hidden lg:block absolute top-8 -right-4 w-8 h-px bg-white/20"></div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════ DEPOIMENTOS ════════ -->
<section id="depoimentos" class="py-20 md:py-28 bg-white">
  <div class="max-w-6xl mx-auto px-6 md:px-8">

    <div class="text-center mb-14 reveal">
      <p class="sec-label mx-auto">Testemunhos</p>
      <h2 class="font-display text-navy" style="font-size:clamp(2rem,4vw,3rem)">
        O QUE DIZEM OS NOSSOS CLIENTES
      </h2>
    </div>

    <div class="grid md:grid-cols-3 gap-6 reveal" id="testimonials-grid">
      <?php
      $testimonials = [
        [
          'text' => 'A ConstrucaoMz superou todas as expectativas. Entregaram a nossa moradia antes do prazo e a qualidade é impecável. Recomendo a toda a gente.',
          'name' => 'Carlos Nhantumbo',
          'role' => 'Empresário · Beira',
          'rating' => 5,
          'image' => 'assets/images/carlos.webp'
        ],
        [
          'text' => 'Profissionalismo de nível mundial. Da fase de projecto à entrega final, comunicação perfeita e zero surpresas no orçamento. Parabéns à equipa!',
          'name' => 'Fátima Machava',
          'role' => 'Directora Financeira · Sofala',
          'rating' => 5,
          'image' => 'assets/images/fatima.webp'
        ],
        [
          'text' => 'Construímos o nosso armazém industrial com a ConstrucaoMz. Robustez, pontualidade e preço justo. Já contratámos para o segundo projecto.',
          'name' => 'João Pereira',
          'role' => 'Gestor de Logística · Beira',
          'rating' => 5,
          'image' => 'assets/images/joao.webp'
        ],
      ];
      foreach ($testimonials as $i => $t) : ?>
      <div class="bg-light p-8 relative reveal" style="transition-delay:<?= $i * 0.12 ?>s">
        <div class="font-display text-gold text-7xl leading-none absolute top-4 right-6 opacity-20 select-none">"</div>
        <div class="flex gap-1 mb-4">
          <?php for ($s = 0; $s < $t['rating']; $s++) : ?>
          <svg class="w-4 h-4 text-gold" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <?php endfor; ?>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed mb-6 font-light italic relative z-10">
          "<?= esc($t['text']) ?>"
        </p>
        <div class="flex items-center gap-3 pt-4 border-t border-gray-200">
          <div class="w-10 h-10 flex-shrink-0 overflow-hidden rounded-full">
            <img src="<?= base_url($t['image']) ?>" 
                alt="<?= esc($t['name']) ?>" 
                class="w-full h-full object-cover">
          </div>
          <div>
            <div class="font-bold text-navy text-sm"><?= esc($t['name']) ?></div>
            <div class="text-gray-400 text-xs"><?= esc($t['role']) ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Dots slider (mobile) -->
    <div class="flex justify-center gap-2 mt-6 md:hidden" id="testimonial-dots">
      <button class="w-2 h-2 rounded-full bg-gold" data-idx="0"></button>
      <button class="w-2 h-2 rounded-full bg-gray-300" data-idx="1"></button>
      <button class="w-2 h-2 rounded-full bg-gray-300" data-idx="2"></button>
    </div>

  </div>
</section>


<!-- ════════ PARCEIROS ════════ -->
<section class="py-12 bg-light border-t border-gray-200">
  <div class="max-w-6xl mx-auto px-6 md:px-8">
    <p class="text-center text-gray-400 text-xs uppercase tracking-widest mb-8">Clientes & Parceiros de Confiança</p>
    <div class="flex flex-wrap items-center justify-center gap-10 md:gap-16 opacity-50 grayscale reveal">
      <span class="font-display text-lg text-steel tracking-wider">EMPRESA A</span>
      <span class="font-display text-lg text-steel tracking-wider">EMPRESA B</span>
      <span class="font-display text-lg text-steel tracking-wider">EMPRESA C</span>
      <span class="font-display text-lg text-steel tracking-wider">EMPRESA D</span>
      <span class="font-display text-lg text-steel tracking-wider">EMPRESA E</span>
    </div>
  </div>
</section>


<!-- ════════ FORMULÁRIO DE ORÇAMENTO ════════ -->
<section id="orcamento" class="py-20 md:py-28 bg-navy relative overflow-hidden">
  <div class="absolute top-0 right-0 w-96 h-96 bg-gold opacity-5 rounded-full translate-x-48 -translate-y-24"></div>

  <div class="max-w-6xl mx-auto px-6 md:px-8 relative z-10">
    <div class="grid lg:grid-cols-5 gap-12 md:gap-16 items-start">

      <!-- Info lateral -->
      <div class="lg:col-span-2 reveal">
        <p class="sec-label">Orçamento Grátis</p>
        <h2 class="font-display text-white leading-tight mb-6" style="font-size:clamp(2rem,3.5vw,3rem)">
          PRONTO PARA<br>COMEÇAR O SEU<br><span class="text-gold">PROJECTO?</span>
        </h2>
        <p class="text-white/50 text-sm leading-relaxed mb-8 font-light">
          Envie-nos os detalhes. A nossa equipa responde em menos de 24 horas com um orçamento personalizado, sem qualquer compromisso.
        </p>

        <div class="space-y-4 mb-10">
          <?php
          $promises = [
            'Resposta em menos de 24 horas',
            'Orçamento 100% gratuito e sem compromisso',
            'Visita técnica ao local se necessário',
          ];
          foreach ($promises as $p) : ?>
          <div class="flex items-center gap-3">
            <div class="w-2 h-2 bg-gold rounded-full flex-shrink-0"></div>
            <span class="text-white/70 text-sm"><?= $p ?></span>
          </div>
          <?php endforeach; ?>
        </div>

        <div class="pt-8 border-t border-white/10 space-y-3">
          <a href="tel:+258853592701" class="flex items-center gap-3 hover:text-gold transition text-white">
            <svg class="w-4 h-4 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            <span class="text-sm">+258 85 359 2701</span>
          </a>
          <a href="mailto:geral@construcaomz.co.mz" class="flex items-center gap-3 hover:text-gold transition text-white">
            <svg class="w-4 h-4 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <span class="text-sm">geral@construcaomz.co.mz</span>
          </a>
        </div>
      </div>

      <!-- Formulário -->
      <div class="lg:col-span-3 reveal">
        <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 md:p-10">

          <?php if (session()->has('form_success')) : ?>
          <div class="bg-green-500/20 border border-green-400/30 text-green-300 text-sm p-4 mb-6 flex items-center gap-2">
            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            Mensagem enviada com sucesso! Entraremos em contacto em breve.
          </div>
          <?php endif; ?>

          <form action="<?= base_url('contacto/enviar') ?>" method="post" id="home-quote-form" novalidate>
           <input type="hidden" name="redirect_back" value="<?= base_url('/') ?>#orcamento">
            <div class="grid sm:grid-cols-2 gap-5 mb-5">
              <div>
                <label class="field-label">Nome *</label>
                <input type="text" name="nome" required placeholder="O seu nome"
                       value="<?= old('nome') ?>" class="field">
                <?php if (isset($validation) && $validation->hasError('nome')) : ?>
                  <p class="text-red-400 text-xs mt-1"><?= $validation->getError('nome') ?></p>
                <?php endif; ?>
              </div>
              <div>
                <label class="field-label">Empresa</label>
                <input type="text" name="empresa" placeholder="Nome da empresa"
                       value="<?= old('empresa') ?>" class="field">
              </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-5 mb-5">
              <div>
                <label class="field-label">Email *</label>
                <input type="email" name="email" required placeholder="email@exemplo.com"
                       value="<?= old('email') ?>" class="field">
                <?php if (isset($validation) && $validation->hasError('email')) : ?>
                  <p class="text-red-400 text-xs mt-1"><?= $validation->getError('email') ?></p>
                <?php endif; ?>
              </div>
              <div>
                <label class="field-label">Telefone</label>
                <input type="tel" name="telefone" placeholder="+258 00 000 0000"
                       value="<?= old('telefone') ?>" class="field">
              </div>
            </div>

            <div class="mb-5">
              <label class="field-label">Tipo de Projecto *</label>
              <select name="tipo" required class="field">
                <option value="" disabled <?= old('tipo') ? '' : 'selected' ?>>Seleccione o tipo de obra</option>
                <?php
                $tipos = [
                    'residencial' => 'Construção Residencial',
                    'comercial'   => 'Construção Comercial',
                    'industrial'  => 'Construção Industrial',
                    'remodelacao' => 'Remodelação',
                    'consultoria' => 'Projecto & Consultoria',
                    'outro'       => 'Outro',
                ];
                foreach ($tipos as $val => $label) : ?>
                <option value="<?= $val ?>" <?= old('tipo') === $val ? 'selected' : '' ?>><?= $label ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="mb-5">
              <label class="field-label">Localização da Obra</label>
              <input type="text" name="localizacao" placeholder="Cidade / Bairro"
                     value="<?= old('localizacao') ?>" class="field">
            </div>

            <div class="mb-6">
              <label class="field-label">Mensagem *</label>
              <textarea name="mensagem" required rows="4"
                        placeholder="Descreva brevemente o seu projecto, dimensão estimada, prazo, etc."
                        class="field resize-none"><?= old('mensagem') ?></textarea>
              <?php if (isset($validation) && $validation->hasError('mensagem')) : ?>
                <p class="text-red-400 text-xs mt-1"><?= $validation->getError('mensagem') ?></p>
              <?php endif; ?>
            </div>

            <?= csrf_field() ?>

            <button type="submit" class="btn-gold w-full justify-center py-4 text-base">
              PEDIR ORÇAMENTO GRATUITO
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
              </svg>
            </button>

            <p class="text-white/25 text-[11px] text-center mt-4">
              Os seus dados são tratados com total confidencialidade.
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
// ── Contadores animados ──
(function () {
  const counters = document.querySelectorAll('.counter');
  if (!counters.length) return;
  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el     = entry.target;
      const target = parseInt(el.dataset.target);
      let current  = 0;
      const step   = Math.ceil(target / 60);
      const timer  = setInterval(() => {
        current = Math.min(current + step, target);
        el.textContent = current + (current >= target ? '+' : '');
        if (current >= target) clearInterval(timer);
      }, 20);
      io.unobserve(el);
    });
  }, { threshold: 0.5 });
  counters.forEach(c => io.observe(c));
})();

// ── Slider de testemunhos (mobile) ──
(function () {
  const cards = document.querySelectorAll('#testimonials-grid > div');
  const dots  = document.querySelectorAll('#testimonial-dots button');
  if (!cards.length || window.innerWidth >= 768) return;
  let active = 0;
  cards.forEach((c, i) => { c.style.display = i === 0 ? '' : 'none'; });
  dots.forEach((d, i) => {
    d.addEventListener('click', () => {
      cards[active].style.display = 'none';
      dots[active].classList.replace('bg-gold', 'bg-gray-300');
      active = i;
      cards[active].style.display = '';
      dots[active].classList.replace('bg-gray-300', 'bg-gold');
    });
  });
})();
</script>
<?= $this->endSection() ?>