<?PHP
SESSION_START();
$nama_admin = $_SESSION['login_admin'];
include("../koneksi.php");
if (!empty($nama_admin)){ #jika dia sudah membuat login maka tidak boleh akses halaman ini lagi (session my_name tidak kosong)
header("Location:news.php"); #alihkan ke home.php
}
?>
<html>
<head>
<title>Taruhan88 | Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="http://megasoft-id.com">
<meta name="Keywords" content="Taruhan88">
<meta name="description" content="Taruhan88">
<meta name="language" content="id">
<link rel="shortcut icon" href="favicon.gif"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/mos-style.css"> <!--pemanggilan file css-->
<link rel="stylesheet" type="text/css" href="../css/button.css">
</head>
<body>
<div id="header">
	<div class="inHeaderLogin"><?PHP
	if ($_GET['error']==1){
    echo "<div style='margin-left:200px;' class='gagal'>Your Password is Wrong!</div>";
    }
	if ($_GET['error']==2){
	echo "<div style='margin-left:200px;' class='gagal'>Username not regitered!</div>";
	}
	?></div>
</div>

<div id="loginForm">
	<div class="headLoginForm">
	Login To Admin
	</div>
	<div class="fieldLogin">
	<form method="POST" action="ceklogin.php">
	<me>Username</me><br>
	<input type="text" style="width:90%" required name="username" class="login"><br>
	<me>Password</me><br>
	<input type="password" style="width:90%"  required name="pasword" class="login"><br>
	<input style="position:relative;float:right;margin-right:26px" type="submit" class="large gray button" value="Login">
	</form>
	</div>
</div>
</body>
</html>