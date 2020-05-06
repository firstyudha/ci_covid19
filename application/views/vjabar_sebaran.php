<?php
    $data = file_get_contents('assets/json/map.json');
    $data = utf8_encode($data);
    $sebaranjabar = json_decode($data,true);

    $updated = $sebaranjabar['data']['metadata']['last_update'];
    $sebaran = $sebaranjabar['data']['content'];
?>

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
                    <li><a href="<?= base_url('Covid') ?>" class="active">Home</a></li>
                    <li><a href="<?= base_url('Covid/jabar') ?>" target="_blank">Jabar <span class="badge badge-secondary">New</span></a></li>
                    <li><a href="<?= base_url('Covid/jabarMap') ?>" target="_blank">Jabar Map <span
                                class="badge badge-secondary">New </span> <span
                                class="badge badge-primary">beta</span></a></li>
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
            

            <div class="intro-info mt-3">
                <img src="<?= base_url() ?>assets/assets/img/jabar.png" alt="" class="img-fluid" width=400>
                <h2><br><span>Jawa Barat</span><br></h2>
            </div>

        </div>
    </section><!-- End Intro Section -->

    <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
        <div class="container">

            <h3>Data Sebaran Jawa Barat</h3>
            <p>(updated : <?= $updated; ?> )</p>
            <br>
            <table class="table table-responsive" id="tabel-data">
                            <thead>
                                <tr>
                                    <th>Kabupaten</th>
                                    <th>Kecamatan</th>
                                    <th>Kelurahan</th>
                                    <th>Status</th>
                                    <th>Stage</th>
                                    <th>Umur</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tgl Konfirmasi</th>
                                    <th>Tgl Update</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php foreach($sebaran as $s) : ?>
                                <tr>
                                    <td><?= $s['nama_kab'] ?></td>
                                    <td><?= $s['nama_kec'] ?></td>
                                    <td><?= $s['nama_kel'] ?></td>
                                    <td><?= $s['status'] ?></td>
                                    <td><?= $s['stage'] ?></td>
                                    <td><?= $s['umur'] ?></td>
                                    <td><?= $s['gender'] ?></td>
                                    <td><?= $s['tanggal_konfirmasi'] ?></td>
                                    <td><?= $s['tanggal_update'] ?></td>
                                </tr>
                               <?php endforeach; ?>
                            </tbody>
                        </table>

            
            
        </div>
    </section><!-- End About Section -->





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

                    <div class="col-lg-4 col-md-6 footer-info">
                        
                    </div>

                    <div class="col-lg-4 col-md-6 footer-info">
                        <div class="mt-5"></div>
                        <br>
                        <h3 class="mt-5">Data Source</h3>
                        <ul>
                            <li><a href="https://kawalcorona.com/api/"><h4>Kawal Corona API</h4></a></li>
                            <li><a href="https://covid19-public.digitalservice.id/api/v1/"><h4>API publik PIKOBAR</h4></a></li>
                            <li><a href="https://github.com/mathdroid/indonesia-covid-19-api"><h4>Mathroid Indonesia Covid-19 API</h4></a></li>
                            <li><a href="https://github.com/mathdroid/covid-19-api"><h4>Mathroid Covid-19 API</h4></a></li>
                        </ul>
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
    });
    </script>

</body>

</html>