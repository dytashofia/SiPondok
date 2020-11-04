<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FLAT HOTSPOT</title>
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
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand-wrap">
                                <a class="navbar-brand" href="#">
                                    <img src="<?php echo base_url(); ?>assets\Login2\img\site-header-logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- .navbar-header -->

                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#brief_1">Service</a></li>
                                <li><a href="#pricing">Pricing</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li class="audio-toggle"><a href="#"><i class="fa fa-volume-up"></i></a></li>
                            </ul>
                        </div>
                        <!-- .navbar-collapse -->
                    </div>
                </nav>
            </header>
            <!-- .site-header -->
            <main class="site-main">
                <div id="home" class="section block-primary position-r align-c-xs-max">
                    <div id="particles-js" class="site-bg">
                        <div class="site-bg-img"></div>
                        <div class="site-bg-video"></div>
                        <div class="site-bg-overlay"></div>
                        <div class="site-bg-effect layer" data-depth=".30"></div>
                        <canvas class="site-bg-canvas layer" data-depth=".30"></canvas>
                    </div>
                    <!-- .site-bg -->

                    <div class="container">
                        <div class="row row-table">
                            <div class="col-sm-6">
                                <div class="col-inner" data-sr="left">
                                    <div class="section-heading">
                                        <h5>Flat Style Landing Page</h5>
                                        <h1>Flat Style Landing Page</h1>
                                        <p>Selamat datang di layanan Flat Hotspot</p>
                                    </div>
                                    <!-- .section-heading -->

                                    <div class="card-block py-lg px-md">
                                        <form id="loginForm" class="md-form form-light" role="form" action="$(link-login-only)" method="post">
                                            <input type="hidden" name="dst" value="$(link-orig)" />
                                            <input type="hidden" name="popup" value="true" />
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputUser" class="form-label">Username<span class="asterisk-symbol">*</span></label>
                                                        <div class="md-form-line-wrap">
                                                            <input id="inputUser" type="text" name="username" placeholder="Username" class="form-control" autofocus required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="inputPassword" class="form-label">Password<span class="asterisk-symbol">*</span></label>
                                                        <div class="md-form-line-wrap">
                                                            <input id="inputPassword" type="password" name="password" placeholder="Password" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <div class="form-group mb-0">
                                                        <button type="submit" class="btn btn-block btn-warning"><span class="btn-elem-wrap"> <span class="icon fa fa-send"></span> <span class="text">LOGIN</span></span></button><span style="display: none;" class="form-notify help-block mb-0"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <div style="color: #ffffff9c; font-size: 10px" align=center>Powered by MikroTik RouterOS</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-p-l-1 m-t-60-xs-max">
                                <div class="col-inner clearfix">
                                    <img class="img-responsive float-r-sm-min m-x-auto-xs-max" src="<?php echo base_url(); ?>assets\Login2\img\item\home.png" alt="" data-sr="right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #home -->

                <div id="about" class="section p-a-0 align-c">
                    <div class="container-fluid p-x-0">
                        <div class="row row-table">
                            <div class="col-sm-4 block-warning p-x-30-sm-max p-x-60-md-min p-t-20-sm-min align-t-sm-min">
                                <div class="col-inner p-y-50-sm-min p-y-30-xs-max max-width m-x-auto-xs-max">
                                    <div class="icon-box _center">
                                        <div class="icon-box-media">
                                            <img src="<?php echo base_url(); ?>assets\Login2\img\icon\rocket.png" alt="" data-sr="bottom">
                                        </div>
                                        <div class="icon-box-heading">
                                            <h3>Apa itu Flat Hotspot</h3>
                                        </div>
                                        <div class="icon-box-content">
                                            <p>FLAT Hotspot merupakan layanan internet berbasis hotspot dengan kecepatan tinggi tanpa kuota namun dengan harga yang terjangkau.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 block-pink p-x-30-sm-max p-x-60-md-min p-t-20-sm-min align-t-sm-min">
                                <div class="col-inner p-y-50-sm-min p-y-30-xs-max max-width m-x-auto-xs-max">
                                    <div class="icon-box _center">
                                        <div class="icon-box-media">
                                            <img src="<?php echo base_url(); ?>assets\Login2\img\icon\crown.png" alt="" data-sr="bottom">
                                        </div>
                                        <div class="icon-box-heading">
                                            <h3>Cara Daftar</h3>
                                        </div>
                                        <div class="icon-box-content">
                                            <p>Untuk mendaftar atau berlangganan layanan FLAT Hotspot, Anda bisa menghubungi kontak person yang ada dibagian Contact.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 block-success p-x-30-sm-max p-x-60-md-min p-t-20-sm-min align-t-sm-min">
                                <div class="col-inner p-y-50-sm-min p-y-30-xs-max max-width m-x-auto-xs-max">
                                    <div class="icon-box _center">
                                        <div class="icon-box-media">
                                            <img src="<?php echo base_url(); ?>assets\Login2\img\icon\diamond.png" alt="" data-sr="bottom">
                                        </div>
                                        <div class="icon-box-heading">
                                            <h3>Cara Menggunakan</h3>
                                        </div>
                                        <div class="icon-box-content">
                                            <p>Setelah anda berlangganan layanan FLAT Hotspot, Anda akan diberikan username dan password yang nantikan bisa digunakan untuk akses ke internet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #about -->

                <div id="brief_1" class="section block-default align-c-xs-max">
                    <div class="container">
                        <div class="row row-table">
                            <div class="col-sm-6">
                                <div class="col-inner">
                                    <div class="section-heading">
                                        <h5>Web Development</h5>
                                        <h2>Web Development</h2>
                                    </div>
                                    <!-- .section-heading -->
                                    <div class="section-content">
                                        <ul class="icon-list align-l m-t-30">
                                            <li><img src="assets/img/icon/code.png" alt=""> Pembuatan Website Berbasis CMS</li>
                                            <li><img src="assets/img/icon/monitor.png" alt=""> Pembuatan Website Landing Page</li>
                                            <li><img src="assets/img/icon/browser.png" alt=""> Pembuatan Website Entertaiment</li>
                                        </ul>
                                        <a class="btn btn-primary m-y-5" href="#brief_2">More Service</a>
                                        <!-- <a class="btn btn-invert m-y-5" href="#brief_2">More Button</a> -->
                                    </div>
                                    <!-- .section-content -->
                                </div>
                            </div>
                            <div class="col-sm-6 m-t-60-xs-max p-l-60-md-min">
                                <div class="col-inner clearfix">
                                    <img class="img-responsive float-r-sm-min m-x-auto-xs-max" src="<?php echo base_url(); ?>assets\Login2\img\item\brief-1.png" alt="" data-sr="right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #brief_1 -->

                <div id="brief_2" class="section block-warning align-c-xs-max">
                    <div class="container">
                        <div class="row row-table">
                            <div class="col-sm-6 m-b-60-xs-max p-r-60-md-min">
                                <div class="col-inner clearfix">
                                    <img class="img-responsive float-l-sm-min m-x-auto-xs-max" src="<?php echo base_url(); ?>assets\Login2\img\item\brief-2.png" alt="" data-sr="left">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-inner">
                                    <div class="section-heading">
                                        <h5>Graphic Design</h5>
                                        <h2>Graphic Design</h2>
                                    </div>
                                    <!-- .section-heading -->
                                    <div class="section-content">
                                        <ul class="icon-list align-l m-t-30">
                                            <li><img src="assets/img/icon/keyboard.png"> Desain Grafis, Resume</li>
                                            <li><img src="assets/img/icon/briefcase.png" alt=""> Edit Photo, Video</li>
                                            <li><img src="assets/img/icon/laptop.png" alt=""> Home Arsitektur</li>
                                        </ul>
                                        <a class="btn btn-success m-y-5" href="#brief_3">More Service</a>
                                        <!-- <a class="btn btn-pink m-y-5" href="#brief_3">More Button</a> -->
                                    </div>
                                    <!-- .section-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #brief_2 -->

                <div id="brief_3" class="section block-success align-c-xs-max">
                    <div class="container">
                        <div class="row row-table">
                            <div class="col-sm-6">
                                <div class="col-inner">
                                    <div class="section-heading">
                                        <h5>IT Infrastructure</h5>
                                        <h2>IT Infrastructure</h2>
                                    </div>
                                    <!-- .section-heading -->
                                    <div class="section-content">
                                        <ul class="icon-list align-l m-t-30">
                                            <li><img src="assets/img/icon/computer.png"> Maintenance Komputer</li>
                                            <li><img src="assets/img/icon/modem.png" alt=""> Setup Jaringan</li>
                                            <li><img src="assets/img/icon/server-1.png" alt=""> Setup Server</li>
                                        </ul>
                                        <a class="btn btn-primary m-y-5" href="#pricing">Our Plan</a>
                                        <!-- <a class="btn btn-invert m-y-5" href="#pricing">More Button</a> -->
                                    </div>
                                    <!-- .section-content -->
                                </div>
                            </div>
                            <div class="col-sm-6 m-t-60-xs-max p-l-60-md-min">
                                <div class="col-inner clearfix">
                                    <img class="img-responsive float-r-sm-min m-x-auto-xs-max" src="<?php echo base_url(); ?>assets\Login2\img\item\brief-3.png" alt="" data-sr="right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #brief_3 -->

                <div id="pricing" class="section block-light align-c">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-inner">
                                    <div class="section-heading">
                                        <h5>Pricing Table Section</h5>
                                        <h2>Daftar Paket</h2>
                                    </div>
                                    <div class="section-content m-t-60-sm-min">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="pricing-table m-t-0-xs-max">
                                                    <div class="pricing-table-header block-invert">
                                                        <h5 class="pricing-table-caption">Paket Bronze</h5>
                                                        <h2 class="pricing-table-title"><span>Rp </span>50K<span> / bulan</span></h2>
                                                    </div>
                                                    <div class="pricing-table-content block-light">
                                                        <ul class="pricing-table-list">
                                                            <li><i class="fa fa-download"></i>Speed 1 Mbps</li>
                                                            <li><i class="fa fa-envelope"></i>Unlimited</li>
                                                            <li><i class="fa fa-cog"></i>-</li>
                                                            <li><i class="fa fa-support"></i>-</li>
                                                        </ul>
                                                    </div>
                                                    <div class="pricing-table-footer block-light">
                                                        <a class="btn btn-primary" href="#contact">Beli</a>
                                                    </div>
                                                </div>
                                                <!-- .pricing-table -->
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="pricing-table">
                                                    <div class="pricing-table-header block-primary">
                                                        <span class="pricing-table-badge">
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                        <h5 class="pricing-table-caption">Paket Silver</h5>
                                                        <h2 class="pricing-table-title"><span>Rp </span>100K<span> / bulan</span></h2>
                                                    </div>
                                                    <div class="pricing-table-content block-light">
                                                        <ul class="pricing-table-list">
                                                            <li><i class="fa fa-download"></i>Speed 2 Mbps</li>
                                                            <li><i class="fa fa-envelope"></i>Unlimited</li>
                                                            <li><i class="fa fa-cog"></i>Dipinjamkan Router</li>
                                                            <li><i class="fa fa-support"></i>Support 24 jam</li>
                                                        </ul>
                                                    </div>
                                                    <div class="pricing-table-footer block-light">
                                                        <a class="btn btn-primary" href="#contact">Beli</a>
                                                    </div>
                                                </div>
                                                <!-- .pricing-table -->
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="pricing-table">
                                                    <div class="pricing-table-header block-pink">
                                                        <h5 class="pricing-table-caption">Paket Gold</h5>
                                                        <h2 class="pricing-table-title"><span>Rp </span>175K<span> / bulan</span></h2>
                                                    </div>
                                                    <div class="pricing-table-content block-light">
                                                        <ul class="pricing-table-list">
                                                            <li><i class="fa fa-download"></i>Speed 4 Mbps</li>
                                                            <li><i class="fa fa-envelope"></i>Unlimited</li>
                                                            <li><i class="fa fa-cog"></i>Dipinjamkan Router</li>
                                                            <li><i class="fa fa-support"></i>Support 24 jam</li>
                                                        </ul>
                                                    </div>
                                                    <div class="pricing-table-footer block-light">
                                                        <a class="btn btn-primary" href="#contact">Beli</a>
                                                    </div>
                                                </div>
                                                <!-- .pricing-table -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .section-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #download -->

                <div id="contact" class="section block-danger">
                    <div class="container">
                        <div class="section-heading text-center">
                            <h5>Flat Style Landing Page</h5>
                            <h2>Info Kontak</h2>
                        </div>
                        <div class="row section-content m-t-60-sm-min">
                            <div class="col-sm-6 col-md-5">
                                <div class="col-inner">
                                    <div class="icon-box _left">
                                        <div class="icon-box-media">
                                            <img src="<?php echo base_url(); ?>assets\Login2\img\icon\mobile.png" alt="" data-sr="bottom">
                                        </div>
                                        <div class="icon-box-heading">
                                            <h4>Phone Number</h4>
                                        </div>
                                        <div class="icon-box-content font-sub font-italic">
                                            <span>(62) 81-211-326-207 </span>
                                            <br>
                                            <span>(62) 82-120-215-248 </span>
                                        </div>
                                    </div>

                                    <div class="icon-box _left">
                                        <div class="icon-box-media">
                                            <img src="<?php echo base_url(); ?>assets\Login2\img\icon\mail.png" alt="" data-sr="bottom">
                                        </div>
                                        <div class="icon-box-heading">
                                            <h4>Email Address</h4>
                                        </div>
                                        <div class="icon-box-content font-sub font-italic">
                                            <span>info@icmp.my.id</span>
                                            <br>
                                            <span>support@icmp.my.id</span>
                                        </div>
                                    </div>

                                    <div class="icon-box _left">
                                        <div class="icon-box-media">
                                            <img src="<?php echo base_url(); ?>assets\Login2\img\icon\pin.png" alt="" data-sr="bottom">
                                        </div>
                                        <div class="icon-box-heading">
                                            <h4>Business address</h4>
                                        </div>
                                        <div class="icon-box-content font-sub font-italic">
                                            <span>Kota Banjar</span>
                                            <br>
                                            <span>Jawa Barat</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-offset-1 m-t-60-xs-max">
                                <div class="col-inner">
                                    <form class="_default" id="contactForm" novalidate="novalidate">
                                        <div class="form-group required">
                                            <label class="form-label" for="contactName" style="color: #121212">Your name</label>
                                            <input class="form-control" id="contactName" type="text" name="name">
                                        </div>
                                        <div class="form-group required">
                                            <label class="form-label" for="contactEmail" style="color: #121212">Email address</label>
                                            <input class="form-control" id="contactEmail" type="text" name="email">
                                        </div>
                                        <div class="form-group required">
                                            <label class="form-label" for="contactMessage" style="color: #121212">Message</label>
                                            <textarea class="form-control" id="contactMessage" rows="4" name="message"></textarea>
                                        </div>
                                        <div class="btn-wrap">
                                            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                                        </div>
                                        <div class="form-notify"></div>
                                    </form>
                                    <!-- #contactForm -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #contact -->
                <!-- <div id="map-canvas"></div> #map-canvas -->
            </main>
            <!-- .site-main -->
            <footer class="site-footer block-invert">
                <div class="container">
                    <img class="site-footer-logo img-responsive" src="<?php echo base_url(); ?>assets\Login2\img\site-footer-logo.png" data-sr="bottom">
                    <ul class="site-footer-social-list">
                        <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                        <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
                        <li><a href="https://instagram.com/" target="_blank">Instagram</a></li>
                        <li><a href="https://www.linkedin.com/" target="_blank">LinkedIn</a></li>
                        <li><a href="https://www.pinterest.com/" target="_blank">Pinterest</a></li>
                    </ul>
                    <p class="site-footer-copyright">2019 © <a href="#home" target="_blank">icmp.my.id</a> | all rights reserved.</p>
                </div>
            </footer>
            <!-- .site-footer -->
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