<?php 

include("sessionValid.php");
include("messagesFns.php");
include("header.php");  
?>

<div class="content">
	<div class="secondary">
		<div class="add">
			<form name="addurl" method="post" action="addValid.php" onsubmit="return CheckPost();">
				<div class="addLine">
					<label for="title">Title</label>
					<input type="text" name="title" id="title" value="<?php if (isset($title)) echo $title; ?>" />
				</div>
				<div class="addLine">
					<label for="url">content</label>
					<input type="text" name="url" id="url" value="<?php if (isset($url)) echo $url; ?>" />
				</div>
				<div class="addLine">
					<input type="submit" name="submit" value="添加" />
				</div>
			</form>
		</div>
	</div>
	<div class="secondary">
		<div class="intro">
			<p>网络标签：记录您网上生活的点点滴滴</p>
		</div>
	</div>
</div>
<script language="JavaScript">

	function CheckPost(){
		if(addurl.title.value==""){
			alert("title不能为空");
			addurl.title.focus();
			return false;
		}
	
	    if(addurl.url.value==""){
			alert("content不能为空");
			addurl.url.focus();
			return false;
		}      
	}
</script>

<?php include("footer.html");?>
