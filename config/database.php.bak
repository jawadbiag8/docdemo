<?php

session_start();

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'auth_db';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function clean_string($str, $conn) {
    $str = strip_tags($str);
    $str = mysqli_real_escape_string($conn, $str);
    return $str;
}

function addview($pid, $uid, $conn) {
    $sql = "SELECT * FROM views WHERE post_id= $pid AND user_id= $uid";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        
    } else {
        $sql = "INSERT INTO views (`post_id`, `user_id`) VALUES ($pid, $uid);";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE `posts` SET users = users+1 WHERE id = $pid;";
        $result = mysqli_query($conn, $sql);
    }
}

?>