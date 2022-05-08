<html>
 
<head>
<title>İSİMLER</title>
</head>
 
<body>
<?php
 
$silinecekID= $_GET['id'];
 
$servername = "localhost";
$username = "root";
$password = "ybs364";
$dbname = "uyelik";


$baglan= new mysqli($servername, $username, $password, $dbname);



 
$sonuc=mysqli_query($baglan,"DELETE from uyetablo where uyeID=".$silinecekID);
 
if($sonuc>0){
echo " Başarıyla silindi, listeye yeniden yönlendiriliyorsunuz.";
header( "refresh:2;url=uyeliste.php" ); 
 }
else
echo "Bir sorun oluştu silinemedi";
 
?>
</body>
</html>
 