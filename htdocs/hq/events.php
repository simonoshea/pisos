<?php require_once($_SERVER['DOCUMENT_ROOT'].'/core/lib/authuser.php'); $validateuser = New User(); $currentuser = $validateuser->user_Restrict($reqpage); 
include('var/varcon.php'); ?> <!DOCTYPE html> <html lang="en"> <head> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <title>PiSos | HQ</title> 
<link rel="stylesheet" type="text/css" href="../theme/style/style.css" /> <link rel="stylesheet" type="text/css" href="../theme/style/bootstrap.css" /> <link 
rel="stylesheet" type="text/css" href="../theme/style/bootstrap-responsive.css" /> <link rel="stylesheet" type="text/css" 
href="../theme/original-ios/ios-checkboxes.css" />
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/hq/hqmenu.php');?>
<div class="container" id="wrapper">
<div class="row" id="content">
<div class="span12">
<div class="page-header" id="pagetitle">
<h1>Events</h1>
</div>
<div class='row'>
<div class='span12'>
<table class="table table-bordered table-hover">
<thead>
	<tr>
		<th>ID</th>
                <th>Zone</th>
                <th>Type</th>
                <th>Description</th>
                <th>Time</th>
                <th>Alert Sent</th>
	</tr>
</thead>
<tbody>
<?php
$events = mysqli_query($con,"SELECT * FROM sos_events ORDER BY `event_time` DESC LIMIT 10;");
while($evnt = mysqli_fetch_array($events)){
	echo "<tr>";
	echo "<td>".$evnt['event_id']."</td>";
	echo "<td>".$evnt['event_zone']."</td>";
	echo "<td>".$evnt['event_type']."</td>";
	echo "<td>".$evnt['event_desc']."</td>";
	echo "<td>".$evnt['event_time']."</td>";
	if($evnt['event_mailsent'] == 1){
		$mailsent = "Sent";
	}
	else{
		$mailsent = "Not sent";
	}
	echo "<td>".$mailsent."</td>";
	echo "</tr>";
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="row">
<div id="footer" class="span4 offset4" style="text-align:center;">
<?php include($_SERVER['DOCUMENT_ROOT'].'/hq/footer.php');  
?>
</div>
</div>
</body>
</html>
