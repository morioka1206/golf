<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/sm-golf.css" media="only screen and (max-width:600px)">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/golf.css" media="only screen and (min-width: 601px)">
  <!-- webフォント -->
  <link rel="stylesheet" href="https://use.typekit.net/szq6kdr.css">
  <script src="https://kit.fontawesome.com/e0b0272f60.js" crossorigin="anonymous"></script>
  <!-- スライド -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- 同じ部分が多いのでJQueryでファイルを分割したものを読み込み -->
  <!-- <script>
    //共通パーツ読み込み
    $(function() {
      $("#header").load("./page-parts/header.html");
      $("#footer").load("./page-parts/footer.html");
      $("#contact-us").load("./page-parts/contact-us.html");
      $("#third-section").load("./page-parts/third-section.html");


    });
  </script> -->
  <title>GOLFERS24</title>
  <?php wp_head(); ?>
</head>


<body>




  <div class="top-section">
    <header id="header">
      <div class="header-desktop">
        <div class="header-logo">
          <img src="<?php echo get_theme_file_uri(); ?>/images/logo.svg" alt="GOLFERS24ロゴ">
        </div>
        <!-- ヘッダーのナビゲーションメニュー -->
        <div class="header-navi-contents">
          <div class="header-navi-content"><a href="index.html">TOP</a></div>
          <div class="header-navi-content"><a href="how-to-use.html">ご利用の流れ</a></div>
          <div class="header-navi-content"><a href="locations.html">店舗一覧</a></div>
          <div class="header-navi-content"><a href="news.html">NEWS</a></div>
          <div class="header-navi-content"><a href="questions.html">F&Q</a></div>
          <div class="header-navi-content"><a href="company.html">会社概要</a></div>
        </div>
        <!-- ヘッダーのSNSリンク -->
        <div class="header-sns-icons">
          <div class="header-facebook"><i class="fab fa-facebook-square"></i></div>
          <div class="header-instagram"><i class="fab fa-instagram"></i></div>
          <div class="header-line"><i class="fab fa-line"></i></div>
        </div>

      </div>


      <!-- スマホ用ヘッダー -->
      <div class="header-smartphone">
        <div class="header-logo">
          <img src="<?php echo get_theme_file_uri(); ?>/images/logo.svg" alt="GOLFERS24ロゴ">
        </div>

        <div class="header-humberger">
          <input type="checkbox" id="menu-btn-check">
          <label for="menu-btn-check" class="menubtn"><span></span></label>
          <div class="hide-menu">
            <nav>
              <div class="hide-contents">
                <div class="menu-list">
                  <a href="index.html">
                    <div class="menu">TOP</div>
                  </a>
                  <a href="how-to-use.html">
                    <div class="menu">ご利用の流れ・体験予約</div>
                  </a>
                  <a href="locations.html">
                    <div class="menu">店舗一覧</div>
                  </a>
                  <a href="news.html">
                    <div class="menu">NEWS</div>
                  </a>
                  <a href="questions.html">
                    <div class="menu">F&Q</div>
                  </a>
                  <a href="company.html">
                    <div class="menu">会社概要</div>
                  </a>
                </div>
                <div class="sm-nav-contact-us">CONTACT US</div>
                <div class="sm-nav-sns">
                  <p>FOLLOW US</p>
                  <div class="sm-nav-sns-icons">
                    <div class="sm-header-facebook"><i class="fab fa-facebook-square"></i></div>
                    <div class="sm-header-instagram"><i class="fab fa-instagram"></i></div>
                    <div class="sm-header-line"><i class="fab fa-line"></i></div>
                  </div>
                </div>
              </div>
            </nav>

          </div>
        </div>
      </div>


      <script>
        $(function() {
          $(".hide-menu").hide();
          $(".menubtn").click(function() { //メニューボタンをクリックしたとき
            $(".hide-menu").toggle(300); //0.3秒で表示したり非表示にしたりする
          });
        });
      </script>
    </header>
    <!-- トップ画像 -->
    <div class="first-view-images">
      <div class="first-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/top-img01.png);"></div>
      <div class="first-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/top-img01.png);"></div>
      <div class="first-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/top-img01.png);"></div>
      <div class="first-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/top-img01.png);"></div>
      <div class="first-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/top-img01.png);"></div>
      <div class="first-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/top-img01.png);"></div>
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <div class="contact-us"><img src="<?php echo get_template_directory_uri(); ?>/images/CONTACT US.svg" alt=""></div>
      </a>
    </div>
    <!-- トップ画像下のGOLFERS24紹介 -->
    <div class="top-introduction">
      <div class="top-introduction-text">
        <div class="top-introduction-title"><?php bloginfo('description'); ?></div>
        <div class="top-introduction-sentence">
          <p>GOLFERS24は1打席のみのあなた専用ゴルフラウンジです。</p>
          <p>空調の整った完全個室のラグジュアリーな空間で、ゆったりとリラックスしながら練習が可能。ゲストも招待いただけるので、
            ご家族やご友人、恋人はもちろんお仕事での打ち合わせなどの様々なシーンで利用いただける環境をご用意いたしました。</p>
          <p>
            会員であることに価値を感じていただきながら、ゴルフももっと身近なものへ。
            それが全く新しいインドアゴルフ場、GOLFERS24の目指す形です。
          </p>
        </div>
      </div>
      <div class="top-introduction-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top-introducton.png" alt="">
      </div>
    </div>
  </div>

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
        <div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/images/feature1.png" alt=""></div>
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
        <div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/images/feature2.png" alt=""></div>
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
        <div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/images/feature3.png" alt=""></div>
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
        <div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/images/feature4.png" alt=""></div>
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
        <div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/images/feature5.png" alt=""></div>
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
            <div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/images/feature1.png" alt=""></div>
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
            <div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/images/feature2.png" alt=""></div>
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
            <div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/images/feature3.png" alt=""></div>
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
            <div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/images/feature4.png" alt=""></div>
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
            <div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/images/feature5.png" alt=""></div>
          </div>
        </div>

        <div class="swiper-pagination"></div>

      </div>





    </div>
  </div>
  <div id="features"></div>

  <!-- ご利用の流れ -->
  <div id="third-section"></div>

  <!-- 店舗一覧 -->
  <div class="forth-section">
    <div class="forth-section-list-of-stores">
      <!-- 店舗一覧タイトル -->
      <div class="forth-section-stores-title">店舗一覧</div>
      <!-- 店舗一覧 -->
      <div class="forth-section-stores">
        <!-- 店舗1 -->
        <div class="forth-section-store">
          <div class="forth-section-store-image"><img src="<?php echo get_template_directory_uri(); ?>/images/store-image1.png" alt=""></div>
          <div class="forth-section-store-infomation">
            <div class="forth-section-store-name">福岡大濠公園店</div>
            <div class="forth-section-store-address">
              <p>〒000-0000</p>
              <p>住所が入ります。住所が入ります。住所が入ります。</p>
            </div>
          </div>
        </div>

        <!-- 店舗2 -->
        <div class="forth-section-store">
          <div class="forth-section-store-image"><img src="<?php echo get_template_directory_uri(); ?>/images/store-image1.png" alt=""></div>
          <div class="forth-section-store-infomation">
            <div class="forth-section-store-name">福岡天神店</div>
            <div class="forth-section-store-address">
              <p>〒000-0000</p>
              <p>住所が入ります。住所が入ります。住所が入ります。</p>
            </div>
          </div>
        </div>

        <!-- 店舗3 -->
        <div class="forth-section-store">
          <div class="forth-section-store-image"><img src="<?php echo get_template_directory_uri(); ?>/images/store-image1.png" alt=""></div>
          <div class="forth-section-store-infomation">
            <div class="forth-section-store-name">大阪店</div>
            <div class="forth-section-store-address">
              <p>〒000-0000</p>
              <p>住所が入ります。住所が入ります。住所が入ります。</p>
            </div>
          </div>
        </div>
      </div>
      <!-- VIEW MOREボタン -->
      <div class="forth-section-view-more">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/view-more-button.svg" alt=""></a>
      </div>
    </div>
  </div>

  <!-- NEWS -->
  <div class="fifth-section">
    <div class="fifth-section-title">NEWS</div>
    <div class="fifth-section-list-of-news">

      <!-- ニュース1 -->
      <div class="fifth-section-news">
        <div class="fifth-section-news-date">2021.00.00</div>
        <div class="fifth-section-news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>

      <!-- ニュース2 -->
      <div class="fifth-section-news">
        <div class="fifth-section-news-date">2021.00.00</div>
        <div class="fifth-section-news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
      <!-- ニュース3 -->
      <div class="fifth-section-news">
        <div class="fifth-section-news-date">2021.00.00</div>
        <div class="fifth-section-news-content">新着ニュースが入ります。新着ニュースが入ります。</div>
      </div>
    </div>
    <!-- VIEW MOREボタン -->
    <div class="fifth-section-view-more"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/view-more-button.svg" alt=""></a></div>
  </div>

  <!-- SNS -->
  <div class="sixth-section">
    <div class="sixth-section-follow-message">
      <p>各種SNS更新中！フォローして最新情報をGET</p>
    </div>
    <div class="sm-sixth-section-follow-message">
      <p>各種SNS更新中！</p>
      <p> フォローして最新情報をGET</p>
    </div>
    <div class="sixth-sns-buttons">
      <a href="#">
        <div class="sixth-sns-button">
          <i class="fab fa-facebook-square sixth-sns-icon"></i>
          <p>Facebook</p>
        </div>
      </a>
      <a href="#">
        <div class="sixth-sns-button">
          <i class="fab fa-instagram sixth-sns-icon"></i>
          <p>Instagram</p>
        </div>
      </a>
      <a href="#">
        <div class="sixth-sns-button">
          <i class="fab fa-line sixth-sns-icon"></i>
          <p>公式LINE</p>
        </div>
      </a>
    </div>
  </div>

  <!-- CONTACT US -->
  <div id="contact-us"></div>


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