<?PHP
include("session_admin.php");
include("header.php");
if (empty($nama_admin)){
header("location:index.php");
}
?>
<div id="wrapper">
	<div id="leftBar">
	<?PHP include("menu-kanan.php"); ?> <!-- For menu on right bar -->
	</div>
	<div id="rightContent">
		<h3>User Admin Untuk Login</h3>
		<?PHP
		if (!empty($_GET['pesan'])){
		if ($_GET['pesan']==1){
		echo "<b><font color='green'>Berhasil Menyimpan data admin!</font></b>";
		}
		if ($_GET['pesan']==2){
		echo "<b><font color='red'>Gagal Menyimpan data admin!</font></b>";
		}
		}
		?>
	    <?PHP
		$sql = mysql_query("select * from admin where name='$nama_admin'");
		$data = mysql_fetch_array($sql);
		$nama_asli = $data['name'];
		$pass_asli = $data['pswd'];
		?>
		<form action="save_admin.php" method="post">
	    <me>Nama Admin</me></br>
		<input name="nama_asli" type="text" value="<?PHP echo $nama_asli ?>" style="width:97%"><p>
		<me>Password Asli</me></br>
		<input name="pass_asli" type="password" value="<?PHP echo $pass_asli ?>" style="width:97%"><p>
		<input type="submit" class="btn" value="Save"/>
		</form>
	</div>
<div class="clear"></div>
<?PHP include("footer.php"); ?>
</div>
</body>
</html>