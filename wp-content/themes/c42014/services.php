<?php
/**
*@package wordpress
*@subpackage Concept4 2012
*/
/*
Template Name: Services
*/
get_header(); ?>

	<?php include(TEMPLATEPATH . '/includes/mainNav.php'); ?>
    
<?php if (is_tree('17')){
echo '<div class="subNav">';
   wp_nav_menu(array('menu' => 'Services'));
echo '</div>';
}
?>

	<?php include(TEMPLATEPATH . '/includes/services-list.php'); //create an image area in the cms and call it in after ?>

</div>
<?php get_footer(); ?>