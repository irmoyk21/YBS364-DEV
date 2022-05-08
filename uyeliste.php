<html>

 
<head>
<meta charset="utf-8">
<title>uyelikler</title>
</head>
 
<body>
	
<table border="1" align="center" width="500">
<tr>
<td>Telefon No</td>
<td>Adı</td>
<td>Soyadı</td>
<td>kullanıcı adı</td>
<td>eposta</td>
 
<td>Sil</td>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "ybs364";
$dbname = "uyelik";


$baglanti= new mysqli($servername, $username, $password, $dbname);



$sonuc=mysqli_query($baglanti,"select * from uyetablo"); 
 
while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr>';
echo '<td>'.$satir['telno'].'</td>';
echo '<td>'.$satir['adi'].'</td>';
echo '<td>'.$satir['soyadi'].'</td>';
echo '<td>'.$satir['kullaniciadi'].'</td>';
echo '<td>'.$satir['email'].'</td>';
echo '<td> <a href="uyesil.php?id='.$satir['uyeID'].'" onclick="return uyari();">Sil</a> </td>';
echo '<td> <a href="uyeguncelle.php?id='.$satir['uyeID'].'" onclick="return uyari();">Güncelle</a> </td>';
echo '</tr>';
}
echo '<tr>';
echo '<td> <a href="uyelik.php"> YENİ KAYIT </a> </td>';
echo '</tr>';
?>
 
 
 
</table>
 
</body>
</html>
 

</table>
 
</body>
</html>
 