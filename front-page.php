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

				<div class="portfolioItem">

					<div class="megaThumbContainer">
						
						<?php $image = get_field('photo'); ?>
						<a href="<?php echo get_post_permalink(); ?>">
							<img src="<?php echo $image['sizes']['special'] ?>" class="megaThumb">

							<div class="megaThumbOverlay">
								<!-- This div exists entirely to give a slightly shadowed overlay to the megaThumbs, and disappears on hover-->
							</div>
						</a>

					</div> <!-- /.megaThumb -->

					<div class="captionContainer">
						<a href="<?php echo get_post_permalink(); ?>">

							<div class="shortCaption">
								<h3><?php the_title(); ?></h3>
								<h4><?php the_field('type'); ?>, <?php the_field('year'); ?></h4>
							</div> <!-- /.shortCaption -->
						
						</a>
					</div> <!-- /.captionContainer -->
					
				</div> <!-- /.portfolioItem -->
				


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