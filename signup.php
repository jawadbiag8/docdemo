<?php
include("config/database.php");
if (isset($_SESSION['id'])) {

    header("Location: views/");
    exit(0);
} else {
    ?>

    <!DOCTYPE html>
    <html lang="en">
        <style>
            @import url(https://fonts.googleapis.com/css?family=Gudea:400,700);
            body {
                -webkit-perspective: 800px;
                perspective: 800px;
                height: 100vh;
                margin: 0;
                overflow: hidden;
                font-family: 'Gudea', sans-serif;
                background-color: #5b02b4 !important;
                background-image: url(./images/auto-1.png);
                background-position-x: 130%;
                background-position-y: 51%;
                background-size: 65%;
                background-position: fixed;
                background-repeat: no-repeat;
                /* W3C */
                filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#EA5C54 ', endColorstr='#bb6dec', GradientType=1);
                /* IE6-9 fallback on horizontal gradient */
            }

            body ::-webkit-input-placeholder {
                color: #4E546D;
            }

            body .authent {
                display: none;
                background: rgba(0, 0, 0, 0.6);
                position: absolute;
                left: 0;
                right: 90px;
                margin: auto;
                width: 100px;
                color: #fff;
                text-transform: uppercase;
                letter-spacing: 1px;
                text-align: center;
                padding: 20px 70px;
                top: 200px;
                bottom: 0;
                height: 70px;
                opacity: 0;
                border-radius: 25px;
            }

            body .authent p {
                text-align: center;
                color: #fff;
            }

            body .success {
                display: none;
                color: #fff;
            }

            body .success p {
                font-size: 14px;
            }

            body p {
                color: #fff;
                font-size: 10px;
                text-align: left;
            }

            body .testtwo {
                left: -320px !important;
            }

            body .test {
                box-shadow: 0px 20px 30px 3px rgba(0, 0, 0, 0.55);
                pointer-events: none;
                top: -100px !important;
                -webkit-transform: rotateX(70deg) scale(0.8) !important;
                transform: rotateX(70deg) scale(0.8) !important;
                opacity: .6 !important;
                -webkit-filter: blur(1px);
                filter: blur(1px);
            }

            body .login {
                opacity: 1;
                top: 20px;
                -webkit-transition-timing-function: cubic-bezier(0.68, -0.25, 0.265, 0.85);
                transition-property: opacity, box-shadow, top, left, -webkit-transform;
                transition-property: transform, opacity, box-shadow, top, left;
                transition-property: transform, opacity, box-shadow, top, left, -webkit-transform;
                transition-duration: .5s;
                -webkit-transform-origin: 161px 100%;
                transform-origin: 161px 100%;
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                position: relative;
                width: 316px;
                position: absolute;
                left: 0;
                right: 0;
                margin: 15px auto;
                top: 0;
                bottom: 0;
                padding: 30px 68px 40px 40px;

                background: rgba(0, 0, 0, 0.6);
                border-radius: 25px;
            }

            body .login .validation {
                position: absolute;
                z-index: 1;
                right: 10px;
                top: 6px;
                opacity: 0;
            }

            body .login .disclaimer {
                position: absolute;
                bottom: 20px;
                left: 35px;
                width: 250px;
            }

            body .login_title {
                color: #fff;
                height: 60px;
                text-align: left;
                font-size: 16px;
            }

            body .login_fields {
                height: 208px;
                position: absolute;
                left: 0;
            }

            body .login_fields .icon {
                position: absolute;
                z-index: 1;
                left: 36px;
                top: 8px;
                opacity: .5;
            }

            body .login_fields input[type='password'] {
                color: #DC6180 !important;
            }

            body .login_fields input[type='text'],
            body .login_fields input[type='email'],
            body .login_fields input[type='password'] {
                color: #afb1be;
                margin-top: -2px;
                background: rgba(0, 0, 0, 0.6) !important;
                margin-left: 15px;
                padding: 10px 65px;
                border-radius: 10px;
                border-top: 2px solid #393d52;
                border-bottom: 2px solid #393d52;
                border-right: none;
                border-left: none;
                outline: none;
                font-family: 'Gudea', sans-serif;
                box-shadow: none;
            }

            body .login_fields__user,
            body .login_fields__password {
                position: relative;
            }

            body .login_fields__submit {
                position: relative;
                top: 35px;
                left: 0;
                width: 80%;
                right: 0;
                margin: auto;
            }

            body .login_fields__submit .forgot {
                float: right;
                font-size: 10px;
                margin-top: 11px;
                text-decoration: underline;
            }

            body .login_fields__submit .forgot a {
                color: #606479;
            }

            body .login_fields__submit input {
                border-radius: 50px;
                background: #000;
                padding: 10px 50px;
                border: 2px solid #000;
                color: #fff;
                text-transform: uppercase;
                font-size: 11px;
                transition-property: background, color;
                transition-duration: .2s;
            }

            body .login_fields__submit input:focus {
                box-shadow: none;
                outline: none;

            }

            body .login_fields__submit input:hover {
                color: white;
                border: 2px solid #5b02b4;
                background: #5b02b4;
                cursor: pointer;
                transition-property: background, color;
                transition-duration: .2s;
            }


            /* Color Schemes */

            .love {
                position: absolute;
                right: 20px;
                bottom: 0px;
                font-size: 11px;
                font-weight: normal;
            }

            .love p {
                color: white;
                font-weight: normal;
                font-family: 'Open Sans', sans-serif;
            }

            .love a {
                color: white;
                font-weight: 700;
                text-decoration: none;
            }

            .love img {
                position: relative;
                top: 3px;
                margin: 0px 4px;
                width: 10px;
            }

            .brand {
                position: absolute;
                left: 20px;
                bottom: 14px;
            }

            .brand img {
                width: 30px;
            }
        </style>
        <head>
            <meta charset="UTF-8">
            <title>Autosphere login</title>
            <link data-react-helmet="true" rel="icon" href="./images/fev.png" />
            <link rel='stylesheet prefetch'
                  href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
            <!--<link rel="stylesheet" href="css/style.css">-->
        </head>


        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class='login'>
                        <img src="images/autosphere_400.png" style="width: 100%" alt=""/>
                        <div class='login_title'>
                            <br>
                            <center>
                                <span>Create Account</span><br>
                            </center>

                        </div>
                        <div class='login_fields'>
                            <form action="index.php"  id="usersform"method="post">
                                <div class="col-lg-12">
                                    <div class='login_fields__user'>

                                        <input placeholder='First Name' id="fname" type='text' name="fname">
                                        <div class='validation'>
                                            <img src='images/tick.png'>
                                        </div>
                                        </input>
                                    </div>
                                </div>                                   
                                <div class="col-lg-12">
                                    <div class='login_fields__user'>
                                        <input placeholder='Last Name' id="lname" type='text' name="lname">
                                        <div class='validation'>
                                            <img src='images/tick.png'>
                                        </div>
                                        </input>
                                    </div>
                                </div>                                   
                                <div class="col-lg-12">
                                    <div class='login_fields__user'>
                                        <div class='icon'>
                                            <img src='images/user_icon_copy.png'>
                                        </div>
                                        <input placeholder='Username' id="username" type='text' name="username">
                                        <div class='validation'>
                                            <img src='images/tick.png'>
                                        </div>
                                        </input>
                                    </div>
                                </div>                                   
                                <div class="col-lg-12">
                                    <div class='login_fields__user'>
                                        <div class='icon'>
                                            <img src='images/email.png'>
                                        </div>
                                        <input placeholder='Email' id="email" type='email' name="email">
                                        <div class='validation'>
                                            <img src='images/tick.png'>
                                        </div>
                                        </input>
                                    </div>
                                </div>                                   
                                <div class="col-lg-12">

                                    <div class='login_fields__password'>
                                        <div class='icon'>
                                            <img src='images/lock_icon_copy.png'>
                                        </div>
                                        <input placeholder='Password' id="password" type='password' name="password">
                                        <div class='validation'>
                                            <img src='images/tick.png'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">

                                    <div class='login_fields__password'>
                                        <div class='icon'>
                                            <img src='images/lock_icon_copy.png'>
                                        </div>
                                        <input placeholder='Confirm Password' id="cpassword" type='password' >
                                        <div class='validation'>
                                            <img src='images/tick.png'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class='login_fields__submit'>
                                        <center>
                                            <input type='submit' value='create Account' id="signup" name="signup">
                                            <a href="index.php">Already have an Account</a>
                                        </center>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class='success'>
                            <h2>Authentication Success</h2>
                            <p>Welcome back</p>
                        </div>


                    </div> 
                </div>
            </div>
            <div class='authent'>
                <img src='images/puff.svg'>
                <p>Authenticating....</p>
            </div>
                <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <script src="plugins/bootstrap-notify/bootstrap-notify.js"></script>
            <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

            <script src="js/pages/ui/notifications.js"></script>

            <script>
                $(document).ready(function () {
                    $('input[type="text"],input[type="password"]').keyup(function () {
                        if (!$(this).val() == '') {
                            $(this).next().animate({'opacity': '1', 'right': '30'}, 200)
                        } else {
                            $(this).next().animate({'opacity': '0', 'right': '20'}, 200)
                        }
                    });
                    $("#usersform").submit(function (e) {
                        debugger;
                        email = '';
                        username = '';
                        var flag = 0;
                        if ($("#fname").val() == '') {
                            $("#fname").parent().addClass('focused  error');
                            flag = 1;
                        } else {
                            $("#fname").parent().removeClass('focused  error');
                        }
                        if ($("#lname").val() == '') {
                            $("#lname").parent().addClass('focused  error');
                            flag = 1;
                        } else {
                            $("#lname").parent().removeClass('focused  error');
                        }
                        if ($("#email").val() == '') {
                            $("#email").parent().addClass('focused  error');
                            flag = 1;
                        } else {
                            $("#email").parent().removeClass('focused  error');
                            email = $("#email").val();
                        }
                        if ($("#username").val() == '') {
                            $("#username").parent().addClass('focused  error');
                            flag = 1;
                        } else {
                            $("#username").parent().removeClass('focused  error');
                            username = $("#username").val();
                        }
                        if ($("#password").val() == '') {
                            $("#password").parent().addClass('focused  error');
                            flag = 1;
                        } else {
                            $("#password").parent().removeClass('focused  error');
                        }
                        if ($("#cpassword").val() == '') {
                            $("#cpassword").parent().addClass('focused  error');
                            flag = 1;
                        } else {
                            $("#cpassword").parent().removeClass('focused  error');
                        }
                        if ($("#password").val() !== $("#cpassword").val()) {
                            $("#password").parent().addClass('focused  error');
                            $("#cpassword").parent().addClass('focused  error');
                            flag = 1;
                        } else {
                            $("#password").parent().removeClass('focused  error');
                            $("#cpassword").parent().removeClass('focused  error');
                        }
                        if ($("#type").val() == '') {
                            $("#type").parent().addClass('focused  error');
                            flag = 1;
                        } else {
                            $("#type").parent().removeClass('focused  error');
                        }
                        if (email !== '' || username !== '') {
                            $.ajax({
                                type: 'POST',
                                url: 'backend-script/admin.php',
                                data: {
                                    "email": $("#email").val(),
                                    "username": $("#username").val(),
                                    "checkdata": true},
                                success: function (result) {
                                    var obj = JSON.parse(result);
                                    if (obj['email']) {
                                        flag = 1;
                                        showNotification('alert-danger', "This email is not availabe", 'bottom', 'right', '', '');
                                        $("#email").next().animate({'opacity': '0', 'right': '20'}, 200);
                                    }
                                    if (obj['username']) {
                                        flag = 1;
                                        showNotification('alert-danger', "This username is not availabe", 'bottom', 'right', '', '');
                                        $("#username").next().animate({'opacity': '0', 'right': '20'}, 200);
                                    }
                                }
                            });
                        }
                        if (flag == 1) {
                            showNotification('alert-danger', "Plese Fill all the fields", 'bottom', 'right', '', '');
                        } else {
                            $("#signup").prop('disabled', true)
                            $.ajax({
                                type: 'POST',
                                url: 'backend-script/admin.php',
                                data: {
                                    "fname": $("#fname").val(),
                                    "lname": $("#lname").val(),
                                    "email": $("#email").val(),
                                    "username": $("#username").val(),
                                    "password": $("#password").val(),
                                    "status": "pending",
                                    "type": 'user',
                                    "signup": true},
                                success: function (result) {
                                    $.ajax({
                                        type: 'POST',
                                        url: 'index.php',
                                        data: {
                                            "username": $("#username").val(),
                                            "password": $("#password").val(),
                                            "login": true},
                                        success: function (result2) {

                                        }
                                    });
                                    location.reload();
                                }
                            });
                        }
                        e.preventDefault();
                    });
                });

            </script>


        </body>

    </html>

<?php } ?>