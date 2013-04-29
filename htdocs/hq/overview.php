<!--four zones start-->
<div id="overviewDiv">
<div class="row">
<!--first zone-->
<div class="childDiv span6" id="childDiv1">
<div class="zonetitle" id="">
<a href="<?php ?>"><?php echo "Zone ".$tzns['zone_id']." : ".$tzns['zone_name']; ?></a>
<hr/>
</div>
<div class=videobox>
<video id="my_video_1" class="video-js vjs-default-skin" controls
  preload="auto" width="420" height="340" poster=""
  data-setup="{}">
  <source src="../core/data/cctv/cam1/bigbuck.ogg" type='video/ogg'>
Your browser does not support the video tag. <a href="help.php?sol=html5">Click here for help!</a>
</video>
</div>

<div class="zoneinfo">
<table class="table">
<tr>
<td><i>Footage:</i> </td><td></td>
</tr>
<tr>
<td>USB Camera</td>
<td>/dev/video0</td>
</tr>
<tr>
<td>PIR Sensor</td>
<td><?php echo $motion1;?></span></td>
</tr>
<tr>
<td>Temp</td>
<td><?php echo $currenttemp ?>&deg;</td>
</tr>
<tr>
<td>Lighting</td>
<td><input type="checkbox" onclick="jQuery.get('var/device.php?dev=1');" <?php if($devstat[0]==1){echo "checked";}?> />
</td>
</tr>
<tr>
<td></td>
<td><button class="btn btn-danger" onclick="jQuery.get('/cgi-bin/alarm.py');" type="button">Alarm</button></td>
</tr>
</table>
</div>
</div>
<!---->

<!--second zone-->
<div class="childDiv span6" id="childDiv2">
<div class="zonetitle" id="">
<a href="<?php echo ($_SERVER['DOCUMENT_ROOT'].'/hq/zones.php?z=2');?>">Zone2: Garage </a>
<hr/>
</div>
<div class=videobox>
<video id="my_video_1" class="video-js vjs-default-skin" controls
  preload="auto" width="420" height="340" poster=""
  data-setup="{}">
  <source src="" type='video/ogg'>
Your browser does not support the video tag. <a href="help.php?sol=html5">Click here for help!</a>
</video>
</div>
<div class="zoneinfo">
<table class="table">
<tr>
<td><i>No recent footage found</i></td>
</tr>
<tr>
<td>IP Camera</td>
<td>192.168.1.62</td>
</tr>
<tr>
<td>Motion</td>
<td><?php echo $motion2;?></td>
</tr>
<tr>
<td>Temp</td>
<td><?php echo $currenttemp ?>&deg;</td>
</tr>
<tr>
<td></td>
<td><button class="btn btn-danger" onclick="jQuery.get('/cgi-bin/alarm.py');" type="button">Alarm</button></td>
</tr>
</table>
</div>
</div>
<!---->
</div>
<!--third zone-->
<div class="row">
<div class="childDiv span6" id="childDiv3">
<div class="zonetitle" id="">
<a href="<?php echo ($_SERVER['DOCUMENT_ROOT'].'/hq/zones.php?z=3');?>">Zone3: Front Door</a>
<hr/>
</div>

<div class=videobox>
<video id="my_video_1" class="video-js vjs-default-skin" controls
  preload="auto" width="420" height="340" poster=""
  data-setup="{}">
  <source src="" type='video/ogg'>
Your browser does not support the video tag. <a href="help.php?sol=html5">Click here for help!</a>
</video>
</div>
<div class="zoneinfo">
<table class="table">
<tr>
<td><i>No recent footage found</i></td>
</tr>
<tr>
<td>USB Camera</td>
<td>/dev/video1</td>
</tr>
<tr>
<td>Motion</td>
<td><?php echo $motion3;?></td>
</tr>
<tr>
<td>Temp</td>
<td><?php echo $currenttemp ?>&deg;</td>
</tr>
<tr>
<td></td>
<td><button class="btn btn-danger" onclick="jQuery.get('/cgi-bin/alarm.py');" type="button">Alarm</button></td>
</tr>
</table>
</div>
</div>
<!---->

<!--fourth zone-->
<div class="childDiv span6" id="childDiv4">
<div class="zonetitle" id="">
<a href="<?php echo ($_SERVER['DOCUMENT_ROOT'].'/hq/zones.php?z=4');?>">Zone4: Kitchen</a>
<hr/>
</div>
<div class=videobox>
<video id="my_video_1" class="video-js vjs-default-skin" controls
  preload="auto" width="420" height="340" poster=""
  data-setup="{}">
  <source src="" type='video/ogg'>
Your browser does not support the video tag. <a href="help.php?sol=html5">Click here for help!</a>
</video>
</div>
<div class="zoneinfo">
<table class="table">
<tr>
<td><i>No recent footage found</i></td>
</tr>
<tr>
<td>USB Camera</td>
<td>/dev/video2</td>
</tr>
<tr>
<td>Motion</td>
<td><?php echo $motion4;?></td>
</tr>
<tr>
<td>Temp</td>
<td><?php echo $currenttemp ?>&deg;</td>
</tr>
<tr>
<td></td>
<td><button class="btn btn-danger" onclick="jQuery.get('/cgi-bin/alarm.py');" type="button">Alarm</button></td>
</tr>
</table>
</div>
</div>
<!---->
</div>
</div>
<!--four zones end-->
