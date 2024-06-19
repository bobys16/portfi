<?php 
$title = 'Portfi - Showcase Your Professional Portfolio';
?>
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Portfi - An advanced platform for creating and managing your online portfolio. Showcase your skills, experiences, and projects professionally.">
        <meta name="keywords" content="portfolio, online portfolio, professional portfolio, portfolio management, showcase skills, project showcase">
        <meta name="dicoding:email" content="bondanfadil12@gmail.com">
        <meta name="author" content="Portfi Team">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 5 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title  -->
        <title><?= $title;?></title>

        <!-- Favicon  -->
        <link rel="icon" href="logo.png">

        <!-- ***** All CSS Files ***** -->

        <!-- Style css -->
        <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body>
        <!--====== Preloader Area Start ======-->
        <div id="gameon-preloader" class="gameon-preloader">
            <!-- Preloader Animation -->
            <div class="preloader-animation">
                <!-- Spinner -->
                <div class="spinner"></div>
                <p class="fw-5 text-center text-uppercase">Loading</p>
            </div>
            <!-- Loader Animation -->
            <div class="loader-animation">
                <div class="row h-100">
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Preloader Area End ======-->

        <div class="main">
            <!-- ***** Header Start ***** -->
            <header id="header">
                <!-- Navbar -->
                <nav data-aos="zoom-out" data-aos-delay="800" class="navbar gameon-navbar navbar-expand">
                    <div class="container header">

                        <!-- Logo -->
                        <a class="navbar-brand" href="/">
                            <img src="logo.png" alt="Brand Logo" />
                        </a>

                        <div class="ml-auto"></div>

                        <!-- Navbar Nav -->
                        <ul class="navbar-nav items mx-auto">
                            <li class="nav-item active">
                                <a href="#hero" class="nav-link active">Home</a>
                            </li> 
                            <li class="nav-item active">
                                <a href="#portfolio" class="nav-link active">Portfolio</a>
                            </li>   
                        </ul>
                    
                        <!-- Navbar Toggler -->
                        <ul class="navbar-nav toggle">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                    <i class="icon-menu m-0"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ***** Header End ***** -->
            <!-- ***** Hero Area Start ***** -->
            <section class="hero-section" id="hero">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-12 col-md-6 col-lg-9 text-center">
                            <!-- Hero Content -->
                            <div class="hero-content">
                                <div class="intro text-center mb-1">
                                    <span class="intro-text">Portfi</span>
                                    <h2>Showcase Your Professional Portfolio</h1>
                                    <p>An Advanced Platform for Creating and Managing Your Online Portfolio!</p>
                                </div>
                                <!-- Buttons -->
                                <div class="button-group">
                                    <a class="btn btn-bordered-white" href="/dashboard/register"><i class="icon-rocket mr-2"></i>Sign Up</a>
                                    <a class="btn btn-bordered-white" href="/dashboard/login"><i class="icon-info mr-2"></i>Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ***** Hero Area End ***** -->
            <section class="cta-area p-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 card">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-12 col-md-5 text-center">
                                    <img src="assets/images/app.png" alt="">
                                </div>
                                <div class="col-12 col-md-6 mt-4 mt-md-0">
                                    <h2 class="m-0">Create & Manage Your Portfolio Easily!</h2>
                                    <p>PortFi is the first free online portfolio platform that offers a convenient website available on all platform. You can create and manage your professional portfolio directly from the app!</p>
                                    <!-- wn -->
                                    <!-- <a class="btn btn-bordered active d-inline-block" href="/dashboard" target="_blank"><i class="icon-rocket mr-2"></i>Sign Up Now!</a> -->
                                    <a class="btn btn-bordered-white" href="/dashboard" target="_blank"><i class="icon-rocket mr-2"></i>Sign Up Now!</a>
                                </div>
                            </div>
                            <a class="cta-link" href="https://play.google.com/store/apps/details?id=ucp.portfi.com" target="_blank"></a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Portfolio Template -->
            <section class="content-section" id="portfolio">
                <div class="container paddingx-0 paddingx-1">
                    <div class="card">
                        <div class="content-section-heading text-center">
                            <h2 class="mb-1">Portfolio Template</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <a class="portfolio-item" href="#!">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <div class="h2">Template 1 Light</div>
                                            <p class="mb-0">Our First ever collection of portofolio template you can freely use!</p>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="https://portfi.online/dashboard/assets/img/template/first_template1.jpg" alt="..." />
                                </a>
                            </div>
                            <div class="col-lg">
                                <a class="portfolio-item" href="#!">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <div class="h2">Template 1 Dark</div>
                                            <p class="mb-0">Our First ever collection of portofolio template you can freely use!</p>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="https://portfi.online/dashboard/assets/img/template/first_dark1.jpg" alt="..." />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php include 'footer.php'; ?>      
    </body>
</html>