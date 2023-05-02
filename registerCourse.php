<?php include 'timeout.php'; 

  if ($_SESSION['username'] != 'admin' && $_SESSION['username'] != 'student') {
    echo "Access Denied. You do not have permission to access this page.<br>";
    echo "<a href='home.php'>Click here</a> to return to the homepage.";
    exit();
  }

  // Include the config.php file to establish a connection to the database
  require_once 'config.php';
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
      <?php
          // Get the current user's role and ID from the session
          $current_role = $_SESSION['username'];
          $current_user_id = $_SESSION['id'];

          // SQL query to get students
          if ($current_role == 'student') {
              $sql = "SELECT student_id, first_name, last_name FROM students WHERE student_id = :current_user_id;";
          } else {
              $sql = "SELECT student_id, first_name, last_name FROM students;";
          }

          $result = $conn->prepare($sql);

          // Bind the current user ID if the user is a student
          if ($current_role == 'student') {
              $result->bindParam(':current_user_id', $current_user_id);
          }

          $result->execute();
        ?>

        <label for="student">Select Student:</label>
        <select name="student" id="student">
            <?php
              $rows = $result->fetchAll(PDO::FETCH_ASSOC);
              if (!empty($rows)) {
                  foreach ($rows as $row) {
                      echo '<option value="' . $row["student_id"] . '">' . $row["first_name"] . ' ' . $row["last_name"] . '</option>';
                  }
              } else {
                  echo '<option value="">No students found</option>';
              }
            ?>
        </select>

        <?php
          // SQL query to join courses and instructors tables
          $sql = "SELECT course_id, semester, year, course_prefix, course_number, course_section
                  FROM courses;";

          // Execute the query
          $result = $conn->prepare($sql);
          $result->execute();
          
        ?>

        <label for="course">Select Course:</label>
        <select name="course" id="course">
            <?php
              // Generate options for the dropdown
              $rows = $result->fetchAll(PDO::FETCH_ASSOC);
              if (!empty($rows)) {
                  foreach ($rows as $row) {
                      echo '<option value="' . $row["course_id"] . '">' . $row["semester"] . ' ' . $row["year"] . ' ' . $row["course_prefix"] . ' ' . $row["course_number"] . ' ' . $row["course_section"] .  '</option>';
                  }
              } else {
                  echo '<option value="">No courses found</option>';
              }
            ?>
        </select>
        

        <input type="submit" value="Register">
      </form>
      </div>
    <?php include 'footer.php'; ?>
  </body>
</html>

