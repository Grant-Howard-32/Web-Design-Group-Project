<?php include 'timeout.php'; 

  if ($username != 'admin' && $username != 'instructor') {
    echo "Access Denied. You do not have permission to access this page.<br>";
    echo "<a href='home.php'>Click here</a> to return to the homepage.";
    exit();
  }
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
        </table>
        <br>
        <?php if ($username == 'admin') {
          echo <<<'HTML'
            <button class="selectButton" onclick="location.href='selectInstructor.php'">Select Different Instructor</button>
          HTML;
        }?>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>