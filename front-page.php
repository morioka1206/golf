<?php get_header(); ?>

<div class="top-section">
  <!-- トップ画像 -->
  <?php
  $args = array(
    'post_type' => 'top-view-image',
    // 全件取得、数を指定すればその数だけ取得する。
    'posts_per_page' => -1,
  );
  $st_query = new WP_Query($args);
  ?>

  <?php if ($st_query->have_posts()) : ?>
    <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>

      <div class="first-view-images" style="background-image: url(<?php $image = SCF::get('image');
                                                                  echo wp_get_attachment_url($image); ?>);">
      <?php endwhile; ?>
    <?php endif; ?>


      </div>

      <div class="top-logo"><img src="<?php echo get_theme_file_uri(); ?>/images/pc-top-logo.svg" alt=""></div>

</div>


<!-- トップ画像下のGOLFERS24紹介 -->
<div class="top-introduction" id="section02">

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


      <div class="top-introduction-text animation">
        <!-- <div class="top-introduction-title"><?php echo SCF::get('title') ?></div> -->
        <div class="top-introduction-sentence">
          <?php echo SCF::get('introduction-text'); ?>
        </div>
      </div>
      <div class="top-introduction-image animation4 ">
        <!-- <?php $image = SCF::get('image');
              echo wp_get_attachment_image($image, 'larage'); ?> -->
      </div>

    <?php endwhile; ?>
  <?php endif; ?>
</div>

<!-- GOLFERS24の特徴 -->

<div id="section03">
  <?php get_template_part('features') ?>
</div>
<!-- ご利用の流れ -->
<?php get_template_part('third-section') ?>


<!-- 店舗一覧 -->
<div class="forth-section" id="section04">
  <div class="forth-section-list-of-stores animation">
    <!-- 店舗一覧タイトル -->
    <div class="forth-section-stores-title">店舗一覧</div>
    <div class="shops-wrapper">
      <div class="japan-map">
        <img src="<?php echo get_theme_file_uri(); ?>/images/japan.png" alt="">
      </div>
      <!-- 店舗一覧 -->
      <div class="forth-section-stores">
        <?php
        $args = array(
          'post_type' => 'store',
          // 全件取得、数を指定すればその数だけ取得する。
          'posts_per_page' => 6,
          'meta_key' => 'local_id',
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
          'meta_query' => array(
            // オープンまたは決まっているところだけ表示
            array(
              'key' => 'open',
              'value' => 'オープン',
              'compare' => '=',
            ),
            array(
              'meta_key' => 'priority_id',
              'orderby' => 'meta_value_num',
              'order' => 'DESC'
            ),
            'relation' => 'AND'
          )
        );
        $st_query = new WP_Query($args);
        ?>

        <?php if ($st_query->have_posts()) : ?>
          <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>

            <div class="forth-section-store">
              <div class="forth-section-store-infomation">
                <a href="<?php the_permalink(); ?>">
                  <div class="forth-section-store-name"><?php echo SCF::get('store-name'); ?><?php echo SCF::get('schedule'); ?></div>
                </a>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php
        $args = array(
          'post_type' => 'store',
          // 全件取得、数を指定すればその数だけ取得する。
          'posts_per_page' => 6,
          'meta_key' => 'local_id',
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
          'meta_query' => array(
            // オープンまたは決まっているところだけ表示
            array(
              'key' => 'open',
              'value' => 'オープン決定',
              'compare' => '=',
            ),
            array(
              'meta_key' => 'priority_id',
              'orderby' => 'meta_value_num',
              'order' => 'DESC'
            ),
            'relation' => 'AND'
          )
        );
        $st_query = new WP_Query($args);
        ?>

        <?php if ($st_query->have_posts()) : ?>
          <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>

            <div class="forth-section-store">
              <div class="forth-section-store-infomation">
                <a href="<?php the_permalink(); ?>">
                  <div class="forth-section-store-name"><?php echo SCF::get('store-name'); ?><?php echo SCF::get('schedule'); ?></div>
                </a>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php
        $args = array(
          'post_type' => 'store',
          // 全件取得、数を指定すればその数だけ取得する。
          'posts_per_page' => 6,
          'meta_key' => 'local_id',
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
          'meta_query' => array(
            // オープンまたは決まっているところだけ表示
            array(
              'key' => 'open',
              'value' => 'オープン日未定',
              'compare' => '=',
            ),
            array(
              'meta_key' => 'priority_id',
              'orderby' => 'meta_value_num',
              'order' => 'DESC'
            ),
            'relation' => 'AND'
          )
        );
        $st_query = new WP_Query($args);
        ?>

        <?php if ($st_query->have_posts()) : ?>
          <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


            <div class="forth-section-store">
              <div class="forth-section-store-infomation">
                <div class="forth-section-store-name"><?php echo SCF::get('store-name');?></div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>


    <!-- VIEW MOREボタン -->
    <div class="forth-section-view-more">
      <a href="<?php echo esc_url(home_url('/locations')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/view-more-button.svg" alt=""></a>
    </div>
  </div>
</div>

<!-- NEWS -->
<div class="fifth-section animation" id="section05">
  <div>
    <div class="fifth-section-title">NEWS</div>
    <div class="fifth-section-list-of-news">
      <div class="list-of-news ">

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
    </div>
  </div>


  <!-- VIEW MOREボタン -->
  <div class="fifth-section-view-more"><a href="<?php echo esc_url(home_url('/newslist')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/view-more-button.svg" alt=""></a></div>
</div>

<!-- SNS -->
<div class="sixth-section" id="section06">
  <div class="sixth-section-title">Instagram</div>
  <div class="sixth-section-follow-message">
    <p>日々更新中！フォローして最新情報をGET</p>
  </div>
  <div class="sm-sixth-section-follow-message">
    <p>日々更新中！フォローして最新情報をGET</p>
  </div>
  <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
  <div class="sixth-section-follow-message">
    <p>Facebook・公式LINEもフォローする</p>
  </div>
  <div class="sm-sixth-section-follow-message">
    <p>Facebook・公式LINEもフォローする</p>
  </div>
  <div class="sixth-sns-buttons">
    <a href="https://www.facebook.com/Golfers24-107676011730422/">
      <div class="sixth-sns-button">
        <img src="<?php echo get_template_directory_uri(); ?>/images/navi-f-facebook-icon.svg" alt="">
        <p>Facebook</p>
      </div>
    </a>
    <a href="https://lin.ee/7Ii8MCV">
      <div class="sixth-sns-button">
        <img src="<?php echo get_template_directory_uri(); ?>/images/navi-f-line-icon.svg" alt="">
        <p>公式LINE</p>
      </div>
    </a>
  </div>
</div>

<!-- CONTACT US -->
<?php // get_template_part('contact-us') 
?>

<!-- スクロール位置に応じて色を変える -->
<script>
  window.onscroll = function() {
    var windowWidth = window.innerWidth;
    var scrollTop = window.pageYOffset; //スクロール量を取得

    if (scrollTop <= -1) {
      $('.header-smartphone').css('background-color', 'trasparent');
      $('.header-smartphone img, .menubtn').css('filter', 'brightness(1) invert(0)');
      $('.header-smartphone').css('transition', '0.1s')
    } else if (scrollTop > 670) {
      $('.header-smartphone').css('background-color', 'white');
      $('.header-smartphone img, .menubtn').css('filter', 'brightness(1) invert(0)');
      // $('.header-smartphone').css('transition', '0.05s')
    } else if (scrollTop < 680) {
      $('.header-smartphone').css('background-color', 'transparent');
      $('.header-smartphone img, .menubtn').css('filter', 'brightness(0) invert(1)');
      $('.header-smartphone').css('transition', '0.1s')
    }


  };
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
  $(function() {
    var h = $(window).height();

    $('#wrap').css('display', 'none');
    $('#loader-bg ,#loader').height(h).css('display', 'block');
  });

  $(window).load(function() { //全ての読み込みが完了したら実行
    $('#loader-bg').delay(900).fadeOut(800);
    $('#loader').delay(600).fadeOut(400);
    $('#wrap').css('display', 'block');
  });

  //10秒たったら強制的にロード画面を非表示
  $(function() {
    setTimeout('stopload()', 10000);
  });

  function stopload() {
    $('#wrap').css('display', 'block');
    $('#loader-bg').delay(1200).fadeOut(900);
    $('#loader').delay(700).fadeOut(600);
  }
</script>


<?php get_footer(); ?>