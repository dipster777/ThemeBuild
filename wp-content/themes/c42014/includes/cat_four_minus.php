    <script type="text/javascript">
	function showOverview(obj) {
	$('.articleOver').css('display','none');			 
	$(obj).find('.articleOver').css('display','block');			 
	}			 
		function hideOverview()
		{
	$('.articleOver').css('display','none');			 
	}
	</script>

 
 <div id="carouselContLess">   
    
		
	<ul>
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<li>
   		<div class="article" onmouseover="showOverview(this)"><?php the_post_thumbnail('medium');?><!--str article box-->
                <div class="articleOver" onmouseout="hideOverview()" onclick="window.location='<?php the_permalink(); ?>'">
        <div class="projectContent"><!--start article hover content-->
        <div class="projectHdr"><?php the_title(); ?></div>
        <div class="articleMore"><a href="<?php the_permalink(); ?>"><?php _e('Read More...'); ?></a></div>
        </div><!--end article hover content-->
        </div>   	
        </div><!--en article box-->
        </li><!--end article item-->
                     <?php endwhile; ?>
                            
	<?php else : ?>
     </ul>    
        

                            	
	<h1 class="heading">Not Found</h1>
	<p class="notFound">Sorry, but what you are looking for does not exist.</p>
                                
<?php endif; ?>
</div>
<!-- cat_four_minus.php = this template file will display if the project post count is 3 or less-->