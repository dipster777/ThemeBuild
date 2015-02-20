<?php
/**
*@package wordpress
*@subpackage Concept4 2012
*/
/*
Template Name: Meet the team
*/
get_header(); ?>

	<?php include(TEMPLATEPATH . '/includes/mainNav.php'); ?>


<?php if(is_tree('12')){ // 12 being the parent page id
echo '<div class="subNav">';
   wp_nav_menu(array('menu' => 'About'));
echo '</div>';
}
?>    

	<?php include(TEMPLATEPATH . '/includes/staff-list.php'); //create an image area in the cms and call it in after ?>

</div>
<?php get_footer(); ?>