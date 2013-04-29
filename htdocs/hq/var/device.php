<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/etc/dbvar.php');
$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);

if (!$connection) {
    die('Could not connect: ' . mysql_error());
} else {
    $devstat = array();
    mysql_select_db("pisos_1", $connection);
    for ($i = 1; $i < 17; $i++) {
        $query     = mysql_query("SELECT * FROM `sos_devices` WHERE dev_id=" . $i);
        $sqlobject = mysql_fetch_object($query);
        array_push($devstat, $sqlobject->dev_state);
    }
    if ($_GET['dev']) {
        if ($devstat[$_GET['dev'] - 1] == true) {
            mysql_query("UPDATE `sos_devices` SET dev_state=0 WHERE dev_id=" . $_GET['dev']);
        } else {
            mysql_query("UPDATE `sos_devices` SET dev_state=1 WHERE dev_id=" . $_GET['dev']);
        }
    }
}
?>
