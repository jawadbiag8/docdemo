<?php
/**
 * Created by PhpStorm.
 
 */

    session_start();
    session_unset();
    session_destroy();
    header("Location: views");
?>