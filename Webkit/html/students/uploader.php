<?php


session_start(); //oturum başlattık
//oturumdaki bilgilerin doğruluğunu kontrol ediyoruz

if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "5672") {
    //eğer veriler doğru ise sayfaya girmesine izin veriyoruz
    $student_id_No = $_SESSION["ID"];
    $student_name_i = $_SESSION["NAME"];
    $is_id = $_SESSION["Internship_ID"];



} else if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789"){
    header("location:index.php");
}else {

    header("location:student-login.php");
}



//seassion başlatıp öğrenci numarasını değişkene atayacağız
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], 'Files/'.$is_id.'.pdf')) {
    echo "Dosya Yüklendi!";
}
else
{
    echo "Hata, Dosya Yüklenemedi!";
}

//Staj Raporu
if(move_uploaded_file($_FILES['fileToUpload2']['tmp_name'], 'Files/'.$is_id.'_Rapor.pdf')) {
    echo "Dosya Yüklendi!";
}
else
{
    echo "Hata, Dosya Yüklenemedi!";
}


//Devlet Katkı Talep Formu
if(move_uploaded_file($_FILES['fileToUpload3']['tmp_name'], 'Files/'.$is_id.'_KatkıTalep.pdf')) {
    echo "Dosya Yüklendi!";
}
else
{
    echo "Hata, Dosya Yüklenemedi!";
}



