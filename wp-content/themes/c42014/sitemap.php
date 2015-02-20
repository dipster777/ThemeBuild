<?php
/**
*@package wordpress
*@subpackage Concept4 2012
*/
/*
Template Name: Sitemap
*/
get_header(); ?>

	<?php include(TEMPLATEPATH . '/includes/mainNav.php'); ?>
	
    
    
    <!--st 2nd inner-->
<div class="mainContInner btm">

<h1 style="margin-top:20px;">Sitemap</h1>

<div class="sitemap"><?php wp_nav_menu(array('menu' => 'Sitemap')); ?></div>
	
    
</div>        
<!--end 2nd inner-->

<?php get_footer(); ?>