

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/JS/bio-slider/jquery.carouFredSel-6.1.0.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/JS/bio-slider/easing.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			
		    $('#my-carousel-3').carousel({
				itemsPerPage: 1,
				itemsPerTransition: 1,
				easing: 'easeInBack',
				speed: 'slow',
				noOfRows: 1
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
	
        <?php if ( have_posts() ) : ?>

	<?php $looppos=1; ?>
<ul>
	
	<?php while ( have_posts() ) : the_post(); ?>

	<?php if($looppos ==1){ ?>
		<li style="width:990px;height:660px;"><div style="width:990px;height:660px;">
	<?php $looppos=1; } ?>
	
    	<div style=" float: left;
    height: 285px;
    list-style-type: none;
    margin-bottom: 30px;
    margin-left: 0;
    width: 330px;">
   		<div class="article" onmouseover="showOverview(this)"><?php the_post_thumbnail('medium');?><!--str article box-->
                <div class="articleOver" onmouseout="hideOverview()" onclick="window.location='<?php the_permalink(); ?>'">
        <div class="projectContent"><!--start article hover content-->
        <div class="projectHdr"><?php the_title(); ?></div>
        <div class="articleMore"><a href="<?php the_permalink(); ?>"><?php _e('Read More...'); ?></a></div>
        </div><!--end article hover content-->
        </div>   	
        </div><!--en article box-->	</div>
       <!--end article item-->

	<?php $looppos=$looppos+1; if($looppos ==7){ ?>
		</div></li>
	<?php $looppos=1; } ?>

                     <?php endwhile; ?>
	<?php if($looppos !=1){ ?>
		</ul></div></li>
	<?php } ?>

		
                            </ul>   
</div>      

	<?php else : ?>

	
       

                            	
	<h1 class="heading">Not Found</h1>
	<p class="notFound">Sorry, but what you are looking for does not exist.</p>
                                
<?php endif; ?>
</div>
<!--cat_four_plus.php = this template file will display if the project post count is 4 or more, this is the original project-list.php content-->