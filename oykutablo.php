<?php
$servername = "localhost";
$username = "root";
$password = "ybs364";
$dbname = "uyelik";


$baglan = new mysqli($servername, $username, $password, $dbname);

if ($baglan->connect_error) {
  die("Connection failed: " . $baglan->connect_error);
}

$sql = "CREATE TABLE oykutablo(
uyeID INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
adi VARCHAR(30) NOT NULL,
soyadi VARCHAR(30) NOT NULL,
kullaniciadi VARCHAR(50) NOT NULL,

)";


if ($baglan->query($sql) == TRUE) {
  echo "Tablo Başarıyla kuruldu";
} else {
  echo "Error  " . $baglan->error;
}

$baglan->close();
?>