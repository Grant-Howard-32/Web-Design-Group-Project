<?php include 'timeout.php'; ?>

<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$major = $_POST['major'];
$year = $_POST['year'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enroll Student Result</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php include 'navigation.php'; ?>
        
        <h1 id="title">Enroll Student Results</h1>
        <div class="resultsBox"> 
            <ul class="resultsList">
                <li><strong>Instructor First Name:</strong> <?php echo $first_name ?></li>
                <li><strong>Instructor Last Name:</strong> <?php echo $last_name ?></li>
                <li><strong>Email:</strong> <?php echo $email ?></li>
                <li><strong>Major:</strong> <?php echo $major ?></li>
                <li><strong>Year:</strong> <?php echo $year ?></li>
            </ul>
        </div>
    </body>
    <?php include 'footer.php'; ?>
</html>