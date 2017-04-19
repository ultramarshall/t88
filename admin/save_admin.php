<?PHP
include("../koneksi.php");
include("session_admin.php");
if (empty($nama_admin)){
header("location:index.php");
}
$nama_asli = $_POST['nama_asli'];
$pass_asli = $_POST['pass_asli'];
if (!empty($nama_asli)){
$sql = mysql_query("update admin set name='$nama_asli', pswd='$pass_asli'");
if ($sql){
$_SESSION['login_admin']=$nama_asli;
header("location:admin.php?pesan=1");
}
}
else{
echo "You cannot Access This Page";
}
?>