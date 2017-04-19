<?PHP
include("session_admin.php");
include("header.php");
if (empty($nama_admin)){
header("location:index.php");
}
$id = $_GET['id'];
$sql = mysql_query("select * from slider where id='$id'");
$data = mysql_fetch_array($sql);
$judul = $data['judul'];
$images = $data['image'];
?>
<div id="wrapper">
	<div id="leftBar">
	<?PHP include("menu-kanan.php"); ?> <!-- For menu on right bar -->
	</div>
	<div id="rightContent">
		<h3>Edit Image Slider</h3>
		<form action="proses-edit-slider.php" enctype="multipart/form-data" method="post">
		<input name="image" value="<?PHP echo "$images" ?>" type="hidden">
		<input name="id" value="<?PHP echo "$id" ?>" type="hidden">
	    <me>Judul</me></br>
		<input name="judul" value="<?PHP echo "$judul" ?>" required type="text" style="width:97%"><p>
		<me>Pilih image (jpeg, jpg, bmp, png) <i>kosongkan jika tidak ada perubahan pada image</i></me></br>
		<input type="file" name="file_image"/><p>
		<input type="submit" class="btn" value="Edit"/>
		</form>
	</div>
<div class="clear"></div>
<?PHP include("footer.php"); ?>
</div>
</body>
</html>