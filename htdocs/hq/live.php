<?php
include('var/device.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/core/lib/authuser.php');
$validateuser = New User();
//$currentuser=$validateuser->user_Restrict();
$zone=$_GET['z'];
$cam=$zone;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PiSos | HQ</title>
<link rel="stylesheet" type="text/css" href="../theme/style/style.css" />
<link rel="stylesheet" type="text/css" href="../theme/style/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../theme/style/bootstrap-responsive.css" />
<!--Stylesheet and JS for Video Player-->
<link href="../core/video-js/video-js.css" rel="stylesheet">
<script src="../core/video-js/video.js"></script>
<!---->
<script type="text/javascript" src="../theme/lib/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="../theme/lib/js/bootstrap.js"></script>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/hq/hqmenu.php');?>
<div class="container" id="wrapper">
<div class="row" id="content">
<div class="span12">
<div class="page-header" id="pagetitle">
<h1>Zone <?php echo $zone; ?> Information</h1>
</div>
<p>This page shows all the available informaton and devices linked to this zone.</p>
</div>
</div>
<div class="row">
<div class="span6 offset3 livevideobox">
<img src="../hq/feed.php?cam=<?php echo $cam;?>">

<?php 
if($zone==1){$device1=1; $device2=2;}
if($zone==2){$device1=3; $device2=4;}
if($zone==3){$device1=5; $device2=6;}
if($zone==4){$device1=7; $device2=8;}
if($zone==5){$device1=9; $device2=10;}
if($zone==6){$device1=11; $device2=12;}
if($zone==7){$device1=13; $device2=14;}
if($zone==8){$device1=15; $device2=26;}
?>
</div>
<div class="span12">
<p>Device <?php echo $device1;?>: <input type="checkbox" onclick="jQuery.get('var/device.php?dev=<?php echo $device1; ?>');" <?php if($devstat[$device1-1]==1){echo "checked";}?> /></p>
<p>Device <?php echo $device2;?>: <input type="checkbox" onclick="jQuery.get('var/device.php?dev=<?php echo $device2; ?>');" <?php if($devstat[$device2-1]==1){echo "checked";}?> /></p>
</div>
</div>
<div class="row">
<div id="footer" class="span4 offset4" style="text-align:center;">
<?php include($_SERVER['DOCUMENT_ROOT'].'/hq/footer.php');  
?>
</div>
</div>
</div>
</body>
</html>
