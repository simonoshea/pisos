<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/core/etc/dbvar.php');
$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASSWORD);
if (!$connection){
	die('Could not connect: ' . mysql_error());
}
else{ mysql_select_db("pisos_1", $connection);
	$querytemp = mysql_query("SELECT * FROM `sos_senval` ORDER BY val_timestamp DESC LIMIT 1");
	$sqlobject = mysql_fetch_object($querytemp);
	$currenttemp = $sqlobject->sen_val;
	
}

