<?PHP
$sql = mysql_query("select * from setting where id='1'");
$data = mysql_fetch_array($sql);
$_SESSION['alamat'] = $data['alamat'];
$_SESSION['hp'] = $data['hp'];
$_SESSION['telepon'] = $data['telepon'];
$_SESSION['email'] = $data['email'];

$_SESSION['yahoo1'] = $data['yahoo1'];
$_SESSION['status1'] = $data['status1'];
$_SESSION['yahoo2'] = $data['yahoo2'];
$_SESSION['status2'] = $data['status2'];

$_SESSION['runningtext'] = $data['runningtext'];
?>
