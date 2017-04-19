<?php
include("session_admin.php");
include("header.php");
if (empty($nama_admin)){
header("location:index.php");
}else{
$runningtext=$_POST['runningtext'];

$sql="UPDATE setting SET runningtext='$runningtext' where id='1'";
mysql_query($sql);
?>
<script language='JavaScript' type='text/javascript'> 
    window.location.href=('setting.php'); 
</script>";
<?php
}
?>