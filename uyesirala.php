<?php
$servername = "localhost";
$username = "root";
$password = "ybs364";
$dbname = "uyelik";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Bağlantı Hatası: " . $conn->connect_error);
}


$sql = "SELECT  * FROM uyetablo ORDER BY adi ASC";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  echo "<table>
  <tr>
    <th>uyeID</th>
    <th>Adi</th>
    <th>soyadi</th>
  </tr>";
  
  while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>".$row["uyeID"]."</td>
    <td>".$row["adi"]."</td>
    <td>".$row["soyadi"]."</td>
    
    </tr>";
  }
  echo "</table>";
} else {
  echo "Uygun kayıt bulunamadı";
}
$conn->close();
?>
