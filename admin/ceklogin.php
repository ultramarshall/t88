<?PHP
SESSION_START();
include("../koneksi.php"); #must be including for connection database
$nama = $_POST['username']; #get username from index.php (mendapatkan username yang di ketikan di form index.php)
$pass = $_POST['pasword']; #get password from index.php (mendapatkan password yang di ketikan di form index.php)
$sql = mysql_query("select * from admin where name='$nama'"); #query sql for select $nama
$hasil = mysql_num_rows($sql); #cek apakah username ada(1) atau tidak(0)
if ($hasil==0){ #jika hasilnya 0 maka
header("location:index.php?error=2"); #alihkan ke index.php?error=2 => munculkan pesan username belum terdaftar
$stop = 1; #hentikan sampai di sini (script hanya di excute sampai di sini,.. yang di bawah tidak di excute lagi)
}
if ($stop!=1){ #jika stop tidak 1 maka
$data = mysql_fetch_array($sql); #sql for get data 
$pswd = $data['pswd']; #get passwordnya
if ($pass == $pswd){ #jika password dari form index = password yang ada di database maka
$_SESSION['login_admin']="$nama"; #create session my_name
header("location:slider.php"); #alihkan ke home.php
}
else {
header("location:index.php?error=1"); #alihkan ke index.php?error=2 => munculkan pesan password salah
}
}
?>