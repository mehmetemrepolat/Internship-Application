<?php
include('../vt.php');

session_start(); //oturum başlattık
//oturumdaki bilgilerin doğruluğunu kontrol ediyoruz

if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "5672") {
    //eğer veriler doğru ise sayfaya girmesine izin veriyoruz
    $student_id_No = $_SESSION["ID"];

    $sqlProfileInfoQuery = "Select st_name, st_lastName, st_TC_No, st_PhoneNumber, st_mailAdress, st_class, st_adress, st_city, st_town,
                            st_postCode, st_citizenship, st_faculty, st_department FROM students where st_id = '$student_id_No'";

    if($Info_Results = $baglanti->query($sqlProfileInfoQuery)){
        while($row = $Info_Results->fetch_assoc())
        {

            $name = $row["st_name"];
            $st_lastName = $row["st_lastName"];
            $st_TC_No = $row["st_TC_No"];
            $st_PhoneNumber = $row["st_PhoneNumber"];
            $st_mailAdress = $row["st_mailAdress"];
            $st_class = $row["st_class"];
            $st_adress = $row["st_adress"];
            $st_city = $row["st_city"];
            $st_town = $row["st_town"];
            $st_postCode = $row["st_postCode"];
            $st_citizenship = $row["st_citizenship"];
            $st_faculty = $row["st_faculty"];
            $st_department = $row["st_department"];
        }
    }
//$Info_Results = $baglanti->query($sqlProfileInfoQuery);
//$row = $Info_Results->fetch_array();



    $Info_Results->free();




} else if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789"){
    header("location:index.php");
}else {

    header("location:student-login.php");
}

?>
