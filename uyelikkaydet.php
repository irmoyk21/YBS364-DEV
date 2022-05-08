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

    $sql = "INSERT INTO uyetablo (adi,soyadi,kullaniciadi,email,telno)
    VALUES ('Deniz', 'Kayalı', 'dnzkyl', 'denizkayali@gmail.com','05519878086')";

    $sql = "INSERT INTO uyetablo (adi,soyadi,kullaniciadi,email,telno)
    VALUES ('çınar', 'Kayalı', 'cnrkyl', 'cnrkayali@gmail.com','704202117062021')";
    
    $sql = "INSERT INTO uyetablo (adi,soyadi,kullaniciadi,email,telno)
    VALUES ('efe', 'bilmemne', 'befe', 'efeblmne@gmail.com','123456789')";
   



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

