<?php get_header(); ?>
<?php
while (have_posts()) :
  the_post();
?>
  <?php
  $cats = get_the_category();
  $catId = $cats[0]->cat_ID;
  $catName = $cats[0]->name;
  $catSlug = $cats[0]->category_nicename;
  $link = get_category_link($catId);
  ?>
  <div class="news-detail-wrapper">
    <div class="news-detail-title"><?php the_title(); ?>
      <div class="news-detail-tag"><?php echo $catName; ?></div>
    </div>
    <div class="news-detail-content-wrapper">

      <!-- ニュースの日付 -->
      <div class="news-detail-date">2021.00.00</div>
      <!-- ニュースの内容 -->
      <div class="news-detail-content">
        <?php the_content(); ?>
      </div>
    </div>
    <a href="#">
      <div class="news-detail-back-button">
        <div class="news-detail-back-text">記事一覧へ戻る</div>
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