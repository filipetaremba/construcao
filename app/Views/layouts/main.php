<?php
/**
 * app/Views/layouts/main.php
 *
 * Layout base CI4 — todas as páginas fazem:
 *   <?= $this->extend('layouts/main') ?>
 *   <?= $this->section('content') ?> ... <?= $this->endSection() ?>
 *
 * Variáveis esperadas do controller:
 *   $lang         (string) 'pt' | 'en'
 *   $current_page (string) ex: '/', '/sobre'
 *   $title        (string) título da tab
 *   $meta_desc    (string) meta description (opcional)
 */
$lang         = $lang         ?? get_cookie('lang') ?? 'pt';
$current_page = $current_page ?? '/';
$title        = $title        ?? 'ConstrucaoMz — Construção em Moçambique';
$meta_desc    = $meta_desc    ?? 'Construção residencial, comercial e industrial com qualidade, rigor e compromisso na Beira e em todo Moçambique.';
?>
<!DOCTYPE html>
<html lang="<?= esc($lang) ?>" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= esc($meta_desc) ?>">
  <title><?= esc($title) ?></title>

  <!-- ════ FAVICON & ÍCONES ════ -->
  <link rel="icon"             type="image/png" href="<?= base_url('assets/images/icon.png') ?>">
  <link rel="shortcut icon"    type="image/png" href="<?= base_url('assets/images/icon.png') ?>">
  <link rel="apple-touch-icon"                   href="<?= base_url('assets/images/icon.png') ?>">

  <!-- ════ SEO BÁSICO ════ -->
  <meta name="robots"      content="index, follow">
  <meta name="author"      content="ConstrucaoMz">
  <meta name="theme-color" content="#0D1F4E">
  <link rel="canonical"    href="<?= base_url($current_page) ?>">

  <!-- ════ OPEN GRAPH (Facebook, WhatsApp, LinkedIn…) ════ -->
  <meta property="og:type"         content="website">
  <meta property="og:url"          content="<?= base_url($current_page) ?>">
  <meta property="og:title"        content="<?= esc($title) ?>">
  <meta property="og:description"  content="<?= esc($meta_desc) ?>">
  <meta property="og:image"        content="<?= base_url('assets/images/icon.jpg') ?>">
  <meta property="og:image:width"  content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:locale"       content="<?= $lang === 'pt' ? 'pt_MZ' : 'en_US' ?>">
  <meta property="og:site_name"    content="ConstrucaoMz">

  <!-- ════ TWITTER CARD ════ -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?= esc($title) ?>">
  <meta name="twitter:description" content="<?= esc($meta_desc) ?>">
  <meta name="twitter:image"       content="<?= base_url('assets/images/icon.jpg') ?>">

  <!-- ════ FONTES ════ -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- ════ TAILWIND (build de produção) ════ -->
  <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">

  <!-- ════ ESTILOS GLOBAIS ════ -->
  <style>
    /* ── Base ── */
    body { font-family: 'Inter', sans-serif; }

    /* ── Botões ── */
    .btn-gold {
      display: inline-flex; align-items: center; gap: .5rem;
      background: #E8A020; color: #0D1F4E;
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 700; font-size: .72rem; letter-spacing: .12em;
      text-transform: uppercase; padding: .75rem 1.5rem;
      transition: background .2s, transform .15s; text-decoration: none;
    }
    .btn-gold:hover { background: #c98a18; transform: translateY(-1px); }

    .btn-outline {
      display: inline-flex; align-items: center; gap: .5rem;
      border: 1px solid rgba(255,255,255,.35); color: #fff;
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 700; font-size: .72rem; letter-spacing: .12em;
      text-transform: uppercase; padding: .75rem 1.5rem;
      transition: border-color .2s, color .2s; text-decoration: none;
    }
    .btn-outline:hover { border-color: #E8A020; color: #E8A020; }

    .btn-outline-dark {
      display: inline-flex; align-items: center; gap: .5rem;
      border: 1px solid #0D1F4E; color: #0D1F4E;
      font-family: 'Barlow Condensed', sans-serif;
      font-weight: 700; font-size: .72rem; letter-spacing: .12em;
      text-transform: uppercase; padding: .75rem 1.5rem;
      transition: background .2s, color .2s; text-decoration: none;
    }
    .btn-outline-dark:hover { background: #0D1F4E; color: #fff; }

    /* ── Tipografia utilitária ── */
    .sec-label {
      display: block;
      font-family: 'Barlow Condensed', sans-serif;
      font-size: .68rem; font-weight: 700;
      letter-spacing: .2em; text-transform: uppercase;
      color: #E8A020; margin-bottom: .6rem;
    }
    .gold-bar { border-left: 3px solid #E8A020; padding-left: 1.25rem; }

    /* ── Formulário ── */
    .field-label {
      display: block; font-size: .72rem; font-weight: 600;
      letter-spacing: .08em; text-transform: uppercase;
      color: rgba(255,255,255,.5); margin-bottom: .4rem;
    }
    .field {
      width: 100%; background: rgba(255,255,255,.06);
      border: 1px solid rgba(255,255,255,.15); color: #fff;
      font-size: .875rem; padding: .65rem .85rem;
      transition: border-color .2s; outline: none;
      font-family: 'Inter', sans-serif;
    }
    .field::placeholder { color: rgba(255,255,255,.3); }
    .field:focus { border-color: #E8A020; }
    select.field option { background: #0D1F4E; color: #fff; }

    /* ── Cards ── */
    .svc-card { transition: box-shadow .25s, transform .25s; }
    .svc-card:hover { box-shadow: 0 12px 32px rgba(13,31,78,.12); transform: translateY(-3px); }

    .proj-card { display: block; }
    .proj-card .overlay {
      background: linear-gradient(to top, rgba(13,31,78,.85) 0%, rgba(13,31,78,.1) 60%, transparent 100%);
    }

    /* ── Scroll reveal ── */
    .reveal { opacity: 0; transform: translateY(28px); transition: opacity .6s ease, transform .6s ease; }
    .reveal.visible { opacity: 1; transform: none; }

    /* ── Animação hero ── */
    @keyframes fadein { from { opacity:0; transform:translateY(16px); } to { opacity:1; transform:none; } }
    .animate-fadein { animation: fadein .7s ease both; }

    /* ── Padrão SVG de fundo (secção processo) ── */
    .bg-pattern-dots {
      background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/svg%3E");
    }

    /* ── Nav link activo ── */
    .nav-link { position: relative; padding-bottom: 2px; }
    .nav-link::after {
      content: ''; position: absolute; bottom: -2px; left: 0;
      width: 0; height: 2px; background: #E8A020;
      transition: width .25s ease;
    }
    .nav-link:hover::after,
    .nav-link.active::after { width: 100%; }
    .nav-link.active { color: #E8A020 !important; }
  </style>

  <!-- Slot para CSS extra por página (opcional) -->
  <?= $this->renderSection('head_extra') ?>
</head>

<body class="bg-white text-navy antialiased">

  <!-- ════ HEADER ════ -->
  <?= $this->include('partials/header') ?>

  <!-- ════ CONTEÚDO DA PÁGINA ════ -->
  <main>
    <?= $this->renderSection('content') ?>
  </main>

  <!-- ════ FOOTER ════ -->
  <?= $this->include('partials/footer') ?>

  <!-- ════ JS GLOBAL ════ -->
  <script>
  // ── Scroll Reveal ──
  (function () {
    const els = document.querySelectorAll('.reveal');
    if (!els.length) return;
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
      });
    }, { threshold: 0.12 });
    els.forEach(el => io.observe(el));
  })();
  </script>

  <!-- Slot para JS extra por página (opcional) -->
  <?= $this->renderSection('scripts') ?>

</body>
</html>