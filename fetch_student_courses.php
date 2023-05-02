<?php
include 'config.php';


$student_id = $_POST['student'];

// SQL query to get the courses for the selected student
$sql = "SELECT c.course_id, c.semester, c.year, c.course_prefix, c.course_number, c.course_section
        FROM courses AS c
        JOIN registration AS r ON c.course_id = r.course_id
        WHERE r.student_id = :student_id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':student_id', $student_id);
$stmt->execute();


$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);


header('Content-Type: application/json');
echo json_encode($courses);

$conn = null;
?>

