<?PHP
include("session_admin.php");
include("header.php");
if (empty($nama_admin)){
header("location:index.php");
}
?>
<link rel="shortcut icon" href="favicon.gif">
<div id="wrapper">
	<div id="leftBar">
	<?PHP include("menu-kanan.php"); ?> <!-- For menu on right bar -->
	</div>
	<div id="rightContent">
		<h3>Buat Image Slider Baru</h3>
		<form action="proses-add-slider.php" enctype="multipart/form-data" method="post">
	    <me>Judul</me></br>
		<input required name="judul" type="text" style="width:97%"><p>
		<me>Pilih image (jpeg, jpg, bmp, png)</me></br>
		<input required type="file" name="file_image"/><p>
		<input type="submit" class="btn" value="Save"/>
		</form>
	</div>
<div class="clear"></div>
<?PHP include("footer.php"); ?>
</div>
</body>
</html>