<?php get_header();  ?>

<div class="section clearfix">
  <div class="main">

<!-- ==== Custom loop! ==== -->

    <?php $portfolioQuery = new wp_Query(
    		
    		array(
    			// 'paged' => $paged,
    			'posts_per_page' => 10,
    			'post_type' => 'portfolio',
    			)
    ); ?>

		<?php if ( $portfolioQuery->have_posts() ) : ?>

			<?php while ( $portfolioQuery->have_posts() ) : $portfolioQuery->the_post(); ?>

				<!-- THIS IS INSIDE THE LOOP -->

				<div class="portfolioEntry">

					<div class="megaThumbContainer">
						<?php $image = get_field('photo'); ?>
						<img src="<?php echo $image['sizes']['special'] ?>" class="megaThumb">
						<!-- <pre><?php print_r($image); ?></pre> -->
					</div> <!-- /.megaThumb -->
					
				</div> <!-- /.portfolioEntry -->
				
				<?php the_title(); ?>
				<h2>boop</h2>
				<?php the_field('materials'); ?>
				<h1>beep</h1>

				<!-- END OF INSIDE THE LOOP -->

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