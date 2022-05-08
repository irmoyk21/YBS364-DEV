<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>YEMEKHANECİM</title>
    <link href="anasayfa.css" rel="stylesheet">
</head>

<body>
    <div class="menu-ust">
        <div id="logo">
            <h1>YEMEKHANECİM </h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="anasayfa.html">Ana Sayfa</a></li>
                <li><a href="yemeklerimiz.html">yemeklerimiz</a>
                    <ul>
                        <li><a href="corbalar.html">çorbalar</a></li>
                        <li><a href="suluYemekler.html">sulu yemekler</a></li>
                        <li><a href="araSicak.html">ara sıcak</a></li>
                        <li><a href="salatalar.html">salatalar</a></li>
                        <li><a href="tatlilar.html">tatlılar</a></li>
                    </ul>
                </li>
                <li><a href="hakkımızda.html">Hakkımızda</a>

                    <li><a href="sipariş.php">Sipariş  </a></li>
                    <li><a href="Tariflerimiz.html">Tariflerimiz</a></li>
                    <li><a href="uyelik.html">Üyelik</a></li>
                    
            </ul>
        </div>

        <div class="temizle"></div>
        <form method="POST" action="uyelikkaydet.php">
            <div>
            <label>Adınız:
                <input type="text" name="ad">
            </label>
        </div>

        <br>

        <div>
            <label>Soyadınız:
                <input type="text" name="soyad">
            </label>
        </div>

        <br>

        <div>
            <label>Kullanıcı Adınız:
                <input type="text" name="kullanici">
            </label>
        </div>

        <br>

        <div>
            <label>telefon numarası:
                <input type="text" name="tel">
            </label>
        </div>

        <br>

        <div>
            <label>eposta:
                <input type="eposta" name="email">
            </label>
        </div>

        <br>
        <input type="submit" name="Kaydet">
        
            </form>
             
            </body>
             
            </html>

