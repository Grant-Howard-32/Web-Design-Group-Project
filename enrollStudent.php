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

if ($username != 'admin') {
  echo "Access Denied. You do not have permission to access this page.<br>";
  echo "<a href='home.php'>Click here</a> to return to the homepage.";
  exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>User Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <span style="font-family: sans-serif; color: #22313f;">Hello, <?php echo $username; ?>.</span>
    <?php include 'navigation.php'; ?>
    
    <h1 id="title">Enroll Student</h1>
    <div class="form_container">
      <form onsubmit="return validateEnrollStudentForm()" action="enroll.php" method="post">
        <title>Enroll Student</title>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" max="50" required>
        <p id="first_name_error"></p>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" max="50" required>
        <p id="last_name_error"></p>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" max="35" required>
        <p id="email_error"></p>

        <label for="major">Major:</label>
        <input type="text" id="major" name="major" max="50" required>
        <p id="major_error"></p>

        <label for="year">Year:</label>
        <select id="year" name="year" required>
          <option value="">Please select one</option>
          <option value="Freshmen">Freshmen</option>
          <option value="Softmore">Sophmore</option>
          <option value="Junior">Junior</option>
          <option value="Senior">Senior</option>
        </select>

        <input type="submit" value="Enroll">
      </form>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>