<?php
include("../../config/database.php");
if (isset($_POST['userid'])) {
    $id = $_POST['userid'];
    $sql = "SELECT * FROM keyword_table WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
    <div class="form-group form-float">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-line">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $row['name']; ?>" id="name" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-line">
                    <br>
                    <label>description</label>
                    <textarea name="description" id="description" rows="5" class="form-control"><?php echo $row['description']; ?></textarea>
                    <!--<input type="text" name="lname" value="<?php echo $row['description']; ?>" id="lname" class="form-control">-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-line">
                    <label> Sample Path</label>
                    <input type="text" value=" documantation.php?page=abc&node=def" disabled="" style="
                           background-color: darkgrey;
                           color: teal;
                           " class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-line">
                    <label>Path</label>
                    <input type="text" name="path"  value="<?php echo $row['path']; ?>" id="path" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <label>Type</label>
                <select name="type" id="type" class="form-control">
                    <option value="">Select Type</option> 

                    <option <?php
                    if ($row['type'] == "Articles") {
                        echo " selected ";
                    }
                    ?> value="Articles">Articles</option> 
                    <option <?php
                    if ($row['type'] == "Keyword") {
                        echo " selected ";
                    }
                    ?> value="Keyword">Keyword</option> 
                    <option <?php
                    if ($row['type'] == "Library") {
                        echo " selected ";
                    }
                    ?> value="Library">Library</option> 
                </select>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {

            $(".usersform").submit(function (e) {
                var flag = 0;
                if ($("#name").val() == '') {
                    $("#name").parent().addClass('focused  error');
                    flag = 1;
                } else {
                    $("#name").parent().removeClass('focused  error');
                }
                if ($("#description").val() == '') {
                    $("#description").parent().addClass('focused  error');
                    flag = 1;
                } else {
                    $("#description").parent().removeClass('focused  error');
                }
                if ($("#path").val() == '') {
                    $("#path").parent().addClass('focused  error');
                    flag = 1;
                } else {
                    $("#path").parent().removeClass('focused  error');
                }

                if ($("#type").val() == '') {
                    $("#type").parent().addClass('focused  error');
                    flag = 1;
                } else {
                    $("#type").parent().removeClass('focused  error');
                }
                if (flag == 0) {
                    $.ajax({
                        type: 'POST',
                        url: '../backend-script/admin.php',
                        data: {
                            "id": $("#id").val(),
                            "name": $("#name").val(),
                            "description": $("#description").val(),
                            "path": $("#path").val(),
                            "type": $("#type").val(),
                            "editkeyword": true},
                        success: function (result) {
                            listkeyword();
                            $('.modal-backdrop').remove();
                            $('body').removeClass("modal-open");
                        }
                    });
                } else {
                    showNotification('alert-danger', "Plese Fill all the fields", 'bottom', 'right', '', '');

                }
                e.preventDefault();

            });
        });
    </script>
    <?php
}
?>