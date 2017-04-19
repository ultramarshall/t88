<?PHP
include("session_admin.php");
include("header.php");
if (empty($nama_admin)){
header("location:index.php");
}
$sql = mysql_query("select * from setting where id='1'");
$data = mysql_fetch_array($sql);
$alamat = $data['alamat'];
$hp = $data['hp'];
$telepon = $data['telepon'];
$email = $data['email'];

$yahoo1 = $data['yahoo1'];
$status1 = $data['status1'];
$yahoo2 = $data['yahoo2'];
$status2 = $data['status2'];

$runningtext = $data['runningtext'];
?>
<link rel="shortcut icon" href="favicon.gif">
<div id="wrapper">
	<div id="leftBar">
	<?PHP include("menu-kanan.php"); ?> <!-- For menu on right bar -->
	</div>
	<div id="rightContent">
	<form name="form1" method="post" action="set1.php">
	<table width="780" height="59" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#111111" id="AutoNumber1" style="border-collapse: collapse">
    	<tr> 
	    	<td width="208" height="19"><b><font face="Verdana" size="2">DATA PENGELOLA</font></b></td>
      		<td width="285" height="19">&nbsp;</td>
      		<td width="319" height="19">&nbsp;</td>
    	</tr>
    	<tr> 
      		<td height="14"><font face="Verdana" size="2">Alamat pengelola</font></td>
      		<td height="14"><font face="Verdana"><input name="alamat" type="text" id="alamat" value="<?php echo $alamat; ?>" size="30"></font></td>
      		<td height="14"><font face="Verdana" size="2"><?php echo $alamat; ?></font></td>
    	</tr>
    	<tr> 
      		<td height="14"><font face="Verdana" size="2">HP pengelola</font></td>
      		<td height="14"><font face="Verdana"><input name="hp" type="text" id="hp" value="<?php echo $hp; ?>" size="30"></font></td>
      		<td height="14"><font face="Verdana" size="2"><?php echo $hp; ?></font></td>
    	</tr>
    	<tr> 
      		<td height="14"><font face="Verdana" size="2">Telepon pengelola</font></td>
      		<td height="14"><font face="Verdana"><input name="telepon" type="text" id="telepon" value="<?php echo $telepon; ?>" size="30"></font></td>
      		<td height="14"><font face="Verdana" size="2"><?php echo $telepon; ?></font></td>
    	</tr>
    	<tr> 
      		<td height="14"><font face="Verdana" size="2">Email pengelola</font></td>
      		<td height="14"><font face="Verdana"><input name="email" type="text" id="email" value="<?php echo $email; ?>" size="30"></font></td>
      		<td height="14"><font face="Verdana" size="2"><?php echo $email; ?></font></td>
    	</tr>
    	<tr bgcolor="#cc9933"> 
      		<td height="26">&nbsp;</td>
      		<td height="26"><font face="Verdana"><input type="submit" value="UBAH" name="submit1"></font></td>
      		<td height="26">&nbsp;</td>
    	</tr>
  	</table>
	</form>
	<form name="form2" method="post" action="set2.php">
	<table width="780" height="59" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#111111" id="AutoNumber1" style="border-collapse: collapse">
    	<tr> 
	    	<td width="208" height="19"><b><font face="Verdana" size="2">EMAIL CS YAHOO</font></b></td>
      		<td width="285" height="19">&nbsp;</td>
      		<td width="319" height="19">&nbsp;</td>
    	</tr>
    	<tr> 
      		<td height="14"><font face="Verdana" size="2">CS Yahoo 1</font></td>
      		<td height="14"><font face="Verdana"><input name="yahoo1" type="text" id="yahoo1" value="<?php echo $yahoo1; ?>" size="30"></font></td>
      		<td height="14"><font face="Verdana" size="2"><?php echo $yahoo1; ?></font></td>
        </tr>
        <tr>
                <td height="14"><font face="Verdana" size="2">Status CS 1</font></td>
      		<td height="14"><font face="Verdana"><select name="status1" style="width:80%">
                                                                             <option value="<?php echo $status1; ?>"><?php echo $status1; ?></option>
					                                     <option value="Aktif">Aktif</option>
					                                     <option value="NonAktif">NonAktif</option></td>
      		<td height="14"><font face="Verdana" size="2"><?php echo $status1; ?></font></td>
    	</tr>
    	<tr> 
      		<td height="14"><font face="Verdana" size="2">CS Yahoo 2</font></td>
       		<td height="14"><font face="Verdana"><input name="yahoo2" type="text" id="yahoo2" value="<?php echo $yahoo2; ?>" size="30"></font></td>
      		<td height="14"><font face="Verdana" size="2"><?php echo $yahoo2; ?></font></td>
    	</tr>
        <tr>
                <td height="14"><font face="Verdana" size="2">Status CS 2</font></td>
      		<td height="14"><font face="Verdana"><select name="status2" style="width:80%">
                                                                             <option value="<?php echo $status2; ?>"><?php echo $status2; ?></option>
					                                     <option value="Aktif">Aktif</option>
					                                     <option value="NonAktif">NonAktif</option></td>
      		<td height="14"><font face="Verdana" size="2"><?php echo $status2; ?></font></td>
    	</tr>
    	<tr bgcolor="#cc9933"> 
      		<td height="26">&nbsp;</td>
      		<td height="26"><font face="Verdana"><input type="submit" value="UBAH" name="submit2"></font></td>
      		<td height="26">&nbsp;</td>
    	</tr>
  	</table>
	</form>
	<form name="form3" method="post" action="set3.php">
	<table width="780" height="59" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#111111" id="AutoNumber1" style="border-collapse: collapse">
    	<tr> 
	    	<td width="180" height="19"><b><font face="Verdana" size="2">RUNNING TEXT</font></b></td>
      		<td width="600" height="19">&nbsp;</td>
    	</tr>
    	<tr> 
      		<td height="14" valign="top"><font face="Verdana" size="2">Running Text</font></td>
      		<td><font face="Verdana"><textarea name="runningtext" cols="40" rows="3" ><?PHP echo "$runningtext" ?></textarea></font><br /><font face="Verdana" size="2"><?php echo $runningtext; ?></font></td>
    	</tr>
    	<tr bgcolor="#cc9933"> 
      		<td height="26">&nbsp;</td>
      		<td height="26"><font face="Verdana"><input type="submit" value="UBAH" name="submit3"></font></td>
      		<td height="26">&nbsp;</td>
    	</tr>
  	</table>
	</form>
	</div>
<div class="clear"></div>
<?PHP include("footer.php"); ?>
</div>
</body>
</html>