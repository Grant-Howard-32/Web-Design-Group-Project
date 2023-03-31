<?php include 'timeout.php'; 

  if ($username != 'admin') {
    echo "Access Denied. You do not have permission to access this page.<br>";
    echo "<a href='home.php'>Click here</a> to return to the homepage.";
    exit();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Select Semester</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
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