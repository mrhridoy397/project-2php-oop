<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="-To7CTzAi43UnT2Ej2dsTpYIVUwXYxYZtO4mn8YjmCs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- this link for tittle favicon-->
    <link rel="shortcut icon" href="<?php echo $settings[1]['description']; ?>" type="image/x-icon">
    <!--This link is stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/css/css_style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
    <!--Font Awesome CDN here-->
    <script src="assets/js/use.fontawesome.com_1f84390ee1.js"></script>
    <link rel="stylesheet" href="assets/css/use.fontawesome.com_1f84390ee1.css">
    <!-- bootStrap 4.5 -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" /> -->
    <!--google font link for this-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="assets/css/fonts.googleapis.com_css2_family=Tiro+Bangla&display=swap.css" rel="stylesheet">
    <!-- jQuery v3.5.1 -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Main Js -->
    <script src="assets/js/sweetalert2.js"></script>


    <title>Home || <?php echo $settings[0]['description']; ?></title>

</head>

<body>


    <section class="header-mainbar">

        <div class="top-row">
            <div class="col">
                <img id="head-icon" width="400" height="80" src="<?php echo $settings[18]['description']; ?>" alt="">
            </div>
            <div class="col">
                <div class="col-in-row">
                    <div class="col-social">
                        <a target="_blank" href="<?php echo $settings[10]['description']; ?>"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="<?php echo $settings[12]['description']; ?>"><i class="fa fa-youtube"></i></a>
                        <a target="_blank" href="<?php echo $settings[13]['description']; ?>"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="<?php echo $settings[14]['description']; ?>"><i class="fa fa-linkedin"></i></a>
                        <a target="_blank" href="<?php echo $settings[11]['description']; ?>"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="col-login">
                        <a href="admin/index.php" target="blank">Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- header top section End-->

    <!-- Section: Header -->
    <header class="header">
        <section class="container-menu-top">
            <div class="wrapper">
                <div class="logo-part">
                    <div class="logo-img">
                        <img id="head-icon" width="400" height="80" src="assets/img/brand-logo.png" alt="">
                    </div>

                    <button type="button" class="burger" id="burger">
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                    </button>
                    <span class="overlay" id="overlay"></span>
                    <nav class="navbar" id="navbar">
                        <button type="button" class="closed-menu">
                            <i id="closed-menu" class="fa fa-times"></i>
                        </button>
                        <ul class="menu">
                            <li class="menu-item"><a class="active-page" href="index">Home</a></li>
                            <li class="menu-item menu-item-child">
                                <a href="#" class="" data-toggle="sub-menu">About us<i class="expand "></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a class="" href="about.php">About the organization</a></li>
                                    <li class="menu-item"><a target="_blank" href="teacher.php">About the Teacher</a></li>

                                </ul>
                            </li>
                            <li class="menu-item menu-item-child">
                                <a href="#" class="" data-toggle="sub-menu">Course Category<i class="expand "></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a class="" href="course.php">Our Popular Courses</a></li>
                                </ul>
                            </li>

                            <li class="menu-item"><a class="" href="successHistory.php">success story</a></li>
                            <li class="menu-item menu-item-child">
                                <a href="#" class="" data-toggle="sub-menu">Gallery<i class="expand "></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a class="" href="photoGallery.php">Photo gallery</a></li>

                                </ul>
                            </li>
                            <li class="menu-item"><a class="" href="freelanching.php">Freelancing</a></li>
                            <li class="menu-item"><a class="" href="contact.php">Contact</a></li>
                            <li class="menu-item"><a class="" href="result.php" target="_blank">Result</a></li>
                            <li id="member-login" class="menu-item"><a target="_blank" href="login.php">Login</a></li>
                        </ul>
                    </nav>
                </div>
        </section>
    </header>
    <!-- header section end -->