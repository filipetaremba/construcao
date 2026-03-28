<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?php
/**
 * app/Views/pages/contacto.php
 * Página de Contacto — ConstrucaoMz
 * Bilíngue PT | EN
 */
$lang = $lang ?? get_cookie('lang') ?? 'pt';

$t = [
    'pt' => [
        'page_label'  => 'Fale Connosco',
        'page_title'  => 'CONTACTO',
        'bc_home'     => 'Início',
        'bc_page'     => 'Contacto',

        /* Info de contacto */
        'info_label'  => 'Informações de Contacto',
        'info_title'  => 'ESTAMOS AQUI PARA AJUDAR',
        'info_sub'    => 'Tem uma questão, um projecto ou simplesmente quer saber mais? A nossa equipa responde em menos de 24 horas úteis.',

        'contacts' => [
            ['icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'label' => 'Telefone',            'val' => '+258 853 592 701',          'href' => 'tel:+258853592701'],
            ['icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',                                                                                                                'label' => 'Email',                'val' => 'geral@construcaomz.co.mz', 'href' => 'mailto:geral@construcaomz.co.mz'],
            ['icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z',                                                                                                 'label' => 'Sede (Beira)',         'val' => 'Av. Samora Machel 482, Beira, Sofala, Moçambique', 'href' => 'https://maps.google.com/?q=Beira,Sofala,Mozambique'],
            ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',                                                                                                                                                                          'label' => 'Horário de Atendimento','val' => 'Segunda a Sexta: 07h30 – 17h30 · Sábado: 08h00 – 12h00', 'href' => null],
        ],

        /* Escritórios */
        'offices_label' => 'Presença Nacional',
        'offices_title' => 'OS NOSSOS ESCRITÓRIOS',
        'offices' => [
            ['city' => 'Beira',   'province' => 'Sofala',  'address' => 'Av. Samora Machel 482',   'phone' => '+258 853 592 701', 'email' => 'beira@construcaomz.co.mz',   'is_hq' => true],
            ['city' => 'Maputo',  'province' => 'Maputo',  'address' => 'Av. 25 de Setembro 1721', 'phone' => '+258 841 234 567', 'email' => 'maputo@construcaomz.co.mz',  'is_hq' => false],
            ['city' => 'Nampula', 'province' => 'Nampula', 'address' => 'Rua dos Continuadores 88','phone' => '+258 862 345 678', 'email' => 'nampula@construcaomz.co.mz', 'is_hq' => false],
            ['city' => 'Tete',    'province' => 'Tete',    'address' => 'Av. Eduardo Mondlane 31', 'phone' => '+258 873 456 789', 'email' => 'tete@construcaomz.co.mz',    'is_hq' => false],
        ],
        'hq_badge'     => 'Sede',

        /* Formulário */
        'form_label'   => 'Enviar Mensagem',
        'form_title'   => 'FALE CONNOSCO',
        'form_sub'     => 'Preencha o formulário e entraremos em contacto em menos de 24 horas.',
        'f_name'       => 'Nome *',
        'f_empresa'    => 'Empresa',
        'f_email'      => 'Email *',
        'f_tel'        => 'Telefone / WhatsApp',
        'f_assunto'    => 'Assunto *',
        'f_assunto_opts' => [
            ''              => 'Seleccione o assunto',
            'orcamento'     => 'Pedido de Orçamento',
            'informacao'    => 'Informação Geral',
            'parceria'      => 'Parceria / Fornecedores',
            'reclamacao'    => 'Reclamação / Garantia',
            'emprego'       => 'Candidatura de Emprego',
            'outro'         => 'Outro',
        ],
        'f_msg'        => 'Mensagem *',
        'f_msg_ph'     => 'Descreva como podemos ajudá-lo...',
        'f_submit'     => 'ENVIAR MENSAGEM',
        'f_privacy'    => 'Os seus dados são tratados com total confidencialidade.',
        'f_success'    => 'Mensagem enviada com sucesso! Entraremos em contacto em breve.',

        /* WhatsApp */
        'wa_label'     => 'Prefere o WhatsApp?',
        'wa_title'     => 'FALE CONNOSCO DIRECTAMENTE',
        'wa_sub'       => 'A forma mais rápida de obter uma resposta. A nossa equipa está disponível no WhatsApp durante o horário de atendimento.',
        'wa_btn'       => 'Iniciar Conversa no WhatsApp',

        /* FAQ */
        'faq_label'    => 'Dúvidas Rápidas',
        'faq_title'    => 'PERGUNTAS FREQUENTES',
        'faqs' => [
            ['q' => 'Qual o prazo para receber um orçamento?',             'a' => 'Respondemos a todos os pedidos de orçamento em menos de 24 horas úteis. Para projectos mais complexos que requeiram visita técnica, contactamos para agendar num prazo de 48 horas.'],
            ['q' => 'Trabalham em todo o território nacional?',            'a' => 'Sim. Temos escritórios em Beira, Maputo, Nampula e Tete, com equipas que cobrem todas as províncias. Os custos de deslocação são incluídos de forma transparente no orçamento.'],
            ['q' => 'Como posso acompanhar o progresso da minha obra?',   'a' => 'Enviamos relatórios semanais com fotografias e percentagem de conclusão. Para obras de maior dimensão, disponibilizamos acesso a um painel online com actualizações diárias.'],
            ['q' => 'Aceitam projectos de arquitectura externos?',         'a' => 'Sim. Executamos obras com base em projectos externos de arquitectura e engenharia. Também oferecemos o serviço completo de projecto + execução se o cliente não tiver projecto.'],
            ['q' => 'Têm garantia nas obras?',                             'a' => 'Todas as obras incluem 5 anos de garantia estrutural e 1 ano em acabamentos. Qualquer problema identificado dentro do período de garantia é resolvido sem custos adicionais.'],
        ],
    ],

    'en' => [
        'page_label'  => 'Get in Touch',
        'page_title'  => 'CONTACT',
        'bc_home'     => 'Home',
        'bc_page'     => 'Contact',
        'info_label'  => 'Contact Information',
        'info_title'  => 'WE\'RE HERE TO HELP',
        'info_sub'    => 'Have a question, a project or simply want to know more? Our team responds within 24 business hours.',
        'contacts' => [
            ['icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'label' => 'Phone',           'val' => '+258 853 592 701',          'href' => 'tel:+258853592701'],
            ['icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',                                                                                                                'label' => 'Email',           'val' => 'geral@construcaomz.co.mz', 'href' => 'mailto:geral@construcaomz.co.mz'],
            ['icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z',                                                                                                 'label' => 'HQ (Beira)',      'val' => 'Av. Samora Machel 482, Beira, Sofala, Mozambique', 'href' => 'https://maps.google.com/?q=Beira,Sofala,Mozambique'],
            ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',                                                                                                                                                                          'label' => 'Office Hours',    'val' => 'Mon–Fri: 07:30 – 17:30 · Sat: 08:00 – 12:00', 'href' => null],
        ],
        'offices_label' => 'National Presence',
        'offices_title' => 'OUR OFFICES',
        'offices' => [
            ['city' => 'Beira',   'province' => 'Sofala',  'address' => 'Av. Samora Machel 482',   'phone' => '+258 853 592 701', 'email' => 'beira@construcaomz.co.mz',   'is_hq' => true],
            ['city' => 'Maputo',  'province' => 'Maputo',  'address' => 'Av. 25 de Setembro 1721', 'phone' => '+258 841 234 567', 'email' => 'maputo@construcaomz.co.mz',  'is_hq' => false],
            ['city' => 'Nampula', 'province' => 'Nampula', 'address' => 'Rua dos Continuadores 88','phone' => '+258 862 345 678', 'email' => 'nampula@construcaomz.co.mz', 'is_hq' => false],
            ['city' => 'Tete',    'province' => 'Tete',    'address' => 'Av. Eduardo Mondlane 31', 'phone' => '+258 873 456 789', 'email' => 'tete@construcaomz.co.mz',    'is_hq' => false],
        ],
        'hq_badge'     => 'HQ',
        'form_label'   => 'Send a Message',
        'form_title'   => 'GET IN TOUCH',
        'form_sub'     => 'Fill in the form and we\'ll get back to you within 24 hours.',
        'f_name'       => 'Name *',
        'f_empresa'    => 'Company',
        'f_email'      => 'Email *',
        'f_tel'        => 'Phone / WhatsApp',
        'f_assunto'    => 'Subject *',
        'f_assunto_opts' => [
            ''              => 'Select a subject',
            'orcamento'     => 'Quote Request',
            'informacao'    => 'General Information',
            'parceria'      => 'Partnership / Suppliers',
            'reclamacao'    => 'Complaint / Warranty',
            'emprego'       => 'Job Application',
            'outro'         => 'Other',
        ],
        'f_msg'        => 'Message *',
        'f_msg_ph'     => 'Describe how we can help you...',
        'f_submit'     => 'SEND MESSAGE',
        'f_privacy'    => 'Your data is treated with full confidentiality.',
        'f_success'    => 'Message sent successfully! We will be in touch shortly.',
        'wa_label'     => 'Prefer WhatsApp?',
        'wa_title'     => 'CHAT WITH US DIRECTLY',
        'wa_sub'       => 'The fastest way to get a response. Our team is available on WhatsApp during office hours.',
        'wa_btn'       => 'Start WhatsApp Chat',
        'faq_label'    => 'Quick Answers',
        'faq_title'    => 'FREQUENTLY ASKED QUESTIONS',
        'faqs' => [
            ['q' => 'How long does it take to receive a quote?',               'a' => 'We respond to all quote requests within 24 business hours. For more complex projects requiring a site visit, we will contact you to schedule one within 48 hours.'],
            ['q' => 'Do you work across the entire country?',                  'a' => 'Yes. We have offices in Beira, Maputo, Nampula and Tete, with teams covering all provinces. Travel costs are included transparently in the quote.'],
            ['q' => 'How can I track the progress of my project?',             'a' => 'We send weekly reports with photos and completion percentages. For larger projects, we provide access to an online dashboard with daily updates.'],
            ['q' => 'Do you accept external architectural plans?',             'a' => 'Yes. We execute projects based on external architectural and engineering designs. We also offer a complete design + build service if the client does not have existing plans.'],
            ['q' => 'Do you provide a warranty on your work?',                 'a' => 'All projects include a 5-year structural warranty and 1-year warranty on finishes. Any issue identified within the warranty period is resolved at no additional cost.'],
        ],
    ],
];

$l   = $t[$lang] ?? $t['pt'];
$wa  = 'https://wa.me/258853592701?text=' . urlencode($lang === 'en' ? 'Hello, I would like more information.' : 'Olá, gostaria de mais informações.');
$tel = 'tel:+258853592701';
?>


<!-- ════════ HERO / CABEÇALHO ════════ -->
<section class="relative overflow-hidden bg-navy pt-[54px]">

  <div class="absolute inset-0 z-0">
    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1400&q=80&auto=format&fit=crop"
         alt="" class="w-full h-full object-cover opacity-20" loading="eager">
    <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/90 to-navy/70"></div>
    <div class="absolute inset-0 overflow-hidden">
      <div class="absolute top-0 right-0 w-2/5 h-full bg-gold opacity-[0.03] skew-x-[-6deg] translate-x-20"></div>
    </div>
  </div>

  <div class="relative z-10 max-w-6xl mx-auto px-6 md:px-8 w-full pt-16 pb-16">

    <nav class="flex items-center gap-2 text-white/40 text-xs uppercase tracking-widest mb-8 animate-fadein" style="animation-delay:.05s">
      <a href="<?= base_url('/') ?>" class="hover:text-gold transition"><?= esc($l['bc_home']) ?></a>
      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
      <span class="text-gold"><?= esc($l['bc_page']) ?></span>
    </nav>

    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <!-- Título -->
      <div class="animate-fadein" style="animation-delay:.15s">
        <p class="sec-label"><?= esc($l['page_label']) ?></p>
        <h1 class="font-display text-white leading-[.88] mb-6" style="font-size:clamp(2.8rem,7vw,5.5rem)">
          <?= esc($l['page_title']) ?>
        </h1>
        <p class="text-white/55 text-sm leading-relaxed font-light max-w-md"><?= esc($l['info_sub']) ?></p>
      </div>

      <!-- Info rápida -->
      <div class="grid sm:grid-cols-2 gap-4 animate-fadein" style="animation-delay:.3s">
        <?php foreach ($l['contacts'] as $c) : ?>
        <div class="bg-white/5 border border-white/10 p-5 hover:border-gold/40 transition-colors duration-300">
          <div class="flex items-start gap-3">
            <div class="w-9 h-9 bg-gold/10 flex items-center justify-center flex-shrink-0 mt-0.5">
              <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $c['icon'] ?>"/>
              </svg>
            </div>
            <div>
              <div class="text-white/40 text-[10px] uppercase tracking-widest mb-1"><?= esc($c['label']) ?></div>
              <?php if ($c['href']) : ?>
              <a href="<?= $c['href'] ?>" <?= str_starts_with($c['href'], 'http') ? 'target="_blank" rel="noopener"' : '' ?>
                 class="text-white text-xs leading-snug hover:text-gold transition font-medium">
                <?= esc($c['val']) ?>
              </a>
              <?php else : ?>
              <span class="text-white text-xs leading-snug font-medium"><?= esc($c['val']) ?></span>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>


<!-- ════════ FORMULÁRIO + WHATSAPP ════════ -->
<section class="py-16 md:py-24 bg-light">
  <div class="max-w-6xl mx-auto px-6 md:px-8">
    <div class="grid lg:grid-cols-5 gap-10 items-start">

      <!-- Formulário -->
      <div class="lg:col-span-3 reveal">
        <div class="bg-white border border-gray-100 p-8 md:p-10">

          <p class="sec-label"><?= esc($l['form_label']) ?></p>
          <h2 class="font-display text-navy mb-2" style="font-size:clamp(1.6rem,3vw,2.2rem)"><?= esc($l['form_title']) ?></h2>
          <p class="text-gray-400 text-sm font-light mb-8"><?= esc($l['form_sub']) ?></p>

          <?php if (session()->has('form_success')) : ?>
          <div class="bg-green-50 border border-green-200 text-green-700 text-sm p-4 mb-6 flex items-center gap-2">
            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <?= esc($l['f_success']) ?>
          </div>
          <?php endif; ?>

          <form action="<?= base_url('contacto/enviar') ?>" method="post" novalidate>

            <div class="grid sm:grid-cols-2 gap-5 mb-5">
              <div>
                <label class="field-label"><?= esc($l['f_name']) ?></label>
                <input type="text" name="nome" required placeholder="<?= $lang === 'en' ? 'Your name' : 'O seu nome' ?>"
                       value="<?= old('nome') ?>" class="field">
              </div>
              <div>
                <label class="field-label"><?= esc($l['f_empresa']) ?></label>
                <input type="text" name="empresa" placeholder="<?= $lang === 'en' ? 'Company name' : 'Nome da empresa' ?>"
                       value="<?= old('empresa') ?>" class="field">
              </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-5 mb-5">
              <div>
                <label class="field-label"><?= esc($l['f_email']) ?></label>
                <input type="email" name="email" required placeholder="email@exemplo.com"
                       value="<?= old('email') ?>" class="field">
              </div>
              <div>
                <label class="field-label"><?= esc($l['f_tel']) ?></label>
                <input type="tel" name="telefone" placeholder="+258 85 000 0000"
                       value="<?= old('telefone') ?>" class="field">
              </div>
            </div>

            <div class="mb-5">
              <label class="field-label"><?= esc($l['f_assunto']) ?></label>
              <select name="assunto" required class="field">
                <?php foreach ($l['f_assunto_opts'] as $val => $label) : ?>
                <option value="<?= $val ?>" <?= $val === '' ? 'disabled' . (old('assunto') ? '' : ' selected') : '' ?>
                        <?= old('assunto') === $val ? 'selected' : '' ?>>
                  <?= esc($label) ?>
                </option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="mb-7">
              <label class="field-label"><?= esc($l['f_msg']) ?></label>
              <textarea name="mensagem" required rows="5"
                        placeholder="<?= esc($l['f_msg_ph']) ?>"
                        class="field resize-none"><?= old('mensagem') ?></textarea>
            </div>

            <?= csrf_field() ?>

            <button type="submit" class="btn-gold w-full justify-center py-4">
              <?= esc($l['f_submit']) ?>
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
            </button>

            <p class="text-gray-400 text-[10px] text-center mt-3"><?= esc($l['f_privacy']) ?></p>

          </form>
        </div>
      </div>

      <!-- WhatsApp + Escritórios -->
      <div class="lg:col-span-2 space-y-6 reveal">

        <!-- WhatsApp card -->
        <div class="bg-navy text-white p-8 relative overflow-hidden">
          <div class="absolute top-0 right-0 w-32 h-32 bg-gold opacity-5 rounded-full translate-x-10 -translate-y-10"></div>
          <div class="relative z-10">
            <div class="w-12 h-12 bg-green-500 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a8.4 8.4 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479s1.065 2.876 1.213 3.074c.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                <path d="M12 0C5.373 0 0 5.373 0 12c0 2.109.549 4.09 1.508 5.815L.057 23.99l6.303-1.657A11.954 11.954 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.003-1.365l-.36-.214-3.718.976.99-3.62-.233-.374A9.818 9.818 0 0112 2.182c5.426 0 9.818 4.392 9.818 9.818S17.426 21.818 12 21.818z"/>
              </svg>
            </div>
            <p class="sec-label"><?= esc($l['wa_label']) ?></p>
            <h3 class="font-display text-white text-xl tracking-wide mb-3"><?= esc($l['wa_title']) ?></h3>
            <p class="text-white/50 text-sm leading-relaxed font-light mb-6"><?= esc($l['wa_sub']) ?></p>
            <a href="<?= $wa ?>" target="_blank" rel="noopener"
               class="flex items-center justify-center gap-2 bg-green-500 hover:bg-green-600 text-white text-xs font-bold uppercase tracking-widest py-3.5 px-6 transition-colors duration-200">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a8.4 8.4 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479s1.065 2.876 1.213 3.074c.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.109.549 4.09 1.508 5.815L.057 23.99l6.303-1.657A11.954 11.954 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.003-1.365l-.36-.214-3.718.976.99-3.62-.233-.374A9.818 9.818 0 0112 2.182c5.426 0 9.818 4.392 9.818 9.818S17.426 21.818 12 21.818z"/></svg>
              <?= esc($l['wa_btn']) ?>
            </a>
          </div>
        </div>

        <!-- Horário -->
        <div class="bg-white border border-gray-100 p-6">
          <h4 class="font-display text-navy text-sm tracking-widest uppercase mb-4">
            <?= $lang === 'en' ? 'Office Hours' : 'Horário de Atendimento' ?>
          </h4>
          <div class="space-y-2 text-sm">
            <div class="flex justify-between">
              <span class="text-gray-500 font-light"><?= $lang === 'en' ? 'Monday – Friday' : 'Segunda – Sexta' ?></span>
              <span class="text-navy font-medium">07:30 – 17:30</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 font-light"><?= $lang === 'en' ? 'Saturday' : 'Sábado' ?></span>
              <span class="text-navy font-medium">08:00 – 12:00</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 font-light"><?= $lang === 'en' ? 'Sunday & Holidays' : 'Domingo & Feriados' ?></span>
              <span class="text-gray-400 font-light"><?= $lang === 'en' ? 'Closed' : 'Encerrado' ?></span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- ════════ ESCRITÓRIOS ════════ -->
<section class="py-16 md:py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6 md:px-8">

    <div class="text-center mb-12 reveal">
      <p class="sec-label mx-auto"><?= esc($l['offices_label']) ?></p>
      <h2 class="font-display text-navy" style="font-size:clamp(2rem,4vw,3rem)"><?= esc($l['offices_title']) ?></h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 reveal">
      <?php foreach ($l['offices'] as $i => $office) : ?>
      <div class="border <?= $office['is_hq'] ? 'border-gold bg-navy text-white' : 'border-gray-100 bg-light' ?> p-6 relative reveal"
           style="transition-delay:<?= $i * 0.08 ?>s">
        <?php if ($office['is_hq']) : ?>
        <div class="absolute top-4 right-4 bg-gold text-navy text-[9px] font-bold uppercase tracking-widest px-2 py-0.5">
          <?= esc($l['hq_badge']) ?>
        </div>
        <?php endif; ?>

        <div class="w-8 h-8 <?= $office['is_hq'] ? 'bg-gold/20' : 'bg-navy' ?> flex items-center justify-center mb-4">
          <svg class="w-4 h-4 <?= $office['is_hq'] ? 'text-gold' : 'text-gold' ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
        </div>

        <h3 class="font-display text-lg tracking-wide mb-0.5 <?= $office['is_hq'] ? 'text-white' : 'text-navy' ?>"><?= esc($office['city']) ?></h3>
        <p class="text-[11px] uppercase tracking-widest mb-4 <?= $office['is_hq'] ? 'text-gold' : 'text-gray-400' ?>"><?= esc($office['province']) ?></p>

        <div class="space-y-2 text-xs <?= $office['is_hq'] ? 'text-white/60' : 'text-gray-500' ?>">
          <p class="font-light"><?= esc($office['address']) ?></p>
          <a href="tel:<?= preg_replace('/\s+/', '', $office['phone']) ?>"
             class="flex items-center gap-1.5 hover:text-gold transition font-medium <?= $office['is_hq'] ? 'text-white/80' : 'text-navy' ?>">
            <svg class="w-3 h-3 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            <?= esc($office['phone']) ?>
          </a>
          <a href="mailto:<?= $office['email'] ?>"
             class="flex items-center gap-1.5 hover:text-gold transition font-medium <?= $office['is_hq'] ? 'text-white/80' : 'text-navy' ?>">
            <svg class="w-3 h-3 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            <?= esc($office['email']) ?>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════ FAQ ════════ -->
<section class="py-16 md:py-20 bg-light">
  <div class="max-w-4xl mx-auto px-6 md:px-8">

    <div class="text-center mb-12 reveal">
      <p class="sec-label mx-auto"><?= esc($l['faq_label']) ?></p>
      <h2 class="font-display text-navy" style="font-size:clamp(2rem,4vw,3rem)"><?= esc($l['faq_title']) ?></h2>
    </div>

    <div class="space-y-1 reveal">
      <?php foreach ($l['faqs'] as $faq) : ?>
      <div class="faq-item border border-gray-200 bg-white hover:border-gold/40 transition-colors duration-200">
        <button class="faq-btn w-full text-left flex items-center justify-between gap-4 px-6 py-5 group" aria-expanded="false">
          <span class="font-display text-navy text-base tracking-wide group-hover:text-gold transition-colors duration-200">
            <?= esc($faq['q']) ?>
          </span>
          <span class="flex-shrink-0 w-8 h-8 border border-gray-300 group-hover:border-gold flex items-center justify-center transition-colors duration-200">
            <svg class="faq-icon w-4 h-4 text-gray-400 group-hover:text-gold transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
          </span>
        </button>
        <div class="faq-body overflow-hidden" style="max-height:0; transition:max-height .35s ease, padding .35s ease;">
          <p class="text-gray-500 text-sm leading-relaxed font-light px-6 pb-5"><?= esc($faq['a']) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
// ── FAQ Accordion ──
(function () {
  document.querySelectorAll('.faq-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      const item   = this.closest('.faq-item');
      const body   = item.querySelector('.faq-body');
      const icon   = item.querySelector('.faq-icon');
      const isOpen = this.getAttribute('aria-expanded') === 'true';

      document.querySelectorAll('.faq-item').forEach(el => {
        el.querySelector('.faq-btn').setAttribute('aria-expanded', 'false');
        el.querySelector('.faq-body').style.maxHeight = '0';
        el.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
        el.style.borderColor = '';
      });

      if (!isOpen) {
        this.setAttribute('aria-expanded', 'true');
        body.style.maxHeight = body.scrollHeight + 32 + 'px';
        icon.style.transform = 'rotate(45deg)';
        item.style.borderColor = '#E8A020';
      }
    });
  });
})();
</script>
<?= $this->endSection() ?>