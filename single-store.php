<?php get_header(); ?>

<div class="store-details-wrapper">
  <?php get_header(); ?>

  <?php
  $args = array(
    'post_type' => 'store',
    // 全件取得、数を指定すればその数だけ取得する。
    'posts_per_page' => -1,
  );
  $st_query = new WP_Query($args);
  ?>

  <?php if ($st_query->have_posts()) : ?>
    <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


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
</div>

<!-- スマホ用店舗情報 -->
<div class="sm-store-details-wrapper">
  <div class="store-introduction-name">福岡大濠公園店</div>
  <div class="store-details-top-image">
  </div>

  <!-- 店舗詳細情報 -->
  <div class="store-detail-introduction">
    <div class="store-introduction-sentence">
      <p>この文章はダミーです。この文章はダミーです。この文章はダミーです。
        この文章はダミーです。この文章はダミーです。
        この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。</p>
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3246.0773034635736!2d139.5445073153363!3d35.55179298022474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f79789e4a4e9%3A0x78ea11c9d5ce4d6e!2z44CSMjI1LTAwMTQg56We5aWI5bed55yM5qiq5rWc5biC6Z2S6JGJ5Yy66I2P55Sw6KW_77yR5LiB55uu77yR77yU4oiS77ySIOemj-WyoeecjOWtpueUn-S8mumkqA!5e0!3m2!1sja!2sjp!4v1636823927769!5m2!1sja!2sjp" width="335" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>

  <!-- 店舗詳細情報 -->
  <div class="store-detail-information">
    <div class="store-detail-name">店舗名</div>
    <!-- 店舗住所 -->
    <div class="store-detail-address">
      <div class="store-detail-address-title">住所</div>
      <div class="store-detail-address-content">
        <p>〒000-0000</p>
        <p>住所が入ります。住所が入ります。住所が入ります</p>
      </div>
    </div>
    <!-- 店舗電話番号 -->
    <div class="store-detail-tel">
      <div class="store-detail-tel-title">TEL</div>
      <div class="store-detail-tel-content">000-000-000</div>
    </div>
    <!-- 店舗メールアドレス -->
    <div class="store-detail-mail">
      <div class="store-detail-mail-title">Mail</div>
      <div class="store-detail-mail-content">xxxxx@xxx.co.jp</div>
    </div>
    <!-- 店舗営業時間 -->
    <div class="store-detail-hours">
      <div class="store-deail-hours-title">営業時間</div>
      <div class="store-detail-hours-content">00:00~00:00</div>
    </div>
  </div>
</div>


<?php endwhile; ?>
<?php endif; ?>


<!-- ご利用の流れ -->
<div id="third-section"></div>


<!-- GOLFERS24の特徴 -->
<?php get_template_part('features') ?>



<!-- CONTACT US -->
<?php get_template_part('contact-us') ?>



<!-- フッター -->
<?php get_footer(); ?>