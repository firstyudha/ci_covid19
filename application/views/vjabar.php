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
    <link href="<?= base_url() ?>assets/assets/img/coronation.png rel=" apple-touch-icon">

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
                    <li><a href="<?= base_url('Covid/jabar') ?>">Jabar <span
                                class="badge badge-secondary">New</span></a></li>
                    <li><a href="<?= base_url('Covid/sebaran') ?>" target="_blank">Data Sebaran <span
                                class="badge badge-danger">3-5 menit untuk load data</span> <span
                                class="badge badge-primary">31800++ data</span></a></li>
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

                <div class="row ">
                    <div class="col-md-4">
                        <div class="icon-box wow fadeInUp centered">
                            <center>
                            <h4 class="title text-secondary">Positif</h4>
                            <i class="far fa-frown fa-7x text-danger"></i> 
                            <p class="description">
                                <span class="counters h1" data-toggle="counter-up">
                                <?= $positif ?>
                                </span>
                            </p>
                                <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="right" data-content="Laki-laki <?= $positifL ?> Perempuan <?= $positifP ?>">
                                lihat detail
                                </button>
                            </center>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box wow fadeInUp centered">
                            <center>
                            <h4 class="title text-secondary">Meninggal</h4>
                            <i class="fas fa-bed fa-7x"></i> 
                            <p class="description">
                                <span class="counters h1" data-toggle="counter-up">
                                <?= $meninggal ?>
                                </span>
                            </p>
                                <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="right" data-content="Laki-laki <?= $meninggalL ?> Perempuan <?= $meninggalP ?>">
                                lihat detail
                                </button>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box wow fadeInUp centered">
                            <center>
                            <h4 class="title text-secondary">Sembuh</h4>
                            <i class="far fa-smile-wink fa-7x text-primary"></i> 
                            <p class="description">
                                <span class="counters h1" data-toggle="counter-up">
                                <?= $sembuh ?>
                                </span>
                            </p>
                            <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="right" data-content="Laki-laki <?= $sembuhL ?> Perempuan <?= $sembuhP ?>">
                                lihat detail
                            </button>
                            </center>
                        </div>
                    </div>
                </div>
                
            </div>
        </section><!-- End About Section -->

        <!-- ======= proses Section ======= -->
        <section id="proses" class="bg-primary">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 mt-5 mb-5">
                        <div class="icon-box wow fadeInUp centered">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                                <i class="fas fa-head-side-cough fa-5x mb-4 text-warning"></i>
                                                <h4 class="title text-secondary">( ODP )</h4>
                                                <h3 class="description">
                                                    Orang Dalam Pemantauan
                                                </h3>
<!-- Button trigger modal -->
<button type="button" class="btn btn-warning w-100" data-toggle="modal" data-target="#exampleModalCenter">
  Lihat Detail
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLongTitle">Orang Dalam Pantauan per Jenis Kelamin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col">
                <i class="fas fa-male fa-5x"></i>
                <span class="counters h1" data-toggle="counter-up">
                    <?= $odpgenderL ?>
                </span>
            </div>
            <div class="col">
                <i class="fas fa-female fa-5x"></i>
                <span class="h1">
                    <?= $odpgenderP ?>
                </span>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
                                        </div>
                                        <div class="col">
                                        <h4 class="text-primary">Proses Pemantauan</h4>
                                        <p class="description">
                                            <span class="counters h3" data-toggle="counter-up">
                                            <?= $odpProses ?>
                                            </span>
                                        </p>
                                        <h4 class="text-success">Selesai Pemantauan</h4>
                                        <p class="description">
                                            <span class="counters h3" data-toggle="counter-up">
                                            <?= $odpSelesai ?>
                                            </span>
                                        </p>
                                        <h4 class="text-danger">Total</h4>
                                        <p class="description">
                                            <span class="counters h3" data-toggle="counter-up">
                                            <?= $odpTotal ?>
                                            </span>
                                        </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 mb-5">
                        <div class="icon-box wow fadeInUp centered">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                                <i class="fas fa-head-side-mask fa-5x mb-4 text-danger"></i>
                                                <h4 class="title text-secondary">( PDP )</h4>
                                                <h3 class="description">
                                                    Pasien Dalam Pengawasan
                                                </h3>
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger w-100" data-toggle="modal" data-target="#exampleModalCenter1">
  Lihat Detail
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLongTitle">Pasiem Dalam Pengawasan per Jenis Kelamin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col">
                <i class="fas fa-male fa-5x"></i>
                <span class="counters h1" data-toggle="counter-up">
                    <?= $pdpgenderL ?>
                </span>
            </div>
            <div class="col">
                <i class="fas fa-female fa-5x"></i>
                <span class="h1">
                <?= $pdpgenderP ?>
                </span>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
                                        </div>
                                        <div class="col">
                                        <h4 class="text-primary">Proses Pengawasan</h4>
                                        <p class="description">
                                            <span class="counters h3" data-toggle="counter-up">
                                            <?= $pdpProses ?>
                                            </span>
                                        </p>
                                        <h4 class="text-success">Selesai Pengawasan</h4>
                                        <p class="description">
                                            <span class="counters h3" data-toggle="counter-up">
                                            <?= $pdpSelesai ?>
                                            </span>
                                        </p>
                                        <h4 class="text-danger">Total</h4>
                                        <p class="description">
                                            <span class="counters h3" data-toggle="counter-up">
                                            <?= $pdpTotal ?>
                                            </span>
                                        </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section><!-- End proses Section -->

        <!-- ======= faskes Section ======= -->
        <section id="faskes">
                <div class="container">

                    <div class="row mt-5">
                        <div class="col-md-8 offset-md-2">
                            <header class="section-header">
                                <h3>Data Fasilitas Kesehatan Jawa Barat</h3>
                            </header>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-10 offset-md-1">



                            <table class="table table-responsive" id="tabel-data">
                                <thead>
                                    <tr>
                                        <th>Nama Faskes</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($faskes as $f) : ?>
                                    <tr>
                                        <td><?= $f['nama'] ?></td>
                                        <td><?= $f['alamat'] ?></td>
                                        <td><?= $f['telepon'] ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End faskes Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="mt-5">
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
                        <div class="mt-5"></div>
                        <br>
                        <h3 class="mt-5">Supported by</h3>
                        <img src="<?= base_url() ?>assets/assets/img/bem.png" width=130 class="img-fluid"
                            alt="">
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
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#tabel-data').DataTable();
        });
    </script>
    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/assets/js/main.js"></script>


</body>

</html>