<?php
include("../config/database.php");
if (!isset($_SESSION['data']['id'])) {
    header('Location: ../');
}
if (isset($_POST['addpost'])) {
    $cat = $_POST['category'];
    $sub = $_POST['subcategory'];
    $text = base64_encode($_POST['text']);
//    $text = unpack('C*',$_POST['text']);
    $x = json_encode($text);
    $title = clean_string($_POST['title'], $conn);
    $uid = $_SESSION['id'];
    $sql = "INSERT INTO posts (`post_data`, `user_id`,`post_title`, cat_id,sub_cat_id) VALUES ('$text', {$uid},'{$title}','{$cat}','{$sub}');";
//    var_dump($text);
//    print_r($sql);
    $result = mysqli_query($conn, $sql);
//    var_dump(mysqli_error($conn));
//    exit();

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
        <link rel="icon" href="../web/images/fev.png" type="image/x-icon">

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
        <link href="../css/summernote-bs4.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../css/themes/all-themes.css" rel="stylesheet" />

        <!-- Colorpicker Css -->

    </head>

    <body class="theme-red">

        <style>
            .error-message{
                border-bottom: solid red;
            }
        </style>
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
                    <a class="navbar-brand" href="../views/index.php"> 
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
                        <li class="pull-left"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
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
                                    <input type="hidden" id="status" value="<?php
                                    if (isset($_SESSION['data']['id'])) {
                                        if ($_SESSION['data']['status'] == 'approved')
                                            echo $_SESSION['data']['id'] * 7;
                                    } else {
                                        echo '';
                                    }
                                    ?>">
                                    <input type="hidden" id="uids" value="<?php
                                    if (isset($_SESSION['data']['id'])) {
                                        echo $_SESSION['data']['id'];
                                    } else {
                                        echo '';
                                    }
                                    ?>">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5><span id="titlelable">Title</span></h5>
                                            <input type="text" name="title" required="" id="title" class="form-control postform">
                                        </div>
                                        <div class="col-lg-6">
                                            <h5><span id="categorylable">Category</span></h5>
                                            <select id="categories" name="category" required="" class="form-control postform">
                                                <option value="0">Select Category</option>
                                                <?php
                                                $sql = "SELECT * FROM categories";
                                                $result = mysqli_query($conn, $sql);
                                                while ($res = mysqli_fetch_array($result)) {
                                                    if (isset($_SESSION['data']['id'])) {
                                                        if ($_SESSION['data']['type'] == "admin" || $_SESSION['data']['type'] == "sadmin") {
                                                            ?>
                                                            <option value="<?php echo $res['id']; ?>" data-subtext="<?php echo $res['cat_details']; ?>"><?php echo $res['cat_name']; ?></option>
                                                            <?php
                                                        } else {
                                                            if ($res['id'] == 2) {
                                                                
                                                            } else {
                                                                ?>
                                                                <option value="<?php echo $res['id']; ?>" data-subtext="<?php echo $res['cat_details']; ?>"><?php echo $res['cat_name']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <h5><span id="subcategorylable">Subcategory</span></h5>
                                            <select id="subcategories" name="subcategory" required="" class="form-control postform">

                                            </select>
                                        </div>
                                        <div class="col-lg-12">  
                                            <h5><span id="postlable">Post</span></h5>

                                            <textarea  id="summer_note" id="description" required="" name="text" class="form-control postform" rows="5"></textarea>
                                        </div>
                                        <div class="col-lg-12">
<!--                                            <textarea id="tinymce" name="text">

                                            </textarea>-->
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
        <script src="../js/summernote-bs4.min.js"></script>

        <!-- Custom Js -->
        <script src="../js/admin.js"></script>
        <script src="../js/pages/forms/editors.js"></script>

        <!-- Demo Js -->
        <script src="../js/demo.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="../plugins/bootstrap-notify/bootstrap-notify.js"></script>

        <script src="../js/pages/ui/notifications.js"></script>
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
                            var res = "<option value=0 >Select Subcategory</option>";
                            for (i = 0; i < obj['row'].length; i++) {
                                res += "<option value='" + obj["row"][i][0] + "'>" + obj["row"][i][1] + "</option>";
                            }
                            $("#subcategories").append(res);
                        }
                    });
                });
                $('#summer_note').summernote({
                    height: 150,
                    onPaste: function (e) {
                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                        e.preventDefault();
                        document.execCommand('insertText', false, bufferText);
                    },
                    codemirror: {
                        mode: 'text/html',
                        htmlMode: true,
                        lineNumbers: true,
                        theme: 'monokai'
                    }
                });
                $("#submitpost").click(function (e) {
                    debugger;
                    title = $("#title").val();
                    cat = $("#categories").val();
                    sub = $("#subcategories").val();
                    post = $("#summer_note").val();
                    err = false;
                    if (title == '') {
                        $("#titlelable").addClass('error-message');
                        err = true;
                    }
                    if (cat == 0) {
                        $("#categorylable").addClass('error-message');
                        err = true;
                    }
                    if (sub == 0 || sub == null) {
                        $("#subcategorylable").addClass('error-message');
                        err = true;
                    }
                    if (post == '') {
                        $("#postlable").addClass('error-message');
                        err = true;
                    }
                    setTimeout(function () {
                        $("h5 span").removeClass("error-message")
                    }, 3000);
                    if (err) {
                        e.preventDefault();
                    }
                    stat = $("#status").val();
                    uid = $("#uids").val();
                    if (stat == '' || !(uid == (stat / 7))) {
                        showNotification('alert-danger', "You are not Approved User", 'bottom', 'right', '', '');
                        e.preventDefault();

                    }
                });
//                var pageURL = $(location).attr("href");
//                alert(pageURL);
            });
        </script>
    </body>

</html>
