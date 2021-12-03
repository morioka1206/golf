<div id="loader-bg">
  <div id="loader">
    <img src="<?php echo get_theme_file_uri(); ?>/images/loading_logo.png" alt="Now Loading..." />
    <!-- <p>Now Loading...</p> -->
  </div>
</div>
<div id="wrap">
  <?php get_header(); ?>

  <div class="memberhip-wrapper">

    <?php
    $args = array(
      'post_type' => 'member-ship',
      // 全件取得、数を指定すればその数だけ取得する。
      'posts_per_page' => -1,
    );
    $st_query = new WP_Query($args);
    ?>

    <?php if ($st_query->have_posts()) : ?>
      <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


        <div class="membership-title"><?php echo SCF::get('title'); ?></div>
        <div class="memberhip-description">
          <p>
            <?php echo SCF::get('definition') ?>
          </p>
        </div>

        <!-- 会員規約の内容 -->
        <div class="membership-content">
          <?php echo SCF::get('content') ?>
        </div>

      <?php endwhile; ?>
    <?php endif; ?>
  </div>



  <!-- フッター -->
  <?php get_footer(); ?>
</div>