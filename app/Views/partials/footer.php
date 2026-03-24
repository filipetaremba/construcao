<?php
/**
 * partials/footer.php
 * Variables: $lang
 */
$f = [
    'pt' => [
        'tagline'  => 'Construção de excelência na Beira e em Moçambique.',
        'servicos' => 'Serviços',
        'empresa'  => 'Empresa',
        'legal'    => 'Legal',
        'links_s'  => ['Construção Residencial', 'Construção Comercial', 'Construção Industrial', 'Remodelações', 'Projecto & Consultoria'],
        'links_e'  => ['Sobre Nós', 'Projetos', 'Contacto', 'Carreiras'],
        'links_l'  => ['Política de Privacidade', 'Termos e Condições'],
        'rights'   => '© ' . date('Y') . ' ConstrucaoMz. Todos os direitos reservados.',
        'made'     => 'Feito com orgulho na Beira, Moçambique.',
    ],
    'en' => [
        'tagline'  => 'Construction excellence in Beira and across Mozambique.',
        'servicos' => 'Services',
        'empresa'  => 'Company',
        'legal'    => 'Legal',
        'links_s'  => ['Residential Construction', 'Commercial Construction', 'Industrial Construction', 'Renovations', 'Design & Consultancy'],
        'links_e'  => ['About Us', 'Projects', 'Contact', 'Careers'],
        'links_l'  => ['Privacy Policy', 'Terms & Conditions'],
        'rights'   => '© ' . date('Y') . ' ConstrucaoMz. All rights reserved.',
        'made'     => 'Proudly made in Beira, Mozambique.',
    ],
];
$t = $f[$lang ?? 'pt'];
?>
<footer class="bg-primary text-white">

  <!-- Main footer content -->
  <div class="max-w-7xl mx-auto px-6 py-16">
    <div class="grid lg:grid-cols-4 gap-12">

      <!-- Brand column -->
      <div class="lg:col-span-1">
        <a href="/" class="inline-flex items-center gap-2 mb-5">
          <img src="/assets/images/logo.png" alt="ConstrucaoMz"
               class="h-10 w-auto"
               onerror="this.style.display='none'; document.getElementById('footer-logo-text').style.display='block'">
          <span id="footer-logo-text" class="hidden font-display font-black text-2xl tracking-wide">
            <span class="text-accent">C</span>ONSTRUCAO<span class="text-accent">MZ</span>
          </span>
        </a>
        <p class="font-body text-white/55 text-sm leading-relaxed mb-6">
          <?= htmlspecialchars($t['tagline']) ?>
        </p>
        <!-- Social icons -->
        <div class="flex gap-3">
          <?php
          $socials = [
              ['label' => 'Facebook',  'href' => '#', 'path' => 'M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z'],
              ['label' => 'LinkedIn',  'href' => '#', 'path' => 'M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z M4 6a2 2 0 100-4 2 2 0 000 4z'],
              ['label' => 'Instagram', 'href' => '#', 'path' => 'M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01M6.5 19.5h11a3 3 0 003-3v-11a3 3 0 00-3-3h-11a3 3 0 00-3 3v11a3 3 0 003 3z'],
          ];
          foreach ($socials as $s):
          ?>
            <a href="<?= $s['href'] ?>" aria-label="<?= $s['label'] ?>"
               class="w-9 h-9 bg-white/8 flex items-center justify-center hover:bg-accent hover:text-primary transition-all group">
              <svg class="w-4 h-4 text-white/60 group-hover:text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="<?= $s['path'] ?>"/>
              </svg>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Services -->
      <div>
        <h4 class="font-display font-bold text-white text-sm uppercase tracking-[0.18em] mb-5 flex items-center gap-2">
          <span class="w-6 h-px bg-accent"></span>
          <?= htmlspecialchars($t['servicos']) ?>
        </h4>
        <ul class="space-y-2.5">
          <?php foreach ($t['links_s'] as $link): ?>
            <li>
              <a href="/servicos" class="font-body text-white/55 text-sm hover:text-accent transition flex items-center gap-2 group">
                <span class="w-3 h-px bg-white/30 group-hover:bg-accent transition-colors"></span>
                <?= htmlspecialchars($link) ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Company -->
      <div>
        <h4 class="font-display font-bold text-white text-sm uppercase tracking-[0.18em] mb-5 flex items-center gap-2">
          <span class="w-6 h-px bg-accent"></span>
          <?= htmlspecialchars($t['empresa']) ?>
        </h4>
        <ul class="space-y-2.5">
          <?php
          $empresa_hrefs = ['/sobre', '/projetos', '/contacto', '/carreiras'];
          foreach ($t['links_e'] as $i => $link):
          ?>
            <li>
              <a href="<?= $empresa_hrefs[$i] ?? '#' ?>"
                 class="font-body text-white/55 text-sm hover:text-accent transition flex items-center gap-2 group">
                <span class="w-3 h-px bg-white/30 group-hover:bg-accent transition-colors"></span>
                <?= htmlspecialchars($link) ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Contact summary -->
      <div>
        <h4 class="font-display font-bold text-white text-sm uppercase tracking-[0.18em] mb-5 flex items-center gap-2">
          <span class="w-6 h-px bg-accent"></span>
          Contacto
        </h4>
        <div class="space-y-4">
          <div class="flex items-start gap-3">
            <svg class="w-4 h-4 text-accent flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <span class="font-body text-white/55 text-sm">Beira, Sofala<br>Moçambique</span>
          </div>
          <div class="flex items-center gap-3">
            <svg class="w-4 h-4 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            <a href="tel:+258840000000" class="font-body text-white/55 text-sm hover:text-accent transition">+258 84 000 0000</a>
          </div>
          <div class="flex items-center gap-3">
            <svg class="w-4 h-4 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <a href="mailto:geral@construcaomz.co.mz" class="font-body text-white/55 text-sm hover:text-accent transition">geral@construcaomz.co.mz</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Bottom bar -->
  <div class="border-t border-white/10">
    <div class="max-w-7xl mx-auto px-6 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
      <p class="font-body text-white/35 text-xs"><?= htmlspecialchars($t['rights']) ?></p>
      <div class="flex gap-5">
        <?php foreach ($t['links_l'] as $link): ?>
          <a href="#" class="font-body text-white/35 text-xs hover:text-accent transition"><?= htmlspecialchars($link) ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</footer>