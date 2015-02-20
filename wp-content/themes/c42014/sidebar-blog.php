<div id="blogRight">
<div class="return left"><a href="javascript:history.back()" class="back"></a>Back</div>
<?php 
if(in_category('1') ==0)
{
?>
<div class="fldUn">Filed under</div>

        <ul>
        <li><?php the_category('') ?></li>
        </ul>
<?php 
}
?>
</div>
