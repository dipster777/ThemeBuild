<?php
/*
Template Name: Custom Feed 3

*/

header('Content-Type: ' . feed_content_type('rss-http') . '; charset=' . get_option('blog_charset'), true);
echo'<?xml version="1.0" encoding="'.get_option('blog_charset').'"?'.'>'; 

?><studentimage><?php
	$args = array('p'        => $_GET["apppage"]); 		
$search = array("\n", "\r",'" width="960" height="390" /><br /><div class="featuredContent"><br /><h1></h1><br /><div class="entice black"></div><br /><div class="featuredMore"><a href=""></a></div><br /></div><br /></div><br /><br /><div class="featuredHolder">','<div class="featuredHolder"><br />','<img src="');


$the_query = new WP_Query( $args ); 

while($the_query->have_posts()) : $the_query->the_post();

$a = get_field('banner_images');


if (strpos($a,'iframe') !== false) {
	$a = str_replace("webkitAllowFullScreen mozallowfullscreen allowFullScreen","",$a);
	$b = get_field('mobile_app_video_image');
	echo str_replace("<iframe","<iframe image='".$b."'",strip_tags($a,"<iframe>"));
	
	
}
else
{


	

	if ($a!="") {
	
				
echo strip_tags($a,"<img>");
		
	}

	
}
 	endwhile; 

?></studentimage>
	

