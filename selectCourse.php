<?php
session_start();

// Redirect the user to the login page if not logged in or session has timed out
if (!isset($_SESSION['username']) || (time()-$_SESSION["login_time_stamp"] > 5)) {
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
    <title>Select Course Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'navigation.php'; ?>
    <h1 id="title">Select Course</h1>
    <div class="form_container">
        <form onsubmit="return validateAddCourseForm();" action="studentsRegisteredToCourse.php" method="post">
            <label for="course">Course:</label>
            <select id="course" name="course" onchange="this.form.submit()" required>
              <option value="">Please select one</option>
              <option value="Course 1">Course 1</option>
              <option value="Course 2">Course 2</option>
              <option value="Course 3">Course 3</option>
            </select>
        </form>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>

<!--
Instructor and Admin Views
The user should be able to select the course first. This will require a separate page that displays all of
the courses available to the user. If an Instructor views this page, a list of that instructor's courses will
appear as options in the list. If an Admin views this page, a list of all courses should appear as options
in the list. Either way, selecting one of the courses in the list will display the student information in the
table on the other page
-->