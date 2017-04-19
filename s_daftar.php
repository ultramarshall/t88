<?php
session_start(); 
$email=$_SESSION['email'];
if(($_SESSION['captcha']) == ($_POST['security_code'])) { 
	// Insert you code for processing the form here, e.g emailing the submission, entering it into a database.
	$emailfrom 	= $email; // From email address
	$emailto 	= $email; // Email address you want submitted forms to go to
	$Subject 	= "TARUHAN88.COM - PENDAFTARAN"; // subject line for emails
	$pr 		= ucwords(htmlentities((trim($_POST['pemilikrekening']))));
	$nr 		= ucwords(htmlentities((trim($_POST['nomorrekening']))));
	$bank 		= ucwords(htmlentities((trim($_POST['bank']))));
	$hp 		= ucwords(htmlentities((trim($_POST['hp']))));
	$email 		= ucwords(htmlentities((trim($_POST['email']))));
	$permainan	= ucwords(htmlentities((trim($_POST['game']))));
 if(empty($pr)||empty($nr)||empty($hp)||empty($email)){
 	echo "<script language='JavaScript' type='text/javascript'>
			window.alert('Tidak Boleh Ada Data Yang Kosong, Di Mohon Untuk Periksa Kembali.');
	    </script>
    	<script language='JavaScript' type='text/javascript'> 
			window.location.href=('daftar.php'); 
		</script>";
 }else{
	// prepare email body text
	$Body .= "";
	$Body .= "FORM PENDAFTARAN ";
	$Body .= "\n";	
	$Body .= "\n";
    $Body .= "";
	$Body .= "Pemilik Rekening : ";
	$Body .= $pr;
    $Body .= "\n";
	$Body .= "Nomor Rekening : ";
	$Body .= $nr;
	$Body .= "\n";
	$Body .= "Bank : ";
	$Body .= $bank;
	$Body .= "\n";
	$Body .= "Nomor HP : ";
	$Body .= $hp;
	$Body .= "\n";
	$Body .= "Email	: ";
	$Body .= $email;
	$Body .= "\n";
	$Body .= "Game : ";
	$Body .= $permainan;
	$Body .= "\n";
 
	// send email
	$success = mail("$emailfrom", $Subject, $Body, "From: $emailto");
 
	// redirect to success page
	if ($success){
		echo "<script language='JavaScript' type='text/javascript'>
			window.alert('Silahkan hubungi Live Support 24 Jam untuk info selanjutnya. TerimaKasih.');
	    </script>
    	<script language='JavaScript' type='text/javascript'> 
			window.location.href=('daftar.php'); 
		</script>";
	}else{
		echo "<script language='JavaScript' type='text/javascript'>
			window.alert('Sepertinya terjadi Kesalahan,Harap di Periksa Kembali Pengisian Data Anda.');
	    </script>
    	<script language='JavaScript' type='text/javascript'> 
			window.location.href=('daftar.php'); 
		</script>";
	}
	
}	
}else{
	unset($_SESSION['security_code']); 
	echo "<script language='JavaScript' type='text/javascript'>
		window.alert('Security Code Yang Anda Masukan Tidak Sama Dengan Kode Captcha.');
     </script>
    <script language='JavaScript' type='text/javascript'> 
		window.location.href=('daftar.php'); 
	</script>";
}	
?>
