<?php
include("sessionValid.php");
include("messagesFns.php");

//获得书签的信息
$title = $_POST['title'];
$url   = $_POST['url'];
$urlId = $_POST['urlId'];

//更新书签信息
$res = updateUrls($urlId, $title, $url);
if ($res) {
	header('Location: http://1.softyun.sinaapp.com/messages/list.php');
} else {
	header('Location: http://1.softyun.sinaapp.com/messages/edit.php');
}
exit;

?>
