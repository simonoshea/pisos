<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/lib/authuser.php');
$membership = new User();

if ($_POST && !empty($_POST['un']) && !empty($_POST['pwd'])) {
    $response = $membership->auth_User($_POST['un'], $_POST['pwd']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PiSos | Login</title>

<link rel="stylesheet" type="text/css" href="theme/style/style.css" />
<link rel="stylesheet" type="text/css" href="theme/style/bootstrap.css" />
<script type="text/javascript" src="theme/lib/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="theme/lib/js/bootstrap.js"></script>
</head>
<body>
<div class="container" id="wrapper">
<?php
if (isset($_GET['login_attempt'])) {
?>
<div class="row" id="content">
<div class="span12">
<div id="title" class="page-header zonewarning">
<h1>The username or password you entered is invalid.</h1>
</div>
    <form method="post" class="form-horizontal" action="<?php
    echo $_SERVER['PHP_SELF'];
?>">
        <label for="username">Username: </label><input type="text" id="username" name="un">
        <label for="password">Password: </label><input type="password" id="password" name="pwd">
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
</div>
</div>
<?php
} else {
?>
<div class="row" id="content">
<div class="span12">
<div class="page-header" id="title">
<h1>You need to sign in to continue!</h1>
</div>
    <form method="post" class="form-horizontal" action="login.php"/>
        <label for="username">Username: </label>
        <input type="text" id="username" name="un">
        <label for="password">Password: </label>
                <input type="password" id="password" name="pwd">
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
</div>
</div>
<?php
}
?>
</div>
</body>
</html>
