<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/core/etc/dbvar.php');
$con=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$device=$_GET['dev'];
$devstat = array();
$devres = mysqli_query($con,"SELECT * FROM `sos_devices` WHERE dev_id=$device");
while($dev = mysqli_fetch_array($devres)){
if($dev['dev_state']==true)
			mysqli_query($con, "UPDATE `sos_devices` SET dev_state=0 WHERE dev_id=".$dev['dev_id']);
		else
			mysqli_query($con, "UPDATE `sos_devices` SET dev_state=1 WHERE dev_id=".$dev['dev_id']);
}


?>
