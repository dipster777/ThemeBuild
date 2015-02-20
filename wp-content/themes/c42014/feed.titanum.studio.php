<?php
/*
Template Name: feed.titanum.studio

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

echo '<rss version="2.0">'; ?>

<channel>
	<title>Contact4 - News</title>

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
		<author></author>
		<description></description>
		<link>http://www.concept4.com/mobile-app-feed/news-and-gallery/page/?apppage=<?php echo the_ID().($isPortfolo == 1) ? "&amp;isPortfolo=1" : ""; ?></link>
		<guid>http://www.concept4.com/mobile-app-feed/news-and-gallery/page/?apppage=<?php echo the_ID().($isPortfolo == 1) ? "&amp;isPortfolo=1" : ""; ?></guid>
		<pubDate><?php echo mysql2date('D, d M Y H:i:s O', get_post_time('Y-m-d H:i:s', true), false); ?></pubDate>
		<image><![CDATA[<?php echo $image[0]; ?>]]></image>
	</item>
	<?php endwhile; ?>
</channel>
</rss>
