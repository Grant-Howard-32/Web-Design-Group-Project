<?php
include 'config.php';

// Get the student ID from the POST request
$student_id = $_POST['student'];

// SQL query to get the courses for the selected student
$sql = "SELECT c.course_id, c.semester, c.year, c.course_prefix, c.course_number, c.course_section
        FROM courses AS c
        JOIN registration AS r ON c.course_id = r.course_id
        WHERE r.student_id = :student_id";

// Prepare and execute the query
$stmt = $conn->prepare($sql);
$stmt->bindParam(':student_id', $student_id);
$stmt->execute();

// Fetch the results as an associative array
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Send the results as JSON
header('Content-Type: application/json');
echo json_encode($courses);

// Close the connection
$conn = null;
?>

