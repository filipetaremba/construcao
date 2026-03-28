<?php
/**
 * app/Views/partials/header.php
 * Incluído pelo layout via $this->include('partials/header')
 *
 * Variáveis herdadas do layout:
 *   $lang         (string) 'pt' | 'en'
 *   $current_page (string) ex: '/', '/sobre'
 */

$lang         = $lang         ?? get_cookie('lang') ?? 'pt';
$current_page = $current_page ?? '/';

$nav = [
    'pt' => [
        'home'     => 'Início',
        'sobre'    => 'Sobre Nós',
        'servicos' => 'Serviços',
        'projetos' => 'Projetos',
        'contacto' => 'Contacto',
        'cta'      => 'Pedir Orçamento',
    ],
    'en' => [
        'home'     => 'Home',
        'sobre'    => 'About Us',
        'servicos' => 'Services',
        'projetos' => 'Projects',
        'contacto' => 'Contact',
        'cta'      => 'Get a Quote',
    ],
];

$t         = $nav[$lang] ?? $nav['pt'];
$otherLang = ($lang === 'en') ? 'pt' : 'en';

$links = [
    '/'         => $t['home'],
    '/sobre'    => $t['sobre'],
    '/servicos' => $t['servicos'],
    '/projetos' => $t['projetos'],
    '/contacto' => $t['contacto'],
];
?>
<header id="navbar" class="fixed top-0 left-0 w-full z-50">

  <!-- ── Barra superior (contactos + redes) ── -->
  <div id="topbar"
       class="bg-navy text-white text-xs overflow-hidden"
       style="max-height:34px; transition:max-height .4s ease, opacity .3s ease;">
    <div class="max-w-7xl mx-auto px-4 md:px-6 flex items-center justify-between h-[34px]">

      <div class="flex items-center gap-4 text-white/70">
        <a href="tel:+258853592701"
           class="flex items-center gap-1.5 hover:text-gold transition text-[11px]">
          <svg class="w-3 h-3 text-gold" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
          </svg>
          +258 85 359 2701
        </a>
        <span class="hidden sm:inline text-white/30">|</span>
        <a href="mailto:geral@construcaomz.co.mz"
           class="hidden sm:flex items-center gap-1.5 hover:text-gold transition text-[11px]">
          <svg class="w-3 h-3 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
          </svg>
          geral@construcaomz.co.mz
        </a>
      </div>

      <div class="flex items-center gap-4">
        <!-- Redes sociais -->
        <div class="flex items-center gap-3">
          <a href="https://facebook.com/construcaomz" target="_blank" rel="noopener"
             class="text-white/40 hover:text-gold transition" aria-label="Facebook">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
            </svg>
          </a>
          <a href="https://instagram.com/construcaomz" target="_blank" rel="noopener"
             class="text-white/40 hover:text-gold transition" aria-label="Instagram">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke-width="2"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
        <!-- Seletor de língua -->
        <a href="<?= base_url('lang/' . $otherLang) ?>"
           class="flex items-center gap-1 uppercase tracking-widest font-semibold text-gold hover:text-white transition text-[11px]">
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
          </svg>
          <?= strtoupper($otherLang) ?>
        </a>
      </div>

    </div>
  </div>

  <!-- ── Barra de navegação principal ── -->
  <div id="mainbar" style="transition:background .3s, box-shadow .3s;">
    <div class="max-w-7xl mx-auto px-4 md:px-6 flex items-center justify-between h-16 md:h-20" id="mainbar-inner">

      <!-- Logo -->
      <a href="<?= base_url('/') ?>" class="flex items-center gap-3 group flex-shrink-0" aria-label="ConstrucaoMz — Início">
        <img src="<?= base_url('assets/images/logo.png') ?>"
             alt="ConstrucaoMz Logo"
             class="h-8 md:h-10 w-auto transition-transform duration-300 group-hover:scale-105"
             onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
        <!-- Fallback texto -->
        <span class="items-center font-display text-xl md:text-2xl font-bold tracking-wide text-white leading-none" style="display:none">
          <span class="text-gold">C</span>ONSTRUCAO<span class="text-gold ml-1">MZ</span>
        </span>
      </a>

      <!-- Navegação desktop -->
      <nav class="hidden lg:flex items-center gap-6 xl:gap-8" aria-label="Navegação principal">
        <?php foreach ($links as $href => $label) : ?>
          <a href="<?= base_url(ltrim($href, '/')) ?>"
             class="nav-link <?= ($current_page === $href) ? 'active' : '' ?> text-white hover:text-gold transition font-body text-[13px] font-semibold tracking-widest uppercase whitespace-nowrap">
            <?= esc($label) ?>
          </a>
        <?php endforeach; ?>
      </nav>

      <!-- CTA desktop -->
      <a href="<?= base_url('contacto') ?>"
         class="hidden lg:inline-flex items-center gap-2 bg-gold text-navy font-display font-bold text-[12px] uppercase tracking-widest px-5 py-2.5 hover:bg-gold-dark transition-colors duration-200 flex-shrink-0">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
        </svg>
        <?= esc($t['cta']) ?>
      </a>

      <!-- Hamburger mobile -->
      <button id="menuBtn"
              class="lg:hidden text-white p-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-gold"
              aria-label="Abrir menu" aria-expanded="false" aria-controls="mobileMenu">
        <svg id="iconOpen"  class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg id="iconClose" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>

    </div>
  </div>

  <!-- ── Menu mobile ── -->
  <div id="mobileMenu"
       class="hidden lg:hidden"
       style="max-height:0; overflow:hidden; transition:max-height .4s ease, opacity .3s ease; opacity:0; background:rgba(13,31,78,.98); backdrop-filter:blur(12px);"
       role="dialog" aria-label="Menu móvel">
    <div class="px-4 py-4 border-t border-white/10 max-w-7xl mx-auto">

      <nav class="space-y-0.5">
        <?php foreach ($links as $href => $label) : ?>
          <a href="<?= base_url(ltrim($href, '/')) ?>"
             class="flex items-center gap-3 text-white py-3.5 text-[13px] font-bold uppercase tracking-widest border-b border-white/10 hover:text-gold transition-colors <?= ($current_page === $href) ? 'text-gold' : '' ?>">
            <span class="w-1 h-4 bg-gold flex-shrink-0"></span>
            <?= esc($label) ?>
          </a>
        <?php endforeach; ?>
      </nav>

      <div class="pt-5 space-y-3 pb-2">
        <a href="<?= base_url('contacto') ?>"
           class="flex items-center justify-center gap-2 w-full bg-gold text-navy font-display font-bold text-sm uppercase tracking-widest px-6 py-3 hover:bg-gold-dark transition">
          <?= esc($t['cta']) ?>
        </a>
        <a href="tel:+258853592701"
           class="flex items-center justify-center gap-2 w-full border border-white/20 text-white text-sm py-3 hover:border-gold hover:text-gold transition">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
          </svg>
          +258 85 359 2701
        </a>
      </div>

      <a href="<?= base_url('lang/' . $otherLang) ?>"
         class="block text-center text-gold/60 text-[11px] font-semibold uppercase tracking-widest pt-2 pb-1 hover:text-gold transition">
        <?= strtoupper($otherLang) ?> — Switch Language
      </a>

    </div>
  </div>

</header>

<!-- ════ JS do header ════ -->
<script>
(function () {
  const navbar     = document.getElementById('navbar');
  const mainbar    = document.getElementById('mainbar');
  const topbar     = document.getElementById('topbar');
  const inner      = document.getElementById('mainbar-inner');
  const menuBtn    = document.getElementById('menuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  const iconOpen   = document.getElementById('iconOpen');
  const iconClose  = document.getElementById('iconClose');
  let menuOpen = false;

  // ── Scroll: colapsa topbar e escurece navbar ──
  function onScroll() {
    const scrolled = window.scrollY > 64;
    if (scrolled) {
      mainbar.style.cssText = 'background:rgba(13,31,78,.97);backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);box-shadow:0 4px 30px rgba(0,0,0,.3);transition:background .3s,box-shadow .3s;';
      topbar.style.maxHeight = '0';
      topbar.style.opacity   = '0';
      inner.style.height = '56px';
    } else {
      mainbar.style.cssText = 'background:transparent;backdrop-filter:none;-webkit-backdrop-filter:none;box-shadow:none;transition:background .3s,box-shadow .3s;';
      topbar.style.maxHeight = '34px';
      topbar.style.opacity   = '1';
      inner.style.height = '';
    }
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // ── Menu mobile ──
  function openMenu() {
    menuOpen = true;
    mobileMenu.classList.remove('hidden');
    requestAnimationFrame(() => {
      mobileMenu.style.maxHeight = '600px';
      mobileMenu.style.opacity   = '1';
    });
    iconOpen.classList.add('hidden');
    iconClose.classList.remove('hidden');
    menuBtn.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    menuOpen = false;
    mobileMenu.style.maxHeight = '0';
    mobileMenu.style.opacity   = '0';
    setTimeout(() => mobileMenu.classList.add('hidden'), 400);
    iconOpen.classList.remove('hidden');
    iconClose.classList.add('hidden');
    menuBtn.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  menuBtn.addEventListener('click', () => menuOpen ? closeMenu() : openMenu());
  mobileMenu.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));
  document.addEventListener('keydown', e => { if (e.key === 'Escape' && menuOpen) closeMenu(); });
})();
</script>