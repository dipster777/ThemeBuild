 <!--st home sidebar-->
    <div id="homeRight">
    	<h2>Latest news</h2>
        <!--st hBlog-->
        <div class="hBlog">
        
        <?php
		$sticky = get_option('sticky_posts');
		rsort( $sticky );
		$sticky = array_slice( $sticky, 0, 1);
        query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) );
		?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        	<!--st sticky single-->
        	<div class="sticky">
            	<div class="stickyThumb"><?php the_post_thumbnail('thumbnail'); ?></div>
                
                <div class="stickyInfo">
                <div class="stickyDate"><?php the_date(); ?></div>
                <div class="stickyTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                <div class="stickyExcerpt"><?php the_excerpt(); ?></div>
                </div>
                
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            
            
            <!--end sticky single-->
            <!--st 2 item list-->
            <div class="nList">
            <ul>
            <?php
				$args = array(
							  'category__in'=>array(13),
							  'showposts'=>2,
							  'post__not_in'=>get_option('sticky_posts'),
							  'caller_get_posts'=>1
							  );
				$my_query = new WP_Query($args);
				if($my_query->have_posts()) {
				while($my_query->have_posts()) : $my_query->the_post(); ?>
            
            <li>
            <div class="newsTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            
            </ul>
            <?php endwhile; } ?>
            </div>
            <!--end 2 item list-->
        </div>
        <!--end hBlog-->
    </div>
    <!--end home sidebar-->