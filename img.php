<?php
// membuat random text dari 0 - 9999
$code=rand(10000,99999);

// menyimpan random text pada session
session_start();
 $_SESSION["captcha"]=$code;

// mengubah text menjadi gambar
$im = imagecreatefromjpeg("images/captcha_bg.jpg");

$bg = imagecolorallocate($im, 100, 0, 0);
$fg = imagecolorallocate($im, 0, 0, 0);
$font = 6;

imagestring($im, $font, 20, 5, $code, $fg);
header('Content-type: image/png');
imagepng($im);

imagedestroy($im);
?>