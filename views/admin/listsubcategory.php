<input type="hidden" value="li-4|li-4-1" id="act">


<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        All Categories 
                    </h2>
                </div>

                <?php
                include("../../config/database.php");
                if ($_SESSION['data']['type'] == "sadmin") {
                    $sql = "SELECT s.*,c.cat_name FROM sub_category s JOIN categories c ON c.id=s.cat_id";
                    $result = mysqli_query($conn, $sql);
                    ?>
                    <br>
                    <br>
                    <table id="example" class="display table-bordered" style="width:100%; align-content: center;">
                        <thead>
                            <tr style="text-align: center;">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Details</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            echo '  
                               <tr>
                                    <td>' . $row["id"] . '</td>  
                                    <td>' . $row["name"] . '</td>  
                                    <td>' . $row["cat_name"] . '</td>  
                                    <td>' . $row["sub_cat_details"] . '</td>  
                                    <td> <button type="button" onclick="editsubcategory(' . $row["id"] . ')" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Edit</button> '
                            . '<button type="button" onclick="deletesubcategory(' . $row["id"] . ')" class="btn btn-danger waves-effect m-r-20">Delete</button></td>  
                               </tr>  
                               ';
                        }
                        ?>  
                    </table>
                </div>
            <?php }
            ?>
        </div>
    </div>
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="Post" class="usersform" action="../backend-script/admin.php">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Edit Keyword</h4>
                    </div>
                    <div class="modal-body" id="editsubcategory">

                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="editkeyword" class="btn btn-link waves-effect">SAVE CHANGES</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>