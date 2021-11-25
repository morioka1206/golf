<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div>
      <?php the_title(); ?>
      <?php the_content(); ?>
      <?php echo SCF::get('tel'); ?>
    </div>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>