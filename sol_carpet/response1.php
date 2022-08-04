<?php 
if(isset($_POST['submit'])){
    $to = "abhishek.bhattarai61067@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    // $last_name = $_POST['last_name'];
    $subject = "Client message";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $result1 = mail($to,$subject,$message,$headers);
    $result2 = mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    if($result1){
        echo "sent";
        header('Location:redirect_success.php');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

    else{
        echo "error";
    }
}
?>