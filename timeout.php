<?php 
session_start();

if (!isset($_SESSION['username']) || (time()-$_SESSION["login_time_stamp"] > 600)) {
    session_unset();
    session_destroy();
    header("Location: login.html");
    exit();
}

$username = $_SESSION['username'];
?>