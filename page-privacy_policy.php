  <?php get_header(); ?>

  <div class="memberhip-wrapper">

    <?php
    $args = array(
      'post_type' => 'privacy_policy',
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