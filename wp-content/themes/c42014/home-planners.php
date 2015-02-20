<? 
/**
*@package Wordpress
*@subpackage Concept4
*/
/*
Template Name: Planners-Home
*/
get_header(); ?>


<?php include(TEMPLATEPATH . '/includes/planners-topnav.php'); ?>
                                
    
<div id="contentHeader"><!--start content header-->

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php the_title('<h1>', '</h1>'); ?>
    <h2><?php echo get_post_meta($post->ID, 'Page_Headline', true); ?></h2>
</div><!--end content header-->

<div id="contWelcome"><!--start 1st cont-->
	<div class="welcomeTxtLf">
    	<?php the_content(); ?>
        
      <?php endwhile; ?>
      <?php endif; ?>
    </div>

<?php include(TEMPLATEPATH . '/includes/planners-home-gallery.php'); ?>   

</div><!--end 1st cont-->

<?php include(TEMPLATEPATH . '/includes/planners-key_sectors.php'); ?>

<?php include(TEMPLATEPATH . '/includes/planners-home_blog.php'); ?>

<?php include(TEMPLATEPATH . '/includes/contact.php'); ?>

<?php include(TEMPLATEPATH . '/includes/planners-sitemap.php'); ?>

<?php include(TEMPLATEPATH . '/footer-home.php'); ?>
