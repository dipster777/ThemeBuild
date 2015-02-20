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
		var position = document.getElementById('position').value;
		var organisation = document.getElementById('organisation').value;
		var address = document.getElementById('address').value;
		var postcode = document.getElementById('postcode').value;
		var telephone = document.getElementById('telephone').value;
		var email = document.getElementById('email').value;
		var found = document.getElementById('foundus').selectedIndex;
		var foundValue = document.getElementById('foundus').value;


		if (found !=0 && name !="" && position !="" && organisation !="" && address !="" && postcode !="" && telephone !="" && email !="")
		{


			var infoRequested = "";

			$.each($('.infoRequested:checked'), function(index, value) {

 				if (index != 0) infoRequested = infoRequested + ",";
 				infoRequested = infoRequested + $('.infoRequested:checked').eq(index).val();


			});

			postvars = {"name":name,"position":position,"organisation":organisation,"address":address,"postcode":postcode,"telephone":telephone,"email":email,found:foundValue,infoRequested:infoRequested};


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
* {font-family:Arial;font-size:16px;}
p {padding:0px;margin-top:10px;margin-bottom:10px;}
input,textarea,select {width:100%}
input[type=text] { padding:10px;border:1px solid black;font-family:arial;}
textarea {padding:10px;border:1px solid black;font-family:arial;}
</style>


<form id="frmForm" action="/process-mobile.php" method="post">   







    <table style="width:100%" cellspacing="0" cellpadding="0" id="cForm">
<tr>
    <td><p>Name*</p>
<input type="text" name="name" id="name" class="field" />

    </td>
    </tr>
  <tr>
    <td><p>Position*</p>
      <input type="text" name="position" id="position" class="field" /></td>
    </tr>
  <tr>
    <td><p>Organisation*</p>
      <input type="text" name="organisation" id="organisation" class="field" /></td>
    </tr>
  <tr>
    <td><p>Address*</p>
      <textarea name="address" id="address" cols="30" rows="3"></textarea></td>
    </tr>
  <tr>
    <td><p>Postcode*</p>
      <input type="text" name="postcode" id="postcode" class="field" /></td>
</tr>
<tr>
    <td><p>Message</p><textarea name="enquiry" id="enquiry" cols="30" rows="4" class="enquiry"></textarea>
    </td>
    </tr>
  <tr>
    <td><p>Telephone*</p>
      <input type="text" name="telephone" id="telephone" class="field" /></td>
    <td>
    </td>
    </tr>
  <tr>
    <td><p>Email*</p>
      <input type="text" name="email" id="email" class="field" /></td>
    <td>
    </td>
    </tr>
  <tr>
    <td><p>How did you find out about Concept4?*</p>
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


<?php
 $services = explode(",","Marketing consultancy,Stakeholder engagement,Branding,Digital strategy,Creative design,Websites,Mobile apps,SEO,Social media,School Homework & Teacher Planners,College & University Diaries,Print management");

?>

  <tr>
	<td>
	<p>Please contact me with information about:</p>
	<table style='padding-bottom:20px;' cellpadding="0" cellspacing="0">
		<?php foreach($services As $service) { ?>
		<tr>
			<td valign="top" align='left' style='width:40px;padding-top:10px;padding-bottom:10px;'>
				 <input class="infoRequested" type="checkbox" style='width:20px;height:20px;padding:0px;margin:0px;' align='left' value="<?php echo $service; ?>">
			</td>
			<td valign="top" style="padding-top:10px;padding-bottom:10px;">
				<?php echo $service; ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	</td>

  </tr>
  <tr>
    <td>
        <div style='padding:10px;background:#FBAC00;color:white;width:50px;text-align:center' onclick="sendForm()">
		SEND
        </div>
   </td>
  </tr>
</table>
</form> 
  </body>
</html>
    