<?php
include("../config/database.php");
if (isset($_GET)) {
//    echo '<script>window.history.pushState(NULL, "Your New Title", "/new-url");</script>';
}
?>
﻿<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Community</title>

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



        <!-- Colorpicker Css -->
        <link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

        <!-- Dropzone Css -->
        <link href="../plugins/dropzone/dropzone.css" rel="stylesheet">

        <!-- Multi Select Css -->
        <link href="../plugins/multi-select/css/multi-select.css" rel="stylesheet">

        <!-- Bootstrap Spinner Css -->
        <link href="../plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

        <!-- Bootstrap Tagsinput Css -->
        <link href="../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

        <!-- Bootstrap Select Css -->
        <link href="../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

        <!-- noUISlider Css -->
        <link href="../plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    </head>

    <body class="theme-red">
        <input type="hidden" id="sessionid" value="<?php
        if (isset($_SESSION['data']['id'])) {
            echo $_SESSION['data']['id'];
        } else {
            echo -1;
        }
        ?>">

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
            <input id="searchtext" type="text" placeholder="START TYPING...">
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
                    $page = '';
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
                        require 'community/sidebar.php';
                        break;
                    default:
                        require 'community/sidebar.php';
                }
                ?>
                <br>
                <br>
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
                        <?php
                        if (isset($_SESSION['data']['id'])) {
                            ?>
                            <div class="logout">
                                <a href="../../docdemo/logout.php">
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
                                <a  href="../../docdemo/">
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
        <section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-3">
                                        <select id="categories" class="form-control">
                                            <option value="0">All Categories</option>
                                            <?php
                                            $sql = "SELECT * FROM categories";
                                            $result = mysqli_query($conn, $sql);
                                            while ($res = mysqli_fetch_array($result)) {
                                                ?>
                                                <option value="<?php echo $res['id']; ?>" data-subtext="<?php echo $res['cat_details']; ?>"><?php echo $res['cat_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="hidden" id="uids" value="<?php
                                        if (isset($_SESSION['data']['id'])) {
                                            echo $_SESSION['data']['id'];
                                        } else {
                                            echo '';
                                        }
                                        ?>">
                                        <select id="subcategories" name="subcategory" class="form-control">
                                            <option value="0">All Subcategories</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-3">
                                        <?php
                                        if (isset($_SESSION['data']['id'])) {
                                            ?>
                                            <a href="../views/addpost.php" class="btn m-l-10 addcomment">Add Post</a>
                                            <a href="javascript:mypost()" class="btn addcomment">My Posts</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content" id="contentpage">


        </section>
        <!-- Jquery Core Js -->
        <script src="../plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <!--<script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>-->

        <!-- Slimscroll Plugin Js -->
        <!--<script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>-->

        <!-- Waves Effect Plugin Js -->
        <script src="../plugins/node-waves/waves.js"></script>

        <!-- Custom Js -->
        <script src="../js/admin.js"></script>

        <!-- Demo Js -->
        <!--<script src="../js/demo.js"></script>-->


        <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

        <!-- Dropzone Plugin Js -->
        <script src="../plugins/dropzone/dropzone.js"></script>

        <!-- Input Mask Plugin Js -->
        <script src="../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

        <!-- Multi Select Plugin Js -->
        <script src="../plugins/multi-select/js/jquery.multi-select.js"></script>

        <!-- Jquery Spinner Plugin Js -->
        <script src="../plugins/jquery-spinner/js/jquery.spinner.js"></script>

        <!-- Bootstrap Tags Input Plugin Js -->
        <script src="../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

        <!-- noUISlider Plugin Js -->
        <!--<script src="../plugins/nouislider/nouislider.js"></script>-->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <!-- Custom Js -->
        <!--<script src="../js/pages/forms/advanced-form-elements.js"></script>-->
        <script>
            function ucfirst(str, force) {
                str = force ? str.toLowerCase() : str;
                return str.replace(/(\b)([a-zA-Z])/,
                        function (firstLetter) {
                            return   firstLetter.toUpperCase();
                        });
            }
            function matchCustom(params, data) {
//                debugger;
                // If there are no search terms, return all of the data
                if ($.trim(params.term) === '') {
                    return data;
                }

                // Do not display the item if there is no 'text' property
                if (typeof data.text === 'undefined') {
                    return null;
                }

                // `params.term` should be the term that is used for searching
                // `data.text` is the text that is displayed for the data object
                if (data.text == 'Select Category') {
                } else {
                    if (data.text.indexOf(ucfirst(params.term, true)) > -1) {
                        var modifiedData = $.extend({}, data, true);
                        modifiedData.text += ' (matched)';

                        // You can return modified objects from here
                        // This includes matching the `children` how you want in nested data sets
                        return modifiedData;
                    }
                }

                // Return `null` if the term should not be displayed
                return null;
            }

            $(document).ready(function () {
              
                pageload();
                updatelist();
                $("#categories").select2({
                    matcher: matchCustom
                });
                $("#subcategories").select2({
                    matcher: matchCustom
                });
                $("#orderby").click(function () {
                    $.ajax({
                        type: 'POST',
                        url: '../views/community/topics.php',
                        data: {'cat': $("#categories").val(), "subcat": $("#subcategories").val(), "populatrity": ""},

                        success: function (result) {
//                            debugger;
                            $(".page-loader-wrapper").css("display", "block");
                            setTimeout(function () {
                                $(".page-loader-wrapper").css("display", "none");

                            }, 500);
                            $("#contentpage").empty();
                            $("#contentpage").html(result);
                        }
                    });
                });
                $("#searchtext").keyup(function () {
                    var query = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: '../backend-script/search.php',
                        data: {'query': query},

                        success: function (result) {
//                            debugger;
                            $("#contentpage").empty();
                            $("#contentpage").html(result);
                        }
                    });
                });

                $("#categories").change(function () {
                    var categories = $(this).val();
                    name = $("#categories option:selected").text();

                    $.ajax({
                        type: 'POST',
                        url: '../backend-script/community.php',
                        data: {'categories': categories},
                        success: function (result) {
                            $("#subcategories").empty();

                            if (result == '') {
                                $("#headerlable").html("All");
                                updatelist();
                                pageload();
                                var res = "<option value=0>All Subcategories</option>";

                            } else {
                                var obj = JSON.parse(result);

                                var res = "<option value=0>All " + name + "</option>";

                                $("#headerlable").html(name);
                                for (i = 0; i < obj['row'].length; i++) {
                                    res += "<option value='" + obj["row"][i][0] + "'>" + obj["row"][i][1] + "</option>";
                                }
                                updatelist(categories);
                                pageload();
                            }

                            $("#subcategories").append(res);

                        }
                    });
                });
                $("#subcategories").change(function () {

                    pageload();

                });

            });
//            function pageload(cat = $("#categories").val(), subcat = $("#subcategories").val()) {
//                $.ajax({
//                    type: 'POST',
//                    url: '../views/community/topics.php',
//                    data: {'cat': cat, "subcat": subcat},
//
//                    success: function (result) {
////                            debugger;
//                        $(".page-loader-wrapper").css("display", "block");
//                        setTimeout(function () {
//                            $(".page-loader-wrapper").css("display", "none");
//
//                        }, 500);
//                        $("#contentpage").empty();
//                        $("#contentpage").html(result);
//                    }
//                });
//            }
            function pageload(cat = $("#categories").val(), subcat = $("#subcategories").val()) {
                $.ajax({
                    type: 'POST',
                    url: '../views/community/topics.php',
                    data: {'cat': cat, "subcat": subcat},

                    success: function (result) {
//                            debugger;
                        $(".page-loader-wrapper").css("display", "block");
                        setTimeout(function () {
                            $(".page-loader-wrapper").css("display", "none");

                        }, 500);
                        $("#contentpage").empty();
                        $("#contentpage").html(result);
                    }
                });
            }
            function mypost(cat = $("#categories").val(), subcat = $("#subcategories").val(), uid = $("#uids").val()) {
                $.ajax({
                    type: 'POST',
                    url: '../views/community/topics.php',
                    data: {'cat': cat, "subcat": subcat, "uid": uid},

                    success: function (result) {
//                            debugger;
                        $(".page-loader-wrapper").css("display", "block");
                        setTimeout(function () {
                            $(".page-loader-wrapper").css("display", "none");

                        }, 500);
                        $("#contentpage").empty();
                        $("#contentpage").html(result);
                    }
                });
            }
            function deletepost(pid, type) {
                uid = $("#uids").val();
                $.ajax({
                    type: 'POST',
                    url: '../views/community/delete.php',
                    data: {'pid': pid, 'uid': uid, "type": type},

                    success: function (result) {
                        $(".page-loader-wrapper").css("display", "block");
                        setTimeout(function () {
                            $(".page-loader-wrapper").css("display", "none");

                        }, 500);
                        pageload();
                    }
                });
            }
            function postload(postid) {
                $.ajax({
                    type: 'POST',
                    url: '../views/community/post.php',
                    data: {'postid': postid},

                    success: function (result) {
//                            debugger;
                        $(".page-loader-wrapper").css("display", "block");
                        setTimeout(function () {
                            $(".page-loader-wrapper").css("display", "none");

                        }, 500);
                        $("#contentpage").empty();
                        $("#contentpage").html(result);
                    }
                });
            }
            function capitalizeFirstLetter(string) {
                debugger;
                if (string == undefined) {
                } else {
                    return string.charAt(0).toUpperCase() + string.slice(1);
                }
            }
            function addcomment(postid) {
                sessionid = $("#sessionid").val();

                var comment = $("#commentdata").val();
                if (sessionid == '-1') {
                    $(".page-loader-wrapper").css("display", "block");
                    setTimeout(function () {
                        $(".page-loader-wrapper").css("display", "none");

                    }, 500);
                    window.location.href = "../index.php";
                } else {
                    if (comment == '') {
                        $("#formdiv").addClass("focused error");
                    } else {
                        $("#formdiv").removeClass("focused error");
                        $.ajax({
                            type: 'POST',
                            url: '../backend-script/community.php',
                            data: {'postid': postid, 'comment': comment, 'flag': "add_comment"},

                            success: function (result) {
//                            debugger;
                                postload(postid);
                            }
                        });
                    }
                }

            }
            function likepost(postid, type) {
                sessionid = $("#sessionid").val();

                if (sessionid == '-1') {
                    $(".page-loader-wrapper").css("display", "block");
                    setTimeout(function () {
                        $(".page-loader-wrapper").css("display", "none");

                    }, 500);
                    window.location.href = "../index.php";
                } else {
                    $.ajax({
                        type: 'POST',
                        url: '../backend-script/community.php',
                        data: {'postid': postid, 'type': type, 'flag': "likepost"},

                        success: function (result) {
//                            debugger;
                            if (type == 'post') {
                                postload(postid);
                            } else {
                                postload($("#post_id").val());
                            }
                        }
                    });
                }
            }
            function updatelist(catid = '') {
//                debugger;
//                alert(catid);
                $.ajax({
                    type: 'POST',
                    url: '../backend-script/community.php',
                    data: {'catid': catid, 'flag': "update_list"},

                    success: function (result) {
//                            debugger;
                        $(".ul_list").empty();
                        $(".ul_list").append(result);

                    }
                });
            }
        </script>

        <!-- Demo Js -->

    </body>

</html>
