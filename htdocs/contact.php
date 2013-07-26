<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/core/lib/authuser.php');
$membership = New User();
$member = $membership->confirm_User();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>PiSos | Welcome</title>
	<link rel="stylesheet" type="text/css" href="theme/style/style.css" />
	<link rel="stylesheet" type="text/css" href="theme/style/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="theme/style/bootstrap-responsive.css" />
	<script type="text/javascript" src="theme/lib/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="theme/lib/js/bootstrap.js"></script>
</head>
<body>
	<?php
	include($_SERVER['DOCUMENT_ROOT'] . '/menu.php');
	?>
	<div class="container" id="wrapper">
		<div id="pagetitle">Contact</div>
		PiSos is currently developed and maintained by <a href='#'>Hugh Rawlinson</a> and <a href='#'>Simon O'Shea</a>. If you have any suggestions then please get in touch. 
		<div class="row">
			<div id="footer" class="span4 offset4" style="text-align:center;">
				<?php
				include($_SERVER['DOCUMENT_ROOT'] . '/hq/footer.php');
				?>
			</div>
		</div>
	</div>
</body>
</html>