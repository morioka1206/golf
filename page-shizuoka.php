  <?php get_header(); ?>

  <div class="location-wrapper">
    <div class="page-title">Locations</div>
    <div class="location-select">
      <p>地域選択</p>
      <select onChange="location.href=value;">
        <option value="<?php echo esc_url(home_url('locations')); ?>">全国</option>
        <option value="<?php echo esc_url(home_url('hokkaido')); ?>">北海道</option>
        <option value="<?php echo esc_url(home_url('aomori')); ?>">青森県</option>
        <option value="<?php echo esc_url(home_url('iwate')); ?>">岩手県</option>
        <option value="<?php echo esc_url(home_url('miyagi')); ?>">宮城県</option>
        <option value="<?php echo esc_url(home_url('akita')); ?>">秋田県</option>
        <option value="<?php echo esc_url(home_url('yamagata')); ?>">山形県</option>
        <option value="<?php echo esc_url(home_url('fukushima')); ?>">福島県</option>
        <option value="<?php echo esc_url(home_url('ibaraki')); ?>">茨城県</option>
        <option value="<?php echo esc_url(home_url('tochigi')); ?>">栃木県</option>
        <option value="<?php echo esc_url(home_url('gunma')); ?>">群馬県</option>
        <option value="<?php echo esc_url(home_url('saitama')); ?>">埼玉県</option>
        <option value="<?php echo esc_url(home_url('chiba')); ?>">千葉県</option>
        <option value="<?php echo esc_url(home_url('tokyo')); ?>">東京都</option>
        <option value="<?php echo esc_url(home_url('kanagawa')); ?>">神奈川県</option>
        <option value="<?php echo esc_url(home_url('niigata')); ?>">新潟県</option>
        <option value="<?php echo esc_url(home_url('toyama')); ?>">富山県</option>
        <option value="<?php echo esc_url(home_url('ishikawa')); ?>">石川県</option>
        <option value="<?php echo esc_url(home_url('fukui')); ?>">福井県</option>
        <option value="<?php echo esc_url(home_url('yamanashi')); ?>">山梨県</option>
        <option value="<?php echo esc_url(home_url('nagano')); ?>">長野県</option>
        <option value="<?php echo esc_url(home_url('gifu')); ?>">岐阜県</option>
        <option value="<?php echo esc_url(home_url('shizuoka')); ?>" selected>静岡県</option>
        <option value="<?php echo esc_url(home_url('aichi')); ?>">愛知県</option>
        <option value="<?php echo esc_url(home_url('mie')); ?>">三重県</option>
        <option value="<?php echo esc_url(home_url('shiga')); ?>">滋賀県</option>
        <option value="<?php echo esc_url(home_url('kyoto')); ?>">京都府</option>
        <option value="<?php echo esc_url(home_url('osaka')); ?>">大阪府</option>
        <option value="<?php echo esc_url(home_url('hyogo')); ?>">兵庫県</option>
        <option value="<?php echo esc_url(home_url('nara')); ?>">奈良県</option>
        <option value="<?php echo esc_url(home_url('wakayama')); ?>">和歌山県</option>
        <option value="<?php echo esc_url(home_url('tottori')); ?>">鳥取県</option>
        <option value="<?php echo esc_url(home_url('shimane')); ?>">島根県</option>
        <option value="<?php echo esc_url(home_url('okayama')); ?>">岡山県</option>
        <option value="<?php echo esc_url(home_url('hiroshima')); ?>">広島県</option>
        <option value="<?php echo esc_url(home_url('yamaguchi')); ?>">山口県</option>
        <option value="<?php echo esc_url(home_url('tokushima')); ?>">徳島県</option>
        <option value="<?php echo esc_url(home_url('kagawa')); ?>">香川県</option>
        <option value="<?php echo esc_url(home_url('ehime')); ?>">愛媛県</option>
        <option value="<?php echo esc_url(home_url('kouchi')); ?>">高知県</option>
        <option value="<?php echo esc_url(home_url('fukuoka')); ?>">福岡県</option>
        <option value="<?php echo esc_url(home_url('saga')); ?>">佐賀県</option>
        <option value="<?php echo esc_url(home_url('nagasaki')); ?>">長崎県</option>
        <option value="<?php echo esc_url(home_url('kumamoto')); ?>">熊本県</option>
        <option value="<?php echo esc_url(home_url('ooita')); ?>">大分県</option>
        <option value="<?php echo esc_url(home_url('miyazaki')); ?>">宮崎県</option>
        <option value="<?php echo esc_url(home_url('kagoshima')); ?>">鹿児島県</option>
        <option value="<?php echo esc_url(home_url('okinawa')); ?>">沖縄県</option>
      </select>
    </div>
    <div class="location-title">店舗</div>
    <div class="jscroll-wrapper">
      <div class="jscroll">
        <div class="list-of-stores">

          <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $the_query = new WP_Query(array(
            'post_status' => 'store',
            'post_type' => 'store',
            'meta_query' => array(array(
              'key' => 'address',
              'value' => '静岡県',
              'compare' => 'LIKE'
            )),
            'paged' => $paged,
            'posts_per_page' => -1, // 表示件数
            // 'orderby'     => 'date',
            'order' => 'ASC'
          ));


          if ($the_query->have_posts()) : ?><?php
                                            while ($the_query->have_posts()) : $the_query->the_post(); ?>

          <!-- 店舗1 -->
          <div class="store">
            <a href="<?php the_permalink(); ?>">
              <div class="store-image">
                <?php
                                              $image = SCF::get('image');
                                              echo wp_get_attachment_image($image, 'medium');
                ?>
              </div>
            </a>
            <div class="store-name"><?php echo SCF::get('store-name'); ?></div>
            <div class="store-address">
              <p><?php echo SCF::get('postal-code'); ?></p>
              <p><?php echo SCF::get('address'); ?></p>
            </div>
            <div class="store-link"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_theme_file_uri(); ?>/images/店舗ページへ.svg" alt=""></a></div>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>
      <!-- pagenation -->
      <div class="pagenation" style="display: none">
        <?php
        if ($the_query->max_num_pages > 1) {
          echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%/',
            'current' => max(1, $paged),
            'mid_size' => 1,
            'total' => $the_query->max_num_pages
          ));
        }
        wp_reset_postdata(); ?>
      </div><!-- /pagenation -->
        </div>
      </div>
    </div>
    <!-- CONTACT US -->
    <div id="contact-us"></div>

    <!-- フッター -->
    <script>
      var jscrollOption = {
        loadingHtml: '', // 記事読み込み中の表示、画像等をHTML要素で指定することも可能
        autoTrigger: true, // 次の表示コンテンツの読み込みを自動( true )か、ボタンクリック( false )にする
        padding: 300, // autoTriggerがtrueの場合、指定したコンテンツの下から何pxで読み込むか指定
        nextSelector: 'a.next', // 次に読み込むコンテンツのURLのあるa要素を指定
        contentSelector: '.jscroll' // 読み込む範囲を指定、指定がなければページごと丸っと読み込む
      }
      $('.jscroll').jscroll(jscrollOption);
    </script>
  </div>
  <?php get_footer(); ?>