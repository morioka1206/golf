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
      <img src="<?php echo get_theme_file_uri(); ?>/images/lp-header02.svg" alt="" class="lp-header02">
    </lp-header-right>
  </header>






  <?php get_footer(); ?>