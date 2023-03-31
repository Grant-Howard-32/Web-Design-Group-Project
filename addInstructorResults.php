<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$department = $_POST['department'];
$rank = $_POST['rank'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Instructor Result</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <h1 id="title">Add Instructor Results</h1>
        <ul>
            <li><strong>Instructor First Name:</strong> <?php echo $first_name ?></li>
            <li><strong>Instructor Last Name:</strong> <?php echo $last_name ?></li>
            <li><strong>Email:</strong> <?php echo $email ?></li>
            <li><strong>Department:</strong> <?php echo $department ?></li>
            <li><strong>Rank:</strong> <?php echo $rank ?></li>
        </ul>
    </body>
    <?php include 'footer.php'; ?>
</html>