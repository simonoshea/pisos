<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/core/lib/authuser.php');
$validateuser = New User();
$currentuser = $validateuser->user_Restrict($reqpage);
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

</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/hq/hqmenu.php');?>
<div class="container" id="wrapper">
<div class="row">
<div class="span12" id="content">
<div class="page-header" id="pagetitle">
<h1>My Profile</h1>
</div>
<p>Name: <?php echo $_SESSION['user']->user_fname . " " . $_SESSION['user']->user_sname;?></p>
<p>Username: <?php echo $_SESSION['user']->user_uname;?></p>
<p>ID: <?php echo $_SESSION['user']->user_id;?></p>
<p>Email: <?php echo $_SESSION['user']->user_email;?></p>
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
