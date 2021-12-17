<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/scss/sm-golf.css" media="only screen and (max-width:600px)">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/scss/pc-golf.css" media="only screen and (min-width: 601px)">
  <!-- webフォント -->
  <link rel="stylesheet" href="https://use.typekit.net/szq6kdr.css">
  <script src="https://kit.fontawesome.com/e0b0272f60.js" crossorigin="anonymous"></script>
  <!-- スライド -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- 無限スクロール -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <!-- <title>GOLFERS24</title> -->
  <?php
  wp_enqueue_script('jquery');
  wp_head(); ?>
  <meta name="google-site-verification" content="n0hUvjheYaYE9NSZKNjmSR0JSGev2lm7OeZCIyDmNog" />
</head>


<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="loader-bg">
    <div id="loader">
      <img src="<?php echo get_theme_file_uri(); ?>/images/loading-logo.svg" alt="Now Loading..." />
      <!-- <p>Now Loading...</p> -->
    </div>
  </div>
  <div id="wrap">
    <header id="header">
      <div class="header-desktop">
        <div class="header-left">
          <div class="header-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_theme_file_uri(); ?>/images/logo.svg" alt="GOLFERS24ロゴ"></a>
          </div>
          <!-- ヘッダーのナビゲーションメニュー -->
          <div class="header-navi-contents">
            <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></div>
            <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/how-to-use')); ?>">ご利用の流れ・体験予約</a></div>
            <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/locations')); ?>">店舗一覧</a></div>
            <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/newslist')); ?>">NEWS</a></div>
            <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/questions')); ?>">F&Q</a></div>
            <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a></div>
          </div>
        </div>
        <!-- ヘッダーのSNSリンク -->
        <div class="header-right">
          <a href="<?php echo esc_url(home_url('/how-to-use')); ?>">
            <div class="header-trial-lesson">体験予約</div>
          </a>
          <a href="<?php echo esc_url(home_url('/form')); ?>">
            <div class="header-contact-us">お問い合わせ</div>
          </a>
          <div class="header-sns-icons">
            <div class="header-facebook"><a href="https://www.facebook.com/Golfers24-107676011730422/"><img src="<?php echo get_template_directory_uri(); ?>/images/navi-facebook-icon.svg" alt=""></a></div>
            <div class="header-instagram"><a href="https://www.instagram.com/golfers24_official/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/images/navi-insta-icon.svg" alt=""></a></div>
            <div class="header-line"><a href="https://lin.ee/7Ii8MCV"><img src="<?php echo get_template_directory_uri(); ?>/images/navi-line-icon.svg" alt=""></a></div>
          </div>
        </div>

      </div>


      <!-- スマホ用ヘッダー -->
      <div class="header-smartphone">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <div class="header-logo">
            <img src="<?php echo get_theme_file_uri(); ?>/images/logo.svg" alt="GOLFERS24ロゴ">
          </div>
        </a>

        <div class="header-humberger">
          <input type="checkbox" id="menu-btn-check">
          <label for="menu-btn-check" class="menubtn"><span></span></label>
          <div class="hide-menu">
            <nav>
              <div class="hide-contents">
                <div class="menu-list">
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <div class="menu">TOP</div>
                  </a>
                  <a href="<?php echo esc_url(home_url('/how-to-use')); ?>">
                    <div class="menu">ご利用の流れ・体験予約</div>
                  </a>
                  <a href="<?php echo esc_url(home_url('/locations')); ?>">
                    <div class="menu">店舗一覧</div>
                  </a>
                  <a href="<?php echo esc_url(home_url('/newslist')); ?>">
                    <div class="menu">NEWS</div>
                  </a>
                  <a href="<?php echo esc_url(home_url('/questions')); ?>">
                    <div class="menu">F&Q</div>
                  </a>
                  <a href="<?php echo esc_url(home_url('/company')); ?>">
                    <div class="menu">会社概要</div>
                  </a>
                </div>
                <a href="<?php echo esc_url(home_url('/form')); ?>">
                  <div class="sm-nav-contact-us">CONTACT US</div>
                </a>
                <div class="sm-nav-sns">
                  <p>FOLLOW US</p>
                  <div class="sm-nav-sns-icons">
                    <div class="sm-header-facebook"><a href="https://www.facebook.com/Golfers24-107676011730422/"><img src="<?php echo get_template_directory_uri(); ?>/images/sm-hum-facebook.svg" alt=""></a></div>
                    <div class="sm-header-instagram"><a href="https://www.instagram.com/golfers24_official/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/images/sm-hum-insta.svg" alt=""></a></div>
                    <div class="sm-header-line"><a href="https://lin.ee/7Ii8MCV"><img src="<?php echo get_template_directory_uri(); ?>/images/sm-hum-line.svg" alt=""></a></div>
                  </div>
                </div>
              </div>
            </nav>

          </div>
        </div>
      </div>


      <script>
        $(function() {
          $(".hide-menu").hide();
          $(".menubtn").click(function() { //メニューボタンをクリックしたとき
            $(".hide-menu").toggle(300); //0.3秒で表示したり非表示にしたりする
          });
        });
      </script>
    </header>