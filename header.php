<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5CWPFXD');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/scss/sm-golf.css" media="only screen and (max-width:600px)">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/scss/pc-golf.css" media="only screen and (min-width: 601px)">
  <!-- webフォント -->
  <link rel="stylesheet" href="https://use.typekit.net/szq6kdr.css">
  <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?62399843b7504c4ba51231fbac1e02e5" charset="utf-8"></script>
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
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CWPFXD" 　height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
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
        </div>
        <!-- ヘッダーの予約などリンク -->
        <div class="header-right">
          <!-- ヘッダーのナビゲーションメニュー -->
          <div class="header-navi-contents">
            <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></div>
            <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/how-to-use')); ?>">ご利用の流れ</a></div>
            <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/locations')); ?>">店舗一覧</a></div>
            <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/newslist')); ?>">NEWS</a></div>
            <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/fc')); ?>">FC加盟店募集</a></div>
            <div class="header-navi-content"><a href="<?php echo esc_url(home_url('/questions')); ?>">FAQ</a></div>
          </div>
          <div class="header-sns-icons">
            <div class="header-facebook"><a href="https://www.facebook.com/Golfers24-107676011730422/"><img src="<?php echo get_template_directory_uri(); ?>/images/navi-facebook-icon.svg" alt=""></a></div>
            <div class="header-instagram"><a href="https://www.instagram.com/golfers24_official/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/images/navi-insta-icon.svg" alt=""></a></div>
          </div>
          <div class="header-reserve-links">
            <a href="https://lin.ee/7Ii8MCV/" target="_blank" class="header-line"><img src="<?php echo get_template_directory_uri(); ?>/images/pc-header-line.svg"></a>
            <!-- <a href="https://golfers24.hacomono.jp/" target="_blank" class="header-webreserve"><img src="<?php echo get_template_directory_uri(); ?>/images/pc-header-webreserve.svg"></a> -->
            <a href="<?php echo esc_url(home_url('/form')); ?>" class="header-contact-us"><img src="<?php echo get_template_directory_uri(); ?>/images/pc-header-contact-us.svg" alt=""></a>
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
                    <div class="menu">ご利用の流れ</div>
                  </a>
                  <a href="<?php echo esc_url(home_url('/locations')); ?>">
                    <div class="menu">店舗一覧</div>
                  </a>
                  <a href="<?php echo esc_url(home_url('/newslist')); ?>">
                    <div class="menu">NEWS</div>
                  </a>
                  <a href="<?php echo esc_url(home_url('/fc')); ?>">
                    <div class="menu">FC加盟店募集</div>
                  </a>
                  <a href="<?php echo esc_url(home_url('/questions')); ?>">
                    <div class="menu">FAQ</div>
                  </a>
                </div>

                <div class="humberger-links">
                  <a href="https://lin.ee/7Ii8MCV" target="_blank">
                    <div class="sm-nav-line"><img src="<?php echo get_theme_file_uri(); ?>/images/humberger-line.svg" alt=""></div>
                  </a>
                  <!-- <a href="https://golfers24.hacomono.jp/" target="_blank">
                    <div class="sm-nav-web-reserve"><img src="<?php echo get_theme_file_uri(); ?>/images/humberger-webreserve.svg" alt=""></div>
                  </a> -->
                  <a href="<?php echo esc_url(home_url('/form')); ?>">
                    <div class="sm-nav-contact-us"><img src="<?php echo get_theme_file_uri(); ?>/images/humberger-contact-us.svg" alt=""></div>
                  </a>
                </div>

                <div class="sm-nav-sns">
                  <p>FOLLOW US</p>
                  <div class="sm-nav-sns-icons">
                    <div class="sm-header-facebook"><a href="https://www.facebook.com/Golfers24-107676011730422/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/sm-hum-facebook.svg" alt=""></a></div>
                    <div class="sm-header-instagram"><a href="https://www.instagram.com/golfers24_official/?hl=ja" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/sm-hum-insta.svg" alt=""></a></div>
                    <div class="sm-header-line"><a href="https://lin.ee/7Ii8MCV" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/sm-hum-line.svg" target="_blank"></a></div>
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