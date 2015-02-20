<?php
/**
*@package wordpress
*@subpackage Concept4 2012
*/
/*
Template Name: Standard page
*/
get_header(); ?>

	<?php include(TEMPLATEPATH . '/includes/mainNav.php'); ?>

<?php if(is_tree('12')){ // 2 being the parent page id
echo '<div class="subNav">';
   wp_nav_menu(array('menu' => 'About'));
echo '</div>';
}elseif (is_tree('17')){
echo '<div class="subNav">';
   wp_nav_menu(array('menu' => 'Services'));
echo '</div>';
} 
?>   


	<?php include(TEMPLATEPATH . '/includes/pageSlideshow.php'); //create an image area in the cms and call it in after ?>
    
    
    <!--st 2nd inner-->
<div class="mainContInner">


	<?php get_template_part('loop', 'page'); ?>
    
    <?php get_sidebar('page'); ?>
    
</div>        
<!--end 2nd inner-->

<?php get_footer(); ?>