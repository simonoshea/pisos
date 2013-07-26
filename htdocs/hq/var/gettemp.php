<?php

// Prevent caching.
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 01 Jan 1996 00:00:00 GMT');

// The JSON standard MIME header.
header('Content-type: application/json');


require_once($_SERVER['DOCUMENT_ROOT'].'/core/lib/authuser.php');
$validateuser = New User();
$currentuser = $validateuser->user_Restrict();

$id = $_GET["id"];

require_once ($_SERVER['DOCUMENT_ROOT'].'/core/etc/dbvar.php');
$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASSWORD);
if (!$connection){
	die('Could not connect: ' . mysql_error());
}
else{ mysql_select_db("pisos_1", $connection);
	$querytemp = mysql_query("SELECT * FROM `sos_senval` ORDER BY val_timestamp DESC LIMIT 1");
	$sqlobject = mysql_fetch_object($querytemp);
	$currenttemp = $sqlobject->sen_val;
	$timestamp = $sqlobject->val_timestamp;
	
}

echo "{data:{id:".$id."temp:".$sen_val.",timestamp:".$val_timestamp."}}";