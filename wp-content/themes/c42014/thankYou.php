<?php
/**
*@package wordpress
*@subpackage Concept4 2012
*/
/*
Template Name: Thaank You
*/
get_header(); ?>

	<?php include(TEMPLATEPATH . '/includes/mainNav.php'); ?>

<!--st page txt-->
<div id="pageLeft">

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

</div>
<!--end page txt-->
    
    

    
    <?php get_footer(); ?>