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


  <div class="how-to-use-wrapper">
    <div class="page-title">How to use</div>
    <div class="how-title">GOLFERS24ご利用の流れ</div>
    <div class="how-to-use-contents">
      <!-- トライアル利用 -->
      <div class="trial-use">
        <div class="trial-title">トライアル利用</div>
        <div class="trial-steps">
          <!-- ステップ1 -->
          <div class="trial-step">
            <div class="step-number">STEP1</div>
            <div class="step-title">公式LINEの友達追加</div>
            <div class="step-image"><img src="<?php echo get_theme_file_uri(); ?>/images/trial-step1.png" alt=""></div>
            <div class="step-sentence">GOLFERS24公式LINEを友達追加してください。
              公式LINEにてトライアル予約をご案内させていただきます。</div>
            <div class="step-line-friends"><img src="<?php echo get_theme_file_uri(); ?>/images/公式ラインはこちらから.svg" alt=""></div>
          </div>

          <!-- ステップ2 -->
          <div class="trial-step">
            <div class="step-number">STEP2</div>
            <div class="step-title">トライアル予約</div>
            <div class="step-image"><img src="<?php echo get_theme_file_uri(); ?>/images/trial-step2.png" alt=""></div>
            <div class="step-sentence">
              <p>公式LINEのトーク画面より予約サイトにアクセスしてください。</p>
              <p>若葉マークが付いている枠であればトライアル予約が可能です。</p>
            </div>
          </div>

          <!-- ステップ3 -->
          <div class="trial-step">
            <div class="step-number">STEP3</div>
            <div class="step-title">ご来店</div>
            <div class="step-image"><img src="<?php echo get_theme_file_uri(); ?>/images/trial-step3.png" alt=""></div>
            <div class="step-sentence">ご予約日の予約時間になりましたら直接店舗へとお越しください。</div>
          </div>

          <!-- ステップ4 -->
          <div class="trial-step">
            <div class="step-number">STEP4</div>
            <div class="step-title">トライアル体験</div>
            <div class="step-image"><img src="<?php echo get_theme_file_uri(); ?>/images/trial-step4.png" alt=""></div>
            <div class="step-sentence">スタッフよりマシン使用方法をご案内後、思う存分お試しいただけます。</div>
          </div>

          <!-- ステップ5 -->
          <div class="trial-step">
            <div class="step-number">STEP5</div>
            <div class="step-title">入会ご案内</div>
            <div class="step-image"><img src="<?php echo get_theme_file_uri(); ?>/images/trial-step5.png" alt=""></div>
            <div class="step-sentence">入会をご希望の方はご案内させていただきます。
              複数プランがございますので、ご自身のスタイルに合わせて最適なプランをご提案させていただきます。</div>
          </div>

          <!-- ステップ6 -->
          <div class="trial-step">
            <div class="no-line-user">
              <div class="no-line-title">LINEをお持ちでない方</div>
              <div class="no-line-sentence">
                <p>LINEをお持ちでない方は</p>
                <p>こちらより予約サイトへ</p>
                <p>アクセスしてください。</p>
              </div>
              <div class="reserve-link">
                <p>予約サイトはこちらから</p>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- 会員利用 -->
      <div class="member-use">
        <div class="member-use-title">会員利用</div>
        <div class="member-use-steps">
          <!-- ステップ1 -->
          <div class="member-step">
            <div class="member-number">STEP1</div>
            <div class="member-title">システム上で予約</div>
            <div class="member-image"><img src="<?php echo get_theme_file_uri(); ?>/images/member-step1.png" alt=""></div>
            <div class="member-sentence">専用のシステムにてお好きな日時でご予約いただけます。
              完全オンラインの即時予約なので、ストレスなくスムーズにご予約いただけます。</div>
          </div>
          <!-- ステップ2 -->
          <div class="member-step">
            <div class="member-number">STEP2</div>
            <div class="member-title">ご来店</div>
            <div class="member-image"><img src="<?php echo get_theme_file_uri(); ?>/images/trial-step3.png" alt=""></div>
            <div class="member-sentence">ご予約時にスマホ上で自動発行される電子錠を店舗扉にかざし解錠、入館いただけます。
              完全個室の自分専用練習場で、思う存分練習を楽しんでください。</div>
          </div>
          <!-- ステップ3 -->
          <div class="member-step">
            <div class="member-number">STEP3</div>
            <div class="member-title">システム上で予約</div>
            <div class="member-image"><img src="<?php echo get_theme_file_uri(); ?>/images/trial-step5.png" alt=""></div>
            <div class="member-sentence">ゴミは各自お持ち帰りいただき、ご退店となります。</div>
          </div>
        </div>
      </div>

      <!-- プランごとの利用時間 -->
      <div class="hour-plan">
        <div class="page-title">Member Fee</div>
        <div class="how-title">料金プラン</div>

        <!-- 利用時間の表 -->
        <div class="hour-table">
          <table>
            <tr>
              <th>プラン</th>
              <th class="play-hours">利用時間</th>
              <th>価格(税込)</th>
            </tr>
            <tr>
              <td>レギュラープラン</td>
              <td class="allday">0時〜24時</td>
              <td>30,000円</td>
            </tr>
            <tr class="table-premium">
              <td class="premium-plan">プレミアムプラン</td>
              <td class="allday">0時〜24時</td>
              <td class="premium-discount">24,000円</td>
            </tr>
            <tr>
              <td>デイプラン</td>
              <td class=day>6時〜17時</td>
              <td>22,000円</td>
            </tr>
            <tr>
              <td>ナイトプラン</td>
              <td class="night">17時〜24時</td>
              <td>20,000円</td>
            </tr>
            <tr>
              <td>ミッドナイトプラン</td>
              <td class="midnight">0時〜6時</td>
              <td>18,000円</td>
            </tr>
            <tr>
              <td>入会金</td>
              <td></td>
              <td>10,000円</td>
            </tr>
          </table>
        </div>
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