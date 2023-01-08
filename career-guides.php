<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from live.themewild.com/techrun/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Oct 2022 19:10:27 GMT -->

<head>
    <style>
        .outlet {
            width: 20%;
            height: 400px;
            background-image: url("assets/img/slider/vol1.png");
            background-size: 100% 100%;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            animation: changeImage 20s linear infinite;
        }

        @keyframes changeImage {
            0% {
                background-image: url("assets/img/slider/vol1.png");
            }

            25% {
                background-image: url("assets/img/slider/vol1issue2.png");
            }

            50% {
                background-image: url("assets/img/slider/vol1issue3.jpeg");
            }

            75% {
                background-image: url("assets/img/slider/vol2issue2.png");
            }

            100% {
                background-image: url("assets/img/slider/vol2issue1.png");
            }
        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Techrun - IT Solutions And Technology HTML5 Template</title>

    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/my-style.css">
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <div class="loader-box-1"></div>
            <div class="loader-box-2"></div>
        </div>
    </div>


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

    <main class="main">
        <div class="hero-section">
            <div class="hero-wrapper">
                <div class="shit" style="padding: 12.75rem;"></div>
                <div class="hero-shape">
                    <img src="./assets/img/shape/shape-1.png" alt="">
                </div>
            </div>
        </div>
    </main>

    <?php

    class CareerGuide
    {
        public $time;
        public $content;
        public $title;
        public $userAvatar;
        public $highlightImage;
        public $userName;
        public $link;

        public function __construct($time, $userAvatar, $userName, $title, $content, $highlightImage, $link)
        {
            $this->time = $time;
            $this->content = $content;
            $this->title = $title;
            $this->userAvatar = $userAvatar;
            $this->highlightImage = $highlightImage;
            $this->userName = $userName;
            $this->link = $link;
        }

        function getContent()
        {
            return $this->content;
        }

        function getTitle()
        {
            return strtoupper($this->title);
        }
    }
    // TODO -> Create a API interaction services to fetch the data here
    $guide1 = new CareerGuide(
        date("d-m-Y"),
        //time
        "https://i1.sndcdn.com/artworks-000201643626-n9t98c-t500x500.jpg",
        //avatar
        "Rick Astley",
        // username
        "Rick-Rolls 🌯🌯",
        // title
        "Never Gonna Give You Up",
        //content
        "https://variety.com/wp-content/uploads/2021/07/Rick-Astley-Never-Gonna-Give-You-Up.png?w=681&h=383&crop=1",
        // image
        "https://google.com/" // read more link
    );
    $guide2 = new CareerGuide(
        date("d-m-Y"),
        "https://i.pinimg.com/originals/c1/59/07/c15907858762d350e518bd799d9f2333.png",
        "OP Takla",
        "How to deal with being OP 💪",
        "Voluptate et nisi qui esse culpa labore quis. Velit cillum sunt id ea. Cupidatat dolore ex fugiat quis occaecat ipsum nostrud est reprehenderit sunt reprehenderit consectetur ut. Cillum nulla id cillum duis consectetur anim consequat est do eiusmod amet deserunt ea. Cupidatat qui eiusmod quis consectetur voluptate aliquip cillum ad aliquip est consequat laboris. Eiusmod deserunt consequat Lorem nisi irure culpa amet proident cillum qui dolore cupidatat ex ullamco. Eu occaecat laboris ea amet ipsum.Esse ex aute deserunt aliqua quis ad eu aliquip. Adipisicing in Lorem non sint pariatur irure nisi veniam. Duis sunt ut ex eu mollit minim amet eu ullamco veniam enim officia consectetur. Ad labore aute ea proident elit pariatur dolore eu ad. Non ad enim ipsum aliquip veniam cillum.",
        "http://pm1.narvii.com/7539/b91cf90660f46a2ece88d6a6df98ded197a65d81r1-1920-1080v2_uhq.jpg",
        "https://google.com/"
    );
    $guide3 = new CareerGuide(
        date("d-m-Y"),
        "https://media.tenor.com/8con2qHslXgAAAAC/eris-greyrat.gif",
        "Eris",
        "How to put in thought",
        "Putting in the thought can greatly better your career as it proves to your team that you are indeed very and supportive of the endeavour being pursued, hence it is important to understand how one can put in the thought efficiently and maintain a healthy work life balance.",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbjhsqShVvcpV0ZnMGdIIa99IlJ0PyYuX9YQG4rW2qFjNQKalGB_9yg6vhj5CrhvbmCUA&usqp=CAU",
        "https://google.com/"
    );
    $guide4 = new CareerGuide(
        date("d-m-Y"),
        "https://pbs.twimg.com/profile_images/832678694518796288/62uLUwxO_400x400.jpg",
        "A dolphin",
        "The Final Solution",
        "Ambition is very important for one's career for without ambition one can't obtain the necessary motivation for one to achieve their goals. However it is very important that one does not get cancelled on twitter in pursuit of greatness for without musky boi's blessing what are we but shit-brained neanderthals, thus it is very important to hide your ambitions, never let them know your next move, accept the sigma grindest.",
        "https://upload.wikimedia.org/wikipedia/commons/1/10/Tursiops_truncatus_01.jpg",
        "https://google.com/"
    );
    $guide5 = new CareerGuide(
        date("d-m-Y"),
        "https://upload.wikimedia.org/wikipedia/commons/7/7f/Matt_Walsh_%28cropped%29.jpg",
        "Real Giga Chad",
        "What is a woman?",
        "<a href='https://www.youtube.com/watch?v=42ivIRd9N8E' target='_blank'>https://www.youtube.com/watch?v=42ivIRd9N8E</a>",
        "https://i.ytimg.com/vi/pX2LUvkiVeQ/maxresdefault.jpg",
        "https://www.youtube.com/watch?v=42ivIRd9N8E"
    );
    $guides = [$guide1, $guide2, $guide3, $guide4, $guide5]
        ?>

    <head>
        <link rel="stylesheet" href="./my-style.css">
        <script defer src="./assets/js/observer-hide-show.lib.js"></script>
    </head>
    <main class="guides">
        <?php if (empty($guides)): ?>
            <p class="lead mt-3">No guides available</p>
        <?php endif; ?>
        <?php foreach ($guides as $guide): ?>
            <?php $highlightImage = "<div class='highlightImage' style='background-image: url($guide->highlightImage)'>
            </div>" ?>
            <?php $guideBody = substr($guide->content, 0, 500) . "<a href='$guide->link' target='_blank'>... Read More</a>" ?>
            <?php $guideTitle = "➜ <span class='headingText'>$guide->title</span>" ?>
            <?php $footerBody = " <p class='date'>$guide->time</p> <div class='user'> By: <p style='text-decoration: underline'> $guide->userName</p> • <div class='avatar' style='background-image: url($guide->userAvatar)'></div> </div>" ?>
            <div class="career-guide hidden">
                <?php echo "
            $highlightImage
            <div class='content'>
                <div class='text'>
                    <h2 class='heading'>
                        $guideTitle
                    </h2>
                    <p class='contentText'>
                        $guideBody
                    </p>
                </div>
                <div class='footer'>
                    $footerBody
                </div>
            </div>
            " ?>
            </div>
        <?php endforeach; ?>
    </main>

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


    <a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/modernizr.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/js/jquery.magnific-popup.min.js"></script>
    <script src="./assets/js/isotope.pkgd.min.js"></script>
    <script src="./assets/js/jquery.appear.min.js"></script>
    <script src="./assets/js/jquery.easing.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/counter-up.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

<!-- Mirrored from live.themewild.com/techrun/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Oct 2022 19:10:48 GMT -->

</html>