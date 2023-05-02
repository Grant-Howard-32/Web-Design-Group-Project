<?php 
    include 'timeout.php';
    include 'config.php';

    $student_id = $_POST['student'];
    $course_id = $_POST['course'];

    try {
        $checkStmt = $conn->prepare("SELECT * FROM registration WHERE student_id = :student_id AND course_id = :course_id");
        $checkStmt->bindParam(':student_id', $student_id);
        $checkStmt->bindParam(':course_id', $course_id);

        $checkStmt->execute();
        $existingRegistrations = $checkStmt->fetchAll();

        if (count($existingRegistrations) > 0) {
            echo "Error: Student is already registered for this course";
        } else {
            $stmt = $conn->prepare("INSERT INTO registration (student_id, course_id) VALUES (:student_id, :course_id)");
            $stmt->bindParam(':student_id', $student_id);
            $stmt->bindParam(':course_id', $course_id);
            
            $stmt->execute();
            echo "New registration added successfully";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
?>
<?php include 'footer.php'; ?>