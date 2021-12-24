  <?php get_header(); ?>


  <div class="how-to-use-wrapper">
    <div class="page-title">How to use</div>
    <div class="how-title">GOLFERS24ご利用の流れ・体験予約</div>
    <div class="sm-how-title">
      <p>GOLFERS24ご利用の流れ</p>
      <p>体験予約</p>
    </div>
    <div class="how-to-use-contents">
      <!-- トライアル利用 -->
      <div class="trial-steps">
        <div class="steps-title">無料体験の流れ</div>

        <!-- 利用の流れ -->
        <div class="steps">
          <!-- それぞれの流れ -->

          <!-- STEP1 -->
          <div class="step">
            <div class="step-title">公式LINEの友達追加</div>
            .step-ex
          </div>
        </div>

      </div>
      <!-- 会員利用 -->

      <!-- プランごとの利用時間 -->
      <div class="hour-plan">
        <div class="page-title">Member Fee</div>

        <div class="sm-how-title">料金プラン</div>
        <div class="how-title">料金プラン</div>

        <!-- 利用時間の表 -->
        <div class="hour-table">
          <?php
          $args = array(
            'post_type' => 'price',
            // 全件取得、数を指定すればその数だけ取得する。
            'posts_per_page' => -1,
            'order' => 'ASC'
          );
          $st_query = new WP_Query($args);
          ?>

          <?php if ($st_query->have_posts()) : ?>
            <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
              <table>
                <tr>
                  <th>プラン</th>
                  <th class="play-hours">利用時間</th>
                  <th>価格(税込)</th>
                </tr>
                <tr>
                  <td>レギュラープラン</td>
                  <td class="allday">0時〜24時</td>
                  <td><?php echo SCF::get('regular'); ?></td>
                </tr>
                <tr class="table-premium">
                  <td class="premium-plan">プレミアムプラン</td>
                  <td class="allday">0時〜24時</td>
                  <td class="premium-discount"><?php echo SCF::get('premium'); ?></td>
                </tr>
                <tr>
                  <td>デイプラン</td>
                  <td class=day>6時〜17時</td>
                  <td><?php echo SCF::get('day'); ?></td>
                </tr>
                <tr>
                  <td>ナイトプラン</td>
                  <td class="night">17時〜24時</td>
                  <td><?php echo SCF::get('night'); ?></td>
                </tr>
                <tr>
                  <td>ミッドナイトプラン</td>
                  <td class="midnight">0時〜6時</td>
                  <td><?php echo SCF::get('midnight'); ?></td>
                </tr>
                <tr>
                  <td>入会金</td>
                  <td></td>
                  <td><?php echo SCF::get('admission'); ?></td>
                </tr>
              </table>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="sm-arrorw"></div>
      </div>
    </div>
  </div>


  <!-- CONTACT US -->
  <?php get_template_part('contact-us'); ?>

  <!-- フッター -->
  <?php get_footer(); ?>