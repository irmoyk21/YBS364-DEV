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
                    <li><a href="iletişim.html">İletişim</a></li>
            </ul>
        </div>

        <div class="temizle"></div>

        <fieldset>
        
        <form action="gönder.php ?>" method="POST">
        <div>
            <label>Adınız:
                <input type="text" name="adiniz">
            </label>
        </div>

        <br>

        <div>
            <label>Soyadınız:
                <input type="text" name="soyadiniz">
            </label>
        </div>

        <br>

        <div>
            <label>Kullanıcı Adınız:
                <input type="text" name="kullaniciadiniz">
            </label>
        </div>

        <br>

    </fieldset>
        
        <br>

    <fieldset>
        
        <div>

            <label><h4>sulu yemekler</h4><br>
                <input type="checkbox" name="kuzuguvec">Kuzu Güveç
                <input type="checkbox" name="islimkebabi">İslim Kebabı
                <input type="checkbox" name="nohutlupöcyemegi">Nohutlu Pöç Yemeği
                <input type="checkbox" name="izmirköfte">İzmir Köfte
                <input type="checkbox" name="baklayemegi">Bakla Yemeği
            </label>
        
        </div>

    </fieldset>

        <br>

    <fieldset>
        
        <div>
            
            
            <label><h4>Ara Sıcaklar</h4><br>
                <input type="checkbox" name="sigaraboregi">Sigara Böreği
                <input type="checkbox" name="pacangaBoregi">Paçanga Böreği
                <input type="checkbox" name="iclikofte">İçli Köfte
                <input type="checkbox" name="avciboregi">Avcı Böreği
                <input type="checkbox" name="biberdolmasi">Biber Dolması
            </label>
        
        </div>

    </fieldset>

        <br>

    <fieldset>
        
        <div>
            
            <label><h4>Çorbalar</h4><br>
                <input type="checkbox" name="mercimekcorbasi">Mercimek Çorbası
                <input type="checkbox" name="cicekbamyacorbası">Çiçek Bamya Çorbası 
                <input type="checkbox" name="domatescorbasi">Domates Çorbası
                <input type="checkbox" name="sebzeezmecorbasi">Sebze Çorbası
                <input type="checkbox" name="hünkarcorbasi">Hünkar Çorbası
            </label>
        
        </div>

    </fieldset>

    <br>

    <fieldset>
        
        <div>
            
            <label><h4>Tatlılar</h4><br>
                <input type="checkbox" name="kadayif">Kadayıf
                <input type="checkbox" name="sütlac">sütlaç
                <input type="checkbox" name="baklava">Baklava
                <input type="checkbox" name="taskadayif">Taş Kadayıf
                <input type="checkbox" name="leblebitatlisi">Leblebi Tatlısı
            </label>
        
        </div>

    </fieldset>

    <br>

    <fieldset>
        
        <div>
            
            <label><h4>Salatalar</h4><br>
                <input type="checkbox" name="cobansalata"> çoban salatası
                <input type="checkbox" name="akdenizyesilliklerisalata"> Akdeniz Yeşillikleri Salata
                <input type="checkbox" name="mevsimsalata"> Mevsim Salata
                <input type="checkbox" name="atomsalata"> atom salata
                <input type="checkbox" name="gavurdagısalata"> Gavur Dağı Salata
            </label>
        
        </div>

    </fieldset>
        <br>

    <fieldset>

        <div>
            <label>Ekstralar
                <input type="checkbox" name="yogurt">yoğurt
                <input type="checkbox" name="lımonsosu">limon sosu
                <input type="checkbox" name="ketcap">ketçap
                <input type="checkbox" name="mayonez">mayonez
                <input type="checkbox" name="tuz">tuz
            </label>
        
        </div>

    </fieldset>

        <button type="text" name="gönder">GÖNDER</button>

    </form>

    

</body>
</html>