<?php
include("../../config/database.php");
if (isset($_POST['userid'])) {
    $id = $_POST['userid'];
    $sql = "SELECT s.*,c.cat_name FROM sub_category s JOIN categories c ON c.id=s.cat_id WHERE s.id = '$id'";
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
                    <textarea name="description" id="description" rows="5" class="form-control"><?php echo $row['sub_cat_details']; ?></textarea>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-line">

                <label>Type</label>
                <select name="type" id="categories" class="form-control">
                    <option value="">Select Type</option> 
                    <?php
                    $sql = "SELECT * FROM categories";
                    $result = mysqli_query($conn, $sql);
                    while ($res = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $res['id']; ?>" <?php
                        if ($res['id'] == $row['cat_id']) {
                            echo ' selected ';
                        }
                        ?>><?php echo $res['cat_name']; ?></option>
                            <?php } ?>
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
                if ($("#categories").val() == '') {
                    $("#categories").parent().addClass('focused  error');
                    flag = 1;
                } else {
                    $("#categories").parent().removeClass('focused  error');
                }

                if (flag == 0) {
                    $.ajax({
                        type: 'POST',
                        url: '../backend-script/admin.php',
                        data: {
                            "id": $("#id").val(),
                            "name": $("#name").val(),
                            "categories": $("#categories").val(),
                            "sub_cat_details": $("#description").val(),
                            "editsubcategory": true},
                        success: function (result) {
                            listsubcategory();
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