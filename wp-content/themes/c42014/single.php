<?php
  $post = $wp_query->post;
  if (in_category('portfolio')) {
      include(TEMPLATEPATH.'/single-project.php');//tells wordpress that is the Portfolio category is being viewed, then use the single-project template
} 
elseif (in_category('meet-the-team')) {
      include(TEMPLATEPATH.'/single-bio.php');//tells wordpress that is the Portfolio category is being viewed, then use the planners portfolio template
}
  else{
      include(TEMPLATEPATH.'/single-blog.php');//for anything else use the single-blog template...
  }
?>