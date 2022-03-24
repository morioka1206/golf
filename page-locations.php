  <?php get_header(); ?>

  <div class="location-wrapper">
    <!-- <div class="page-title">Locations</div> -->
    <div class="location-title">店舗一覧</div>

    <div class="area-list">
      <a href="#1" class="area-link">北海道・東北</a>
      <a href="#2" class="area-link">東京</a>
      <a href="#3" class="area-link">関東</a>
      <a href="#4" class="area-link">中部</a>
      <a href="#5" class="area-link">関西・大阪</a>
      <a href="#6" class="area-link">中国・四国</a>
      <a href="#7" class="area-link">九州・沖縄</a>
    </div>

    <div class="list-of-stores">

      <!-- 北海道・東北地方 -->
      <div class="area-name" id="1">北海道・東北</div>
      <!-- オープン -->
      <?php
      // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $the_query = new WP_Query(
        array(
          'post_type' => 'store',
          'posts_per_page' => -1,
          'meta_key' => 'priority_id',
          'orderby' => 'meta_value_num',
          'order' => 'DESC',
          'meta_query' => array(
            array(
              'relation' => 'AND',
              array(
                'key' => 'local_id',
                'value' => '1',
                'compare' => '='
              ),
              array(
                'key' => 'open',
                'value' => 'オープン',
                'compare' => '=',
              )
            ),
          ),
        ),
      );


      if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


      <a href="<?php the_permalink(); ?>">
        <div class="store">
          <div class="store-name-wrapper">
            <div class="store-name"><?php echo SCF::get('store-name'); ?>
            </div>
            <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
          </div>

        </div>
      </a>

    <?php endwhile; ?>
  <?php endif; ?>

  <!-- オープン予定 -->
  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '1',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン決定',
            'compare' => '=',
          )
        ),
      ),
    ),
  );




  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <a href="<?php the_permalink(); ?>">
    <div class="store">
      <div class="store-name-wrapper">
        <div class="store-name"><?php echo SCF::get('store-name'); ?>
        </div>
        <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
      </div>

    </div>
  </a>

  <?php endwhile; ?>
  <?php endif; ?>


  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '1',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン日未定',
            'compare' => '=',
          )
        ),
      ),
    ),
  );




  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <div class="store">
    <div class="store-name-wrapper">
      <div class="store-name"><?php echo SCF::get('store-name'); ?>
      </div>
      <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
    </div>

  </div>

  <?php endwhile; ?>
  <?php endif; ?>



  <!-- 東京 -->
  <div class="area-name" id="2">東京</div>
  <!-- オープン -->
  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '2',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン',
            'compare' => '=',
          )
        ),
      ),
    ),
  );


  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <a href="<?php the_permalink(); ?>">
    <div class="store">
      <div class="store-name-wrapper">
        <div class="store-name"><?php echo SCF::get('store-name'); ?>
        </div>
        <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
      </div>

    </div>
  </a>

  <?php endwhile; ?>
  <?php endif; ?>

  <!-- オープン予定 -->
  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '2',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン決定',
            'compare' => '=',
          )
        ),
      ),
    ),
  );




  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <a href="<?php the_permalink(); ?>">
    <div class="store">
      <div class="store-name-wrapper">
        <div class="store-name"><?php echo SCF::get('store-name'); ?>
        </div>
        <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
      </div>

    </div>
  </a>

  <?php endwhile; ?>
  <?php endif; ?>


  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '2',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン日未定',
            'compare' => '=',
          )
        ),
      ),
    ),
  );




  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <div class="store">
    <div class="store-name-wrapper">
      <div class="store-name"><?php echo SCF::get('store-name'); ?>
      </div>
      <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
    </div>

  </div>

  <?php endwhile; ?>
  <?php endif; ?>



  <!-- 関東地方 -->
  <div class="area-name" id="3">関東</div>
  <!-- オープン -->
  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '3',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン',
            'compare' => '=',
          )
        ),
      ),
    ),
  );


  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <a href="<?php the_permalink(); ?>">
    <div class="store">
      <div class="store-name-wrapper">
        <div class="store-name"><?php echo SCF::get('store-name'); ?>
        </div>
        <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
      </div>

    </div>
  </a>

  <?php endwhile; ?>
  <?php endif; ?>

  <!-- オープン予定 -->
  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '3',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン決定',
            'compare' => '=',
          )
        ),
      ),
    ),
  );




  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <a href="<?php the_permalink(); ?>">
    <div class="store">
      <div class="store-name-wrapper">
        <div class="store-name"><?php echo SCF::get('store-name'); ?>
        </div>
        <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
      </div>

    </div>
  </a>

  <?php endwhile; ?>
  <?php endif; ?>


  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '3',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン日未定',
            'compare' => '=',
          )
        ),
      ),
    ),
  );




  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <div class="store">
    <div class="store-name-wrapper">
      <div class="store-name"><?php echo SCF::get('store-name'); ?>
      </div>
      <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
    </div>

  </div>

  <?php endwhile; ?>
  <?php endif; ?>



  <!-- 中部地方 -->
  <div class="area-name" id="4">中部</div>
  <!-- オープン -->
  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '4',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン',
            'compare' => '=',
          )
        ),
      ),
    ),
  );


  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <a href="<?php the_permalink(); ?>">
    <div class="store">
      <div class="store-name-wrapper">
        <div class="store-name"><?php echo SCF::get('store-name'); ?>
        </div>
        <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
      </div>

    </div>
  </a>

  <?php endwhile; ?>
  <?php endif; ?>

  <!-- オープン予定 -->
  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '4',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン決定',
            'compare' => '=',
          )
        ),
      ),
    ),
  );




  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <a href="<?php the_permalink(); ?>">
    <div class="store">
      <div class="store-name-wrapper">
        <div class="store-name"><?php echo SCF::get('store-name'); ?>
        </div>
        <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
      </div>

    </div>
  </a>

  <?php endwhile; ?>
  <?php endif; ?>


  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '4',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン日未定',
            'compare' => '=',
          )
        ),
      ),
    ),
  );




  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <div class="store">
    <div class="store-name-wrapper">
      <div class="store-name"><?php echo SCF::get('store-name'); ?>
      </div>
      <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
    </div>

  </div>

  <?php endwhile; ?>
  <?php endif; ?>



  <!-- 関西・大阪 -->
  <div class="area-name" id="5">関西・大阪</div>
  <!-- オープン -->
  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '5',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン',
            'compare' => '=',
          )
        ),
      ),
    ),
  );


  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <a href="<?php the_permalink(); ?>">
    <div class="store">
      <div class="store-name-wrapper">
        <div class="store-name"><?php echo SCF::get('store-name'); ?>
        </div>
        <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
      </div>

    </div>
  </a>

  <?php endwhile; ?>
  <?php endif; ?>

  <!-- オープン予定 -->
  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '5',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン決定',
            'compare' => '=',
          )
        ),
      ),
    ),
  );




  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <a href="<?php the_permalink(); ?>">
    <div class="store">
      <div class="store-name-wrapper">
        <div class="store-name"><?php echo SCF::get('store-name'); ?>
        </div>
        <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
      </div>

    </div>
  </a>

  <?php endwhile; ?>
  <?php endif; ?>


  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '5',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン日未定',
            'compare' => '=',
          )
        ),
      ),
    ),
  );




  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <div class="store">
    <div class="store-name-wrapper">
      <div class="store-name"><?php echo SCF::get('store-name'); ?>
      </div>
      <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
    </div>

  </div>

  <?php endwhile; ?>
  <?php endif; ?>



  <!-- 中国・四国 -->
  <div class="area-name" id="6">中国・四国</div>
  <!-- オープン -->
  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '6',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン',
            'compare' => '=',
          )
        ),
      ),
    ),
  );


  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <a href="<?php the_permalink(); ?>">
    <div class="store">
      <div class="store-name-wrapper">
        <div class="store-name"><?php echo SCF::get('store-name'); ?>
        </div>
        <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
      </div>

    </div>
  </a>

  <?php endwhile; ?>
  <?php endif; ?>

  <!-- オープン予定 -->
  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '6',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン決定',
            'compare' => '=',
          )
        ),
      ),
    ),
  );




  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <a href="<?php the_permalink(); ?>">
    <div class="store">
      <div class="store-name-wrapper">
        <div class="store-name"><?php echo SCF::get('store-name'); ?>
        </div>
        <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
      </div>

    </div>
  </a>

  <?php endwhile; ?>
  <?php endif; ?>


  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '6',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン日未定',
            'compare' => '=',
          )
        ),
      ),
    ),
  );




  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <div class="store">
    <div class="store-name-wrapper">
      <div class="store-name"><?php echo SCF::get('store-name'); ?>
      </div>
      <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
    </div>

  </div>

  <?php endwhile; ?>
  <?php endif; ?>


  <!-- 九州・沖縄 -->
  <div class="area-name" id="7">九州・沖縄</div>

  <!-- オープン -->
  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '7',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン',
            'compare' => '=',
          )
        ),
      ),
    ),
  );


  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post();
                                    // echo
                                      // SCF::get('priority_id');
                                    ?>


  <a href="<?php the_permalink(); ?>">
    <div class="store">
      <div class="store-name-wrapper">
        <div class="store-name"><?php echo SCF::get('store-name'); ?>
        </div>
        <p class="schedule"><?php echo SCF::get('schedule'); ?></p>

      </div>

    </div>
  </a>

  <?php endwhile; ?>
  <?php endif; ?>

  <!-- オープン予定 -->
  <?php
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '7',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン決定',
            'compare' => '=',
          )
          ),
      ),
    ),
  );
  // var_dump($the_query);



  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post();
                                      ?>


  <a href="<?php the_permalink(); ?>">
    <div class="store">
      <div class="store-name-wrapper">
        <div class="store-name"><?php echo SCF::get('store-name'); ?>
        </div>
        <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
      </div>

    </div>
  </a>

  <?php endwhile; ?>
  <?php endif; ?>


  <?php
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(
    array(
      'post_type' => 'store',
      'posts_per_page' => -1,
      'meta_key' => 'priority_id',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'relation' => 'AND',
          array(
            'key' => 'local_id',
            'value' => '7',
            'compare' => '='
          ),
          array(
            'key' => 'open',
            'value' => 'オープン日未定',
            'compare' => '=',
          )
        ),
      ),
    ),
  );




  if ($the_query->have_posts()) : ?><?php
                                    while ($the_query->have_posts()) : $the_query->the_post(); ?>


  <div class="store">
    <div class="store-name-wrapper">
      <div class="store-name"><?php echo SCF::get('store-name'); ?>
      </div>
      <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
    </div>

  </div>

  <?php endwhile; ?>
  <?php endif; ?>






    </div>
    <!-- CONTACT US -->
    <div id="contact-us"></div>

    <!-- フッター -->
    <!-- <script>
      var jscrollOption = {
        loadingHtml: '', // 記事読み込み中の表示、画像等をHTML要素で指定することも可能
        autoTrigger: true, // 次の表示コンテンツの読み込みを自動( true )か、ボタンクリック( false )にする
        padding: 300, // autoTriggerがtrueの場合、指定したコンテンツの下から何pxで読み込むか指定
        nextSelector: 'a.next', // 次に読み込むコンテンツのURLのあるa要素を指定
        contentSelector: '.jscroll' // 読み込む範囲を指定、指定がなければページごと丸っと読み込む
      }
      $('.jscroll').jscroll(jscrollOption);
    </script> -->
  </div>
  <?php get_footer(); ?>