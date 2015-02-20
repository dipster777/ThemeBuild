<?php
/**
*@package wordpress
*@subpackage Concept4 2012
*/
/*
Template Name: Blog
*/
get_header(); ?>

	<?php include(TEMPLATEPATH . '/includes/mainNav.php'); ?>

    <div class="catsList">
    <?php include(TEMPLATEPATH . '/includes/archive-categories.php'); ?>
    </div>

   

	<?php include(TEMPLATEPATH . '/includes/blog-list.php'); //create an image area in the cms and call it in after ?>

</div>
<?php get_footer(); ?>