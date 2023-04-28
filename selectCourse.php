<?php include 'timeout.php'; 
  
  if ($_SESSION['username'] != 'admin' && $_SESSION['username'] != 'instructor') {
    echo "Access Denied. You do not have permission to access this page.<br>";
    echo "<a href='home.php'>Click here</a> to return to the homepage.";
    exit();
  }

  require_once 'config.php';
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
    <?php
          // SQL query to join courses and instructors tables
          
          if ($_SESSION['username'] == 'admin') {
            $sql = "SELECT course_id, course_name
                    FROM courses;";
          }
          elseif ($_SESSION['username'] == 'instructor') {
            $sql = "SELECT instructors.instructor_id
                  FROM instructors
                  WHERE instructors.email = :email";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $_SESSION['email']);
            $stmt->execute();
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            $instructor_id = $results['instructor_id'];

            $sql = "SELECT course_id, course_name
                    FROM courses
                    WHERE courses.instructor_id = " . $instructor_id;
          }

          // Execute the query
          $result = $conn->prepare($sql);
          $result->execute();
          
        ?>

        <label for="course">Select Course:</label>
        <form onsubmit="return validateAddCourseForm();" action="studentsRegisteredToCourse.php" method="post">
          <select name="course" id="course" onchange="this.form.submit()">
              <option value="">Please select one</option>
              <?php
                // Generate options for the dropdown
                $rows = $result->fetchAll(PDO::FETCH_ASSOC);
                if (!empty($rows)) {
                    foreach ($rows as $row) {
                        echo '<option value="' . $row["course_id"] . '">' . $row["course_name"] . '</option>';
                    }
                } else {
                    echo '<option value="">No courses found</option>';
                }
              ?>
          </select>
        </form>
    
    <?php include 'footer.php'; ?>
  </body>
</html>