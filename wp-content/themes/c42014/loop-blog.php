<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!--st page txt-->
<div id="blogLeft">

<?php
	if (get_field( "blog_page_image" ) != "")
	{

echo '<img src="'.get_field('blog_page_image').'" />';

	}
?>
<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

<div id="singleInfo"><?php the_time('jS F, Y') ?>
<div id="singleInfoShare">Share this article
<a class="addthis_button" href="http://www.addthis.com/bookmark.php"   onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('share','','<?php bloginfo('stylesheet_directory'); ?>/images/share-on.jpg',0)"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/share-off.jpg" alt="Share" name="share" width="32" height="31" border="0" id="share" /></a>
</div>
</div>

</div>
<!--end page txt-->

<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>