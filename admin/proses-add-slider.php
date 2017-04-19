<?php
include("../koneksi.php");
$random = rand(1, 1000000000);
$tglskr = date('Y-m-d h:i:s');
$my_path_img = "../media/image/";
$file_img = "$random.jpg";
$path_img = $my_path_img.$file_img;
$judul = $_POST['judul'];
if (move_uploaded_file($_FILES["file_image"]["tmp_name"], $path_img)){
	$query=mysql_query("insert into slider values('','$judul','media/image/$file_img')");
		
		if($query){
			echo "<script language='JavaScript' type='text/javascript'>
			window.alert('adding Image Slider succesful!');
			</script>
                <script language='JavaScript' type='text/javascript'> 
					window.location.href=('slider.php'); 
				</script>";
		}else{
			echo mysql_error();
		}
}
else{
echo "Upload images Gagal!";
}
?>