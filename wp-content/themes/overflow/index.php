<?php get_header(); ?>

<div class="bg"></div>

<main class="incoming">
  <div class="content container">
    <header class="header">
      <h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/logo.svg" alt="Overflow Systems - Criação de sites em Praia Grande" title="Overflow Systems - Criação de sites em Praia Grande" class="logo">
      </h1>
    </header>

    <div class="left">
      <h1 class="title">Site em <br> construção</h1>

      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/building.svg" alt="Overflow Systems - Criação de sites em Praia Grande" title="Overflow Systems - Criação de sites em Praia Grande" class="building">
    </div>

    <div class="right">
      <?= do_shortcode('[contact-form-7 id="29" title="Em construção html_class="form"]') ?>

      <ul class="contact-list">
        <li>
          <a title="Entrar em contato via Whatsapp" href="http://api.whatsapp.com/send?phone=5513996706150&text=Olá, gostaria de fazer um orçamento" class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/whatsapp.svg" alt="Overflow Systems - Criação de sites em Praia Grande" title="Overflow Systems - Criação de sites em Praia Grande" class="icon"> (13) 99670-6150</a>
        </li>
        <li>
          <a title="Entrar em contato via Whatsapp" href="http://api.whatsapp.com/send?phone=5513981007944&text=Olá, gostaria de fazer um orçamento" class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/whatsapp.svg" alt="Overflow Systems - Criação de sites em Praia Grande" title="Overflow Systems - Criação de sites em Praia Grande" class="icon"> (13) 98100-7944</a>
        </li>
        <li>
          <a title="Entrar em contato via E-mail" href="mailto:atendimento@overflow.dev.br" class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/email.svg" alt="Overflow Systems - Criação de sites em Praia Grande" title="Overflow Systems - Criação de sites em Praia Grande" class="icon">atendimento@overflow.dev.br</a>
        </li>
      </ul>
    </div>
    
  </div>

</main>

<?php get_footer(); ?>