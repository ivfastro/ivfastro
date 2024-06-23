<?php
include_once("sendmail.inc.php");
	$name  = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$dobl  = $_REQUEST['dobl'];
	$dob   = $_REQUEST['dob'];
	$tob   = $_REQUEST['tob'];
	$place = $_REQUEST['place'];
	$query = $_REQUEST['query'];

	$body=$name."\n".$email."\n".$dobl."\n".$dob."\n".$tob ."\n".$place."\n".$query."\n";
	if(sendmail ("ivfastro@gmail.com","information required",$body));

}
include_once("send_email_form.inc.php");

echo "Email sent";
?>


