  <?php get_header(); ?>

  <div class="location-wrapper">
    <div class="page-title">Locations</div>
    <div class="location-title">店舗一覧</div>
    <div class="list-of-stores">
      <?php
      $args = array(
        'post_type' => 'shop',
        'posts_per_page' => -1,
      );
      $st_query = new WP_Query($args);
      ?>

      <?php if ($st_query->have_posts()) : ?>
        <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>

          <!-- 店舗1 -->
          <div class="store">
            <div class="store-image">
              <?php
              $image = SCF::get('image');
              echo wp_get_attachment_image($image, 'medium');
              ?>
            </div>
            <div class="store-name"><?php echo SCF::get('store-name'); ?></div>
            <div class="store-address">
              <p>〒<?php echo SCF::get('postal-code'); ?></p>
              <p><?php echo SCF::get('address'); ?></p>
            </div>
            <div class="store-link"><a href="#"><img src="<?php echo get_theme_file_uri(); ?>/images/店舗ページへ.svg" alt=""></a></div>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <!-- CONTACT US -->
  <div id="contact-us"></div>

  <!-- フッター -->
  <?php get_footer(); ?>