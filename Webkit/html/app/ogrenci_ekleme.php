<?php
include "../vt.php"
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
<body class="  ">
<!-- loader Start -->


<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">


        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                    <i class="ri-menu-line wrapper-menu"></i>
                    <a href="../backend/index.php" class="header-logo">
                        <h4 class="logo-title text-uppercase">Webkit</h4>

                    </a>
                </div>
                <div class="navbar-breadcrumb">
                    <h5>Admin Paneli</h5>
                </div>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list align-items-center">
                            <li>

                            </li>
                            <li class="nav-item nav-icon search-content">
                                <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-search-line"></i>
                                </a>
                                <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                    <form action="#" class="searchbox p-2">
                                        <div class="form-group mb-0 position-relative">
                                            <input type="text" class="text search-input font-size-12"
                                                   placeholder="type here to search...">
                                            <a href="#" class="search-link"><i class="las la-search"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item nav-icon nav-item-icon dropdown">
                                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-mail">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <span class="bg-primary"></span>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="card shadow-none m-0">
                                        <div class="card-body p-0 ">
                                            <div class="cust-title p-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">All Messages</h5>
                                                    <a class="badge badge-primary badge-card" href="#">3</a>
                                                </div>
                                            </div>
                                            <div class="px-3 pt-0 pb-0 sub-card">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3 border-bottom">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                 src="../assets/images/user/01.jpg" alt="01">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Emma Watson</h6>
                                                                <small class="text-dark"><b>12 : 47 pm</b></small>
                                                            </div>
                                                            <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3 border-bottom">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                 src="../assets/images/user/02.jpg" alt="02">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Ashlynn Franci</h6>
                                                                <small class="text-dark"><b>11 : 30 pm</b></small>
                                                            </div>
                                                            <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                 src="../assets/images/user/03.jpg" alt="03">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Kianna Carder</h6>
                                                                <small class="text-dark"><b>11 : 21 pm</b></small>
                                                            </div>
                                                            <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#"
                                               role="button">
                                                View All
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-icon nav-item-icon dropdown">
                                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg>
                                    <span class="bg-primary "></span>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="card shadow-none m-0">
                                        <div class="card-body p-0 ">
                                            <div class="cust-title p-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Notifications</h5>
                                                    <a class="badge badge-primary badge-card" href="#">3</a>
                                                </div>
                                            </div>
                                            <div class="px-3 pt-0 pb-0 sub-card">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3 border-bottom">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                 src="../assets/images/user/01.jpg" alt="01">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Emma Watson</h6>
                                                                <small class="text-dark"><b>12 : 47 pm</b></small>
                                                            </div>
                                                            <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3 border-bottom">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                 src="../assets/images/user/02.jpg" alt="02">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Ashlynn Franci</h6>
                                                                <small class="text-dark"><b>11 : 30 pm</b></small>
                                                            </div>
                                                            <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                 src="../assets/images/user/03.jpg" alt="03">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Kianna Carder</h6>
                                                                <small class="text-dark"><b>11 : 21 pm</b></small>
                                                            </div>
                                                            <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#"
                                               role="button">
                                                View All
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown caption-content">
                                <a href="#" class="search-toggle dropdown-toggle  d-flex align-items-center" id="dropdownMenuButton4"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="../assets/images/user/1.jpg" class="img-fluid rounded-circle" alt="user">
                                    <div class="caption ml-3">
                                        <h6 class="mb-0 line-height">Admin-<?php echo $adi ." ".$soyadi; ?><i class="las la-angle-down ml-2"></i></h6>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="dropdownMenuButton">
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-primary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <a href="../app/user-profile.html">Profil</a>
                                    </li>
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-primary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        <a href="../app/user-profile-edit.html">Profili Düzenle</a>
                                    </li>
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-primary" id="h-03-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <a href="../app/user-account-setting.html">Ayarlar</a>
                                    </li>
                                    <li class="dropdown-item  d-flex svg-icon border-top">
                                        <svg class="svg-icon mr-0 text-primary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        <a href="../backend/auth-sign-in.html">Çıkış Yap</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>      <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Yeni Öğrenci Ekle</h4>
                            </div>
                        </div>

                        <form id="form3" method="post">
                        <div class="card-body">
                                <div class="form-group">
                                    <div class="crm-profile-img-edit position-relative">
                                        <img class="crm-profile-pic rounded avatar-100" src="../assets/images/user/11.png" alt="profile-pic">
                                        <div class="crm-p-image bg-primary">
                                            <i class="las la-pen upload-button"></i>
                                            <input class="file-upload" type="file" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="img-extension mt-3">
                                        <div class="d-inline-block align-items-center">
                                            <a href="javascript:void();">.jpg</a>
                                            <a href="javascript:void();">.png</a>
                                            <a href="javascript:void();">.jpeg</a>
                                            <span>formatında yükleyiniz.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="furl">E-Mail:</label>
                                    <input type="text" class="form-control" name="txtmail" id="furl" placeholder="E-Mail Adresi">
                                </div>
                                <div class="form-group">
                                    <label for="turl">Tel No:</label>
                                    <input type="text" class="form-control" name="txttelno" id="turl" placeholder="(555) 555 55 55">
                                </div>
                        </div>


                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Kişisel Bilgiler</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="new-user-info">

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="fname">Ad:</label>
                                            <input type="text" class="form-control" name="txtadi" id="fname" placeholder="Adı">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lname">Soyad:</label>
                                            <input type="text" class="form-control" name="txtsoyadi" id="lname" placeholder="Soyadı">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="add1">Oğrenci NO:</label>
                                            <input type="text" class="form-control" name="txtogrencino" id="add1" placeholder="Öğrenci NO">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="add1">Danışman ID:</label>
                                            <input type="text" class="form-control" name="txtdanismanid" id="add1" placeholder="Danışman ID">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="cname">Bölüm ID:</label>
                                            <input type="text" class="form-control" name="txtbol" id="cname" placeholder="Bölümü">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="cname">Sınıf:</label>
                                            <input type="text" class="form-control" name="txtsinif" id="cname" placeholder="Sınıfı">
                                        </div>
                                    </div>
                                    <hr>
                                    <h5 class="mb-3">--</h5>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="pass">Öğrenci Şifre:</label>
                                            <input type="password" class="form-control" name="txtpass" id="pass" placeholder="Öğrenci Şifresi">
                                        </div>
                                    </div>
                                <div class="checkbox">
                                    <a href="mailto:?subject=Kocaeli Üniversitesi Yüksek Lisans Öğrenci Kullanıcı Adı ve Şifre">Bilgileri Mail Olarak Gönder</a>
                                </div>
                                <?php
                                //Post varsa yani submit yapılmışsa veri tabanından kontrolü yapıyoruz.
                                if ($_POST) {
                                    include("../vt.php");

              

                                    $sql_query = "INSERT INTO ogrenciler (ogrenci_id, danisman_id, bolum_id, o_adi, o_soyadi, o_mail, o_tel_no, o_sinif, durum_id, o_foto, o_pass) 
                                                  VALUES ('$txtogrencino','$txtdanismanid', '$txtbol', '$txtadi', '$txtsoyadi', '$txtmail', '$txttelno', '$txtsinif', '1', 'a', '$txtpassx')";


                                    //$baglanti->query("INSERT INTO ogrenciler (ogrenci_id, danisman_id, bolum_id, o_adi, o_soyadi, o_mail, o_tel_no, o_sinif, durum_id, o_foto, o_pass)
                                     //VALUES ('$txtogrencino','$txtdanismanid', '$txtbol', '$txtadi', '$txtsoyadi', '$txtmail', '$txttelno', '$txtsinif', '1', 'a', '$txtpassx')");


                                }
                                ?>
                                    <td class="text-center">
                                        <input type="submit" class="btn btn-primary btn-block" ID="btnGiris" value="Kaydet"/>
                                    </td>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Wrapper End-->

<!-- Modal list start -->
<div class="modal fade" role="dialog" aria-modal="true" id="new-project-modal">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-block text-center pb-3 border-bttom">
                <h3 class="modal-title" id="exampleModalCenterTitle01">New Project</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText01" class="h5">Project Name*</label>
                            <input type="text" class="form-control" id="exampleInputText01" placeholder="Project Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText2" class="h5">Categories *</label>
                            <select name="type" class="selectpicker form-control" data-style="py-0">
                                <option>Category</option>
                                <option>Android</option>
                                <option>IOS</option>
                                <option>Ui/Ux Design</option>
                                <option>Development</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText004" class="h5">Due Dates*</label>
                            <input type="date" class="form-control" id="exampleInputText004" value="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText07" class="h5">Assign Members*</label>
                            <input type="text" class="form-control" id="exampleInputText07">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                            <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                            <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-task-modal">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-block text-center pb-3 border-bttom">
                <h3 class="modal-title" id="exampleModalCenterTitle">New Task</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText02" class="h5">Task Name</label>
                            <input type="text" class="form-control" id="exampleInputText02" placeholder="Enter task Name">
                            <a href="#" class="task-edit text-body"><i class="ri-edit-box-line"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label for="exampleInputText2" class="h5">Assigned to</label>
                            <select name="type" class="selectpicker form-control" data-style="py-0">
                                <option>Memebers</option>
                                <option>Kianna Septimus</option>
                                <option>Jaxson Herwitz</option>
                                <option>Ryan Schleifer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label for="exampleInputText05" class="h5">Due Dates*</label>
                            <input type="date" class="form-control" id="exampleInputText05" value="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label for="exampleInputText2" class="h5">Category</label>
                            <select name="type" class="selectpicker form-control" data-style="py-0">
                                <option>Design</option>
                                <option>Android</option>
                                <option>IOS</option>
                                <option>Ui/Ux Design</option>
                                <option>Development</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText040" class="h5">Description</label>
                            <textarea class="form-control" id="exampleInputText040" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText005" class="h5">Checklist</label>
                            <input type="text" class="form-control" id="exampleInputText005" placeholder="Add List">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-0">
                            <label for="exampleInputText01" class="h5">Attachments</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile003">
                                <label class="custom-file-label" for="inputGroupFile003">Upload media</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-4">
                            <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                            <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-user-modal">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-block text-center pb-3 border-bttom">
                <h3 class="modal-title" id="exampleModalCenterTitle02">New User</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3 custom-file-small">
                            <label for="exampleInputText01" class="h5">Upload Profile Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText2" class="h5">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputText2" placeholder="Enter your full name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText04" class="h5">Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputText04" placeholder="Enter phone number">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText006" class="h5">Email</label>
                            <input type="text" class="form-control" id="exampleInputText006" placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText2" class="h5">Type</label>
                            <select name="type" class="selectpicker form-control" data-style="py-0">
                                <option>Type</option>
                                <option>Trainee</option>
                                <option>Employee</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText2" class="h5">Role</label>
                            <select name="type" class="selectpicker form-control" data-style="py-0">
                                <option>Role</option>
                                <option>Designer</option>
                                <option>Developer</option>
                                <option>Manager</option>
                                <option>BDE</option>
                                <option>SEO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                            <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                            <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-create-modal">
    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-block text-center pb-3 border-bttom">
                <h3 class="modal-title" id="exampleModalCenterTitle03">New Task</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText03" class="h5">Task Name</label>
                            <input type="text" class="form-control" id="exampleInputText03" placeholder="Enter task Name">
                            <a href="#" class="task-edit text-body"><i class="ri-edit-box-line"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText2" class="h5">Assigned to</label>
                            <select name="type" class="selectpicker form-control" data-style="py-0">
                                <option>Memebers</option>
                                <option>Kianna Septimus</option>
                                <option>Jaxson Herwitz</option>
                                <option>Ryan Schleifer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText2" class="h5">Project Name</label>
                            <select name="type" class="selectpicker form-control" data-style="py-0">
                                <option>Enter your project Name</option>
                                <option>Ui/Ux Design</option>
                                <option>Dashboard Templates</option>
                                <option>Wordpress Themes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText40" class="h5">Description</label>
                            <textarea class="form-control" id="exampleInputText40" rows="2" placeholder="Textarea"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText8" class="h5">Checklist</label>
                            <input type="text" class="form-control" id="exampleInputText8" placeholder="Add List">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-0">
                            <label for="exampleInputText01" class="h5">Attachments</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Upload media</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-4">
                            <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                            <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                <span class="mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">Webkit</a>.
            </div>
        </div>
    </div>
</footer>
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
