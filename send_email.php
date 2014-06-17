<?php
session_start();
$email=$_POST['email'];
$number=rand();
$message="Hello ,"."\n"."We have recieved password reset request from you , please click on following given link to reset your password\n"."http://demos.koding.info/resetpassword/resetpassword.php?id=".$number."\n\nRegards,\nKoding.info";
$_SESSION['resetid']=$number;
mail($email,"Password reset",$message,"From: Shahid");
echo '<h3>Your password reset link is sent to your email at '.$email.' Please Do check spam folder as well :-)';
?>