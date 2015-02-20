<?php
	var_dump($_REQUEST);


$to = "geoffboult@ntlworld.com";
$subject = "Contact Enquiry";
$email = "geoffboult@ntlworld.com";

$message = $message."Name:".$_REQUEST['name']."/n" ;
$message = $message."Position:".$_REQUEST['position']."/n" ;
$message = $message."Organisation:".$_REQUEST['organisation']."/n" ;
$message = $message."Address:".$_REQUEST['address']."/n" ;
$message = $message."Postcode:".$_REQUEST['postcode']."/n" ;
$message = $message."Telephone:".$_REQUEST['telephone']."/n" ;
$message = $message."Email:".$_REQUEST['email']."/n" ;
$message = $message."How did you Hear:".$_REQUEST['found_us']."/n";
$message = $message."Enquiry:".$_REQUEST['enquiry'] ;

$headers = "From: $email";
$sent = mail($to, $subject, $message, $headers) ;
if($sent)
{print "Your mail was sent successfully"; }
else
{print "We encountered an error sending your mail"; }
?>

<!-- Google Code for Contact Form Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1012440526;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "GVqbCKK0zwQQzrvi4gM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1012440526/?value=0&amp;label=GVqbCKK0zwQQzrvi4gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
