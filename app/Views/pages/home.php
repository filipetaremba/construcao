<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ConstrucaoMz — Construção de Excelência na Beira</title>
  <meta name="description" content="Empresa líder em construção residencial e comercial na Beira, Moçambique.">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>

  <!-- Fonts: Bebas Neue display + DM Sans body -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            navy:  '#0B1D3A',
            gold:  '#E8A020',
            'gold-light': '#F5B840',
            mist:  '#F7F6F3',
          },
          fontFamily: {
            display: ['"Bebas Neue"', 'sans-serif'],
            body:    ['"DM Sans"', 'sans-serif'],
          }
        }
      }
    }
  </script>

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body { font-family: 'DM Sans', sans-serif; background: #fff; color: #111; }

    /* ── Scroll reveal ── */
    .sr { opacity: 0; transform: translateY(24px); transition: opacity .65s ease, transform .65s ease; }
    .sr.in { opacity: 1; transform: none; }
    .sr-delay-1 { transition-delay: .1s; }
    .sr-delay-2 { transition-delay: .2s; }
    .sr-delay-3 { transition-delay: .3s; }
    .sr-delay-4 { transition-delay: .4s; }

    /* ── Navbar ── */
    #nav { transition: background .3s, box-shadow .3s, padding .3s; }
    #nav.scrolled { background: rgba(11,29,58,.97); backdrop-filter: blur(10px); box-shadow: 0 2px 20px rgba(0,0,0,.3); }
    .nav-a { position: relative; }
    .nav-a::after { content:''; position:absolute; bottom:-3px; left:0; width:0; height:2px; background:#E8A020; transition: width .25s; }
    .nav-a:hover::after { width:100%; }

    /* ── Hero ── */
    #hero { position: relative; min-height: 100vh; display: flex; align-items: center; overflow: hidden; }
    #hero-bg {
      position: absolute; inset: 0;
      background: url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1800&q=80&auto=format&fit=crop') center/cover no-repeat;
    }
    #hero-bg::after {
      content: '';
      position: absolute; inset: 0;
      background: linear-gradient(to right, rgba(11,29,58,.88) 55%, rgba(11,29,58,.4) 100%);
    }

    /* ── Section label ── */
    .sec-label {
      display: inline-flex; align-items: center; gap: 10px;
      font-family: 'DM Sans', sans-serif;
      font-size: .7rem; font-weight: 600;
      letter-spacing: .18em; text-transform: uppercase; color: #E8A020;
      margin-bottom: 1rem;
    }
    .sec-label::before { content:''; display:block; width:28px; height:2px; background:#E8A020; }

    /* ── Gold bar left ── */
    .gold-bar { border-left: 3px solid #E8A020; padding-left: 1.25rem; }

    /* ── Service card ── */
    .svc-card { border-bottom: 2px solid transparent; transition: border-color .25s, transform .25s; }
    .svc-card:hover { border-color: #E8A020; transform: translateY(-3px); }

    /* ── Project card ── */
    .proj-card img { transition: transform .5s ease; }
    .proj-card:hover img { transform: scale(1.04); }
    .proj-card .overlay { background: linear-gradient(to top, rgba(11,29,58,.85) 0%, transparent 60%); }

    /* ── Form inputs ── */
    .field {
      width: 100%; background: transparent;
      border: none; border-bottom: 1px solid rgba(255,255,255,.25);
      color: #fff; font-family: 'DM Sans', sans-serif; font-size: .9rem;
      padding: .75rem 0; outline: none;
      transition: border-color .25s;
    }
    .field::placeholder { color: rgba(255,255,255,.4); }
    .field:focus { border-color: #E8A020; }
    select.field option { background: #0B1D3A; color: #fff; }

    /* ── Btn ── */
    .btn-gold {
      display: inline-flex; align-items: center; gap: .5rem;
      background: #E8A020; color: #0B1D3A;
      font-family: 'DM Sans', sans-serif; font-weight: 600;
      font-size: .82rem; letter-spacing: .1em; text-transform: uppercase;
      padding: .85rem 2.2rem; border: none; cursor: pointer;
      transition: background .2s, transform .15s;
    }
    .btn-gold:hover { background: #F5B840; transform: translateY(-1px); }
    .btn-outline {
      display: inline-flex; align-items: center; gap: .5rem;
      background: transparent; color: #fff;
      font-family: 'DM Sans', sans-serif; font-weight: 600;
      font-size: .82rem; letter-spacing: .1em; text-transform: uppercase;
      padding: .85rem 2.2rem; border: 1.5px solid rgba(255,255,255,.35);
      cursor: pointer; transition: border-color .2s, color .2s;
    }
    .btn-outline:hover { border-color: #E8A020; color: #E8A020; }

    /* ── Toast ── */
    #toast {
      position: fixed; bottom: 2rem; right: 2rem; z-index: 9999;
      background: #0B1D3A; color: #fff; border-left: 3px solid #E8A020;
      padding: 1rem 1.5rem; font-size: .85rem; font-family: 'DM Sans', sans-serif;
      opacity: 0; transform: translateY(10px);
      transition: opacity .3s, transform .3s; pointer-events: none;
    }
    #toast.show { opacity: 1; transform: none; }

    ::-webkit-scrollbar { width: 5px; }
    ::-webkit-scrollbar-track { background: #0B1D3A; }
    ::-webkit-scrollbar-thumb { background: #E8A020; }
  </style>
</head>
<body>

<!-- ════════════ NAVBAR ════════════ -->
<nav id="nav" class="fixed top-0 left-0 w-full z-50 py-5 px-8">
  <div class="max-w-6xl mx-auto flex items-center justify-between">

    <!-- Logo -->
    <a href="/" class="flex items-center gap-2">
      <img src="/assets/images/logo.png" alt="ConstrucaoMz" class="h-9 w-auto"
           onerror="this.style.display='none';document.getElementById('tl').style.display='block'">
      <span id="tl" class="hidden font-display text-white text-2xl tracking-wider">
        <span class="text-gold">C</span>ONSTRUCAO<span class="text-gold">MZ</span>
      </span>
    </a>

    <!-- Desktop links -->
    <div class="hidden md:flex items-center gap-8">
      <a href="#hero"     class="nav-a text-white/80 hover:text-white text-sm font-medium transition">HOME</a>
      <a href="#sobre"    class="nav-a text-white/80 hover:text-white text-sm font-medium transition">QUEM SOMOS</a>
      <a href="#servicos" class="nav-a text-white/80 hover:text-white text-sm font-medium transition">SERVIÇOS</a>
      <a href="#projetos" class="nav-a text-white/80 hover:text-white text-sm font-medium transition">PROJETOS</a>
      <a href="#contacto" class="btn-gold text-xs py-2.5 px-5">FALE CONNOSCO</a>
    </div>

    <!-- Mobile toggle -->
    <button id="mbtn" class="md:hidden text-white" aria-label="Menu">
      <i data-lucide="menu" class="w-6 h-6" id="mico-open"></i>
      <i data-lucide="x"    class="w-6 h-6 hidden" id="mico-close"></i>
    </button>
  </div>

  <!-- Mobile menu -->
  <div id="mmenu" class="hidden md:hidden mt-4 bg-navy/98 border-t border-white/10 px-8 py-6 flex flex-col gap-4">
    <a href="#hero"     class="text-white/80 text-sm font-medium uppercase tracking-widest">Home</a>
    <a href="#sobre"    class="text-white/80 text-sm font-medium uppercase tracking-widest">Quem Somos</a>
    <a href="#servicos" class="text-white/80 text-sm font-medium uppercase tracking-widest">Serviços</a>
    <a href="#projetos" class="text-white/80 text-sm font-medium uppercase tracking-widest">Projetos</a>
    <a href="#contacto" class="btn-gold self-start">Fale Connosco</a>
  </div>
</nav>


<!-- ════════════ HERO ════════════ -->
<section id="hero">
  <div id="hero-bg"></div>
  <div class="relative z-10 max-w-6xl mx-auto px-8 w-full pt-20">
    <div class="max-w-2xl">
      <p class="sec-label mb-4">Beira · Moçambique</p>
      <h1 class="font-display text-white leading-[.92] mb-6" style="font-size:clamp(3.8rem,8vw,7.5rem)">
        SOMOS<br>
        ESPECIALIZADOS<br>
        EM <span class="text-gold">CONSTRUÇÃO</span>
      </h1>
      <p class="text-white/65 text-base leading-relaxed mb-10 max-w-md font-light">
        Construção residencial e comercial com qualidade, rigor e compromisso na Beira e em todo Moçambique.
      </p>
      <div class="flex flex-wrap gap-4">
        <a href="#servicos" class="btn-gold">
          Os Nossos Serviços
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
        <a href="#contacto" class="btn-outline">Pedir Orçamento</a>
      </div>
    </div>
  </div>

  <!-- Bottom stats strip -->
  <div class="absolute bottom-0 left-0 right-0 z-10">
    <div class="max-w-6xl mx-auto px-8">
      <div class="grid grid-cols-3 md:grid-cols-3 bg-navy/80 backdrop-blur-sm border-t border-white/10 divide-x divide-white/10">
        <div class="px-8 py-5 text-center">
          <div class="font-display text-gold text-4xl">12+</div>
          <div class="text-white/55 text-xs mt-1 uppercase tracking-widest">Anos</div>
        </div>
        <div class="px-8 py-5 text-center">
          <div class="font-display text-gold text-4xl">200+</div>
          <div class="text-white/55 text-xs mt-1 uppercase tracking-widest">Projectos</div>
        </div>
        <div class="px-8 py-5 text-center">
          <div class="font-display text-gold text-4xl">98%</div>
          <div class="text-white/55 text-xs mt-1 uppercase tracking-widest">Satisfação</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ════════════ SOBRE NÓS ════════════ -->
<section id="sobre" class="py-24 bg-white">
  <div class="max-w-6xl mx-auto px-8">
    <div class="grid md:grid-cols-2 gap-16 items-center">

      <!-- Image -->
      <div class="sr relative">
        <div class="overflow-hidden" style="aspect-ratio:4/3">
          <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=900&q=80&auto=format&fit=crop"
               alt="Equipa em obra"
               class="w-full h-full object-cover"
               loading="lazy">
        </div>
        <!-- Gold corner -->
        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-gold flex items-center justify-center">
          <div class="text-center text-navy">
            <div class="font-display text-3xl leading-none">12+</div>
            <div class="text-[10px] font-semibold uppercase tracking-widest">Anos</div>
          </div>
        </div>
      </div>

      <!-- Text -->
      <div class="sr sr-delay-2">
        <p class="sec-label">Quem Somos</p>
        <h2 class="font-display text-navy leading-tight mb-6" style="font-size:clamp(2.2rem,4vw,3.2rem)">
          MAIS DE UMA DÉCADA A CONSTRUIR CONFIANÇA
        </h2>
        <div class="gold-bar mb-8">
          <p class="text-gray-500 text-base leading-relaxed font-light">
            A ConstrucaoMz nasceu na Beira com uma missão clara: entregar obras de excelência, no prazo e dentro do orçamento. Da fundação ao acabamento, controlamos cada fase com rigor técnico e transparência total.
          </p>
        </div>

        <!-- 3 pillars -->
        <div class="grid grid-cols-3 gap-6 mb-8">
          <div class="text-center">
            <div class="w-12 h-12 bg-mist rounded-none flex items-center justify-center mx-auto mb-2">
              <i data-lucide="shield-check" class="w-5 h-5 text-gold"></i>
            </div>
            <div class="text-navy text-xs font-semibold uppercase tracking-wide">Licenciados</div>
          </div>
          <div class="text-center">
            <div class="w-12 h-12 bg-mist rounded-none flex items-center justify-center mx-auto mb-2">
              <i data-lucide="award" class="w-5 h-5 text-gold"></i>
            </div>
            <div class="text-navy text-xs font-semibold uppercase tracking-wide">Certificados</div>
          </div>
          <div class="text-center">
            <div class="w-12 h-12 bg-mist rounded-none flex items-center justify-center mx-auto mb-2">
              <i data-lucide="badge-check" class="w-5 h-5 text-gold"></i>
            </div>
            <div class="text-navy text-xs font-semibold uppercase tracking-wide">Garantia</div>
          </div>
        </div>

        <a href="#contacto" class="btn-gold">
          Fale Connosco
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ════════════ SERVIÇOS ════════════ -->
<section id="servicos" class="py-24 bg-mist">
  <div class="max-w-6xl mx-auto px-8">

    <div class="mb-14 sr">
      <p class="sec-label">O Que Fazemos</p>
      <h2 class="font-display text-navy" style="font-size:clamp(2.2rem,4vw,3rem)">
        SERVIÇOS COMPLETOS DE CONSTRUÇÃO
      </h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-px bg-gray-200 sr">
      <!-- Card 1 -->
      <div class="svc-card bg-white p-8 flex flex-col gap-4 sr-delay-1">
        <div class="w-11 h-11 bg-navy flex items-center justify-center flex-shrink-0">
          <i data-lucide="home" class="w-5 h-5 text-gold"></i>
        </div>
        <div>
          <h3 class="font-display text-navy text-xl tracking-wide mb-2">RESIDENCIAL</h3>
          <p class="text-gray-500 text-sm leading-relaxed font-light">Moradias e apartamentos com materiais de primeira qualidade.</p>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="svc-card bg-white p-8 flex flex-col gap-4 sr-delay-2">
        <div class="w-11 h-11 bg-navy flex items-center justify-center flex-shrink-0">
          <i data-lucide="building-2" class="w-5 h-5 text-gold"></i>
        </div>
        <div>
          <h3 class="font-display text-navy text-xl tracking-wide mb-2">COMERCIAL</h3>
          <p class="text-gray-500 text-sm leading-relaxed font-light">Escritórios e espaços de negócio para maximizar a sua imagem.</p>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="svc-card bg-white p-8 flex flex-col gap-4 sr-delay-3">
        <div class="w-11 h-11 bg-navy flex items-center justify-center flex-shrink-0">
          <i data-lucide="factory" class="w-5 h-5 text-gold"></i>
        </div>
        <div>
          <h3 class="font-display text-navy text-xl tracking-wide mb-2">INDUSTRIAL</h3>
          <p class="text-gray-500 text-sm leading-relaxed font-light">Armazéns e infraestruturas robustas para o setor industrial.</p>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="svc-card bg-white p-8 flex flex-col gap-4 sr-delay-4">
        <div class="w-11 h-11 bg-navy flex items-center justify-center flex-shrink-0">
          <i data-lucide="hammer" class="w-5 h-5 text-gold"></i>
        </div>
        <div>
          <h3 class="font-display text-navy text-xl tracking-wide mb-2">REMODELAÇÃO</h3>
          <p class="text-gray-500 text-sm leading-relaxed font-light">Renovação completa de espaços existentes com acabamento impecável.</p>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- ════════════ PROJETOS ════════════ -->
<section id="projetos" class="py-24 bg-white">
  <div class="max-w-6xl mx-auto px-8">

    <div class="flex items-end justify-between mb-14 sr">
      <div>
        <p class="sec-label">Portfólio</p>
        <h2 class="font-display text-navy" style="font-size:clamp(2.2rem,4vw,3rem)">
          OBRAS EM DESTAQUE
        </h2>
      </div>
      <a href="#" class="hidden md:flex items-center gap-2 text-navy text-sm font-semibold uppercase tracking-widest hover:text-gold transition">
        Ver Todos <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>

    <!-- 3-col grid -->
    <div class="grid md:grid-cols-3 gap-6 sr">

      <!-- Project 1 — large -->
      <div class="proj-card md:col-span-2 relative overflow-hidden cursor-pointer" style="aspect-ratio:16/9">
        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1000&q=80&auto=format&fit=crop"
             alt="Residências Buzi" class="w-full h-full object-cover" loading="lazy">
        <div class="overlay absolute inset-0"></div>
        <div class="absolute bottom-0 left-0 p-6">
          <span class="bg-gold text-navy text-[10px] font-bold uppercase tracking-widest px-2 py-1 mb-2 inline-block">Residencial</span>
          <h3 class="font-display text-white text-2xl tracking-wide">RESIDÊNCIAS BUZI</h3>
          <p class="text-white/60 text-xs mt-1 flex items-center gap-1">
            <i data-lucide="map-pin" class="w-3 h-3"></i> Beira, Sofala · 2023
          </p>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="proj-card relative overflow-hidden cursor-pointer" style="aspect-ratio:9/10">
        <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=700&q=80&auto=format&fit=crop"
             alt="Complexo Ponta Gêa" class="w-full h-full object-cover" loading="lazy">
        <div class="overlay absolute inset-0"></div>
        <div class="absolute bottom-0 left-0 p-6">
          <span class="bg-gold text-navy text-[10px] font-bold uppercase tracking-widest px-2 py-1 mb-2 inline-block">Comercial</span>
          <h3 class="font-display text-white text-xl tracking-wide">COMPLEXO PONTA GÊA</h3>
          <p class="text-white/60 text-xs mt-1 flex items-center gap-1">
            <i data-lucide="map-pin" class="w-3 h-3"></i> Beira · 2022
          </p>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="proj-card relative overflow-hidden cursor-pointer" style="aspect-ratio:4/3">
        <img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c?w=700&q=80&auto=format&fit=crop"
             alt="Armazém Porto" class="w-full h-full object-cover" loading="lazy">
        <div class="overlay absolute inset-0"></div>
        <div class="absolute bottom-0 left-0 p-6">
          <span class="bg-gold text-navy text-[10px] font-bold uppercase tracking-widest px-2 py-1 mb-2 inline-block">Industrial</span>
          <h3 class="font-display text-white text-xl tracking-wide">ARMAZÉM PORTO DA BEIRA</h3>
          <p class="text-white/60 text-xs mt-1 flex items-center gap-1">
            <i data-lucide="map-pin" class="w-3 h-3"></i> Porto, Beira · 2023
          </p>
        </div>
      </div>

      <!-- Project 4 -->
      <div class="proj-card md:col-span-2 relative overflow-hidden cursor-pointer" style="aspect-ratio:16/7">
        <img src="https://images.unsplash.com/photo-1590856029826-c7a73142bbf1?w=1000&q=80&auto=format&fit=crop"
             alt="Hotel Costa do Sol" class="w-full h-full object-cover" loading="lazy">
        <div class="overlay absolute inset-0"></div>
        <div class="absolute bottom-0 left-0 p-6">
          <span class="bg-gold text-navy text-[10px] font-bold uppercase tracking-widest px-2 py-1 mb-2 inline-block">Comercial</span>
          <h3 class="font-display text-white text-2xl tracking-wide">HOTEL COSTA DO SOL</h3>
          <p class="text-white/60 text-xs mt-1 flex items-center gap-1">
            <i data-lucide="map-pin" class="w-3 h-3"></i> Beira, Sofala · 2021
          </p>
        </div>
      </div>

    </div>

    <div class="md:hidden mt-8 text-center sr">
      <a href="#" class="btn-gold">Ver Todos os Projetos <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
    </div>

  </div>
</section>


<!-- ════════════ CONTACTO ════════════ -->
<section id="contacto" class="bg-navy py-24">
  <div class="max-w-6xl mx-auto px-8">
    <div class="grid md:grid-cols-2 gap-16 items-start">

      <!-- Left: info -->
      <div class="sr">
        <p class="sec-label" style="color:#E8A020">Fale Connosco</p>
        <h2 class="font-display text-white leading-tight mb-6" style="font-size:clamp(2.2rem,4vw,3.2rem)">
          PRONTO PARA<br>COMEÇAR O SEU<br><span class="text-gold">PROJECTO?</span>
        </h2>
        <p class="text-white/50 text-sm leading-relaxed mb-10 font-light">
          Envie-nos os detalhes do seu projecto. A nossa equipa responde em menos de 24 horas com um orçamento sem compromisso.
        </p>

        <!-- Contact details -->
        <div class="space-y-5">
          <div class="flex items-center gap-4">
            <div class="w-10 h-10 border border-white/15 flex items-center justify-center flex-shrink-0">
              <i data-lucide="map-pin" class="w-4 h-4 text-gold"></i>
            </div>
            <div>
              <div class="text-white/40 text-xs uppercase tracking-widest mb-0.5">Morada</div>
              <div class="text-white text-sm">Beira, Sofala, Moçambique</div>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="w-10 h-10 border border-white/15 flex items-center justify-center flex-shrink-0">
              <i data-lucide="phone" class="w-4 h-4 text-gold"></i>
            </div>
            <div>
              <div class="text-white/40 text-xs uppercase tracking-widest mb-0.5">Telefone</div>
              <a href="tel:+258840000000" class="text-white text-sm hover:text-gold transition">+258 84 000 0000</a>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="w-10 h-10 border border-white/15 flex items-center justify-center flex-shrink-0">
              <i data-lucide="mail" class="w-4 h-4 text-gold"></i>
            </div>
            <div>
              <div class="text-white/40 text-xs uppercase tracking-widest mb-0.5">Email</div>
              <a href="mailto:geral@construcaomz.co.mz" class="text-white text-sm hover:text-gold transition">geral@construcaomz.co.mz</a>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="w-10 h-10 border border-white/15 flex items-center justify-center flex-shrink-0">
              <i data-lucide="clock" class="w-4 h-4 text-gold"></i>
            </div>
            <div>
              <div class="text-white/40 text-xs uppercase tracking-widest mb-0.5">Horário</div>
              <div class="text-white text-sm">Seg – Sex &nbsp; 7h – 18h</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: form -->
      <div class="sr sr-delay-2">
        <form id="contact-form" class="space-y-6" novalidate>

          <div class="grid grid-cols-2 gap-6">
            <div>
              <label class="text-white/40 text-[11px] uppercase tracking-widest block mb-1">Nome *</label>
              <input type="text" name="nome" required placeholder="O seu nome"
                     class="field" autocomplete="off">
            </div>
            <div>
              <label class="text-white/40 text-[11px] uppercase tracking-widest block mb-1">Empresa</label>
              <input type="text" name="empresa" placeholder="Nome da empresa"
                     class="field" autocomplete="off">
            </div>
          </div>

          <div class="grid grid-cols-2 gap-6">
            <div>
              <label class="text-white/40 text-[11px] uppercase tracking-widest block mb-1">Email *</label>
              <input type="email" name="email" required placeholder="email@exemplo.com"
                     class="field" autocomplete="off">
            </div>
            <div>
              <label class="text-white/40 text-[11px] uppercase tracking-widest block mb-1">Telefone</label>
              <input type="tel" name="tel" placeholder="+258 00 000 0000"
                     class="field" autocomplete="off">
            </div>
          </div>

          <div>
            <label class="text-white/40 text-[11px] uppercase tracking-widest block mb-1">Tipo de Projecto *</label>
            <select name="tipo" required class="field">
              <option value="" disabled selected>Seleccione o tipo de obra</option>
              <option value="residencial">Construção Residencial</option>
              <option value="comercial">Construção Comercial</option>
              <option value="industrial">Construção Industrial</option>
              <option value="remodelacao">Remodelação</option>
              <option value="consultoria">Projecto & Consultoria</option>
              <option value="outro">Outro</option>
            </select>
          </div>

          <div>
            <label class="text-white/40 text-[11px] uppercase tracking-widest block mb-1">Mensagem *</label>
            <textarea name="mensagem" required rows="4" placeholder="Descreva brevemente o seu projecto..."
                      class="field resize-none" style="border-bottom:1px solid rgba(255,255,255,.25)"></textarea>
          </div>

          <!-- Error msg -->
          <div id="form-error" class="hidden text-red-400 text-xs flex items-center gap-2">
            <i data-lucide="alert-circle" class="w-4 h-4"></i>
            <span>Por favor preencha os campos obrigatórios.</span>
          </div>

          <button type="submit" class="btn-gold w-full justify-center py-4" id="submit-btn">
            <span id="btn-text">ENVIAR MENSAGEM</span>
            <i data-lucide="send" class="w-4 h-4" id="btn-icon"></i>
            <i data-lucide="loader-2" class="w-4 h-4 hidden animate-spin" id="btn-loader"></i>
          </button>

          <p class="text-white/25 text-[11px] text-center">
            Os seus dados são tratados com total confidencialidade.
          </p>
        </form>
      </div>

    </div>
  </div>
</section>


<!-- ════════════ FOOTER ════════════ -->
<footer class="bg-navy border-t border-white/10 py-8">
  <div class="max-w-6xl mx-auto px-8 flex flex-col md:flex-row items-center justify-between gap-4">
    <span class="font-display text-white text-xl tracking-widest">
      <span class="text-gold">C</span>ONSTRUCAO<span class="text-gold">MZ</span>
    </span>
    <p class="text-white/30 text-xs">© 2025 ConstrucaoMz · Beira, Moçambique · Todos os direitos reservados.</p>
    <div class="flex gap-3">
      <a href="#" class="w-8 h-8 border border-white/15 flex items-center justify-center hover:border-gold transition">
        <i data-lucide="facebook" class="w-3.5 h-3.5 text-white/50 hover:text-gold transition"></i>
      </a>
      <a href="#" class="w-8 h-8 border border-white/15 flex items-center justify-center hover:border-gold transition">
        <i data-lucide="linkedin" class="w-3.5 h-3.5 text-white/50 hover:text-gold transition"></i>
      </a>
      <a href="#" class="w-8 h-8 border border-white/15 flex items-center justify-center hover:border-gold transition">
        <i data-lucide="instagram" class="w-3.5 h-3.5 text-white/50 hover:text-gold transition"></i>
      </a>
    </div>
  </div>
</footer>

<!-- Toast notification -->
<div id="toast">
  <div class="flex items-center gap-3">
    <i data-lucide="check-circle" class="w-4 h-4 text-gold"></i>
    <span>Mensagem enviada! Responderemos em breve.</span>
  </div>
</div>


<script>
// ── Init Lucide icons
lucide.createIcons();

// ── Navbar scroll
const nav = document.getElementById('nav');
window.addEventListener('scroll', () => {
  nav.classList.toggle('scrolled', window.scrollY > 50);
}, { passive: true });

// ── Mobile menu
const mbtn = document.getElementById('mbtn');
const mmenu = document.getElementById('mmenu');
const micoOpen  = document.getElementById('mico-open');
const micoClose = document.getElementById('mico-close');
let mOpen = false;
mbtn.addEventListener('click', () => {
  mOpen = !mOpen;
  mmenu.classList.toggle('hidden', !mOpen);
  micoOpen.classList.toggle('hidden', mOpen);
  micoClose.classList.toggle('hidden', !mOpen);
});
// Close menu on link click
mmenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
  mOpen = false;
  mmenu.classList.add('hidden');
  micoOpen.classList.remove('hidden');
  micoClose.classList.add('hidden');
}));

// ── Scroll reveal
const srObserver = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); } });
}, { threshold: 0.08 });
document.querySelectorAll('.sr').forEach(el => srObserver.observe(el));

// ── Contact form
const form      = document.getElementById('contact-form');
const formError = document.getElementById('form-error');
const submitBtn = document.getElementById('submit-btn');
const btnText   = document.getElementById('btn-text');
const btnIcon   = document.getElementById('btn-icon');
const btnLoader = document.getElementById('btn-loader');
const toast     = document.getElementById('toast');

form.addEventListener('submit', async (e) => {
  e.preventDefault();
  formError.classList.add('hidden');

  // Validate required fields
  const required = form.querySelectorAll('[required]');
  let valid = true;
  required.forEach(f => { if (!f.value.trim()) valid = false; });
  if (!valid) { formError.classList.remove('hidden'); return; }

  // Loading state
  submitBtn.disabled = true;
  btnText.textContent = 'A ENVIAR...';
  btnIcon.classList.add('hidden');
  btnLoader.classList.remove('hidden');

  // Collect data
  const data = Object.fromEntries(new FormData(form));

  try {
    // ── Replace the URL below with your actual backend endpoint or mailto handler ──
    // Example with Formspree: await fetch('https://formspree.io/f/YOUR_ID', {...})
    // For now we simulate a 1.5s delay and show success
    await new Promise(r => setTimeout(r, 1500));

    // Success
    form.reset();
    showToast();
  } catch (err) {
    formError.querySelector('span').textContent = 'Erro ao enviar. Tente novamente.';
    formError.classList.remove('hidden');
  } finally {
    submitBtn.disabled = false;
    btnText.textContent = 'ENVIAR MENSAGEM';
    btnIcon.classList.remove('hidden');
    btnLoader.classList.add('hidden');
    lucide.createIcons(); // re-render after DOM change
  }
});

function showToast() {
  toast.classList.add('show');
  setTimeout(() => toast.classList.remove('show'), 4000);
}
</script>

</body>
</html>