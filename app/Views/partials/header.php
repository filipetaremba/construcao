<?php
/**
 * partials/header.php
 * Variables: $lang, $current_page
 */

$nav = [
    'pt' => [
        'home'     => 'Início',
        'sobre'    => 'Sobre Nós',
        'servicos' => 'Serviços',
        'projetos' => 'Projetos',
        'contacto' => 'Contacto',
        'cta'      => 'Fale Connosco',
    ],
    'en' => [
        'home'     => 'Home',
        'sobre'    => 'About Us',
        'servicos' => 'Services',
        'projetos' => 'Projects',
        'contacto' => 'Contact',
        'cta'      => 'Get In Touch',
    ],
];

$t         = $nav[$lang ?? 'pt'];
$otherLang = ($lang === 'pt') ? 'en' : 'pt';
$current   = $current_page ?? '';

$links = [
    '/'         => $t['home'],
    '/sobre'    => $t['sobre'],
    '/servicos' => $t['servicos'],
    '/projetos' => $t['projetos'],
    '/contacto' => $t['contacto'],
];
?>
<header id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300">

  <!-- Top bar: phone + lang -->
  <div id="topbar" class="bg-primary text-white text-xs py-1.5 px-6 transition-all duration-300 overflow-hidden" style="max-height:32px">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <span class="flex items-center gap-2 font-body opacity-80">
        <svg class="w-3.5 h-3.5 text-accent flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
          <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
        </svg>
        +258 84 000 0000 &nbsp;|&nbsp; Beira, Moçambique
      </span>
      <a href="/lang/<?= $otherLang ?>"
         class="uppercase tracking-widest font-body font-semibold text-accent hover:text-white transition text-[11px]">
        <?= strtoupper($otherLang) ?>
      </a>
    </div>
  </div>

  <!-- Main nav bar -->
  <div id="mainbar" class="transition-all duration-300 bg-transparent">
    <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">

      <!-- Logo -->
      <a href="/" class="flex items-center gap-3 group">
        <img src="/assets/images/logo.png"
             alt="ConstrucaoMz Logo"
             class="h-10 w-auto transition-transform group-hover:scale-105"
             onerror="this.style.display='none'; document.getElementById('text-logo').style.display='flex'">
        <span id="text-logo" class="hidden items-center font-display text-2xl font-bold tracking-wide text-white leading-none">
          <span class="text-accent">C</span>ONSTRUCAO<span class="text-accent ml-1">MZ</span>
        </span>
      </a>

      <!-- Desktop Nav -->
      <nav class="hidden lg:flex items-center gap-7">
        <?php foreach ($links as $href => $label): ?>
          <a href="<?= $href ?>"
             class="nav-link <?= $current === $href ? 'active' : '' ?> text-white hover:text-accent transition font-body text-[14px] font-semibold tracking-wide uppercase">
            <?= $label ?>
          </a>
        <?php endforeach; ?>
        <!-- CTA -->
        <a href="/contacto"
           class="diagonal-stripe ml-2 bg-accent text-primary font-display font-bold text-sm uppercase tracking-widest px-6 py-2.5 hover:bg-accent-dark transition-all duration-200 relative overflow-hidden">
          <?= $t['cta'] ?>
        </a>
      </nav>

      <!-- Mobile Hamburger -->
      <button id="menuBtn" class="lg:hidden text-white p-2 focus:outline-none" aria-label="Menu" aria-expanded="false">
        <svg id="iconOpen" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg id="iconClose" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobileMenu"
       class="hidden lg:hidden bg-primary/97 backdrop-blur-sm border-t border-white/10"
       style="max-height:0; overflow:hidden; transition: max-height 0.4s ease">
    <div class="px-6 py-4 space-y-1">
      <?php foreach ($links as $href => $label): ?>
        <a href="<?= $href ?>"
           class="flex items-center gap-3 text-white py-3 text-sm font-semibold uppercase tracking-widest border-b border-white/10 hover:text-accent transition">
          <span class="w-1 h-5 bg-accent rounded flex-shrink-0"></span>
          <?= $label ?>
        </a>
      <?php endforeach; ?>
      <div class="pt-4 pb-2">
        <a href="/contacto"
           class="block w-full text-center bg-accent text-primary font-display font-bold text-sm uppercase tracking-widest px-6 py-3">
          <?= $t['cta'] ?>
        </a>
      </div>
      <a href="/lang/<?= $otherLang ?>"
         class="block text-center text-accent text-xs font-semibold uppercase tracking-widest pt-2 pb-1">
        <?= strtoupper($otherLang) ?> — Switch Language
      </a>
    </div>
  </div>
</header>

<script>
(function(){
  const navbar   = document.getElementById('navbar');
  const mainbar  = document.getElementById('mainbar');
  const topbar   = document.getElementById('topbar');
  const menuBtn  = document.getElementById('menuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  const iconOpen  = document.getElementById('iconOpen');
  const iconClose = document.getElementById('iconClose');
  let menuOpen = false;

  // ── Scroll effect ──
  function onScroll() {
    const scrolled = window.scrollY > 60;
    mainbar.style.background = scrolled ? 'rgba(13,31,78,0.97)' : 'transparent';
    mainbar.style.backdropFilter = scrolled ? 'blur(8px)' : 'none';
    mainbar.style.boxShadow = scrolled ? '0 4px 24px rgba(0,0,0,0.25)' : 'none';
    topbar.style.maxHeight = scrolled ? '0' : '32px';
    topbar.style.paddingTop = scrolled ? '0' : '';
    topbar.style.paddingBottom = scrolled ? '0' : '';
    document.getElementById('mainbar').querySelector('.py-5').classList.toggle('py-3', scrolled);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // ── Mobile menu toggle ──
  menuBtn.addEventListener('click', () => {
    menuOpen = !menuOpen;
    if (menuOpen) {
      mobileMenu.classList.remove('hidden');
      requestAnimationFrame(() => { mobileMenu.style.maxHeight = '600px'; });
    } else {
      mobileMenu.style.maxHeight = '0';
      setTimeout(() => mobileMenu.classList.add('hidden'), 400);
    }
    iconOpen.classList.toggle('hidden', menuOpen);
    iconClose.classList.toggle('hidden', !menuOpen);
    menuBtn.setAttribute('aria-expanded', menuOpen);
  });
})();
</script>