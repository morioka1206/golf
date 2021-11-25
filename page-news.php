<?php get_header(); ?>

<div class="news-wrapper">
  <div class="page-title">NEWS</div>
  <div class="news-title">ニュース</div>
  <!-- ニュース全体 -->
  <div class="news-list">
    <?php
    $category = get_the_category();
    $args = array(
      'post_type' => 'post',
      'orderby'  => 'date'
    );
    $st_query = new WP_Query($args);
    ?>

    <?php if ($st_query->have_posts()) : ?>
      <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>

        <!-- デスクトップ１つ１つのニュース -->
        <a href="<?php the_permalink(); ?>">
          <div class="news">
            <div class="news-date"><?php the_time("Y.n.j"); ?></div>
            <div class="news-tag"><?php $cats = get_the_category(); ?>
              <?php echo $cats[0]->name; ?></div>
            <div class="news-content"><?php the_title(); ?></div>
          </div>
        </a>
      <?php endwhile; ?>
    <?php endif; ?>

    <!-- モバイル１つ１つのニュース -->
    <?php
    while (have_posts()) :
      the_post();
    ?>
      <a href="<?php the_permalink(); ?>">
        <div class="sm-news">
          <div class="news-date"><?php the_time("Y.n.j"); ?></div>
          <div class="news-tag"><?php $cats = get_the_category(); ?>
            <?php echo $cats[0]->name; ?></div>
          <div class="news-content"><?php the_title(); ?></div>
        </div>
      </a>
    <?php
    endwhile;
    ?>
    <div class="sm-news">
      <div class="news-tag">NEWS</div>
      <div class="news-date">2021.00.00</div>
      <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
    </div>
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

</body>

</html>