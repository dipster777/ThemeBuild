<? 
/**
*@package Wordpress
*@subpackage Concept4
*/
/*
Template Name: Planners Page
*/
get_header(); ?>


<?php include(TEMPLATEPATH . '/includes/planners-topnav.php'); ?>


<div id="contentHeader"><!--start content header-->
	<h1><?php the_title(); ?></h1>
    <h2><?php echo get_post_meta($post->ID, 'Page_Headline', true); ?></h2>
    
</div><!--end content header-->


<div id="pageCont"><!--start page container-->

<?php get_sidebar(); ?><!--gets the sidebar nav for the page template-->
    
    <div id="pageMain"><!--start page main column-->
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    	
    
    		<?php the_content(); ?>
        
        <?php endwhile; ?>
                            
	<?php else : ?>
                            	
	<h1 class="heading">Not Found</h1>
	<p class="notFound">Sorry, but what you are looking for does not exsist.</p>
                                
<?php endif; ?>
    </div><!--end page main column-->

</div><!--end page container-->

<?php include(TEMPLATEPATH . '/includes/contact.php'); ?>

<?php include(TEMPLATEPATH . '/includes/planners-sitemap.php'); ?>

<?php get_footer(); ?>
