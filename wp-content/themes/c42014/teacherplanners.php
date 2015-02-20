
  
<div class="servicesAccInnerRght">
	<ul class="servicesListing">
		
        
        
        
        <?php query_posts('page_id=4854');
if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <li>
	<div onclick="window.location='<?php the_permalink(); ?>'" style="cursor:hand;cursor:pointer;" class="servicesBxs"><?php the_post_thumbnail('featured-thumb');"<img class=\"servicesThumb\"src=\"".$thumb."\" />"; ?>
    <div class="servicesTxt">
    <div class="servicesHdr" style="font-size:20px;"><?php the_title(); ?></div>
    <div class="servicesExcerpt"><?php echo get_post_meta($post->ID, 'presentation box', true); ?></div>
    <p class="readMS"><a href="<?php the_permalink(); ?>">Read More</a></p>
    </div>
    <?php endwhile; ?>
    <?php endif; ?> 
    </div>
    </li>

    <?php query_posts('page_id=4862');
			if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?> 
        	<li >
    		<div onclick="window.location='<?php the_permalink(); ?>'" style="cursor:hand;cursor:pointer;" class="servicesBxs"><?php the_post_thumbnail('services-thumb');"<img class=\"servicesThumb\"src=\"".$thumb."\" />"; ?>
            <div class="servicesTxt">
    		<div class="servicesHdr" style="font-size:20px;"><?php the_title(); ?></div>
    		<div class="servicesExcerpt"><?php echo get_post_meta($post->ID, 'presentation box', true); ?></div>
            <p class="readMS"><a href="<?php the_permalink(); ?>">Read More</a></p>
            </div>
            <?php endwhile; ?>
    		<?php endif; ?> 
            </div>
            </li>
    
		<?php query_posts('page_id=4860');
		if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>    
		<li style="margin-right:0px;">
    	<div onclick="window.location='<?php the_permalink(); ?>'" style="cursor:hand;cursor:pointer;" class="servicesBxs"><?php the_post_thumbnail('services-thumb');"<img class=\"servicesThumb\"src=\"".$thumb."\" />"; ?>
        <div class="servicesTxt">
    	<div class="servicesHdr" style="font-size:20px;"><?php the_title(); ?></div>
    	<div class="servicesExcerpt"><?php echo get_post_meta($post->ID, 'presentation box', true); ?></div>
    	<p class="readMS"><a href="<?php the_permalink(); ?>">Read More</a></p>
    	</div>
     	<?php endwhile; ?>
    	<?php endif; ?> 
        </div>
        </li>
        

			
 
 

            
       </ul>
  </div>