<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sm-style.css" media="only screen and (max-width:600px)">
  <link rel="stylesheet" href="style.css" media="only screen and (min-width: 601px)">
  <!-- webフォント -->
  <link rel="stylesheet" href="https://use.typekit.net/szq6kdr.css">
  <script src="https://kit.fontawesome.com/e0b0272f60.js" crossorigin="anonymous"></script>
  <!-- スライド -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- 同じ部分が多いのでJQueryでファイルを分割したものを読み込み -->
  <script>
    //共通パーツ読み込み
    $(function() {
      $("#header").load("./page-parts/header.html");
      $("#footer").load("./page-parts/footer.html");
      $("#contact-us").load("./page-parts/contact-us.html");
      $("#third-section").load("./page-parts/third-section.html");


    });
  </script>
  <title>店舗一覧</title>
</head>

<body>
  <!-- ヘッダー -->
  <header id="header">
  </header>


  <div class="store-details-wrapper">
    <div class="store-details-top-image">
    </div>

    <!-- 店舗詳細情報 -->
    <div class="store-detail-introduction">
      <div class="store-introduction-text">
        <div class="store-introduction-name">福岡大濠公園店</div>
        <div class="store-introduction-sentence">
          <p>この文章はダミーです。この文章はダミーです。この文章はダミーです。
            この文章はダミーです。この文章はダミーです。
            この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。</p>
        </div>
      </div>
      <div class="store-detail-images">
        <div class="store-detail-image"><img src="<?php echo get_theme_file_uri(); ?>/images/store-detail1.png" alt=""></div>
        <div class="store-detail-image"><img src="<?php echo get_theme_file_uri(); ?>/images/store-detail1.png" alt=""></div>
        <div class="store-detail-image"><img src="<?php echo get_theme_file_uri(); ?>/images/store-detail1.png" alt=""></div>
      </div>
    </div>


    <!-- Googleマップ -->
    <div class="google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3246.0773034635736!2d139.5445073153363!3d35.55179298022474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f79789e4a4e9%3A0x78ea11c9d5ce4d6e!2z44CSMjI1LTAwMTQg56We5aWI5bed55yM5qiq5rWc5biC6Z2S6JGJ5Yy66I2P55Sw6KW_77yR5LiB55uu77yR77yU4oiS77ySIOemj-WyoeecjOWtpueUn-S8mumkqA!5e0!3m2!1sja!2sjp!4v1636823927769!5m2!1sja!2sjp" width="1166" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- デスクトップ用店舗情報 -->
    <div class="store-detail-information">
      <div class="store-detail-name">店舗名</div>
      <!-- 店舗住所 -->
      <div class="store-detail-address">
        <div class="store-detail-address-title">住所</div>
        <div class="store-detail-address-content">
          <p>〒000-0000</p>
          <p>住所が入ります。住所が入ります。住所が入ります</p>
        </div>
      </div>
      <!-- 店舗電話番号 -->
      <div class="store-detail-tel">
        <div class="store-detail-tel-title">TEL</div>
        <div class="store-detail-tel-content">000-000-000</div>
      </div>
      <!-- 店舗メールアドレス -->
      <div class="store-detail-mail">
        <div class="store-detail-mail-title">Mail</div>
        <div class="store-detail-mail-content">xxxxx@xxx.co.jp</div>
      </div>
      <!-- 店舗営業時間 -->
      <div class="store-detail-hours">
        <div class="store-deail-hours-title">営業時間</div>
        <div class="store-detail-hours-content">00:00~00:00</div>
      </div>
    </div>
  </div>

  <!-- スマホ用店舗情報 -->
  <div class="sm-store-details-wrapper">
    <div class="store-introduction-name">福岡大濠公園店</div>
    <div class="store-details-top-image">
    </div>

    <!-- 店舗詳細情報 -->
    <div class="store-detail-introduction">
      <div class="store-introduction-sentence">
        <p>この文章はダミーです。この文章はダミーです。この文章はダミーです。
          この文章はダミーです。この文章はダミーです。
          この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。</p>
      </div>

      <div class="store-detail-images">
        <div class="swiper-wrapper">
          <div class="store-detail-image swiper-slide"><img src="./images/store-detail1.png" alt=""></div>
          <div class="store-detail-image swiper-slide"><img src="./images/store-detail1.png" alt=""></div>
          <div class="store-detail-image swiper-slide"><img src="./images/store-detail1.png" alt=""></div>
        </div>
      </div>
    </div>


    <!-- Googleマップ -->
    <div class="google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3246.0773034635736!2d139.5445073153363!3d35.55179298022474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f79789e4a4e9%3A0x78ea11c9d5ce4d6e!2z44CSMjI1LTAwMTQg56We5aWI5bed55yM5qiq5rWc5biC6Z2S6JGJ5Yy66I2P55Sw6KW_77yR5LiB55uu77yR77yU4oiS77ySIOemj-WyoeecjOWtpueUn-S8mumkqA!5e0!3m2!1sja!2sjp!4v1636823927769!5m2!1sja!2sjp" width="335" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="store-detail-information">
      <div class="store-detail-name">店舗名</div>
      <!-- 店舗住所 -->
      <div class="store-detail-address">
        <div class="store-detail-address-title">住所</div>
        <div class="store-detail-address-content">
          <p>〒000-0000</p>
          <p>住所が入ります。住所が入ります。住所が入ります</p>
        </div>
      </div>
      <!-- 店舗電話番号 -->
      <div class="store-detail-tel">
        <div class="store-detail-tel-title">TEL</div>
        <div class="store-detail-tel-content">000-000-000</div>
      </div>
      <!-- 店舗メールアドレス -->
      <div class="store-detail-mail">
        <div class="store-detail-mail-title">Mail</div>
        <div class="store-detail-mail-content">xxxxx@xxx.co.jp</div>
      </div>
      <!-- 店舗営業時間 -->
      <div class="store-detail-hours">
        <div class="store-deail-hours-title">営業時間</div>
        <div class="store-detail-hours-content">00:00~00:00</div>
      </div>
    </div>
  </div>


  <!-- ご利用の流れ -->
  <div id="third-section"></div>


  <!-- GOLFERS24の特徴 -->
  <div class="second-section">
    <div class="second-section-title">
      GOLFERS24の特徴
    </div>

    <!-- デスクトップ用交互に紹介するGOLFERS24の特徴 -->
    <div class="second-section-features">

      <!-- 特徴１ -->
      <div class="feature">
        <div class="feature-text-wrapper">
          <div class="feature-text-box">
            <div class="feature-title">
              <p>あなただけの</p>
              <p>完全個室型会員ゴルフラウンジ</p>
            </div>
            <div class="feature-sentence">
              <p>
                室内は1打席のみの完全プライベート空間。空調の整ったラグジュアリーな空間で、
                黙々と練習に打ち込むことはもちろん、好きな音楽を流しながら練習を楽しんだり、
                家族や恋人、親子で楽しみながら練習することも可能です。
              </p>
            </div>
          </div>
        </div>
        <div class="feature-image"><img src="./images/feature1.png" alt=""></div>
      </div>

      <!-- 特徴２ -->
      <div class="feature">
        <div class="feature-text-wrapper">
          <div class="feature-text-box">
            <div class="feature-title">
              <p>24時間いつでも</p>
              <p>手ぶらで通い放題</p>
            </div>
            <div class="feature-sentence">
              <p>
                24時間無人での運営を実現し、いつでも好きな時に練習可能な環境を整えています。
                クラブも最新のレンタルクラブを取り揃えているため、
                お仕事帰りでもスーツのまま手ぶらで気軽にお越しいただけます。
              </p>
              <p>好きな時に気軽に練習することができるため、ゴルフをより日常のものとして楽しむことができます。</p>
            </div>
          </div>
        </div>
        <div class="feature-image"><img src="./images/feature2.png" alt=""></div>
      </div>

      <!-- 特徴３ -->
      <div class="feature">
        <div class="feature-text-wrapper">
          <div class="feature-text-box">
            <div class="feature-title">
              <p>世界シェアNo.1の</p>
              <p>ゴルフシミュレーターを採用</p>
            </div>
            <div class="feature-sentence">
              <p>
                米LPGA公認のGOLFZON『GDR』を採用。スイングデータを正確に数値化し確認することができるので、
                効率良くスコアアップを目指すことができます。
              </p>
              <p>
                GOLFZONアプリに登録するとスイング動画や練習結果を自動で保存してくれるため、
                いつでもどこでも自身のスイングやデータを確認し練習に活かすことが可能です。
              </p>
            </div>
          </div>
        </div>
        <div class="feature-image"><img src="./images/feature3.png" alt=""></div>
      </div>

      <!-- 特徴４ -->
      <div class="feature">
        <div class="feature-text-wrapper">
          <div class="feature-text-box">
            <div class="feature-title">
              <p>スムーズな即時予約と万全のセキュリティ</p>
            </div>
            <div class="feature-sentence">
              <p>
                予約時には面倒なスタッフとのやりとりも一切無し。いつでも専用の予約システムから簡単に予約を取ることができます。
                入退場は予約時にスマホアプリ上で発行される電子錠を扉にかざすだけでOK。
                予約から入場、退場までを全てご自身でストレスなく行っていただけます。
                また、電子鍵は自身が予約した時間でのみ有効となるため、練習中に別の会員様が入ってくるような心配も無し。
                セキュリティ面も万全で安心して練習に集中いただくことができます。
              </p>
            </div>
          </div>
        </div>
        <div class="feature-image"><img src="./images/feature4.png" alt=""></div>
      </div>

      <!-- 特徴５ -->
      <div class="feature">
        <div class="feature-text-wrapper">
          <div class="feature-text-box">
            <div class="feature-title">
              <p>万全の感染防止対策</p>
            </div>
            <div class="feature-sentence">
              <p>
                安心してご利用いただけるよう、手指のアルコール消毒はもちろん、
                1分間で99.99%以上の新型コロナウイルスを不活性化させる効果を持つクリーン・リフレを採用。
                空気中に拡散することで空間そのものの感染防止対策を行っております。
                原料は水と食塩のみのため、当然人体にも無害な成分です。
              </p>
            </div>
          </div>
        </div>
        <div class="feature-image"><img src="./images/feature5.png" alt=""></div>
      </div>

    </div>

    <!-- スマホ用GOFLERS２４の特徴 -->
    <div class="sm-second-section-features">
      <div class="swiper">
        <div class="swiper-wrapper">

          <!-- 特徴１ -->
          <div class="feature swiper-slide">
            <div class="feature-text-wrapper">
              <div class="feature-text-box">
                <div class="feature-title">
                  <p>あなただけの</p>
                  <p>完全個室型会員ゴルフラウンジ</p>
                </div>
                <div class="feature-sentence">
                  <p>
                    室内は1打席のみの完全プライベート空間。空調の整ったラグジュアリーな空間で、
                    黙々と練習に打ち込むことはもちろん、好きな音楽を流しながら練習を楽しんだり、
                    家族や恋人、親子で楽しみながら練習することも可能です。
                  </p>
                </div>
              </div>
            </div>
            <div class="feature-image"><img src="./images/feature1.png" alt=""></div>
          </div>

          <!-- 特徴２ -->
          <div class="feature swiper-slide">
            <div class="feature-text-wrapper">
              <div class="feature-text-box">
                <div class="feature-title">
                  <p>24時間いつでも</p>
                  <p>手ぶらで通い放題</p>
                </div>
                <div class="feature-sentence">
                  <p>
                    24時間無人での運営を実現し、いつでも好きな時に練習可能な環境を整えています。
                    クラブも最新のレンタルクラブを取り揃えているため、
                    お仕事帰りでもスーツのまま手ぶらで気軽にお越しいただけます。
                  </p>
                  <p>好きな時に気軽に練習することができるため、ゴルフをより日常のものとして楽しむことができます。</p>
                </div>
              </div>
            </div>
            <div class="feature-image"><img src="./images/feature2.png" alt=""></div>
          </div>

          <!-- 特徴３ -->
          <div class="feature swiper-slide">
            <div class="feature-text-wrapper">
              <div class="feature-text-box">
                <div class="feature-title">
                  <p>世界シェアNo.1の</p>
                  <p>ゴルフシミュレーターを採用</p>
                </div>
                <div class="feature-sentence">
                  <p>
                    米LPGA公認のGOLFZON『GDR』を採用。スイングデータを正確に数値化し確認することができるので、
                    効率良くスコアアップを目指すことができます。
                  </p>
                  <p>
                    GOLFZONアプリに登録するとスイング動画や練習結果を自動で保存してくれるため、
                    いつでもどこでも自身のスイングやデータを確認し練習に活かすことが可能です。
                  </p>
                </div>
              </div>
            </div>
            <div class="feature-image"><img src="./images/feature3.png" alt=""></div>
          </div>

          <!-- 特徴４ -->
          <div class="feature swiper-slide">
            <div class="feature-text-wrapper">
              <div class="feature-text-box">
                <div class="feature-title">
                  <p>スムーズな即時予約と万全のセキュリティ</p>
                </div>
                <div class="feature-sentence">
                  <p>
                    予約時には面倒なスタッフとのやりとりも一切無し。いつでも専用の予約システムから簡単に予約を取ることができます。
                    入退場は予約時にスマホアプリ上で発行される電子錠を扉にかざすだけでOK。
                    予約から入場、退場までを全てご自身でストレスなく行っていただけます。
                    また、電子鍵は自身が予約した時間でのみ有効となるため、練習中に別の会員様が入ってくるような心配も無し。
                    セキュリティ面も万全で安心して練習に集中いただくことができます。
                  </p>
                </div>
              </div>
            </div>
            <div class="feature-image"><img src="./images/feature4.png" alt=""></div>
          </div>

          <!-- 特徴５ -->
          <div class="feature swiper-slide">
            <div class="feature-text-wrapper">
              <div class="feature-text-box">
                <div class="feature-title">
                  <p>万全の感染防止対策</p>
                </div>
                <div class="feature-sentence">
                  <p>
                    安心してご利用いただけるよう、手指のアルコール消毒はもちろん、
                    1分間で99.99%以上の新型コロナウイルスを不活性化させる効果を持つクリーン・リフレを採用。
                    空気中に拡散することで空間そのものの感染防止対策を行っております。
                    原料は水と食塩のみのため、当然人体にも無害な成分です。
                  </p>
                </div>
              </div>
            </div>
            <div class="feature-image"><img src="./images/feature5.png" alt=""></div>
          </div>
        </div>

        <div class="swiper-pagination"></div>

      </div>

    </div>
  </div>


  <!-- CONTACT US -->
  <div id="contact-us"></div>

  <!-- フッター -->
  <footer id="footer">
  </footer>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

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

</body>

</html>