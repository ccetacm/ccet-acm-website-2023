<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from live.themewild.com/techrun/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Oct 2022 19:11:45 GMT -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>CCET | ACM | TEAM-2022</title>

    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="team.css">
    <style>
        .heading {
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <div class="loader-box-1"></div>
            <div class="loader-box-2"></div>
        </div>
    </div>

    <!---------------------------------------------------------HEADER START ---------------------------------------------------------------->
    <header class="header">
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index-2.html">
                        <img src="assets/img/logo/ACM Logo Black.svg" class="logo-display" alt="logo">
                        <img src="assets/img/logo/ACM Logo Blue.svg" class="logo-scrolled" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.html">Home</a>

                            </li>
                            <li class="nav-item"><a class="nav-link" href="about.html"> About </a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="gallery.html" data-bs-toggle="">Gallery</a>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Events</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="events.html">Events</a></li>
                                    <li><a class="dropdown-item" href="competition.html">competition</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Team</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="Office-bearers.html">Office bearers</a></li>
                                    <li><a class="dropdown-item" href="Executive-members.html">Executive members</a>
                                    </li>
                                    <li><a class="dropdown-item" href="web-masters.html">Web Masters</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="achievements.html">Acheivements</a>

                            </li>
                            <li class="nav-item"><a class="nav-link" href="resources.html"> Resources </a></li>
                            <li class="nav-item"><a class="nav-link" href="magazine.html"> magazine </a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                        <div class="header-nav-right">

                            <div class="header-btn">
                                <a href="acm-w.html" class="theme-btn" style="width: 100px; height: 40px;">ACM-W</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!---------------------------------------------------------HEADER END ---------------------------------------------------------------->


    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>

    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h2 class="breadcrumb-title">TEAM MEMBERS</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html"><i class="far fa-home"></i> Home</a></li>
                    <li class="active">OFFICE BEARERS</li>
                </ul>
            </div>
            <div class="breadcrumb-shape">
                <img src="assets/img/shape/shape-4.svg" alt="">
            </div>
        </div>
        <h2 class="site-title heading ">MEET OUR <span>TEAM</span></h2>

        <div class="case-area py-120">

            <div class="container">

                <!----------------------BUTTONS------------------------->
                <div class="filter-controls">
                    <ul class="filter-btns">
                        <li class="active" data-filter=".cat1">YEAR 2022-2023</li>
                        <li data-filter=".cat2">YEAR 2021-2022</li>
                        <li data-filter=".cat3">YEAR 2020-2021</li>
                        <li data-filter=".cat4">YEAR 2019-2020</li>
                        <li data-filter=".cat5">YEAR 2019-2020</li>
                    </ul>
                </div>
                <!--------------------------TEAM---------------------------->
                <div class="row filter-box popup-gallery">

                    <div class="team-area py-120">
                        <div class="container">
                            <div class="row">

                                <?php

                                $conn = new mysqli("ccet.hosting2.acm.org", "ccethosting2acm_admin", "@dmin@321", "ccethosting2acm_website_2023");

                                if ($conn->connect_error) {
                                    echo "Connection Failed";
                                    die();
                                }

                                $data = $conn->query("SELECT * FROM `acm_team_record` WHERE 1");

                                while ($row = $data->fetch_array(MYSQLI_ASSOC)) {

                                    echo '<div class="col-md-6 col-lg-4 col-xl-3 filter-item ' . $row["category"] . '">
                                            <div class="team-item">
                                                <img src="' . $row["image_link"] . '" alt="thumb">
                                                <div class="team-social">
                                                    <a href="' . $row["github"] . '"><i class="fab fa-github"></i></a>
                                                    <a href="' . $row["linkedin"] . '"><i class="fab fa-linkedin"></i></a>
                                                    <a href="' . $row["orcid"] . '"><i class="fab fa-orcid"></i></a>
                                                </div>
                                                <div class="team-content">
                                                    <div class="team-bio">
                                                        <h5><a href="#">' . $row["name"] . '</a></h5>
                                                        <span>' . $row["position"] . '</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                }


                                ?>

                            </div>

    </main>








    <!---------------------------------------------------------FOOTER START ---------------------------------------------------------------->

    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="./index.html" class="footer-logo">
                                <img src="assets/img/logo/ACM Logo Black.svg    " alt="">
                            </a>
                            <p class="mb-20">
                                ACM boosts up the potential and talent, supporting the overall development needs of
                                our students to facilitate a structured path from education to employment by
                                providing a safe and supported space where creative talent and imagination can
                                flourish in a caring environment.
                            </p>
                            <div class="footer-contact">
                                <ul>
                                    <li><i class="far fa-map-marker-alt"></i>CCET, SECTOR-26, CHANDIGARH</li>

                                </ul>
                            </div>
                            <ul class="footer-social">
                                <li><a href="https://www.facebook.com/acmwccet"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/acmwccet"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li><a href="https://twitter.com/acmccet"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCdqrwqNB9ibYjFpBkMA-4iQ"><i
                                            class="fab fa-youtube"></i></a></li>
                                <li><a href="mailto:acm@ccet.ac.in"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="http://linkedin.com/in/ccet-acm-w-843729228"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Explore</h4>
                            <ul class="footer-list">
                                <li><a href="about.html"><i class="fas fa-caret-right"></i> About </a></li>
                                <li><a href="index.html"><i class="fas fa-caret-right"></i> Home</a></li>
                                <li><a href="team.html"><i class="fas fa-caret-right"></i> Team</a></li>
                                <li><a href="achievements.html"><i class="fas fa-caret-right"></i> Achievments</a>
                                </li>
                                <li><a href="acm-w.html"><i class="fas fa-caret-right"></i> ACM-W</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">

                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Contact Us</h4>
                            <div class="footer-newsletter">
                                <p>Chandigarh College of Engineering and Technology Degree Wing Sector - 26, Chandigarh
                                    Website: <a style="color: white;" href="https://www.ccet.ac.in/">www.ccet.ac.in</a>
                                </p>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                        <button class="theme-btn" type="submit">
                                            Subscribe Now <i class="far fa-paper-plane"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p class="copyright-text">
                            Copyright © 2023 All rights reserved | <br> Developed by <a href="./web-masters.html">CCET
                                ACM Website
                                Team</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!---------------------------------------------------------FOOTER END---------------------------------------------------------------->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>


    <script defer src="../../../static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"69470d4c9fc41b98","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/mixitup.js"></script>

    <script src="js/script.js"></script>


    <a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/counter-up.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function () {

            $(window).on("load", function () {
                if ($(".filter-box").children().length > 0) {
                    $(".filter-box").isotope({
                        itemSelector: ".filter-item",
                        masonry: { columnWidth: 1 },
                        filter: '.cat1',
                    });

                }
            });

        });

    </script>
</body>

<!-- Mirrored from live.themewild.com/techrun/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Oct 2022 19:11:45 GMT -->

</html>