<?PHP

include("session_admin.php");

include("header.php");

if (empty($nama_admin)){

header("location:index.php");

}

if($_POST['button']=="Save")
{
	mysql_query("update slider_status set status='".$_REQUEST['status']."'");
	echo "<script>location.href='status-slider.php';</script>";
		exit(0);
}

?>



<?php 
		  $res=mysql_fetch_array(mysql_query("select * from slider_status where id='1'"));
		  ?>

<div id="wrapper">

	<div id="leftBar">

	<?PHP include("menu-kanan.php"); ?> <!-- For menu on right bar -->

	</div>

	<div id="rightContent">

		<h3>STATUS SLIDER : <?php echo $res[1] ?></h3>

		
	    <?PHP

		$sql = mysql_query("select * from admin where name='$nama_admin'");

		$data = mysql_fetch_array($sql);

		$nama_asli = $data['name'];

		$pass_asli = $data['pswd'];

		?>

		

	    <me>&nbsp;</me></br>

		 
          <form action="" method="post" class="form-horizontal">
          
          <?php
		  if($res[1]=="on")
		  {
		  ?>
          <input type="hidden" name="status" value="off" />
                    <button type="submit" name="button" class="btn blue" value="Save"><i class="icon-ok"></i> MATIKAN SLIDER</button>   
                    
                    <?php } else { ?>
                     <input type="hidden" name="status" value="on" />
                    <button type="submit" name="button" class="btn blue" value="Save"><i class="icon-ok"></i> HIDUPKAN SLIDER</button> 
                    
                    <?php } ?>
                    </form>      

	</div>

<div class="clear"></div>

<?PHP include("footer.php"); ?>

</div>

</body>

</html>