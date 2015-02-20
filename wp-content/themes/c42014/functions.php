<?php

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'sidebar1'));//sidebar for right column containing calendar
register_sidebar(array('name'=>'sidebar2'));//sidebar for multi search element
add_theme_support('post-thumbnails', array('post', 'page'));//support post thumnails to get post thumnail box within dashboard
set_post_thumbnail_size( 263, 174, true ); // 150 pixels wide by 150 pixels tall, box resize mode
add_image_size( 'featured-thumb', 300, 285 ); //465 pixels wide by 270height 
/**/

/*limit the amount of words allowed in front news boxes*/
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1)); 
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}
/**/

/*trim words function*/
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}




/*add a Read more link to the post news page excerpt*/
function new_excerpt_more($post) {
	return '<a href="'. get_permalink($post->ID) . '">' . '' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
/**/



/*Extra function for comment spammer bots to fuck off*/
function check_referrer() {
    if (!isset($_SERVER['HTTP_REFERER']) || $_SERVER['HTTP_REFERER'] == "") {
        wp_die( __('Please enable referrers in your browser, or, if you\'re a spammer, get out of here!') );
    }
}
 
add_action('check_comment_flood', 'check_referrer');
/**/

add_action( 'init', 'register_my_menus');

function register_my_menus() {
	register_nav_menus(
	array(
	'Main menu' => __( 'Main' ),
	'About' => __( 'About' ),
	'Services menu' => __( 'Services_Sub' ),
		'SMS menu' => __( 'SMS_Sub' ),
		'WDD menu' => __( 'WDD_Sub' ),
		'BP menu' => __( 'BP_Sub' ),
		'MWA menu' => __( 'MWA_Sub' ),
		'DM menu' => __( 'DM_Sub' ),
		'Sitemap' => __( 'Sitemap' ),
		'Media menu' => __( 'Media_Sub' )
	)
	);
}

function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'menu', get_template_directory_uri() . '/JS/jquery.mmenu.min.all.js' , array( 'jquery' ) );
	wp_register_script( 'modernizr', get_template_directory_uri() . '/JS/modernizr.js' , array( 'jquery' ));
	wp_register_script( 'script', get_template_directory_uri() . '/JS/script.js' , array( 'jquery' ) );
	wp_register_script( 'slides', get_template_directory_uri() . '/JS/slides.jquery.js' , array( 'jquery' ) );
	wp_register_script( 'imgswap', get_template_directory_uri() . '/JS/img_swap.js' , array( 'jquery' ) );
	
	wp_register_style( 'mmenu',get_stylesheet_directory_uri().'/CSS/jquery.mmenu.css' );
	wp_register_style( 'mmenupositioning',get_stylesheet_directory_uri().'/CSS/jquery.mmenu.positioning.css' );
	wp_register_style( 'mmenusearch',get_stylesheet_directory_uri().'/CSS/jquery.mmenu.searchfield.css' );


    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'menu' );
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'script' );
	wp_enqueue_script( 'slides' );
	wp_enqueue_script( 'imgswap' );
	wp_enqueue_style( 'mmenu' );
	wp_enqueue_style( 'mmenupositioning' );
	wp_enqueue_style( 'mmenusearch' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
    global $post;         // load details about this page
    $anc = get_post_ancestors( $post->ID );
    foreach($anc as $ancestor) {
        if(is_page() && $ancestor == $pid) {
            return true;
        }
    }
    if(is_page()&&(is_page($pid))) 
               return true;   // we're at the page or at a sub page
    else 
               return false;  // we're elsewhere
};

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

function redir_after_form_sent($form) {

header('Location: /thank-you');
die();

}
add_action('wpcf7_mail_sent', 'redir_after_form_sent');

?>