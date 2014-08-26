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

	<!-- Custom loop! -->

    <?php $portfolioQuery = new wp_Query(
    		
    		array(
    			// 'paged' => $paged,
    			'posts_per_page' => 10,
    			'post_type' => 'portfolio',
    			)
    ); ?>

		<?php if ( $portfolioQuery->have_posts() ) : ?>

			<?php while ( $portfolioQuery->have_posts() ) : $portfolioQuery->the_post(); ?>
				<?php the_title(); ?>
				<h2>boop</h2>
				<?php the_field('materials'); ?>
				<h1>beep</h1>
			<?php endwhile; ?>

			<?php
			// next_posts_link() usage with max_num_pages
			next_posts_link( 'Older Entries', $portfolioQuery->max_num_pages );
			previous_posts_link( 'Newer Entries' );
			?>

			<?php wp_reset_postdata(); ?>

		<?php else:  ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>


	<!-- Page navigation -->

		

  </div> <!-- /.left -->
</div> <!-- /.section -->

<?php get_footer(); ?>