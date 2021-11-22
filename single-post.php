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
    $(function () {
      $("#header").load("./page-parts/header.html");
      $("#footer").load("./page-parts/footer.html");
      $("#contact-us").load("./page-parts/contact-us.html");

    });
  </script>
  <title>GOLFERS24ご利用の流れ</title>
</head>

<body>
  <!-- ヘッダー -->
  <header id="header">
  </header>

  <div class="news-detail-wrapper">
    <div class="news-detail-title">新着ニュースが入ります。新着ニュースが入ります。
      <div class="news-detail-tag">NEWS</div>
    </div>
    <div class="news-detail-content-wrapper">
      <!-- ニュースの日付 -->
      <div class="news-detail-date">2021.00.00</div>
      <!-- ニュースの内容 -->
      <div class="news-detail-content">
        本文が入ります。この文章はダミーです。本文が入ります。この文章はダミーです。本文が入ります。この文章はダミーです。本文が入ります。この文章はダミーです。
        本文が入ります。この文章はダミーです。本文が入ります。この文章はダミーです。本文が入ります。この文章はダミーです。本文が入ります。
        この文章はダミーです。本文が入ります。この文章はダミーです。本文が入ります。この文章はダミーです。
        本文が入ります。この文章はダミーです。本文が入ります。この文章はダミーです。
      </div>
    </div>
    <a href="#">
      <div class="news-detail-back-button">
        <div class="news-detail-back-text">記事一覧へ戻る</div>
      </div>
    </a>

  </div>




  <!-- CONTACT US -->
  <div id="contact-us"></div>

  <!-- フッター -->
  <footer id="footer">
  </footer>

</body>

</html>