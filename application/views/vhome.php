<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>coronation</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/assets/img/coronation.png" rel="icon">
    <link href="<?= base_url() ?>assets/assets/img/coronation.png rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

    <link href="<?= base_url() ?>assets/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets/vendor/owl.carousel/<?= base_url() ?>assets/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/assets/css/style.css" rel="stylesheet">

    <!-- datatable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <!-- =======================================================
  * Template Name: NewBiz - v2.0.0
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an text logo -->
                <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
                <h2><span><img src="<?= base_url() ?>assets/assets/img/coronation.png" alt=""
                            class="img-fluid mr-2">coronation</span></h2>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#intro">Home</a></li>
                    <li><a href="#about">General</a></li>
                    <li><a href="#services">Indonesia</a></li>
                    <li><a href="#why-us">Global</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="<?= base_url('Covid/covidMap') ?>">Maps</a></li>
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->

    <!-- ======= Intro Section ======= -->
    <section id="intro" class="clearfix">
        <div class="container">

            <div class="intro-img">
                <img src="<?= base_url() ?>assets/assets/img/coronation.png" alt=""
                    class="img-fluid rounded-circle shadow-lg" width=400>
            </div>

            <div class="intro-info">
                <h2>We inform<br><span>real-time data</span><br>of Covid-19</h2>
                <div>
                    <a href="#services" class="btn-get-started scrollto">Indonesia</a>
                    <a href="#why-us" class="btn-services scrollto">Global</a>
                </div>
            </div>

        </div>
    </section><!-- End Intro Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container">

                <div class="row about-container">

                  

                    <div class="col-lg-5 offset-lg-1 content order-lg-1 order-2">
                        <h1>INDONESIA</h1>
                        <br><br>

                        <div class="ml-5">
                            
                            <div class="icon-box wow fadeInUp">
                                <div class="icon"><i class="fas fa-viruses"></i></div>
                                <h4 class="title"><a href="">Confirmed</a></h4>
                                <p class="description"><span class="counters h1"
                                        data-toggle="counter-up"><?= $indonesia['confirmed']['value'] ?></span>
                                </p>
                            </div>

                            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon"><i class="fas fa-heart"></i></div>
                                <h4 class="title"><a href="">Recovered</a></h4>
                                <p class="description"><span class="counters h1"
                                        data-toggle="counter-up"><?= $indonesia['recovered']['value'] ?></span></p>
                            </div>

                            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon"><i class="fas fa-procedures"></i></div>
                                <h4 class="title"><a href="">Deaths</a></h4>
                                <p class="description"><span class="counters h1"
                                        data-toggle="counter-up"><?= $indonesia['deaths']['value'] ?></span>
                                </p>
                            </div>

                            

                        </div>
                        
                    </div>

                    <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                        <img src="<?= base_url() ?>assets/assets/img/indonesia.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="row about-container mt-5">
                    <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                        <img src="<?= base_url() ?>assets/assets/img/global.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 offset-lg-1 content order-lg-1 order-2">
                        <h1>GLOBAL</h1>
                        <br><br>

                        <div class="ml-5">

                            <div class="icon-box wow fadeInUp">
                                <div class="icon"><i class="fas fa-viruses"></i></div>
                                <h4 class="title"><a href="">Confirmed</a></h4>
                                <p class="description"><span class="counters h1"
                                        data-toggle="counter-up"><?= $global['confirmed']['value'] ?></span></p>
                            </div>

                            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon"><i class="fas fa-heart"></i></div>
                                <h4 class="title"><a href="">Recovered</a></h4>
                                <p class="description"><span class="counters h1"
                                        data-toggle="counter-up"><?= $global['recovered']['value'] ?></span>
                                </p>
                            </div>

                            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon"><i class="fas fa-procedures"></i></div>
                                <h4 class="title"><a href="">Deaths</a></h4>
                                <p class="description"><span class="counters h1"
                                        data-toggle="counter-up"><?= $global['deaths']['value'] ?></span></p>
                            </div>

                        </div>

                    </div>


                </div>
                
               
                <img src="https://covid19.mathdro.id/api/og" class="img-fluid mt-5">
            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <header class="section-header">
                            <h3>Indonesia Data</h3>
                        </header>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-10 offset-md-1">



                        <table class="table table-responsive" id="tabel-data">
                            <thead>
                                <tr>
                                    <th>Kode Provinsi</th>
                                    <th>Provinsi</th>
                                    <th>Confirmed</th>
                                    <th>Recovered</th>
                                    <th>Deaths</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($provinsi as $p) : ?>
                                <tr>
                                    <td><?= $p['kodeProvi'] ?></td>
                                    <td><?= $p['provinsi'] ?></td>
                                    <td><?= $p['kasusPosi'] ?></td>
                                    <td><?= $p['kasusMeni'] ?></td>
                                    <td><?= $p['kasusSemb'] ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="wow fadeIn">
            <div class="container text-white">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <header class="section-header">
                            <h3>Countries Data</h3>
                        </header>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-10 offset-md-1">



                        <table class="table table-responsive text-white" id="tabel-data1">
                            <thead>
                                <tr>
                                    <th>Region</th>
                                    <th>Confirmed</th>
                                    <th>Recovered</th>
                                    <th>Deaths</th>
                                    <th>Active</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($countries as $c) : ?>
                                <tr>
                                    <td><?= $c['attributes']['Country_Region'] ?></td>
                                    <td><?= $c['attributes']['Confirmed'] ?></td>
                                    <td><?= $c['attributes']['Recovered'] ?></td>
                                    <td><?= $c['attributes']['Deaths'] ?></td>
                                    <td><?= $c['attributes']['Active'] ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->



        <!-- ======= Team Section ======= -->
        <section id="team">
            <div class="container">
                <div class="section-header">
                    <h3>Team Member</h3>
                    <br>
                </div>

                <div class="row">

                    <!-- <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>

                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="<?= base_url() ?>assets/assets/img/indah.jpeg" style="height:250px"
                                class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Indah Puspita Sari</h4>
                                    <span>Designer</span>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="<?= base_url() ?>assets/assets/img/yudha.png" style="height:250px"
                                class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Yudha Pratama</h4>
                                    <span>Web Developer</span>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member">
												<img src="<?= base_url() ?>assets/assets/img/wowong.jpg" style="height:250px"
                                class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Rayhan Rahmat Aziz</h4>
                                    <span>Web Developer</span>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->





    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-info">
                        <h3>Created by coronation</h3>
                        <img src="<?= base_url() ?>assets/assets/img/coronation.png" width=250 class="img-fluid" alt="">
                        <b>
                            <p class="mt-2">
                                <a href="mailto:coronationcwi@gmail.com"
                                    class="text-white">coronationcwi@gmail.com</a>
                            </p>
                        </b>
                    </div>


                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>NewBiz</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
      -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Vendor JS Files -->

    <script src="<?= base_url() ?>assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/mobile-nav/mobile-nav.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/vendor/venobox/venobox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/assets/js/main.js"></script>
    <script>
    $(document).ready(function() {
        $('#tabel-data').DataTable();
        $('#tabel-data1').DataTable();
    });
    </script>

</body>

</html>