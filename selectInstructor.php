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