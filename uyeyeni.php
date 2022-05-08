<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "ybs364";

    $baglan = new mysqli($servername,$username,$password);

    if ($baglan -> connect_error) {
      die("Bağlantı başarısız: ".$baglan -> connect_error. "kontrollerinizi yapıp bir daha deneyiniz");
    }

    $sql = "CREATE DATABASE uyeyeni";
    if ($baglan -> query($sql) === TRUE) {
      echo "veri tabanı başarıyla kuruldu";
    }
    else{
      echo "veri tabanı kurulumunda sorun var: ";
        $baglan -> error;
    }

    $baglan -> close();
  ?>


</body>
</html>