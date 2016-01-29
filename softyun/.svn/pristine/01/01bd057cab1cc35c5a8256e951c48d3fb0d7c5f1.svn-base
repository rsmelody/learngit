<?php
include("sessionValid.php");
include("messagesFns.php");

//获得要添加的信息
$title = $_POST['title'];
$url   = $_POST['url'];
$uid   = $_SESSION['validUid'];

//添加书签
$res = addUrls($uid, $title, $url);
if ($res) {
	header('Location: http://1.softyun.sinaapp.com/messages/list.php');
} else {
	header('Location: http://1.softyun.sinaapp.com/messages/add.php');
}
exit;

?>
