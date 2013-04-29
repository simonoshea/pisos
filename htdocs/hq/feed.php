<?php
$file = '../core/img/video/stream_offline.png';
$type = 'image/png';
readfile($file);
$camport=$_GET["cam"];
if($camport == 1) {
$portno=8081;
}
if($camport == 2) {
$portno=8082;
}
if($camport == 3) {
$portno=8083;
}
if($camport == 4) {
$portno=8084;
}
set_time_limit(0);
$fp = fsockopen ("localhost", $portno, $errno, $errstr, 30);
if (!$fp) {
        header('Content-Type:'.$type);
    	header('Content-Length: ' . filesize($file));
} else {
    fputs ($fp, "GET / HTTP/1.0\r\n\r\n");
    while ($str = trim(fgets($fp, 4096)))
       header($str);
    fpassthru($fp);
    fclose($fp);
}
?>






