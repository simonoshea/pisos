<?php require_once($_SERVER['DOCUMENT_ROOT'].'/core/lib/authuser.php');
$validateuser = New User();
$currentuser = $validateuser->user_Restrict();
include('var/varcon.php');
include('var/zoneinfo.php');
include('var/gettemp.php');
include('var/getmotion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PiSos | HQ</title>
<link rel="stylesheet" type="text/css" href="../theme/style/style.css" />
<link rel="stylesheet" type="text/css" href="../theme/style/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../theme/style/bootstrap-responsive.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<!--Stylesheet and JS for Video Player-->
<link href="../core/video-js/video-js.css" rel="stylesheet">
<script src="../core/video-js/video.js"></script>
<!---->
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/hq/hqmenu.php');?>
<div id="wrapper" class="container">
<div id="content" class="row">
<div class="span12">
<div class="page-header" id="pagetitle">
<h1>Tactical Overview</h1>
</div>
<br/>
<p>Tactical Overview contains information about your most important zones</p>
</div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/hq/overview.php');?>
<div class="row">
<div id="footer" class="span4 offset4" style="text-align:center;">
<?php include($_SERVER['DOCUMENT_ROOT'].'/hq/footer.php');  
?>
</div>
</div>
</div>
</body>
</html>
