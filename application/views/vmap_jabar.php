<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url() ?>assets/assets/css/style.css" rel="stylesheet">
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

    <div id="map"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
    <script src='<?= base_url('assets/js/leaflet.js') ?>'></script>
    <script src="<?= base_url('assets/js/map_jabar.js') ?>"></script>
    
</body>

</html>