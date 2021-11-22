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
  <title>GOLFERS24ご利用の流れ</title>
</head>

<body>
  <!-- ヘッダー -->
  <header id="header">
  </header>

  <div class="news-wrapper">
    <div class="page-title">NEWS</div>
    <div class="news-title">ニュース</div>
    <!-- ニュース全体 -->
    <div class="news-list">
      <!-- デスクトップ１つ１つのニュース -->
      <div class="news">
        <div class="news-date">2021.00.00</div>
        <div class="news-tag">NEWS</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="news">
        <div class="news-date">2021.00.00</div>
        <div class="news-tag">NEWS</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="news">
        <div class="news-date">2021.00.00</div>
        <div class="news-tag">NEWS</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="news">
        <div class="news-date">2021.00.00</div>
        <div class="news-tag">NEWS</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="news">
        <div class="news-date">2021.00.00</div>
        <div class="news-tag">NEWS</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="news">
        <div class="news-date">2021.00.00</div>
        <div class="news-tag">NEWS</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="news">
        <div class="news-date">2021.00.00</div>
        <div class="news-tag">NEWS</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="news">
        <div class="news-date">2021.00.00</div>
        <div class="news-tag">NEWS</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="news">
        <div class="news-date">2021.00.00</div>
        <div class="news-tag">NEWS</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="news">
        <div class="news-date">2021.00.00</div>
        <div class="news-tag">NEWS</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <!-- モバイル１つ１つのニュース -->
      <div class="sm-news">
        <div class="news-tag">NEWS</div>
        <div class="news-date">2021.00.00</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="sm-news">
        <div class="news-tag">NEWS</div>
        <div class="news-date">2021.00.00</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="sm-news">
        <div class="news-tag">NEWS</div>
        <div class="news-date">2021.00.00</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="sm-news">
        <div class="news-tag">NEWS</div>
        <div class="news-date">2021.00.00</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="sm-news">
        <div class="news-tag">NEWS</div>
        <div class="news-date">2021.00.00</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="sm-news">
        <div class="news-tag">NEWS</div>
        <div class="news-date">2021.00.00</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="sm-news">
        <div class="news-tag">NEWS</div>
        <div class="news-date">2021.00.00</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="sm-news">
        <div class="news-tag">NEWS</div>
        <div class="news-date">2021.00.00</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="sm-news">
        <div class="news-tag">NEWS</div>
        <div class="news-date">2021.00.00</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <div class="sm-news">
        <div class="news-tag">NEWS</div>
        <div class="news-date">2021.00.00</div>
        <div class="news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
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