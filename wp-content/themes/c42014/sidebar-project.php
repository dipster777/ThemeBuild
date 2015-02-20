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




<div class="Qtxt">
 <div class="fldUnP">Filed under:</div>
       			 <ul>
        			<li><?php the_category(' <span style="color:#fbba00;">|</span> ') ?></li>
        		</ul>
            </div>
</div>
</div>