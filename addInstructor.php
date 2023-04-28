<?php include 'timeout.php'; 

  if ($_SESSION['username'] != 'admin') {
    echo "Access Denied. You do not have permission to access this page.<br>";
    echo "<a href='home.php'>Click here</a> to return to the homepage.";
    exit();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>User Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'navigation.php'; ?>

    <div class="form_container">
        <h1 id="title">Add Instructor</h1>
        <form onsubmit="return validateAddInstructorForm()" action="addInstructorResults.php" method="post">
  
          <label for="first_name">First Name:</label>
          <input type="text" id="first_name" name="first_name" max="50" required>
          <p id="first_name_error"></p>
  
          <label for="last_name">Last Name:</label>
          <input type="text" id="last_name" name="last_name" max="50" required>
          <p id="last_name_error"></p>
  
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" max="35" required>
          <p id="email_error"></p>
  
          <label for="department">Department:</label>
          <input type="text" id="department" name="department" max="50">
          <p id="department_error"></p>
  
          <label for="instructor_rank">Rank:</label>
          <select id="instructor_rank" name="instructor_rank" required>
            <option value="">Please select one</option>
            <option value="Instructor">Instructor</option>
            <option value="Assistant Professor">Assistant Professor</option>
            <option value="Associate Professor">Associate Professor</option>
            <option value="Professor">Professor</option>
            <option value="Other">Other</option>
          </select>
  
          <input type="submit" value="Add">
        </form>
      </div>
      <?php include 'footer.php'; ?>
    </body>
  </html>