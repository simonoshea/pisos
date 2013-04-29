<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/core/lib/authuser.php');
$validateuser = New User();
$currentuser = $validateuser->user_Restrict();
include('var/varcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PiSos | HQ</title>
<link rel="stylesheet" type="text/css" href="../theme/style/style.css" />
<link rel="stylesheet" type="text/css" href="../theme/style/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../theme/style/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="../theme/original-ios/ios-checkboxes.css" />

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
<div class="row">
<div class="span12">
<div class="page-header" id="pagetitle">
<h1>Zones</h1>
</div>
<p>This page shows all of your present zones.</p>
</div>
</div>
<?php
$getzones = mysqli_query($con,"SELECT * FROM sos_zones");
while($zns = mysqli_fetch_array($getzones)){
	echo "<div class='row'>";
	echo "<div class='span12'>";
	echo "<h4><a href='live.php?z=".$zns['zone_id']."'>".$zns['zone_id'].": ".$zns['zone_name']."</a></h4>";
	echo "<hr/>";
	echo "</div>";
	echo "</div>";
}
?>
<div class="row">
<div id="footer" class="span4 offset4" style="text-align:center;">
<?php include($_SERVER['DOCUMENT_ROOT'].'/hq/footer.php');  
?>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
