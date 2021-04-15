<?php

include("../config/database.php");
$categories = !empty($_POST['categories']) ? $_POST['categories'] : '';
$data = array();

if (!empty($categories)) {

    $query = "SELECT id, name, sub_cat_details from sub_category WHERE cat_id=$categories";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
//        echo 'asdadas';
        $i = 0;
        $res = "<option value='0' data-subtext=''>All</option>";
        while ($row = mysqli_fetch_array($result)) {
            $data[] = $row;
            $res .= "<option value='" . $row['id'] . "' data-subtext='" . $row['sub_cat_details'] . "'>" . $row['name'] . "</option><br>";
        }
        $responce['res'] = $res;
        $responce['row'] = $data;
        echo json_encode($responce);
    }
}
if (isset($_POST['flag'])) {
    if ($_POST['flag'] == "update_list") {
        $catid = $_POST['catid'];
        if ($catid == '') {
            $sql = "SELECT s.id, name, sub_cat_details,cat_id ,cat_name from sub_category s JOIN categories c on c.id=s.cat_id";
        } else {
            $sql = "SELECT s.id, name, sub_cat_details,cat_id ,cat_name from sub_category s JOIN categories c on c.id=s.cat_id WHERE s.cat_id=$catid";
        }
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
//            $data[] = $row;
            echo "<li>"
            . "<a href='javascript:pageload(" . $row['cat_id'] . "," . $row['id'] . ");'>"
            . "<div class='title'>"
            . ucfirst($row['name'])
            . " <small> "
            . $row['cat_name']
            . "</small></div>"
            . "<div class = 'content'> "
            . ucfirst($row['sub_cat_details'])
            . "</div> "
            . "<div class = 'clearfix'></div>"
            . "</a>"
            . "</li>";
        }
    }
    if ($_POST['flag'] == "add_comment") {
        $text = clean_string($_POST['comment'], $conn);
        $postid = clean_string($_POST['postid'], $conn);
        $userid = $_SESSION['id'];
        $sql = "INSERT INTO `comments` (`post_id`, `user_id`, `description`) VALUES ($postid, $userid, '$text');";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE `posts` SET comments = comments+1 WHERE `posts`.`id` = $postid;";
        $result = mysqli_query($conn, $sql);
    }
    if ($_POST['flag'] == "likepost") {
        $postid = clean_string($_POST['postid'], $conn);
        $type = clean_string($_POST['type'], $conn);
        $userid = $_SESSION['id'];
        $sql = "SELECT * FROM likes WHERE post_id= $postid AND type='$type' AND user_id= $userid";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $sql = "delete from likes WHERE post_id= $postid AND type='$type' AND user_id= $userid";
            $result = mysqli_query($conn, $sql);
            if ($type == 'post') {
                $sql = "UPDATE `posts` SET likes = likes-1 WHERE id = $postid;";
                $result = mysqli_query($conn, $sql);
            } else {
                $sql = "UPDATE `comments` SET likes = likes-1 WHERE id = $postid;";
                $result = mysqli_query($conn, $sql);
            }
        } else {
            $sql = "INSERT INTO likes (`post_id`, `user_id`,`type`) VALUES ($postid, $userid,'$type');";
            $result = mysqli_query($conn, $sql);
            if ($type == 'post') {
                $sql = "UPDATE `posts` SET likes = likes+1 WHERE id = $postid;";
                $result = mysqli_query($conn, $sql);
            } else {
                $sql = "UPDATE `comments` SET likes = likes+1 WHERE id = $postid;";
                $result = mysqli_query($conn, $sql);
            }
        }
    }
}
?>