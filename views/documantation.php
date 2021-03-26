﻿<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="icon" href="../web/images/fev.png" type="image/x-icon">
        <title>Training And Certifications</title>

        <!-- Favicon-->
        <link rel="icon" href="../favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="../css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-red">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #END# Search Bar -->
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="../../docdemo/views/index.php"> 
                        <img src="../web/images/logo.png" alt=""/>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Call Search -->
                        <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                        <!-- #END# Call Search -->
                        <!-- Tasks -->

                        <!-- #END# Tasks -->
                        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->

                <!-- #User Info -->
                <!-- Menu -->
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    header('Location: ../views/');
                }
                if (isset($_GET['node'])) {
                    $node = $_GET['node'];
                } else {
                    $node = '';
                }
                if (isset($_GET['subnode'])) {
                    $subnode = $_GET['subnode'];
                } else {
                    $subnode = '';
                }
                if ($page == 'guide') {
                    
                }
                switch ($page) {
                    case 'guide':
                        require 'guide/sidebar.php';
                        break;
                    case 'Trainings-Certifications':
                        require 'Trainings-Certifications/sidebar.php';
                        break;
                    case 'libraries':
                        require 'libraries/sidebar.php';
                        break;

                    default:
                        header('Location: ../views/');
                }
                ?>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        <!--&copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.-->
                    </div>
                    <div class="version">
                        <b>Version: </b> 1.0.5
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
            <!-- Right Sidebar -->
            <aside id="rightsidebar" class="right-sidebar">

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                        <div class="logout">
                            <a class="btn btn-danger" href="../../docdemo/logout.php">logout</a>
                        </div>
                    </div>

                </div>
            </aside>
            <!-- #END# Right Sidebar -->
        </section>

        <?php
        switch ($page) {
            case 'guide':
                switch ($node) {
                    case 'quickstart-guide':
                        include 'guide/index.php';
                        break;
                    case 'installation-guide':
                        include 'guide/installation-guide.php';
                        break;

                    default:
                        include 'guide/index.php';
                        break;
                }
                break;
            case 'Trainings-Certifications':
                switch ($node) {
                    case 'beginners-course':
                        switch ($subnode) {
                            case 'intro':
                                include $page . "/$node.php";
                                break;
                            case '':
                                include $page . "/$node.php";
                                break;
                            default:
                                include $page . "/$node/$subnode.php";
                                break;
                        }
                        break;
                    case 'software-robot-delivery-process':
                        switch ($subnode) {
                            case 'intro':
                                include $page."/$node.php";
                                break;
                            case '':
                                include $page."/$node.php";
                                break;
                            default:
                                include $page."/$node/$subnode.php";
                                break;
                        }
                        break;
                    case 'software-robot-project-workflow':
                        switch ($subnode) {
                            case 'intro':
                                include $page."/$node.php";
                                break;
                            case '':
                                include $page."/$node.php";
                                break;
                            default:
                                include $page."/$node/$subnode.php";
                                break;
                        }
                        break;
                    default:

                        header('Location: ../views/');
                }
                break;
            case 'libraries':
                switch ($node) {
                    case 'Autosphere-framework':
                        switch ($subnode) {
                            case 'intro':
                                include $page . "/$node.php";
                                break;
                            case '':
                                include $page . "/$node.php";
                                break;
                            default:
                                include $page . "/$node/$subnode.php";
                                break;
                        }
                        break;
                    case 'software-robot-delivery-process':
                        include 'guide/installation-guide.php';
                        break;
                    case 'software-robot-project-workflow':
                        include 'guide/installation-guide.php';
                        break;

                    default:

                        header('Location: ../views/');
                }
                break;
            default:

                header('Location: ../views/');
        }
        ?>

        <!-- Jquery Core Js -->
        <script src="../plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <!--<script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>-->

        <!-- Waves Effect Plugin Js -->
        <script src="../plugins/node-waves/waves.js"></script>

        <!-- Custom Js -->
        <script src="../js/admin.js"></script>
        <script>
            var fixmeTop = $('.jaFBcT').offset().top+130;
            $(window).scroll(function () {
                var currentScroll = $(window).scrollTop();
                if (currentScroll >= fixmeTop) {
                    $('.jaFBcT').addClass('scrolldiv');
                } else {
                    $('.jaFBcT').removeClass("scrolldiv");
                }
            });
        </script>

        <!-- Demo Js -->
        <!--<script src="../js/demo.js"></script>-->
    </body>

</html>
