</div>
<!--end outer Cont-->

</div>
<!--end main Cont-->


<!--st footer Cont-->
<footer>


	<!--st footer inner-->
    <div id="fInner">
    
    	<div id="fLeft"><!--st F left-->
        
        <!--start footer links/social-->
        <div class="links">
        <a href="http://twitter.com/conceptfour" rel="nofollow" target="_blank" class="tw"></a>
        <a href="http://www.facebook.com/Concept4UK" rel="nofollow" target="_blank" class="fb"></a>
        <a href="http://www.linkedin.com/company/concept4" rel="nofollow" target="_blank" class="in"></a>
        <a href="http://www.concept4.com/feed/rss/" target="_blank" class="rss"></a>
        <a href="http://www.addthis.com/bookmark.php" rel="nofollow" class="addthis_button" style="width:25px; height:25px; display:inline-block; margin-right:10px;"><img src="http://www.concept4.com/wp-content/themes/c42012/images/share_up.png" onmouseover="this.src='http://www.concept4.com/wp-content/themes/c42012/images/share_over.png'" onmouseout="this.src='http://www.concept4.com/wp-content/themes/c42012/images/share_up.png'" width="25" alt="share" /></a>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
        </div>
        <!--end footer links/social-->
        
        <div class="fC">&copy; Concept4 Creative Limited <span class="firstDiv">|</span> <span class="fLinks"><a href="<?php bloginfo('url'); ?>/site-map/">Sitemap</a> | <a href="<?php bloginfo('url'); ?>/contact">Contact</a> | <a href="http://support.concept4.com" rel="nofollow" target="_blank">Support</a></span></div>
        
        </div><!--end F left-->
        
        <div id="fRight"><!--st F right-->
        <div id="googlepart"><a href="https://www.google.com/partners/#a_profile;idtf=2652891558" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-partner-logo.jpg"></a></div>
        <img class="proSkills" src="<?php bloginfo('stylesheet_directory'); ?>/images/pro-skills-print-it.jpg" width="66" height="63" alt="Pro Skills" />
        <img class="careersAcad" src="<?php bloginfo('stylesheet_directory'); ?>/images/career_academies_UK.jpg" width="97" height="63" alt="Career Academies UK" />
        <img class="inp" src="<?php bloginfo('stylesheet_directory'); ?>/images/investors_in_people.jpg" width="103" height="63" alt="Investors in people" />
        <img class="qualAssured" src="<?php bloginfo('stylesheet_directory'); ?>/images/quality_assured.jpg" width="151" height="63" alt="Quality Assured" />
        </div><!--end F right-->
        
    </div>
    <!--end footer inner-->

</footer>
<!--end footer Cont-->



<!--====================== MOBILE MENU =======================-->
<div id="mobileMenu">
<div id="search"><?php include(TEMPLATEPATH . '/searchform.php'); ?></div>
	
    <nav role="mobileMenu" id="mobile">
    	<?php wp_nav_menu(array('menu' => 'Sitemap')); ?>
    </nav>
    
</div>
<!--====================== MOBILE MENU =======================-->





<?php wp_footer(); ?>

<!--start banner function-->
<script type="text/javascript">
		(function($) {
$('#mobile').mmenu({
zposition: 'front',
});
})( jQuery );
</script>


<!--start banner function-->
<script type="text/javascript">
		jQuery(document).ready(function(){
			$("#slides").slidesjs();
		});
</script>
<!--end banner function-->



</div>
<!--end holder-->


<!-- ClickTale Bottom part -->

<script type='text/javascript'>
// The ClickTale Balkan Tracking Code may be programmatically customized using hooks:
// 
//   function ClickTalePreRecordingHook() { /* place your customized code here */  }
//
// For details about ClickTale hooks, please consult the wiki page http://wiki.clicktale.com/Article/Customizing_code_version_2

document.write(unescape("%3Cscript%20src='"+
(document.location.protocol=='https:'?
"https://clicktalecdn.sslcs.cdngc.net/www02/ptc/2b93457a-0832-434b-b31b-4c1d6a4f2732.js":
"http://cdn.clicktale.net/www02/ptc/2b93457a-0832-434b-b31b-4c1d6a4f2732.js")+"'%20type='text/javascript'%3E%3C/script%3E"));
</script>

<!-- ClickTale end of Bottom part -->
  

</body>
</html>