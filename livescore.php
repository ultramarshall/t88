<?php 
session_start();
include ("koneksi.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Taruhan88.com | Livecore Hasil Pertandingan Sepak Bola Online</title>
<meta name="author" content="taruhan88.com" />
<meta name="google-site-verification" content="" />
<meta name="description" content="Livecore Hasil Pertandingan Sepak Bola Online Dari Agen judi atau Bandar judi Taruhan88.com." />
<meta name="keywords" content="agen judi,bandar judi,livescore,taruhan bola online" />
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
    			    			<th align="left" valign="top" width="100%" style="margin-top:10px" bgcolor="#000000">
<p align="center"><font size="5" color="#FFD700">LIVESCORE</font></p>
									<hr />
					<table width="100%" bgcolor="#000000"  border="0" cellspacing="2" cellpadding="2" style="color:#CCCCCC" style="font-family:Verdana, Arial, Helvetica, sans-serif">
  						<tr>
    						<td>
								<p align="left"	>
									<iframe src="http://free.7m.cn/live.aspx?mark=en&TimeZone=%2B0700&wordAd=&wadurl=http://&width=700&cpageBgColor=FFFFFF&tableFontSize=12&cborderColor=333333&ctdColor1=EEEEEE&ctdColor2=FFFFFF&clinkColor=0044DD&cdateFontColor=FFFFFF&cdateBgColor=333333&scoreFontSize=12&cteamFontColor=000000&cgoalFontColor=FF0000&cgoalBgColor=FFFF99&cremarkFontColor=000000&cremarkBgColor=F7F8F3&Skins=2&teamWeight=400&scoreWeight=700&goalWeight=700&fontWeight=700&DSTbox="  width="100%" height="640" frameborder="0"></iframe>
							</td>
						</tr>
					</table>
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