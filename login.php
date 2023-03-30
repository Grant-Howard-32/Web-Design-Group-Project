<?php
session_start();

if (isset($_POST['username'])) {
    $username = $_POST['username'];

    // Check if the username is valid
    $valid_usernames = array("student", "instructor", "admin");
    if (!in_array(strtolower($username), $valid_usernames)) {
        header("Location: login.php?error=invalidusername");
        exit();
    }

    // Set the username session variable
    $_SESSION['username'] = $username;

    // Redirect the user to the home page or dashboard
    $_SESSION["login_time_stamp"] = time();
    header("Location: home.php");
    exit();
} else {
    header("Location: login.html");
    exit();
}
?>