<?php
/**
*@package wordpress
*@subpackage Concept4 2012
*/
/*
Template Name: Front page
*/
get_header(); ?>

	<?php include(TEMPLATEPATH . '/includes/mainNav.php'); ?>

	<?php include(TEMPLATEPATH . '/includes/homeSlideshow.php'); ?>
    
    
    <!--st 2nd inner-->
<div class="mainContInner">

	<!--st home txt-->
    <div id="homeLeft">
    	<h1>Welcome to Concept4</h1>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>

	<a class="vP" href="<?php bloginfo('url'); ?>/portfolio/">View our portfolio</a>
    </div>
    <!--end home txt-->
    
    <?php include(TEMPLATEPATH .'/includes/homeSidebar.php'); ?>
    
</div>        
<!--end 2nd inner-->
<?php get_footer(); ?>