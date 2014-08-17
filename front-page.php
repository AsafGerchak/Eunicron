<?php get_header();  ?>

	<div class="section clearfix">
	  <?php get_sidebar(); ?>
	  <div class="left">
			<?php // Start the loop ?>
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	      <!-- <h2><?php the_title(); ?></h2> -->
	      <?php the_content(); ?>

	    <?php endwhile; // end the loop?>
	  </div> <!-- /.left -->
	</div> <!-- /.section -->
<?php get_footer(); ?>