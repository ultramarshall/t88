<?PHP
include("../koneksi.php"); #untuk menginclude file koneksi.php
if (empty($nama_admin)){ #jika user belum login maka di alihkan ke halaman index.php
header("location:index.php"); #mengalihkan ke index.php
}
?>
<html>
<head>
<title>Taruhan88 | Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="http://megasoft-id.com">
<meta name="Author" content="Taruhan88">
<meta name="Keywords" content="Taruhan88">
<meta name="description" content="Taruhan88">
<meta name="language" content="id">
<link rel="shortcut icon" href="../me.ico"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> <!--pemanggilan file css-->
<link rel="stylesheet" type="text/css" href="../css/mos-style.css"> <!--pemanggilan file css-->
</head>
<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		<a href="admin.php">
		<img src="me.png" height="50" width="50"/>
		</a>
		Welcome, <?PHP echo $nama_admin; ?><br>
		<a href="slider.php">List Slider</a> | <a href="logout.php">Logout</a>
		</div>
	<div class="clear"></div>
	</div>
</div>