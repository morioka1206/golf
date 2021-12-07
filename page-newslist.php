  <?php get_header(); ?>

  <div class="news-wrapper">
    <div class="page-title">NEWS</div>
    <div class="news-title">ニュース</div>
    <!-- ニュース全体 -->
    <div class="news-list">
      <div class="news-wrapper">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        // $category = get_the_category();
        // $args = array(
        //   'post_type' => 'news',
        //   'paged' => $paged,
        //   'posts_per_page' => -1, // 表示件数
        //   'orderby'     => 'date',
        //   'order' => 'DESC'
        // );
        // $st_query = new WP_Query($args);

        $the_query = new WP_Query(array(
          'post_type' => 'news',
          'post_status' => 'news',
          'paged' => $paged,
          'posts_per_page' => -1, // 表示件数
          'orderby'     => 'date',
          'order' => 'DESC'
        ));


        if ($the_query->have_posts()) : ?>
          <?php
          while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <!-- デスクトップ１つ１つのニュース -->
            <a href="<?php the_permalink(); ?>">
              <div class="news">
                <div class="news-date"><?php $date = SCF::get('date');
                                        echo $date; ?></div>
                <div class="news-tag"><?php $tag = SCF::get('tag');
                                      echo $tag; ?>
                </div>
                <div class="news-content"><?php $title = SCF::get('title');
                                          echo $title; ?></div>
              </div>
            </a>
          <?php endwhile; ?>
        <?php endif; ?>


        <!-- モバイル１つ１つのニュース -->
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $category = get_the_category();
        $args = array(
          'post_type' => 'news',
          'paged' => $paged,
          'posts_per_page' => 2, // 表示件数
          'orderby'     => 'date',
          'order' => 'DESC'

        );
        $st_query = new WP_Query($args);
        ?>



        <?php if ($st_query->have_posts()) : ?>
          <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>

            <a href="<?php the_permalink(); ?>">
              <div class="sm-news">
                <div class="news-tag"><?php $tag = SCF::get('tag');
                                      echo $tag; ?></div>
                <div class="news-date"><?php $date = SCF::get('date');
                                        echo $date; ?></div>

                <div class="news-content"><?php $title = SCF::get('title');
                                          echo $title; ?></div>
              </div>
            </a>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
      <!-- pagenation -->
      <div class="pagenation">
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
      <div class="pnavi">
        <?php //ページリスト表示処理
        global $wp_rewrite;
        $paginate_base = get_pagenum_link(1);
        if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
          $paginate_format = '';
          $paginate_base = add_query_arg('paged', '%#%');
        } else {
          $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
            user_trailingslashit('page/%#%/', 'paged');
          $paginate_base .= '%_%';
        }
        echo paginate_links(array(
          'base' => $paginate_base,
          'format' => $paginate_format,
          'total' => $the_query->max_num_pages,
          'mid_size' => 1,
          'current' => ($paged ? $paged : 1),
          'prev_text' => '< 前へ',
          'next_text' => '次へ >',
        ));
        ?>
      </div>

    </div>


  </div>


  <!-- CONTACT US -->

  <?php get_template_part('contact-us') ?>

  <!-- フッター -->
  <?php get_footer(); ?>