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
    <title>Admin Select Instructor Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'navigation.php'; ?>
    <?php
          // SQL query to join courses and instructors tables
          $sql = "SELECT instructor_id, first_name, last_name
                  FROM instructors;";

          // Execute the query
          $result = $conn->prepare($sql);
          $result->execute();
          
        ?>

        <label for="instructor">Select Instructor:</label>
        <form onsubmit="return validateAddCourseForm();" action="coursesTaught.php" method="post">
          <select name="instructor" id="instructor" onchange="this.form.submit()">
              <option value="">Please select one</option>
              <?php
                // Generate options for the dropdown
                $rows = $result->fetchAll(PDO::FETCH_ASSOC);
                if (!empty($rows)) {
                    foreach ($rows as $row) {
                        echo '<option value="' . $row["instructor_id"] . '">' . $row["first_name"] . ' ' . $row["last_name"] . '</option>';
                    }
                } else {
                    echo '<option value="">No instructors found</option>';
                }
              ?>
          </select>
        </form>
    <?php include 'footer.php'; ?>
  </body>
</html>