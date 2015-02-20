<?php get_header(); ?>


<?php include(TEMPLATEPATH . '/includes/mainNav.php'); ?>


<!--st 2nd inner-->
<div class="mainContInner">



	<?php get_sidebar('blog'); ?>

	<?php get_template_part('loop', 'blog'); ?>
    
    
    
</div>        
<!--end 2nd inner-->


<?php get_footer(); ?>