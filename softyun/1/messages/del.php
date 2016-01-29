<?php 
include("sessionValid.php");
include("messagesFns.php");

//获得urlId
$urlId = $_GET['urlId'];

//删除书签
$res = delUrls($urlId);
header('Location: http://1.softyun.sinaapp.com/messages/list.php');

?>
