<?PHP
session_start();
include ('globals.php');
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $mobile = $_REQUEST['mobile'];
    $location = $_REQUEST['location'];
    $bedroom = $_REQUEST['bedroom'];
    $bathroom = $_REQUEST['bathroom'];
    $housecleaning = $_REQUEST['housecleaning'];
    $bathroom1 = $_REQUEST['bathroom1'];
    $ask = $_REQUEST['ask'];
    $comments = $_REQUEST['comments'];

    $choose_array = $_REQUEST['choose'];
    $choose = "";
    if (isset($_REQUEST['other']) && $_REQUEST['other'] != "") {
      unset($choose_array[count($choose_array) - 1]);
      if (!empty($choose_array)) {
        $choose = implode(",", $choose_array);
      }
      $choose = $choose . "," . $_REQUEST['other'];
    } else {
      $choose = implode(",", $choose_array);
    }
    $choose = rtrim($choose, ",");
    $choose = ltrim($choose, ",");

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['mobile']= $mobile;
    $_SESSION['location'] = $location;
    $_SESSION['bedroom'] = $bedroom;
    $_SESSION['bathroom'] = $bathroom;
    $_SESSION['housecleaning'] = $housecleaning;
    $_SESSION['bathroom1'] = $bathroom1;
    $_SESSION['ask'] = $ask;
    $_SESSION['comments'] = $comments;
    $_SESSION['choose'] = $choose;

    if (md5($_REQUEST['code_check']) == $_COOKIE[$site_cookie_verifyimage_name]) {

    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['phone']);
    unset($_SESSION['mobile']);
    unset($_SESSION['location']);
    unset($_SESSION['bedroom']);
    unset($_SESSION['bathroom']);
    unset($_SESSION['housecleaning']);
    unset($_SESSION['bathroom1']);
    unset($_SESSION['ask']);
    unset($_SESSION['comments']);
    unset($_SESSION['choose']);

// multiple recipients
    //ini_set("SMTP","192.168.0.30");
    //$to  = 'pixeldesign.sarad@gmail.com'; // note the comma
    $to = 'abhishek.bhattarai61067@gmail.com'; //$to  = 'jsingh1262@yahoo.com';  note the comma
    //$to .= 'email@domain.dom' . ', '; // add additional mail receipient here. Uncomment to activate
    //$to .= 'email@domain.dom'; // add additional mail receipient here

// subject
    $subject = 'You have received a mail from ' . $name . ' ' . $email; //Modify the mail subject here
    //$subject = 'Message from '.$name.' via domain.dom';
    // message
    $message = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
    <html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Form Engine</title>
    </head>
    <body>

    <div style="width:100%;">
    <h1 style="font:bold 22px/40px Times New Roman, Times, serif; height:40px; margin:0px; padding:0px; color:#fff; background-color:#1c1d1f; padding:0px 10px; border-bottom:3px solid #fbc522;">Online Booking</h1>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">


    <tr>
    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">Name:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">' . $name . '</td>
    </tr>
    <tr>
    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">Email:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">' . $email . '</td>
    </tr>
    <tr>
    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">Phone:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">' . $phone . '</td>
    </tr>
    <tr>

    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">Mobile:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">' . $mobile . '</td>
    </tr>
    <tr>
    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">Location:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">' . $location . '</td>
    </tr>

    </table>


    <h2 style="font:bold 18px/20px Times New Roman, Times, serif; height:30px; margin:0px; color:#000;  padding:10px 10px 0;">1. House Cleaning</h2>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">


    <tr>
    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">No. of Bedroom:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">' . $bedroom . '</td>
    </tr>

    <tr>
    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">No. of Bathroom:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">' . $bathroom . '</td>
    </tr>

    <tr>
    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">Schedule of Cleaning:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">' . $housecleaning . '</td>
    </tr>


    <tr>
    <td width="150" height="35" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/20px Arial, Helvetica, sans-serif;">Extra cleaning service</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/20px Arial, Helvetica, sans-serif;">' . $choose . '</td>
    </tr>

    </table>

    <h2 style="font:bold 18px/20px Times New Roman, Times, serif; height:30px; margin:0px; color:#000;  padding:10px 10px 0;">2. Office Cleaning</h2>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">



    <tr>
    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">Area of Bathroom:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">' . $bathroom1 . '</td>
    </tr>

    <tr>
    <td width="150" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">Kitchen</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/35px Arial, Helvetica, sans-serif;">' . $ask . '</td>
    </tr>


    <tr>
    <td width="150" height="35" valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/20px Arial, Helvetica, sans-serif;">Comments:</td>
    <td valign="top" style="padding:0px 10px; border-bottom:1px solid #d6d6d6; background-color:#FFFFFF; font:normal 12px/20px Arial, Helvetica, sans-serif;">' . $comments . '</td>
    </tr>


    </table>
    </div>

    </body>
    </html>';


echo $message;exit;


// To send HTML mail, the Content-type header must be set
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
    $headers .= 'From: ' . $name . ' <' . $email . '>' . "\r\n";
//$headers .= 'Cc: email@domain.dom'. "\r\n"; // Add cc recepient here. Uncomment to activate
    //$headers .= 'Cc: email@domain.dom'. "\r\n"; // Add next cc recepient here. Uncomment to activate
    //$headers .= 'Bcc: email@domain.dom'. "\r\n"; // Add bcc recepient here. Uncomment to activate

// Replace apostrophe character
    $message = str_replace("\'", "'", $message);

// Mail it now
    if (mail($to, $subject, $message, $headers)) {
      header("Location: book.php?sent=1");
    } else {
      header("Location: book.php?sent=0");
    }

  } else {
    header("Location: book.php?sent=2");
  }
