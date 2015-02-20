<?php
$count = 1;
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $count++;
endwhile; endif; ?>
<?php if ($count > '3') { //if count is greater than 3 show special file
include (TEMPLATEPATH . "/includes/cat_four_plus.php"); 
} else { //if count is 3 or less show special template
	include (TEMPLATEPATH . "/includes/cat_four_minus.php");
}
?>
