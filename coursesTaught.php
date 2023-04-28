<?php
include 'timeout.php';
require_once 'config.php';

if ($_SESSION['username'] != 'admin' && $_SESSION['username'] != 'instructor') {
    echo "Access Denied. You do not have permission to access this page.<br>";
    echo "<a href='home.php'>Click here</a> to return to the homepage.";
    exit();
}

if ($_SESSION['username'] == 'admin') {
  $instructor_id = $_POST['instructor'];
}
else {
  $sql = "SELECT instructors.instructor_id
        FROM instructors
        WHERE instructors.email = :email";

  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $_SESSION['email']);
  $stmt->execute();
  $results = $stmt->fetch(PDO::FETCH_ASSOC);
  $instructor_id = $results['instructor_id'];
}

$sql = "SELECT courses.course_prefix, courses.course_number, courses.course_section, courses.course_name, courses.days, courses.times, courses.course_room, courses.credit_hours, courses.enrollment_cap, instructors.first_name, instructors.last_name
        FROM courses
        INNER JOIN instructors ON courses.instructor_id = instructors.instructor_id
        WHERE courses.instructor_id = :instructor_id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':instructor_id', $instructor_id);
$stmt->execute();
$instructors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Courses Taught Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
<?php include 'navigation.php'; ?>
<h1 id="title">Courses Taught Courses</h1>
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
        foreach ($instructors as $instructor) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($instructor['course_prefix']) . '</td>';
            echo '<td>' . htmlspecialchars($instructor['course_number']) . '</td>';
            echo '<td>' . htmlspecialchars($instructor['course_section']) . '</td>';
            echo '<td>' . htmlspecialchars($instructor['course_name']) . '</td>';
            echo '<td>' . htmlspecialchars($instructor['days']) . '</td>';
            echo '<td>' . htmlspecialchars($instructor['times']) . '</td>';
            echo '<td>' . htmlspecialchars($instructor['course_room']) . '</td>';
            echo '<td>' . htmlspecialchars($instructor['credit_hours']) . '</td>';
            echo '<td>' . htmlspecialchars($instructor['enrollment_cap']) . '</td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
    <br>
    <?php
    if ($_SESSION['username'] == 'admin') {
        echo <<<'HTML'
          <button class="selectButton" onclick="location.href='selectStudent.php'">Select Different Instructor</button>
        HTML;
    }
    ?>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
