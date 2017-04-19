<?php
$status1=$_SESSION['status1'];
if($status1=='Aktif'){
	$ym='icon_YM.png';
}else{
	$ym='icon_YMoffline.png';
}
$yahoo1=$_SESSION['yahoo1'];
$yahoo2=$_SESSION['yahoo2'];
?>
<style type="text/css">
table.data {font-size: 12px; padding-bottom:0px}
td.data { padding-bottom:0px; border: none solid #dcdcdc;color: #C0C0C0;vertical-align: top;}
tr.data {background: #C0C0C0}
td.data:hover { background-image:url(images/polkadot.png );}
td.data1 {background-image:url(images/text_phone.png);}
td.data2 {background-image:url(images/text_BBM.png);}
td.data3 {background-image:url(images/text_whatsapp.png);}
td.data4 {background-image:url(images/text_YM.png);}
td.data5 {background-image:url(images/text_line.png);}
td.data6 {background-image:url(images/text_skype.png);}
tr.data small a{color: #C0C0C0;}
tr.data small{color: #C0C0C0;}
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="240" height="65" align="right"><img src="images/livesupport.png" alt="Live Support" /></td>
	</tr>
	<tr>
		<td width="240" align="right">
			<table class="data" width="100%" border="0" cellpadding="0" cellspacing="0">
  				<tr class="data" valign="bottom" align="left">
    				<td width="55" height="55" align="left"><img src="images/icon_phone.png" alt="Phone" width="100%" height="100%" /></td>
					<td class="data1" width="185" height="55" align="left" width="100%" height="100%"></td>
				</tr>
				<tr class="data" valign="bottom" align="left">
    				<td height="55" align="left"><img src="images/icon_BBM.png" alt="BBM" width="100%" height="100%" /></td>
					<td class="data2" width="185" height="55" align="left"></td>
				</tr>
				<tr class="data" valign="bottom" align="left">
    				<td height="55" align="left"><img src="images/icon_whatsapp.png" alt="Whatsapp" width="100%" height="100%" /></td>
					<td class="data3" width="185" height="55" align="left"></td>
				</tr>
				<tr class="data" valign="bottom" align="left">
					<td height="55" align="left"><a href="ymsgr:sendim?<?php echo $yahoo1; ?>" target="_blank"><img src="images/<?php echo $ym; ?>" alt="Yahoo Messenger" width="100%" height="100%" /></a></td>
					<td class="data4" width="185" height="55" align="left"><a href="ymsgr:sendim?<?php echo $yahoo1; ?>" target="_blank"><img src="images/blank.png" width="185" height="55" /></a></td>
				</tr>
				<tr class="data" valign="bottom" align="left">
     				<td height="55" align="left"><img src="images/icon_line.png" alt="Line" width="100%" height="100%" /></td>
					<td class="data5" width="185" height="55" align="left"></td>
				</tr>	
				<tr class="data" valign="bottom" align="left">
     				<td height="55" align="left"><a href="skype:taruhan88?call"> <img src="images/icon_skype.png" alt="skype" width="100%" height="100%" /></a></td>
					<td class="data6" width="185" height="55" align="left"><a href="skype:taruhan88?call"><img src="images/blank.png" width="185" height="55" /></a></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
