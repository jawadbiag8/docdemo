<div class="container-fluid">
    <!-- Basic Card -->
    <div class="row clearfix">
        <?php
        include("../../config/database.php");
        if (isset($_POST['cat'])) {
            if ($_POST['cat'] == '0') {
                $cat = "";
            } else {
                $cat = $_POST['cat'];
            }
        } else {
            $cat = '';
        }
        if (isset($_POST['subcat'])) {
            if ($_POST['subcat'] == '0') {
                $subcat = "";
            } else {
                $subcat = $_POST['subcat'];
            }
        } else {
            $subcat = '';
        }

        if ($cat == '') {
            $sql = "SELECT p.*,c.cat_name,s.name scat_name,u.f_name,u.l_name FROM posts p JOIN categories c on c.id =p.cat_id JOIN sub_category s on s.id=p.sub_cat_id JOIN users u on u.id=p.user_id";
        } else {
            if ($subcat == '') {
                $sql = "SELECT p.*,c.cat_name,s.name scat_name,u.f_name,u.l_name FROM posts p JOIN categories c on c.id =p.cat_id JOIN sub_category s on s.id=p.sub_cat_id JOIN users u on u.id=p.user_id where p.cat_id=$cat";
            } else {
                $sql = "SELECT p.*,c.cat_name,s.name scat_name,u.f_name,u.l_name FROM posts p JOIN categories c on c.id =p.cat_id JOIN sub_category s on s.id=p.sub_cat_id JOIN users u on u.id=p.user_id where p.sub_cat_id=$subcat";
            }
        }
        
        $result = mysqli_query($conn, $sql."  ORDER BY p.id DESC");
        if (mysqli_num_rows($result) > 0) {
            while ($res = mysqli_fetch_array($result)) {
                ?>
                <a class="postlink" href="javascript:postload(<?php echo $res['id']; ?>)">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2 title=" <?php echo $res['post_title']; ?> " class="demo-2">
                                    <?php echo $res['post_title']; ?> 
                                </h2>

                            </div>
                            <div class="body"  style="padding: 0">
                                <div class="panel panel-default panel-post">
                                    <div class="panel-heading">
                                        <div class="media">
                                            <div class="media-left">
                                                <span class="profileicon"> <?php echo ucfirst($res['f_name'][0]) . ucfirst($res['l_name'][0]); ?></span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <?php echo ucfirst($res['f_name']) . " " . ucfirst($res['l_name']) ?>
                                                </h4>
                                                <?php echo date_format(date_create($res['created_date']), "Y M d h:i a") ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="post">
                                            <div class="post-heading post_tumbnal">
                                                <div class="wrapper">
                                                    <div class="demo-1">
                                                        <?php echo $res['post_data'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <ul>
                                            <?php
                                            $sql1 = "SELECT * FROM likes WHERE post_id= " . $res['id'] . " AND type='post' AND user_id= " . $_SESSION['id'];
                                            $result1 = mysqli_query($conn, $sql1);
                                            if (mysqli_num_rows($result1) > 0) {
                                                ?>
                                                <li>
                                                    <a>
                                                        <i class="material-icons" style="color: red">favorite</i>
                                                        <span><?php echo $res['likes'] ?> Likes</span>
                                                    </a>
                                                </li>
                                                <?php
                                            } else {
                                                ?>
                                                <li>
                                                    <a>
                                                        <i class="material-icons">favorite_border</i>
                                                        <span><?php echo $res['likes'] ?> Likes</span>
                                                    </a>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                            <li>
                                                <a>
                                                    <i class="material-icons">comment</i>
                                                    <span><?php echo $res['comments'] ?> Comments</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <i class="material-icons">share</i>
                                                    <span><?php echo $res['users'] ?>View</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php
            }
        } else {
            echo '<center><h2>No Record found</h4></centre>';
        }
        ?>
    </div>
    <!-- #END# Basic Card -->

</div>