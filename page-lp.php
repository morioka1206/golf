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

  <header class="lp-header">
    <div class="lp-header-logo"><img src="<?php echo get_theme_file_uri(); ?>/images/logo.svg" alt="GOLFERSロゴ"></div>
    <lp-header-right>
      <img src="<?php echo get_theme_file_uri(); ?>/images/lp-header01.svg" alt="" class="lp-header01">
      <a href="https://lin.ee/7Ii8MCV/" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/images/lp-header02.svg" alt="" class="lp-header02"></a>
    </lp-header-right>
  </header>

  <!-- LPの本体 -->
  <div class="lp-wrapper">
    <div class="lp-top">
      <div class="lp-top-image">
        <div class="lp-top-logo">
          <div class="lp-top-logo-logo"><img src="<?php echo get_theme_file_uri(); ?>/images/pc-lp-top-logo.svg" alt=""></div>
          <div class="lp-top-logo-line"><img src="<?php echo get_theme_file_uri(); ?>/images/pc-lp-line.png" alt=""></div>
        </div>

        <div class="lp-top-message">
          <img src="<?php echo get_theme_file_uri(); ?>/images/fv-copy-pc.png" alt="" class="fv-copy">
          <img src="<?php echo get_theme_file_uri(); ?>/images/top-orange.svg" alt="" class="top-orange">
        </div>

        <div class="lp-top-price">
          <div class="lp-top-price-message">
            <img src="<?php echo get_theme_file_uri(); ?>/images/lp-top-price-black.png" alt="">
            <img src="<?php echo get_theme_file_uri(); ?>/images/無料体験予約受付中！.svg" alt="" class="message">
          </div>
          <img src="<?php echo get_theme_file_uri(); ?>/images/fv-maintext.svg" alt="" class="top-price">
        </div>

        <div class="lp-top-under">
        </div>

        <div class="lp-top-image-line-link">
          <img src="<?php echo get_theme_file_uri(); ?>/images/体験予約はこちらから！.svg" alt="">
          <img src="<?php echo get_theme_file_uri(); ?>/images/ctabtn-line-pc.png" alt="">
        </div>
      </div>

    </div>

    <div class="lp-second">
      <!-- 選ばれるポイント -->
      <div class="three-points">
        <div class="point-title">
          <p>GOLFERS24の<span>3つの選ばれる</span>ポイント</p>
        </div>
        <div class="points">
          <div class="each-point">
            <div class="point-top">放題プラン</div>
            <div class="point-under">
              <p>定額制で<span>24時間</span></p>
              <p><span>いつでも練習し放題！</span></p>
              <p>お仕事帰りでもスーツのまま</p>
              <p>手ぶらでお越しいただけます。</p>
            </div>
            <img src="<?php echo get_theme_file_uri(); ?>/images/Point1.svg" alt="" class="point-number">
          </div>
          <div class="each-point">
            <div class="point-top">プライベート空間</div>
            <div class="point-under">
              <p>完全個室の</p>
              <p>プライベート空間なので</p>
              <p><span>人目を気にせず練習できる！</span></p>
              <p>ゲストの方と一緒でも。</p>
            </div>
            <img src="<?php echo get_theme_file_uri(); ?>/images/Point2.svg" alt="" class="point-number">
          </div>
          <div class="each-point">
            <div class="point-top">最新のゴルフシュミレーター</div>
            <div class="point-under">
              <p><span>世界シェアNo.1</span>の</p>
              <p>ゴルフシュミレーターを採用。</p>
              <p>実在のコースを</p>
              <p>ラウンドできる！</p>
            </div>
            <img src="<?php echo get_theme_file_uri(); ?>/images/Point3.svg" alt="" class="point-number">
          </div>
        </div>
      </div>

      <div class="trial-link-wrapper">
        <div class="trial-link-head">
          <img src="<?php echo get_theme_file_uri(); ?>/images/second-goldtop.png" alt="">
          <img src="<?php echo get_theme_file_uri(); ?>/images/mayottara.png" alt="" class="link-head-title">
        </div>
        <div class="trial-link-off">
          <img src="<?php echo get_theme_file_uri(); ?>/images/fv-maintext.svg" alt="">
        </div>
        <div class="trial-link-off-limit">
          <img src="<?php echo get_theme_file_uri(); ?>/images/second-off.png" alt="">
        </div>
        <div class="trial-link-line">
          <img src="<?php echo get_theme_file_uri(); ?>/images/ctabtn-line-pc.png" alt="">
        </div>
      </div>
    </div>

    <div class="lp-third">

    </div>

    <div class="lp-forth">

    </div>

    <div class="lp-between">

    </div>

    <div class="lp-fifth">

    </div>

    <div class="lp-sixth">

    </div>

    <div class="lp-seventh">

    </div>

    <div class="lp-eighth"></div>

    <div class="lp-store-list"><?php get_template_part('store-list') ?></div>

  </div>






  <?php get_footer(); ?>