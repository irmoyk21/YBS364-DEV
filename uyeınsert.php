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
	$dbname = "uyelik"; 
	$baglan = new mysqli($servername,$username,$password,$dbname);
		if ($baglan -> connect_error) {
			die("Bağlantı başarısız: ".$baglan -> connect_error);

	}

	$sql = "INSERT INTO kayitseyi(ad,soyad,email,telefon,kayit_tarihi)
	VALUES ( 'Deniz', 'kayalı', 'denizkayali@gmail.com','05535465389')";

	if( $baglan -> query($sql)=== TRUE) {
		echo "yeni kayıt başarılı";
	}
	else{
		echo "ERROR: ".$sql."<br>".$baglan->error;
	}

	$baglan -> close();
	?>
</body>
</html>

