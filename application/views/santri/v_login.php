<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Santri</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets\Login2\img\favicon.png">
    <link rel="icon" href="<?php echo base_url(); ?>assets\Login2\img\favicon.png">
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets\Login2\css\bootstrap.min.css'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets\Login2\css\vendor.css'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets\Login2\css\style.css'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets\Login2\css\demo.css'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>assets\Login2\css\custom.css'>
    <script src='<?php echo base_url(); ?>assets\Login2\js\vendor\html5shiv.min.js'></script>
</head>

<body>
    <!-- 
======================================================
created     : Lalat Merah
situs       : wp.icmp.my.id
whatsapp    : 082-120-215-248
ig          : @alpuketmerah
====================================================== 
-->

    <div class="site">
        <div class="site-loader">
            <div class="site-loader-spinner"></div>
        </div>
        <!-- .site-loader -->

        <div class="site-canvas">
            <header class="site-header">
                <nav class="navbar navbar-theme">
                    <div class="container" style="width: 100%;">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand-wrap">
                                <a class="navbar-brand" href="#">
                                    <img src="<?php echo base_url(); ?>assets\Login2\img\logo_pondok.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- .navbar-header -->

                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#login">Home</a></li>
                                <li><a href="#about">Tentang</a></li>
                                <li><a href="#brief_1">Galeri</a></li>
                                <li><a href="#pricing">Produk</a></li>
                                <li><a href="#contact">Kontak</a></li>
                                <li class="active">
                                    &nbsp;
                                    <a class="login100-form-btn " href="#">LOGIN</a> &nbsp;
                                    <a class="login100-form-btn " href="#">DAFTAR</a>
                                </li>

                            </ul>
                        </div>
                        <!-- .navbar-collapse -->
                    </div>
                </nav>
            </header>
            <!-- .site-header -->
            <main class="site-main" style="height: 100vh;">
                <div id="home" class="section block-primary position-r align-c-xs-max">
                    <div id="particles-js" class="site-bg">
                        <div class="site-bg-img"></div>
                        <div class="site-bg-video"></div>
                        <div style="
                        background: -webkit-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
                        background: -o-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
                        background: -moz-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
                        background: linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);" class="site-bg-overlay"></div>
                        <div class="site-bg-effect layer" data-depth=".30"></div>
                        <canvas class="site-bg-canvas layer" data-depth=".30"></canvas>
                    </div>
                    <!-- .site-bg -->

                    <div class="container">
                        <div class="row row-table">
                            <div class=" col-sm-6 col-md-p-l-1 m-t-60-xs-max">
                                <div class=" col-inner" data-sr="left">
                                    <img class="img-responsive float-r-sm-min m-x-auto-xs-max" src="<?php echo base_url(); ?>assets\Login2\img\vector.png" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-p-l-1 m-t-60-xs-max">
                                <div class="col-inner clearfix" data-sr="right">
                                    <div style="width: 100%; background-image: -moz-linear-gradient( -10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
    background-image: -webkit-linear-gradient( -10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
    background-image: -ms-linear-gradient( -10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);  display:flex; justify-content: center;
            align-items: center; text-align:center; height:440px; width:370px; border-radius: 10px; box-shadow: 0px 0px 10px 0px #00979e; ">

                                        <style>
                                            .input100 {
                                                width: 234px;
                                                height: 27px;
                                                font-size: 12px;
                                                font-family: "Poppins";
                                                color: rgb(118, 118, 118);
                                                line-height: 1.2;
                                                display: block;
                                                width: 100%;
                                                box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.39);
                                                height: 27px;
                                                border-radius: 25px;
                                                padding: 0 30px 0 20px;
                                                margin-bottom: 30px;
                                                border-width: 2px;
                                                border-style: inset;
                                                border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
                                                border-image: initial;
                                                border: none;
                                            }

                                            .tombol {
                                                text-align: center;
                                                width: 234px;
                                                height: 27px;
                                                border-radius: 25px;
                                                border: none;
                                                background: -webkit-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
                                                background: -o-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
                                                background: -moz-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
                                                background: linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
                                                font-size: 12px;
                                                font-family: "Poppins";
                                                color: rgb(255, 255, 255);
                                                line-height: 1.2;
                                                color: #fff;
                                                text-transform: uppercase;
                                                -webkit-transition: all 0.4s;
                                                -o-transition: all 0.4s;
                                                -moz-transition: all 0.4s;
                                                transition: all 0.4s;
                                                border-width: 0.1px;
                                                border-style: outset;
                                                border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
                                                border-image: initial;
                                            }

                                            .tombol:hover {
                                                background-image: -moz-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
                                                background-image: -webkit-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
                                                background-image: -ms-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
                                            }

                                            .login100-form-title2 {
                                                font-size: 25.81px;
                                                margin-top: -20px;
                                                font-family: "HomepageBaukasten";
                                                color: white;
                                                font-weight: bold;
                                                line-height: 1.2;
                                                text-align: center;
                                                width: 100%;
                                                display: block;
                                                padding-bottom: 35px;
                                            }
                                        </style>


                                        <form class="login100-form validate-form" method="post" action="<?php echo base_url('admin/login'); ?>">
                                            <span class=" login100-form-title2">
                                                Login
                                            </span>
                                            <style>

                                            </style>
                                            <div class="wrap-input100 validate-input" data-validate="Valid email is required: example@gmail.com">
                                                <input class="input100" type="text" name="username" placeholder="Username">
                                                <span class="focus-input100"></span>

                                            </div>

                                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                                <input class="input100" type="password" name="password" placeholder="Password">
                                                <span class="focus-input100"></span>

                                            </div>

                                            <div class="">
                                                <button class="tombol" type="submit">
                                                    Login
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #home -->
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets\Login2\js\vendor\jquery-1.11.3.min.js"></script>
    <script src='<?php echo base_url(); ?>assets\Login2\js\vendor\bootstrap.min.js'></script>
    <script src='<?php echo base_url(); ?>assets\Login2\js\vendor\plugin.js'></script>
    <script src='<?php echo base_url(); ?>assets\Login2\js\variable.js'></script>
    <script src='<?php echo base_url(); ?>assets\Login2\js\map.js'></script>
    <script src='<?php echo base_url(); ?>assets\Login2\js\main.js'></script>
    <script src='<?php echo base_url(); ?>assets\Login2\js\demo.js'></script>
    <audio id="audioPlayer" loop="">
        <source src="<?php echo base_url(); ?>assets/Login2/audio/audio.mp3" type="audio/mpeg"></audio>

</body>

</html>
<!-- 
======================================================
created     : Lalat Merah
situs       : wp.icmp.my.id
whatsapp    : 082-120-215-248
ig          : @alpuketmerah
====================================================== 
-->