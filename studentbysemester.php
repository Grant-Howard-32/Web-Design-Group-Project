<?php
include 'timeout.php';
require_once 'config.php';

if ($_SESSION['username'] != 'admin' && $_SESSION['username'] != 'student') {
    echo "Access Denied. You do not have permission to access this page.<br>";
    echo "<a href='home.php'>Click here</a> to return to the homepage.";
    exit();
}

$semester = $_POST['semester'];

$sql = "SELECT students.first_name, students.last_name, courses.course_prefix, courses.course_number, courses.course_section
        FROM courses
        INNER JOIN registration ON courses.course_id = registration.course_id
        INNER JOIN students ON registration.student_id = students.student_id
        WHERE CONCAT(courses.semester, ' ', courses.year) = :semester";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':semester', $semester);
$stmt->execute();
$instructors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Registered Students</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
<?php include 'navigation.php'; ?>
<h1 id="title">View Registered Students</h1>
<div class="form_container">
    <table>
        <thead>
        <tr>
            <th>Student's Name</th>
            <th>Course Prefix</th>
            <th>Course Number</th>
            <th>Section</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($instructors as $instructor) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($instructor['first_name'] . ' '. $instructor['last_name']) . '</td>';
            echo '<td>' . htmlspecialchars($instructor['course_prefix']) . '</td>';
            echo '<td>' . htmlspecialchars($instructor['course_number']) . '</td>';
            echo '<td>' . htmlspecialchars($instructor['course_section']) . '</td>';
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
