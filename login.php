<?php
session_start();
ini_set('session.gc_maxlifetime', 60);

require_once 'config.php';

// Get the submitted email address from the login form
$email = $_POST['email'];
$_SESSION['username'] = $_POST['username'];

// Check if the username is valid
$valid_usernames = array("student", "instructor", "admin");
if (!in_array($_SESSION['username'], $valid_usernames)) {
    header("Location: login.php?error=invalidusername");
    exit();
}

// Prepare the SQL query to check if a record with the submitted email address exists
if ($_SESSION['username'] == 'student') {
    $sql = "SELECT * FROM students WHERE email = :email";
} elseif ($_SESSION['username'] == 'instructor') {
    $sql = "SELECT * FROM instructors WHERE email = :email";
} elseif ($_SESSION['username'] == 'admin') {
    $sql = ""; // Add this line to handle the 'admin' case
}

if ($_SESSION['username'] != 'admin') {
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

if (($_SESSION['username'] == 'admin') || !empty($result)) {
    // Redirect the user to the home page or dashboard
    $_SESSION["login_time_stamp"] = time();

    $_SESSION['email'] = $email;

    if ($_SESSION['username'] == 'admin') {
        $_SESSION["display_name"] = $_SESSION['username'];    
    }
    elseif ($_SESSION['username'] == 'student') {
        $sql = "SELECT students.first_name
                FROM students
                WHERE students.email = :email";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION["display_name"] = $results[0]['first_name'];
    }
    elseif ($_SESSION['username'] == 'instructor') {
        $sql = "SELECT instructors.first_name
        FROM instructors
        WHERE instructors.email = :email";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION["display_name"] = $results[0]['first_name'];
    }
    
    header("Location: home.php");
    exit();
} else {
    echo "Invalid email address";
    header("Location: login.html");
    exit();
}

?>
