<?php
$errid = $_GET["eid"];
if (!isset($errid)) {
    header('Location:../index.php');
} else
?>

<html>
<head>
<body>
<?php
if ($errid == 404) {
    echo "Error 404! The page you were looking for was not found!";
} else {
    echo "Error!";
    echo $errid;
}
?>
</body>
</html>
