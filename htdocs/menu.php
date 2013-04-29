<?php
if (isset($_SESSION['user'])) {
    
?>
		<div class="navbar">
			<div class="navbar-inner">
				<ul class="nav">
				<a class="brand" href="#">PiSos Panel</a>
				<li><a href="hq/index.php">Overview</a></li>
				<li><a href="hq/zones.php">Zones</a></li>
				<li><a href="hq/config.php">Settings</a></li>
				<li><a href="hq/sysinfo.php">System Info</a></li>
				
				</ul>
				<ul class="nav pull-right">
				<li>Welcome <?php //echo $_SESSION['user']; 
?></li>
				<li><a href="../logout.php">Log Out</a></li>
				</ul>
			</div>
		</div>

<?php
} else {
?>
		<div class="navbar">
			<div class="navbar-inner">
				<ul class="nav">
				<a href="#" class="brand">PiSos Panel</a>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
				</ul>
				<ul class="nav pull-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" onclick="$('.dropdown-toggle').dropdown();">
						Login
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<form method="post" class="navbar-form pull-right" action="login.php">
							
							<input type="text" id="username" placeholder="Username" name="un">
            						<input type="password" id="password" placeholder="Password" name="pwd">
        					<button type="submit" class="btn btn-primary">Login</button>
    					</form>
					</ul>
				</li>
				</ul>
			</div>
		</div>
<?php
    
}
?>
