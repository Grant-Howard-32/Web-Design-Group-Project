<!DOCTYPE html>
<html>
  <head>
    <title>View Registered Students</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'navigation.php'; ?>
    <h1 id="title">View Registered Students</h1>
    <div class="table_container">
      <table>
        <thead>
          <tr>
            <th>Student's Name</th>
            <th>Course Prefix</th>
            <th>Course Number</th>
            <th>Section</th>
          </tr>
        </thead>
        <tbody>
          <!-- Table data will be populated dynamically -->
        </tbody>
      </table>
    </div>
  </body>
</html>