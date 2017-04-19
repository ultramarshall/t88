<?php
include("session_admin.php");
include("header.php");
if (empty($nama_admin)){
header("location:index.php");
}else{
$alamat=$_POST['alamat'];
$hp=$_POST['hp'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];

$sql="UPDATE setting SET alamat='$alamat',hp='$hp',telepon='$telepon',email='$email' where id='1'";
mysql_query($sql);
?>
<script language='JavaScript' type='text/javascript'> 
    window.location.href=('setting.php'); 
</script>";
<?php
}
?>