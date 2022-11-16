<!--Logout.php-->
<?php
//oturumu sonlandırıyoruz
session_start();
session_destroy();

//çerezi siliyoruz
setcookie("cerez", "", time()-3600);

//sayfayı yönlendiriyoruz
header("location:teachers/teacher-login.php");
?>
