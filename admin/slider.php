<?PHP
include("session_admin.php");
include("header.php");
if (empty($nama_admin)){
header("location:index.php");
}
?>
<link rel="shortcut icon" href="favicon.gif">
<div id="wrapper">
	<div id="leftBar">
	<?PHP include("menu-kanan.php"); ?> <!-- For menu on right bar -->
	</div>
	<div id="rightContent">
	<p><font size="5"><strong>SLIDER</strong></font></p>
		<?PHP
		if (!empty($_GET['pesan'])){
		if ($_GET['pesan']==1){
		echo "<b><font color='green'>Berhasil Menghapus Image Slider!</font></b>";
		}
		if ($_GET['pesan']==2){
		echo "<b><font color='red'>Gagal Menghapus Image Slider!</font></b>";
		}
		}
		?>
	<table class="datatable" border="1" bordercolor="#c0c0c0">
			<tr class="data">
				<th class="data" width="30px">No</th>
				<th class="data">Judul</th>
				<th class="data">Images</th>
				<th class="data" width="75px">Action</th>
			</tr>
			<?PHP
			#get data from mysql
			
			$no = 1;
			$dataPerPage = 6;
			if(isset($_GET['page']))
			{
		    	$noPage = $_GET['page'];
				$urut = (($noPage - 1) * $dataPerPage);
			}else{
    			$noPage = 1;
				$urut = 0;
			}
			$offset = ($noPage - 1) * $dataPerPage;
			$query = "select * from slider LIMIT $offset, $dataPerPage";
			$result = mysql_query($query) or die('Error');
			
			while ($data = mysql_fetch_array($result)){
			$id=$data['id'];
			$judul=$data['judul'];
			$images=$data['image'];

			?>
			<tr class="data">
				<td class="data" width="30px" align="center"><?PHP echo $no; ?></td>
				<td class="data" width="300px"><b><?PHP echo $judul; ?></b></td>
				<td class="data" width="260px"><img src="<?PHP echo "../$images"; ?>" width="260" height="195"></u></td>
				<td class="data" width="100px">
				<center>
				<a target="_blank" href="fullimage.php?id=<?PHP echo $id; ?>" title="view Full Image"><img src="../css/img/detail.png"></a>
				<a href="delete-image.php?id=<?PHP echo $id; ?>&img=<?PHP echo $images; ?>" title="Delete Image" onClick="return confirm('Apakah anda yakin akan menghapus image ini ?')"><img src="../css/img/delete.png"></a>
				<a href="edit-image.php?id=<?PHP echo $id; ?>" title="Edit Image"><img src="../css/img/change.png"></a>
				</center>
				</td>
			</tr>
			<?PHP
			$no++;
			}
			?>
		</table>
		<font size="4">
		<?php
		$query   = "SELECT COUNT(*) AS jumData FROM slider";
		$hasil  = mysql_query($query);
		$data     = mysql_fetch_array($hasil);
		$jumData = $data['jumData'];

		// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

		$jumPage = ceil($jumData/$dataPerPage);

		// menampilkan link previous

		if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=ujian".($noPage-1)."'>&lt;&lt; Prev</a>";
		// memunculkan nomor halaman dan linknya
	
		for($page = 1; $page <= $jumPage; $page++)
		{
        	if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
         	{
            	if (($showPage == 1) && ($page != 2))  echo "...";
            	if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            	if ($page == $noPage) echo " <b>".$page."</b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a> ";
            	$showPage = $page;
         	}
		}

		// menampilkan link next

		if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next &gt;&gt;</a>";
		?>
		</font>
	</div>		
<div class="clear"></div>
<?PHP include("footer.php"); ?>
</div>
</body>
</html>