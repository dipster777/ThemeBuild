

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


 
 <div id="carouselCont" class="bio">   
    
		<div id="my-carousel-3" class="carousel module">
	<ul>
            <?php query_posts('cat=64&orderby=date&order=ASC'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<li>
   		<div class="article" onmouseover="showOverview(this)"><?php the_post_thumbnail('medium');?><!--str article box-->
                <div class="articleOver" onmouseout="hideOverview()" onclick="window.location='<?php the_permalink(); ?>'">
        <div class="projectContent"><!--start article hover content-->
        <div class="staffHdr"><?php the_title(); ?></div>
        <div class="staffTitle"><?php the_field('position'); ?></div>
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
	<p class="notFound">Sorry, but what you are looking for does not exsist.</p>
                                
<?php endif; ?>
</div>