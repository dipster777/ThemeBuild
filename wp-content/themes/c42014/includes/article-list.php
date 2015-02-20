

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/JS/bio-slider/jquery.carouFredSel-6.1.0.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/JS/bio-slider/easing.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			
		    $('#my-carousel-3').carousel({
				itemsPerPage: 3,
				itemsPerTransition: 3,
				easing: 'easeInBack',
				speed: 'slow',
				noOfRows: 2
			});
		});
	</script>
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

 
 <div id="carouselCont">   
    
		<div id="my-carousel-3" class="carousel module">
	<ul>
            
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<li>
   		<div class="article" onmouseover="showOverview(this)"><?php the_post_thumbnail('medium');?><!--str article box-->
                <div class="articleOver" onmouseout="hideOverview()" onclick="window.location='<?php the_permalink(); ?>'">
        <div class="articleContent"><!--start article hover content-->
        <div class="articleHdr"><?php the_title(); ?></div>
        <div class="articleExcerpt"><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,52); ?></div>
        <div class="articleMore"><a href="<?php the_permalink(); ?>"><?php _e('Read More...'); ?></a></div>
        </div><!--end article hover content-->
        </div>   	
        </div><!--en article box-->
        </li><!--end article item-->
                     <?php endwhile; ?>
                            
	<?php else : ?>
     </ul>    
</div>        

                            	
	<h1 class="heading">Not Found</h1>
	<p class="notFound">Sorry, but what you are looking for does not exist.</p>
                                
<?php endif; ?>
</div>