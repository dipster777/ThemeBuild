<?php 

if ($_SERVER["REQUEST_URI"] =="/category/portfolio/")
{ 
}
else
{
if ( is_category(array(68,69,70,71,72,6))) { //subs of cat 18 - Portfolio, Independent Schools
echo '<div class="cat_sector">';
echo '<span>Filter by:</span>';
echo '<ul class="mcol3">';
$data = wp_list_categories('orderby=order&echo=0&title_li=&depth=1&hide_empty=0&include=68,69,70,71,72,6');//CHANGE hide_empty to 1
$data = preg_replace('/\<\/a\> \((.*)\)/',' <span>$1</span></a>',$data);
echo $data;
echo '</ul>';
echo '</div>';
}elseif( is_category(array(17))) { //subs of cat 66 - Portfolio, Schools and Academies

}elseif( is_category(array(73,74,75,76,77,78))) { //subs of cat 66 - Portfolio, Schools and Academies
echo '<div class="cat_sector">';
echo '<span>Filter by:</span>';
echo '<ul class="mcol3">';
$data = wp_list_categories('orderby=order&echo=0&title_li=&depth=1&hide_empty=0&include=73,74,75,76,77,78');//CHANGE hide_empty to 1
$data = preg_replace('/\<\/a\> \((.*)\)/',' <span>$1</span></a>',$data);
echo $data;
echo '</ul>';
echo '</div>';
}elseif( is_category(array(79,80,81,82,83,84))) { //subs of cat 21 - Portfolio, Colleges
echo '<div class="cat_sector">';
echo '<span>Filter by:</span>';
echo '<ul class="mcol3">';
$data = wp_list_categories('orderby=order&echo=0&title_li=&depth=1&hide_empty=0&include=79,80,81,82,83,84');//CHANGE hide_empty to 1
$data = preg_replace('/\<\/a\> \((.*)\)/',' <span>$1</span></a>',$data);
echo $data;
echo '</ul>';
echo '</div>';
}elseif( is_category(array(85,86,87,88,89,90))) { //subs of cat 22 - Portfolio, Health
echo '<div class="cat_sector">';
echo '<span>Filter by:</span>';
echo '<ul class="mcol3">';
$data = wp_list_categories('orderby=order&echo=0&title_li=&depth=1&hide_empty=0&include=85,86,87,88,89,90');//CHANGE hide_empty to 1
$data = preg_replace('/\<\/a\> \((.*)\)/',' <span>$1</span></a>',$data);
echo $data;
echo '</ul>';
echo '</div>';
}elseif( is_category(array(91,92,93,94,95,96))) { //subs of cat 23 - Portfolio, Commercial/B2B
echo '<div class="cat_sector">';
echo '<span>Filter by:</span>';
echo '<ul class="mcol3">';
$data = wp_list_categories('orderby=order&echo=0&title_li=&depth=1&hide_empty=0&include=91,92,93,94,95,96');//CHANGE hide_empty to 1
$data = preg_replace('/\<\/a\> \((.*)\)/',' <span>$1</span></a>',$data);
echo $data;
echo '</ul>';
echo '</div>';
}
}
?>