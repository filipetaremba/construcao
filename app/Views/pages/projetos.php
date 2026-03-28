<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?php
/**
 * app/Views/pages/projetos.php
 * Página de Projectos — ConstrucaoMz
 * Bilíngue PT | EN
 */
$lang = $lang ?? get_cookie('lang') ?? 'pt';

$t = [
    'pt' => [
        'page_label'  => 'Portfólio',
        'page_title'  => 'OS NOSSOS PROJECTOS',
        'bc_home'     => 'Início',
        'bc_page'     => 'Projectos',
        'stats' => [
            ['val' => '200+', 'label' => 'Obras Concluídas'],
            ['val' => '12+',  'label' => 'Anos de Experiência'],
            ['val' => '11',   'label' => 'Províncias'],
            ['val' => '98%',  'label' => 'Clientes Satisfeitos'],
        ],
        'filter_all'  => 'Todos',
        'grid_label'  => 'Portfólio Completo',
        'grid_title'  => 'OBRAS EM DESTAQUE',
        'loc_label'   => 'Localização',
        'year_label'  => 'Ano',
        'view_btn'    => 'Ver Projecto',

        'projects' => [
            ['slug' => 'residencias-buzi',         'tag' => 'Residencial', 'title' => 'RESIDÊNCIAS BUZI',           'loc' => 'Beira, Sofala',    'year' => '2023', 'img' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=900&q=80&auto=format&fit=crop',  'desc' => 'Condomínio residencial fechado com 24 moradias unifamiliares de tipologia T3 e T4, piscina comunitária e sistema de energia solar integrado.'],
            ['slug' => 'complexo-ponta-gea',        'tag' => 'Comercial',   'title' => 'COMPLEXO PONTA GÊA',         'loc' => 'Beira',            'year' => '2022', 'img' => 'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=900&q=80&auto=format&fit=crop',  'desc' => 'Edifício comercial misto com 6 pisos: escritórios, espaços de retalho e estacionamento subterrâneo. Certificação energética classe A.'],
            ['slug' => 'armazem-porto-beira',       'tag' => 'Industrial',  'title' => 'ARMAZÉM PORTO DA BEIRA',    'loc' => 'Porto, Beira',     'year' => '2023', 'img' => 'https://images.unsplash.com/photo-1565008447742-97f6f38c985c?w=900&q=80&auto=format&fit=crop',  'desc' => 'Armazém logístico de 8.500 m² com estrutura metálica pesada, docas de carga e sistemas automatizados de controlo de temperatura.'],
            ['slug' => 'hotel-costa-do-sol',        'tag' => 'Comercial',   'title' => 'HOTEL COSTA DO SOL',        'loc' => 'Beira, Sofala',    'year' => '2021', 'img' => 'https://images.unsplash.com/photo-1590856029826-c7a73142bbf1?w=900&q=80&auto=format&fit=crop',  'desc' => 'Hotel de 4 estrelas com 80 quartos, restaurante panorâmico, spa e piscina infinita com vista para a Baía de Sofala.'],
            ['slug' => 'sede-banco-beira',          'tag' => 'Comercial',   'title' => 'SEDE CORPORATIVA BEIRA',    'loc' => 'Beira',            'year' => '2022', 'img' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=900&q=80&auto=format&fit=crop',  'desc' => 'Sede corporativa de 4.200 m² com open spaces, salas de reunião high-tech, auditório para 200 pessoas e fachada ventilada em alumínio.'],
            ['slug' => 'moradias-maputo',           'tag' => 'Residencial', 'title' => 'VILLAS MAPUTO SUL',         'loc' => 'Maputo',           'year' => '2023', 'img' => 'https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=900&q=80&auto=format&fit=crop',  'desc' => '12 villas de luxo T5 em condomínio fechado, com piscina privada, garagem dupla e sistema domótico integrado. Acabamentos premium importados.'],
            ['slug' => 'fabrica-nampula',           'tag' => 'Industrial',  'title' => 'UNIDADE INDUSTRIAL NAMPULA','loc' => 'Nampula',          'year' => '2021', 'img' => 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=900&q=80&auto=format&fit=crop',  'desc' => 'Fábrica de processamento agrícola com 12.000 m², incluindo zona de produção, laboratórios, armazéns refrigerados e escritórios administrativos.'],
            ['slug' => 'escola-sofala',             'tag' => 'Comercial',   'title' => 'ESCOLA SECUNDÁRIA SOFALA',  'loc' => 'Sofala',           'year' => '2022', 'img' => 'https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=900&q=80&auto=format&fit=crop',  'desc' => 'Escola secundária para 1.200 alunos com 30 salas de aula, laboratórios de ciências, biblioteca, sala de informática e campos desportivos.'],
            ['slug' => 'remodelacao-hotel-tete',    'tag' => 'Remodelação', 'title' => 'REMODELAÇÃO HOTEL TETE',    'loc' => 'Tete',             'year' => '2023', 'img' => 'https://images.unsplash.com/photo-1562259949-e8e7689d7828?w=900&q=80&auto=format&fit=crop',  'desc' => 'Renovação completa de hotel de 3 estrelas: 60 quartos, lobby, restaurante, cozinha industrial e sistemas de ar condicionado centralizados.'],
            ['slug' => 'clinica-beira',             'tag' => 'Comercial',   'title' => 'CLÍNICA MÉDICA BEIRA',      'loc' => 'Beira',            'year' => '2020', 'img' => 'https://images.unsplash.com/photo-1538108149393-fbbd81895907?w=900&q=80&auto=format&fit=crop',  'desc' => 'Clínica médica privada de 2.800 m² com 8 consultórios, bloco operatório, imagiologia, farmácia e zona de internamento de 20 camas.'],
            ['slug' => 'plataforma-logistica-beira','tag' => 'Industrial',  'title' => 'PLATAFORMA LOGÍSTICA',      'loc' => 'Beira',            'year' => '2021', 'img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=900&q=80&auto=format&fit=crop',  'desc' => 'Plataforma logística de 15.000 m² com 3 armazéns, zona de triagem, 12 docas, escritórios e parque de estacionamento para 50 camiões.'],
            ['slug' => 'apartamentos-beira-nova',   'tag' => 'Residencial', 'title' => 'RESIDENCIAL BEIRA NOVA',    'loc' => 'Beira',            'year' => '2020', 'img' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=900&q=80&auto=format&fit=crop',  'desc' => 'Edifício residencial de 8 pisos com 48 apartamentos T2 e T3, cobertura com terraço, piscina partilhada e garagem com carregadores eléctricos.'],
        ],

        'cta_label' => 'Tem um Projecto?',
        'cta_title' => 'VAMOS CONSTRUÍ-LO JUNTOS',
        'cta_sub'   => 'Fale connosco e receba um orçamento gratuito e personalizado.',
        'cta_btn'   => 'Pedir Orçamento Grátis',
    ],

    'en' => [
        'page_label'  => 'Portfolio',
        'page_title'  => 'OUR PROJECTS',
        'bc_home'     => 'Home',
        'bc_page'     => 'Projects',
        'stats' => [
            ['val' => '200+', 'label' => 'Completed Projects'],
            ['val' => '12+',  'label' => 'Years of Experience'],
            ['val' => '11',   'label' => 'Provinces'],
            ['val' => '98%',  'label' => 'Satisfied Clients'],
        ],
        'filter_all'  => 'All',
        'grid_label'  => 'Full Portfolio',
        'grid_title'  => 'FEATURED PROJECTS',
        'loc_label'   => 'Location',
        'year_label'  => 'Year',
        'view_btn'    => 'View Project',

        'projects' => [
            ['slug' => 'residencias-buzi',         'tag' => 'Residential', 'title' => 'RESIDÊNCIAS BUZI',           'loc' => 'Beira, Sofala',    'year' => '2023', 'img' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=900&q=80&auto=format&fit=crop',  'desc' => 'Gated residential condominium with 24 single-family homes (3 and 4 bedrooms), communal pool and integrated solar energy system.'],
            ['slug' => 'complexo-ponta-gea',        'tag' => 'Commercial',  'title' => 'COMPLEXO PONTA GÊA',         'loc' => 'Beira',            'year' => '2022', 'img' => 'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=900&q=80&auto=format&fit=crop',  'desc' => 'Mixed-use commercial building with 6 floors: offices, retail spaces and underground car park. Class A energy certification.'],
            ['slug' => 'armazem-porto-beira',       'tag' => 'Industrial',  'title' => 'BEIRA PORT WAREHOUSE',       'loc' => 'Porto, Beira',     'year' => '2023', 'img' => 'https://images.unsplash.com/photo-1565008447742-97f6f38c985c?w=900&q=80&auto=format&fit=crop',  'desc' => '8,500 m² logistics warehouse with heavy steel structure, loading docks and automated temperature control systems.'],
            ['slug' => 'hotel-costa-do-sol',        'tag' => 'Commercial',  'title' => 'HOTEL COSTA DO SOL',         'loc' => 'Beira, Sofala',    'year' => '2021', 'img' => 'https://images.unsplash.com/photo-1590856029826-c7a73142bbf1?w=900&q=80&auto=format&fit=crop',  'desc' => '4-star hotel with 80 rooms, panoramic restaurant, spa and infinity pool overlooking the Bay of Sofala.'],
            ['slug' => 'sede-banco-beira',          'tag' => 'Commercial',  'title' => 'BEIRA CORPORATE HQ',         'loc' => 'Beira',            'year' => '2022', 'img' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=900&q=80&auto=format&fit=crop',  'desc' => '4,200 m² corporate headquarters with open-plan offices, high-tech meeting rooms, 200-seat auditorium and aluminium ventilated façade.'],
            ['slug' => 'moradias-maputo',           'tag' => 'Residential', 'title' => 'MAPUTO SOUTH VILLAS',        'loc' => 'Maputo',           'year' => '2023', 'img' => 'https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=900&q=80&auto=format&fit=crop',  'desc' => '12 luxury 5-bedroom villas in a gated condominium, with private pool, double garage and integrated home automation. Premium imported finishes.'],
            ['slug' => 'fabrica-nampula',           'tag' => 'Industrial',  'title' => 'NAMPULA INDUSTRIAL UNIT',    'loc' => 'Nampula',          'year' => '2021', 'img' => 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=900&q=80&auto=format&fit=crop',  'desc' => '12,000 m² agricultural processing factory including production floor, laboratories, refrigerated warehouses and administrative offices.'],
            ['slug' => 'escola-sofala',             'tag' => 'Commercial',  'title' => 'SOFALA SECONDARY SCHOOL',    'loc' => 'Sofala',           'year' => '2022', 'img' => 'https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=900&q=80&auto=format&fit=crop',  'desc' => 'Secondary school for 1,200 students with 30 classrooms, science labs, library, IT room and sports facilities.'],
            ['slug' => 'remodelacao-hotel-tete',    'tag' => 'Renovation',  'title' => 'TETE HOTEL RENOVATION',      'loc' => 'Tete',             'year' => '2023', 'img' => 'https://images.unsplash.com/photo-1562259949-e8e7689d7828?w=900&q=80&auto=format&fit=crop',  'desc' => 'Full renovation of a 3-star hotel: 60 rooms, lobby, restaurant, commercial kitchen and centralised air conditioning systems.'],
            ['slug' => 'clinica-beira',             'tag' => 'Commercial',  'title' => 'BEIRA MEDICAL CLINIC',       'loc' => 'Beira',            'year' => '2020', 'img' => 'https://images.unsplash.com/photo-1538108149393-fbbd81895907?w=900&q=80&auto=format&fit=crop',  'desc' => '2,800 m² private medical clinic with 8 consultation rooms, operating theatre, imaging, pharmacy and 20-bed inpatient ward.'],
            ['slug' => 'plataforma-logistica-beira','tag' => 'Industrial',  'title' => 'BEIRA LOGISTICS PLATFORM',   'loc' => 'Beira',            'year' => '2021', 'img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=900&q=80&auto=format&fit=crop',  'desc' => '15,000 m² logistics platform with 3 warehouses, sorting zone, 12 docks, offices and parking for 50 trucks.'],
            ['slug' => 'apartamentos-beira-nova',   'tag' => 'Residential', 'title' => 'BEIRA NOVA RESIDENTIAL',     'loc' => 'Beira',            'year' => '2020', 'img' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=900&q=80&auto=format&fit=crop',  'desc' => '8-floor residential building with 48 apartments (2 and 3 bedrooms), rooftop terrace, shared pool and garage with electric vehicle chargers.'],
        ],

        'cta_label' => 'Have a Project?',
        'cta_title' => 'LET\'S BUILD IT TOGETHER',
        'cta_sub'   => 'Contact us and receive a free, personalised quote.',
        'cta_btn'   => 'Get a Free Quote',
    ],
];

$l = $t[$lang] ?? $t['pt'];

/* Categorias únicas para filtros */
$categories = array_unique(array_column($l['projects'], 'tag'));
?>


<!-- ════════ HERO / CABEÇALHO ════════ -->
<section class="relative overflow-hidden bg-navy pt-[54px]">

  <div class="absolute inset-0 z-0">
    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1400&q=80&auto=format&fit=crop"
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


<!-- ════════ GRELHA COM FILTRO ════════ -->
<section class="py-16 md:py-24 bg-light">
  <div class="max-w-6xl mx-auto px-6 md:px-8">

    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12 reveal">
      <div>
        <p class="sec-label"><?= esc($l['grid_label']) ?></p>
        <h2 class="font-display text-navy" style="font-size:clamp(2rem,4vw,3rem)"><?= esc($l['grid_title']) ?></h2>
      </div>

      <!-- Filtros -->
      <div class="flex flex-wrap gap-2" id="filter-btns">
        <button data-filter="all"
                class="filter-btn active border text-xs font-bold uppercase tracking-widest px-4 py-2 transition-all duration-200">
          <?= esc($l['filter_all']) ?>
        </button>
        <?php foreach ($categories as $cat) : ?>
        <button data-filter="<?= esc(strtolower($cat)) ?>"
                class="filter-btn border text-xs font-bold uppercase tracking-widest px-4 py-2 transition-all duration-200">
          <?= esc($cat) ?>
        </button>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Grid de projectos -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5" id="projects-grid">
      <?php foreach ($l['projects'] as $i => $p) : ?>
      <div class="proj-item reveal group"
           data-cat="<?= esc(strtolower($p['tag'])) ?>"
           style="transition-delay:<?= ($i % 6) * 0.07 ?>s">

        <!-- Imagem -->
        <div class="relative overflow-hidden" style="aspect-ratio:4/3">
          <img src="<?= $p['img'] ?>" alt="<?= esc($p['title']) ?>"
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
          <div class="absolute inset-0 bg-gradient-to-t from-navy/80 via-navy/20 to-transparent"></div>

          <!-- Tag -->
          <div class="absolute top-4 left-4 bg-gold text-navy text-[10px] font-bold uppercase tracking-widest px-3 py-1">
            <?= esc($p['tag']) ?>
          </div>

          <!-- Hover overlay -->
          <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-navy/50">
            <a href="<?= base_url('projetos/' . $p['slug']) ?>"
               class="flex items-center gap-2 bg-gold text-navy text-xs font-bold uppercase tracking-widest px-5 py-3 hover:bg-white transition-colors">
              <?= esc($l['view_btn']) ?>
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            </a>
          </div>

          <!-- Info sobreposta -->
          <div class="absolute bottom-0 left-0 right-0 p-5">
            <h3 class="font-display text-white text-lg tracking-wide leading-tight"><?= esc($p['title']) ?></h3>
          </div>
        </div>

        <!-- Rodapé do card -->
        <div class="bg-white px-5 py-4 flex items-center justify-between border-b-2 border-transparent group-hover:border-gold transition-colors duration-300">
          <div class="flex items-center gap-4 text-[11px] text-gray-400 uppercase tracking-widest">
            <span class="flex items-center gap-1">
              <svg class="w-3 h-3 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              <?= esc($p['loc']) ?>
            </span>
            <span class="flex items-center gap-1">
              <svg class="w-3 h-3 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
              <?= esc($p['year']) ?>
            </span>
          </div>
          <a href="<?= base_url('projetos/' . $p['slug']) ?>"
             class="text-gold hover:text-navy transition group/link flex items-center gap-1 text-[11px] font-bold uppercase tracking-widest">
            <?= esc($l['view_btn']) ?>
            <svg class="w-3 h-3 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Mensagem sem resultados -->
    <div id="no-results" class="hidden text-center py-20">
      <p class="text-gray-400 text-sm"><?= $lang === 'en' ? 'No projects found for this category.' : 'Nenhum projecto encontrado nesta categoria.' ?></p>
    </div>

  </div>
</section>


<!-- ════════ CTA FINAL ════════ -->
<section class="py-20 bg-navy relative overflow-hidden">
  <div class="absolute top-0 right-0 w-96 h-96 bg-gold opacity-5 rounded-full translate-x-48 -translate-y-24"></div>
  <div class="absolute bottom-0 left-0 w-72 h-72 bg-gold opacity-5 rounded-full -translate-x-36 translate-y-20"></div>

  <div class="max-w-4xl mx-auto px-6 md:px-8 text-center relative z-10 reveal">
    <p class="sec-label mx-auto"><?= esc($l['cta_label']) ?></p>
    <h2 class="font-display text-white mb-5" style="font-size:clamp(2rem,4vw,3.2rem)"><?= esc($l['cta_title']) ?></h2>
    <p class="text-white/50 text-sm font-light mb-10 max-w-lg mx-auto"><?= esc($l['cta_sub']) ?></p>
    <a href="<?= base_url('servicos#orcamento') ?>" class="btn-gold">
      <?= esc($l['cta_btn']) ?>
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
    </a>
  </div>
</section>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<style>
  .filter-btn {
    border-color: rgba(0,0,0,.15);
    color: #1a2e4a;
    background: transparent;
  }
  .filter-btn:hover,
  .filter-btn.active {
    background: #1a2e4a;
    color: #fff;
    border-color: #1a2e4a;
  }
  .proj-item {
    transition: opacity .3s ease, transform .3s ease;
  }
  .proj-item.hidden-item {
    display: none;
  }
</style>
<script>
(function () {
  const btns  = document.querySelectorAll('.filter-btn');
  const items = document.querySelectorAll('.proj-item');
  const noRes = document.getElementById('no-results');

  btns.forEach(btn => {
    btn.addEventListener('click', function () {
      const filter = this.dataset.filter;

      // Actualiza botões
      btns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      let visible = 0;
      items.forEach(item => {
        const match = filter === 'all' || item.dataset.cat === filter;
        item.classList.toggle('hidden-item', !match);
        if (match) visible++;
      });

      noRes.classList.toggle('hidden', visible > 0);
    });
  });
})();
</script>
<?= $this->endSection() ?>