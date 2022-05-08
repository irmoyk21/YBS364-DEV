<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "ybs364";
	$dbname = "uyeyeni"; 
	$baglan = new mysqli($servername,$username,$password,$dbname);
		if ($baglan -> connect_error) {
			die("Bağlantı başarısız: ".$baglan -> connect_error);

	}
	$sql = "CREATE TABLE uyekayit (
	uyelikID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	ad VARCHAR(30) NOT NULL,
	soyad VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	telefon VARCHAR(50) NOT NULL,
	kayit_tarihi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )";

	if($baglan -> query($sql)===TRUE){
		echo "tablo başarıyla kuruldu";
	}
	else{
		echo "Error  ".$baglan->error; 
	}

	$baglan -> close();
	?>
</body>
</html>






</body>
</html>