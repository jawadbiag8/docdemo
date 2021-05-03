<?php
include("../../config/database.php");
if (isset($_POST['userid'])) {
    $userid = $_POST['userid'];
    $sql = "SELECT * FROM users WHERE id = '$userid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <input type="hidden" id="userid" name="userid" value="<?php echo $userid; ?>">
    <div class="form-group form-float">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-line">
                    <label>First Name</label>
                    <input type="text" name="fname" value="<?php echo $row['f_name']; ?>" id="fname" class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-line">
                    <label>Last Name</label>
                    <input type="text" name="lname" value="<?php echo $row['l_name']; ?>" id="lname" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-line">
                    <label>Email</label>
                    <input type="email" name="email"  value="<?php echo $row['email']; ?>" id="email" class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-line">
                    <label>User Name</label>
                    <input type="text" value="<?php echo $row['username']; ?>" name="username" id="username" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label>Password</label>

                <div class="input-group date" id="bs_datepicker_component_container">
                    <div class="form-line">
                        <input type="password" name="password" value="<?php echo $row['password']; ?>" id="password" class="form-control">
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
                        <input type="password" value="<?php echo $row['password']; ?>" id="cpassword" class="form-control">
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
                    <label>Pending <input type="checkbox" name="status" value="approved" id="status" <?php
                        if ($row['status'] == "approved") {
                            echo 'checked=""';
                        }
                        ?> ><span class="lever switch-col-deep-purple"></span> Approve</label>
                </div>
            </div>
            <div class="col-lg-6">
                <label>Type</label>
                <select name="type" id="type" class="form-control">
                    <option value="">Select Type</option> 
                    <?php
                    if ($_SESSION['data']['type'] == "sadmin") {
                        ?>
                        <option <?php
                        if ($row['type'] == "admin") {
                            echo " selected ";
                        }
                        ?> value="admin">Admin</option>
                        <?php } ?>
                    <option <?php
                    if ($row['type'] == "user") {
                        echo " selected ";
                    }
                    ?> value="user">User</option> 
                </select>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {

            $(".usersform").submit(function (e) {
                debugger;
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
                }
                if ($("#username").val() == '') {
                    $("#username").parent().addClass('focused  error');
                    flag = 1;
                } else {
                    $("#username").parent().removeClass('focused  error');
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
                if (flag == 1) {
                    showNotification('alert-danger', "Plese Fill all the fields", 'bottom', 'right', '', '');

                    e.preventDefault();
                }
            });
        });
    </script>
    <?php
}
?>