<?php
$nav = [
    'pt' => [
        'home'     => 'Início',
        'sobre'    => 'Sobre',
        'servicos' => 'Serviços',
        'projetos' => 'Projetos',
        'contacto' => 'Contacto',
        'cta'      => 'Fale Connosco',
    ],
    'en' => [
        'home'     => 'Home',
        'sobre'    => 'About',
        'servicos' => 'Services',
        'projetos' => 'Projects',
        'contacto' => 'Contact',
        'cta'      => 'Get In Touch',
    ],
];
$t = $nav[$lang ?? 'pt'];
$otherLang = ($lang === 'pt') ? 'en' : 'pt';
?>

<header id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- Logo -->
        <a href="/" class="text-white font-bold text-xl tracking-wide font-hero">
            <span class="text-accent">C</span>onstrucaoMz
        </a>

        <!-- Nav Links -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="/"         class="nav-link text-white hover:text-accent transition font-body text-sm font-medium"><?= $t['home'] ?></a>
            <a href="/sobre"    class="nav-link text-white hover:text-accent transition font-body text-sm font-medium"><?= $t['sobre'] ?></a>
            <a href="/servicos" class="nav-link text-white hover:text-accent transition font-body text-sm font-medium"><?= $t['servicos'] ?></a>
            <a href="/projetos" class="nav-link text-white hover:text-accent transition font-body text-sm font-medium"><?= $t['projetos'] ?></a>
            <a href="/contacto" class="nav-link text-white hover:text-accent transition font-body text-sm font-medium"><?= $t['contacto'] ?></a>

            <!-- Lang Toggle -->
            <a href="/lang/<?= $otherLang ?>" class="text-white border border-white/40 hover:border-accent hover:text-accent px-3 py-1 rounded text-xs font-medium transition">
                <?= strtoupper($otherLang) ?>
            </a>

            <!-- CTA Button -->
            <a href="/contacto" class="bg-accent text-primary font-semibold px-5 py-2 rounded text-sm hover:brightness-110 transition">
                <?= $t['cta'] ?>
            </a>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="menuBtn" class="md:hidden text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-primary px-6 pb-4">
        <a href="/"         class="block text-white py-2 text-sm"><?= $t['home'] ?></a>
        <a href="/sobre"    class="block text-white py-2 text-sm"><?= $t['sobre'] ?></a>
        <a href="/servicos" class="block text-white py-2 text-sm"><?= $t['servicos'] ?></a>
        <a href="/projetos" class="block text-white py-2 text-sm"><?= $t['projetos'] ?></a>
        <a href="/contacto" class="block text-white py-2 text-sm"><?= $t['contacto'] ?></a>
        <a href="/lang/<?= $otherLang ?>" class="block text-accent py-2 text-sm font-medium"><?= strtoupper($otherLang) ?></a>
    </div>
</header>

<script>
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('bg-primary', 'shadow-lg');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.remove('bg-primary', 'shadow-lg');
            navbar.classList.add('bg-transparent');
        }
    });

    // Mobile menu toggle
    document.getElementById('menuBtn').addEventListener('click', () => {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
</script>