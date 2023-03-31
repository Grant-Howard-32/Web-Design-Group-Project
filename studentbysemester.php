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
    <title>View Registered Students</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'navigation.php'; ?>
    <h1 id="title">View Registered Students</h1>
    <div class="form_container">
      <table>
        <thead>
          <tr>
            <th>Student's Name</th>
            <th>Course Prefix</th>
            <th>Course Number</th>
            <th>Section</th>
          </tr>
        </thead>
        <tbody>
          <!-- Table data will be populated dynamically -->
        </tbody>
      </table>
      <br>
      <?php if ($username == 'admin') {
            echo <<<'HTML'
              <button class="selectButton" onclick="location.href='selectSemester.php'">Select Different Semester</button>
            HTML;
        }?>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>