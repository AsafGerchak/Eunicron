<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head> 
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
  <title><?php  wp_title( '| ', true, 'right' );  ?></title>
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css"  href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/mq.css">
  <link href='http://fonts.googleapis.com/css?family=Rosario' rel='stylesheet' type='text/css'>
  <!-- <link href='http://fonts.googleapis.com/css?family=Overlock:400,400italic,700' rel='stylesheet' type='text/css'> -->
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,400italic,300italic' rel='stylesheet' type='text/css'>
  
	<?php	if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

  <!-- Load jQuery and our own scripts file -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="<?php bloginfo('template_directory');?>/js/jQuery.js"><\/script>')</script>
	<script src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js"></script>
</head>

<body <?php body_class(); ?>>

  <div class="header">    
    <div class="headerContent">

      <!-- ====== SITE LOGO ====== -->

      <a href="<?php echo home_url( '/' ); ?>" class="headerImage" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

          <img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' class="logo" alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>

      </a>

      <div class="headerText">
        
        <div class="title">
          <a href="<?php echo home_url( '/' ); ?>" class="logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <h1><?php bloginfo( 'name' ); ?></h1>
          </a>
        </div> <!-- /.title -->

        <div class="subHead clearfix">
          
          <a href="<?php echo home_url( '/' ); ?>" class="logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <h2><?php bloginfo( 'description' ) ?></h2>
          </a>

          <!-- ====== Nav menu ====== -->
          <?php wp_nav_menu( array( 'container' => false, 'menu' => 'header' ) ); ?>

        </div> <!-- /.subHead -->

      </div> <!-- /. headerText -->
  
    </div> <!-- /.headerContent -->
  </div> <!-- /.header -->

