<!DOCTYPE html>
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
        <img src="../students/kocaeli-universitesi-logo.png" width="100" height="100">
    </div>
    <div class="text" >
        <div>KOCAELİ ÜNİVERSİTESİ</div>
        <div>TEKNOLOJİ FAKÜLTESİ</div>
        <div>(Staj Başvuru ve Kabul Formu)</div>
    </div>
    <div class="image">
        <img src="../students/basvuru_logo1.png" width="100" height="100">
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

    <!-- SQL UĞRAŞLARI -->





    <!--  -->
    <!--  -->
    <!--  -->



    <div class="center">

        <div>
             <?php session_start(); echo $_SESSION["st_faculty"]." Fakültesi ".$_SESSION["st_department"]; ?> Mühendisliği Bölümü <?php echo $_SESSION["ID"]; ?> numaralı öğrencisiyim.
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
        <div>Ad Soyad: </div><div>&nbsp;<?php echo $_SESSION["NAME"]." ".$_SESSION["last_name"];?></div>
    </div>
    <div class="center2">
        <div>TC Kimlik Numarası:</div>
        <div>&nbsp;<?php echo $_SESSION["st_TC_No"];?></div>
        <div class="padding-gap">Uyruğu:</div>
        <div>&nbsp;<?php echo $_SESSION["st_citizenship"]; ?></div>
    </div>
    <div class="center2">
        <div>Ev Tel/GSM:</div>
        <div>&nbsp;<?php echo $_SESSION["st_phoneNumber"];?></div>
        <div class="padding-gap" name="mail_adress">E-Posta</div>
        <div>&nbsp;<?php echo $_SESSION["student_mailAdress"];?></div>
    </div>
    <div class="center2">
        <div><b>IBAN No Ziraat Bankası:</b>&nbsp;<?php echo $_SESSION["st_adress"]; ?></div>
    </div>
    <div class="center4">
    <b>Adres</b>
    </div>
    <div class="center2">
        <div>İl:&nbsp;<?php echo $_SESSION["st_city"]; ?></div>
        <div class="padding-gap">İlçe:&nbsp;<?php echo $_SESSION["st_town"]; ?></div>
        <div class="padding-gap">Posta Kodu:&nbsp;<?php echo $_SESSION["st_postCode"]; ?></div>
    </div>
    <div class="center2">
        <div>Tam Adres:&nbsp;<?php echo $_SESSION["st_adress"]; ?></div>
    </div>

    <div class="center4">
        <b>Staj Bilgileri</b>
    </div>

    <div class="center2">
        <div>Başlama Tarihi:&nbsp;<?php echo $_SESSION["starting_date"]; ?></div>
        <div class="padding-gap">Bitiş Tarihi:&nbsp;<?php echo $_SESSION["finish_date"]; ?></div>
        <div class="padding-gap">İş Günü:&nbsp;<?php echo $_SESSION["working_day"]; ?></div>
    </div>


    <div class="center4">
        <div><li>Ailemden,  Kendimden veya  Anne-Baba Üzarinden Genel Sağlık Sigortası Kapsamında Sağlık Hizmeti Alıyorum:</li></div>
        &nbsp;<?php if($_SESSION["health_care"] == '1'){echo "  Evet";} else{echo "  Hayır";}?>

    </div>
    <div class="center4">
        <div><li>Genel Sağlık Sigortası (GSS) (Gelir Testi Yaptırdım Pirim Ödüyorum):</li></div>
        &nbsp;<?php if($_SESSION["GSS"] == '1'){echo "  Evet";} else{echo "  Hayır";}?>

    </div>

    <div class="center4">
        <div><li>25 Yaşını Doldurdum: </li></div>

        &nbsp;<?php if($_SESSION["yearOld_25"] == '1'){echo "  Evet";} else{echo "  Hayır";}?>
    </div>


    <div class="center2">
        <div>Ad Soyad:&nbsp;<?php echo $_SESSION["NAME"]." ". $_SESSION["last_name"]; ?></div>
        <div class="padding-gap4">İmza:</div>
        <div class="padding-gap4">Tarih: <?php echo date("Y/m/d"); ?></div>
    </div>

    <div class="padding-bottom"></div>


    <div class="center4">
        <b>İşletmede Mesleki Eğitim Yapılacak Kurum Bilgileri</b>
    </div>
    <div class="center2">
        <div>Resmi Adı: <?php echo $_SESSION["Company_Name"]; ?></div>
    </div>
    <div class="center2">
        <div>Faaliyet Alanı: <?php echo $_SESSION["Activity_Field"]; ?></div>
    </div>
    <div class="center2">
        <div>Adres Bilgileri: <?php echo $_SESSION["Company_Adress"]; ?></div>
    </div>
    <div class="center2">
        <div>İl: <?php echo $_SESSION["Company_city"]; ?></div>
        <div class="padding-gap">İlçe :<?php echo $_SESSION["Company_town"]; ?></div>
        <div class="padding-gap">Posta Kodu: <?php echo $_SESSION["Company_postCode"]; ?></div>
    </div>
    <div class="center2">
        <div>İletişim Bilgileri:</div>
    </div>
    <div class="center2">
        <div>Telefon: <?php echo $_SESSION["Company_PhoneNumber"]; ?></div>
        <div class="padding-gap">Fax :<?php echo $_SESSION["FAX"]; ?></div>
        <div class="padding-gap">E-Posta: <?php echo $_SESSION["Company_mailAdress"]; ?></div>
    </div>

    <div class="center2">
        <div>İşyeri Sorumlusunun Ünvanı:</div>
        <?php if($_SESSION["Responsible_Title"] == "1"){echo "Mühendis";} if($_SESSION["Responsible_Title"] == "2"){echo "Teknik Öğretmen";}  ?>
    </div>

    <center><p><small><b>Yukarıda adı geçen öğrencinin ilgili tarihlerde İşyeri Eğitimi  uygulamasını kurumumuzda yapması uygun görülmüştür.</b></small></p></center>


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
                İşyeri Eğitimi uygulamasını ilgili kurumda yapması;
        </small></div>
    </div>
    <div class="padding-gap2">Onay:</div>



</form>



</body>
</html>