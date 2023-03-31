<?php
$semester = $_POST['semester'];
$year = $_POST['year'];
$course_prefix = $_POST['course_prefix'];
$course_number = $_POST['course_number'];
$course_section = $_POST['course_section'];
$course_name = $_POST['course_name'];
$course_room = $_POST['course_room'];
$days = $_POST['days'];
if ($days == 'mwf') {
    $times = $_POST['times-mwf'];
}
if ($days == 'tth') {
    $times = $_POST['times-tth'];
}
if ($days == 'mon' || $days == 'tue' || $days == 'wed' || $days == 'thu') {
    $times = $_POST['times-day'];
}
$credit_hours = $_POST['credit_hours'];
$instructor_first_name = $_POST['instructor_first_name'];
$instructor_last_name = $_POST['instructor_last_name'];
$enrollment_cap = $_POST['enrollment_cap'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Course Result</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <h1 id="title">Add Course Results</h1>
        <ul>
            <li><strong>Semester:</strong> <?php echo $semester ?></li>
            <li><strong>Year:</strong> <?php echo $year ?></li>
            <li><strong>Course Prefix:</strong> <?php echo $course_prefix ?></li>
            <li><strong>Course Number:</strong> <?php echo $course_number ?></li>
            <li><strong>Course Section:</strong> <?php echo $course_section ?></li>
            <li><strong>Course Name:</strong> <?php echo $course_name ?></li>
            <li><strong>Room:</strong> <?php echo $course_room ?></li>
            <li><strong>Days:</strong> <?php echo $days ?></li>
            <li><strong>Times:</strong> <?php echo $times ?></li>
            <li><strong>Credit Hours:</strong> <?php echo $credit_hours ?></li>
            <li><strong>Instructor First Name:</strong> <?php echo $instructor_first_name ?></li>
            <li><strong>Instructor Last Name:</strong> <?php echo $instructor_last_name ?></li>
            <li><strong>Enrollment Cap:</strong> <?php echo $enrollment_cap ?></li>
        </ul>
    </body>
    <?php include 'footer.php'; ?>
</html>