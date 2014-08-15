<div class="sidebar">
	
	<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    <?php echo get_avatar( 'eunice@hackeryou.com' ) ?>
    <h1><?php bloginfo( 'name' ); ?></h1>
  </a>

	<?php wp_nav_menu( array( 'container' => false, 'menu' => 'header' ) ); ?>

</div> <!-- /.sidebar -->
