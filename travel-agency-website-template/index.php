<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="assets/images/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <title>Imperial Airways</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link href="assets/css/fontawesome.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"><h2>Imperial<em> Airways</em></h2></a>
            <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                    data-target="#navbarResponsive" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="packages.php">Packages</a></li>

                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

                    <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown"
                           href="#" role="button">More</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="about-us.php">About Us</a>
                            <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                            <a class="dropdown-item" href="terms.php">Terms</a>
                        </div>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h4>Book your ticket today!</h4>
                <h2>Best flights</h2>
            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                <h4>Fugiat Aspernatur</h4>
                <h2>Laboriosam reprehenderit ducimus</h2>
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                <h4>Saepe Omnis</h4>
                <h2>Quaerat suscipit unde minus dicta</h2>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Featured Vacations</h2>
                    <a href="packages.php">view more <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="package-details.php"><img alt="" src="assets/images/product-1-370x270.jpg"></a>
                    <div class="down-content">
                        <a href="package-details.php"><h4>Limelight Lodge</h4></a>

                        <h6>$300 - $400</h6>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et.
                            Voluptas vel labore numqua.</p>

                        <small>
                            <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Nights"><i class="fa fa-cube"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                        </small>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-item">
                    <a href="package-details.php"><img alt="" src="assets/images/product-2-370x270.jpg"></a>
                    <div class="down-content">
                        <a href="package-details.php"><h4>Limelight Lodge</h4></a>

                        <h6>$300 - $400</h6>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et.
                            Voluptas vel labore numqua.</p>

                        <small>
                            <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Nights"><i class="fa fa-cube"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                        </small>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-item">
                    <a href="package-details.php"><img alt="" src="assets/images/product-3-370x270.jpg"></a>
                    <div class="down-content">
                        <a href="package-details.php"><h4>Limelight Lodge</h4></a>

                        <h6>$300 - $400</h6>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum incidunt, aperiam nostrum et.
                            Voluptas vel labore numqua.</p>

                        <small>
                            <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Nights"><i class="fa fa-cube"></i> 20 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <p>Imperial airline, a member of the Sky Team Alliance, is a leading African airline flying to 54 destinations
                        worldwide, 41 of which are in Africa and carries over four million passengers annually. It continues to modernize its
                        fleet with its 36 aircraft being some of the youngest in Africa. This includes its flagship B787<a href="packages.php"> Dreamliner aircraft </a>.
                        The on-board service is renowned and the lie-flat business class seat on the wide-body aircraft is consistently voted
                        among the world’s top 10. Imperial Airways takes pride in being at the forefront of connecting Africa to the World and
                        the World to Africa through its hub at the new ultra-modern Terminal 1A at  the Kenya Airport in Nairobi.</p>
                    <ul class="featured-list">
                        <li><a href="packages.php">About our best selling packages</a></li>
                        <li><a href="blog.php">About our blog</a></li>
                        <li><a href="testimonials.php">Client Testimonials</a></li>
                        <li><a href="terms.php">About Our Terms</a></li>
                    </ul>
                    <a class="filled-button" href="about-us.php">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img alt="" src="assets/images/about-1-570x350.jpg">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services" style="background-image: url(https://images.unsplash.com/photo-1575121274665-9dd0af2b0eea?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=376&q=80git init);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest blog posts</h2>

                    <a href="blog.php">read more <i class="fa fa-angle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <a class="services-item-image" href="#"><img alt=""
                                                                 class="img-fluid" src="assets/images/blog-1-370x270.jpg"></a>

                    <div class="down-content">
                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</a></h4>

                        <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp;
                            114</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <a class="services-item-image" href="#"><img alt=""
                                                                 class="img-fluid" src="assets/images/blog-2-370x270.jpg"></a>

                    <div class="down-content">
                        <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h4>

                        <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp;
                            114</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <a class="services-item-image" href="#"><img alt=""
                                                                 class="img-fluid" src="assets/images/blog-3-370x270.jpg"></a>

                    <div class="down-content">
                        <h4><a href="#">Aperiam modi voluptatum fuga officiis cumque</a></h4>

                        <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp;
                            114</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="happy-clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Happy Clients</h2>

                    <a href="testimonials.php">read more <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-clients owl-carousel text-center">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>John Doe</h4>
                            <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque,
                                corporis nulla at quia quaerat."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Jane Smith</h4>
                            <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque,
                                corporis nulla at quia quaerat."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Antony Davis</h4>
                            <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque,
                                corporis nulla at quia quaerat."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>John Doe</h4>
                            <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque,
                                corporis nulla at quia quaerat."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Jane Smith</h4>
                            <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque,
                                corporis nulla at quia quaerat."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Antony Davis</h4>
                            <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque,
                                corporis nulla at quia quaerat."</em></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite
                                author nulla.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 text-right">
                            <a class="filled-button" href="contact.php">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p>Copyright © 2020 Company Name - Template by: Imperial Airways</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
</body>
</html>