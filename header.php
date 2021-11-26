<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/sm-golf.css" media="only screen and (max-width:600px)">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/pc-golf.css" media="only screen and (min-width: 601px)">
  <!-- webフォント -->
  <link rel="stylesheet" href="https://use.typekit.net/szq6kdr.css">
  <script src="https://kit.fontawesome.com/e0b0272f60.js" crossorigin="anonymous"></script>
  <!-- スライド -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- formrun -->
  <script src="https://sdk.form.run/js/v2/formrun.js"></script>
  <title>GOLFERS24</title>
  <?php
  wp_enqueue_script('jquery');
  wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header id="header">
    <div class="header-desktop">
      <div class="header-logo">
        <img src="<?php echo get_theme_file_uri(); ?>/images/logo.svg" alt="GOLFERS24ロゴ">
      </div>
      <!-- ヘッダーのナビゲーションメニュー -->
      <div class="header-navi-contents">
        <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/')); ?>"></div>
        <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/how-to-use')); ?>">ご利用の流れ</a></div>
        <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/locations')); ?>">店舗一覧</a></div>
        <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/newslist')); ?>">NEWS</a></div>
        <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/questions')); ?>">F&Q</a></div>
        <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a></div>
      </div>
      <!-- ヘッダーのSNSリンク -->
      <div class="header-sns-icons">
        <div class="header-facebook"><i class="fab fa-facebook-square"></i></div>
        <div class="header-instagram"><i class="fab fa-instagram"></i></div>
        <div class="header-line"><i class="fab fa-line"></i></div>
      </div>

    </div>


    <!-- スマホ用ヘッダー -->
    <div class="header-smartphone">
      <div class="header-logo">
        <img src="<?php echo get_theme_file_uri(); ?>/images/logo.svg" alt="GOLFERS24ロゴ">
      </div>

      <div class="header-humberger">
        <input type="checkbox" id="menu-btn-check">
        <label for="menu-btn-check" class="menubtn"><span></span></label>
        <div class="hide-menu">
          <nav>
            <div class="hide-contents">
              <div class="menu-list">
                <a href="index.html">
                  <div class="menu">TOP</div>
                </a>
                <a href="how-to-use.html">
                  <div class="menu">ご利用の流れ・体験予約</div>
                </a>
                <a href="locations.html">
                  <div class="menu">店舗一覧</div>
                </a>
                <a href="news.html">
                  <div class="menu">NEWS</div>
                </a>
                <a href="questions.html">
                  <div class="menu">F&Q</div>
                </a>
                <a href="company.html">
                  <div class="menu">会社概要</div>
                </a>
              </div>
              <div class="sm-nav-contact-us">CONTACT US</div>
              <div class="sm-nav-sns">
                <p>FOLLOW US</p>
                <div class="sm-nav-sns-icons">
                  <div class="sm-header-facebook"><i class="fab fa-facebook-square"></i></div>
                  <div class="sm-header-instagram"><i class="fab fa-instagram"></i></div>
                  <div class="sm-header-line"><i class="fab fa-line"></i></div>
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