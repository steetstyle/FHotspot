
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title ?></title>
        <meta name="description" content="<?php echo $description ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo ACSSDIR ?>img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo ACSSDIR ?>img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ACSSDIR ?>img/favicon-16x16.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="<?php echo ACSSDIR ?>/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo ACSSDIR ?>/vendors/css/base/elisyam-1.5.min.css">
        <link rel="stylesheet" href="<?php echo ACSSDIR ?>/css/animate/animate.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body class="bg-white">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="img/logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Begin Container -->
        <div class="container-fluid no-padding h-100">
            <div class="row flex-row h-100 bg-white">
                <!-- Begin Left Content -->
                <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 col-12 no-padding">
                    <div class="elisyam-bg background-03">
                        <div class="elisyam-overlay overlay-08"></div>
                        <div class="authentication-col-content-2 mx-auto text-center">
                            <div class="logo-centered">
                                <a href="db-default.html">
                                    <img src="img/logo.png" alt="logo">
                                </a>
                            </div>
                            <h1>FHotspot</h1>
                            <span class="description">
                                FreeRADIUS Management Panel. 
                            </span>
                            <ul class="login-nav nav nav-tabs mt-5 justify-content-center" role="tablist" id="animate-tab">
                                <li><a class="active" data-toggle="tab" href="#singin" role="tab" id="singin-tab" data-easein="zoomInUp">Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Left Content -->
                <!-- Begin Right Content -->
                <div class="col-xl-9 col-lg-7 col-md-7 col-sm-12 col-12 my-auto no-padding">
                    <!-- Begin Form -->
                    <div class="authentication-form-2 mx-auto">
                        <div class="tab-content" id="animate-tab-content">
                            <!-- Begin Sign In -->
                            <div role="tabpanel" class="tab-pane show active" id="singin" aria-labelledby="singin-tab">
                                <h3>FHotSpot'a Giriş Yapın</h3>
                                <form method="post" action="<?php echo URL ?>/?url=admin/login">
                                    <div class="group material-input">
                                        <input type="text" name="username" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Kullanıcı Adınız</label>
                                    </div>
                                    <div class="group material-input">
                                        <input type="password" name="password" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Şifreniz</label>
                                    </div>
                                     <div class="sign-btn text-center">
                                    <input class="btn btn-lg btn-gradient-01" type="submit" value="Giriş Yap">
                                        
                                </div>
                                </form>
                               
                               
                            </div>
                            <!-- End Sign In -->
                           
                        </div>
                    </div>
                    <!-- End Form -->                        
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->    
        <!-- Begin Vendor Js -->
        <script src="<?php echo ACSSDIR ?>/vendors/js/base/jquery.min.js"></script>
        <script src="<?php echo ACSSDIR ?>/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="<?php echo ACSSDIR ?>/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="<?php echo ACSSDIR ?>/js/components/tabs/animated-tabs.min.js"></script>
        <!-- End Page Snippets -->
    </body>
</html>

