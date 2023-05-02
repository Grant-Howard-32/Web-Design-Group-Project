<?php 
    include 'timeout.php';
    include 'config.php';


    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $major = $_POST['major'];
    $year = $_POST['year'];

    try {
        $stmt = $conn->prepare("INSERT INTO students (first_name, last_name, email, major, year) VALUES (:first_name, :last_name, :email, :major, :year)");
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':major', $major);
        $stmt->bindParam(':year', $year);
        
        $stmt->execute();
        echo "New student enrolled successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
?>
<?php include 'footer.php'; ?>
