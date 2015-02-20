</div>
<!--end outer Cont-->

</div>
<!--end main Cont-->


<!--st footer Cont-->
<div id="footerCont">


	<!--st footer inner-->
    <div id="fInner">
    
    	<div id="fLeft"><!--st F left-->
        
        <!--start footer links/social-->
        <div class="links">
        <a href="http://twitter.com/conceptfour" target="_blank" class="tw"></a>
        <a href="http://www.facebook.com/pages/Concept4/199098800180310" target="_blank" class="fb"></a>
        <a href="http://www.linkedin.com/company/concept4" target="_blank" class="in"></a>
        <a href="http://www.concept4.com/feed/rss/" target="_blank" class="rss"></a>
        <a href="http://www.addthis.com/bookmark.php" class="addthis_button" style="display:block; width:25px; height:25px; display:inline-block; margin-right:10px;"><img src="http://www.concept4.com/wp-content/themes/c42012/images/share_up.png" onmouseover="this.src='http://www.concept4.com/wp-content/themes/c42012/images/share_over.png'" onmouseout="this.src='http://www.concept4.com/wp-content/themes/c42012/images/share_up.png'" width="25" /></a>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
        </div>
        <!--end footer links/social-->
        
        <div class="fC">&copy; Concept4 Creative Limited | <a href="<?php bloginfo('url'); ?>/site-map/">Sitemap</a> | <a href="<?php bloginfo('url'); ?>/contact/">Contact</a> | <a href="http://support.concept4.com" target="_blank">Support</a></div>
        
        </div><!--end F left-->
        
        <div id="fRight"><!--st F right-->
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/certs.jpg" width="270" height="64" alt="Investors in people, Quality Assured" />
        </div><!--end F right-->
        
    </div>
    <!--end footer inner-->

</div>
<!--end footer Cont-->
<!--start banner function-->
<script type="text/javascript">
		jQuery(document).ready(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				crossfade: true,
				hoverPause: true,
				pagination: true,
				generatePagination: true
			});
		});
</script>

<!--footer no scroll-->

<!--end banner function-->
<script src="<?php bloginfo('template_directory'); ?>/JS/cookie.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/JS/jquery-cookie.js"></script>
<script>
$(document).ready(function () {
	// activate cookie cutter
    $.cookieCuttr({
    cookieAnalytics: false,
    	 cookieMessage: "This website uses cookies to improve your user experience. We'll assume you're ok with this, but you can opt-out if you wish. <a href='{{cookiePolicyLink}}' title='read about our cookies'>cookies policy</a>.",
    	 cookiePolicyLink: 'http://www.concept4.com/cookies/'
    });
});      

  
</script>
<script type="text/javascript">
var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5327771-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</div>
<!--end holder-->
<?php wp_footer(); ?>
</body>
</html>
