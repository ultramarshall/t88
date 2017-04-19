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
		<h3>Configuration</h3>
		<form action="save_config.php" method="post">
		<me>Domain Name => www.taruhan88.com</me></br>
		<input name='domain' type="text" value="<?PHP echo $domain ?>" style="width:97%"><p>
		<me>Company Name => Taruhan 88</me></br>
		<input name='company' type="text" value="<?PHP echo $company ?>" style="width:97%"><p>
		<me>Email => taruhan88@yahoo.com</me></br>
		<input name='email' type="text" value="<?PHP echo $email_admin ?>" style="width:97%"><p>
		<me>Ketika User Download Harus Login</me></br>
	    <select name="down_login">
		<option><?PHP echo $harus_login ?></option>
		<option>Ya</option>
		<option>Tidak</option>
		</select><p>
		<input type="submit" class="btn" value="Save"/>
		</form>
	</div>
<div class="clear"></div>
<?PHP include("../footer.php"); ?>
</div>
</body>
</html>