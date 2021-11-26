<div class="second-section">
  <div class="second-section-title">
    GOLFERS24の特徴
  </div>

  <!-- デスクトップ用交互に紹介するGOLFERS24の特徴 -->
  <div class="second-section-features">

    <?php
    $args = array(
      'post_type' => 'feature',
      // 全件取得、数を指定すればその数だけ取得する。
      'posts_per_page' => -1,
      'order' => 'ASC'
    );
    $st_query = new WP_Query($args);
    ?>

    <?php if ($st_query->have_posts()) : ?>
      <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


        <div class="feature">
          <div class="feature-text-wrapper">
            <div class="feature-text-box">
              <div class="feature-title">
                <p><?php echo SCF::get('feature-title') ?></p>
              </div>
              <div class="feature-sentence">
                <p><?php echo SCF::get('feature-content') ?></p>
              </div>
            </div>
          </div>
          <div class="feature-image"><?php $image = SCF::get('image');
                                      echo wp_get_attachment_image($image, 'large'); ?></div>
        </div>

      <?php endwhile; ?>
    <?php endif; ?>



  </div>

  <!-- スマホ用GOFLERS２４の特徴 -->
  <div class="sm-second-section-features">
    <div class="slider2 swiper">
      <div class="swiper-wrapper">

        <?php
        $args = array(
          'post_type' => 'feature',
          // 全件取得、数を指定すればその数だけ取得する。
          'posts_per_page' => -1,
          'order' => 'ASC'
        );
        $st_query = new WP_Query($args);
        ?>

        <?php if ($st_query->have_posts()) : ?>
          <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>

            <!-- 特徴１ -->
            <div class="feature swiper-slide">
              <div class="feature-text-wrapper">
                <div class="feature-text-box">
                  <div class="feature-title">
                    <p><?php echo SCF::get('feature-title') ?></p>
                  </div>
                  <div class="feature-sentence">
                    <p>
                    <p><?php echo SCF::get('feature-content') ?></p>
                    </p>
                  </div>
                </div>
              </div>
              <div class="feature-image"><?php $image = SCF::get('image');
                                          echo wp_get_attachment_image($image, 'large'); ?></div>
            </div>



            <div class="swiper-pagination"></div>



          <?php endwhile; ?>
        <?php endif; ?>
      </div>


    </div>
  </div>