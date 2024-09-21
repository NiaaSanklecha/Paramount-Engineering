<?php 
if(isset($_POST['submit'])){
    $to = "info@paramount-engineering.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $formcontent = "Name: $name \n   Phone: $number \n  Email: $from \n     Message: $message";
    $subject = "Quote Form";
    $mailheader = "From: $from \r\n";
    mail($to,$subject,$formcontent,$mailheader) or die("Error!! Try Again.");
    echo '<script language="javascript">';
    echo 'alert("Thank you for Contacting Us.")';
    echo '</script>';
    header("Location: http://paramount-engineering.com/index.html?success=1");
    exit;

}
    
?>