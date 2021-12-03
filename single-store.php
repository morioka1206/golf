<div id="loader-bg">
  <div id="loader">
    <img src="<?php echo get_theme_file_uri(); ?>/images/loading_logo.png" alt="Now Loading..." />
    <!-- <p>Now Loading...</p> -->
  </div>
</div>
<div id="wrap">
  <?php get_header(); ?>

  <div class="store-details-wrapper">

    <?php
    while (have_posts()) :
      the_post();
    ?>
      <?php
      $args = array(
        'post_type' => 'store',
        'posts_per_page' => -1,
      );
      $st_query = new WP_Query($args);
      ?>


      <div class="store-details-top-image">
        <?php $top_image = SCF::get('top-image');
        echo wp_get_attachment_image($top_image, 'large');
        ?>
      </div>

      <!-- 店舗詳細情報 -->
      <div class="store-detail-introduction">
        <div class="store-introduction-text">
          <div class="store-introduction-name"><?php echo SCF::get('store-name') ?></div>
          <div class="store-introduction-sentence">
            <p><?php echo SCF::get('introduction') ?></p>
          </div>
        </div>
        <div class="store-detail-images">
          <div class="store-detail-image"><?php $small_image = SCF::get('small-image1');
                                          echo wp_get_attachment_image($small_image, 'small'); ?></div>
          <div class="store-detail-image"><?php $small_image = SCF::get('small-image2');
                                          echo wp_get_attachment_image($small_image, 'small'); ?></div>
          <div class="store-detail-image"><?php $small_image = SCF::get('small-image3');
                                          echo wp_get_attachment_image($small_image, 'small'); ?></div>
        </div>
      </div>


      <!-- Googleマップ -->
      <div class="google-map">
        <?php echo SCF::get('google_map'); ?>
      </div>

      <!-- デスクトップ用店舗情報 -->
      <div class="store-detail-information-wrapper">
        <div class="store-detail-information">
          <!-- 店舗名 -->
          <div class="store-detail-name"><?php echo SCF::get('store-name') ?></div>
          <!-- 店舗住所 -->
          <div class="store-detail-address">
            <div class="store-detail-address-title">住所</div>
            <div class="store-detail-address-content">
              <p>〒<?php echo SCF::get('postal-code') ?></p>
              <p><?php echo SCF::get('address') ?></p>
            </div>
          </div>
          <!-- 店舗電話番号 -->
          <div class="store-detail-tel">
            <div class="store-detail-tel-title">TEL</div>
            <div class="store-detail-tel-content"><?php echo SCF::get('tel') ?></div>
          </div>
          <!-- 店舗メールアドレス -->
          <div class="store-detail-mail">
            <div class="store-detail-mail-title">Mail</div>
            <div class="store-detail-mail-content"><?php echo SCF::get('email') ?></div>
          </div>
          <!-- 店舗営業時間 -->
          <div class="store-detail-hours">
            <div class="store-deail-hours-title">営業時間</div>
            <div class="store-detail-hours-content"><?php echo SCF::get('open-hour') ?></div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>

  <!-- スマホ用店舗情報 -->
  <div class="sm-store-details-wrapper">
    <?php
    while (have_posts()) :
      the_post();
    ?>
      <?php
      $args = array(
        'post_type' => 'store',
        'posts_per_page' => -1,
      );
      $st_query = new WP_Query($args);
      ?>

      <div class="store-introduction-name"><?php echo SCF::get('store-name') ?></div>

      <div class="store-details-top-image">
        <?php $top_image = SCF::get('top-image');
        echo wp_get_attachment_image($top_image, 'large');
        ?>
      </div>


      <!-- 店舗詳細情報 -->
      <div class="store-detail-introduction">
        <div class="store-introduction-sentence">
          <p><?php echo SCF::get('introduction') ?></p>
        </div>

        <div class="store-detail-images">
          <div class="swiper-wrapper">
            <div class="store-detail-image swiper-slide"><?php $small_image = SCF::get('small-image1');
                                                          echo wp_get_attachment_image($small_image, 'small'); ?></div>
            <div class="store-detail-image swiper-slide"><?php $small_image = SCF::get('small-image2');
                                                          echo wp_get_attachment_image($small_image, 'small'); ?></div>
            <div class="store-detail-image swiper-slide"><?php $small_image = SCF::get('small-image3');
                                                          echo wp_get_attachment_image($small_image, 'small'); ?></div>
          </div>
        </div>
      </div>


      <!-- Googleマップ -->
      <div class="google-map">
        <?php echo SCF::get('google_map'); ?>
      </div>

      <!-- 店舗詳細情報 -->
      <div class="store-detail-information">
        <div class="store-detail-name"><?php echo SCF::get('store-name') ?></div>
        <!-- 店舗住所 -->
        <div class="store-detail-address">
          <div class="store-detail-address-title">住所</div>
          <div class="store-detail-address-content">
            <p>〒<?php echo SCF::get('postal-code') ?></p>
            <p><?php echo SCF::get('address') ?></p>
          </div>
        </div>
        <!-- 店舗電話番号 -->
        <div class="store-detail-tel">
          <div class="store-detail-tel-title">TEL</div>
          <div class="store-detail-tel-content"><a href="tel:<?php echo SCF::get('tel') ?>"><?php echo SCF::get('tel') ?></a></div>
        </div>
        <!-- 店舗メールアドレス -->
        <div class="store-detail-mail">
          <div class="store-detail-mail-title">Mail</div>
          <div class="store-detail-mail-content"><a href="mailto:<?php echo SCF::get('email') ?>"><?php echo SCF::get('email') ?></a></div>
        </div>
        <!-- 店舗営業時間 -->
        <div class="store-detail-hours">
          <div class="store-deail-hours-title">営業時間</div>
          <div class="store-detail-hours-content"><?php echo SCF::get('open-hour') ?></div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>




  <!-- ご利用の流れ -->
  <div id="third-section"></div>


  <!-- GOLFERS24の特徴 -->
  <?php get_template_part('features') ?>



  <!-- CONTACT US -->
  <?php get_template_part('contact-us') ?>



  <!-- フッター -->
  <?php get_footer(); ?>
</div>