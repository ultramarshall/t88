<?php
include("session_admin.php");
include("header.php");
if (empty($nama_admin)){
header("location:index.php");
}else{
$yahoo1=$_POST['yahoo1'];
$status1=$_POST['status1'];
$yahoo2=$_POST['yahoo2'];
$status2=$_POST['status2'];

$sql="UPDATE setting SET yahoo1='$yahoo1',status1='$status1',yahoo2='$yahoo2',status2='$status2' where id='1'";
mysql_query($sql);
?>
<script language='JavaScript' type='text/javascript'> 
    window.location.href=('setting.php'); 
</script>";
<?php
}
?>