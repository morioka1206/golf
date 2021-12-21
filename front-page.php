<?php get_header(); ?>

<div class="top-section">
  <!-- トップ画像 -->
  <div class="first-view-images">
    <div class="first-top-image  swiper slider1">
      <div class="swiper-wrapper">
        <?php
        $args = array(
          'post_type' => 'top-image',
          'posts_per_page' => -1,
        );
        $st_query = new WP_Query($args);
        ?>

        <?php if ($st_query->have_posts()) : ?>
          <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
            <div class="swiper-slide">
              <div class="first-image slide-img" style="background-image: url(<?php $image = SCF::get('image');
                                                                              echo wp_get_attachment_url($image); ?>);"></div>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

    <!-- デスクトップ用ニューススライダー -->
    <div class="first-news-wrapper">
      <div class="first-news-title">NEWS</div>
      <div class="first-news swiper">
        <div class="swiper-wrapper">
          <?php
          $args = array(
            'post_type' => 'news',
            // 全件取得、数を指定すればその数だけ取得する。
            'posts_per_page' => -1,
          );
          $st_query = new WP_Query($args);
          ?>

          <?php if ($st_query->have_posts()) : ?>
            <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
              <div class="swiper-slide">


                <!-- <div class="news-tag">NEWS</div> -->
                <a href="<?php the_permalink(); ?>" class="news-contents">
                  <div class="news-date"><?php $date = SCF::get('date');
                                          echo $date; ?></div>
                  <div class="news-title"><?php $title = SCF::get('title');
                                          echo $title; ?></div>
                </a>


              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="swiper-buttons">
          <!-- 前ページボタン -->
          <div class="swiper-button-prev"></div>
          <!-- 次ページボタン -->
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>

    <!-- スマホ用ニューススライダー -->
    <div class="sm-first-news-wrapper swiper">
      <div class="first-news-title">NEWS</div>
      <div class="swiper-block"></div>
      <div class="first-news">
        <div class="swiper-wrapper">
          <?php
          $args = array(
            'post_type' => 'news',
            // 全件取得、数を指定すればその数だけ取得する。
            'posts_per_page' => -1,
          );
          $st_query = new WP_Query($args);
          ?>

          <?php if ($st_query->have_posts()) : ?>
            <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
              <div class="swiper-slide news-contents">


                <!-- <div class="news-tag">NEWS</div> -->
                <a href="<?php the_permalink(); ?>">
                  <div class="news-date"><?php $date = SCF::get('date');
                                          echo $date; ?></div>
                  <div class="news-title"><?php $title = SCF::get('title');
                                          echo $title; ?></div>
                </a>

              </div>

            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <!-- 前ページボタン -->
        <div class="swiper-button-prev"></div>
        <!-- 次ページボタン -->
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <a href="<?php echo esc_url(home_url('/form')); ?>">
      <div class="contact-us">
        <div class="contact-us-text">
          <img src="<?php echo get_template_directory_uri(); ?>/images/CONTACT US-text.svg" alt="">
        </div>
        <div class="contact-us-mail">
          <img src="<?php echo get_template_directory_uri(); ?>/images/mail.png" alt="">
        </div>
      </div>
    </a>



  </div>

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


      <div class="top-introduction-text animation">
        <div class="top-introduction-title"><?php echo SCF::get('title') ?></div>
        <div class="top-introduction-sentence">
          <?php echo SCF::get('introduction-text'); ?>
        </div>
      </div>
      <div class="top-introduction-image animation4 ">
        <?php $image = SCF::get('image');
        echo wp_get_attachment_image($image, 'larage'); ?>
      </div>

    <?php endwhile; ?>
  <?php endif; ?>
</div>

<div class="top-section swiper slider1">
  <div class="first-views-images swiper-wrapper">
    <div class="swiper-slide"><img src="./images/店舗ページへ.svg" alt="">kk</div>
    <div class="swiper-slide"><img src="./images/店舗ページへ.svg" alt="">kkkk１</div>
    <div class="swiper-slide"><img src="./images/店舗ページへ.svg" alt="">kkkkk２</div>
  </div>
</div>



<!-- GOLFERS24の特徴 -->
<?php get_template_part('features') ?>

<!-- ご利用の流れ -->
<?php get_template_part('third-section') ?>


<!-- 店舗一覧 -->
<div class="forth-section">
  <div class="forth-section-list-of-stores animation">
    <!-- 店舗一覧タイトル -->
    <div class="forth-section-stores-title">店舗一覧</div>
    <!-- 店舗一覧 -->
    <div class="forth-section-stores">
      <?php
      $args = array(
        'post_type' => 'store',
        // 全件取得、数を指定すればその数だけ取得する。
        'posts_per_page' => 3,
        'order' => 'ASC',
      );
      $st_query = new WP_Query($args);
      ?>

      <?php if ($st_query->have_posts()) : ?>
        <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


          <!-- 店舗1 -->
          <div class="forth-section-store">
            <a href="<?php the_permalink(); ?>">
              <div class="forth-section-store-image"><img src="<?php echo get_template_directory_uri(); ?>/images/store-image1.png" alt=""></div>
            </a>
            <div class="forth-section-store-infomation">
              <div class="forth-section-store-name"><?php echo SCF::get('store-name'); ?></div>
              <div class="forth-section-store-address">
                <p><?php echo SCF::get('postal-code'); ?></p>
                <p><?php echo SCF::get('address'); ?></p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>


    <!-- VIEW MOREボタン -->
    <div class="forth-section-view-more">
      <a href="<?php echo esc_url(home_url('/locations')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/view-more-button.svg" alt=""></a>
    </div>
  </div>
</div>

<!-- NEWS -->
<div class="fifth-section animation">
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
<div class="sixth-section">
  <div class="sixth-section-follow-message">
    <p>各種SNS更新中！フォローして最新情報をGET</p>
  </div>
  <div class="sm-sixth-section-follow-message">
    <p>各種SNS更新中！</p>
    <p> フォローして最新情報をGET</p>
  </div>
  <div class="sixth-sns-buttons">
    <a href="https://www.facebook.com/Golfers24-107676011730422/">
      <div class="sixth-sns-button">
        <img src="<?php echo get_template_directory_uri(); ?>/images/navi-f-facebook-icon.svg" alt="">
        <p>Facebook</p>
      </div>
    </a>
    <a href="https://www.instagram.com/golfers24_official/?hl=ja">
      <div class="sixth-sns-button">
        <img src="<?php echo get_template_directory_uri(); ?>/images/navi-f-insta-icon.svg" alt="">
        <p>Instagram</p>
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
<?php get_template_part('contact-us') ?>

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