<div id="loader-bg">
  <div id="loader">
    <img src="<?php echo get_theme_file_uri(); ?>/images/loading_logo.png" alt="Now Loading..." />
    <!-- <p>Now Loading...</p> -->
  </div>
</div>
<div id="wrap">
  <?php get_header(); ?>

  <div class="location-wrapper">
    <div class="page-title">Locations</div>
    <div class="location-title">店舗一覧</div>
    <div class="list-of-stores">
      <?php
      $args = array(
        'post_type' => 'store',
        'order' => 'ASC',
        'posts_per_page' => -1,
      );
      $st_query = new WP_Query($args);
      ?>

      <?php if ($st_query->have_posts()) : ?>
        <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>

          <!-- 店舗1 -->
          <div class="store">
            <a href="<?php the_permalink(); ?>">
              <div class="store-image">
                <?php
                $image = SCF::get('image');
                echo wp_get_attachment_image($image, 'medium');
                ?>
              </div>
            </a>
            <div class="store-name"><?php echo SCF::get('store-name'); ?></div>
            <div class="store-address">
              <p>〒<?php echo SCF::get('postal-code'); ?></p>
              <p><?php echo SCF::get('address'); ?></p>
            </div>
            <div class="store-link"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_theme_file_uri(); ?>/images/店舗ページへ.svg" alt=""></a></div>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <!-- CONTACT US -->
  <div id="contact-us"></div>

  <!-- フッター -->
  <?php get_footer(); ?>
</div>