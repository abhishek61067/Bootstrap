<?PHP
session_start();
include ('globals.php');
	$firstname = $_REQUEST['firstname'] ;
	$lastname = $_REQUEST['lastname'] ;
	$address = $_REQUEST['address'] ;
	$email = $_REQUEST['email'] ;
	$phone = $_REQUEST['phone'] ;
	$comments = $_REQUEST['comments'] ;
	


	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	$_SESSION['address']=$address;
	$_SESSION['email']=$email;
	$_SESSION['phone']=$phone;
	$_SESSION['comments']=$comments;
	
if (md5($_REQUEST['code_check'])==$_COOKIE[$site_cookie_verifyimage_name]) {

	
	unset($_SESSION['firstname']);
	unset($_SESSION['lastname']);
	unset($_SESSION['address']);
	unset($_SESSION['email']);
	unset($_SESSION['phone']);
	unset($_SESSION['comments']);

	
// multiple recipients
//ini_set("SMTP","192.168.0.30");
//$to  = 'gazwanistephan@gmail.com'; // note the comma
$to  = 'abhishek.bhattarai61067@gmail.com'; //$to  = 'jsingh1262@yahoo.com';  note the comma
//$to .= 'email@domain.dom' . ', '; // add additional mail receipient here. Uncomment to activate
//$to .= 'email@domain.dom'; // add additional mail receipient here

// subject
$subject = 'You have received a mail from '.$name; //Modify the mail subject here
//$subject = 'Message from '.$name.' via domain.dom';
// message
$message = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Form Engine</title>
</head>
<body>

<div style="width:700px;">
<h1 style="font:bold 22px/40px Times New Roman, Times, serif; height:40px; margin:0px; padding:0px; background-color:#ace1fd; padding:0px 10px; border-bottom:3px solid #999999;">Comments/Queries</h1>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">First Name:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">'.$firstname.'</td>
  </tr>
  <tr>
    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">Last Name:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">'.$lastname.'</td>
  </tr>
  <tr>
    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">Address:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">'.$address.'</td>
  </tr>
  
  <tr>
    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">E-mail:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">'.$email.'</td>
  </tr>
  
  <tr>
    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">Phone:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">'.$phone.'</td>
  </tr>
  
  <tr>
    <td width="150" height="35" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/20px Arial, Helvetica, sans-serif;">Comments:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/20px Arial, Helvetica, sans-serif;">'.$comments.'</td>
  </tr>
</table>
</div>
</body>
</html>';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From: '.$name.' <'.$email.'>'. "\r\n";
//$headers .= 'Cc: email@domain.dom'. "\r\n"; // Add cc recepient here. Uncomment to activate
//$headers .= 'Cc: email@domain.dom'. "\r\n"; // Add next cc recepient here. Uncomment to activate
//$headers .= 'Bcc: email@domain.dom'. "\r\n"; // Add bcc recepient here. Uncomment to activate

// Replace apostrophe character
$message = str_replace("\'","'",$message);

// Mail it now
if(mail($to, $subject, $message, $headers)){
		header( "Location: contact.php?sent=1");
		}
else{
		header( "Location: contact.php?sent=0");
		}

}

else{
header( "Location: contact.php?sent=2");
}
?>