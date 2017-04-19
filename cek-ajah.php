<?php
session_start();
include "koneksi.php";
 $stat=mysql_fetch_array(mysql_query("select * from slider_status where id='1'"));

 if($stat[1]!=$_SESSION['status_slider']&&$stat[1]=="on")
 {
	 echo "<script>location.href='http://taruhan88.com';</script>";
		exit(0);
 }

 

if($stat[1]!=$_SESSION['status_slider']&&$stat[1]=="off")
 {
	 echo "<script>location.href='http://taruhan88.com';</script>";
		exit(0);
 }
 
?>