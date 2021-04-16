<!DOCTYPE html>
<html lang="en">

<head>
    <title>Situ Akademik Unpas</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url(); ?>\foundations\adminity\assets\images\Logo-unpas.png" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\bower_components\bootstrap\css\bootstrap.min.css">

    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\bower_components\sweetalert\css\sweetalert.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\bower_components\owl.carousel\css\owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\bower_components\owl.carousel\css\owl.theme.default.css">

    <link href="<?= base_url(); ?>\foundations\adminity\assets\pages\jquery.filer\css\jquery.filer.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url(); ?>\foundations\adminity\assets\pages\jquery.filer\css\themes\jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet">

    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\adminity\assets\icon\font-awesome\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\adminity\assets\icon\simple-line-icons\css\simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\adminity\assets\icon\feather\css\feather.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\adminity\assets\pages\list-scroll\list.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\bower_components\stroll\css\stroll.css">

    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\adminity\assets\pages\data-table\css\buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\adminity\assets\pages\data-table\extensions\responsive\css\responsive.dataTables.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\bower_components\chartist\css\chartist.css">

    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\adminity\assets\icon\themify-icons\themify-icons.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\adminity\assets\pages\list-scroll\list.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\bower_components\stroll\css\stroll.css">

    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\adminity\assets\icon\icofont\css\icofont.css">

    <!-- ion icon css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\adminity\assets\icon\ion-icon\css\ionicons.min.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\bower_components\chartist\css\chartist.css">

    <!-- Style.css -->
    <!-- Style.css -->
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\adminity\assets\css\component.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\adminity\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\adminity\assets\css\style2.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\foundations\adminity\assets\css\jquery.mCustomScrollbar.css">

</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>

        <!-- Topbar -->
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header bg-navbar">
                <div class="navbar-wrapper">
                    <!-- menu pada mobile screen -->
                    <div class="navbar-logo bg-nav-header">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <!-- <a href="dashboardMahasiswa.html">
                            <img class="img-fluid logoftunpas-atas" src="foundations\adminity\assets\images\logoftunpas.png" alt="Theme-Logo">
                        </a> -->
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <!-- Top bar Menu  -->
                    <div class="navbar-container container-fluid">
                        <!-- full screen button -->
                        <ul class="nav-left">
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>

                        <!-- menu diatas kanan -->
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">

                                        <img class="img-fluid" src="<?= base_url(); ?>\foundations\adminity\assets\images\pp.jpg" alt="Theme-Logo">

                                        <span>Syahrul Andri Permana</span>
                                    </div>

                            <li style="padding-right: 0px; padding-left: 0px;">
                                <a href="index.html" style="color: #01a9ac;">
                                    <i class="fa fa-home"></i> Home
                                </a>
                            </li>
                            <li style="padding-right: 0px; padding-left: 0px;">
                                <a href="#!" class="md-trigger" data-modal="resetPasswordPMB" style="color: #01a9ac;">
                                    <i class="fa fa-refresh"></i> Ubah Password
                                </a>
                            </li>
                            <li style="padding-right: 0px; padding-left: 0px;">
                                <a href="" style="color: #01a9ac;">
                                    <i class="feather icon-user"></i> Lihat Profil
                                </a>
                            </li>
                            <li style="padding-right: 0px; padding-left: 0px;">
                                <a href="/pmb/logout" style="color: #F30606;">
                                    <i class="feather icon-log-out"></i> Keluar
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Top bar Menu  -->
                </div>

            </nav>
        </div>
        <!-- End Topbar -->

        <!-- Sidebar dan Content -->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <!-- Sidebar -->
                <nav class="pcoded-navbar bg-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <!-- Logo Unpas -->
                        <div class="img-hover" style="padding-top: 20px;">
                            <img class="img-fluid logoUnpas" src="<?= base_url(); ?>\foundations\adminity\assets\images\Logo-unpas.png" alt="round-img">
                        </div>
                        <!-- PMB Unpas -->
                        <div class="pmbUnpas">
                            <h2>PMB UNPAS</h2>
                            <p style="padding-top: 5px;">Penerimaan Mahasiswa Baru UNPAS Bandung</p>
                            <br>
                        </div>

                        <!-- Sidebar Menu -->
                        <div class="mainMenu" style="color: #FFFFFF;">
                            Main Menu
                        </div>
                        <div class="mainMenu">
                            <ul class="" style="margin-top: 20px;">
                                <li>
                                    <a href="<?= base_url('pmb/setup-pmb'); ?>">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Setup PMB</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mockup\adminity\penjualanFormulir.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Penjualan Formulir</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mockup\adminity\formulirPendaftaran.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Formulir Pendaftaran</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mockup\adminity\pindahProgramStudi.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Pindah Program Studi</span>
                                    </a>
                                </li>
                            </ul>
                            <hr align="left" width="90%" color="#FFFFFF">


                            <ul class="">
                                <li>
                                    <a href="mockup\adminity\denahTempatDudukUSM.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Denah Tempat Duduk USM</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mockup\adminity\daftarHadirUSM.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Daftar Hadir USM</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mockup\adminity\fileUSM.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">File USM</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mockup\adminity\hasilUSM.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Hasil USM</span>
                                    </a>
                                </li>
                            </ul>
                            <hr align="left" width="90%" color="#FFFFFF">

                            <ul class="">
                                <li>
                                    <a href="mockup\adminity\clearingHouse.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Clearing House</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mockup\adminity\clearingHouseDetail.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Clearing House Detail</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mockup\adminity\beritaAcaraHasilUSM.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Berita Acara Hasil USM</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mockup\adminity\cetakTandaLulus.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Cetak Tanda Lulus</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mockup\adminity\pengumumanPenerimaanMahasiswa.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Pengumuman PMB</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mockup\adminity\tandaTerimaKelulusan.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Tanda Terima Kelulusan</span>
                                    </a>
                                </li>
                            </ul>
                            <hr align="left" width="90%" color="#FFFFFF">

                            <ul class="">
                                <li>
                                    <a href="mockup\adminity\informasiPeserta.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Informasi Peserta</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mockup\adminity\laporanPMB.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Laporan PMB</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mockup\adminity\persyaratanPMB.html">
                                        <span class="pcoded-mtext" style="color: #FFFFFF;">Persyaratan Mahasiswa Baru</span>
                                    </a>
                                </li>
                            </ul>
                            <br>
                            <br>

                        </div>
                        <!-- End Sidebar Menu -->
                    </div>
                </nav>

                <!-- Content -->
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <?= $this->renderSection('content'); ?>
                    </div>
                </div>
                <!-- End Content -->
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script data-cfasync="false" src="..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\bower_components\modernizr\js\modernizr.js"></script>

    <!-- Accordion js -->
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\adminity\assets\pages\accordion\accordion.js"></script>

    <!-- sweet alert js -->
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\bower_components\sweetalert\js\sweetalert.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\adminity\assets\js\modal.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\adminity\assets\js\modalUbahPassword.js"></script>
    <!-- sweet alert modal.js intialize js -->

    <!-- modalEffects js nifty modal window effects -->
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\adminity\assets\js\modalEffects.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\adminity\assets\js\classie.js"></script>

    <script src="<?= base_url(); ?>\foundations\bower_components\stroll\js\stroll.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\adminity\assets\pages\list-scroll\list-custom.js"></script>

    <script type="text/javascript" src="<?= base_url(); ?>\foundations\bower_components\owl.carousel\js\owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\adminity\assets\js\owl-custom.js"></script>

    <script src="<?= base_url(); ?>\foundations\adminity\assets\pages\jquery.filer\js\jquery.filer.min.js"></script>
    <script src="<?= base_url(); ?>\foundations\adminity\assets\pages\filer\custom-filer.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>\foundations\adminity\assets\pages\filer\jquery.fileuploads.init.js" type="text/javascript"></script>

    <!-- data-table js -->
    <script src="<?= base_url(); ?>\foundations\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>\foundations\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>\foundations\adminity\assets\pages\data-table\js\jszip.min.js"></script>
    <script src="<?= base_url(); ?>\foundations\adminity\assets\pages\data-table\js\pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>\foundations\adminity\assets\pages\data-table\js\vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>\foundations\adminity\assets\pages\data-table\extensions\responsive\js\dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>\foundations\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>\foundations\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>\foundations\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>\foundations\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>\foundations\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>

    <!-- Chart js -->
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\bower_components\chart.js\js\Chart.js"></script>
    <!-- grafik charts -->
    <script src="<?= base_url(); ?>\foundations\adminity\assets\pages\widget\custom-widget1.js"></script>
    <!-- amchart js -->
    <script src="<?= base_url(); ?>\foundations\adminity\assets\pages\widget\amchart\amcharts.js"></script>
    <script src="<?= base_url(); ?>\foundations\adminity\assets\pages\widget\amchart\serial.js"></script>
    <script src="<?= base_url(); ?>\foundations\adminity\assets\pages\widget\amchart\light.js"></script>
    <script src="<?= base_url(); ?>\foundations\adminity\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\adminity\assets\js\SmoothScroll.js"></script>
    <script src="<?= base_url(); ?>\foundations\adminity\assets\js\pcoded.min.js"></script>
    <!-- custom js -->
    <script src="<?= base_url(); ?>\foundations\adminity\assets\js\vartical-layout.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\adminity\assets\pages\dashboard\custom-dashboard.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\adminity\assets\js\script.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>\foundations\adminity\assets\js\showHidden.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>