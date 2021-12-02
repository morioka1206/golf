<?php get_header(); ?>


<div class="how-to-use-wrapper">
  <div class="page-title">How to use</div>
  <div class="how-title">GOLFERS24ご利用の流れ・体験予約</div>
  <div class="how-to-use-contents">
    <!-- トライアル利用 -->
    <div class="trial-use">
      <div class="trial-title">体験予約</div>
      <div class="trial-steps">

        <?php
        $args = array(
          'post_type' => 'how-to-use-trial1',
          // 全件取得、数を指定すればその数だけ取得する。
          'posts_per_page' => 1,
          'order' => 'ASC'
        );
        $st_query = new WP_Query($args);
        ?>

        <?php if ($st_query->have_posts()) : ?>
          <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>



            <!-- ステップ1 -->
            <div class="trial-step">
              <div class="step-number"><?php echo SCF::get('step'); ?></div>
              <div class="step-title"><?php echo SCF::get('title'); ?></div>
              <div class="step-image"><?php $image = SCF::get('image');
                                      echo wp_get_attachment_image($image, 'large'); ?></div>
              <div class="step-sentence"><?php echo SCF::get('text'); ?></div>
              <div class="step-line-friends"><a href="https://lin.ee/7Ii8MCV"><img src="<?php echo get_theme_file_uri(); ?>/images/公式ラインはこちらから.svg" alt=""></a></div>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>


        <?php
        $args = array(
          'post_type' => 'how-to-use-trial',
          // 全件取得、数を指定すればその数だけ取得する。
          'posts_per_page' => -1,
          'order' => 'ASC'
        );
        $st_query = new WP_Query($args);
        ?>

        <?php if ($st_query->have_posts()) : ?>
          <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>



            <!-- ステップ5 -->
            <div class="trial-step">
              <div class="step-number"><?php echo SCF::get('step'); ?></div>
              <div class="step-title"><?php echo SCF::get('title'); ?></div>
              <div class="step-image"><?php $image = SCF::get('image');
                                      echo wp_get_attachment_image($image, 'large'); ?></div>
              <div class="step-sentence"><?php echo SCF::get('text'); ?></div>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>



        <!-- ステップ6 -->
        <div class="trial-step">
          <div class="no-line-user">
            <div class="no-line-title">LINEをお持ちでない方</div>
            <div class="no-line-sentence">
              <p>LINEをお持ちでない方は</p>
              <p>こちらより予約サイトへ</p>
              <p>アクセスしてください。</p>
            </div>
            <a href="https://golfers24.hacomono.jp/">
              <div class="reserve-link">
                <p>予約サイトはこちらから</p>
              </div>
            </a>
          </div>
        </div>


      </div>
    </div>

    <!-- 会員利用 -->
    <div class="member-use">
      <div class="member-use-title">会員利用</div>
      <div class="member-use-steps">

        <?php
        $args = array(
          'post_type' => 'how-to-use-member',
          // 全件取得、数を指定すればその数だけ取得する。
          'posts_per_page' => -1,
          'order' => 'ASC'
        );
        $st_query = new WP_Query($args);
        ?>

        <?php if ($st_query->have_posts()) : ?>
          <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
            <!-- ステップ1 -->
            <div class="member-step">
              <div class="member-number"><?php echo SCF::get('step'); ?></div>
              <div class="member-title"><?php echo SCF::get('title'); ?></div>
              <div class="member-image"><?php $image = SCF::get('image');
                                        echo wp_get_attachment_image($image, 'large'); ?></div>
              <div class="member-sentence"><?php echo SCF::get('text'); ?></div>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>
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
            <td>33,000円</td>
          </tr>
          <tr class="table-premium">
            <td class="premium-plan">プレミアムプラン</td>
            <td class="allday">0時〜24時</td>
            <td class="premium-discount">26,400円</td>
          </tr>
          <tr>
            <td>デイプラン</td>
            <td class=day>6時〜17時</td>
            <td>24,200円</td>
          </tr>
          <tr>
            <td>ナイトプラン</td>
            <td class="night">17時〜24時</td>
            <td>22,000円</td>
          </tr>
          <tr>
            <td>ミッドナイトプラン</td>
            <td class="midnight">0時〜6時</td>
            <td>19,800円</td>
          </tr>
          <tr>
            <td>入会金</td>
            <td></td>
            <td>11,000円</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>


<!-- CONTACT US -->
<div id="contact-us"></div>
<?php get_template_part('contact-us'); ?>

<!-- フッター -->
<?php get_footer(); ?>

</body>

</html>