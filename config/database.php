<?php 

$dbhost='localhost';
$dbuser='root';
$dbpass = '';
$dbname='auth_db';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
function clean_string($str,$conn){
    $str=strip_tags($str);
    $str= mysqli_real_escape_string($conn, $str);
    return $str;
}
?>