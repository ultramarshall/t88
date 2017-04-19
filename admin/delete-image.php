<?PHP
include("../koneksi.php");
include("session_admin.php");
if (empty($nama_admin)){
header("location:index.php");
}
$id = $_GET['id'];
$img = $_GET['img'];
if (!empty($id)){
$sql = mysql_query("delete from slider where id='$id'");
}
if ($sql){
unlink("../$img");
header("location:slider.php?pesan=1");
}
else{
header("location:slider.php?pesan=2");
}
?>