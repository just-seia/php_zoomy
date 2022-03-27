<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GoOnline</title>
    <meta name="keywords" content="фриланс для начинающих, биржа фриланса, фриланс вакансии для начинающих">
    <meta name="description" content="Маркетплейс и биржа фриланс-услуг GoOnline. Все услуги фрилансеров от 500 тнг. Более 200 000 исполнителей. Четкие сроки, высокая скорость выполнения. Контроль качества, арбитраж в случае споров. 100% гарантия возврата средств в случае срыва заказа. Строгая система рейтингов. В каталоге предложения только лучших фрилансеров.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <header>
        <div id="theme-menu-two" class="main-header-area main-head-three pl-100 pr-100 pt-20 pb-15">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-5">
                        <div class="logo"><a href="index.php"><img src="assets/img/logo/header_logo_one.svg" alt=""></a></div>
                    </div>
                    <div class="col-xl-7 col-lg-8 d-none d-lg-block">
                        <nav class="main-menu navbar navbar-expand-lg justify-content-center">
                            <div class="nav-container">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php" id="navbarDropdown2" role="button" aria-expanded="false">Home</a>
                                        </li>
                                        <li class="nav-item dropdown mega-menu">
                                            <a class="nav-link dropdown-toggle dropdown-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                All Categories
                                            </a>
                                            <ul class="dropdown-menu submenu mega-menu__sub-menu-box" aria-labelledby="navbarDropdown">
                                                <li><a href="index.php"><span><img src="assets/img/icon/icon7.svg" alt=""></span> Business</a></li>
                                                <li><a href="index-2.php"><span><img src="assets/img/icon/icon8.svg" alt=""></span> Technology</a></li>
                                                <li><a href="index.php"><span><img src="assets/img/icon/icon9.svg" alt=""></span> Development</a></li>
                                                <li><a href="index-2.php"><span><img src="assets/img/icon/icon10.svg" alt=""></span> Photography</a></li>
                                                <li><a href="index.php"><span><img src="assets/img/icon/icon11.svg" alt=""></span> Digital Marketing</a></li>
                                                <li><a href="index-2.php"><span><img src="assets/img/icon/icon12.svg" alt=""></span> Programming</a></li>
                                                <li><a href="index.php"><span><img src="assets/img/icon/icon14.svg" alt=""></span> Videograpgy</a></li>
                                                <li><a href="index-2.php"><span><img src="assets/img/icon/icon13.svg" alt=""></span> Illustration</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle dropdown-link" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                                <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                                <li><a class="dropdown-item" href="courses.php">Course One</a></li>
                                                <li><a class="dropdown-item" href="courses-2.php">Course Two</a></li>
                                                <li><a class="dropdown-item" href="course-details.php">Courses Details</a></li>
                                                <li><a class="dropdown-item" href="price.php">Price</a></li>
                                                <li><a class="dropdown-item" href="instructor.php">Instructor</a></li>
                                                <li><a class="dropdown-item" href="instructor-profile.php">Instructor Profile</a></li>
                                                <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.php" id="navbarDropdown5" role="button" aria-expanded="false">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-7">
                        <div class="right-nav d-flex align-items-center justify-content-end">
                            <div class="right-btn mr-25 mr-xs-15">
                                <ul class="d-flex align-items-center">
                                    <?php if (isset($_SESSION['user'])) { ?>
                                        <li><a class="sign-in ml-20" href="login.php"><img src="assets/img/icon/user.svg" alt=""></a></li>
                                    <?php } else { ?>
                                        <li><a href="login.php" class="theme_btn free_btn align-middle">Login</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="hamburger-menu d-md-inline-block d-lg-none text-right">
                                <a href="javascript:void(0);">
                                    <i class="far fa-bars"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.theme-main-menu -->
    </header>

    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
        </div>

        <!-- offset-sidebar start -->
        <div class="offset-sidebar">
            <div class="offset-widget offset-logo mb-30">
                <a href="index.php">
                    <img src="assets/img/logo/header_logo_one.svg" alt="logo">
                </a>
            </div>
            <div class="offset-widget mb-40">
                <div class="info-widget">
                    <h4 class="offset-title mb-20">About Us</h4>
                    <p class="mb-30">
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore
                    </p>
                    <a class="theme_btn theme_btn_bg" href="contact.php">Contact Us</a>
                </div>
            </div>
            <div class="offset-widget mb-30 pr-10">
                <div class="info-widget info-widget2">
                    <h4 class="offset-title mb-20">Contact Info</h4>
                    <p> <i class="fal fa-address-book"></i> 23/A, Miranda City Likaoli Prikano, Dope</p>
                    <p> <i class="fal fa-phone"></i> +0989 7876 9865 9 </p>
                    <p> <i class="fal fa-envelope-open"></i> info@example.com </p>
                </div>
            </div>
        </div>
        <!-- offset-sidebar end -->

        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <ul id="mobile-menu-active">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li><a href="about.php">About</a></li>
                <li class="has-dropdown">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="courses.php">Course One</a></li>
                        <li><a href="courses-2.php">Course Two</a></li>
                        <li><a href="course-details.php">Courses Details</a></li>
                        <li><a href="price.php">Price</a></li>
                        <li><a href="instructor.php">Instructor</a></li>
                        <li><a href="instructor-profile.php">Instructor Profile</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="login.php">login</a></li>
                    </ul>
                </li>
                <li class="has-dropdown"><a href="#">Blogs</a>
                    <ul class="sub-menu">
                        <li><a href="blog.php">Blog Grid</a></li>
                        <li><a href="blog-details.php">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contacts Us</a></li>
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
    </aside>
    <div class="body-overlay"></div>
    <!-- slide-bar end -->