<?php
/**
*@package wordpress
*@subpackage Concept4 2012
*/
/*
Template Name: Primary PPC page
*/
get_header(); ?>

	<?php include(TEMPLATEPATH . '/includes/mainNav.php'); ?>

	<?php include(TEMPLATEPATH . '/includes/homeSlideshow.php'); ?>
    
    
    <!--st 2nd inner-->
<div class="mainContInner">

	<!--st home txt-->
    <div id="homeLeft">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<h1><?php the_title(); ?></h1>
        
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>

	
    </div>
    <!--end home txt-->
    
    <?php include(TEMPLATEPATH .'/includes/primaryppcSidebar.php'); ?> 
    
</div>        
<!--end 2nd inner-->
<?php get_footer(); ?>