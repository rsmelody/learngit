<?php 
include("sessionValid.php");
include("messagesFns.php");
include("header.php");  
?>

<div class="content">
<div class="urls">
<div class="urlLine firstLine">
<div class="title">Title</div>
<div class="url">content</div>
</div>
<?php 
$uid  = $_SESSION['validUid'];
$urls = getUrls($uid);

if (isset($urls)){
	foreach ($urls as $url) {
		?>
			<div class="urlLine">
			<div class="title">
			<?php
			echo $url['title'] . "&nbsp;&nbsp;";
		?>
			</div>
			<div class="url">
			<?php
			echo "<a href=" . "http://" . $url['url'] . " target=\"_blank\">" . $url['url'] . "</a>";
		?>
			</div>
			<div class="op">
			<input type="hidden" class="urlId" value="<?php echo $url['urlId']; ?>" />
			<a class="editBtn" href="edit.php?urlId=<?php echo $url['urlId']; ?>">修改</a>
			<a class="deleteBtn" href="del.php?urlId=<?php echo $url['urlId']; ?>">删除</a>
			</div>
			</div>
			<?php
	}
} else {
	echo "<br>"."您还没有添加标签";
}
?>
</div>
</div>

<?php include("footer.html");?>
