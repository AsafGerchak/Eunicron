<?php get_header();  ?>

<div class="section clearfix">
  <div class="left">

		<?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <!-- <h2><?php the_title(); ?></h2> -->
      <div class="piece">
      	<?php the_content(); ?>
      </div> <!-- /.piece -->

    <?php endwhile; // end the loop?>
  </div> <!-- /.left -->
</div> <!-- /.section -->

<?php get_footer(); ?>