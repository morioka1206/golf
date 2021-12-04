  <?php get_header(); ?>
  <?php
  while (have_posts()) :
    the_post();
  ?>
    <?php
    $args = array(
      'post_type' => 'news',
      'posts_per_page' => -1,
    );
    $st_query = new WP_Query($args);
    ?>
    <div class="news-detail-wrapper">
      <div class="news-detail-title"><?php $title = SCF::get('title');
                                      echo $title; ?>
        <div class="news-detail-tag"><?php $tag = SCF::get('tag');
                                      echo $tag; ?></div>
      </div>
      <div class="news-detail-content-wrapper">

        <!-- ニュースの日付 -->
        <div class="news-detail-date"><?php $date = SCF::get('date');
                                      echo $date; ?></div>
        <!-- ニュースの内容 -->
        <div class="news-detail-content">
          <?php $content = SCF::get('content');
          echo $content; ?>
        </div>
      </div>
      <a href="#">
        <div class="news-detail-back-button">
          <a href="<?php echo esc_url(home_url('/newslist')); ?>">
            <div class="news-detail-back-text">記事一覧へ戻る</div>
          </a>
        </div>
      </a>

    <?php
  endwhile;
    ?>

    </div>




    <!-- CONTACT US -->
    <?php get_template_part('contact-us') ?>


    <!-- フッター -->
    <?php get_footer(); ?>