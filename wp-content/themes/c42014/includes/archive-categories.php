<span>Choose your sector:</span>
<ul class="mcol2">
				  <?php
                    $data = wp_list_categories('echo=0&title_li=&depth=1&hide_empty=1&include=14,15,16');
                    $data = preg_replace('/\<\/a\> \((.*)\)/',' <span>$1</span></a>',$data);
                    echo $data;
                  ?>
            </ul>