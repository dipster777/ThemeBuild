<?php get_header(); ?>


<?php include(TEMPLATEPATH . '/includes/mainNav.php'); ?>

    
    <div class="catsList">
    <?php if(in_category('blog')) { include ('includes/archive-categories.php'); } ?>
    <?php if(in_category('portfolio')) { include ('includes/archive-portfolio-categories.php'); } ?>
    </div>




<?php
if (is_category('13')) { 
	echo '';
}else{
  $this_category = get_category($cat);
  if (get_category_children($this_category->cat_ID) != "") {
	  echo '<div class="cat_sector">';
	  echo '<span>Filter by:</span>';
	  echo '<ul class="mcol3">';
    wp_list_categories('hide_empty=0&orderby=date&order=DESC&show_count=0&title_li=&use_desc_for_title=1&child_of='.$this_category->cat_ID);
	  echo '</ul>';
	  echo '</div>';
  }
}
?>



<?php include(TEMPLATEPATH . '/includes/cat-level-three-list.php'); //remove this is C4 wants the level 3 cats to dissapear as before when your on it ?>

<?php
if (is_category(array(14,15,16))){ include (TEMPLATEPATH . '/includes/article-list.php'); }
else { include (TEMPLATEPATH . '/includes/project-list.php'); }
?>

</div>
<?php get_footer(); ?>