<?php get_header(); ?>

<div class="section">
  <?php get_sidebar(); ?>
  
  <div class="left">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h3 class="entry-title"><?php the_title(); ?></h3>

        <div class="entry-meta">
          <?php twentyten_posted_on(); ?>
        </div><!-- .entry-meta -->

        <div class="entry-content">
          <?php the_content(); ?>
          <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->


        <div class="entry-utility">
          <?php twentyten_posted_in(); ?>
          <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
        </div><!-- .entry-utility -->
      </div><!-- #post-## -->

      <div id="nav-below" class="navigation">
        <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
        <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
      </div><!-- #nav-below -->


    <?php endwhile; // end of the loop. ?>

  </div> <!-- /.left -->
    
</div> <!-- /.section -->
<?php get_footer(); ?>