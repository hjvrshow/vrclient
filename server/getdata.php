<?php


error_reporting(E_ALL^E_NOTICE^E_WARNING);
$getid = $_GET['id'];
$postid =  $_POST['id'];

$url='http://720ybf.com/partner/serverpro.php?getid='.$getid.'&postid='.$postid.'&key=publickey';
$html = file_get_contents($url);
echo $html;




?>
