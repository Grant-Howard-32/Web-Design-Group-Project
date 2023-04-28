<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width initial-scale=1">
        <title>Students</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php include 'navigation.php'; ?>
    
        <h1>Students</h1>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Major</th>
                <th>Year</th>
            </tr>
            <?php
                $stmt = $conn->prepare("SELECT first_name, last_name, email, major, year FROM students");
                $stmt->execute();

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['major'] . "</td>";
                    echo "<td>" . $row['year'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>

        <?php include 'footer.php'; ?>
        <?php $conn = null; ?>

    </body>
</html>
        