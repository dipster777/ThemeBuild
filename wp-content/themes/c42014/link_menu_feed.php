<?php
/*
Template Name: link_menu_feed

*/
 
header('Content-Type: ' . feed_content_type('rss-http') . '; charset=' . get_option('blog_charset'), true);

echo '<?xml version="1.0" encoding="'.get_option('blog_charset').'"?'.'>'; 

//$args = array('p' => $_GET["apppage"]); 		

//$the_query = new WP_Query( $args ); 

 $custom_fields = get_post_custom(); 
 
 $links1 = array();
 
 
 foreach($custom_fields as $key => $value)
 {
  if (strpos($key, "link_url_") === 0)
  {
   $pos = str_replace("link_url_","",$key);
   
   if (isset($custom_fields["link_title_".$pos][0]))
   {
  
		$links1[$pos] = array();
		$links1[$pos]["title1"] = $custom_fields["link_title_".$pos][0];
		$links1[$pos]["url"] = $value[0];
   
   }
   
 
  }
 
 }

 echo "<tableoflinks>";
  foreach($links1 As $item1) {
	echo "<link> ";
		echo "<name>".$item1["title1"]."</name>";
		echo "<url>".$item1["url"]."</url>";
	echo "</link>";
	} 
 echo "</tableoflinks>";
 ?>


