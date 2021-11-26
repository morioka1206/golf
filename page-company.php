<?php get_header(); ?>


<div class="company-wrapper">
  <div class="page-title">Company</div>
  <div class="company-title">会社概要</div>
</div>

<?php
$args = array(
  'post_type' => 'company-infomation',
  // 全件取得、数を指定すればその数だけ取得する。
  'posts_per_page' => -1,
);
$st_query = new WP_Query($args);
?>

<?php if ($st_query->have_posts()) : ?>
  <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>



    <div class="company-image"><?php $image = SCF::get('image');
                                echo wp_get_attachment_image($image, 'larage'); ?></div>

    <div class="company-information">
      <!-- 会社名 -->
      <div class="company-name-wrapper">
        <div class="company-name-title">会社名</div>
        <div class="company-name"><?php echo SCF::get('name'); ?></div>
      </div>
      <!-- 会社住所 -->
      <div class="company-address-wrapper">
        <div class="company-address-title">住所</div>
        <div class="company-address"><?php echo SCF::get('address'); ?></div>
      </div>

      <!-- Googleマップ -->
      <div class="google-map">
        <?php echo SCF::get('google_map'); ?>
      </div>


    </div>

  <?php endwhile; ?>
<?php endif; ?>


<!-- CONTACT US -->
<?php get_template_part('contact-us') ?>


<!-- フッター -->
<?php get_footer(); ?>