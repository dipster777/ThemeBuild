<?php
/**
*@package wordpress
*@subpackage Concept4 2012
*/
/*
Template Name: Contact Small
*/
get_header(); ?>

	<?php include(TEMPLATEPATH . '/includes/mainNav.php'); ?>

    <!--st 2nd inner-->
<div class="mainContInner">
<!-- ClickTale Top part -->
<script type="text/javascript">
var WRInitTime=(new Date()).getTime();
</script>
<!-- ClickTale end of Top part -->

<link rel="stylesheet" href="/js/QapTcha.jquery.css" type="text/css" />
<script type="text/javascript">

	function sendForm()
	{
		
		
		var name = document.getElementById('name').value;
		
var organisation = document.getElementById('organisation').value;
var jbtitle = document.getElementById('jbtitle').value;
var telephone = document.getElementById('telephone').value;
var email = document.getElementById('email').value;
var found = document.getElementById('foundus').selectedIndex;
if (found !=0 && name !="" &&  organisation !="" &&  jbtitle !="" &&  telephone !="" && email !="")
{

return true;
}
else
{
alert('Please ensure all required fields are filled in');
return false;	
}     		
	}

</script>
 <style>

#cForm1 td {
    padding: 3px 15px 3px 0px;
    text-align: right;
    vertical-align: top;
}
#contactMain input.submit_enquiry {
   
    background-color: white;
    border: 1px none black;
    color: #FBAC00;
    cursor: pointer;
    height: 35px;
    width: 110px;
background:none;
text-decoration:underline;
}
#contactMain input.submit_enquiry:hover {
text-decoration:none;
	background:none;
}
input,textarea{font-size:12px;}
</style>   
    <div id="contactMain"><!--start page main column-->
<form action="/processSmall.php" onsubmit="return sendForm()" method="post">   
    <table border="1" style="font-size:11px;" cellspacing="0" cellpadding="0" id="cForm1">
  <tr>
    <td colspan="4" style="text-align:left;border:none;" class="tableBdr"><span class="contactLink" style="margin-bottom:10px;margin-left:0px;">Enquiry Form</span></td>
    </tr>

  <tr>
    <td align="left" style="text-align:left;">Name*<br />
      <input type="text" name="name" id="name" class="field" /></td>
    <td colspan="2" rowspan="6" align="left" style="text-align:left;" id="noMargin">    
	Enquiry*<br />
	<textarea name="enquiry" id="enquiry" cols="30" rows="8" class="enquiry" style="height:260px;"></textarea>
    </td>
    </tr>

  <tr>
    <td align="left" style="text-align:left;">Organisation*<br />      <input type="text" name="organisation" id="organisation" class="field" /></td>
    </tr>
  <tr>
    <td align="left" style="text-align:left;">Job Title*<br />      <input type="text" name="jbtitle" id="jbtitle" class="field" /></td>
    </tr>
 <tr>
    <td align="left" style="text-align:left;">Email*<br /><input type="text" name="email" id="email" class="field" /></td>
    </tr>
 
  <tr>
    <td align="left" style="text-align:left;">Telephone*<br /><label for="telephone"><input type="text" name="telephone" id="telephone" class="field" /></td>
    </tr>
 
  <tr>
    <td align="left" style="text-align:left;">How did you find out about Concept4?*<br />
     <select name="found_us" id="foundus">
    <option selected="selected" value="NA">Please select</option>
    <option value="Google">Google</option>
    <option value="Facebook">Facebook</option>
    <option value="Twitter">Twitter</option>
  <option value="LinkedIn">LinkedIn</option>

    <option value="Electronic newsletter">Electronic newsletter</option>
    <option value="Mailing">Mailing</option>
    <option value="Recommendation">Recommendation</option>
    <option value="BETT 2012">BETT 2012</option>
    <option value="Conference">Conference</option>
    <option value="Other">Other</option>
    </select></td>
    </tr>

  
  <tr>
 <td align="left" style="text-align:left;">Offer Code<br /><label for="discount"><input type="text" name="discount" id="discount" class="field" /><br /><input type="hidden" name="infoRequested" id="infoRequested" />
    <input name="" type="submit" value="Submit Enquiry" class="submit_enquiry" style="font-size:16px;text-indent:0px;margin-top:5px;" /></td>

   <td align="left"  style="text-align:left;" id="noMargin">Verification*<br />
 <div style="text-align:left;font-size:11px;"><div class="QapTcha"></div></div></td>
  </tr>
<tr>
    <td align="left" style="height:30px;padding:0px;margin:0px; line-height:30px; padding-right:0; margin:0;text-align:left; "></td>

  </tr>
</table>
</form> 
   
    </div><!--end page main column-->
    
    <div id="contactSide">
    	<div class="contactRight_hdr" style="border:none;margin-bottom:0px;padding-bottom:0px;"><span class="contactLink" style="margin-bottom:10px;border:none;">Contact Details</span></div>
        <div class="contactRight_bx" style="padding-top:0px;">
        	<p>
            <strong>Northern Office</strong><br />
            Alexander House<br /> 
            38 Churchill Way<br /> 
            Lomeshaye Estate<br /> 
            Nelson<br /> 
            Lancashire BB9 6RT</p>
            <p>
            Tel: 01282 612222
            </p>
            <form action="http://maps.google.co.uk/maps?hl=en" method="get" target="_blank"> 
            <input style="color: #6C6C6C;width:167px;
    float: left;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 11px;" name="saddr" type="text" onblur="if (this.value == '') {this.value = 'Enter postcode for directions';}" onfocus="if (this.value == 'Enter postcode for directions') {this.value = '';}" value="Enter postcode for directions" onclick="this.value='';" />
	  <input name="daddr" type="hidden" value="38 Churchill Way,BB9 6RT" />
            <input name="" type="submit" class="submit" />
            </form>
        </div>
        
        <div class="contactRight_bx">
        	<p>
            <strong>Southern Office</strong><br />
            Argyll House<br /> 
            All Saints Passage<br /> 
            London SW18 1EP</p>
            <p>
            Tel: 020 3056 1166
            </p>
            <form action="http://maps.google.co.uk/maps?hl=en" method="get" target="_blank"> 
            <input style="color: #6C6C6C;width:167px;
    float: left;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 11px;" name="saddr" type="text" onblur="if (this.value == '') {this.value = 'Enter postcode for directions';}" onfocus="if (this.value == 'Enter postcode for directions') {this.value = '';}" value="Enter postcode for directions" />
	  <input name="daddr" type="hidden" value="All Saints Passage,London SW18 1EP" />
            <input name="" type="submit" class="submit" />
            </form>
        </div>
       <div class="contactRight_e">Email: <a href="mailto:info@concept4.com">info@concept4.com</a></div>
        
    </div>
    
    </div>


<!--THESE REALLY NEED TO BE CALLED IN functions.php AND THEN THE JS FILES PLACED WITHIN THE THEMES JS FOLDER!!! -->
<script type="text/javascript" src="/js/jquery-ui12.js"></script>
<script type="text/javascript" src="/js/jquery.ui.touch12.js"></script>
<script type="text/javascript" src="/js/QapTcha.jquery.js"></script>





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
    <?php get_footer(); ?>