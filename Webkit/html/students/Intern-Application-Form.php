<!DOCTYPE html>
<?php
include ('session.php');

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">


    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: center
        }
        img {
            max-width: 100%
        }
        .image {
            flex-basis: 40%
        }
        .text {
            font-size: 15px;
            padding-left: 20px;
        }


    </style>

<body>
<center>
<div class="container">
    <div class="image">
        <img src="../../../kocaeli-universitesi-logo.png" width="100" height="100">
    </div>
    <div class="text" >
        <div>KOCAELİ ÜNİVERSİTESİ</div>
        <div>TEKNOLOJİ FAKÜLTESİ</div>
        <div>(Staj Başvuru ve Kabul Formu)</div>
    </div>
    <div class="image">
        <img src="../../../basvuru_logo1.png" width="100" height="100">
    </div>
</div>
</center>
</body>


<center><a>İlgili Makama</a></center>

    <style>
        .center {
        display: flex;
        justify-content: center;
        padding-left: 20px;
            padding-right: 20px;

        }
        .center3{
            display: flex;
            justify-content: left;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 1px;
        }
        .center2{
            display: flex;
            justify-content: left;
            padding-left: 20px;
            padding-right: 20px;}
        .center4{
            display: flex;
            justify-content: left;
            padding-left: 20px;
            padding-right: 20px;
        }
        .padding-gap{
            padding-left: 50px;
        }
        .padding-gap2{
            padding-left: 400px;
        }
        .padding-gap4{
            padding-left: 100px;
        }
        .padding-bottom{
            padding-bottom: 1px;
        }
    </style>

    <div class="center">

        <div> <?php ?>
            <?php echo $st_faculty." ".$st_department?> Mühendisliği Bölümü <?php echo $student_id_No ?> numaralı öğrencisiyim.
        </div>
    </div>
    <div class="center">
        <a>Kurumunuzda staj yapmamın uygun görülmesi halinde bu formun alttaki kısmını doldurularak fakültemiz ilgili bölüm başkanlığına gönderilmesini saygılarımla arz ederim.</a>
    </div>
    <div class="center3">
        <a>İşyeri uygulaması süresi içerisinde alınan rapor, istirahat vb. belgelerin aslını alınan gün içerisinde bölüm başkanlığına bildireceğimi beyan ve taahhüt ederim.</a>
    </div>

    <div class="center2">
        <b>Kişisel Bilgiler</b>
    </div>
    <div class="center2">
        <div>Ad Soyad: </div><div><?php echo $name." ".$st_lastName ?></div>
    </div>
    <div class="center2">
        <div>TC Kimlik Numarası:</div>
        <div><?php echo $st_TC_No ?></div>
        <div class="padding-gap">Uyruğu:</div>
        <div><?php echo $st_citizenship ?></div>
    </div>
    <div class="center2">
        <div>Ev Tel/GSM:</div>
        <div><?php echo $st_PhoneNumber ?></div>
        <div class="padding-gap" name="mail_adress">E-Posta:</div>
        <div><?php echo $st_mailAdress ?></div>
    </div>

    <div class="center4">
    <b>Adres</b>
    </div>
    <div class="center2">
        <div>İl: <?php echo $st_city ?></div>
        <div class="padding-gap">İlçe :<?php echo $st_town ?></div>
        <div class="padding-gap">Posta Kodu: <?php echo $st_postCode ?></div>
    </div>
    <div class="center2">
        <div>Tam Adres: <?php echo $st_adress ?></div>
    </div>
    <form name="ekleme" method="post">

    <div class="center4">
        <b>Staj Bilgileri</b>
    </div>
    <div class="center2">
        <div>Staj-1 <input name="intern-level-1" type="checkbox"></div>
        <div class="padding-gap">Staj-2 <input name="intern-level-2" type="checkbox"></div>
    </div>

        <div class="center2">
            <div>İş Günü: <input name="work-day" size="1" type="int"></div>
            <div class="padding-gap">Cumartesi Çalışıyor: <input name="saturday-working" size="1px" type="checkbox"></div>
        </div>

        <div class="center2">
            <div>Başlama Tarihi: <input id="internship-begin-date" name="begin-date"  value="12-12-2021" size="3px" type="date"></div>
            <div class="padding-gap">Bitiş Tarihi: <input name="end-date" size="3px" type="date" disabled></div>
        </div>



        <div class="center4">
            <div><li>Ailemden,  Kendimden veya  Anne-Baba Üzarinden Genel Sağlık Sigortası Kapsamında Sağlık Hizmeti Alıyorum.</li></div>
            <div class="padding-gap">Evet<input type="checkbox"></div>
        <div class="padding-gap">Hayır<input type="checkbox"></div>
    </div>
    <div class="center4">
        <div><li>Genel Sağlık Sigortası (GSS) (Gelir Testi Yaptırdım Pirim Ödüyorum)</li></div>
        <div class="padding-gap">Evet<input type="checkbox"></div>
        <div class="padding-gap">Hayır<input type="checkbox"></div>
    </div>

    <div class="center4">
        <div><li>25 Yaşını Doldurdum</li></div>
        <div class="padding-gap">Evet<input type="checkbox"></div>
        <div class="padding-gap">Hayır<input type="checkbox"></div></div>


    <div class="center2">
        <div>Ad Soyad: <?php echo $name." "?></div>
        <div class="padding-gap4">İmza:</div>
        <div class="padding-gap4">Tarih: <input type="date"></div>
    </div>

    </form>
    <div class="padding-bottom"></div>
    <div class="center4">
        <b>Staj Yapılacak Kurum Bilgileri</b>
    </div>
    <div class="center2">
        <div>Resmi Adı: <input name="full-name" size="70"></div>
    </div>
    <div class="center2">
        <div>Faaliyet Alanı: <input name="full-name" size="70"></div>
    </div>
    <div class="center2">
        <div>Adres Bilgileri: <input name="full-name" size="70"></div>
    </div>
    <div class="center2">
        <div>İl: <input name="city"></div>
        <div class="padding-gap">İlçe :<input name="town"></div>
        <div class="padding-gap">Posta Kodu: <input name="zip-code" size="5px"></div>
    </div>
    <div class="center2">
        <div>İletişim Bilgileri:</div>
    </div>
    <div class="center2">
        <div>Telefon: <input name="city"></div>
        <div class="padding-gap">Fax :<input name="town"></div>
        <div class="padding-gap">E-Posta: <input name="zip-code" size="5px"></div>
    </div>

    <div class="center2">
        <div>Staj Sorumlusu Ünvanı:</div>
        <div class="padding-gap">Mühendis <input type="checkbox" name="town"></div>
        <div class="padding-gap">Teknik Öğretmen <input type="checkbox"></div>
        <div class="padding-gap">Hekim <input type="checkbox"></div>
    </div>
    <div class="center2">
        <div>Kurum olarak 3308 sayılı kanundaki devlet katkısından yararlanmak istiyor musunuz?</div>
        <div class="padding-gap">Evet <input type="checkbox" name="town"></div>
        <div class="padding-gap">Hayır<input type="checkbox"></div>
    </div>
    <center><p><small><b>Yukarıda adı geçen öğrencinin ilgili tarihlerde staj uygulamasını kurumumuzda yapması uygun görülmüştür.</b></small></p></center>


    <div class="center2">
        <div>Firma Yetkilisinin  Adı Soyadı:</div>
        <div class="padding-gap">Unvanı:</div>
        <div class="padding-gap">Kaşe ve İmzası::</div>
    </div>

    <div class="center2">
        <div><p><small><small>*3308 sayılı Meslekî Eğitim Kanunu ve 5510 sayılı Sosyal Sigortalar ve Genel Sağlık Sigortası Kanununun
            5 inci maddesinin (b) bendi gereğince zorunlu staja tabi tüm öğrencilere "İş Kazası ve Meslek Hastalığı Sigortası"
            yapılması ve sigorta primlerinin Üniversite tarafından ödenmesi gerekmektedir.  Staj süresi boyunca üniversitemiz
            tarafından öğrencimizin SGK’ya kaydı yaptırılacaktır.
            **Staja SGK sicil numarası alındıktan sonra başlayacaktır. Farklı firmalarda yapılacak stajlar için ayrı form doldurulacaktır. Öğrenci bu evraktan 2 nüsha düzenleyip firmaca onaylandıktan sonra bir tanesini belirlenen staj döneminden en az 1 ay önce ilgili bölüm başkanlığına teslim etmek zorundadır.
            *** Yanıtınız Evet ise Ek-1 formunu doldurunuz.
        </small></small></p></div>

    </div>

    <div class="center2">
        <div><b><small>T.C. Kocaeli Üniversitesi Teknoloji Fakültesi
            Bölüm İş Yeri ve Staj Komisyonu Onayı
        </small></b></div>
    </div>

    <div class="center2">
        <div><small>    Yukarıda adı geçen öğrencinin ilgili tarihlerde
            staj uygulamasını ilgili kurumda yapması;
        </small></div>
    </div>
    <div class="padding-gap2">Onay:</div>



</form>



</body>
</html>