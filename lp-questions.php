<div class="questions-wrapper">
  <!-- <div class="page-title">FAQ</div> -->
  <div class="questions-title">
    <img src="<?php echo get_theme_file_uri(); ?>/images/yokuaru-situmon.svg" alt="">
  </div>

  <!-- 質問　施設・設備・ご予約について -->
  <div class="questions-contents-wrapper">

    <div class="questions-contents-title">施設・設備・ご予約について</div>
    <!-- それぞれの質問 -->

    <?php
    $args = array(
      'post_type' => 'question',
      // 全件取得、数を指定すればその数だけ取得する。
      'posts_per_page' => -1,
      'order' => 'ASC'
    );
    $st_query = new WP_Query($args);
    ?>

    <?php if ($st_query->have_posts()) : ?>
      <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


        <div class="question-content">
          <!-- Q -->
          <div class="question-q">
            <?php echo SCF::get('question') ?>
          </div>
          <!-- A -->
          <div class="question-a">
            <div class="question-a-text">
              <p><?php echo SCF::get('answer') ?></p>
            </div>
          </div>
        </div>


      <?php endwhile; ?>
    <?php endif; ?>


    <div class="questions-contents-title">シュミレーターマシンについて</div>
    <!-- それぞれの質問 -->
    <?php
    $args = array(
      'post_type' => 'question2',
      // 全件取得、数を指定すればその数だけ取得する。
      'posts_per_page' => -1,
      'order' => 'ASC'
    );
    $st_query = new WP_Query($args);
    ?>

    <?php if ($st_query->have_posts()) : ?>
      <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


        <div class="question-content">
          <!-- Q -->
          <div class="question-q">
            <?php echo SCF::get('question') ?>
          </div>
          <!-- A -->
          <div class="question-a">
            <div class="question-a-text">
              <p><?php echo SCF::get('answer') ?></p>
            </div>
          </div>
        </div>


      <?php endwhile; ?>
    <?php endif; ?>


    <div class="questions-contents-title">無料体験について</div>
    <!-- それぞれの質問 -->

    <?php
    $args = array(
      'post_type' => 'question3',
      // 全件取得、数を指定すればその数だけ取得する。
      'posts_per_page' => -1,
      'order' => 'ASC'
    );
    $st_query = new WP_Query($args);
    ?>

    <?php if ($st_query->have_posts()) : ?>
      <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>


        <div class="question-content">
          <!-- Q -->
          <div class="question-q">
            <?php echo SCF::get('question') ?>
          </div>
          <!-- A -->
          <div class="question-a">
            <div class="question-a-text">
              <p><?php echo SCF::get('answer') ?></p>
            </div>
          </div>
        </div>


      <?php endwhile; ?>
    <?php endif; ?>


  </div>

</div>

<script>
  $(function() {
    //.accordion_oneの中の.accordion_headerがクリックされたら
    $('.question-content .question-q').click(function() {
      //クリックされた.accordion_oneの中の.accordion_headerに隣接する.accordion_innerが開いたり閉じたりする。
      $(this).next('.question-a').slideToggle();
      $(this).toggleClass("open");
    });
  });
</script>