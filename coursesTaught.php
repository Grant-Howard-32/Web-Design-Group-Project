<?php
session_start();

// Redirect the user to the login page if not logged in or session has timed out
if (!isset($_SESSION['username']) || (time()-$_SESSION["login_time_stamp"] > 60)) {
    session_unset();
    session_destroy();
    header("Location: login.html");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Courses Taught Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'navigation.php'; ?>
    <h1 id="title">Courses Taught</h1>
    <div class="form_container">
        <table>
            <thead>
            <tr>
                <th>Course Prefix</th>
                <th>Course Number</th>
                <th>Section</th>
                <th>Course Name</th>
                <th>Days Offered and Time</th>
                <th>Room</th>
                <th>Credit Hours</th>
                <th>Enrollment Cap</th>
            </tr>
            </thead>
            <br>
            <?php if ($username == 'admin') {
              echo <<<'HTML'
                <button class="selectButton" onclick="location.href='selectInstructor.php'">Select Different Instructor</button>
              HTML;
            }?>
            </table>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>