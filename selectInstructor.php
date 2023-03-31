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
    <title>Admin Select Instructor Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'navigation.php'; ?>
    <h1 id="title">Admin Select Instructor</h1>
    <div class="form_container">
        <form onsubmit="return validateAddCourseForm();" action="coursesTaught.php" method="post">
            <label for="instructor">Instructor:</label>
            <select id="instructor" name="instructor" onchange="this.form.submit()" required>
              <option value="">Please select one</option>
              <option value="Instructor 1">Instructor 1</option>
              <option value="Instructor 2">Instructor 2</option>
              <option value="Instructor 3">Instructor 3</option>
            </select>
        </form>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>

<!--
Note that if an Instructor is viewing the page, only those courses taught by that instructor should be
displayed. If an Admin views the page, there must be a separate page where the Admin can select an
instructor first. After selecting an instructor, the Admin will go to the page with the table displaying
the courses taught by that instructor.
-->