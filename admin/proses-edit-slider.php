<?php
include("../koneksi.php");
$id = $_POST['id'];
$random = rand(1, 1000000000);
$my_path_img = "../media/image/";
$file_img = "$random.jpg";
$path_img = $my_path_img.$file_img;
$judul = $_POST['judul'];
$img = $_POST['image'];
$cek = $_FILES['file_image']['name'];
if(empty($cek)){
		$sql = "update slider set judul='$judul' where id='$id'";
		mysql_query($sql);
		echo "<script language='JavaScript' type='text/javascript'>
			window.alert('Edit Judul has succesful!');
		</script>
                <script language='JavaScript' type='text/javascript'> 
					window.location.href=('slider.php'); 
				</script>";
}else{
	if (move_uploaded_file($_FILES["file_image"]["tmp_name"], $path_img)){
		$query=mysql_query("update slider set judul='$judul', image='media/image/$file_img' where id='$id'");
   		if($query){
			unlink("../$img");
			echo "<script language='JavaScript' type='text/javascript'>
					window.alert('Edit Image Slider has succesful!');
				</script>
               	<script language='JavaScript' type='text/javascript'> 
					window.location.href=('slider.php'); 
				</script>";
		}
	}else{
		echo "Upload images Gagal!";
	}
}
?>