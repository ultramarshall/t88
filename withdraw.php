<?php 
session_start();
include ("koneksi.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Withdraw Dana Taruhan88 - Agen Bola | Judi bola | Bandar Bola | Judi Online Terpercaya</title>
<meta name="author" content="taruhan88.com" />
<meta name="google-site-verification" content="" />
<meta name="description" content="Withdraw Dana dari Agen Bola, Judi Bola, Bandar Bola, Judi Online Terpercaya dengan Aman dan Nyaman." />
<meta name="keywords" content="Agen Bola, Judi Bola, Bandar Bola, Judi Online Terpercaya" />
<link rel="shortcut icon" href="favicon.gif" type="image/x-icon">
<link rel="stylesheet" href="css/main.css" type="text/css" media="screen, projection" />
	<script type="text/javascript" src="js/liveclock.js"></script>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
<?php include ("loaddata.php"); ?>

	<div class="tanggal">
		<?php include ("tanggal.php"); ?>
    </div>
	<div class="tanggalback">
    </div>
	<div class="header">
        <?php include ("logo.php"); ?>
		<div class="navigationback">
		</div>
        <div class="navigation">
			<?php include ("menubutton.php"); ?>
        </div>
    </div>
	<div class="runningtext">
		<?php include ("runningtext.php"); ?>
	</div>
	<div class="wrap">
    	<table width="100%" cellpadding="0" cellpadding="0">
  			<tr>    			<th align="left" valign="top" width="77%" style="padding:3px 0 0 0">
			<form action="s_withdraw.php" method="POST" class="customClass2" style="width:100%">
			<table border="0" width="100%" cellpadding="5" bgcolor="#000000" cellspacing="5" align="center">
				<tr>
				<td>
			<p align="center"><font size="5" color="#FFD700">&nbsp;FORM WITHDRAW</strong></font></p>
			<hr />
			<table border="0" width="65%" cellpadding="5" cellspacing="5" align="center">
			<tr>
				<td height="25" align="left" style="color: #FFFFFF" width="45%"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">Email</font></td>
				<td width="5%"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">:</font></td>
				<td align="right" width="50%"><input name="email" value="" size="32" maxlength="100" type="text" /></td></tr>
			<tr>
				<td height="25" align="left" style="color: #FFFFFF"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">Bank</font></td>
				<td width="5%"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">:</font></td>
				<td align="right"><select name="bank" style="width:100%">
					<option value="BCA">BCA</option>
					<option value="MANDIRI">MANDIRI</option>
					<option value="BNI">BNI</option>
					<option value="BRI">BRI</option></select></td></tr>
			<tr>
				<td height="25" align="left" style="color: #FFFFFF"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">ID Games</font></td>
				<td width="5%"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">:</font></td>
				<td align="right"><input name="idgames" value="" size="32" maxlength="100" type="text" /></td></tr>
			<tr>
				<td height="25" align="left" style="color: #FFFFFF" valign="top"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">Nomor Rekening</font></td>
				<td width="5%" valign="top"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">:</font></td>
				<td align="right"><input name="nomorrekening" value="" size="32" maxlength="100" type="text" /><br />
				<font face="Arial, Helvetica, sans-serif" style="font-weight:normal" size="1"><i>(No Rek. harus sama dengan ketika daftar)</i></font></td></tr>
			<tr>
				<td height="25" align="left" style="color: #FFFFFF"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">Nama Rekening</font></td>
				<td width="5%"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">:</font></td>
				<td align="right"><input name="pemilikrekening" value="" size="32" maxlength="100" type="text" /></td></tr>
			<tr>
				<td height="25" align="left" style="color: #FFFFFF"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">Game</font></td>
				<td width="5%"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">:</font></td>
	<td align="right"><select name="game" style="width:99%" style="background-color:#CCCCCC">
							<option value="SBOBET">SBOBET</option>
							<option value="IBCBET">IBCBET</option>
							<option value="SBOBETCASINO">SBOBET CASINO</option>
							<option value="GUAVITA">GUAVITA</option>
							<option value="IONCASINO">IONCASINO</option>
							<option value="BOLATANGKAS2">BOLATANGKAS</option>
							<option value="KLIK4D">KLIK4D</option>
							<option value="IDNPOKER">IDN POKER</option>
						</select></td></tr>
			<tr>
				<td height="25" align="left" style="color: #FFFFFF"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">Jumlah Withdraw</font></td>
				<td width="5%"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">:</font></td>
				<td align="right"><input name="jumlah" style="text-align:right" value="0" size="32" maxlength="100" type="text" /></td></tr>
			<tr>
				<td height="15" align="left" style="color: #FFFFFF">&nbsp;</td>
				<td height="15" align="left" style="color: #FFFFFF">&nbsp;</td>
				<td align="left" valign="bottom"><img align="middle" alt="" src="img.php" style="float: center" /></td></tr>
			<tr>
				<td height="15" align="left" style="color: #FFFFFF"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">Code</font></td>
				<td width="5%"><font face="Arial, Helvetica, sans-serif" style="font-weight:normal">:</font></td>
				<td align="right" valign="bottom"><input name="security_code" value="" size="32" maxlength="100" type="text" /></td></tr>
		</table>
		</td>
		</tr>
		<tr>
			<td align="center" height="40">
				<input value="WITHDRAW" size="25" style="font-weight:bold" type="image" src="images/withdraw.png" width="427" height="50" />
			</td>
		</tr>
		</table>
	</form>

			</th>
  			<th align="left" valign="top">
				<?php include ("livesupport.php"); ?>
			</th>
			</tr>
		</table>
	</div>
	<div class="wrap2">
		<?php include ("play.php"); ?>
	</div>
	<div class="footer">
    	<?php include ("footer.php"); ?>
    </div>
</body>
</html>