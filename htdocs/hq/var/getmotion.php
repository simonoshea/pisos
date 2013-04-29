<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/etc/dbvar.php');
$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);
if (!$connection) {
    die('Could not connect: ' . mysql_error());
} else {
    mysql_select_db("pisos_1", $connection);
    $querymo1  = mysql_query("SELECT * FROM `sos_motion` WHERE zone_id=1 ORDER BY motion_time DESC");
    $sqlobject = mysql_fetch_object($querymo1);
    $motion1   = $sqlobject->motion_time;
    $querymo2  = mysql_query("SELECT * FROM `sos_motion` WHERE zone_id=2 ORDER BY motion_time DESC");
    $sqlobject = mysql_fetch_object($querymo2);
    $motion2   = $sqlobject->motion_time;
    $querymo3  = mysql_query("SELECT * FROM `sos_motion` WHERE zone_id=3 ORDER BY motion_time DESC");
    $sqlobject = mysql_fetch_object($querymo3);
    $motion3   = $sqlobject->motion_time;
    $querymo4  = mysql_query("SELECT * FROM `sos_motion` WHERE zone_id=4 ORDER BY motion_time DESC");
    $sqlobject = mysql_fetch_object($querymo4);
    $motion4   = $sqlobject->motion_time;
    
}

