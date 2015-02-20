<?php get_header(); ?>


<?php include(TEMPLATEPATH . '/includes/mainNav.php'); ?>

<div class="return"><a href="javascript:history.back()" class="back"></a>Back</div>

<?php include(TEMPLATEPATH . '/includes/pageSlideshow.php'); //create an image area in the cms and call it in after ?>

<!--st 2nd inner-->
<div class="mainContInner">

	<?php get_template_part('loop', 'page'); ?>
    
    <?php get_sidebar('project'); ?>
    
</div>        
<!--end 2nd inner-->


<?php get_footer(); ?>
