<div id="loader-bg">
  <div id="loader">
    <img src="<?php echo get_theme_file_uri(); ?>/images/loading_logo.png" alt="Now Loading..." />
    <!-- <p>Now Loading...</p> -->
  </div>
</div>
<div id="wrap">
  <?php get_header(); ?>

  <div class="finish-page-wrapper">
    <div class="finish-page-title">
      Check
    </div>
    <div class="finish-title">お問い合わせ内容確認</div>
    <div class="finish-sentence">
      <p>ありがとうございます。</p>
      <p>お問い合わせ内容をご確認ください。</p>
    </div>
    <div class="pc-check">
      <?php echo do_shortcode('[mwform_formkey key="183"]'); ?>
    </div>

  </div>

  <?php get_footer(); ?>
</div>