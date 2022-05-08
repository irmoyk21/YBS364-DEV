<?php
$servername = "localhost";
$username = "root";
$password = "ybs364";
$dbname = "uyelik";
$baglanti= new mysqli($servername, $username, $password, $dbname);
$ara =  $_POST ["ara"];
$konu = mysql_query("SELECT * from uyetablo");

while ($bul = mysql_fetch_array($adi)) {
	$soyadi = $bul["soyadi"];
	$kullaniciadi = $bul['kullaniciadi'];
	$telno = $bul['telno'];
	$email = $bul['email'];
}
?>