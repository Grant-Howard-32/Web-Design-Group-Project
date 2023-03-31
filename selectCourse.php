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