<?php
include 'timeout.php';
require_once 'config.php';

if ($_SESSION['username'] != 'admin' && $_SESSION['username'] != 'instructor') {
    echo $_SESSION['username'];
    echo "Access Denied. You do not have permission to access this page.<br>";
    echo "<a href='home.php'>Click here</a> to return to the homepage.";
    exit();
}


$course_id = $_POST['course'];

$sql = "SELECT students.first_name, students.last_name, students.year, students.major, students.email
        FROM students
        INNER JOIN registration ON students.student_id = registration.student_id
        WHERE registration.course_id = :course_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':course_id', $course_id);
$stmt->execute();
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
  <head>
      <title>Students Registered in Course Page</title>
      <link rel="stylesheet" type="text/css" href="styles.css">
      <script src="script.js"></script>
  </head>
  <body>
    <?php include 'navigation.php'; ?>
    <h1 id="title">Students Registered in Course</h1>
    <div class="form_container">
        <table>
            <thead>
            <tr>
                <th>Student's Name</th>
                <th>Student's Year</th>
                <th>Student's Major</th>
                <th>Student's Email</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($students as $student) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($student['first_name'] . ' ' . $student['last_name']) . '</td>';
                echo '<td>' . htmlspecialchars($student['year']) . '</td>';
                echo '<td>' . htmlspecialchars($student['major']) . '</td>';
                echo '<td>' . htmlspecialchars($student['email']) . '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
        <br>
        <?php
        if ($_SESSION['username'] == 'admin') {
            echo <<<'HTML'
              <button class="selectButton" onclick="location.href='selectCourse.php'">Select Different Course</button>
            HTML;
        }
        ?>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
