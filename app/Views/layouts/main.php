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

  <link rel="icon" type="image/png" href="<?= base_url('assets/images/favicon.png') ?>">

  <!-- Fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CDN (Play CDN — trocar por build em produção) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            navy:    '#0D1F4E',
            gold:    '#E8A020',
            'gold-dark': '#c98a18',
            light:   '#F5F5F0',
            steel:   '#6B7A99',
            primary: '#0D1F4E',
            accent:  '#E8A020',
            'accent-dark': '#c98a18',
            secondary: '#162c6e',
          },
          fontFamily: {
            display: ['"Barlow Condensed"', 'sans-serif'],
            body:    ['"Inter"', 'sans-serif'],
          },
        }
      }
    }
  </script>

  <!-- Estilos globais (componentes reutilizáveis que Tailwind não cobre inline) -->
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