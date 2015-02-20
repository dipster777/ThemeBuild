<?php
/**
*@package wordpress
*@subpackage Concept4 2012
*/
/*
Template Name: Contact-Mobile
*/
?>

<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<link rel='stylesheet' type='text/css' media="all" href='http://www.concept4.com/wp-content/themes/c42012/app-style.css' />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>

</head>
<body>
    <!--st 2nd inner-->
<div class="mainContInner">


<script>
function sendForm()
{
		var name = document.getElementById('name').value;
		var organisation = document.getElementById('organisation').value;
		var email = document.getElementById('email').value;
		var telephone = document.getElementById('telephone').value;
		var enquiry = document.getElementById('enquiry').value;

		var found = document.getElementById('foundus').selectedIndex;
		var foundValue = document.getElementById('foundus').value;


		if (name !="" && organisation !="" && telephone !="" && enquiry !="" && email !="")
		{


			postvars = {"name":name,"organisation":organisation,"email":email,"telephone":telephone,found_us:foundValue,enquiry:enquiry};


			$.ajax({
				type:'POST',
				url: "http://www.concept4.com/process-mobile.php",
				dataType:'json',
				data:postvars,
				success: function(d)
				{
					if (d.SUCCESS == 1)
					{
						$("#frmForm")[0].reset();
						window.location = 'alert://'+encodeURIComponent("Success")+'/'+encodeURIComponent(d.MSG);
					}
					else
					{

						window.location = 'alert://'+encodeURIComponent("Error on Form")+'/'+encodeURIComponent(d.MSG);
					}
				}
			});
		}
		else
		{
			window.location = 'alert://'+encodeURIComponent("Error on Form")+'/'+encodeURIComponent("Please ensure all required fields are populated.");
			return false;	
		} 
}
</script> 

    

<style>
* {font-family:Arial;font-size:12px;}
p {padding:0px;margin-top:10px;margin-bottom:10px;}
input,textarea,select {width:100%}
input[type=text] { padding:8px;border:1px solid black;font-family:arial;}
textarea {padding:8px;border:1px solid black;font-family:arial;}
</style>

<?php 


if (stripos($_SERVER["HTTP_USER_AGENT"], "iPad") !== false) {
?>
<style>
* {font-size:18px;}
p {padding:0px;margin-top:20px;margin-bottom:20px;}
</style>

<?php } ?>


<form id="frmForm" action="/process-mobile.php" method="post">   





<div <?php if (stripos($_SERVER["HTTP_USER_AGENT"], "iPad") !== false) {?>style="padding:20px;"<?php } ?>>

    <table style="width:100%" cellspacing="0" cellpadding="0" id="cForm">
<tr>
    <td><p <?php 


if (stripos($_SERVER["HTTP_USER_AGENT"], "iPad") !== false) {
?>style="margin-top:0px;"<?php } ?>>Name*</p>
<input type="text" name="name" id="name" class="field" />

    </td>
    </tr>
  <tr>
    <td><p>Organisation*</p>
      <input type="text" name="organisation" id="organisation" class="field" /></td>
    </tr>

  <tr>
    <td><p>Email*</p>
      <input type="text" name="email" id="email" class="field" /></td>
    <td>
    </td>
    </tr>
  <tr>
    <td><p>Telephone*</p>
      <input type="text" name="telephone" id="telephone" class="field" /></td>
    <td>
    </td>
    </tr>

  <tr>
    <td><p>How did you find out about Concept4?</p>
     <select name="found_us" id="foundus" style='color:white;'>
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
    </select>
</td>
    </tr>

<tr>
    <td><p>Enquiry*</p><textarea name="enquiry" id="enquiry" cols="30" <?php if (stripos($_SERVER["HTTP_USER_AGENT"], "iPad") !== false) {?>rows="8"<?php } else {  ?>rows="4"<?php } ?> class="enquiry"></textarea>
    </td>
</tr>

  <tr>
    <td <?php if (stripos($_SERVER["HTTP_USER_AGENT"], "iPad") !== false) {?>style="padding-top:20px;"<?php } else {  ?>style="padding-top:10px;"<?php } ?>>
        <div style='padding:10px;background:#FBAC00;color:white;width:50px;text-align:center' onclick="sendForm()">
		SEND
        </div>
   </td>
  </tr>
</table>
</form> 
</div>
  </body>
</html>
    