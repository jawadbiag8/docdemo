<div class="container-fluid">
    <div class="row clearfix">
        <?php
        include("../../config/database.php");
        if (isset($_POST['postid'])) {
            $postid = $_POST['postid'];
            addview($postid, $_SESSION['id'], $conn);
            $sql = "SELECT p.*,c.cat_name,s.name scat_name,u.f_name,u.l_name FROM posts p JOIN categories c on c.id =p.cat_id JOIN sub_category s on s.id=p.sub_cat_id JOIN users u on u.id=p.user_id where p.id=$postid";
            $result = mysqli_query($conn, $sql);
            $res = mysqli_fetch_assoc($result);
            ?>
            <input type="hidden" id="post_id" value="<?php echo $postid; ?>">
            <div class="col-xs-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
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
                                                    <?php echo $res['post_data'] ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <ul>
                                                <?php
                                                $sql = "SELECT * FROM likes WHERE post_id= $postid AND type='post' AND user_id= " . $_SESSION['id'];
                                                $result = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    ?>
                                                    <li>
                                                        <a href="javascript:likepost(<?php echo $res['id']; ?>,'post')">
                                                            <i class="material-icons" style="color: red">favorite</i>
                                                            <span><?php echo $res['likes'] ?> Likes</span>
                                                        </a>
                                                    </li>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <li>
                                                        <a href="javascript:likepost(<?php echo $res['id']; ?>,'post')">
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
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div id="formdiv" class="form-line">
                                                        <input type="text" id="commentdata" class="form-control date" placeholder="Message">
                                                    </div>
                                                    <span class="input-group-addon">
                                                        <a href="javascript:addcomment(<?php echo $res['id']; ?>)"><i class="material-icons">send</i></a>
                                                    </span>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $sql = "SELECT c.*, u.f_name,u.l_name FROM comments c JOIN users u on c.user_id = u.id where c.post_id=$postid ORDER BY c.created_at DESC";
                        $result = mysqli_query($conn, $sql);
                        while ($res = mysqli_fetch_array($result)) {
                            ?>

                            <div>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
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
                                                        <?php echo date_format(date_create($res['created_at']), "Y M d h:i a") ?>
                                                        <br>
                                                        <br>
                                                        <?php echo $res['description'] ?>
                                                        <div class="panel-footer">
                                                            <ul>
                                                                <?php
                                                                $sql1 = "SELECT * FROM likes WHERE post_id= " . $res['id'] . " AND type='comment' AND user_id= " . $_SESSION['id'];
                                                                $result1 = mysqli_query($conn, $sql1);
                                                                if (mysqli_num_rows($result1) > 0) {
                                                                    ?>
                                                                    <li>
                                                                        <a href="javascript:likepost(<?php echo $res['id']; ?>,'comment')">
                                                                            <i class="material-icons" style="color: red">favorite</i>
                                                                            <span><?php echo $res['likes'] ?> Likes</span>
                                                                        </a>
                                                                    </li>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <li>
                                                                        <a href="javascript:likepost(<?php echo $res['id']; ?>,'comment')">
                                                                            <i class="material-icons">favorite_border</i>
                                                                            <span><?php echo $res['likes'] ?> Likes</span>
                                                                        </a>
                                                                    </li>
                                                                    <?php
                                                                }
                                                                ?>
                                                                <li>
                                                                    <!--                                                                    <a>
                                                                                                                                            <i class="material-icons">comment</i>
                                                                                                                                            <span><?php echo $res['replaies'] ?> Replies</span>
                                                                                                                                        </a>-->
                                                                </li>
                                                                <li></li>

                                                            </ul>
                                                            <!--                                                            <div class="form-group">
                                                                                                                            <div class="input-group">
                                                                                                                                <div id="formdiv" class="form-line">
                                                                                                                                    <input type="text" id="commentdata" class="form-control date" placeholder="Message">
                                                                                                                                </div>
                                                                                                                                <span class="input-group-addon">
                                                                                                                                    <a href="javascript:addcomment(<?php // echo $res['id'];    ?>)"><i class="material-icons">send</i></a>
                                                                                                                                </span>
                                                                                                                            </div> 
                                                                                                                        </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php }
        ?>

    </div>
</div>