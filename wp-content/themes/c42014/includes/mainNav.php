<!--st nav & search-->
            <div id="navSearch">
            
            	<!--st main nav-->
                <div id="nav">

			<!--MOBILE menu trigger-->
                	<a href="#mobile" class="menuTrigger">Menu</a>
                        <!--/MOBILE menu trigger-->

                	<?php wp_nav_menu(array('menu' => 'Main')); ?>
                </div>
                <!--end main nav-->
                
                <!--st search bar-->
                <div class="search"><?php include(TEMPLATEPATH . '/searchform.php'); ?></div>
                <!--end search bar-->
            
            </div>
            <!--end nav & search-->
       
        </div>
        <!--end inner Cont-->
        
        <!--Mobile seperation border full width-->
        <div class="mobileSepBorder"></div>
        <!--/Mobile seperation border full width-->