<span>Choose your sector:</span>           
            <ul class="mcol2">
				  <?php
				  
				  // cat 18 is Portfolio, Independent Schools
				  // cat 66 is Portfolio, Schools and Academies
				  // cat 21 is Portfolio, Colleges
				  // cat 22 is Portfolio, Health
				  // cat 23 is Portfolio, Commecial/B2B
                    $data = wp_list_categories('orderby=order&echo=0&title_li=&depth=1&hide_empty=0&include=18,66,21,22,23');//CHANGE hide_empty to 1
                    $data = preg_replace('/\<\/a\> \((.*)\)/',' <span>$1</span></a>',$data);
                    echo $data;
                  ?>
            </ul>