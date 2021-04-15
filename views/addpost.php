<?php
include("../config/database.php");
if (isset($_POST['addpost'])) {
    $cat = $_POST['category'];
    $sub = $_POST['subcategory'];
    $text = $_POST['text'];
    $title = clean_string($_POST['title'], $conn);
    $uid = $_SESSION['id'];
    $sql = "INSERT INTO posts (`post_data`, `user_id`,`post_title`, cat_id,sub_cat_id) VALUES ('$text', $uid,'$title','$cat','$sub');";
    $result = mysqli_query($conn, $sql);
//    var_dump($sql);exit();
    header('Location: ../views/community.php');
}
?>
﻿<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Editors | Bootstrap Based Admin Template - Material Design</title>
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

    </head>

    <body class="theme-red">

        <!--        <div class="page-loader-wrapper">
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
                </div>-->
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
        <section class="content" style="margin: 99px 0 0 0;">
            <div class="container-fluid">
                <!-- #END# CKEditor -->
                <!-- TinyMCE -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Add Post
                                    <a href="../views/community.php" class="btn add">Home</a>
                                </h2>

                            </div>
                            <div class="body">
                                <form action="" method="post" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Title</h5>
                                            <input type="text" name="title" required="" id="title" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <h5>Category</h5>
                                            <select id="categories" name="category" class="form-control">
                                                <option>Select Category</option>
                                                <?php
                                                $sql = "SELECT * FROM categories";
                                                $result = mysqli_query($conn, $sql);
                                                while ($res = mysqli_fetch_array($result)) {
                                                    ?>
                                                    <option value="<?php echo $res['id']; ?>" data-subtext="<?php echo $res['cat_details']; ?>"><?php echo $res['cat_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <h5>Subcategory</h5>
                                            <select id="subcategories" name="subcategory" class="form-control">

                                            </select>
                                        </div>
                                        <div class="col-lg-12">
                                            <h5>Post</h5>
                                            <textarea id="tinymce" name="text">

                                            </textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="btn addcomment" name="addpost" id="submitpost">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# TinyMCE -->
            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="../plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <!--<script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>-->

        <!-- Slimscroll Plugin Js -->
        <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="../plugins/node-waves/waves.js"></script>

        <!-- Ckeditor -->
        <!--<script src="../plugins/ckeditor/ckeditor.js"></script>-->

        <!-- TinyMCE -->
        <script src="../plugins/tinymce/tinymce.js"></script>

        <!-- Custom Js -->
        <script src="../js/admin.js"></script>
        <script src="../js/pages/forms/editors.js"></script>

        <!-- Demo Js -->
        <script src="../js/demo.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
                $("#categories").select2({
                    matcher: matchCustom
                });
                $("#subcategories").select2({
                    matcher: matchCustom
                });
                $("#categories").change(function () {
                    var categories = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: '../backend-script/community.php',
                        data: {'categories': categories},
                        success: function (result) {
                            var obj = JSON.parse(result);
                            $("#subcategories").empty();
                            var res = "<option>Select Subcategory</option>";
                            for (i = 0; i < obj['row'].length; i++) {
                                res += "<option value='" + obj["row"][i][0] + "'>" + obj["row"][i][1] + "</option>";
                            }
                            $("#subcategories").append(res);

                        }
                    });
                });
                $("#submitpost").click(function () {
                    debugger;
                    cat = $("#categories").val();
                    sub = $("#subcategories").val();
                    post = $("#tinymce").val();
//                    alert("sdsd");
                });
                var pageURL = $(location).attr("href");
//                alert(pageURL);
            });
        </script>
    </body>

</html>
