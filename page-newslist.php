<?php get_header(); ?>

<div class="news-wrapper">
  <div class="page-title">NEWS</div>
  <div class="news-title">ニュース</div>
  <!-- ニュース全体 -->
  <div class="news-list">
    <?php
    $category = get_the_category();
    $args = array(
      'post_type' => 'news',
      'orderby'  => 'date'
    );
    $st_query = new WP_Query($args);
    ?>

    <?php if ($st_query->have_posts()) : ?>
      <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>

        <!-- デスクトップ１つ１つのニュース -->
        <a href="<?php the_permalink(); ?>">
          <div class="news">
            <div class="news-date"><?php $date = SCF::get('date');
                                    echo $date; ?></div>
            <div class="news-tag"><?php $tag = SCF::get('tag');
                                  echo $tag; ?>
            </div>
            <div class="news-content"><?php $title = SCF::get('title');
                                      echo $title; ?></div>
          </div>
        </a>
      <?php endwhile; ?>
    <?php endif; ?>

    <!-- モバイル１つ１つのニュース -->
    <?php
    $category = get_the_category();
    $args = array(
      'post_type' => 'news',
      'orderby'  => 'date'
    );
    $st_query = new WP_Query($args);
    ?>



    <?php if ($st_query->have_posts()) : ?>
      <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>

        <a href="<?php the_permalink(); ?>">
          <div class="sm-news">
            <div class="news-tag"><?php $tag = SCF::get('tag');
                                  echo $tag; ?></div>
            <div class="news-date"><?php $date = SCF::get('date');
                                    echo $date; ?></div>

            <div class="news-content"><?php $title = SCF::get('title');
                                      echo $title; ?></div>
          </div>
        </a>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>

  <?php the_posts_pagination(
    array(
      'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
      'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
      'prev_text'     => __(''), // 「前へ」リンクのテキスト
      'next_text'     => __(''), // 「次へ」リンクのテキスト
      'type'          => 'list', // 戻り値の指定 (plain/list)
    )
  ); ?>

</div>


<!-- CONTACT US -->

<?php get_template_part('contact-us') ?>

<!-- フッター -->
<?php get_footer(); ?>