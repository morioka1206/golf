<!-- フッター -->
<footer id="footer">
  <div class="footer-wrapper">
    <div class="footer-contents">
      <div class="footer-logo">
        <img src="<?php echo get_theme_file_uri(); ?>/images/logo-white.svg" alt="GOLFERS24ロゴ">
      </div>
      <div class="footer-company-infomation">
        <p class="footer-company-name">株式会社StudioX</p>
        <p class="footer-postalcode">〒106-0032</p>
        <p class="footer-company-address">東京都港区六本木7-14-23</p>
        </p>
      </div>
      <div class="sm-footer-sns">
        <p class="footer-follow-us">FOLLOW US</p>
        <div class="footer-sns-icons">
          <div class="footer-facebook"><a href="https://www.facebook.com/Golfers24-107676011730422/"><i class="fab fa-facebook-square"></i></a></div>
          <div class="footer-instagram"><a href="https://www.instagram.com/golfers24_official/?hl=ja"><i class="fab fa-instagram"></i></a></div>
          <div class="footer-line"><a href="https://lin.ee/7Ii8MCV"><i class="fab fa-line"></i></a></div>
        </div>
      </div>
      <div class="footer-links">
        <div class="footer-company"><a href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a></div>
        <div class="footer-membership"><a href="<?php echo esc_url(home_url('/membership')); ?>">会員規約</a></div>
        <div class="footer-privacy"><a href="<?php echo esc_url(home_url('/privacy_policy')); ?>">プライバシーポリシー</a></div>
        <div class="footer-special"><a href="<?php echo esc_url(home_url('/special_commercial_code')); ?>">特商法</a></a></div>
      </div>
    </div>


    <div class="footer-sns">
      <p class="footer-follow-us">FOLLOW US</p>
      <div class="footer-sns-icons">
        <div class="footer-facebook"><a href="https://www.facebook.com/Golfers24-107676011730422/"><i class="fab fa-facebook-square"></i></a href=""></div>
        <div class="footer-instagram"><a href="https://www.instagram.com/golfers24_official/?hl=ja"><i class="fab fa-instagram"></i></a></div>
        <div class="footer-line"><a href="https://lin.ee/7Ii8MCV"><i class="fab fa-line"></a></i></div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <p class="footer-copyright">© StudioX All rights reserved.</p>
  </div>
</footer>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js">
</script>

<!-- ファーストビューのニュースのスライド -->
<script>
  let first_news = new Swiper('.first-news', {
    // オプション


    // 繰り返し表示する
    loop: true,

    //自動再生する場合
    autoplay: {
      delay: 4000, //4秒後に次の画像に代わる
    },
    speed: 3500, //スライドのスピードをミリ秒で調整

    slidesPerView: 1, //画像を何枚表示するか


    // 複製する数を指定
    loopedSlides: 6,

    // ページネーション
    pagination: {
      el: '.swiper-pagination',
      // クリックに反応させる
      clickable: true
    },

    // ナビゲーションの矢印
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // 必要なオプションを指定する
  });
</script>



<!-- モバイルの特徴紹介のスライド -->
<script>
  let store_detail_images = new Swiper('.store-detail-images', {
    // オプション

    // 繰り返し表示する
    loop: true,

    // 間隔を指定
    spaceBetween: 20,

    // 一度に表示するスライド数
    slidesPerView: 1.5,

    // センターにもってくる
    centeredSlides: true,

    // 自動で変わる
    autoplay: {
      delay: 3000
    },

    // 複製する数を指定
    loopedSlides: 6,

    // ページネーション
    pagination: {
      el: '.swiper-pagination',
      // クリックに反応させる
      clickable: true
    },

    // ナビゲーションの矢印
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // スクロールバー
    scrollbar: {
      el: '.swiper-scrollbar',
    },
    // 必要なオプションを指定する
  });
</script>



<!-- ファーストビューの画像のスライド -->
<script>
  let slider1 = new Swiper('.slider1', {
    // オプション
    effect: 'fade',

    // 繰り返し表示する
    loop: true,

    // 自動で変わる
    autoplay: {
      delay: 5000
    },

    speed: 2000, //２秒かけてフェードで切り替わる

    // ページネーション
    pagination: {
      el: '.swiper-pagination',
      // クリックに反応させる
      clickable: true
    },

    // ナビゲーションの矢印
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // スクロールバー
    scrollbar: {
      el: '.swiper-scrollbar',
    },
    // 必要なオプションを指定する
  });
</script>

<script>
  let slider2 = new Swiper('.slider2', {
    // オプション

    // 繰り返し表示する
    loop: true,

    // 自動で変わる
    autoplay: {
      delay: 3000
    },

    // ページネーション
    pagination: {
      el: '.swiper-pagination',
      // クリックに反応させる
      clickable: true
    },

    // ナビゲーションの矢印
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // スクロールバー
    scrollbar: {
      el: '.swiper-scrollbar',
    },
    // 必要なオプションを指定する
  });
</script>

<!-- ふわっとアニメーション -->
<script>
  $(function() {
    $(window).on('load scroll', function() {
      $('.animation, .animation2, .animation3').each(function() {
        //ターゲットの位置を取得
        var target = $(this).offset().top;
        //スクロール量を取得
        var scroll = $(window).scrollTop();
        //ウィンドウの高さを取得
        var height = $(window).height();
        //ターゲットまでスクロールするとフェードインする
        if (scroll > target - height) {
          //クラスを付与
          $(this).addClass('active');
        }
      });
    });
  });
</script>

<script>
  $(function() {
    $(window).on('load scroll', function() {
      $('.animation4').each(function() {
        //ターゲットの位置を取得
        var target = $(this).offset().top;
        //スクロール量を取得
        var scroll = $(window).scrollTop();
        //ウィンドウの高さを取得
        var height = $(window).height();
        //ターゲットまでスクロールするとフェードインする
        if (scroll > target - height) {
          //クラスを付与
          $(this).addClass('intro-active');
        }
      });
    });
  });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
  $(function() {
    var h = $(window).height();

    $('#wrap').css('display', 'none');
    $('#loader-bg ,#loader').height(h).css('display', 'block');
  });

  $(window).load(function() { //全ての読み込みが完了したら実行
    $('#loader-bg').delay(400).fadeOut(600);
    $('#loader').delay(400).fadeOut(800);
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script>
<!-- ローディングのアウトラインアニメーション -->
<script>
  var stroke;
  stroke = new Vivus('mask', { //アニメーションをするIDの指定
      start: 'manual', //自動再生をせずスタートをマニュアルに
      type: 'scenario-sync', // アニメーションのタイプを設定
      duration: 10, //アニメーションの時間設定。数字が小さくなるほど速い
      forceRender: false, //パスが更新された場合に再レンダリングさせない
      animTimingFunction: Vivus.EASE, //動きの加速減速設定
    },
    function() {
      $("#mask").attr("class", "done"); //描画が終わったらdoneというクラスを追加
    }
  );

  $(window).on('load', function() {
    $("#loader-bg").delay(3000).fadeOut('slow'); //ローディング画面を3秒（3000ms）待機してからフェイドアウト
    $("#loader").delay(3000).fadeOut('slow'); //ロゴを3秒（3000ms）待機してからフェイドアウト
    stroke.play(); //SVGアニメーションの実行
  });
</script>

<?php wp_footer(); ?>
</div>
</body>

</html>