<h1 style="margin-top:20px;">Search results for: <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); ?></h1>
    
    
<ul class="srcList">    
    <?php if (have_posts()) : ?>
                 <?php while (have_posts()) : the_post(); ?>
                 <li>
                 <div <?php post_class() ?> id="post-<?php the_ID(); ?>"></div>
                  
                  
                  <div class="resultList">          
                 <div class="searchTitle"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
                 <div class="searchtxt"><?php echo wp_trim_words( get_the_content(), 50 ); ?></div>
                 <div class="resultMore"><a href="<?php the_permalink(); ?>"><?php _e('Read more'); ?></a></div>              
				</div>
                </li>
                	
                
                 <?php endwhile; ?>
                 <?php else : ?>          	
                 <?php endif; ?>  
                 </ul>