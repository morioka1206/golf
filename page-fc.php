<?php get_header(); ?>

<div class="fc-title-wrapper">
  <div class="fc-title">
    <div class="main-copy"><img src="<?php echo get_template_directory_uri(); ?>/images/maincopy.png" alt=""></div>
    <div class="sub-copy-wrapper">
      <div class="green-back"></div>
      <img class="sub-copy" src="<?php echo get_template_directory_uri(); ?>/images/subcopy 1.png" alt="">
    </div>
    <div class="top-contact-buttons">
      <a href="https://lin.ee/7Ii8MCV/" target="_blank" class="line-button"><img src="<?php echo get_template_directory_uri(); ?>/images/linebtn.png" alt=""></あ>
        <a href="<?php echo esc_url(home_url('/form')); ?>" target="_blank" class="mail-button"><img src="<?php echo get_template_directory_uri(); ?>/images/mailbtn.png" alt=""></a>
    </div>
  </div>
</div>

<?php get_footer(); ?>