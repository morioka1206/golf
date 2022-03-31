<!-- 店舗一覧ページ -->

<div class="location-wrapper">
  <!-- <div class="page-title">Locations</div> -->
  <div class="location-title">店舗一覧</div>

  <div class="list-of-stores">

    <!-- 北海道・東北地方 -->
    <div class="area-name" id="1">北海道・東北</div>
      <!-- オープン -->
      <div class="hide-store-list">
        <div class="each-store-list">
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
      
      
          <!-- <a href="<?php the_permalink(); ?>"> -->
            <div class="store">
              <div class="store-name-wrapper">
                <div class="store-name"><?php echo SCF::get('store-name'); ?>
                </div>
                <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
              </div>
      
            </div>
          <!-- </a> -->
      
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
      
      
      <!-- <a href="<?php the_permalink(); ?>"> -->
        <div class="store">
          <div class="store-name-wrapper">
            <div class="store-name"><?php echo SCF::get('store-name'); ?>
            </div>
            <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
          </div>
      
        </div>
      <!-- </a> -->
      
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
        </div>
      </div>




    <!-- 東京 -->
    <div class="area-name" id="2">東京</div>
    <div class="hide-store-list">
      <div class="each-store-list">
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
        
        
        <!-- <a href="<?php the_permalink(); ?>"> -->
          <div class="store">
            <div class="store-name-wrapper">
              <div class="store-name"><?php echo SCF::get('store-name'); ?>
              </div>
              <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
            </div>
        
          </div>
        <!-- </a> -->
        
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
        
        
        <!-- <a href="<?php the_permalink(); ?>"> -->
          <div class="store">
            <div class="store-name-wrapper">
              <div class="store-name"><?php echo SCF::get('store-name'); ?>
              </div>
              <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
            </div>
        
          </div>
        <!-- </a> -->
        
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
      
      </div> 
    </div>


    <!-- 関東地方 -->
    <div class="area-name" id="3">関東</div>
    <div class="hide-store-list">
      <div class="each-store-list">
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
        
        
        <!-- <a href="<?php the_permalink(); ?>"> -->
          <div class="store">
            <div class="store-name-wrapper">
              <div class="store-name"><?php echo SCF::get('store-name'); ?>
              </div>
              <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
            </div>
        
          </div>
        <!-- </a> -->
        
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
        
        
        <!-- <a href="<?php the_permalink(); ?>"> -->
          <div class="store">
            <div class="store-name-wrapper">
              <div class="store-name"><?php echo SCF::get('store-name'); ?>
              </div>
              <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
            </div>
        
          </div>
        <!-- </a> -->
        
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
      </div>
    </div>



    <!-- 中部地方 -->
    <div class="area-name" id="4">中部</div>
    <div class="hide-store-list">
      <div class="each-store-list">
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
        
        
        <!-- <a href="<?php the_permalink(); ?>"> -->
          <div class="store">
            <div class="store-name-wrapper">
              <div class="store-name"><?php echo SCF::get('store-name'); ?>
              </div>
              <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
            </div>
        
          </div>
        <!-- </a> -->
        
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
        
        
        <!-- <a href="<?php the_permalink(); ?>"> -->
          <div class="store">
            <div class="store-name-wrapper">
              <div class="store-name"><?php echo SCF::get('store-name'); ?>
              </div>
              <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
            </div>
        
          </div>
        <!-- </a> -->
        
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
      </div>
    </div>



    <!-- 関西・大阪 -->
    <div class="area-name" id="5">関西・大阪</div>
    <div class="hide-store-list">
      <div class="each-store-list">
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
        
        
        <!-- <a href="<?php the_permalink(); ?>"> -->
          <div class="store">
            <div class="store-name-wrapper">
              <div class="store-name"><?php echo SCF::get('store-name'); ?>
              </div>
              <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
            </div>
        
          </div>
        <!-- </a> -->
        
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
        
        
        <!-- <a href="<?php the_permalink(); ?>"> -->
          <div class="store">
            <div class="store-name-wrapper">
              <div class="store-name"><?php echo SCF::get('store-name'); ?>
              </div>
              <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
            </div>
        
          </div>
        <!-- </a> -->
        
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
      </div>
    </div>



    <!-- 中国・四国 -->
    <div class="area-name" id="6">中国・四国</div>
    <!-- オープン -->
    <div class="hide-store-list">
      <div class="each-store-list">
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
        
        
        <!-- <a href="<?php the_permalink(); ?>"> -->
          <div class="store">
            <div class="store-name-wrapper">
              <div class="store-name"><?php echo SCF::get('store-name'); ?>
              </div>
              <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
            </div>
        
          </div>
        <!-- </a> -->
        
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
        
        
        <!-- <a href="<?php the_permalink(); ?>"> -->
          <div class="store">
            <div class="store-name-wrapper">
              <div class="store-name"><?php echo SCF::get('store-name'); ?>
              </div>
              <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
            </div>
        
          </div>
        <!-- </a> -->
        
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
      </div>
    </div>


    <!-- 九州・沖縄 -->
    <div class="area-name" id="7">九州・沖縄</div>

    <div class="hide-store-list">
      <div class="each-store-list">
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
        
        
        <!-- <a href="<?php the_permalink(); ?>"> -->
          <div class="store">
            <div class="store-name-wrapper">
              <div class="store-name"><?php echo SCF::get('store-name'); ?>
              </div>
              <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
        
            </div>
        
          </div>
        <!-- </a> -->
        
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
        
        
        <!-- <a href="<?php the_permalink(); ?>"> -->
          <div class="store">
            <div class="store-name-wrapper">
              <div class="store-name"><?php echo SCF::get('store-name'); ?>
              </div>
              <p class="schedule"><?php echo SCF::get('schedule'); ?></p>
            </div>
        
          </div>
        <!-- </a> -->
        
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
    </div>






  </div>
</div>

<script>
  $(function() {
    //.accordion_oneの中の.accordion_headerがクリックされたら
    $('.list-of-stores .area-name').click(function() {
      //クリックされた.accordion_oneの中の.accordion_headerに隣接する.accordion_innerが開いたり閉じたりする。
      $(this).next('.hide-store-list').slideToggle();
      $(this).toggleClass("open");
    });
  });
</script>