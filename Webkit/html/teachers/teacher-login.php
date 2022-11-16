<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Webkit | Responsive Bootstrap 4 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />
    <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">

    <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css">
    <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css">
    <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css">  </head>
<body class=" ">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->

<div class="wrapper">
    <section class="login-content">
        <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
                <div class="col-lg-8">
                    <div class="card auth-card">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center auth-content">
                                <div class="col-lg-6 bg-primary content-left">
                                    <div class="p-3">
                                        <h2 class="mb-2 text-white">Öğretmen Giriş</h2>

                                        <form name="student_login" method="post">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="floating-label form-group">
                                                        <input class="floating-input form-control" name="mail"  placeholder=" ">
                                                        <label>Öğretmen Mail</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="floating-label form-group">
                                                        <input class="floating-input form-control" name="password" type="password" placeholder=" ">
                                                        <label>Parola</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" formmethod="post" name="comision" value="comision">
                                                        <label class="text-white">Komisyon?
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a href="auth-recoverpw.html" class="text-white float-right">Parolamı Unuttum</a>
                                                </div>
                                            </div>
                                            <button type="submit" formmethod="post" class="btn btn-white">Giriş Yap</button>

                                            <?php
                                            include '../vt.php';
                                            if($_POST)
                                            {
                                                if(! empty($_POST["comision"])){

                                                    $mail = $_REQUEST['mail'];
                                                    $password = $_REQUEST['password'];
                                                    $password_hash = password_hash($password, PASSWORD_DEFAULT);

                                                    $sql_query1 = "SELECT * from teachers_informations where Teacher_mail='$mail' and commission_memberShip='1' and Teacher_password='$password'";



                                                    $qqq1 = $baglanti->query($sql_query1);
                                                    $active = $row['active'];
                                                    $count1 = mysqli_num_rows($qqq1);

                                                    $row = mysqli_fetch_array($qqq1,MYSQLI_ASSOC);
                                                    if ($count1 == 1)
                                                    {
                                                        //Giriş gerçekleşiyor
                                                        echo "Giriş Gerçekleşir";
                                                        $_SESSION["Oturum"] = "6788"; //oturum oluşturma
                                                        $_SESSION["Teacher_mail"] = "$mail";

                                                        header("location:comision-profile.php"); //sayfa yönlendirme



                                                    }
                                                    else{
                                                        echo "Kullanıcı Adı/Parola yanlış!";
                                                    }
                                                }
                                                else{
                                                    $mail = $_REQUEST['mail'];
                                                    $password = $_REQUEST['password'];
                                                    $password_hash = password_hash($password, PASSWORD_DEFAULT);

                                                    $sql_query = "SELECT * from teachers_informations where Teacher_mail='$mail' and Teacher_password='$password' and commission_memberShip='0'";



                                                    $qqq = $baglanti->query($sql_query);
                                                    $active = $row['active'];
                                                    $count = mysqli_num_rows($qqq);

                                                    $row = mysqli_fetch_array($qqq,MYSQLI_ASSOC);
                                                    if ($count == 1)
                                                    {
                                                        //Giriş gerçekleşiyor
                                                        echo "Giriş Gerçekleşir";
                                                        $_SESSION["Oturum"] = "6789"; //oturum oluşturma
                                                        $_SESSION["Teacher_mail"] = "$mail";
                                                        $QUERY = $baglanti->query($sql_query);
                                                        $RESULT = $QUERY -> fetch_array();

                                                        $teacher_name = $RESULT['Teacher_Name'];
                                                        $_SESSION["Teacher_Name"] = "$teacher_name";
                                                        $teacher_surname = $RESULT['Teacher_SurName'];
                                                        $_SESSION["Teacher_SurName"] = "$teacher_surname";

                                                        $teacher_number = $RESULT['Teacher_Number'];
                                                        $_SESSION["Teacher_Number"] = "$teacher_number";

                                                        $teacher_id = $RESULT['Teacher_ID'];
                                                        $_SESSION["Teacher_ID"] = "$teacher_id";

                                                        $teacher_id = $RESULT['Teacher_ID'];
                                                        $_SESSION["Teacher_ID"] = "$teacher_id";

                                                        $teacher_com = $RESULT['commission_memberShip'];
                                                        $_SESSION["teacher_com"] = "$teacher_com";

                                                        header("location:teacher-profile.php"); //sayfa yönlendirme



                                                    }
                                                    else{
                                                        echo "Kullanıcı Adı/Parola yanlış!";
                                                    }
                                                }
                                            }





                                            ?>


                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 content-right">
                                    <img src="../assets/images/login/01.png" class="img-fluid image-right" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Backend Bundle JavaScript -->
<script src="../assets/js/backend-bundle.min.js"></script>

<!-- Table Treeview JavaScript -->
<script src="../assets/js/table-treeview.js"></script>

<!-- Chart Custom JavaScript -->
<script src="../assets/js/customizer.js"></script>

<!-- Chart Custom JavaScript -->
<script async src="../assets/js/chart-custom.js"></script>
<!-- Chart Custom JavaScript -->
<script async src="../assets/js/slider.js"></script>

<!-- app JavaScript -->
<script src="../assets/js/app.js"></script>

<script src="../assets/vendor/moment.min.js"></script>
</body>
</html>