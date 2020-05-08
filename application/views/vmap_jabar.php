<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets/css/gmaps-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/js/leaflet.css') ?>">
    <link href="<?= base_url() ?>assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/assets/img/coronation.png" rel="icon">
    <link href="<?= base_url() ?>assets/assets/img/coronation.png" rel=" apple-touch-icon">
    <link href='https://api.mapbox.com/mapbox.js/v3.3.0/mapbox.css' rel='stylesheet' />
    <title>Maps</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #map {
        width: 100vw;
        height: 100vh;
    }

    #sidebar {
        margin-top: 8%;
    }

    .red {
        width: 50px;
        height: 50px;
        border: 2px solid black;
        border-radius: 50%;
        background-color: red;
    }

    .orange {
        width: 50px;
        height: 50px;
        border: 2px solid black;
        border-radius: 50%;
        background-color: orange;
    }

    .yellow {
        width: 50px;
        height: 50px;
        border: 2px solid black;
        border-radius: 50%;
        background-color: yellow;
    }

    .brown {
        width: 50px;
        height: 50px;
        border: 2px solid black;
        border-radius: 50%;
        background-color: brown;
    }

    .red,
    .yellow,
    .orange,
    .brown {
        margin: 1rem;
    }
    </style>
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
                    <li><a href="<?= base_url('Covid') ?>">Home</a></li>
                    <li class="active"><a href="<?= base_url('Covid/jabarMap') ?>">Jabar Map</a></li>
                </ul>
            </nav><!-- .main-nav -->
        </div>
    </header>

    <!-- Buat SideBar -->
    <div id="sidebar" class="sidebar collapsed">
        <!-- Nav tabs -->
        <div class="sidebar-tabs">
            <ul role="tablist">
                <li><a href="#home" role="tab"><i class="fa fa-bars"></i></a></li>
                <li><a href="#profile" role="tab"><i class="fa fa-user"></i></a></li>
            </ul>
        </div>

        <!-- Tab panes -->
        <div class="sidebar-content">
            <div class="sidebar-pane" id="home">
                <h1 class="sidebar-header">
                    Informasi
                    <span class="sidebar-close"><i class="fa fa-caret-left"></i></span>
                </h1>
                <h4 class="mt-3">PDP</h4>
                <p>Pasien Dalam Pengawasan (PDP) akan dikriteriakan sesuai dengan gejala yang nampak
                    termasuk demam, batuk, sesak napas, hingga sakit tenggorokan. Di sisi lain, apabila hasil observasi
                    yang dilakukan menemukan adanya saluran napas bawah yang terganggu serta terjadi kontak erat dengan
                    penderita positif atau dari yang terjangkit, maka pasien dapat masuk dalam kriteria ini. Pasien
                    dengan status PDP ini akan dirawat di rumah sakit untuk ditinjau dan dikontrol perkembangan
                    kasusnya.</p>

                <h4 class="mt-3">ODP</h4>
                <p>Sementara, pasien ODP memiliki gejala yang lebih ringan pada umumnya, seperti batuk, sakit
                    tenggorokan, dan demam. Akan tetapi, tidak ada kontak erat dengan penderita positif. Pasien dengan
                    status ODP dapat dipulangkan untuk selanjutnya melakukan karantina sendiri selama kurang lebih 14
                    hari.</p>

                <h4 class="mt-3">OTG</h4>
                <p>Orang Tanpa Gejala merupakan seseorang yang tidak memiliki gejala dan memiliki risiko tertular dari
                    orang terkonfirmasi COVID-19. Orang yang memiliki riwayat kontak dekat dengan kasus konfirmasi
                    COVID-19 dapat masuk dalam kriteria ini.</p>
            </div>

            <div class="sidebar-pane" id="profile">
                <h1 class="sidebar-header">Status<span class="sidebar-close"><i class="fa fa-caret-left"></i></span>
                </h1>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="red"></div>
                            </div>
                            <div class="col-md-9">
                                <h4 class="mt-4">OTG</h4>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="yellow"></div>
                            </div>
                            <div class="col-md-9">
                                <h4 class="mt-4">ODP</h4>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="orange"></div>
                            </div>
                            <div class="col-md-9">
                                <h4 class="mt-4">PDP</h4>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="brown"></div>
                            </div>
                            <div class="col-md-9">
                                <h4 class="mt-4">Positif</h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="sidebar-pane" id="messages">
                <h1 class="sidebar-header">Messages<span class="sidebar-close"><i class="fa fa-caret-left"></i></span>
                </h1>
            </div>

            <div class="sidebar-pane" id="settings">
                <h1 class="sidebar-header">Settings<span class="sidebar-close"><i class="fa fa-caret-left"></i></span>
                </h1>
            </div>
        </div>
    </div>


    <div id="map"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
    <script src='<?= base_url('assets/js/leaflet.js') ?>'></script>
    <script async src="<?= base_url('assets/js/map_jabar.min.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="<?= base_url('assets/js/jquery-sidebar.js') ?>"></script>
    <script>
    var sidebar = $('#sidebar').sidebar();
    </script>

</body>

</html>