<!-- フッター -->
<footer id="footer">
  <div class="footer-contents">
    <div class="footer-logo">
      <img src="<?php echo get_theme_file_uri(); ?>/images/logo-white.svg" alt="GOLFERS24ロゴ">
    </div>
    <div class="footer-company-infomation">
      <p class="footer-company-name">株式会社XXXXX</p>
      <p class="footer-postalcode">〒000-0000</p>
      <p class="footer-company-address">東京都XXX区XXXX0-0-0 〇〇ビル</p>
      </p>
    </div>
    <div class="sm-footer-sns">
      <p class="footer-follow-us">FOLLOW US</p>
      <div class="footer-sns-icons">
        <div class="footer-facebook"><i class="fab fa-facebook-square"></i></div>
        <div class="footer-instagram"><i class="fab fa-instagram"></i></div>
        <div class="footer-line"><i class="fab fa-line"></i></div>
      </div>
    </div>
    <div class="footer-links">
      <a href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a>
      <a href="<?php echo esc_url(home_url('/membership')); ?>">会員規約</a>
      <a href="<?php echo esc_url(home_url('/privacy_policy')); ?>">プライバシーポリシー</a>
      <a href="<?php echo esc_url(home_url('/special_commercial_code')); ?>">特商法</a></a>
    </div>
    <p class="footer-copyright">copyright表記が入ります</p>
  </div>


  <div class="footer-sns">
    <p class="footer-follow-us">FOLLOW US</p>
    <div class="footer-sns-icons">
      <div class="footer-facebook"><i class="fab fa-facebook-square"></i></div>
      <div class="footer-instagram"><i class="fab fa-instagram"></i></div>
      <div class="footer-line"><i class="fab fa-line"></i></div>
    </div>
  </div>
</footer>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js">
</script>

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


<?php wp_footer(); ?>
</body>

</html>