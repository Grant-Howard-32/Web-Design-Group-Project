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
    <title>Admin Select Student Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <span style="font-family: sans-serif; color: #22313f;">Hello, <?php echo $username; ?>.</span>
    <?php include 'navigation.php'; ?>
    <h1 id="title">Admin Select Student</h1>
    <div class="form_container">
        <form onsubmit="return validateAddCourseForm();" action="coursesRegistered.php" method="post">
            <label for="student">Student:</label>
            <select id="student" name="student" onchange="this.form.submit()" required>
              <option value="">Please select one</option>
              <option value="Student 1">Student 1</option>
              <option value="Student 2">Student 2</option>
              <option value="Student 3">Student 3</option>
            </select>
        </form>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
<!--
Admin Page
If an Admin attempts to go to this page, the Admin should be redirected to a different page first. This
page will contain a list containing all of the students. The Admin should be able to select a student
from this list (using either a drop down list or a group of radio buttons) and go to the original page and
display a table containing the courses registered by that student. The page should allow the Admin to
go back to the page with the student list and select a different student. Of course, this feature won't be
fully implemented in this module, but the drop down list page can be implemented.
-->