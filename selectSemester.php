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
    <title>Select Semester</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <span style="font-family: sans-serif; color: #22313f;">Hello, <?php echo $username; ?>.</span>
    <?php include 'navigation.php'; ?>
    <h1 id="title">Select Semester</h1>
    <div class="form_container">
        <form onsubmit="return validateSemesterForm();" action="studentbysemester.php" method="post">
            <label for="semester">Semester:</label>
            <select id="semester" name="semester" onchange="this.form.submit()" required>
              <option value="">Please select one</option>
              <option value="Fall 2022">Fall 2022</option>
              <option value="Spring 2023">Spring 2023</option>
              <option value="Summer 2023">Summer 2023</option>
            </select>
        </form>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>