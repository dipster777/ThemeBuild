<!--start banner images-->
<div id="banner">

<!--start slides-->
			<div id="slides">
				<!--start slides container-->
				<div class="slides_container">
                <?php $imagesscroller = get_field('ppc_banner_images'); echo str_replace("<br />","",$imagesscroller);    ?>
                </div>
				<!--end slides container-->
			<a href="#" class="prev"></a>
			<a href="#" class="next"></a>

			</div>
			<!--end slides-->

</div>
<!--end banner images-->