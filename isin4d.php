<?php 
session_start();
include ("koneksi.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Taruhan 88</title>
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
  			<tr>
    			<th align="left" valign="top" width="77%" bgcolor="#000000">
<table width="100%" border="0" cellspacing="5" cellpadding="5" style="color:#CCCCCC" style="font-family:Verdana, Arial, Helvetica, sans-serif">
  <tr>
    <td>
<p align="left">
<font color="#C0C0C0" face="Verdana, Arial, Helvetica, sans-serif" style="font-weight:normal" size="2">
<p align="center"><font size="6" color="#FFD700">KLIK4D</font></p>
<hr />
<br />
Klik4d adalah situs untuk permainan Togel online yang di kemas khusus untuk member yang ingin bermain togel versi online (tebak nomor) yang mengikuti pengeluaran angka oleh <a href="http://www.klik4d.com/login.aspx" target="_blank" rel="nofollow"><font color="#FF0000" size="2">(www.klik4d.com)</font></a> dan jadwal perputaran Nomor adalah setiap Senin,Rabu, Kamis , Sabtu dan Minggu untuk anda yang ingin hobby togel kini kami telah menghadirkan togel versi online yang dapat dimainkan langsung secara online , tentunya dengan keamanan yang sangat terjamin. Bergabunglah bersama kami di Agen bola dan casino terpercaya.
<br />
Untuk bergabung dengan kami, silahkan <a href="daftar.php">KLIK DISINI</a>
<br />
</p>
</font>
</td>
</tr>
</table>
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