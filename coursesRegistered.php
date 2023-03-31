<!DOCTYPE html>
<html>
  <head>
    <title>Registered Courses Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'navigation.php'; ?>
    <h1 id="title">Registered Courses</h1>
    <div class="form_container">
        <table>
            <thead>
            <tr>
                <th>Course Prefix</th>
                <th>Course Number</th>
                <th>Section</th>
                <th>Course Name</th>
                <th>Days Offered and Time</th>
                <th>Room</th>
                <th>Credit Hours</th>
                <th>Instructor</th>
                <th>Enrollment Cap</th>
            </tr>
            </thead>
        </table>
        <br>
        <button class="selectButton" onclick="location.href='selectStudent.php'">Select Different Student</button>
    </div>
  </body>
</html>