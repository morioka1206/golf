  <?php get_header(); ?>

  <div class="location-wrapper">
    <div class="page-title">Locations</div>
    <div class="location-title">店舗一覧</div>
    <div class="jscroll">
      <div class="list-of-stores">

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $the_query = new WP_Query(array(
          'post_status' => 'store',
          'post_type' => 'store',
          'paged' => $paged,
          'posts_per_page' => 3, // 表示件数
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
      </div>
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

  <?php get_footer(); ?>