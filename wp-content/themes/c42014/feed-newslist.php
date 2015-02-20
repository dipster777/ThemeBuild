<?php
/*
Template Name: Custom Feed 1

'paged'          => isset($_GET["apppage"]) ? $_GET["apppage"] : 0,

*/
 
function convert_ascii($string)
{
// Replace Single Curly Quotes
$search[] = chr(226).chr(128).chr(152);
$replace[] = "'";
$search[] = chr(226).chr(128).chr(153);
$replace[] = "'";
 
// Replace Smart Double Curly Quotes
$search[] = chr(226).chr(128).chr(156);
$replace[] = '"';
$search[] = chr(226).chr(128).chr(157);
$replace[] = '"';
 
// Replace En Dash
$search[] = chr(226).chr(128).chr(147);
$replace[] = '--';
 
// Replace Em Dash
$search[] = chr(226).chr(128).chr(148);
$replace[] = '---';
 
// Replace Bullet
$search[] = chr(226).chr(128).chr(162);
$replace[] = '*';
 
// Replace Middle Dot
$search[] = chr(194).chr(183);
$replace[] = '*';
 
// Replace Ellipsis with three consecutive dots
$search[] = chr(226).chr(128).chr(166);
$replace[] = '...';
 
// Apply Replacements
$string = str_replace($search, $replace, $string);
 
// Remove any non-ASCII Characters
$string = preg_replace("/[^\x01-\x7F]/","", $string);
 
return $string;
}


header('Content-Type: ' . feed_content_type('rss-http') . '; charset=' . get_option('blog_charset'), true);
$more = 1;

echo '<?xml version="1.0" encoding="'.get_option('blog_charset').'"?'.'>'; ?>

<studentnews>
	<title>Contact4 - News</title>
<newslist>
	<title><?php bloginfo_rss('name'); wp_title_rss(); ?></title>

<?php 
$isPortfolo = false;

if (isset($_GET["newsection"]) && $_GET["newsection"] == "portfolo") {

$isPortfolo = true;	

	$args = array(
	
	
	'cat'        => "17",
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'post_type'       => 'post',
	'post_status'     => 'publish',
	'suppress_filters' => true,posts_per_page=>30 ); 		

}
else
{
	$args = array(
	
	'cat'        => "13",
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'post_type'       => 'post',
	'post_status'     => 'publish',
	'suppress_filters' => true,posts_per_page=>30 ); 
}

$the_query = new WP_Query( $args ); $wp_query->post_count ?> 

	<?php while($the_query->have_posts()) : $the_query->the_post(); ?>


<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

	<item>
		<title><?php echo convert_ascii(get_the_title()) ?></title>
		<profileurl><?php if ($isPortfolo == 1) echo "http://www.concept4.com/mobile-app-feed/news-and-gallery/portfolo-image-feed/?apppage=".$post->ID; ?></profileurl>
		<url>http://www.concept4.com/mobile-app-feed/news-and-gallery/page/?apppage=<?php echo the_ID().($isPortfolo == 1) ? "&amp;isPortfolo=1" : ""; ?></url>
		<pubDate><?php echo mysql2date('Y-m-d H:i:s', get_post_time('Y-m-d H:i:s', true), false); ?></pubDate>
		<pubdateText><?php echo mysql2date('d-m-y', get_post_time('Y-m-d H:i:s', true), false); ?></pubdateText>
		
		
		<thumbnail><![CDATA[<?php echo $image[0]; ?>]]></thumbnail>
	</item>
	<?php endwhile; ?>
</newslist>
</studentnews>

