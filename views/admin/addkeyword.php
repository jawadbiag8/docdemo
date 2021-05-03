
<input type="hidden" value="li-2|li-2-2" id="act">

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
                    <div class="form-group form-float">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-line">
                                    <label>Name</label>
                                    <input type="text" name="name" value="" id="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-line">
                                    <br>
                                    <label>description</label>
                                    <textarea name="description" id="description" rows="5" class="form-control"></textarea>
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
                                    <input type="text" name="path"  value="" id="path" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-line">
                                    <label>Type</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="">Select Type</option> 

                                        <option value="Articles">Articles</option> 
                                        <option value="Keyword">Keyword</option> 
                                        <option value="Library">Library</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" id="editkeyword" name="editkeyword" style="float: right" class="btn btn-link waves-effect">SAVE</button>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function () {

                            $("#editkeyword").click(function () {
                                debugger;
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
                                            "name": $("#name").val(),
                                            "description": $("#description").val(),
                                            "path": $("#path").val(),
                                            "type": $("#type").val(),
                                            "editkeyword": true},
                                        success: function (result) {
                                            listkeyword();
                                        }
                                    });
                                }else {
                                    showNotification('alert-danger', "Plese Fill all the fields", 'bottom', 'right', '', '');

                                }

                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Special Class For User Entered Browser -->
</div>
