<form name="student_login" method="post">
<button type="submit" formmethod="post" class="btn btn-white">Giriş Yap</button>

    <input class="floating-input form-control" name="password" type="password" placeholder=" ">


    <?php


     if ($_POST) {

         echo "Gönderildi";
     }
     else{
         echo "Post gönderilmedi";
     }
    ?>


</form>