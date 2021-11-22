<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
  <link rel="stylesheet" href="sm-style.css" media="only screen and (max-width:600px)">
  <link rel="stylesheet" href="style.css" media="only screen and (min-width: 601px)">
  <!-- webフォント -->
  <link rel="stylesheet" href="https://use.typekit.net/szq6kdr.css">
  <script src="https://kit.fontawesome.com/e0b0272f60.js" crossorigin="anonymous"></script>
  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- 同じ部分が多いのでJQueryでファイルを分割したものを読み込み -->
  <script>
    //共通パーツ読み込み
    $(function() {
      $("#header").load("<?php echo get_theme_file_uri(); ?>/page-parts/header.html");
      $("#footer").load("<?php echo get_theme_file_uri(); ?>/page-parts/footer.html");
      $("#contact-us").load("<?php echo get_theme_file_uri(); ?>/page-parts/contact-us.html");

    });
  </script>
  <title>店舗一覧</title>
</head>

<body>
  <!-- ヘッダー -->
  <header id="header">
  </header>

  <div class="location-wrapper">
    <div class="page-title">Locations</div>
    <div class="location-title">店舗一覧</div>
    <div class="list-of-stores">
      <!-- 店舗1 -->
      <div class="store">
        <div class="store-image"><img src="<?php echo get_theme_file_uri(); ?>/images/store1.png" alt=""></div>
        <div class="store-name">福岡大濠公園店</div>
        <div class="store-address">
          <p>〒000-0000</p>
          <p>住所が入ります。住所が入ります。住所が入ります。</p>
        </div>
        <div class="store-link"><a href="#"><img src="<?php echo get_theme_file_uri(); ?>/images/店舗ページへ.svg" alt=""></a></div>
      </div>
      <!-- 店舗2 -->
      <div class="store">
        <div class="store-image"><img src="<?php echo get_theme_file_uri(); ?>/images/store1.png" alt=""></div>
        <div class="store-name">福岡大濠公園店</div>
        <div class="store-address">
          <p>〒000-0000</p>
          <p>住所が入ります。住所が入ります。住所が入ります。</p>
        </div>
        <div class="store-link"><a href="#"><img src="<?php echo get_theme_file_uri(); ?>/images/店舗ページへ.svg" alt=""></a></div>
      </div>
      <!-- 店舗3 -->
      <div class="store">
        <div class="store-image"><img src="<?php echo get_theme_file_uri(); ?>/images/store1.png" alt=""></div>
        <div class="store-name">福岡大濠公園店</div>
        <div class="store-address">
          <p>〒000-0000</p>
          <p>住所が入ります。住所が入ります。住所が入ります。</p>
        </div>
        <div class="store-link"><a href="#"><img src="images/店舗ページへ.svg" alt=""></a></div>
      </div>
      <!-- 店舗4 -->
      <div class="store">
        <div class="store-image"><img src="<?php echo get_theme_file_uri(); ?>/images/store1.png" alt=""></div>
        <div class="store-name">福岡大濠公園店</div>
        <div class="store-address">
          <p>〒000-0000</p>
          <p>住所が入ります。住所が入ります。住所が入ります。</p>
        </div>
        <div class="store-link"><a href="#"><img src="<?php echo get_theme_file_uri(); ?>/images/店舗ページへ.svg" alt=""></a></div>
      </div>
      <!-- 店舗5 -->
      <div class="store">
        <div class="store-image"><img src="<?php echo get_theme_file_uri(); ?>/images/store1.png" alt=""></div>
        <div class="store-name">福岡大濠公園店</div>
        <div class="store-address">
          <p>〒000-0000</p>
          <p>住所が入ります。住所が入ります。住所が入ります。</p>
        </div>
        <div class="store-link"><a href="#"><img src="<?php echo get_theme_file_uri(); ?>/images/店舗ページへ.svg" alt=""></a></div>
      </div>
      <!-- 店舗6 -->
      <div class="store">
        <div class="store-image"><img src="<?php echo get_theme_file_uri(); ?>/images/store1.png" alt=""></div>
        <div class="store-name">福岡大濠公園店</div>
        <div class="store-address">
          <p>〒000-0000</p>
          <p>住所が入ります。住所が入ります。住所が入ります。</p>
        </div>
        <div class="store-link"><a href="#"><img src="images/店舗ページへ.svg" alt=""></a></div>
      </div>
      <!-- 店舗7 -->
      <div class="store">
        <div class="store-image"><img src="<?php echo get_theme_file_uri(); ?>/images/store1.png" alt=""></div>
        <div class="store-name">福岡大濠公園店</div>
        <div class="store-address">
          <p>〒000-0000</p>
          <p>住所が入ります。住所が入ります。住所が入ります。</p>
        </div>
        <div class="store-link"><a href="#"><img src="<?php echo get_theme_file_uri(); ?>/images/店舗ページへ.svg" alt=""></a></div>
      </div>
      <!-- 店舗8 -->
      <div class="store">
        <div class="store-image"><img src="<?php echo get_theme_file_uri(); ?>/images/store1.png" alt=""></div>
        <div class="store-name">福岡大濠公園店</div>
        <div class="store-address">
          <p>〒000-0000</p>
          <p>住所が入ります。住所が入ります。住所が入ります。</p>
        </div>
        <div class="store-link"><a href="#"><img src="images/店舗ページへ.svg" alt=""></a></div>
      </div>
      <!-- 店舗9 -->
      <div class="store">
        <div class="store-image"><img src="<?php echo get_theme_file_uri(); ?>/images/store1.png" alt=""></div>
        <div class="store-name">福岡大濠公園店</div>
        <div class="store-address">
          <p>〒000-0000</p>
          <p>住所が入ります。住所が入ります。住所が入ります。</p>
        </div>
        <div class="store-link"><a href="#"><img src="<?php echo get_theme_file_uri(); ?>/images/店舗ページへ.svg" alt=""></a></div>
      </div>
    </div>
  </div>

  <!-- CONTACT US -->
  <div id="contact-us"></div>

  <!-- フッター -->
  <footer id="footer">
  </footer>

</body>

</html>