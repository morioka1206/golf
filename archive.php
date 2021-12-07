  <?php get_header(); ?>

  <div class="location-wrapper">
    <div class="page-title">Locations</div>
    <div class="location-title">店舗一覧</div>
    <div class="jscroll">
      <div class="list-of-stores">
        <?php
        $args = array(
          'post_type' => 'store',
          'order' => 'ASC',
          'posts_per_page' => -1,
        );
        $st_query = new WP_Query($args);
        ?>

        <?php if ($st_query->have_posts()) : ?>
          <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>

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
      <div class="pagenation">
        <?php the_posts_pagination(
          array(
            'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
            'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
            'prev_text'     => __('前へ'), // 「前へ」リンクのテキスト
            'next_text'     => __('次へ'), // 「次へ」リンクのテキスト
            'type'          => 'list', // 戻り値の指定 (plain/list)
          )
        ); ?>
      </div>
    </div>
  </div>

  <!-- CONTACT US -->
  <div id="contact-us"></div>

  <!-- フッター -->
  <script>
    var jscrollOption = {
      loadingHtml: '読み込み中', // 記事読み込み中の表示、画像等をHTML要素で指定することも可能
      autoTrigger: true, // 次の表示コンテンツの読み込みを自動( true )か、ボタンクリック( false )にする
      padding: 20, // autoTriggerがtrueの場合、指定したコンテンツの下から何pxで読み込むか指定
      nextSelector: 'a.jscroll-next', // 次に読み込むコンテンツのURLのあるa要素を指定
      contentSelector: '.jscroll' // 読み込む範囲を指定、指定がなければページごと丸っと読み込む
    }
    $('.jscroll').jscroll(jscrollOption);
  </script>

  <?php get_footer(); ?>