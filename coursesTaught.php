<!DOCTYPE html>
<html>
  <head>
    <title>Courses Taught Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'navigation.php'; ?>
    <h1 id="title">Courses Taught</h1>
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
                <th>Enrollment Cap</th>
            </tr>
            </thead>
            <br>
            <button class="selectButton" onclick="location.href='selectInstructor.html'">Select Different Instructor</button>
        </table>
    </div>
  </body>
</html>