<?php
include 'timeout.php';
include 'config.php';

$student_id = $_POST['student'];
$course_id = $_POST['course'];

try {
    $stmt = $conn->prepare("DELETE FROM registration WHERE student_id = :student_id AND course_id = :course_id");
    $stmt->bindParam(':student_id', $student_id);
    $stmt->bindParam(':course_id', $course_id);

    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        echo "Course dropped successfully";
    } else {
        echo "Error: Unable to drop course. The student may not be registered for the specified course.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
<?php include 'footer.php'; ?>