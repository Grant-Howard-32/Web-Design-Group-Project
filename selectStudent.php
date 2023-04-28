<?php include 'timeout.php'; 

  if ($_SESSION['username'] != 'admin') {
    echo "Access Denied. You do not have permission to access this page.<br>";
    echo "<a href='home.php'>Click here</a> to return to the homepage.";
    exit();
  }

  require_once 'config.php';
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
    <?php
          // SQL query to join courses and instructors tables
          $sql = "SELECT student_id, first_name, last_name
                  FROM students;";

          // Execute the query
          $result = $conn->prepare($sql);
          $result->execute();
          
        ?>

        <label for="student">Select Student:</label>
        <form onsubmit="return validateAddCourseForm();" action="coursesRegistered.php" method="post">
          <select name="student" id="student" onchange="this.form.submit()">
              <option value="">Please select one</option>
              <?php
                // Generate options for the dropdown
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
        </form>
    <?php include 'footer.php'; ?>
  </body>
</html>