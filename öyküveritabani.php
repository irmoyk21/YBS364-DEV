<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "ybs364";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Bağlantı başarısız: " . $conn->connect_error);
}
$sql = "CREATE DATABASE öykü";
if ($conn->query($sql) === TRUE) {
  echo "Veri Tabanı başarıyla kuruldu";
} else {
  echo "Veri tabanı kurulumunda sorun var: " . $conn->error;
}

$conn->close();

?>

</body>
</html>
