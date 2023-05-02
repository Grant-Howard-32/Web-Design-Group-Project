<?php 
    include 'timeout.php';
    include 'config.php';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $instructor_rank = $_POST['instructor_rank'];

    try {
        $stmt = $conn->prepare("INSERT INTO instructors (first_name, last_name, email, department, instructor_rank) VALUES (:first_name, :last_name, :email, :department, :instructor_rank)");
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':department', $department);
        $stmt->bindParam(':instructor_rank', $instructor_rank);
        
        $stmt->execute();
        echo "New instructor added successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;

?>
<?php include 'footer.php'; ?>
