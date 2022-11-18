<?php


session_start(); //oturum başlattık
//oturumdaki bilgilerin doğruluğunu kontrol ediyoruz
include '../vt.php';

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
    echo "Dosya Yüklendi! SQL BAŞARILI";
    $sqlquery = "UPDATE internship_application SET application_complete = '4' WHERE `Internship_ID` = '$is_id'";
    $baglanti -> query($sqlquery);
    
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


if(move_uploaded_file($_FILES['fileToUploadA']['tmp_name'], 'Files/internship_application_files/'.$is_id.'_basvuru.pdf')) {
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

if(move_uploaded_file($_FILES['fileToUpload5']['tmp_name'], 'Files/'.$_SESSION["is_id_no"].'_InternApp.pdf')) {
    echo "Dosya Yüklendi!";
}
else
{
    echo "Hata!";
}



