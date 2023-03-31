<?php include 'timeout.php'; ?>

<?php
$student_first_name = $_POST['student_first_name'];
$student_last_name = $_POST['student_last_name'];
$semester = $_POST['semester'];
$year = $_POST['year'];
$course_prefix = $_POST['course_prefix'];
$course_number = $_POST['course_number'];
$course_section = $_POST['course_section'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Drop Course Result</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php include 'navigation.php'; ?>
        
        <h1 id="title">Drop Course Results</h1>
        <div class="resultsBox"> 
            <ul class="resultsList">
                <li><strong>First Name:</strong> <?php echo $student_first_name ?></li>
                <li><strong>Last Name:</strong> <?php echo $student_last_name ?></li>
                <li><strong>Semester:</strong> <?php echo $semester ?></li>
                <li><strong>Year:</strong> <?php echo $year ?></li>
                <li><strong>Course Prefix:</strong> <?php echo $course_prefix ?></li>
                <li><strong>Course Number:</strong> <?php echo $course_number ?></li>
                <li><strong>Course Section:</strong> <?php echo $course_section ?></li>
            </ul>
        </div>
    </body>
    <?php include 'footer.php'; ?>
</html>