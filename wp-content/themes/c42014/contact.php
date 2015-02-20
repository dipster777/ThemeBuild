<?php
/**
*@package wordpress
*@subpackage Concept4 2012
*/
/*
Template Name: Contact
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

<script type="text/javascript">

	function sendForm()
	{
		var infoReq="";
		
		if(document.getElementById('brand').checked){
			var infoReq=infoReq + "Marketing consultancy";
			
		}

		if(document.getElementById('newsletters').checked){
			var infoReq=infoReq + ", Stakeholder engagement";
			
		}


		if(document.getElementById('prospectus').checked){
			var infoReq=infoReq + " Branding";
			
		}

		if(document.getElementById('student').checked){
			var infoReq=infoReq + ", Digital strategy";
			
		}

		if(document.getElementById('display').checked){
			var infoReq=infoReq + ", Creative design";
			
		}

		if(document.getElementById('website').checked){
			var infoReq=infoReq + ", Websites";
			
		}

		if(document.getElementById('advertising').checked){
			var infoReq=infoReq + ", Mobile apps";
			
		}

		if(document.getElementById('DVD').checked){
			var infoReq=infoReq + ", SEO";
			
		}

		if(document.getElementById('apps').checked){
			var infoReq=infoReq + ", Social media";
			
		}

		if(document.getElementById('other').checked){
			var infoReq=infoReq + ", Other";
			
		}

if(document.getElementById('plan').checked){
			var infoReq=infoReq + ", School Homework & Teacher Planners";
			
		}

		if(document.getElementById('plan2').checked){
			var infoReq=infoReq + ", College & University Diaries";
			
		}
if(document.getElementById('plan3').checked){
			var infoReq=infoReq + ", Print Management";
			
		}
		
		document.getElementById('infoRequested').value=infoReq;	
		
		var name = document.getElementById('name').value;
		var position = document.getElementById('position').value;
var organisation = document.getElementById('organisation').value;
var address = document.getElementById('address').value;
var postcode = document.getElementById('postcode').value;
var telephone = document.getElementById('telephone').value;
var email = document.getElementById('email').value;
var found = document.getElementById('foundus').selectedIndex;
if (found !=0 && name !="" && position !="" && organisation !="" && address !="" && postcode !="" && telephone !="" && email !="")
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
    
    <div id="contactMain"><!--start page main column-->
<form action="/process_new.php" onsubmit="return sendForm()" method="post">   
    <table width="670" border="1" style="font-size:11px;" cellspacing="0" cellpadding="0" id="cForm">
  <tr>
    <td colspan="4" style="text-align:left;" class="tableBdr"><span class="contactLink" style="margin-bottom:10px;margin-left:-6px;">your enquiry</span></td>
    </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
  <tr>
    <td>Name*</td>
    <td><label for="name"></label>
      <input type="text" name="name" id="name" class="field" /></td>
    <td colspan="2" rowspan="4" align="right">    

<!--other form-->   
    <table width="380" border="0" cellspacing="0" cellpadding="0" id="fInnerTbl" style="margin-top:-10px;font-size:11px;">
  <tr>
    <td colspan="4">Please contact me with information about:</td>
    </tr>
  <tr>
    <td style="line-height:25px;padding:0px;"><input type="checkbox" name="brand" id="brand" value="brand development" />
      <label for="brand development"></label></td>
    <td style="line-height:25px;padding:0px;">Marketing consultancy</td>
    <td style="line-height:25px;padding:0px;"><input type="checkbox" name="newsletters" id="newsletters" value="newsletters/magazines" />
      <label for="newsletters/magazines"></label></td>
    <td style="line-height:25px;padding:0px;">Stakeholder engagement</td>
  </tr>
  <tr>
    <td style="line-height:25px;padding:0px;"><input type="checkbox" name="prospectus" id="prospectus" value="prospectus design" />
      <label for="prospectus design"></label></td>
    <td style="line-height:25px;padding:0px;">Branding</td>
    <td style="line-height:25px;padding:0px;"><input type="checkbox" name="student" id="student" value="student/homework planners" />
      <label for="student/homework planners"></label></td>
    <td style="line-height:25px;padding:0px;">Digital strategy</td>
  </tr>
  <tr>
    <td style="line-height:25px;padding:0px;"><input type="checkbox" name="display" id="display" value="display systems" />
      <label for="display systems"></label></td>
    <td style="line-height:25px;padding:0px;">Creative design</td>
    <td style="line-height:25px;padding:0px;"><input type="checkbox" name="website" id="website" value="website design" />
      <label for="website design"></label></td>
    <td style="line-height:25px;padding:0px;">Websites</td>
  </tr>
  <tr>
    <td style="line-height:25px;padding:0px;"><input type="checkbox" name="advertising" id="advertising" value="advertising" />
      <label for="advertising"></label></td>
    <td style="line-height:25px;padding:0px;">Mobile apps</td>
    <td style="line-height:25px;padding:0px;"><input type="checkbox" name="dvd" id="DVD" value="DVD/new media" />
      <label for="DVD/new media"></label></td>
    <td style="line-height:25px;padding:0px;">SEO</td>
  </tr>
  <tr>
    <td style="line-height:25px;padding:0px;"><input type="checkbox" name="checkbox" id="apps" value="apps" />
      <label for="apps"></label></td>
    <td style="line-height:25px;padding:0px;">Social media</td>
    <td style="line-height:25px;padding:0px;"><input type="checkbox" name="checkbox" id="other" value="other" />
      <label for="other"></label></td>
    <td style="line-height:25px;padding:0px;">Other</td>
  </tr>
<tr>
    <td style="line-height:25px;padding:0px;"><input type="checkbox" name="checkbox" id="plan" value="plan" />
      <label for="apps"></label></td>
    <td style="line-height:25px;padding:0px;">School Homework & Teacher Planners</td>
    <td style="line-height:25px;padding:0px;"><input type="checkbox" name="checkbox" id="plan2" value="plan2" />
      <label for="other"></label></td>
    <td style="line-height:25px;padding:0px;">College & University Diaries</td>
  </tr>
<tr>
    <td style="line-height:25px;padding:0px;"><input type="checkbox" name="checkbox" id="plan3" value="plan3" />
      <label for="apps"></label></td>
    <td style="line-height:25px;padding:0px;">Print management</td>
    <td style="line-height:25px;padding:0px;">
      </td>
    <td style="line-height:25px;padding:0px;"></td>
  </tr>
</table>    
<!--other form-->    
    </td>
    </tr>
  <tr>
    <td>Position*</td>
    <td><label for="position"></label>
      <input type="text" name="position" id="position" class="field" /></td>
    </tr>
  <tr>
    <td>Organisation*</td>
    <td><label for="organisation"></label>
      <input type="text" name="organisation" id="organisation" class="field" /></td>
    </tr>
  <tr>
    <td>Address*</td>
    <td><label for="address"></label>
      <textarea name="address" id="address" cols="30" rows="3"></textarea></td>
    </tr>
  <tr>
    <td>Postcode*</td>
    <td><label for="postcode"></label>
      <input type="text" name="postcode" id="postcode" class="field" /></td>
    <td align="right">Message
    </td>
    <td rowspan="3"><textarea name="enquiry" id="enquiry" cols="30" rows="4" class="enquiry"></textarea>
    </td>
    </tr>
  <tr>
    <td>Telephone*</td>
    <td><label for="telephone"></label>
      <input type="text" name="telephone" id="telephone" class="field" /></td>
    <td>
    </td>
    </tr>
  <tr>
    <td>Email*</td>
    <td><label for="email"></label>
      <input type="text" name="email" id="email" class="field" /></td>
    <td>
    </td>
    </tr>
  <tr>
    <td >How did you find out about Concept4?*</td>
    <td style="text-align:left;vertical-align:middle">
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
    <td colspan="2" class="tableBdr">&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right" style="height:30px; line-height:30px; padding-right:0; margin:0;"><input type="hidden" name="infoRequested" id="infoRequested" />
    <input name="" type="submit" value="submit enquiry" class="submit_enquiry" /></td>
  </tr>
  <tr>
    <td colspan="4" class="tableBdrT">&nbsp;</td>
    </tr>
</table>
</form> 
   
    </div><!--end page main column-->
    
    <div id="contactSide">
    	<div class="contactRight_hdr"><span class="contactLink" style="margin-bottom:10px;">contact</span></div>
        <div class="contactRight_bx">
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