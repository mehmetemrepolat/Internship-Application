

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
<?php
include('../vt.php');

session_start(); //oturum başlattık
//oturumdaki bilgilerin doğruluğunu kontrol ediyoruz

if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "5672") {
    //eğer veriler doğru ise sayfaya girmesine izin veriyoruz
    $student_id_No = $_SESSION["ID"];

    $sqlProfileInfoQuery = "Select st_name, st_lastName, st_PhoneNumber, st_mailAdress, st_class, st_adress, st_city, st_town,
                            st_postCode, st_citizenship, st_faculty, st_department FROM students where st_id = '$student_id_No'";
    
    if($Info_Results = $baglanti->query($sqlProfileInfoQuery)){
        while($row = $Info_Results->fetch_assoc())
        {

            $name = $row["st_name"];
            $st_lastName = $row["st_lastName"];
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
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">

    <div class="iq-sidebar  sidebar-default ">
        <div class="iq-sidebar-logo d-flex align-items-center">
            <a href="../backend/index.html" class="header-logo">
                <img src="../assets/images/logo.svg" alt="logo">
                <h3 class="logo-title light-logo">Webkit</h3>
            </a>
            <div class="iq-menu-bt-sidebar ml-0">
                <i class="las la-bars wrapper-menu"></i>
            </div>
        </div>
        <div class="data-scrollbar" data-scroll="1">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="">
                        <a href="../backend/index.html" class="svg-icon">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span class="ml-4">Dashboards</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="../backend/page-project.html" class="svg-icon">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                <rect x="6" y="14" width="12" height="8"></rect>
                            </svg>
                            <span class="ml-4">Projects</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="../backend/page-task.html" class="svg-icon">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                            <span class="ml-4">Task</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="../backend/page-employee.html" class="svg-icon">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <span class="ml-4">Employees</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="../backend/page-desk.html" class="svg-icon">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                            <span class="ml-4">Desk</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="../backend/page-calender.html" class="svg-icon">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <span class="ml-4">Calender</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#otherpage" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                            </svg>
                            <span class="ml-4">other page</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class=" ">
                                <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <svg class="svg-icon" id="p-dash10" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline>
                                    </svg>
                                    <span class="ml-4">User Details</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="user" class="iq-submenu collapse" data-parent="#otherpage">
                                    <li class="active">
                                        <a href="../app/user-profile.html">
                                            <i class="las la-minus"></i><span>User Profile</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="user-add.php">
                                            <i class="las la-minus"></i><span>User Add</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../app/user-list.html">
                                            <i class="las la-minus"></i><span>User List</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <svg class="svg-icon" id="p-dash11" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                    </svg>
                                    <span class="ml-4">UI Elements</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="ui" class="iq-submenu collapse" data-parent="#otherpage">
                                    <li class="">
                                        <a href="../backend/ui-avatars.html">
                                            <i class="las la-minus"></i><span>Avatars</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-alerts.html">
                                            <i class="las la-minus"></i><span>Alerts</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-badges.html">
                                            <i class="las la-minus"></i><span>Badges</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-breadcrumb.html">
                                            <i class="las la-minus"></i><span>Breadcrumb</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-buttons.html">
                                            <i class="las la-minus"></i><span>Buttons</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-buttons-group.html">
                                            <i class="las la-minus"></i><span>Buttons Group</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-boxshadow.html">
                                            <i class="las la-minus"></i><span>Box Shadow</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-colors.html">
                                            <i class="las la-minus"></i><span>Colors</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-cards.html">
                                            <i class="las la-minus"></i><span>Cards</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-carousel.html">
                                            <i class="las la-minus"></i><span>Carousel</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-grid.html">
                                            <i class="las la-minus"></i><span>Grid</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-helper-classes.html">
                                            <i class="las la-minus"></i><span>Helper classes</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-images.html">
                                            <i class="las la-minus"></i><span>Images</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-list-group.html">
                                            <i class="las la-minus"></i><span>list Group</span>
                                        </a>
                                    </li>
                                    <li  class="">
                                        <a href="../backend/ui-media-object.html">
                                            <i class="las la-minus"></i><span>Media</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-modal.html">
                                            <i class="las la-minus"></i><span>Modal</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-notifications.html">
                                            <i class="las la-minus"></i><span>Notifications</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-pagination.html">
                                            <i class="las la-minus"></i><span>Pagination</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-popovers.html">
                                            <i class="las la-minus"></i><span>Popovers</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-progressbars.html">
                                            <i class="las la-minus"></i><span>Progressbars</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-typography.html">
                                            <i class="las la-minus"></i><span>Typography</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-tabs.html">
                                            <i class="las la-minus"></i><span>Tabs</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-tooltips.html">
                                            <i class="las la-minus"></i><span>Tooltips</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/ui-embed-video.html">
                                            <i class="las la-minus"></i><span>Video</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <svg class="svg-icon" id="p-dash12" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                    <span class="ml-4">Authentication</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="auth" class="iq-submenu collapse" data-parent="#otherpage">
                                    <li class="">
                                        <a href="../backend/auth-sign-in.php">
                                            <i class="las la-minus"></i><span>Login</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/auth-sign-up.php">
                                            <i class="las la-minus"></i><span>Register</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/auth-recoverpw.html">
                                            <i class="las la-minus"></i><span>Recover Password</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/auth-confirm-mail.html">
                                            <i class="las la-minus"></i><span>Confirm Mail</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/auth-lock-screen.html">
                                            <i class="las la-minus"></i><span>Lock Screen</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#form" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                    <svg class="svg-icon" id="p-dash13" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                    </svg>
                                    <span class="ml-4">Forms</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="form" class="iq-submenu collapse" data-parent="#otherpage">
                                    <li class="">
                                        <a href="../backend/form-layout.html">
                                            <i class="las la-minus"></i><span class="">Form Elements</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/form-input-group.html" class="svg-icon">
                                            <i class="las la-minus"></i><span class="">Form Input</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/form-validation.html" class="svg-icon">
                                            <i class="las la-minus"></i><span class="">Form Validation</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/form-switch.html" class="svg-icon">
                                            <i class="las la-minus"></i><span class="">Form Switch</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/form-chechbox.html" class="svg-icon">
                                            <i class="las la-minus"></i><span class="">Form Checkbox</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/form-radio.html" class="svg-icon">
                                            <i class="las la-minus"></i><span class="">Form Radio</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/form-textarea.html" class="svg-icon">
                                            <i class="las la-minus"></i><span class="">Form Textarea</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="#table" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <svg class="svg-icon" id="p-dash14" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>
                                    </svg>
                                    <span class="ml-4">Table</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="table" class="iq-submenu collapse" data-parent="#otherpage">
                                    <li class="">
                                        <a href="../backend/tables-basic.html">
                                            <i class="las la-minus"></i><span>Basic Tables</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/table-data.html">
                                            <i class="las la-minus"></i><span>Data Table</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/table-tree.html">
                                            <i class="las la-minus"></i><span>Table Tree</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <svg class="svg-icon" id="p-dash16" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                    </svg>
                                    <span class="ml-4">Pricing</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="pricing" class="iq-submenu collapse" data-parent="#otherpage">
                                    <li class="">
                                        <a href="../backend/pricing.html">
                                            <i class="las la-minus"></i><span>Pricing 1</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/pricing-2.html">
                                            <i class="las la-minus"></i><span>Pricing 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="../backend/timeline.html" class="svg-icon">
                                    <svg class="svg-icon" id="p-dash016" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                    <span class="ml-4">Timeline</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../backend/pages-invoice.html" class="svg-icon">
                                    <svg class="svg-icon" id="p-dash07" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                    <span class="ml-4">Invoice</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <svg class="svg-icon" id="p-dash17" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line>
                                    </svg>
                                    <span class="ml-4">Error</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="pages-error" class="iq-submenu collapse" data-parent="#otherpage">
                                    <li class="">
                                        <a href="../backend/pages-error.html">
                                            <i class="las la-minus"></i><span>Error 404</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="../backend/pages-error-500.html">
                                            <i class="las la-minus"></i><span>Error 500</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="../backend/pages-blank-page.html">
                                    <svg class="svg-icon" id="p-dash18" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline>
                                    </svg>
                                    <span class="ml-4">Blank Page</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../backend/pages-maintenance.html">
                                    <svg class="svg-icon" id="p-dash19" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                                    </svg>
                                    <span class="ml-4">Maintenance</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="sidebar-bottom" class="position-relative sidebar-bottom">
                <div class="card border-none mb-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="sidebarbottom-content">
                            <h5 class="mb-3">Task Performed</h5>
                            <div id="circle-progress-6" class="sidebar-circle circle-progress circle-progress-primary mb-4" data-min-value="0" data-max-value="100" data-value="55" data-type="percent"></div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="customRadio6" name="customRadio-1" class="custom-control-input" checked="">
                                <label class="custom-control-label" for="customRadio6">Performed task</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio7" name="customRadio-1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio7">Incomplete Task</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-5 pb-2"></div>
        </div>
    </div>      <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                    <i class="ri-menu-line wrapper-menu"></i>
                    <a href="../backend/index.html" class="header-logo">
                        <h4 class="logo-title text-uppercase">Webkit</h4>

                    </a>
                </div>
                <div class="navbar-breadcrumb">
                    <h5>Öğrenci Profil Sayfası</h5>
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
                                <div class="iq-search-bar device-search">
                                    <form action="#" class="searchbox">
                                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                        <input type="text" class="text search-input" placeholder="Search here...">
                                    </form>
                                </div>
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
                                        <h6 class="mb-0 line-height"><?php echo $_SESSION["ID"]; ?><i class="las la-angle-down ml-2"></i></h6>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="dropdownMenuButton">
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-primary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <a href="../app/user-profile.html">My Profile</a>
                                    </li>
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-primary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        <a href="../app/user-profile-edit.html">Edit Profile</a>
                                    </li>
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-primary" id="h-03-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <a href="../app/user-account-setting.html">Account Settings</a>
                                    </li>
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-primary" id="h-04-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        <a href="../app/user-privacy-setting.html">Privacy Settings</a>
                                    </li>
                                    <li class="dropdown-item  d-flex svg-icon border-top">
                                        <svg class="svg-icon mr-0 text-primary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        <a href="studentlog-out.php">Logout</a>
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
                <div class="col-lg-12">
                    <div class="card car-transparent">
                        <div class="card-body p-0">
                            <div class="profile-image position-relative">
                                <img src="../assets/images/page-img/profile.png" class="img-fluid rounded w-100" alt="profile-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-sm-0 px-3">
                <div class="col-lg-4 card-profile">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="profile-img position-relative">
                                    <img src="../assets/images/user/1.jpg" class="img-fluid rounded avatar-110" alt="profile-image">
                                </div>
                                <div class="ml-3">
                                    <h4 class="mb-1"><?php echo $name." ".$st_lastName; ?></h4>
                                    <p class="mb-2"><?php echo $st_class.".Sınıf"?></p>
                                </div>
                            </div>
                            <p>

                            </p>
                            <ul class="list-inline p-0 m-0">
                                <li class="mb-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="svg-icon mr-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <p class="mb-0"> <?php echo $st_city?> </p>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="svg-icon mr-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <p class="mb-0"><?php echo $st_faculty." Fakültesi"?></p>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="svg-icon mr-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <p class="mb-0"><?php echo $st_department.""?></p>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="svg-icon mr-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <p class="mb-0"><?php echo $st_PhoneNumber?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <svg class="svg-icon mr-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <p class="mb-0"><?php echo $st_mailAdress?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 card-profile">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <ul class="d-flex nav nav-pills mb-3 text-center profile-tab" id="profile-pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="pill" href="#profile1" role="tab" aria-selected="false">Durum</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#profile2" role="tab" aria-selected="false">Kişisel Bilgilerim</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#profile3" role="tab" aria-selected="false">Eğitim</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#profile4" role="tab" aria-selected="false">Deneyimlerim</a>
                                </li>
                                <li class="nav-item">
                                    <a id="view-btn" class="nav-link" data-toggle="pill" href="#profile5" role="tab" aria-selected="true">Hakkımda</a>
                                </li>
                            </ul>
                            <div class="profile-content tab-content">

                                <div id="profile1" class="tab-pane fade active show">
                                    <?php
                                    echo "Herhangi bir staj/IME başvurunuz bulunmamaktadır.";
                                    echo "";

                                    ?>

                                </div>
                                <div id="profile2" class="tab-pane fade">
                                    <?php
                                    echo "Anlık olarak yaptığı kurumdaki stajın bilgilerini.";
                                    echo "";

                                    ?>
                                </div>
                                <div id="profile3" class="tab-pane fade">
                                </div>
                                <div id="profile4" class="tab-pane fade">
                                </div>
                                <div id="profile5" class="tab-pane fade">
                                </div>
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