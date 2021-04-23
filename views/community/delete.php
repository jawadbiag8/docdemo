<?php

include("../../config/database.php");
if (!isset($_SESSION['data']['id'])) {
    header('Location: ../../');
}
$pid = $_POST['pid'];
$uid = $_POST['uid'];
$type = $_POST['type'];
$sql = "delete from posts where id=$pid";
$result = mysqli_query($conn, $sql);
logs("post $pid is deleted", $conn);
$sql = "delete from likes where post_id=$pid";
$result = mysqli_query($conn, $sql);
logs("all likes of post $pid are deleted", $conn);
$sql = "delete from comments where post_id=$pid";
$result = mysqli_query($conn, $sql);
logs("all comments of post $pid are deleteed", $conn);
