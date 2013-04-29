<?php
session_start();
require_once ($_SERVER['DOCUMENT_ROOT'].'/core/lib/authuser.php');
$membership1 = new User();
$membership1->log_User_Out();
?>
