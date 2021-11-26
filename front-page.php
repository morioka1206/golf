<?php get_header(); ?>

<div class="top-section">
  <!-- トップ画像 -->
  <div class="first-view-images">
    <div class="first-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/top-img01.png);"></div>
    <div class="first-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/top-img01.png);"></div>
    <div class="first-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/top-img01.png);"></div>
    <div class="first-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/top-img01.png);"></div>
    <div class="first-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/top-img01.png);"></div>
    <div class="first-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/top-img01.png);"></div>
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <div class="contact-us"><img src="<?php echo get_template_directory_uri(); ?>/images/CONTACT US.svg" alt=""></div>
    </a>
  </div>
  <!-- トップ画像下のGOLFERS24紹介 -->
  <div class="top-introduction">

    <?php
    $args = array(
      'post_type' => 'introduction',
      // 全件取得、数を指定すればその数だけ取得する。
      'posts_per_page' => -1,
    );
    $st_query = new WP_Query($args);
    ?>

    <?php if ($st_query->have_posts()) : ?>
      <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


        <div class="top-introduction-text">
          <div class="top-introduction-title"><?php echo SCF::get('title') ?></div>
          <div class="top-introduction-sentence">
            <?php echo SCF::get('introduction-text'); ?>
          </div>
        </div>
        <div class="top-introduction-image">
          <?php $image = SCF::get('image');
          echo wp_get_attachment_image($image, 'larage'); ?>
        </div>
  </div>

<?php endwhile; ?>
<?php endif; ?>
</div>

<!-- GOLFERS24の特徴 -->
<?php get_template_part('features') ?>

<!-- ご利用の流れ -->
<div id="third-section"></div>
<?php get_template_part('third-section') ?>


<!-- 店舗一覧 -->
<div class="forth-section">
  <div class="forth-section-list-of-stores">
    <!-- 店舗一覧タイトル -->
    <div class="forth-section-stores-title">店舗一覧</div>
    <!-- 店舗一覧 -->
    <div class="forth-section-stores">
      <?php
      $args = array(
        'post_type' => 'store',
        // 全件取得、数を指定すればその数だけ取得する。
        'posts_per_page' => 3,
      );
      $st_query = new WP_Query($args);
      ?>

      <?php if ($st_query->have_posts()) : ?>
        <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


          <!-- 店舗1 -->
          <div class="forth-section-store">
            <div class="forth-section-store-image"><img src="<?php echo get_template_directory_uri(); ?>/images/store-image1.png" alt=""></div>
            <div class="forth-section-store-infomation">
              <div class="forth-section-store-name"><?php echo SCF::get('store-name'); ?></div>
              <div class="forth-section-store-address">
                <p>〒<?php echo SCF::get('postal-code'); ?></p>
                <p><?php echo SCF::get('address'); ?></p>
              </div>
            </div>
          </div>

    </div>

  <?php endwhile; ?>
<?php endif; ?>
<!-- VIEW MOREボタン -->
<div class="forth-section-view-more">
  <a href="<?php echo esc_url(home_url('/locations')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/view-more-button.svg" alt=""></a>
</div>
  </div>
</div>

<!-- NEWS -->
<div class="fifth-section">
  <div class="fifth-section-title">NEWS</div>
  <div class="fifth-section-list-of-news">

    <?php
    $args = array(
      'post_type' => 'news',
      // 全件取得、数を指定すればその数だけ取得する。
      'posts_per_page' => 3,
    );
    $st_query = new WP_Query($args);
    ?>

    <?php if ($st_query->have_posts()) : ?>
      <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


        <a href="<?php the_permalink(); ?>">
          <div class="fifth-section-news">
            <div class="fifth-section-news-date"><?php echo SCF::get('date') ?></div>
            <div class="fifth-section-news-content"><?php echo SCF::get('title') ?></div>
          </div>
        </a>

      <?php endwhile; ?>
    <?php endif; ?>

  </div>


  <!-- VIEW MOREボタン -->
  <div class="fifth-section-view-more"><a href="<?php echo esc_url(home_url('/newslist')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/view-more-button.svg" alt=""></a></div>
</div>

<!-- SNS -->
<div class="sixth-section">
  <div class="sixth-section-follow-message">
    <p>各種SNS更新中！フォローして最新情報をGET</p>
  </div>
  <div class="sm-sixth-section-follow-message">
    <p>各種SNS更新中！</p>
    <p> フォローして最新情報をGET</p>
  </div>
  <div class="sixth-sns-buttons">
    <a href="#">
      <div class="sixth-sns-button">
        <i class="fab fa-facebook-square sixth-sns-icon"></i>
        <p>Facebook</p>
      </div>
    </a>
    <a href="#">
      <div class="sixth-sns-button">
        <i class="fab fa-instagram sixth-sns-icon"></i>
        <p>Instagram</p>
      </div>
    </a>
    <a href="#">
      <div class="sixth-sns-button">
        <i class="fab fa-line sixth-sns-icon"></i>
        <p>公式LINE</p>
      </div>
    </a>
  </div>
</div>

<!-- CONTACT US -->
<?php get_template_part('contact-us') ?>

<?php get_footer(); ?>