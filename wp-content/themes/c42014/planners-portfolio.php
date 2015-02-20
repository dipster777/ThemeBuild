<? 
/**
*@package Wordpress
*@subpackage Concept4
*/
/*
Template Name: Planners Portfolio
*/
get_header(); ?>


<?php include(TEMPLATEPATH . '/includes/planners-topnav.php'); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="contentHeader"><!--start content header-->
	<?php the_title('<h1>', '</h1>'); ?>
    <h2><?php echo get_post_meta($post->ID, 'Page_Headline', true); ?></h2>
    
   <?php endwhile; ?>                                
<?php endif; ?> 

   
    <div class="catsList">
    <?php include(TEMPLATEPATH . '/includes/planners-archive-categories.php'); ?>
    </div>
</div><!--end content header-->


<div id="articleCont"><!--start article container-->

<?php include(TEMPLATEPATH . '/includes/planners-portfolio-list.php'); ?>


</div><!--end article container-->



<?php include(TEMPLATEPATH . '/includes/contact.php'); ?>

<?php include(TEMPLATEPATH . '/includes/planners-sitemap.php'); ?>

<?php get_footer(); ?>
