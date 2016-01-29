<?php 
include("sessionValid.php");
include("messagesFns.php");
include("header.php");  

//通过urlId获得url信息
$urlId = $_GET['urlId'];
$url   = getUrlsByUrlId($urlId);	

?>
<div class="content">
	<div class="edit">
	<form name="editUrl" method="post" action="editValid.php">
		<div class="editLine">
		<label>Title</label>
		<input type="text" name="title" value="<?php echo $url['title']; ?>" />
		</div>
		<div class="editLine">
		<label>Url</label>
		<input type="text" name="url" value="<?php echo $url['url']; ?>" />
		</div>
		<div class="editLine">
		<input type="hidden" name="urlId" value="<?php echo $url['urlId']; ?>" />
		<input type="submit" name="submit" value="修改" />
		</div>
	</form>
	</div>
</div>

<?php include("footer.html");?>
