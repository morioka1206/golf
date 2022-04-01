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
    <div class="lp-header-right">
      <img src="<?php echo get_theme_file_uri(); ?>/images/lp-header01.svg" alt="" class="lp-header01">
      <a href="https://lin.ee/7Ii8MCV/" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/images/lp-header02.svg" alt="" class="lp-header02"></a>
      <a href="https://lin.ee/7Ii8MCV/" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/images/lp-sm-header-line.png" alt="" class="lp-header03"></a>
    </div>
  </header>

  <!-- LPの本体 -->
  <div class="lp-wrapper">
    <div class="lp-top">
      <div class="lp-top-image">
        <div class="lp-golfman">
          <img src="<?php echo get_theme_file_uri(); ?>/images/golfman.png" alt="">
        </div>
        <div class="lp-top-logo">
          <div class="lp-top-logo-logo"><img src="<?php echo get_theme_file_uri(); ?>/images/pc-lp-top-logo.svg" alt=""></div>
          <div class="lp-top-logo-line"><img src="<?php echo get_theme_file_uri(); ?>/images/pc-lp-line.png" alt=""></div>
        </div>

        <div class="lp-top-message">
          <img src="<?php echo get_theme_file_uri(); ?>/images/fv-copy-pc.png" alt="" class="fv-copy">
          <img src="<?php echo get_theme_file_uri(); ?>/images/top-orange.svg" alt="" class="top-orange">
        </div>

        <div class="lp-top-price">
          <!-- <div class="lp-top-price-message">
            <img src="<?php echo get_theme_file_uri(); ?>/images/lp-top-price-black.png" alt="">
            <img src="<?php echo get_theme_file_uri(); ?>/images/無料体験予約受付中！.svg" alt="" class="message">
          </div>
          <img src="<?php echo get_theme_file_uri(); ?>/images/fv-maintext.svg" alt="" class="top-price"> -->
          <img src="<?php echo get_theme_file_uri(); ?>/images/lp-top-price02.png" alt="">
        </div>

        <div class="sm-lp-top-price">
          <img src="<?php echo get_theme_file_uri(); ?>/images/lp-top-price02.png" alt="">
        </div>

        <div class="lp-top-under">
        </div>

        <div class="lp-top-image-line-link">
          <img src="<?php echo get_theme_file_uri(); ?>/images/体験予約はこちらから！.svg" alt="" class="kotirakara">
          <a href="https://lin.ee/7Ii8MCV/" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/images/ctabtn-line-pc.png" alt="" class="link-button dokidoki"></a>
        </div>
      </div>

    </div>

    <div class="lp-second">
      <!-- 選ばれるポイント -->
      <div class="three-points">
        <div class="point-title">
          <p>GOLFERS24の<span>3つの選ばれる</span>ポイント</p>
        </div>

        <div class="sm-point-title">
          <img src="<?php echo get_theme_file_uri(); ?>/images/sm-3point-title.png" alt="">
        </div>

        <!-- <div class="sm-point-title">
          <p>GOLFERS24の</p>
          <p><span>3</span>つの選ばれるポイント</p>
        </div> -->
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
          <img src="<?php echo get_theme_file_uri(); ?>/images/second-goldtop.png" alt="" class="trial-link-gold">
          <img src="<?php echo get_theme_file_uri(); ?>/images/mayottara.png" alt="" class="link-head-title">
        </div>
        <div class="trial-link-off">
          <img src="<?php echo get_theme_file_uri(); ?>/images/fv-maintext02.png" alt="">
        </div>
        <div class="trial-link-off-limit">
          <img src="<?php echo get_theme_file_uri(); ?>/images/second-off.png" alt="">
        </div>
        <a href="https://lin.ee/7Ii8MCV/" target="_blank" class="trial-link-line dokidoki">
          <img src="<?php echo get_theme_file_uri(); ?>/images/ctabtn-line-pc.png" alt="">
        </a>
      </div>

      <div class="sm-trial-link-wrapper">
        <div class="trial-link-head">
          <img src="<?php echo get_theme_file_uri(); ?>/images/sm-trial-goldtop.png" alt="" class="trial-link-gold">
          <img src="<?php echo get_theme_file_uri(); ?>/images/sm-mayottara.png" alt="" class="link-head-title">
        </div>
        <div class="trial-link-off">
          <img src="<?php echo get_theme_file_uri(); ?>/images/fv-maintext02.png" alt="">
        </div>
        <div class="trial-link-off-limit">
          <img src="<?php echo get_theme_file_uri(); ?>/images/second-off.png" alt="">
        </div>
        <a href="https://lin.ee/7Ii8MCV/" target="_blank" class="trial-link-line dokidoki">
          <img src="<?php echo get_theme_file_uri(); ?>/images/ctabtn-line-pc.png" alt="">
        </a>
      </div>


    </div>

    <!-- 口コミ -->
    <div class="lp-third">
      <div class="lp-third-title">
        <img src="<?php echo get_theme_file_uri(); ?>/images/uresii-title.svg" alt="">
      </div>
      <div class="sm-lp-third-title">
        <img src="<?php echo get_theme_file_uri(); ?>/images/sm-uresii-title.svg" alt="">
      </div>

      <div class="uresii-wrapper">

        <div class="each-uresii i01">
          <div class="uresii-title">
            人目を気にせず24時間いつでも練習ができるのが嬉しい！
          </div>

          <div class="uresii-content">
            <p> 初めてのインドアゴルフ場だったのですが、室内は清潔感があり最新の機械を使</p>
            <p>用できとても快適でした。<span class="uresii-yellow">外から見えないので完全個室のプライベート空間で人</span></p>
            <p><span class="uresii-yellow">目を気にせず24時間いつでも練習ができて、</span>駅からも家からも近くて便利なので</p>
            <p>活用して上達したいと思います。</p>
          </div>
          <div class="sm-uresii-content">
            <p> 初めてのインドアゴルフ場だったのです</p>
            <p>が、室内は清潔感があり最新の機械を使</p>
            <p>用できとても快適でした。<span class="uresii-yellow">外から見えな</span></p>
            <p><span class="uresii-yellow">いので完全個室のプライベート空間で人</span></p>
            <p><span class="uresii-yellow">目を気にせず24時間いつでも練習ができ</span></p>
            <p><span class="uresii-yellow">て、</span>駅からも家からも近くて便利なので</p>
            <p>活用して上達したいと思います。</p>
          </div>
        </div>

        <div class="each-uresii i02">
          <div class="uresii-title">
            初めてでも丁寧なサポートで迷わず利用できました！
          </div>
          <div class="uresii-content">
            <p>バーチャルゴルフは初めてでしたが、<span class="uresii-yellow">係りの方がオンラインで親切に使い方や遊</span></p>
            <p><span class="uresii-yellow">び方を教えてくれたおかげで楽しく体験が出来ました。</span></p>
            <p>色々あるモードの中でも、実際のコースをラウンドできるモードが臨場感もあっ</p>
            <p>て楽しかったです。</p>
          </div>
          <div class="sm-uresii-content">
            <p>バーチャルゴルフは初めてでしたが、<span class="uresii-yellow">係</span></p>
            <p><span class="uresii-yellow">りの方がオンラインで親切に使い方や遊</span></p>
            <p><span class="uresii-yellow">び方を教えてくれたおかげで楽しく体験</span></p>
            <p><span class="uresii-yellow">が出来ました。</span></p>
            <p>色々あるモードの中でも、実際のコース</p>
            <p>をラウンドできるモードが臨場感もあっ</p>
            <p>て楽しかったです。</p>
          </div>



        </div>

        <div class="each-uresii 03">
          <div class="uresii-title">
            全てオンラインで完結するのがすばらしい！
          </div>
          <div class="uresii-content">
            <p>初めての利用でしたが、<span class="uresii-yellow">会員登録〜体験予約までオンラインで完結。スマホで鍵</p>
            <p><span class="uresii-yellow">も開けられるので、予約時間に店舗に行くだけでした。</span></p>
            <p>無人店舗ですが、利用マニュアルが完備されているので、初めてでも迷うことな</p>
            <p>くシミュレーターを活用できました。</p>
          </div>
          <div class="sm-uresii-content">
            <p>初めての利用でしたが、<span class="uresii-yellow">会員登録〜体験</span></p>
            <p><span class="uresii-yellow">予約までオンラインで完結。スマホで鍵</span></p>
            <p><span class="uresii-yellow">も開けられるので、予約時間に店舗に行</span></p>
            <p><span class="uresii-yellow">くだけでした。</span></p>
            <p>無人店舗ですが、利用マニュアルが完備</p>
            <p>されているので、初めてでも迷うことな</p>
            <p>くシミュレーターを活用できました。</p>
          </div>
        </div>

      </div>
    </div>

    <!-- こんなお悩みありませんか？ -->
    <div class="lp-forth">
      <div class="lp-forth-title">
        <!-- <p class="small">打ちっ放し練習場の</p>
        <p class="big">こんな<span>お悩み</span>ありませんか？</p> -->
        <img src="<?php echo get_theme_file_uri(); ?>/images/lp-pc-konnaonayami.png" alt="" class="lp-forth-title-pc">
        <img src="<?php echo get_theme_file_uri(); ?>/images/lp-sm-konnaonayami.png" alt="" class="lp-forth-title-sm">
      </div>
      <div class="onayami-list">
        <div class="each-onayami">家から遠い</div>
        <div class="each-onayami">仕事終わりに行きたいけど締まってる・・・</div>
        <div class="each-onayami">周りの視線が気になる・・・</div>
        <div class="each-onayami">闇雲に打つだけで効果あるのかな・・・</div>
        <div class="each-onayami">いつも混んでて打席待ち・・・</div>
      </div>
      <div class="sm-onayami-list">
        <div class="each-onayami"><img src="<?php echo get_theme_file_uri(); ?>/images/onayami-check.svg" alt="">
          <p>家から遠い</p>
        </div>
        <div class="each-onayami"><img src="<?php echo get_theme_file_uri(); ?>/images/onayami-check.svg" alt="">
          <p>仕事終わりに行きたいけど締まってる・・・</p>
        </div>
        <div class="each-onayami"><img src="<?php echo get_theme_file_uri(); ?>/images/onayami-check.svg" alt="">
          <p>周りの視線が気になる・・・</p>
        </div>
        <div class="each-onayami"><img src="<?php echo get_theme_file_uri(); ?>/images/onayami-check.svg" alt="">
          <p>闇雲に打つだけで効果あるのかな・・・</p>
        </div>
        <div class="each-onayami"><img src="<?php echo get_theme_file_uri(); ?>/images/onayami-check.svg" alt="">
          <p>いつも混んでて打席待ち・・・</p>
        </div>
      </div>
      <div class="onayami-lady">
        <img src="<?php echo get_theme_file_uri(); ?>/images/sm-nayami-lady.png" alt="">
      </div>
    </div>


    <!-- 6つの理由 -->
    <div class="lp-fifth">
      <div class="lp-fifth-top-message">
        <p>このような打ちっ放し練習場の悩み</p>
        <p><span>GOLFERS24</span>なら<br class="sm-br">丸っと解決できます！</p>
      </div>
      <div class="six-reasons-wrapper">
        <div class="reason-title">
          <img src="<?php echo get_theme_file_uri(); ?>/images/6reason.svg" alt="">
        </div>
        <div class="sm-reason-title">
          <img src="<?php echo get_theme_file_uri(); ?>/images/sm6reason.svg" alt="">
        </div>

        <div class="reasons">
          <div class="each-reason reason01">
            <div class="reason-image">
              <img src="<?php echo get_theme_file_uri(); ?>/images/lp-reason-image01.png" alt="">
            </div>
            <div class="each-reason-title">
              <p>完全個室の</p>
              <p><span>プライベート空間</span>
              </p>
            </div>
            <div class="each-reason-content">
              1ブースのみのプライベート空間にこだわっています。周囲の目を気にすることなく、BGMをかけたり、動画を見たりしながら、お好きなスタイルで練習に励むことができます。
              <br>
              <br>
              ゲストの方も無料でご招待頂けます。

            </div>
          </div>
          <div class="each-reason reason02">
            <div class="reason-image">
              <img src="<?php echo get_theme_file_uri(); ?>/images/lp-reason-image02.png" alt="">
            </div>
            <div class="each-reason-title">
              <p><span>24時間</span>いつでも</p>
              <p>手ぶらで通える</p>
            </div>
            <div class="each-reason-content">
              24時間営業なので、いつでも好きな時に練習頂くことができます。
              予約もアプリからの即時予約で完了。面倒な手間も一切ありません。
              <br>
              <br>
              もちろん最新レンタルクラブも完備しているので手ぶらでもOKです。

            </div>
          </div>
          <div class="each-reason reason03">
            <div class="reason-image">
              <img src="<?php echo get_theme_file_uri(); ?>/images/lp-reason-image03.png" alt="">
            </div>
            <div class="each-reason-title">
              <p><span>世界シェアNo.1</span>の</p>
              <p>シミュレーターを採用</p>
            </div>
            <div class="each-reason-content">
              世界シェアNo.1ゴルフシミュレーター、GOLFZON『GDR』を採用。高性能ハイスピードカメラにより打ち出し角やボールスピードなどのデータを正確に計測。
              ラウンドモードも搭載しており、実在するコースを複数人でラウンドすることも可能です。

            </div>
          </div>
          <div class="each-reason reason04">
            <div class="reason-image">
              <img src="<?php echo get_theme_file_uri(); ?>/images/lp-reason-image04.png" alt="">
            </div>
            <div class="each-reason-title long-each-reason-title">
              <p>アプリを使って練習データや</p>
              <p><span>スイング動画がチェック可能</span></p>
            </div>
            <div class="each-reason-content">
              スイング時に前方・後方から自動で動画を撮影。スロー再生やコマ送り再生はもちろん、プロのスイング動画との比較ができ、効率良くスイングチェックが可能です。
              アプリを使ってご自身の練習データをいつでもどこでも確認することができます。

            </div>
          </div>
          <div class="each-reason reason05">
            <div class="reason-image">
              <img src="<?php echo get_theme_file_uri(); ?>/images/lp-reason-image05.png" alt="">
            </div>
            <div class="each-reason-title">
              <p><span>コースボール</span>で</p>
              <p>リアルな練習が可能</p>
            </div>
            <div class="each-reason-content">
              通常の練習場だと「練習用ボール」が一般的ですが、
              当店はリアルな練習環境を追求し本番用の「コースボール」を導入。
              <br>
              <br>
              本番と変わらない打感での練習をお楽しみください。
            </div>
          </div>
          <div class="each-reason reason06">
            <div class="reason-image">
              <img src="<?php echo get_theme_file_uri(); ?>/images/lp-reason-image06.png" alt="">
            </div>
            <div class="each-reason-title">
              <p><span>定額料金</span>で</p>
              <p>何度でも通い放題</p>
            </div>
            <div class="each-reason-content">
              回数制限もなく何度でも通い放題です。そのため持ち玉を気にする必要もなく、思う存分練習に打ち込むことができます。
              <br>
              <br>
              最新シミュレーターで練習すればするほどどんどん上達していくはずです。

            </div>
          </div>
        </div>


        <div class="trial-link-wrapper">
          <div class="trial-link-head">
            <img src="<?php echo get_theme_file_uri(); ?>/images/second-goldtop.png" alt="" class="trial-link-gold">
            <img src="<?php echo get_theme_file_uri(); ?>/images/mayottara.png" alt="" class="link-head-title">
          </div>
          <div class="trial-link-off">
            <img src="<?php echo get_theme_file_uri(); ?>/images/fv-maintext02.png" alt="">
          </div>
          <div class="trial-link-off-limit">
            <img src="<?php echo get_theme_file_uri(); ?>/images/second-off.png" alt="">
          </div>
          <a href="https://lin.ee/7Ii8MCV/" target="_blank" class="trial-link-line dokidoki">
            <img src="<?php echo get_theme_file_uri(); ?>/images/ctabtn-line-pc.png" alt="">
          </a>
        </div>
        <div class="sm-trial-link-wrapper">
          <div class="trial-link-head">
            <img src="<?php echo get_theme_file_uri(); ?>/images/sm-trial-goldtop.png" alt="" class="trial-link-gold">
            <img src="<?php echo get_theme_file_uri(); ?>/images/sm-mayottara.png" alt="" class="link-head-title">
          </div>
          <div class="trial-link-off">
            <img src="<?php echo get_theme_file_uri(); ?>/images/fv-maintext02.png" alt="">
          </div>
          <div class="trial-link-off-limit">
            <img src="<?php echo get_theme_file_uri(); ?>/images/second-off.png" alt="">
          </div>
          <a href="https://lin.ee/7Ii8MCV/" target="_blank" class="trial-link-line dokidoki">
            <img src="<?php echo get_theme_file_uri(); ?>/images/ctabtn-line-pc.png" alt="">
          </a>
        </div>

      </div>
    </div>

    <!-- 体験予約の流れ -->
    <div class="lp-sixth">
      <div class="lp-sixth-title">
        <img src="<?php echo get_theme_file_uri(); ?>/images/taiken-nagare.png" alt="">
      </div>
      <div class="trial-steps">
        <div class="each-step">
          <div class="step-top">
            <div class="step-number">STEP<span>01</span></div>
            <div class="step-number-text">体験申込み</div>
          </div>
          <div class="step-under">
            <p>まずは体験のお申し込みから。</p>
            <p>WebまたはLINEからのお申し込みを<br class="sm-br">お願いいたします。</p>
          </div>
        </div>

        <div class="trial-step-arrow">
          <img src="<?php echo get_theme_file_uri(); ?>/images/lp-step-arrow.png" alt="">
        </div>

        <div class="each-step">
          <div class="step-top">
            <div class="step-number">STEP<span>02</span></div>
            <div class="step-number-text">ご来店</div>
          </div>
          <div class="step-under">
            <p>あなただけのプライベート空間で、<br>ご自身のペースで練習を<br class="sm-br">お楽しみください。<br>
              もちろんゲストの方と一緒に<br class="sm-br">お楽しみ頂くことも可能です。</p>
          </div>
        </div>

      </div>

      <div class="trial-step-line-link">
        <img src="<?php echo get_theme_file_uri(); ?>/images/体験予約はこちらから！.svg" alt="" class="kotirakara">
        <a href="https://lin.ee/7Ii8MCV/" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/images/ctabtn-line-pc.png" alt="" class="link-button dokidoki"></a>
      </div>
    </div>

    <!-- イメージを変えるため -->
    <div class="lp-seventh">
      <div class="lp-seventh-message-wrapper">
        <div class="small-message">
          <p>ゴルフの練習をしようと思うと、<br class="sm-br">家から遠くの練習場に<br class="sm-br">行かないといけない…</p>
          <p>遠くの練習場に行くのにも<br class="sm-br">時間がかかる…</p>
          <p>好きな時に練習できない…</p>
        </div>
        <div class="big-message">
          <p><span>そんな打ちっ放し練習場の</span><br class="sm-br"><span>イメージを変えるため、</span></p>
          <p><span>GOLFERS24は生まれました</span>
          </p>
        </div>
      </div>
    </div>


    <!-- 比較の表 -->
    <div class="lp-eighth">
      <div class="lp-eighth-title">
        <p class="top">GOLFERS24なら、</p>
        <p class="under">打ちっ放し練習場と比べて
          <br class="sm-br">
          <span>こんなにお得！</span>
        </p>
      </div>
      <div class="lp-table">
        <img src="<?php echo get_theme_file_uri(); ?>/images/lp-table.svg" alt="">
      </div>
    </div>


    <!-- 最後のお願い -->
    <div class="lp-nineth">
      <div class="trial-link-wrapper">
        <div class="trial-link-head">
          <img src="<?php echo get_theme_file_uri(); ?>/images/second-goldtop.png" alt="" class="trial-link-gold">
          <img src="<?php echo get_theme_file_uri(); ?>/images/mayottara.png" alt="" class="link-head-title">
        </div>
        <div class="trial-link-off">
          <img src="<?php echo get_theme_file_uri(); ?>/images/fv-maintext02.png" alt="">
        </div>
        <div class="trial-link-off-limit">
          <img src="<?php echo get_theme_file_uri(); ?>/images/second-off.png" alt="">
        </div>
        <a href="https://lin.ee/7Ii8MCV/" target="_blank" class="trial-link-line dokidoki">
          <img src="<?php echo get_theme_file_uri(); ?>/images/ctabtn-line-pc.png" alt="">
        </a>
      </div>

      <div class="sm-trial-link-wrapper">
        <div class="trial-link-head">
          <img src="<?php echo get_theme_file_uri(); ?>/images/sm-trial-goldtop.png" alt="" class="trial-link-gold">
          <img src="<?php echo get_theme_file_uri(); ?>/images/sm-mayottara.png" alt="" class="link-head-title">
        </div>
        <div class="trial-link-off">
          <img src="<?php echo get_theme_file_uri(); ?>/images/fv-maintext02.png" alt="">
        </div>
        <div class="trial-link-off-limit">
          <img src="<?php echo get_theme_file_uri(); ?>/images/second-off.png" alt="">
        </div>
        <a href="https://lin.ee/7Ii8MCV/" target="_blank" class="trial-link-line dokidoki">
          <img src="<?php echo get_theme_file_uri(); ?>/images/ctabtn-line-pc.png" alt="">
        </a>
      </div>
    </div>

    <!-- 店舗リスト -->
    <div class="lp-store-list"><?php get_template_part('store-list') ?></div>

    <!-- よくある質問 -->
    <div class="lp-questions-list"><?php get_template_part('lp-questions') ?></div>

    <div class="lp-footer-wrapper">
      <footer>
        <div class="lp-footer-contents">
          <div class="footer-logo">
            <img src="<?php echo get_theme_file_uri(); ?>/images/logo-white.svg" alt="GOLFERS24ロゴ">
          </div>
          <div class="footer-company-infomation">
            <p class="footer-company-name">株式会社StudioX</p>
            <p class="footer-postalcode">〒106-0032</p>
            <p class="footer-company-address">東京都港区六本木7-14-23</p>
            </p>
          </div>
          <div class="footer-links">
            <div class="footer-company"><a href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a></div>
            <div class="footer-membership"><a href="<?php echo esc_url(home_url('/membership')); ?>">会員規約</a></div>
            <div class="footer-privacy"><a href="<?php echo esc_url(home_url('/privacy_policy')); ?>">プライバシーポリシー</a></div>
            <div class="footer-special"><a href="<?php echo esc_url(home_url('/special_commercial_code')); ?>">特商法</a></a></div>
          </div>
        </div>
      </footer>
    </div>
  </div>