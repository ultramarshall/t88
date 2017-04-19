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
$image = $data['image'];
?>
<link rel="shortcut icon" href="favicon.gif">
<div id="wrapper">
	<div id="leftBar">
	<?PHP include("menu-kanan.php"); ?> <!-- For menu on right bar -->
	</div>
	<div id="rightContent">
	    <me><font size="5"><strong><?PHP echo "$judul" ?></strong></font></me></br>
		<me><img src="<?PHP echo "../$image" ?>"></me></br></br>
	</div>
<div class="clear"></div>
<?PHP include("footer.php"); ?>
</div>
</body>
</html>