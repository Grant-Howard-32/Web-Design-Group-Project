<!DOCTYPE html>
<html>
  <head>
    <title>View Registered Students</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <nav>
      <div class="logo">
        <a href="#">
          <img src="Icons/aperture.svg">
        </a>
      </div>
      <div class="menu">
        <a href="home.html">
          <img src="Icons/home.svg" title="Home">
        </a>
        <div class="dropdown">
          <img src="Icons/user-plus.svg" title="Add Instructor / Enroll Student">
          <div class="dropdown-content">
            <a href="addInstructor.html">Add Instructor</a>
            <a href="enrollStudent.html">Enroll Student</a>
          </div>
        </div>
        <div class="dropdown">
          <img src="Icons/plus-circle.svg" title="Modify Courses">
          <div class="dropdown-content">
            <a href="addCourse.html">Add Course</a>
            <a href="registerCourse.html">Register Course</a>
            <a href="dropCourse.html">Drop Course</a>
          </div>
        </div>
        <div class="dropdown">
          <img src="Icons/calendar.svg" title="Calendar">
          <div class="dropdown-content">
            <a href="selectStudent.html">Courses Registered</a>
            <a href="selectCourse.html">Students Registered to Course</a>
            <a href="selectInstructor.html">Courses Taught</a>
            <a href="selectSemester.html">Students Registered by Semester</a>
          </div>
        </div>
        <a href="usermanualv4.html">
          <img src="Icons/paperclip.svg" title="User Manual">
        </a>
        <a href="accountInfo.html">
          <img src="Icons/user.svg" title="Programmer's Manual">
        </a>
      </div>
    </nav>
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