<?php

include("../config/database.php");
if (isset($_POST)) {
    if (isset($_POST['edituser'])) {
        $userid = clean_string($_POST['userid'], $conn);
        $fname = clean_string($_POST['fname'], $conn);
        $lname = clean_string($_POST['lname'], $conn);
        $email = clean_string($_POST['email'], $conn);
        $username = clean_string($_POST['username'], $conn);
        $password = clean_string($_POST['password'], $conn);
        if (isset($_POST['status'])) {
            $status = clean_string($_POST['status'], $conn);
        } else {
            $status = "pending";
        }
        $type = clean_string($_POST['type'], $conn);
        $sql = "UPDATE `users` SET "
                . "username='$username',"
                . "f_name='$fname',"
                . "l_name='$lname',"
                . "email='$email',"
                . "status='$status',"
                . "username='$username',"
                . "password='$password',"
                . "type='$type' "
                . "WHERE `users`.`id` = $userid;";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('Location: ../views/admin.php');
        }
    }
    if (isset($_POST['adduser'])) {
        $fname = clean_string($_POST['fname'], $conn);
        $lname = clean_string($_POST['lname'], $conn);
        $email = clean_string($_POST['email'], $conn);
        $username = clean_string($_POST['username'], $conn);
        $password = clean_string($_POST['password'], $conn);
        if (isset($_POST['status'])) {
            $status = clean_string($_POST['status'], $conn);
        } else {
            $status = "pending";
        }
        $type = clean_string($_POST['type'], $conn);
        $sql = "INSERT INTO `users` (`username`, `password`, `type`,f_name,l_name,email,status, `addedby`)"
                . " VALUES ('$username', '$password', '$type','$fname','$lname','$email','$status', '" . $_SESSION['id'] . "');";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('Location: ../views/admin.php');
        }
    }
    if (isset($_POST['signup'])) {
        var_dump($_POST);
        $fname = clean_string($_POST['fname'], $conn);
        $lname = clean_string($_POST['lname'], $conn);
        $email = clean_string($_POST['email'], $conn);
        $username = clean_string($_POST['username'], $conn);
        $password = clean_string($_POST['password'], $conn);
        $status = clean_string($_POST['status'], $conn);
        $type = clean_string($_POST['type'], $conn);
        $sql = "INSERT INTO `users` (`username`, `password`, `type`,f_name,l_name,email,status, `addedby`)"
                . " VALUES ('$username', '$password', '$type','$fname','$lname','$email','$status', '1');";
        $result = mysqli_query($conn, $sql);
    }
    if (isset($_POST['deleteuser'])) {
        $sql = "delete from users where id = " . $_POST['userid'];
        $result = mysqli_query($conn, $sql);
    }
    if (isset($_POST['deletekeyword'])) {
        $sql = "delete from keyword_table where id = " . $_POST['id'];
        $result = mysqli_query($conn, $sql);
    }
    if (isset($_POST['deletesubcategory'])) {
        $sql = "delete from sub_category where id = " . $_POST['id'];
        $result = mysqli_query($conn, $sql);
    }
    if (isset($_POST['deletecategory'])) {
        $sql = "delete from categories where id = " . $_POST['id'];
        $result = mysqli_query($conn, $sql);
    }
    if (isset($_POST['editkeyword'])) {
        $name = clean_string($_POST['name'], $conn);
        $description = clean_string($_POST['description'], $conn);
        $path = clean_string($_POST['path'], $conn);
        $type = clean_string($_POST['type'], $conn);
        if ($_SESSION['data']['type'] == "sadmin" || $_SESSION['data']['type'] == "admin") {
            if (isset($_POST['id'])) {
                $id = clean_string($_POST['id'], $conn);
                $sql = "UPDATE `keyword_table` SET `name` = '$name',`path` = '$path',description='$description',type='$type',updateedby='" . $_SESSION['id'] . "' WHERE `id` = $id;";
                $result = mysqli_query($conn, $sql);
            } else {
                $sql = "INSERT INTO `keyword_table` (`name`, `description`, `type`,path, `addedby`) VALUES ('$name', '$description', '$type','$path', '" . $_SESSION['id'] . "');";
                $result = mysqli_query($conn, $sql);
            }
        }
    }
    if (isset($_POST['editcategory'])) {
        $name = clean_string($_POST['cat_name'], $conn);
        $description = clean_string($_POST['cat_details'], $conn);
        if ($_SESSION['data']['type'] == "sadmin" || $_SESSION['data']['type'] == "admin") {
            if (isset($_POST['id'])) {
                $id = clean_string($_POST['id'], $conn);
                $sql = "UPDATE `categories` SET `cat_name` = '$name',cat_details='$description' WHERE `id` = $id;";
                $result = mysqli_query($conn, $sql);
            } else {
                $sql = "INSERT INTO `categories` (`cat_name`, `cat_details`) VALUES ('$name', '$description');";
                $result = mysqli_query($conn, $sql);
            }
        }
    }
    if (isset($_POST['editsubcategory'])) {
        $name = clean_string($_POST['name'], $conn);
        $categories = clean_string($_POST['categories'], $conn);
        $description = clean_string($_POST['sub_cat_details'], $conn);
        if ($_SESSION['data']['type'] == "sadmin" || $_SESSION['data']['type'] == "admin") {
            if (isset($_POST['id'])) {
                $id = clean_string($_POST['id'], $conn);
                $sql = "UPDATE `sub_category` SET `name` = '$name',sub_cat_details='$description',cat_id='$categories' WHERE `id` = $id;";
                $result = mysqli_query($conn, $sql);
            } else {
                $sql = "INSERT INTO `sub_category` (`name`, `sub_cat_details`,cat_id) VALUES ('$name', '$description',$categories);";
                $result = mysqli_query($conn, $sql);
            }
        }
    }
    if (isset($_POST['checkdata'])) {
        $email = clean_string($_POST['email'], $conn);
        $username = clean_string($_POST['username'], $conn);
        $sql = "SELECT * FROM `users` where username= '$username' or email='$email'";
        $result = mysqli_query($conn, $sql);
        $responce['email'] = false;
        $responce['username'] = false;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                if ($row['username'] == $username) {
                    $responce['username'] = true;
                }
                if ($row['email'] == $email) {

                    $responce['email'] = true;
                }
            }
            echo json_encode($responce);
        }
    }
}

