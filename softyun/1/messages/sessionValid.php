<?php
session_start();

if (!$_SESSION['validUid'] || !$_SESSION['validUser']) {
	header('Location: http://1.softyun.sinaapp.com/messages/login.php');
	exit;
}

function getUid()
{
	$cookieSid = $_COOKIE['sid'];
	$cookieUid = $_COOKIE['uid'];
	if ($cookieSid && $cookieUid && takenVerify($cookieSid, $cookieUid)){
		$uid = $cookieUid;
		return $uid;
	} else {
		return false;
	}
}

function takenVerify($cookieSid, $cookieUid)
{
	//$sessionId = getSessionId($cookieUid);
	if ($sessionId == $cookieSid){
		return true;
	}

	return false;
}


