<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>PPDB | SMAN 1 Jorong.</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="<?=base_url('assets/template/web/')?>images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="<?=base_url('assets/template/web/')?>images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/template/web/')?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/template/web/')?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/template/web/')?>css/linearicons.css">
    <link rel="stylesheet" href="<?=base_url('assets/template/web/')?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url('assets/template/web/')?>css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?=base_url('assets/template/web/')?>css/normalize.css">
    <link rel="stylesheet" href="<?=base_url('assets/template/web/')?>style.css">
    <link rel="stylesheet" href="<?=base_url('assets/template/web/')?>css/responsive.css">
    <link rel="stylesheet" href="<?=base_url('assets/template/web/')?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <script src="<?=base_url('assets/template/web/')?>js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <style>
        .call {
            z-index: 9;
            color: white;
            font-weight: bold;
            position: fixed;
            bottom: 40px;
            left: 20px;
            border-radius: 10px;
            background-color: red;
            padding: 3px 10px
        }

        @media only screen and (max-width: 750px) {
            .call {
                display: none;
            }
        }
    </style>
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>
    <!-- MainMenu-Area -->
    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="<?=base_url('assets/template/web/images/').$pict['logo']?>" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li class="active"><a href="#home_page">Home</a></li>
                    <li><a href="#about_page">Tentang</a></li>
                    <li><a href="#features_page">Prestasi</a></li>
                    <li><a href="#testimonial_page">Kata Alumni</a></li>
                    <li><a href="#questions_page">Pertanyaan</a></li>
                    <li><a href="#contact_page">Hubungi Kami</a></li>
                </ul>
                <div class="right-button hidden-xs">
                    <a href="<?= base_url('sigin') ?>">Sign In</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- MainMenu-Area-End -->
    <!-- Home-Area -->
    <header class="home-area overlay" id="home_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 hidden-sm col-md-5">
                    <figure class="mobile-image wow fadeInUp" data-wow-delay="0.2s">
                        <img style="border-radius: 15px;"  src="<?=base_url('assets/template/web/images/').$pict['header']?>" alt="">
                    </figure>
                </div>
                <div class="col-xs-12 col-md-7">
                    <div class="space-80 hidden-xs"></div>
                    <h1 class="wow fadeInUp" data-wow-delay="0.4s"><?= $web['home_page_title'] ?></h1>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p><?= $web['home_page_comment'] ?></p>
                    </div>
                    <div class="space-20"></div>
                    <a href="#modal-default" data-toggle="modal" class="bttn-white wow fadeInUp" data-wow-delay="0.8s"><i class="lnr lnr-chevron-right-circle"></i>Daftar Sekarang&nbsp;&nbsp;<i class="lnr lnr-chevron-left-circle"></i></a>
                </div>
            </div>
        </div>
    </header>

      <div class="modal fade " id="modal-default" style="z-index: 99999999; ">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header" style="background-color: #5B7CAA; color: white">
                
                <h4 class="modal-title text-center">PILIH JALUR PENDAFTARAN</h4>
              </div>
              <div class="modal-body" style="background-color: #5B7CFF">
                <div class="row">
                    <div class="col-sm-4">
                        <p style="text-align: justify; color: white">
                            Jalur zonasi diperuntukan bagi calon peserta didik yang berdomisili/bertempat tinggal di wilayah kecamatan jorong atau berada dekat dengan lokasi <?= $web['company_name'] ?>
                        </p>
                        <a href="<?= base_url('zonasi ')?>" class="btn btn-success btn-block"><b>>> Jalur Zonasi <<</b></a>
                    </div>
                    <div class="col-sm-4">
                        <p style="text-align: justify; color: white">
                            Jalur prestasi diperuntukan bagi calon peserta didik yang berdomisili/bertempat tinggal di luar wilayah kecamatan jorong dan memiliki catatan/prestasi akademik maupun non-akademik.
                        </p>
                        <a href="<?= base_url('prestasi') ?>" class="btn btn-primary btn-block"><b>>> Jalur Prestasi <<</b></a>
                    </div>
                    <div class="col-sm-4">
                        <p style="text-align: justify; color: white">
                            Jalur perpindahan orang tua diperuntukan bagi calon peserta didik dari luar wilayah jorong namun berpindah tempat tinggal dikarenakan adanya perpindahan tempat bekerja orang tua.
                        </p>
                        <a href="<?= base_url('pindah') ?>" class="btn btn-warning btn-block"><b>>> Perpindahan Ortu <<</b></a>
                    </div>
                </div>
                
              </div>
              <div class="modal-footer" style="background-color: #5B4CFF">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


    <!-- Home-Area-End -->
    <!-- About-Area -->
    <section class="section-padding" id="about_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="page-title text-center">
                        <img src="<?=base_url('assets/template/web/images/').$pict['about']?>" alt="About Logo">
                        <div class="space-20"></div>
                        <h5 class="title"><?= $web['about_title'] ?></h5>
                        <div class="space-30"></div>
                        <h3 class="blue-color"> <?= $web['about_header'] ?></h3>
                        <div class="space-20"></div>
                        <p><?= $web['about_comment'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-Area-End -->

    <!-- Feature-Area -->
    <section class="feature-area section-padding-top" id="features_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="page-title text-center">
                        <h5 class="title"><?= $web['feature_title'] ?></h5>
                        <div class="space-10"></div>
                        <h3><?= $web['feature_comment'] ?></h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">

                    <?php $no = 1; foreach($excellence_left as $left): ?>
                        <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box-icon">
                                <i class="lnr <?= $left->simbol ?>"></i>
                            </div>
                                <h4><?= $left->title ?></h4>
                                <p><?= $left->description ?></p>
                        </div>
                        <div class="space-60"></div>
                    <?php endforeach ?>
                   
                </div>
                <div class="hidden-xs hidden-sm col-md-4">
                    <figure class="mobile-image">
                        <img style="border-radius: 5px" src="<?=base_url('assets/template/web/images/').$pict['feature']?>" alt="Feature Photo">
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">

                    <?php $no = 1; foreach($excellence_right as $right): ?>
                        <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box-icon">
                                <i class="lnr <?= $right->simbol ?>"></i>
                            </div>
                                <h4><?= $right->title ?></h4>
                                <p><?= $right->description ?></p>
                        </div>
                        <div class="space-60"></div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Feature-Area-End -->
    <!-- Testimonial-Area -->
    <section class="testimonial-area" id="testimonial_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title"><?= $web['testimoni_title'] ?></h5>
                        <h3 class="dark-color"><?= $web['testimoni_comment'] ?></h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="team-slide">
                        <?php foreach ($testimoni as $testi): ?>
                            
                            <div class="team-box">
                                <div class="team-image">
                                    <img src="<?=base_url('assets/template/web/')?>images/<?= $testi->image ?>" alt="">
                                </div>
                                    <h4><?= $testi->name ?></h4>
                                    <h6 class="position"><?= $testi->position ?></h6>
                                    <p><?= $testi->testimoni ?></p>
                        </div>

                        <?php endforeach ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial-Area-End -->

    <!--Questions-Area -->
    <section id="questions_page" class="questions-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">Pertanyaan</h5>
                        <h3 class="dark-color">Pertanyaan yang sering diajukan</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="toggole-boxs">
                        <?php foreach ($question as $quest): ?>
                        <h3><?= $quest->question ?></h3>
                        <div>
                            <p><?= $quest->answer ?></p>
                        </div>
                        <?php endforeach ?>
                        
                    </div>
                </div>
               <!--  <div class="col-xs-12 col-sm-12">
                    <div class="space-20 hidden visible-xs"></div>
                    <div class="toggole-boxs">
                        <h3>Faq second question goes here? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3>Third faq question goes here? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3>Why more question goes here? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3>Seventh frequent question here? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--Questions-Area-End -->

    <!-- Footer-Area -->
    <footer class="footer-area" id="contact_page">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <h5 class="title">Hubungi Kami</h5>
                            <h3 class="dark-color">Anda dapat menghubungi kami di alamat dan kontak berikut.</h3>
                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-map-marker"></span>
                            </div>
                            <p><?= $web['address'] ?></p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <p><?= $web['phone'] ?></p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <p><?= $web['email'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="lnr lnr-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></span>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                <!--     <div class="col-xs-12 col-md-7">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Testimonial</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Footer-Bootom-End -->
    </footer>

    <div class="call">
        <i class="fa fa-phone-square" aria-hidden="true"></i> Call Center : <?= $web['phone'] ?>
    </div>
    <!-- Footer-Area-End -->
    <!--Vendor-JS-->
    <script src="<?=base_url('assets/template/web/')?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?=base_url('assets/template/web/')?>js/vendor/jquery-ui.js"></script>
    <script src="<?=base_url('assets/template/web/')?>js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="<?=base_url('assets/template/web/')?>js/owl.carousel.min.js"></script>
    <script src="<?=base_url('assets/template/web/')?>js/contact-form.js"></script>
    <script src="<?=base_url('assets/template/web/')?>js/ajaxchimp.js"></script>
    <script src="<?=base_url('assets/template/web/')?>js/scrollUp.min.js"></script>
    <script src="<?=base_url('assets/template/web/')?>js/magnific-popup.min.js"></script>
    <script src="<?=base_url('assets/template/web/')?>js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="<?=base_url('assets/template/web/')?>js/main.js"></script>
</body>

</html>
