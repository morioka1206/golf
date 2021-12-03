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
      Complete
    </div>
    <div class="finish-title">送信完了しました</div>
    <div class="finish-sentence">
      <p>お問い合わせいただき、誠にありがとうございます。</p>
    </div>
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <div class="top-button">トップページへ戻る</div>
    </a>
  </div>

  <?php get_footer(); ?>
</div>