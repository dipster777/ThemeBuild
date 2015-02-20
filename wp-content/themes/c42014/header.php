<?php
/**
 * The Header for the C4
 *
 *
 * @package WordPress
 * @subpackage Concept4 2014
 * @since C4 1.3
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); ?><?php wp_title('|', true); ?></title>

<a href="https://plus.google.com/117650759160049955909" rel="publisher" />
<meta name="author" content="http://www.concept4.com" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">


<script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
<script src="/js/cookieControl-5.1.min.js" type="text/javascript"></script>


<script>
  var metas = document.getElementsByTagName('meta');
  var i;
  if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i)) {
   for (i=0; i<metas.length; i++) {
      if (metas[i].name == "viewport") {
        metas[i].content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
      }
    }
    document.addEventListener("gesturestart", gestureStart, false);
  }
  function gestureStart() {
    for (i=0; i<metas.length; i++) {
      if (metas[i].name == "viewport") {
        metas[i].content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
      }
    }
  }
</script> 

<?php


$referrrer =$_SERVER["HTTP_REFERER"];
$currentpage =$_SERVER["REQUEST_URI"];



if($currentpage =="/thank-you/")
{

	if ($referrrer=="http://www.concept4.com/concept4-prospectus-design-print/")
	{
	?>
<script type="text/javascript">
        jQuery.getScript("http://www.google-analytics.com/ga.js", function() {
          var GATracker = _gat._createTracker('UA-5327771-5');
          GATracker._trackPageview('/thank-you-concept4-prospectus-design-print');
        });
</script>

	<?php
	}
	else if ($referrrer=="http://www.concept4.com/concept4-website-design-development/")
	{
	?>


<script type="text/javascript">
	jQuery.getScript("http://www.google-analytics.com/ga.js", function() {
          var GATracker = _gat._createTracker('UA-5327771-5');
          GATracker._trackPageview('/thank-you-concept4-website-design-development');
        });
</script>



	<?php
	}
	else if ($referrrer=="http://www.concept4.com/concept4-bespoke-mobile-apps/")
	{
	?>
<script type="text/javascript">
        jQuery.getScript("http://www.google-analytics.com/ga.js", function() {
          var GATracker = _gat._createTracker('UA-5327771-5');
          GATracker._trackPageview('/thank-you-concept4-bespoke-mobile-apps');
        });
</script>  




</script>
	<?php
	}
	else if ($referrrer=="http://www.concept4.com/concept4-branded-homework-diaries-student-planners/")
	{
	?>

<script type="text/javascript">

        jQuery.getScript("http://www.google-analytics.com/ga.js", function() {
          var GATracker = _gat._createTracker('UA-5327771-5');
          GATracker._trackPageview('/thank-you-concept4-branded-homework-diaries-student-planners');
        });
 




</script>
	<?php
	}
	else if ($referrrer=="http://www.concept4.com/process.php")
	{
	?>

<script type="text/javascript">


        jQuery.getScript("http://www.google-analytics.com/ga.js", function() {
          var GATracker = _gat._createTracker('UA-5327771-5');
          GATracker._trackPageview('/thank-you-main-contact');
        });
    
</script>
<?php
}
else
{
?>

<script type="text/javascript">

        jQuery.getScript("http://www.google-analytics.com/ga.js", function() {
          var GATracker = _gat._createTracker('UA-5327771-5');
          GATracker._trackPageview();
        });
    
</script>
<?php
}
}
else
{
?>

<script type="text/javascript">

        jQuery.getScript("http://www.google-analytics.com/ga.js", function() {
          var GATracker = _gat._createTracker('UA-5327771-5');
          GATracker._trackPageview();
        });
    
</script>


<?php
}
?>


<script type='text/javascript'>
window.__wtw_lucky_site_id = 19260;

	(function() {
		var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
		wa.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://ca19260') + '.luckyorange.com/w.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
	  })();
	</script>

	
<?php wp_head(); ?>     
</head>

<body <?php body_class(); ?>>


<!-- ClickTale Top part -->
<script type="text/javascript">
var WRInitTime=(new Date()).getTime();
</script>
<!-- ClickTale end of Top part -->


<!--st holder-->
<div id="allHolder">



<!--st header Cont-->
<header>

	<!--st h01-->
    <div id="hdrInner">    	
        <a href="/" class="logo"><img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/C4-logo.jpg" width="460" height="40" alt="Concept4" /></a>
        <a href="/" class="tab_logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/C4-logo_tablet.jpg" width="432" height="40" alt="Concept4" /></a>
        <a href="/" class="mob_logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/C4-logo_mobile.jpg" alt="Concept4" /></a>
        <img class="tel" src="<?php bloginfo('stylesheet_directory'); ?>/images/numbers.jpg" width="227" height="48" alt="Get in touch: 01282 612222" />
        <a class="tel_northern" href="tel:+441282612222"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mob_number_northern.jpg" alt="Call our Northern Office on 01282 612222"></a>
        <a class="tel_southern" href="tel:+442030561166"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mob_number_southern.jpg" alt="Call our Southern Office on 020 3056 1166"></a>
    </div>
	<!--end h01-->

</header>
<!--end header Cont-->



<!--st main Cont-->
<div id="mainCont">


    <!--st outer Cont-->
    <div id="mainContOuter">
    
    
    	<!--st inner Cont-->
           <div class="mainContInner">