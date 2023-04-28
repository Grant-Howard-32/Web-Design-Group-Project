<?php
include 'timeout.php';
require_once 'config.php';

if ($_SESSION['username'] != 'admin' && $_SESSION['username'] != 'student') {
    echo "Access Denied. You do not have permission to access this page.<br>";
    echo "<a href='home.php'>Click here</a> to return to the homepage.";
    exit();
}

if ($_SESSION['username'] == 'admin') {
  $student_id = $_POST['student'];
}
else {
  $sql = "SELECT students.student_id
        FROM students
        WHERE students.email = :email";

  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $_SESSION['email']);
  $stmt->execute();
  $results = $stmt->fetch(PDO::FETCH_ASSOC);
  $student_id = $results['student_id'];
}

$sql = "SELECT courses.course_prefix, courses.course_number, courses.course_section, courses.course_name, courses.days, courses.times, courses.course_room, courses.credit_hours, courses.enrollment_cap, instructors.first_name, instructors.last_name
        FROM courses
        INNER JOIN registration ON courses.course_id = registration.course_id
        INNER JOIN instructors ON courses.instructor_id = instructors.instructor_id
        WHERE registration.student_id = :student_id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':student_id', $student_id);
$stmt->execute();
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered Courses Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
<?php include 'navigation.php'; ?>
<h1 id="title">Registered Courses</h1>
<div class="form_container">
    <table>
        <thead>
        <tr>
            <th>Course Prefix</th>
            <th>Course Number</th>
            <th>Section</th>
            <th>Course Name</th>
            <th>Days Offered</th>
            <th>Time Offered</th>
            <th>Room</th>
            <th>Credit Hours</th>
            <th>Instructor</th>
            <th>Enrollment Cap</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($courses as $course) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($course['course_prefix']) . '</td>';
            echo '<td>' . htmlspecialchars($course['course_number']) . '</td>';
            echo '<td>' . htmlspecialchars($course['course_section']) . '</td>';
            echo '<td>' . htmlspecialchars($course['course_name']) . '</td>';
            echo '<td>' . htmlspecialchars($course['days']) . '</td>';
            echo '<td>' . htmlspecialchars($course['times']) . '</td>';
            echo '<td>' . htmlspecialchars($course['course_room']) . '</td>';
            echo '<td>' . htmlspecialchars($course['credit_hours']) . '</td>';
            echo '<td>' . htmlspecialchars($course['first_name'] . ' ' . $course['last_name']) . '</td>';
            echo '<td>' . htmlspecialchars($course['enrollment_cap']) . '</td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
    <br>
    <?php
    if ($_SESSION['username'] == 'admin') {
        echo <<<'HTML'
          <button class="selectButton" onclick="location.href='selectStudent.php'">Select Different Student</button>
        HTML;
    }
    ?>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
