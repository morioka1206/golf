<div id="loader-bg">
  <div id="loader">
    <img src="<?php echo get_theme_file_uri(); ?>/images/loading_logo.png" alt="Now Loading..." />
    <!-- <p>Now Loading...</p> -->
  </div>
</div>
<div id="wrap">
  <?php get_header(); ?>

  <div class="form-wrapper">
    <div class="page-title">Contact</div>
    <div class="form-title">お問い合わせ</div>
    <div class="form-contents">
      <!-- 公式LINEでのお問い合わせ -->
      <div class="form-line-contact">
        <div class="form-line-title"><img src="<?php echo get_theme_file_uri(); ?>/images/Line-icon.svg" alt="">公式LINEでのお問い合わせ</div>
        <div class="form-line-caution">
          <p>公式LINEを友達追加していただき、メッセージにてお問い合わせください。担当者よりご返信いたします。</p>
          <p>日々最新情報もお届けしております。</p>
        </div>
        <div class="form-line-link">
          <a href="https://lin.ee/7Ii8MCV"><img src="<?php echo get_theme_file_uri(); ?>/images/公式LINEはこちら.svg" alt=""></a>
        </div>
      </div>

      <!-- フォームでのお問い合わせ -->
      <div class="form-line-contact">
        <div class="form-line-title"><img src="<?php echo get_theme_file_uri(); ?>/images/Mail-icon.svg" alt="">フォームでのお問い合わせ</div>
        <div class="form-caution">メールフォームでのお問い合わせも受け付けております。下記に必要事項を入力し、確認画面へお進みください。</div>
      </div>
      <!-- フォーム -->


      <?php echo do_shortcode('[mwform_formkey key="183"]') ?>


    </div>


  </div>


  <!-- CONTACT US -->
  <?php get_template_part('contact-us') ?>

  <!-- フッター -->
  <?php get_footer(); ?>
</div>