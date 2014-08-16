<div class="sidebar">
	
	<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    
		<div class='site-logo'>
    	<img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
    </div> <!-- /.site-logo -->

    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ) ?></h2>
  </a>

	<?php wp_nav_menu( array( 'container' => false, 'menu' => 'header' ) ); ?>

</div> <!-- /.sidebar -->
