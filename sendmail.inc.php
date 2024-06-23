<?
//include_once("config.inc.php");
function sendmail ($to,$sub,$body)
{
global $host, $smtp_auth, $smtp_user, $smtp_password,$from,$from_name;
require_once("class.phpmailer.php");
//require("config.inc.php")
$mail = new PHPMailer();
$mail->IsSMTP();                                      // set mailer to use SMTP

$mail->Host = $host;  // specify main and backup server
$mail->SMTPAuth = $smtp_auth;     // turn on SMTP authentication
$mail->Username=$smtp_user;
$mail->Password=$smtp_password;


$mail->From = $from;
$mail->FromName = $from_name;


$mail->AddReplyTo($from, $from_name);

$mail->WordWrap = 100;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $sub;


//echo $to;
$to = explode (",",$to);
foreach ($to as $address)
if (strcmp ($address,"")!=0)
			$mail->AddAddress($address,"");
			$mail->Body =$body;

			if(!$mail->Send()){
			   echo "Message could not be sent to $addr <p>";
			   echo "Mailer Error: " . $mail->ErrorInfo;
			   return(FALSE);
			}
			else {
				return(TRUE);
			}
			$mail->ClearAddresses();
}	

?>
