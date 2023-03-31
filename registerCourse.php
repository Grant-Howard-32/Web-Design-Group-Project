<?php include 'timeout.php'; 

  if ($username != 'admin' && $username != 'student') {
    echo "Access Denied. You do not have permission to access this page.<br>";
    echo "<a href='home.php'>Click here</a> to return to the homepage.";
    exit();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Register Course Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'navigation.php'; ?>
    <h1 id="title">Register Course</h1>
    <div class="form_container">
      <form onsubmit="return validateRegisterDropCourseForm();" action="registerCourseResults.php" method="post">
        <label for="student_first_name">Student First Name:</label>
        <input type="text" id="student_first_name" name="student_first_name" max="50" required>

        <label for="student_last_name">Student Last Name:</label>
        <input type="text" id="student_last_name" name="student_last_name" max="50" required>
        
        <label for="semester">Semester:</label>
        <select id="semester" name="semester" required>
          <option value="">Please select one</option>
          <option value="Spring">Spring</option>
          <option value="Summer">Summer</option>
          <option value="Fall">Fall</option>
        </select>    

        <label for="year">Year:</label>
        <input type="number" id="year" name="year" required>

        <label for="course_prefix">Course Prefix (e.g., CSCI):</label>
        <input type="text" id="course_prefix" name="course_prefix" max="50" required>

        <label for="course_number">Course Number (e.g., 101, 330, etc.):</label>
        <input type="number" id="course_number" name="course_number" required>

        <label for="course_section">Course Section (e.g., 01, 02):</label>
        <input type="number" id="course_section" name="course_section" required>

        <input type="submit" value="Register">
      </form>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>