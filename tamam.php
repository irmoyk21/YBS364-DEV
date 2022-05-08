<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

	<body>
		<fieldset>
		
			<?php
				
					if($_SERVER["REQUEST_METHOD"]=="POST"){
						if(isset($_POST["gönder"])){

							$adiniz=$_POST["adiniz"];
							$soyadiniz=$_POST["soyadiniz"];
							$kullanıcıadiniz=$_POST["kullaniciadiniz"];
							
							echo "Adınız: ".$adiniz."<br>";
							echo "Soy Adınız: ".$soyadiniz."<br>";
							echo "kullanıcı adınız: ".$kullanıcıadiniz."<br>";
						}
					}

				
							
				if (isset($_POST['kuzuguvec'])) {
					echo "kuzu güveç seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['islimkebabi'])) {
					echo "islim kebabı seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['nohutlupöcyemegi'])) {
					echo "nohutlu pöç yemeği seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['izmirköfte'])) {
					echo "izmir köfte seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['baklayemegi'])) {
					echo "bakla yemeği seçiminiz kaydedildi"."<br>";
				}

				

				if (isset($_POST['sigaraboregi'])) {
					echo "sigara böreği seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['pacangaBoregi'])) {
					echo "paçanga Böreği seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['iclikofte'])) {
					echo "İçli Köfte seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['avciboregi'])) {
					echo "Avcı Böreği seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['biberdolmasi'])) {
					echo "Biber Dolması seçiminiz kaydedildi"."<br>";
				}

				

				if (isset($_POST['mercimekcorbasi'])) {
					echo "Mercimek çorbası seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['cicekbamyacorbası'])) {
					echo "Çicek bamya corbası seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['domatescorbasi'])) {
					echo "Domates Çorbası seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['sebzeezmecorbasi'])) {
					echo "Sebze ezme çorbası seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['hünkarcorbasi'])) {
					echo "Hünkar çorbası seçiminiz kaydedildi"."<br>";
				}



				if (isset($_POST['kadayif'])) {
					echo "Kadayıf seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['sütlac'])) {
					echo "Sütlaç seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['baklava'])) {
					echo "Baklava seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['taskadayif'])) {
					echo "Taş kadayıf seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['leblebitatlisi'])) {
					echo "Leblebi tatlısı seçiminiz kaydedildi"."<br>";
				}
				
				

				if (isset($_POST['cobansalata'])) {
					echo "Çoban salat seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['akdenizyesilliklerisalata'])) {
					echo "Akdeniz yeşillikleri salatası seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['mevsimsalata'])) {
					echo "Mevsim salatası seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['atomsalata'])) {
					echo "Atom salata seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['gavurdagısalata'])) {
					echo "Gavur dağı salatası seçiminiz kaydedildi"."<br>";
				}

				
				
				if (isset($_POST['yogurt'])) {
					echo "yoğurt seçiminiz kaydedildi"."<br>";
				}


				if (isset($_POST['lımonsosu'])) {
					echo "limon sosu seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['ketcap'])) {
					echo "ketçap seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['mayonez'])) {
					echo "mayonez seçiminiz kaydedildi"."<br>";
				}

				if (isset($_POST['tuz'])) {
					echo "tuz seçiminiz kaydedildi"."<br>";
				}

			?>
	
		</fieldset>
	</body>
</html>
