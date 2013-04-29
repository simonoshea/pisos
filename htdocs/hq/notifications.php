<?php

$to = "simonjoshea@gmail.com";
$subject = "PiSos Notification";
$motionmessage = "Hi there!\nMotion has been detected by PiSos.\n";
$from = "pisos@yourhouse.ie";
$headers = "From:".$from;
if($_GET['m']=="motion"){
	mail($to,$subject,$motionmessage,$headers);
	echo("User notified of motion");
}
else{
	echo("Invalid Argument");
}

?>
