<?php


$getid = $_GET['id'];
$postid =  $_POST['id'];

$url='http://720ybf.com/partner/serverpro.php?getid='.$getid.'&postid='.$postid;
$html = file_get_contents($url);
echo $html;




?>
