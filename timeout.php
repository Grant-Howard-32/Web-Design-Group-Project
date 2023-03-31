<?php 
session_start();

if (!isset($_SESSION['username']) || (time()-$_SESSION["login_time_stamp"] > 60)) {
    session_unset();
    session_destroy();
    header("Location: login.html");
    exit();
}

$username = $_SESSION['username'];
?>