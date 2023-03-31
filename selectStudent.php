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
    <title>Admin Select Student Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
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