<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url() ?>assets/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/assets/img/coronation.png" rel="icon">
    <link href="<?= base_url() ?>assets/assets/img/coronation.png rel=" apple-touch-icon">
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
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
    <style>
    .rounded-rect {
        background: white;
        border-radius: 10px;
        box-shadow: 0 0 50px -25px black;
    }

    .flex-center {
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .flex-center.left {
        left: 0px;
    }

    .flex-center.right {
        right: 0px;
    }

    .sidebar-content {
        position: absolute;
        width: 95%;
        height: 95%;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 32px;
        color: gray;
    }

    .sidbear-toggle {
        position: absolute;
        width: 1.3em;
        height: 1.3em;
        overflow: visible;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .sidbear-toggle.left {
        right: -1.5em;
    }

    .sidbear-toggle.right {
        left: -1.5em;
    }

    .sidbear-toggle:hover {
        color: #0aa1cf;
        cursor: pointer;
    }

    .sidebar {
        transition: transform 1s;
        z-index: 1;
        width: 300px;
        height: 100%;
    }

    /*
The sidebar styling has them "expanded" by default, we use CSS transforms to push them offscreen
The toggleSidebar() function removes this class from the element in order to expand it.
*/
    .left.collapsed {
        transform: translateX(-295px);
    }

    .right.collapsed {
        transform: translateX(295px);
    }

    .red {
        width: 50px;
        height: 50px;
        border: 2px solid black;
        border-radius: 50%;
        background-color: red;
    }

    .green {
        width: 50px;
        height: 50px;
        border: 2px solid black;
        border-radius: 50%;
        background-color: green;
    }

    .yellow {
        width: 50px;
        height: 50px;
        border: 2px solid black;
        border-radius: 50%;
        background-color: yellow;
    }

    .red,
    .green,
    .yellow {
        margin: 1rem;
    }
    </style>
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
                    <li class="active"><a href="<?= base_url('Covid/covidMap') ?>">Maps</a></li>
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->

    <div id="map">
        <div id="left" class="sidebar flex-center left collapsed">
            <div class="sidebar-content rounded-rect flex-center">
                <ul>
                    <li style="list-style : none">
                        <h2 class="mb-5">Index</h2>
                    </li>
                    <li>
                        <div class="red"></div>
                        <h6>Infection Rate <i>Above <b>5000</b></i></h6>
                    </li>
                    <li>
                        <div class="yellow"></div>
                        <h6>Infection Rate <i>Between <b>2000 - 5000</b></i></h6>
                    </li>
                    <li>
                        <div class="green"></div>
                        <h6>Infection Rate <i>Below <b>1000</b></i></h6>
                    </li>
                </ul>
                <div class="sidbear-toggle rounded-rect left" onclick="toggleSidebar('left')">
                    &rarr;
                </div>
            </div>
        </div>
    </div>
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>

</html>