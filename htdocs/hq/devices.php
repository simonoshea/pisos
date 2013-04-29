<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/core/lib/authuser.php');
$validateuser = New User();
$currentuser = $validateuser->user_Restrict($reqpage);
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

</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/hq/hqmenu.php');?>
<div class="container" id="wrapper">
<div class="row" id="content">
<div class="span12">
<div class="page-header" id="pagetitle">
<h1>Devices</h1>
</div>
<table class="table table-bordered table-hover">
<thead>
	<tr>
		<th>ID #</th>
                <th>Name</th>
                <th>Zone</th>
                <th>Pin</th>
                <th>State</th>
	</tr>
</thead>
<tbody>
<?php
$devices = mysqli_query($con,"SELECT * FROM sos_devices ORDER BY `dev_id` + 0 ASC;");
while($dev = mysqli_fetch_array($devices)){
	echo "<tr>";
	echo "<td>".$dev['dev_id']."</td>";
	echo "<td>".$dev['dev_name']."</td>";
	echo "<td>".$dev['zone_id']."</td>";
	echo "<td>".$dev['dev_pin']."</td>";
	if($dev['dev_state']==1){
		$state = "On";
	}
	else{
		$state = "Off";
	}
	echo "<td>".$state."</td>";
	echo "</tr>";
}
?>
</tbody>
</table>
</div>
</div>
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
