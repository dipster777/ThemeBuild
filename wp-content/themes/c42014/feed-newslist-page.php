<?php
/*
Template Name: Custom Feed 2

*/




	

	$args = array(
	
	
	'p'        => $_GET["apppage"]
	); 		




$the_query = new WP_Query( $args ); $wp_query->post_count ?> 

	<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<link rel='stylesheet' type='text/css' media="all" href='http://www.concept4.com/wp-content/themes/c42012/style.css' />
<link rel='stylesheet' type='text/css' media="all" href='http://www.concept4.com/wp-content/themes/c42012/app-style.css' />

<style type="text/css">
	#homeLeft{width:100%}
	#appInner{padding:20px;}
	img{max-width:100%}
</style>
<?php 


if (stripos($_SERVER["HTTP_USER_AGENT"], "iPad") !== false) {
?>
<link rel='stylesheet' type='text/css' media="all" href='http://www.concept4.com/wp-content/themes/c42012/app-style-ipad.css?v2' />
<?php
}
?>


</head>
<body>
<div id="homeLeft">
<div id="appInner" <?php if (isset($_GET["isPortfolo"])) echo "style='padding-top:0px;'"; ?>>

<h1><?php the_title(); ?></h1>

<?php

$content = get_the_content();

$the_content = str_replace("[nggallery id=1]","<div style='clear:left'></div><div onclick='window.location=\"viewgallery://1\"' style='text-align:center;margin:0 auto;margin-top:20px;width:150px;padding:20px;background:#FBAC00;color:white;'>View Slideshow</div>'",str_replace("<iframe","<iframe style='margin-bottom:20px;' width='100%' ",str_replace("<img","<img style='margin-bottom:20px;display:block;clear:left;'",str_replace("style","sitestyle",str_replace("height","siteheight",str_replace("class","siteclass",str_replace("width","sitewidth",$content)))))));

$content2 = apply_filters('the_content', $the_content);
$content3 = str_replace(']]>', ']]&gt;', $content2);

 echo $content3; ?>
</div></div>



</body>
</html>
	
	<?php endwhile; ?>


