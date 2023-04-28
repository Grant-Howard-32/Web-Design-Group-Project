<?php 
    include 'timeout.php';
    include 'config.php';


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
    $instructor_id = $_POST['instructor'];
    $enrollment_cap = $_POST['enrollment_cap'];


    try {
        $stmt = $conn->prepare("INSERT INTO courses (semester, year, course_prefix, course_number, course_section, course_name, course_room, days, times, credit_hours, instructor_id, enrollment_cap) VALUES (:semester, :year, :course_prefix, :course_number, :course_section, :course_name, :course_room, :days, :times, :credit_hours, :instructor_id, :enrollment_cap)");
        $stmt->bindParam(':semester', $semester);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':course_prefix', $course_prefix);
        $stmt->bindParam(':course_number', $course_number);
        $stmt->bindParam(':course_section', $course_section);
        $stmt->bindParam(':course_name', $course_name);
        $stmt->bindParam(':course_room', $course_room);
        $stmt->bindParam(':days', $days);
        $stmt->bindParam(':times', $times);
        $stmt->bindParam(':credit_hours', $credit_hours);
        $stmt->bindParam(':instructor_id', $instructor_id);
        $stmt->bindParam(':enrollment_cap', $enrollment_cap);
        
        $stmt->execute();
        echo "New course added successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
?>

