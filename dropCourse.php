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
    <title>Drop Course Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'navigation.php'; ?>
    <h1 id="title">Drop Course</h1>
    <div class="form_container">
      <form onsubmit="return validateRegisterDropCourseForm();" action="dropCourseResults.php" method="post">
      
      <?php
          // Get the current user's role and ID from the session
          $current_role = $_SESSION['username'];
          if ($current_role == 'student') {
            $current_user_id = $_SESSION['id'];
        }

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
        <select name="student" id="student" onchange="updateCourses();">
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

        <label for="course">Select Course:</label>
        <select name="course" id="course">
          <!-- The course options will be populated by the updateCourses() function -->
        </select>

        <input type="submit" value="Drop">
      </form>
    </div>
    <?php include 'footer.php'; ?>

    <script>
      function updateCourses() {
        const studentSelect = document.getElementById('student');
        const courseSelect = document.getElementById('course');
        const studentId = studentSelect.value;

        fetch('fetch_student_courses.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: 'student=' + encodeURIComponent(studentId)
        })
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok: ' + response.status);
          }
          return response.json();
        })
        .then(courses => {
          courseSelect.innerHTML = '';
          if (courses.length > 0) {
            courses.forEach(course => {
              const option = document.createElement('option');
              option.value = course.course_id;
              option.text = `${course.semester} ${course.year} ${course.course_prefix} ${course.course_number} ${course.course_section}`;
              courseSelect.add(option);
            });
          } else {
            const option = document.createElement('option');
            option.value = '';
            option.text = 'No courses found';
            courseSelect.add(option);
          }
        })
        .catch(error => {
          console.error('There was a problem with the fetch operation:', error);
        });
      }


      // Update courses dropdown when the page loads
      window.addEventListener('load', updateCourses);
    </script>
  </body>
</html>