<?php get_header(); ?>
<div class="section">
    <?php get_sidebar(); ?>
    <div class="left">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/left-->
</div> <!-- /.section -->
<?php get_footer(); ?>