<?php get_header(); ?>

<div class="bg"></div>

<main class="incoming">
  <div class="content container">
    <header class="header">
      <h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/logo.svg" alt="Overflow Systems" title="Overflow Systems" class="logo">
      </h1>
    </header>

    <div class="left">
      <h1 class="title">Site em <br> construção</h1>

      <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/building.svg" alt="" class="building">
    </div>

    <div class="right">
      <form action="#" class="form">
        <p class="desc">Enquanto isso...</p>
        <p class="desc">Entre em contato conosco e <br>faça seu orçamento</p>

        <label class="label">
          <span class="desc">Nome</span>
          <input type="text" name="nome" class="input" required>
        </label>

        <label class="label">
          <span class="desc">Email</span>
          <input type="mail" name="email" class="input" required>
        </label>

        <label class="label">
          <span class="desc">Celular</span>
          <input type="mail" name="celular" class="input" required>
        </label>

        <label class="label">
          <span class="desc">Mensagem</span>
          <textarea name="mensagem" class="input"></textarea>
        </label>

        <button type="submit" class="submit">Enviar <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/send.svg" alt="" class="icon"></button>
      </form>

      <ul class="contact-list">
        <li>
          <a href="http://api.whatsapp.com/send?phone=5513996706150&text=Olá, gostaria de fazer um orçamento" class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/whatsapp.svg" alt="" class="icon"> (13) 99670-6150</a>
        </li>
        <li>
          <a href="http://api.whatsapp.com/send?phone=5513981007944&text=Olá, gostaria de fazer um orçamento" class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/whatsapp.svg" alt="" class="icon"> (13) 98100-7944</a>
        </li>
        <li>
          <a href="mailto:ismel.sousa@overflow.dev.br" class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/email.svg" alt="" class="icon"> ismael.sousa@overflow.dev.br</a>
        </li>
      </ul>
    </div>
    
  </div>

</main>

<?php get_footer(); ?>