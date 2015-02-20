<?php
/*
Template Name: Custom Feed Intro Page

*/




	






$the_query = new WP_Query(); ?> 


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
<div id="appInner">



<?php echo str_replace("<img","<img style='margin-bottom:5px;display:block;clear:left;'",str_replace("style","sitestyle",str_replace("height","siteheight",str_replace("class","siteclass",str_replace("width","sitewidth",get_the_content()))))); ?>
</div></div>



</body>
</html>
	
	<?php endwhile; ?>
	<?php endif; ?>

