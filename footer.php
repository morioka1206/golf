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
      <a href="company.html">会社概要</a>
      <a href="membership.html">会員規約</a>
      <a href="#">プライバシーポリシー</a>
      <a href="#">特商法</a></a>
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


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<!-- スクロール位置に応じて色を変える -->
<script>
  window.onscroll = function() {
    var windowWidth = window.innerWidth;
    var scrollTop = window.pageYOffset; //スクロール量を取得

    if (scrollTop <= -1) {
      $('.header-smartphone').css('background-color', 'trasparent');
      $('.header-smartphone img, .menubtn').css('filter', 'brightness(1) invert(0)');
      $('.header-smartphone').css('transition', '0.1s')
    } else if (scrollTop > 670) {
      $('.header-smartphone').css('background-color', 'white');
      $('.header-smartphone img, .menubtn').css('filter', 'brightness(1) invert(0)');
      // $('.header-smartphone').css('transition', '0.05s')
    } else if (scrollTop < 680) {
      $('.header-smartphone').css('background-color', 'transparent');
      $('.header-smartphone img, .menubtn').css('filter', 'brightness(0) invert(1)');
      $('.header-smartphone').css('transition', '0.1s')
    }


  };
</script>

<script>
  let swiper = new Swiper('.swiper', {
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