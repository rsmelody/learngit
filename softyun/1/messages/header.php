<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> 留言板 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" type="text/css" href="css/base.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

</head>

<body>
<div class="header">
	<div class="nav">
	<ul>
		<li class="logo"><a href="#">Mes</a></li>
		<?php if (isset($_SESSION['validUser'])) { ?>
		<li><a href="list.php">标签列表</a></li>
		<li><a href="add.php">添加标签</a></li>
		<li><a href="search.php">搜索标签</a></li>
		<?php } ?>
	</ul>
	<div class="rightMenu">
		<ul>
		<?php if (isset($_SESSION['validUser'])) { ?>
			<li><a href="logout.php">登出</a></li>
			<li><a href="#">&nbsp<?php echo $_SESSION['validUser']; ?></a></li>
		<?php } else { ?>
			<li><a href="register.php">注册</a></li>
			<li><a href="login.php">登录</a></li>
		<?php } ?>
		</ul>
	</div>
	</div>
</div>
<script language="JavaScript">

$(document).ready(function(){
	var path  = location.pathname;
	var patt1 = new RegExp("login.php"),
		patt2 = new RegExp("register.php"),
	    patt3 = new RegExp("list.php"),
	    patt4 = new RegExp("add.php"),
		patt5 = new RegExp("search.php");

	if(patt1.test(path)){
		$("[href = 'login.php']").css({"color" : "white", "background-color" : "gray"});
	} else if(patt2.test(path)){
		$("[href = 'register.php']").css("background-color" , "gray");
	} else if(patt3.test(path)){
		$("[href = 'list.php']").css("background-color" , "gray");
	} else if(patt4.test(path)){
		$("[href = 'add.php']").css("background-color" , "gray");
	} else if(patt5.test(path)){
		$("[href = 'search.php']").css("background-color" , "gray");
	}

});

/*document.write(location.hostname + "<br />");
document.write(location.pathname + "<br />");
document.write(location.port + "<br />");
document.write(location.protocol + "<br />");

txt = "<p>Browser CodeName: " + navigator.appCodeName + "</p>";
txt+= "<p>Browser Name: " + navigator.appName + "</p>";
txt+= "<p>Browser Version: " + navigator.appVersion + "</p>";
txt+= "<p>Cookies Enabled: " + navigator.cookieEnabled + "</p>";
txt+= "<p>Platform: " + navigator.platform + "</p>";
txt+= "<p>User-agent header: " + navigator.userAgent + "</p>";
txt+= "<p>User-agent language: " + navigator.systemLanguage + "</p>";

document.write(txt);
*/
</script>
