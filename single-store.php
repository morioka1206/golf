  <?php get_header(); ?>

  <div class="store-details-wrapper">

    <?php
    while (have_posts()) :
      the_post();
    ?>
      <?php
      $args = array(
        'post_type' => 'store',
        'posts_per_page' => -1,
      );
      $st_query = new WP_Query($args);
      ?>


      <div class="store-details-top-image">
        <?php $top_image = SCF::get('top-image');
        echo wp_get_attachment_image($top_image, 'large');
        ?>
      </div>

      <!-- 店舗詳細情報 -->
      <div class="store-detail-introduction">
        <div class="store-introduction-text">
          <div class="store-introduction-name"><?php echo SCF::get('store-name') ?></div>
          <div class="store-introduction-sentence">
            <p><?php echo SCF::get('introduction') ?></p>
          </div>
        </div>

        <div class="store-detail-links">
          <a href="https://lin.ee/7Ii8MCV" class="how-to-line-link" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/images/how-to-use-line.svg" alt=""></a>
          <a href="https://golfers24.hacomono.jp/" class="how-to-webreserve-link" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/images/how-to-use-webreserve.svg" alt=""></a>
        </div>

        <div class="store-detail-images">
          <div class="store-detail-image"><?php $small_image = SCF::get('small-image1');
                                          echo wp_get_attachment_image($small_image, 'small'); ?></div>
          <div class="store-detail-image"><?php $small_image = SCF::get('small-image2');
                                          echo wp_get_attachment_image($small_image, 'small'); ?></div>
          <div class="store-detail-image"><?php $small_image = SCF::get('small-image3');
                                          echo wp_get_attachment_image($small_image, 'small'); ?></div>
        </div>
      </div>


      <!-- Googleマップ -->
      <div class="google-map">
        <?php echo SCF::get('google_map'); ?>
      </div>

      <!-- デスクトップ用店舗情報 -->
      <div class="store-detail-information-wrapper">
        <div class="store-detail-information">
          <!-- 店舗名 -->
          <div class="store-detail-name"><?php echo SCF::get('store-name') ?></div>
          <!-- 店舗住所 -->
          <div class="store-detail-address">
            <div class="store-detail-address-title">住所</div>
            <div class="store-detail-address-content">
              <p><?php echo SCF::get('postal-code') ?></p>
              <p><?php echo SCF::get('address') ?></p>
            </div>
          </div>
          <!-- 店舗電話番号 -->
          <div class="store-detail-tel">
            <div class="store-detail-tel-title">TEL</div>
            <div class="store-detail-tel-content"><?php echo SCF::get('tel') ?></div>
          </div>
          <!-- 店舗メールアドレス -->
          <div class="store-detail-mail">
            <div class="store-detail-mail-title">Mail</div>
            <div class="store-detail-mail-content"><?php echo SCF::get('email') ?></div>
          </div>
          <!-- 店舗営業時間 -->
          <div class="store-detail-hours">
            <div class="store-deail-hours-title">営業時間</div>
            <div class="store-detail-hours-content"><?php echo SCF::get('open-hour') ?></div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>

  <!-- スマホ用店舗情報 -->
  <div class="sm-store-details-wrapper">
    <?php
    while (have_posts()) :
      the_post();
    ?>
      <?php
      $args = array(
        'post_type' => 'store',
        'posts_per_page' => -1,
      );
      $st_query = new WP_Query($args);
      ?>

      <div class="store-introduction-name"><?php echo SCF::get('store-name') ?></div>

      <div class="store-details-top-image">
        <?php $top_image = SCF::get('top-image');
        echo wp_get_attachment_image($top_image, 'large');
        ?>
      </div>


      <!-- 店舗詳細情報 -->
      <div class="store-detail-introduction">
        <div class="store-introduction-sentence">
          <p><?php echo SCF::get('introduction') ?></p>
        </div>

        <div class="store-detail-images">
          <div class="swiper-wrapper">
            <div class="store-detail-image swiper-slide"><?php $small_image = SCF::get('small-image1');
                                                          echo wp_get_attachment_image($small_image, 'small'); ?></div>
            <div class="store-detail-image swiper-slide"><?php $small_image = SCF::get('small-image2');
                                                          echo wp_get_attachment_image($small_image, 'small'); ?></div>
            <div class="store-detail-image swiper-slide"><?php $small_image = SCF::get('small-image3');
                                                          echo wp_get_attachment_image($small_image, 'small'); ?></div>
          </div>
        </div>
      </div>


      <!-- Googleマップ -->
      <div class="google-map">
        <?php echo SCF::get('google_map'); ?>
      </div>

      <!-- 店舗詳細情報 -->
      <div class="store-detail-information">
        <div class="store-detail-name"><?php echo SCF::get('store-name') ?></div>
        <!-- 店舗住所 -->
        <div class="store-detail-address">
          <div class="store-detail-address-title">住所</div>
          <div class="store-detail-address-content">
            <p><?php echo SCF::get('postal-code') ?></p>
            <p><?php echo SCF::get('address') ?></p>
          </div>
        </div>
        <!-- 店舗電話番号 -->
        <div class="store-detail-tel">
          <div class="store-detail-tel-title">TEL</div>
          <div class="store-detail-tel-content"><a href="tel:<?php echo SCF::get('tel') ?>"><?php echo SCF::get('tel') ?></a></div>
        </div>
        <!-- 店舗メールアドレス -->
        <div class="store-detail-mail">
          <div class="store-detail-mail-title">Mail</div>
          <div class="store-detail-mail-content"><a href="mailto:<?php echo SCF::get('email') ?>"><?php echo SCF::get('email') ?></a></div>
        </div>
        <!-- 店舗営業時間 -->
        <div class="store-detail-hours">
          <div class="store-deail-hours-title">営業時間</div>
          <div class="store-detail-hours-content"><?php echo SCF::get('open-hour') ?></div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>

  <!-- プランごとの利用時間 -->
  <div class="store-table">
    <div class="hour-plan">
      <div class="page-title">Member Fee</div>
      <div class="how-title">料金プラン</div>

      <!-- 利用時間の表 -->
      <div class="hour-table">
        <?php
        $args = array(
          'post_type' => 'store',
          // 全件取得、数を指定すればその数だけ取得する。
          'posts_per_page' => 1,
          'order' => 'ASC'
        );
        $st_query = new WP_Query($args);
        ?>

        <?php if ($st_query->have_posts()) : ?>
          <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
            <div class="plan-title">通常プラン</div>
            <table>
              <tr>
                <th>プラン</th>
                <th class="play-hours">利用時間</th>
                <th>月会費(税込)</th>
              </tr>
              <tr>
                <td>レギュラー</td>
                <td class="allday">24h</td>
                <td><?php echo SCF::get('regular-plan'); ?></td>
              </tr>
              <tr class="table-premium">
                <td class="premium-plan">レギュラー年割</td>
                <td class="allday">24h</td>
                <td class="premium-discount"><?php echo SCF::get('regular-plus'); ?></td>
              </tr>
              <tr>
                <td>VIP（２コマ予約可能）</td>
                <td class=allday>24h</td>
                <td><?php echo SCF::get('vip'); ?></td>
              </tr>
              <tr>
                <td>デイタイム</td>
                <td class=day>平日6:00-16:30</td>
                <td><?php echo SCF::get('weekday'); ?></td>
              </tr>
              <tr>
                <td>ミッドナイト</td>
                <td class="midnight">0:00-6:00</td>
                <td><?php echo SCF::get('midnight'); ?></td>
              </tr>
              <tr>
                <td>モーニング</td>
                <td class="morning">3:00-9:00</td>
                <td><?php echo SCF::get('morning'); ?></td>
              </tr>
              <tr>
                <td>ナイト＆ウィークエンド</td>
                <td class="weekday">平日16:30-0:00<p class="night-allday">土日祝24h</p>
                </td>
                <td><?php echo SCF::get('night-holiday'); ?></td>
              </tr>
              <tr>
                <td>入会金（入会時のみ）</td>
                <td></td>
                <td><?php echo SCF::get('admission'); ?></td>
              </tr>
            </table>
            <!-- <div class="sm-arrorw"></div> -->
            <div class="table-caution">
              <?php echo SCF::get('caution-regular'); ?>
            </div>
            <div class="mobile-table-caution">
              <?php echo SCF::get('mobile-caution-regular'); ?>
            </div>

            <div class="plan-title">回数プラン</div>
            <table class="times-table">
              <tr>
                <th>プラン</th>
                <th class="play-hours">利用時間</th>
                <th>月会費(税込)</th>
              </tr>
              <tr>
                <td>月1回</td>
                <td class="allday">24h</td>
                <td><?php echo SCF::get('oneday'); ?></td>
              </tr>
              <tr>
                <td>月2回</td>
                <td class="allday">24h</td>
                <td><?php echo SCF::get('twoday'); ?></td>
              </tr>
              <tr>
                <td>月3回</td>
                <td class="allday">24h</td>
                <td><?php echo SCF::get('threeday'); ?></td>
              </tr>
              <tr>
                <td>月4回</td>
                <td class="allday">24h</td>
                <td><?php echo SCF::get('fourday'); ?></td>
              </tr>
              <tr>
                <td>入会金（入会時のみ）</td>
                <td></td>
                <td><?php echo SCF::get('admission'); ?></td>
              </tr>
            </table>


            <div class="table-caution">
              <?php echo SCF::get('caution-times'); ?>
            </div>
            <div class="mobile-table-caution">
              <?php echo SCF::get('mobile-caution-times'); ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </div>






  <!-- ご利用の流れ -->
  <?php get_template_part('third-section') ?>


  <!-- GOLFERS24の特徴 -->
  <?php get_template_part('features') ?>



  <!-- CONTACT US -->
  <?php get_template_part('contact-us') ?>



  <!-- フッター -->
  <?php get_footer(); ?>