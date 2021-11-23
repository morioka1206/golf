<?php get_header(); ?>

<div class="top-section">
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
<?php get_template_part('features') ?>

<!-- ご利用の流れ -->
<div id="third-section"></div>
<?php get_template_part('third-section') ?>


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
<?php get_template_part('contact-us') ?>

<?php get_footer(); ?>