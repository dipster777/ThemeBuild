<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!--st page txt-->
<div id="bioLeft">

<h1><?php the_title(); ?></h1>

<div class="staffPosition"><?php the_field('position'); ?></div>

<?php the_content(); ?>

</div>
<!--end page txt-->

<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>