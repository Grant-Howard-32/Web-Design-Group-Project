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
    <title>Students Registered in Course Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'navigation.php'; ?>
    <h1 id="title">Students Registered in Course</h1>
    <div class="form_container">
        <table>
            <thead>
            <tr>
                <th>Student's Name</th>
                <th>Student's Year</th>
                <th>Student's Major</th>
                <th>Student's Email</th>
            </tr>
            </thead>
        </table>
        <br>
        <?php if ($username == 'admin') {
            echo <<<'HTML'
              <button class="selectButton" onclick="location.href='selectCourse.php'">Select Different Course</button>
            HTML;
        }?>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>