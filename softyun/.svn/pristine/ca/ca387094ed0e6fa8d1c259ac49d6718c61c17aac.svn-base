<?php include("header.php");?>

<div class="content">
<div class="primary">
<div class="register">
<form name="register" method="post" action="registerValid.php" onsubmit="return CheckPost();">
<div class="registerLine">
<label for="username">用户名</label>
<input type="text" name="username" id="username" value="" />
</div>
<div class="registerLine">
<label for="password">密&nbsp;&nbsp;&nbsp;&nbsp;码</label>
<input type="password" name="password" id="password" />
</div>
<div class="registerLine">
<label for="email">邮&nbsp;&nbsp;&nbsp;&nbsp;箱</label>
<input type="text" name="email" id="email" />
</div>
<div class="registerLine">
<input type="submit" name="register" value="注册" />
</div>
</form>
</div>
</div>
<div class="secondary">
<div id="intro">
<h1>Build links better, togger.</h1>
</div>
</div>

</div>
<script language="JavaScript">
$("#username").focus();

function CheckPost(){
	if(register.username.value==""){
		alert("用户名不能为空");
		register.username.focus();
		return false;
	}

	if(register.password.value==""){
		alert("请填写密码");
		register.password.focus();
		return false;
	}   
	if(register.email.value==""){
		alert("邮箱不能为空");
		register.email.focus();
		return false;
	}   
}

</script>

<?php include("footer.html");?>
