<?php 
    include 'timeout.php';
    include 'config.php';

    $student_id = $_POST['student'];
    $course_id = $_POST['course'];

    try {
        $stmt = $conn->prepare("INSERT INTO registration (student_id, course_id) VALUES (:student_id, :course_id)");
        $stmt->bindParam(':student_id', $student_id);
        $stmt->bindParam(':course_id', $course_id);
        
        $stmt->execute();
        echo "New registration added successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
?>