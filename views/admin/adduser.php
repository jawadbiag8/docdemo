
<input type="hidden" value="li-1|li-1-2" id="act">

<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Add User
                    </h2>
                </div>
                <div class="body">
                    <?php include("../../config/database.php"); ?>
                    <form method="Post" class="usersform" action="../backend-script/admin.php">

                        <div class="form-group form-float">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-line">
                                        <label>First Name</label>
                                        <input type="text" name="fname" id="fname" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-line">
                                        <label>Last Name</label>
                                        <input type="text" name="lname" id="lname" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-line">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-line">
                                        <label>User Name</label>
                                        <input type="text" name="username" id="username" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Password</label>

                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                        <span class="input-group-addon password-span" onclick="showpassword('password')">
                                            <i class="material-icons">remove_red_eye</i>
                                        </span>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <label>Confirm Password</label>

                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="password" id="cpassword" class="form-control">
                                        </div>
                                        <span class="input-group-addon cpassword-span" onclick="showpassword('cpassword')">
                                            <i class="material-icons">remove_red_eye</i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="demo-switch-title">Status</div>
                                    <br>
                                    <div class="switch">
                                        <label>Pending <input type="checkbox" name="status" id="status"  value="approved" checked=""><span class="lever switch-col-deep-purple"></span> Approve</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-line">

                                        <label>Type</label>
                                        <select name="type" id="type" class="form-control">
                                            <option value="">Select Type</option> 
                                            <?php
                                            if ($_SESSION['data']['type'] == "sadmin") {
                                                ?>
                                                <option value="admin">Admin</option>
                                            <?php } ?>
                                            <option value="user">User</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <br>
                                    <br>
                                    <button type="submit" name="adduser" style="float: right" class="btn btn-link waves-effect">SAVE</button>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Special Class For User Entered Browser -->
</div>
<script>

    $(document).ready(function () {

        $(".usersform").submit(function (e) {
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
                    url: '../backend-script/admin.php',
                    data: {
                        "email": $("#email").val(),
                        "username": $("#username").val(),
                        "checkdata": true},
                    success: function (result) {
                        var obj = JSON.parse(result);
                        if (obj['email']) {
                            flag = 1;
                            showNotification('alert-danger', "This email is not availabe", 'bottom', 'right', '', '');

                        }
                        if (obj['username']) {
                            flag = 1;
                            showNotification('alert-danger', "This username is not availabe", 'bottom', 'right', '', '');

                        }
                    }
                });
            }
            if (flag == 1) {
                showNotification('alert-danger', "Plese Fill all the fields", 'bottom', 'right', '', '');
                e.preventDefault();
            }
        });
    });


</script>