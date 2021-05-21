<?php
include("../config/database.php");
if (isset($_SESSION['data']['id'])) {
    if ($_SESSION['data']['type'] == "admin" || $_SESSION['data']['type'] == "sadmin") {
        ?>
        ﻿<!DOCTYPE html>
        <html>

            <head>
                <meta charset="UTF-8">
                <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

                <title>Autosphere Portal</title>
                <link rel="shortcut icon" href="../web/images/fev.png" type="image/x-icon">
                <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
                <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
                <link href="../plugins/node-waves/waves.css" rel="stylesheet" />
                <link href="../plugins/animate-css/animate.css" rel="stylesheet" />
                <link href="../css/style.css" rel="stylesheet">
                <link href="../css/themes/all-themes.css" rel="stylesheet" />
            </head>

            <body class="theme-red">
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
                <div class="overlay"></div>
                <div class="search-bar">
                    <div class="search-icon">
                        <i class="material-icons">search</i>
                    </div>
                    <input type="text" id="searchtext" placeholder="START TYPING...">
                    <div class="close-search">
                        <i class="material-icons">close</i>
                    </div>
                </div>
                <nav class="navbar">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                            <a href="javascript:void(0);" class="bars"></a>
                            <a class="navbar-brand" href="../views/index.php">
                                <img src="../web/images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <section>
                    <aside id="leftsidebar" class="sidebar">
                        <?php
                        require 'admin/sidebar.php';
                        ?>
                        <div class="legal">
                            <div class="copyright">
                            </div>
                            <div class="version">
                                <b>Version: </b> 1.0.5
                                <input type="hidden"id="paghist"value=''>

                            </div>
                        </div>
                    </aside>
                    <aside id="rightsidebar" class="right-sidebar">

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                                <?php
                                if (isset($_SESSION['data']['id'])) {
                                    ?>
                                    <div class="logout">
                                        <a href="../logout.php">
                                            <button type="button" class="btn bg-red waves-effect">
                                                <i class="material-icons">fingerprint</i>
                                                <span>Logout</span>
                                            </button>
                                        </a>
                                    </div>
                                    <?php
                                } else {
                                    ?>
                                    <div class="logout">
                                        <a  href="../index.php">
                                            <button type="button" class="btn bg-red waves-effect">
                                                <i class="material-icons">fingerprint</i>
                                                <span>Sign In</span>
                                            </button>
                                        </a>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>

                        </div>
                    </aside>
                    <!-- #END# Right Sidebar -->
                </section>

                <section class="content" id="contentpage">

                </section>
                <script src="../plugins/jquery/jquery.min.js"></script>
                <script src="../plugins/bootstrap/js/bootstrap.js"></script>
                <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>
                <script src="../plugins/node-waves/waves.js"></script>
                <script src="../js/admin.js"></script>
                <script src="../js/jquery.validate.min.js"></script>
                <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  

                <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
                <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>   
                <script src="../plugins/bootstrap-notify/bootstrap-notify.js"></script>

                <script src="../js/pages/ui/notifications.js"></script>

                <script>
                    $(document).ready(function () {
                        postload();
                        $("#searchtext").keyup(function () {
                            var query = $(this).val();
                            
                            if (query == '') {
                                phis = $("#paghist").val();

                                switch (phis) {
                                    case 'postload':
                                        postload();
                                        break;
                                    case 'listkeyword':
                                        listkeyword();
                                        break;
                                    case 'listcategory':
                                        listcategory();
                                        break;
                                    case 'listsubcategory':
                                        listsubcategory();
                                        break;
                                    case 'adduser':
                                        adduser();
                                        break;
                                    case 'addcategory':
                                        addcategory();
                                        break;
                                    case 'addsubcategory':
                                        addsubcategory();
                                        break;
                                    default:
                                    // code block
                                }
                            } else {
                                $.ajax({
                                    type: 'POST',
                                    url: '../backend-script/search.php',
                                    data: {'query': query},

                                    success: function (result) {
                                        $("#contentpage").empty();
                                        $("#contentpage").html(result);
                                    }
                                });
                            }
                        });
                    });
                    function postload() {
                        $.ajax({
                            type: 'POST',
                            url: '../views/admin/listusers.php',

                            success: function (result) {
                                $(".page-loader-wrapper").css("display", "block");
                                setTimeout(function () {
                                    $(".page-loader-wrapper").css("display", "none");

                                }, 200);

                                $("#contentpage").empty();
                                $("#contentpage").html(result);
                                $("#paghist").val('postload');
                                addactive();
                            }
                        });

                    }
                    function listkeyword() {
                        $.ajax({
                            type: 'POST',
                            url: '../views/admin/listkeyword.php',

                            success: function (result) {
                                $(".page-loader-wrapper").css("display", "block");
                                setTimeout(function () {
                                    $(".page-loader-wrapper").css("display", "none");

                                }, 200);

                                $("#contentpage").empty();
                                $("#contentpage").html(result);
                                $("#paghist").val('listkeyword');

                                addactive();
                            }
                        });

                    }
                    function listcategory() {
                        $.ajax({
                            type: 'POST',
                            url: '../views/admin/listcategory.php',

                            success: function (result) {
                                $(".page-loader-wrapper").css("display", "block");
                                setTimeout(function () {
                                    $(".page-loader-wrapper").css("display", "none");

                                }, 200);

                                $("#contentpage").empty();
                                $("#contentpage").html(result);
                                $("#paghist").val('listcategory');
                                addactive();
                            }
                        });

                    }
                    function listsubcategory() {
                        $.ajax({
                            type: 'POST',
                            url: '../views/admin/listsubcategory.php',

                            success: function (result) {
                                $(".page-loader-wrapper").css("display", "block");
                                setTimeout(function () {
                                    $(".page-loader-wrapper").css("display", "none");

                                }, 200);

                                $("#contentpage").empty();
                                $("#contentpage").html(result);
                                $("#paghist").val('listsubcategory');

                                addactive();
                            }
                        });

                    }

                    function editcategory(id) {
                        $.ajax({
                            type: 'POST',
                            url: '../views/admin/editcategory.php',
                            data: {"userid": id},
                            success: function (result) {
                                $("#editcategory").empty();
                                $("#editcategory").html(result);
                                addactive();
                            }
                        });

                    }
                    function editsubcategory(id) {
                        $.ajax({
                            type: 'POST',
                            url: '../views/admin/editsubcategory.php',
                            data: {"userid": id},
                            success: function (result) {
                                $("#editsubcategory").empty();
                                $("#editsubcategory").html(result);
                                addactive();
                            }
                        });

                    }
                    function edituser(id) {
                        $.ajax({
                            type: 'POST',
                            url: '../views/admin/edituser.php',
                            data: {"userid": id},
                            success: function (result) {
                                $("#edituser").empty();
                                $("#edituser").html(result);
                                addactive();
                            }
                        });

                    }
                    function editkeyword(id) {
                        $.ajax({
                            type: 'POST',
                            url: '../views/admin/editkeyword.php',
                            data: {"userid": id},
                            success: function (result) {
                                $("#editkeyword").empty();
                                $("#editkeyword").html(result);
                                addactive();
                            }
                        });

                    }
                    function deleteuser(id) {
                        $.ajax({
                            type: 'POST',
                            url: '../backend-script/admin.php',
                            data: {"userid": id, "deleteuser": "true"},
                            success: function (result) {
                                postload();

                            }
                        });

                    }
                    function deletekeyword(id) {
                        $.ajax({
                            type: 'POST',
                            url: '../backend-script/admin.php',
                            data: {"id": id, "deletekeyword": "true"},
                            success: function (result) {
                                listkeyword();

                            }
                        });

                    }
                    function deletecategory(id) {
                        $.ajax({
                            type: 'POST',
                            url: '../backend-script/admin.php',
                            data: {"id": id, "deletecategory": "true"},
                            success: function (result) {
                                listcategory();
                            }
                        });

                    }
                    function deletesubcategory(id) {
                        $.ajax({
                            type: 'POST',
                            url: '../backend-script/admin.php',
                            data: {"id": id, "deletesubcategory": "true"},
                            success: function (result) {
                                listsubcategory();
                            }
                        });

                    }
                    function adduser() {
                        $.ajax({
                            type: 'POST',
                            url: '../views/admin/adduser.php',
                            success: function (result) {
                                $(".page-loader-wrapper").css("display", "block");
                                setTimeout(function () {
                                    $(".page-loader-wrapper").css("display", "none");

                                }, 200);

                                $("#contentpage").empty();
                                $("#contentpage").html(result);
                                $("#paghist").val('adduser');

                                addactive();
                            }
                        });

                    }
                    function addkeyword() {
                        $.ajax({
                            type: 'POST',
                            url: '../views/admin/addkeyword.php',
                            success: function (result) {
                                $(".page-loader-wrapper").css("display", "block");
                                setTimeout(function () {
                                    $(".page-loader-wrapper").css("display", "none");

                                }, 200);

                                $("#contentpage").empty();
                                $("#contentpage").html(result);
                                $("#paghist").val('addkeyword');

                                addactive();
                            }
                        });

                    }
                    function addcategory() {
                        $.ajax({
                            type: 'POST',
                            url: '../views/admin/addcategory.php',
                            success: function (result) {
                                $(".page-loader-wrapper").css("display", "block");
                                setTimeout(function () {
                                    $(".page-loader-wrapper").css("display", "none");

                                }, 200);

                                $("#contentpage").empty();
                                $("#contentpage").html(result);
                                $("#paghist").val('addcategory');
                                addactive();
                            }
                        });

                    }
                    function addsubcategory() {
                        $.ajax({
                            type: 'POST',
                            url: '../views/admin/addsubcategory.php',
                            success: function (result) {
                                $(".page-loader-wrapper").css("display", "block");
                                setTimeout(function () {
                                    $(".page-loader-wrapper").css("display", "none");

                                }, 200);

                                $("#contentpage").empty();
                                $("#contentpage").html(result);
                                $("#paghist").val('addsubcategory');
                                addactive();
                            }
                        });

                    }
                    function showpassword(id) {
                        var x = document.getElementById(id);
                        if (x.type === "password") {
                            x.type = "text";
                            $('.' + id + '-span i').css('color', '#5217af');
                        } else {
                            x.type = "password";
                            $('.' + id + '-span i').css('color', '#555');
                        }
                    }
                    function addactive() {
                        $(".admin-list li").removeClass("active");
                        act = $("#act").val();
                        cls = act.split("|");
                        $("." + cls[0]).addClass('active');
                        $("." + cls[1]).addClass('active');
                    }
                    function capitalizeFirstLetter(string) {
                        if (string == undefined) {
                        } else {
                            return string.charAt(0).toUpperCase() + string.slice(1);
                        }
                    }
                </script>

            </body>
            <script src="../web/js/keywordsearch.js"></script>
        </body>

        </html>
        <?php
    } else {
        header('Location: ../views');
    }
} else {
    header('Location: ../views');
}
?>