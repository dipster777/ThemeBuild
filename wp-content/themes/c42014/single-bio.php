<?php get_header(); ?>


<?php include(TEMPLATEPATH . '/includes/mainNav.php'); ?>

<div class="return"><a href="javascript:history.back()" class="back"></a>Back</div>

<?php if( get_field('team_bio_image') ): 
echo '<div class="bioImage">';
?>
<img src="<?php the_field('team_bio_image'); ?>" alt="" />
<?php 
echo '</div>';
endif; ?>

<!--st 2nd inner-->
<div class="mainContInner">

	<?php get_template_part('loop', 'bio'); ?>
    
    <?php get_sidebar('bio'); ?>
    
</div>        
<!--end 2nd inner-->


<?php get_footer(); ?>
