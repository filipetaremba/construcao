<!DOCTYPE html>
<html lang="<?= $lang ?? 'pt' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'ConstrucaoMz — Construção de Excelência na Beira') ?></title>
    <meta name="description" content="<?= htmlspecialchars($meta_desc ?? 'ConstrucaoMz: empresa líder de construção civil, residencial e comercial na Beira, Moçambique.') ?>">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Barlow Condensed + Source Sans 3 -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800;900&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind Config -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary:   '#0D1F4E',   /* deep navy */
              secondary: '#1A3A70',   /* medium navy */
              accent:    '#F5A800',   /* amber/gold */
              'accent-dark': '#D48C00',
              steel:     '#4A5568',
              light:     '#F4F4F0',
              concrete:  '#E8E4DC',
            },
            fontFamily: {
              display: ['"Barlow Condensed"', 'sans-serif'],
              body:    ['"Source Sans 3"', 'sans-serif'],
            },
            backgroundImage: {
              'hero-pattern': "url('/assets/images/hero-bg.jpg')",
            }
          }
        }
      }
    </script>

    <style>
      *, *::before, *::after { box-sizing: border-box; }
      body { font-family: 'Source Sans 3', sans-serif; background: #fff; color: #1a1a1a; }

      /* Scrollbar */
      ::-webkit-scrollbar { width: 6px; }
      ::-webkit-scrollbar-track { background: #0D1F4E; }
      ::-webkit-scrollbar-thumb { background: #F5A800; border-radius: 3px; }

      /* Animated underline for nav links */
      .nav-link { position: relative; }
      .nav-link::after {
        content: '';
        position: absolute;
        bottom: -4px; left: 0;
        width: 0; height: 2px;
        background: #F5A800;
        transition: width 0.3s ease;
      }
      .nav-link:hover::after { width: 100%; }
      .nav-link.active::after { width: 100%; }

      /* Section reveal animation */
      .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.7s ease, transform 0.7s ease;
      }
      .reveal.visible { opacity: 1; transform: translateY(0); }

      /* Diagonal accent stripe */
      .diagonal-stripe {
        position: relative;
        overflow: hidden;
      }
      .diagonal-stripe::before {
        content: '';
        position: absolute;
        top: 0; right: -60px;
        width: 140px; height: 100%;
        background: #F5A800;
        transform: skewX(-12deg);
        opacity: 0.12;
      }

      /* Steel texture overlay for sections */
      .texture-overlay {
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      }

      /* Card hover lift */
      .card-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .card-lift:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(13,31,78,0.18);
      }

      /* Counter animation */
      .counter { transition: all 0.3s; }

      /* Gold divider line */
      .gold-divider {
        display: inline-block;
        width: 60px; height: 4px;
        background: #F5A800;
        border-radius: 2px;
      }
    </style>
</head>
<body>
    <?= view('partials/header', ['lang' => $lang ?? 'pt', 'current_page' => $current_page ?? '']) ?>

    <main>
        <?= view($page, ['lang' => $lang ?? 'pt']) ?>
    </main>

    <?= view('partials/footer', ['lang' => $lang ?? 'pt']) ?>

    <!-- Global scroll reveal -->
    <script>
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(e => {
          if (e.isIntersecting) {
            e.target.classList.add('visible');
            // Stagger children if they have reveal class
            e.target.querySelectorAll('.stagger-child').forEach((child, i) => {
              child.style.transitionDelay = `${i * 0.12}s`;
              child.classList.add('visible');
            });
          }
        });
      }, { threshold: 0.1 });
      document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</body>
</html>