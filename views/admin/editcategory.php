<?php
include("../../config/database.php");
if (isset($_POST['userid'])) {
    $id = $_POST['userid'];
    $sql = "SELECT * FROM categories WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
    <div class="form-group form-float">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-line">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $row['cat_name']; ?>" id="name" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-line">
                    <br>
                    <label>description</label>
                    <textarea name="description" id="description" rows="5" class="form-control"><?php echo $row['cat_details']; ?></textarea>
                </div>
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

                if (flag == 0) {
                    $.ajax({
                        type: 'POST',
                        url: '../backend-script/admin.php',
                        data: {
                            "id": $("#id").val(),
                            "cat_name": $("#name").val(),
                            "cat_details": $("#description").val(),
                            "editcategory": true},
                        success: function (result) {
                            listcategory();
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