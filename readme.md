<?php
// Get the submitted email address from the login form
$email = $_POST['email'];

// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL query to check if a record with the submitted email address exists
$sql = "SELECT * FROM Students WHERE email = '$email'";

// Execute the query and get the result
$result = mysqli_query($conn, $sql);

// Check if there is at least one row returned by the query
if (mysqli_num_rows($result) > 0) {
    // The record exists, so let the user log in
    // ...
} else {
    // The record doesn't exist, so display an error message
    echo "Invalid email address";
}

// Close the database connection
mysqli_close($conn);
?>
