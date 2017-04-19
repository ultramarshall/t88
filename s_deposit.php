<?php
session_start(); 
$email=$_SESSION['email'];
if(($_SESSION['captcha']) == ($_POST['security_code'])) { 
	// Insert you code for processing the form here, e.g emailing the submission, entering it into a database.
	$emailfrom 	= $email; // From email address
	$emailto 	= $email; // Email address you want submitted forms to go to
	$Subject 	= "TARUHAN88.COM - DEPOSIT"; // subject line for emails
	$email 		= ucwords(htmlentities((trim($_POST['email']))));
	$bank 		= ucwords(htmlentities((trim($_POST['bank']))));
	$idgames	= ucwords(htmlentities((trim($_POST['idgames']))));
	$pr 		= ucwords(htmlentities((trim($_POST['pemilikrekening']))));
	$nr 		= ucwords(htmlentities((trim($_POST['nomorrekening']))));
	$game		= ucwords(htmlentities((trim($_POST['game']))));
    $jumlah		= ucwords(htmlentities((trim($_POST['jumlah']))));
    $uang       = number_format($jumlah,2,',','.');
 if(empty($pr)||empty($nr)||empty($hp)||empty($email)||empty($idgames)||empty($jumlah)){
 	echo "<script language='JavaScript' type='text/javascript'>
			window.alert('Tidak Boleh Ada Data Yang Kosong, Di Mohon Untuk Periksa Kembali.');
	    </script>
    	<script language='JavaScript' type='text/javascript'> 
			window.location.href=('deposit.php'); 
		</script>";
 }else{
	// prepare email body text
	$Body .= "";
	$Body .= "FORM DEPOSIT ";
	$Body .= "\n";	
	$Body .= "\n";
    $Body .= "";
	$Body .= "Email	: ";
	$Body .= $email;
	$Body .= "\n";
	$Body .= "Bank : ";
	$Body .= $bank;
	$Body .= "\n";
	$Body .= "ID Games : ";
	$Body .= $idgames;
	$Body .= "\n";
	$Body .= "Pemilik Rekening : ";
	$Body .= $pr;
    $Body .= "\n";
	$Body .= "Nomor Rekening : ";
	$Body .= $nr;
	$Body .= "\n";
	$Body .= "Game : ";
	$Body .= $game;
	$Body .= "\n";
 	$Body .= "Jumlah : ";
	$Body .= $uang;
	$Body .= "\n";
	// send email
	$success = mail("$emailfrom", $Subject, $Body, "From: $emailto");
 
	// redirect to success page
	if ($success){
		echo "<script language='JavaScript' type='text/javascript'>
			window.alert('Kami akan segera memproses deposit anda. TerimaKasih.');
	    </script>
    	<script language='JavaScript' type='text/javascript'> 
			window.location.href=('deposit.php'); 
		</script>";
	}else{
		echo "<script language='JavaScript' type='text/javascript'>
			window.alert('Sepertinya terjadi Kesalahan,Harap di Periksa Kembali Pengisian Data Anda.');
	    </script>
    	<script language='JavaScript' type='text/javascript'> 
			window.location.href=('deposit.php'); 
		</script>";
	}
	
}	
}else{
	unset($_SESSION['security_code']); 
	echo "<script language='JavaScript' type='text/javascript'>
		window.alert('Security Code Yang Anda Masukan Tidak Sama Dengan Kode Captcha.');
     </script>
    <script language='JavaScript' type='text/javascript'> 
		window.location.href=('deposit.php'); 
	</script>";
}	
?>