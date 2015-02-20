<?php get_header(); ?>


<?php include(TEMPLATEPATH . '/includes/planners-topnav.php'); ?>


<div id="contentHeader"><!--start content header-->
	<h1>portfolio</h1>
    <h2><?php echo get_post_meta($post->ID, 'Page_Headline', true); ?></h2>
    
    <div class="catsList">
    <?php include(TEMPLATEPATH . '/includes/planners-archive-categories.php'); ?>
    </div>
</div><!--end content header-->


<div id="projectCont"><!--start page container-->    
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    	
 
<div id="nivo-cont">   
    		<?php the_field('slideshow_images'); ?>
            
            <div class="proj_content">
            <div class="proj_title"><?php the_title('<h4>', '</h4>'); ?></div>
            <div class="the_content"><?php the_content(); ?></div>
            
            <div class="fldUnP">Categories:</div>
       			 <ul>
        			<li><?php the_category(' <span style="color:#fbba00;">|</span> ') ?></li>
        		</ul>
            </div>
</div>        
        <?php endwhile; ?>
                            
	<?php else : ?>
                            	
	<h1 class="heading">Not Found</h1>
	<p class="notFound">Sorry, but what you are looking for does not exsist.</p>
                                
<?php endif; ?>
<div id="related_posts">
<?php include(TEMPLATEPATH . '/includes/planners-related-posts.php'); ?>
</div>
</div><!--end page container-->

<?php include(TEMPLATEPATH . '/includes/contact.php'); ?>

<?php include(TEMPLATEPATH . '/includes/planners-sitemap.php'); ?>

<?php get_footer(); ?>
