<?php
$to = "";
$subject = "";
$message = "Hello! This is a simple email message.";
$from = "";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>
