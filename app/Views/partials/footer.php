<?php
/**
 * app/Views/partials/footer.php
 * Incluído pelo layout via $this->include('partials/footer')
 *
 * Variáveis herdadas do layout:
 *   $lang (string) 'pt' | 'en'
 */

$lang = $lang ?? get_cookie('lang') ?? 'pt';

$t = [
    'pt' => [
        'tagline'        => 'Construindo o futuro de Moçambique com excelência técnica e compromisso total.',
        'services'       => 'Serviços',
        'company'        => 'Empresa',
        'contact'        => 'Contacto',
        'rights'         => 'Todos os direitos reservados.',
        'privacy'        => 'Política de Privacidade',
        'terms'          => 'Termos de Uso',
        'srv_list'       => ['Construção Residencial', 'Construção Comercial', 'Construção Industrial', 'Remodelação', 'Projecto & Consultoria'],
        'srv_links'      => ['/servicos#residencial', '/servicos#comercial', '/servicos#industrial', '/servicos#remodelacao', '/servicos#consultoria'],
        'cmp_list'       => ['Quem Somos', 'Os Nossos Projetos', 'Testemunhos', 'Carreiras', 'Blog & Notícias'],
        'cmp_links'      => ['/sobre', '/projetos', '/#depoimentos', '/carreiras', '/blog'],
        'newsletter'     => 'Subscrever Newsletter',
        'nl_placeholder' => 'O seu email',
        'nl_btn'         => 'Subscrever',
        'cta_banner'     => 'PRONTO PARA INICIAR O SEU PROJECTO?',
        'cta_btn'        => 'Contacte-nos Agora',
        'schedule'       => 'Seg – Sex &nbsp; 7h – 18h',
        'no_spam'        => 'Sem spam. Cancele quando quiser.',
        'made_in'        => 'Desenvolvido com ♥ na Beira',
    ],
    'en' => [
        'tagline'        => 'Building the future of Mozambique with technical excellence and full commitment.',
        'services'       => 'Services',
        'company'        => 'Company',
        'contact'        => 'Contact',
        'rights'         => 'All rights reserved.',
        'privacy'        => 'Privacy Policy',
        'terms'          => 'Terms of Use',
        'srv_list'       => ['Residential Construction', 'Commercial Construction', 'Industrial Construction', 'Renovation', 'Design & Consulting'],
        'srv_links'      => ['/services#residential', '/services#commercial', '/services#industrial', '/services#renovation', '/services#consulting'],
        'cmp_list'       => ['About Us', 'Our Projects', 'Testimonials', 'Careers', 'Blog & News'],
        'cmp_links'      => ['/about', '/projects', '/#testimonials', '/careers', '/blog'],
        'newsletter'     => 'Subscribe Newsletter',
        'nl_placeholder' => 'Your email',
        'nl_btn'         => 'Subscribe',
        'cta_banner'     => 'READY TO START YOUR PROJECT?',
        'cta_btn'        => 'Contact Us Now',
        'schedule'       => 'Mon – Fri &nbsp; 7am – 6pm',
        'no_spam'        => 'No spam. Cancel anytime.',
        'made_in'        => 'Built with ♥ in Beira',
    ],
];

$l    = $t[$lang] ?? $t['pt'];
$year = date('Y');
?>

<footer class="bg-navy text-white">

  <!-- ── Banner CTA ── -->
  <div class="bg-gold">
    <div class="max-w-6xl mx-auto px-6 md:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-4">
      <p class="font-display text-navy text-lg md:text-xl tracking-wide">
        <?= esc($l['cta_banner']) ?>
      </p>
      <a href="<?= base_url('contacto') ?>"
         class="flex-shrink-0 bg-navy text-white font-display font-bold text-sm uppercase tracking-widest px-6 py-3 hover:bg-secondary transition-colors duration-200 flex items-center gap-2">
        <?= esc($l['cta_btn']) ?>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>
  </div>

  <!-- ── Corpo principal ── -->
  <div class="max-w-6xl mx-auto px-6 md:px-8 py-14 md:py-20">
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-12">

      <!-- Coluna 1 — Marca -->
      <div class="sm:col-span-2 lg:col-span-1">
        <a href="<?= base_url('/') ?>" class="inline-block mb-5" aria-label="ConstrucaoMz">
          <img src="<?= base_url('assets/images/logo.png') ?>"
               alt="ConstrucaoMz Logo" class="h-10 w-auto"
               onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
          <span class="hidden font-display text-2xl font-bold text-white tracking-wide">
            <span class="text-gold">C</span>ONSTRUCAO<span class="text-gold">MZ</span>
          </span>
        </a>

        <p class="text-white/50 text-sm leading-relaxed font-light mb-6 max-w-xs">
          <?= esc($l['tagline']) ?>
        </p>

        <!-- Selos de certificação -->
        <div class="flex flex-wrap gap-2 mb-6">
          <span class="border border-white/15 text-white/50 text-[10px] uppercase tracking-widest px-2 py-1 font-semibold">ISO 9001</span>
          <span class="border border-white/15 text-white/50 text-[10px] uppercase tracking-widest px-2 py-1 font-semibold">Licenciado</span>
          <span class="border border-white/15 text-white/50 text-[10px] uppercase tracking-widest px-2 py-1 font-semibold">5 Anos Garantia</span>
        </div>

        <!-- Redes sociais -->
        <div class="flex gap-3">
          <?php
          $socials = [
            ['url' => 'https://facebook.com/construcaomz',         'label' => 'Facebook',  'svg' => '<path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>'],
            ['url' => 'https://linkedin.com/company/construcaomz', 'label' => 'LinkedIn',  'svg' => '<path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/>'],
            ['url' => 'https://wa.me/258840000000',                 'label' => 'WhatsApp', 'svg' => '<path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a8.4 8.4 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479s1.065 2.876 1.213 3.074c.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.109.549 4.09 1.508 5.815L.057 23.99l6.303-1.657A11.954 11.954 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.003-1.365l-.36-.214-3.718.976.99-3.62-.233-.374A9.818 9.818 0 0112 2.182c5.426 0 9.818 4.392 9.818 9.818S17.426 21.818 12 21.818z"/>'],
          ];
          foreach ($socials as $s) : ?>
          <a href="<?= $s['url'] ?>" target="_blank" rel="noopener"
             class="w-9 h-9 border border-white/15 flex items-center justify-center text-white/40 hover:text-gold hover:border-gold transition-colors"
             aria-label="<?= $s['label'] ?>">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><?= $s['svg'] ?></svg>
          </a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Coluna 2 — Serviços -->
      <div>
        <h4 class="font-display text-white text-sm uppercase tracking-widest mb-5 pb-2 border-b border-white/10">
          <?= esc($l['services']) ?>
        </h4>
        <ul class="space-y-2.5">
          <?php foreach ($l['srv_list'] as $i => $srv) : ?>
          <li>
            <a href="<?= base_url(ltrim($l['srv_links'][$i], '/')) ?>"
               class="text-white/50 text-sm font-light hover:text-gold transition flex items-center gap-2 group">
              <span class="w-0 h-px bg-gold transition-all duration-300 group-hover:w-3"></span>
              <?= esc($srv) ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Coluna 3 — Empresa -->
      <div>
        <h4 class="font-display text-white text-sm uppercase tracking-widest mb-5 pb-2 border-b border-white/10">
          <?= esc($l['company']) ?>
        </h4>
        <ul class="space-y-2.5">
          <?php foreach ($l['cmp_list'] as $i => $cmp) : ?>
          <li>
            <a href="<?= base_url(ltrim($l['cmp_links'][$i], '/')) ?>"
               class="text-white/50 text-sm font-light hover:text-gold transition flex items-center gap-2 group">
              <span class="w-0 h-px bg-gold transition-all duration-300 group-hover:w-3"></span>
              <?= esc($cmp) ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Coluna 4 — Contacto + Newsletter -->
      <div>
        <h4 class="font-display text-white text-sm uppercase tracking-widest mb-5 pb-2 border-b border-white/10">
          <?= esc($l['contact']) ?>
        </h4>

        <ul class="space-y-4 mb-8">
          <li class="flex items-start gap-3">
            <svg class="w-4 h-4 text-gold mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <span class="text-white/50 text-sm font-light">Beira, Sofala<br>Moçambique</span>
          </li>
          <li class="flex items-center gap-3">
            <svg class="w-4 h-4 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            <a href="tel:+258840000000" class="text-white/50 text-sm hover:text-gold transition">+258 84 000 0000</a>
          </li>
          <li class="flex items-center gap-3">
            <svg class="w-4 h-4 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <a href="mailto:geral@construcaomz.co.mz" class="text-white/50 text-sm hover:text-gold transition">geral@construcaomz.co.mz</a>
          </li>
          <li class="flex items-center gap-3">
            <svg class="w-4 h-4 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="text-white/50 text-sm"><?= $l['schedule'] ?></span>
          </li>
        </ul>

        <!-- Newsletter -->
        <div>
          <p class="text-white/70 text-xs uppercase tracking-widest font-semibold mb-3"><?= esc($l['newsletter']) ?></p>
          <?= form_open(base_url('newsletter/subscribe'), ['class' => 'flex gap-0']) ?>
            <input type="email" name="email" required
                   placeholder="<?= esc($l['nl_placeholder']) ?>"
                   class="flex-1 bg-white/5 border border-white/15 text-white text-sm px-3 py-2.5 placeholder:text-white/30 focus:outline-none focus:border-gold transition">
            <button type="submit"
                    class="bg-gold text-navy font-bold text-xs uppercase tracking-widest px-4 py-2.5 hover:bg-gold-dark transition flex-shrink-0">
              <?= esc($l['nl_btn']) ?>
            </button>
          <?= form_close() ?>
          <p class="text-white/25 text-[10px] mt-2"><?= esc($l['no_spam']) ?></p>
        </div>
      </div>

    </div>
  </div>

  <!-- ── Barra inferior ── -->
  <div class="border-t border-white/10">
    <div class="max-w-6xl mx-auto px-6 md:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
      <p class="text-white/30 text-xs font-light text-center sm:text-left">
        &copy; <?= $year ?> ConstrucaoMz. <?= esc($l['rights']) ?>
        &nbsp;·&nbsp;
        <?= $l['made_in'] ?>
      </p>
      <div class="flex items-center gap-4">
        <a href="<?= base_url('politica-de-privacidade') ?>" class="text-white/30 text-xs hover:text-gold transition">
          <?= esc($l['privacy']) ?>
        </a>
        <span class="text-white/15">|</span>
        <a href="<?= base_url('termos-de-uso') ?>" class="text-white/30 text-xs hover:text-gold transition">
          <?= esc($l['terms']) ?>
        </a>
      </div>
    </div>
  </div>

</footer>

<!-- ════ Botão flutuante WhatsApp ════ -->
<a href="https://wa.me/258840000000?text=Ol%C3%A1%2C%20gostaria%20de%20pedir%20um%20or%C3%A7amento."
   target="_blank" rel="noopener"
   class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-green-500 hover:bg-green-600 text-white flex items-center justify-center shadow-2xl transition-transform hover:scale-110 duration-200 rounded-full"
   aria-label="Contactar via WhatsApp">
  <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a8.4 8.4 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479s1.065 2.876 1.213 3.074c.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
    <path d="M12 0C5.373 0 0 5.373 0 12c0 2.109.549 4.09 1.508 5.815L.057 23.99l6.303-1.657A11.954 11.954 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.003-1.365l-.36-.214-3.718.976.99-3.62-.233-.374A9.818 9.818 0 0112 2.182c5.426 0 9.818 4.392 9.818 9.818S17.426 21.818 12 21.818z"/>
  </svg>
</a>