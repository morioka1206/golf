  <?php get_header(); ?>


  <div class="how-to-use-wrapper">
    <!-- <div class="page-title">How to use</div> -->
    <div class="how-title">GOLFERS24ご利用の流れ</div>
    <div class="sm-how-title">
      <p>GOLFERS24ご利用の流れ</p>
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
            <?php
            $args = array(
              'post_type' => 'trial1',
              // 全件取得、数を指定すればその数だけ取得する。
              'posts_per_page' => -1,
            );
            $st_query = new WP_Query($args);
            ?>

            <?php if ($st_query->have_posts()) : ?>
              <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
                <div class="step-title step1"><?php echo SCF::get('title'); ?></div>
                <div class="step-explanation">
                  <?php echo SCF::get('text'); ?>
                </div>
                <!-- <div class="step-caution">
                  <?php echo SCF::get('caution'); ?>
                </div> -->
                <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step1.svg" alt=""></div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <!-- LINEと予約サイトはこちら -->
          <div class="how-to-line-webreserve">
            <a href="https://lin.ee/7Ii8MCV" class="how-to-line-link" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/images/how-to-use-line.svg" alt=""></a>
            <!-- <a href="https://golfers24.hacomono.jp/" class="how-to-webreserve-link" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/images/how-to-use-webreserve.svg" alt=""></a> -->
          </div>



          <!-- STEP2 -->
          <div class="step">
            <?php
            $args = array(
              'post_type' => 'trial2',
              // 全件取得、数を指定すればその数だけ取得する。
              'posts_per_page' => -1,
            );
            $st_query = new WP_Query($args);
            ?>

            <?php if ($st_query->have_posts()) : ?>
              <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


                <div class="open-step">
                  <div class="step-words">
                    <div class="step-title step2"><?php echo SCF::get('title'); ?></div>
                    <div class="step-explanation">
                      <?php echo SCF::get('text'); ?>
                    </div>
                  </div>
                  <input type="checkbox" id="step2">
                  <label class="hide-step-button step2" for="step2">トライアル予約の手順</label>
                  <div class="hide-steps-wrapper">
                    <div class="hide-explanation-wrapper">
                      <div class="hide-explanation">
                        <?php echo SCF::get('hide-text'); ?>
                      </div>
                      <div class="time-required"><?php echo SCF::get('time'); ?></div>
                    </div>
                    <div class="hide-steps">
                      <!-- 1 -->
                      <div class="hide-step">
                        <?php echo SCF::get('step1'); ?>
                        <div class="hide-step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/hide-step1.svg" alt=""></div>
                      </div>

                      <!-- 2 -->
                      <div class="hide-step">
                        <?php echo SCF::get('step2'); ?>
                        <div class="hide-step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/hide-step2.svg" alt=""></div>
                      </div>

                      <!-- 3 -->
                      <div class="hide-step">
                        <?php echo SCF::get('step3'); ?>
                        <div class="hide-step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/hide-step3.svg" alt=""></div>
                      </div>

                      <!-- 4 -->
                      <div class="hide-step">
                        <?php echo SCF::get('step4'); ?>
                        <div class="hide-step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/hide-step4.svg" alt=""></div>
                      </div>

                      <div class="hide-step-caution">
                        <?php echo SCF::get('hide-caution'); ?> </div>
                    </div>
                  </div>
                </div>
                <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step2.svg" alt=""></div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <!-- クリックすると文字が変わるアクション -->
          <script>
            $('.step2').on('click', function() {
              if ($(this).text() === '閉じる') {
                $(this).text('トライアル予約の手順');
              } else {
                $(this).text('閉じる');
              }
            });
          </script>

          <!-- STEP3 -->
          <div class="step">
            <?php
            $args = array(
              'post_type' => 'trial3',
              // 全件取得、数を指定すればその数だけ取得する。
              'posts_per_page' => -1,
            );
            $st_query = new WP_Query($args);
            ?>

            <?php if ($st_query->have_posts()) : ?>
              <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>



                <div class="open-step">
                  <div class="step-words">
                    <div class="step-title step3"><?php echo SCF::get('title'); ?></div>
                    <div class="step-explanation">
                      <?php echo SCF::get('text'); ?>
                    </div>
                  </div>
                  <input type="checkbox" id="step3">
                  <label class="hide-step-button step3" for="step3">アプリ設定の手順</label>
                  <div class="hide-steps-wrapper">
                    <div class="hide-explanation-wrapper">
                      <div class="hide-explanation">
                        <?php echo SCF::get('hide-text'); ?>
                      </div>
                      <div class="time-required"><?php echo SCF::get('time'); ?></div>
                    </div>
                    <div class="hide-steps">
                      <!-- 1 -->
                      <div class="hide-step">
                        <?php echo SCF::get('step1'); ?>
                        <div class="hide-step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/hide-step1.svg" alt=""></div>
                      </div>

                      <!-- 2 -->
                      <div class="hide-step">
                        <?php echo SCF::get('step2'); ?>
                        <div class="hide-step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/hide-step2.svg" alt=""></div>
                      </div>

                      <div class="hide-step-caution">
                        <?php echo SCF::get('hide-caution'); ?>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step3.svg" alt=""></div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <!-- クリックすると文字が変わるアクション -->
          <script>
            $('.step3').on('click', function() {
              if ($(this).text() === '閉じる') {
                $(this).text('アプリ設定の手順');
              } else {
                $(this).text('閉じる');
              }
            });
          </script>

          <!-- STEP4 -->
          <div class="step">
            <?php
            $args = array(
              'post_type' => 'trial4',
              // 全件取得、数を指定すればその数だけ取得する。
              'posts_per_page' => -1,
            );
            $st_query = new WP_Query($args);
            ?>

            <?php if ($st_query->have_posts()) : ?>
              <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>

                <div class="step-title step1"><?php echo SCF::get('title'); ?></div>
                <div class="step-explanation">
                  <?php echo SCF::get('text'); ?>
                </div>
                <div class="step-caution">
                  <?php echo SCF::get('caution'); ?>
                </div>
                <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step4.svg" alt=""></div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <!-- STEP5 -->
          <div class="step">
            <?php
            $args = array(
              'post_type' => 'trial5',
              // 全件取得、数を指定すればその数だけ取得する。
              'posts_per_page' => -1,
            );
            $st_query = new WP_Query($args);
            ?>

            <?php if ($st_query->have_posts()) : ?>
              <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


                <div class="open-step">
                  <div class="step-words">
                    <div class="step-title"><?php echo SCF::get('title'); ?></div>
                    <div class="step-explanation">
                      <?php echo SCF::get('text'); ?>
                    </div>
                  </div>
                  <input type="checkbox" id="step5">
                  <label class="hide-step-button step5" for="step5">ご入会の手順</label>
                  <div class="hide-steps-wrapper">
                    <div class="hide-explanation-wrapper">
                      <div class="step5-hide-explanation">
                        <?php echo SCF::get('hide-text'); ?>
                      </div>
                      <div class="step5-time-required"><?php echo SCF::get('time'); ?></div>
                    </div>
                  </div>
                </div>
                <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step5.svg" alt=""></div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <!-- クリックすると文字が変わるアクション -->
          <script>
            $('.step5').on('click', function() {
              if ($(this).text() === '閉じる') {
                $(this).text('ご入会の手順');
              } else {
                $(this).text('閉じる');
              }
            });
          </script>

          <!-- STEP6 -->
          <div class="step">
            <?php
            $args = array(
              'post_type' => 'trial6',
              // 全件取得、数を指定すればその数だけ取得する。
              'posts_per_page' => -1,
            );
            $st_query = new WP_Query($args);
            ?>

            <?php if ($st_query->have_posts()) : ?>
              <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


                <div class="step-title"><?php echo SCF::get('title'); ?></div>
                <div class="step-explanation">
                  <?php echo SCF::get('text'); ?>
                </div>
                <div class="step-caution">
                  <?php echo SCF::get('caution'); ?>
                </div>
                <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step6.svg" alt=""></div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>


        </div>

      </div>

      <!-- 会員利用 -->
      <div class="member-steps">
        <div class="steps-title">会員利用の流れ</div>

        <!-- 利用の流れ -->
        <div class="steps">
          <!-- それぞれの流れ -->

          <!-- STEP1 -->
          <div class="step">
            <?php
            $args = array(
              'post_type' => 'member1',
              // 全件取得、数を指定すればその数だけ取得する。
              'posts_per_page' => -1,
            );
            $st_query = new WP_Query($args);
            ?>

            <?php if ($st_query->have_posts()) : ?>
              <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


                <div class="step-title step1"><?php echo SCF::get('title'); ?></div>
                <div class="step-explanation">
                  <?php echo SCF::get('text'); ?>
                </div>
                <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step1.svg" alt=""></div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <!-- STEP2 -->
          <div class="step">
            <?php
            $args = array(
              'post_type' => 'member2',
              // 全件取得、数を指定すればその数だけ取得する。
              'posts_per_page' => -1,
            );
            $st_query = new WP_Query($args);
            ?>

            <?php if ($st_query->have_posts()) : ?>
              <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>



                <div class="step-title step2"><?php echo SCF::get('title'); ?></div>
                <div class="step-explanation">
                  <?php echo SCF::get('text'); ?>
                </div>
                <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step2.svg" alt=""></div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <!-- STEP3 -->
          <div class="step">
            <?php
            $args = array(
              'post_type' => 'member3',
              // 全件取得、数を指定すればその数だけ取得する。
              'posts_per_page' => -1,
            );
            $st_query = new WP_Query($args);
            ?>

            <?php if ($st_query->have_posts()) : ?>
              <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


                <div class="step-title"><?php echo SCF::get('title'); ?></div>
                <div class="step-explanation">
                  <?php echo SCF::get('text'); ?>
                </div>
                <div class="step-caution">
                  <?php echo SCF::get('caution'); ?>
                </div>
                <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step3.svg" alt=""></div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>


        </div>

      </div>


    </div>
  </div>
  </div>

  <div class="store-list-link">
    <div class="third-section">
      <div class="third-section-wrapper">
        <div class="third-section-how-to-use-text">
          <div class="how-to-use-sentence">
            <p>全国各地に続々OPEN！店舗検索・予約は下記のボタンから。</p>
          </div>
          <div class="sm-how-to-use-sentence">
            <p>全国各地に続々OPEN！</p>
            <p>店舗検索・予約は下記のボタンから。</p>
          </div>
        </div>

        <a href="<?php echo esc_url(home_url('/locations')); ?>" class="third-section-how-to-use-button">
          店舗一覧はこちら
          <div class="third-section-how-to-use-arrow"></div>
        </a>

        <a href="<?php echo esc_url(home_url('/locations')); ?>" class="sm-third-section-how-to-use-button">
          <p>店舗一覧はこちら</p>
          <div class="third-section-how-to-use-arrow"></div>
        </a>

      </div>
    </div>
  </div>

  <!-- フッター -->
  <?php get_footer(); ?>