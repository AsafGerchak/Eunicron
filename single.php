<?php get_header(); ?>

<div class="section">
  
  <div class="left">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h3 class="entry-title"><?php the_title(); ?></h3>

        <div class="entry-content">
          <?php the_content(); ?>
        </div><!-- .entry-content -->

        <div class="entry-meta">
           <p>Courtesy of <?php the_author_meta('first_name'); ?></p>
           <p><?php the_date() ?></p>
        </div><!-- .entry-meta -->

      </div><!-- #post-## -->

      <div id="nav-below" class="navigation clearfix">
        <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
        <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
      </div><!-- #nav-below -->


    <?php endwhile; // end of the loop. ?>

  </div> <!-- /.left -->
    
</div> <!-- /.section -->
<?php get_footer(); ?>