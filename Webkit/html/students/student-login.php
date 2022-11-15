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
                                        <h2 class="mb-2 text-white">Öğrenci Giriş</h2>

                                        <form name="student_login" method="post">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="floating-label form-group">
                                                        <input class="floating-input form-control" name="mail"  placeholder=" ">
                                                        <label>Öğrenci Mail</label>
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
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label control-label-1 text-white" for="customCheck1">Beni Hatırla</label>
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
                                                $mail = $_REQUEST['mail'];
                                                $password = $_REQUEST['password'];
                                                $password_hash = password_hash($password, PASSWORD_DEFAULT);

                                                $sql_query = "SELECT st_id from students where st_mailAdress='$mail' and st_password='$password'";


                                                $sqlProfileInfoQuery = "SELECT students.st_id, internship_application.Internship_ID, Company_Name, Activity_Field, 
		students.st_name, students.st_lastName, students.st_PhoneNumber, 
        students.st_mailAdress, students.st_class, students.st_adress, students.st_city, students.st_town,
                            students.st_postCode, students.st_citizenship, students.st_faculty, students.st_department, students.st_IS_info, students.st_password
FROM internship_application
INNER JOIN students ON internship_application.st_id=students.st_id where st_password = '$password'";

                                                $qqq = $baglanti->query($sqlProfileInfoQuery);
                                                $active = $row['active'];
                                                $count = mysqli_num_rows($qqq);

                                                $row = mysqli_fetch_array($qqq,MYSQLI_ASSOC);
                                                if ($count == 1)
                                                {
                                                    //Giriş gerçekleşiyor
                                                    echo "Giriş Gerçekleşir";
                                                    $_SESSION["Oturum"] = "5672"; //oturum oluşturma
                                                    $_SESSION["st_mailAdress"] = "$mail";
                                                    $QUERY = $baglanti->query($sqlProfileInfoQuery);
                                                    $RESULT = $QUERY -> fetch_array();

                                                    $student_name = $RESULT['st_name'];
                                                    $_SESSION["NAME"] = "$student_name";
                                                    $student_lastName = $RESULT['st_lastName'];
                                                    $_SESSION["last_name"] = "$student_lastName";
                                                    $student_PhoneNumber = $RESULT['st_PhoneNumber'];
                                                    $_SESSION["st_phoneNumber"] = "$student_PhoneNumber";
                                                    $student_mailAdress = $RESULT['st_mailAdress'];
                                                    $_SESSION["student_mailAdress"] = "$student_mailAdress";
                                                    $student_class = $RESULT['st_class'];
                                                    $_SESSION["student_class"] = "$student_class";
                                                    $st_adress = $RESULT['st_adress'];
                                                    $_SESSION["st_adress"] = "$st_adress";
                                                    $st_city = $RESULT['st_city'];
                                                    $_SESSION["st_city"] = "$st_city";
                                                    $st_town = $RESULT['st_town'];
                                                    $_SESSION["st_town"] = "$st_town";
                                                    $st_postCode = $RESULT['st_postCode'];
                                                    $_SESSION["st_postCode"] = "$st_postCode";
                                                    $st_citizenship = $RESULT['st_citizenship'];
                                                    $_SESSION["st_citizenship"] = "$st_citizenship";
                                                    $st_faculty = $RESULT['st_faculty'];
                                                    $_SESSION["st_faculty"] = "$st_faculty";
                                                    $st_department = $RESULT['st_department'];
                                                    $_SESSION["st_department"] = "$st_department";
                                                    $st_IS_info = $RESULT['st_IS_info'];
                                                    $_SESSION["st_IS_info"] = "$st_IS_info";
                                                    $student_ID = $RESULT['st_id'];
                                                    $_SESSION["ID"] = "$student_ID";

                                                    $Internship_ID = $RESULT['Internship_ID'];
                                                    $_SESSION["Internship_ID"] = "$Internship_ID";

                                                    echo $_SESSION["ID"];
                                                    header("location:student-profile.php"); //sayfa yönlendirme

                                                }
                                                else{
                                                    echo "Kullanıcı Adı/Parola yanlış!";
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