<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/Login1/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login1/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--=======================================================================\========================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login1/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login1/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login1/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login1/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login1/css/main.css">
    <!--===============================================================================================-->
</head>


<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
                    <span class=" login100-form-title2">
                        Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: example@gmail.com">
                        <input class="input100" type="text" name="email" placeholder="Username">
                        <span class="focus-input100"></span>

                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100"></span>

                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            <a style="color:white;" href="<?php echo base_url(); ?>index.php/admin/admin"> Login</a>
                        </button>
                    </div>
                </form>

                <div class="login100-pic">
                    <img id="img1" src="<?php echo base_url(); ?>assets/Login1/images/logo_pondok.png" alt="IMG">
                    <span class=" login100-form-title">
                        PONPES<br> RADEN RAHMAT SUNAN AMPEL
                    </span>
                    <img id="img2" src="<?php echo base_url(); ?>assets/Login1/images/hijab.png" alt="IMG">
                </div>


            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>assets/Login1/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>assets/Login1/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/Login1/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>assets/Login1/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>assets/Login1/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>assets/Login1/js/main.js"></script>

</body>

</html>