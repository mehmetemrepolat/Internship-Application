<!-- inc/vt.php-->
<?php
//mysql veri tabanına bağlanıyoruz
//sizde kendi veri tabanına göre bilgilerinizi güncelleyin
//3. parametre password bende boş sizde kendi kullanıcı bilgilerinize göre düzenleyin
$baglanti= new mysqli("yazgelintern01.mysql.database.azure.com","emre01","123-+asd!!
","stajdurumlari");
if($baglanti->connect_error)
{
    //hata varsa yazdırıyoruz ve sayfayı sonlandırıyor
    echo $baglanti->connect_error." hatası oluştu";
    exit;
}
//türkçe karakter sorunu olmasın diye karakter setini ayarlıyoruz
$baglanti->set_charset("utf8");





?>
