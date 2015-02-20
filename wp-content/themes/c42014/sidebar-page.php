<div id="sidebarQuotes">
<?php if(is_tree('55')){ //check to see if the parent page is 31, if true echo div containing menu of sub pages for that parent...
echo '<div class="sidebarNav">';
   wp_nav_menu(array('menu' => 'SM_Services'));
echo '</div>';
} elseif (is_tree('57')){
echo '<div class="sidebarNav">';
   wp_nav_menu(array('menu' => 'WD_Development'));
echo '</div>';
}elseif (is_tree('60')){
echo '<div class="sidebarNav">';
   wp_nav_menu(array('menu' => 'B_Print'));
echo '</div>';
}elseif (is_tree('62')){
echo '<div class="sidebarNav">';
   wp_nav_menu(array('menu' => 'MW_App'));
echo '</div>';
}elseif (is_tree('65')){
echo '<div class="sidebarNav">';
   wp_nav_menu(array('menu' => 'D_Marketing'));
echo '</div>';
}elseif (is_tree('67')){
echo '<div class="sidebarNav">';
   wp_nav_menu(array('menu' => 'Media'));
echo '</div>';
}else{
	//do nothing
}
?> 

<?php


if($post->ID == 82 || $post->ID == 105)
{
	echo "<center><a href='http://www.wikitude.com/premiumpartner/concept4' target='_blank'><img src='/images/Wikitude_P3_Badge_400x400.png' width='150' border ='0' alt='Wikitude Premium Partner' title='Wikitude Premium Partner' /></a>";
}





?>


<div class="Qtxt">
<?php the_field('page_quote/text'); ?>
</div>
</div>