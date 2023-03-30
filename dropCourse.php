<!DOCTYPE html>
<html>
  <head>
    <title>Drop Course Page</title>
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
          <img src="Icons/user-plus.svg" title="Add Student / Enroll Student">
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
    <h1 id="title">Drop Course</h1>
    <div class="form_container">
      <form onsubmit="return validateRegisterDropCourseForm();" action="dropCourse.php" method="post">
        <label for="student_first_name">Student First Name:</label>
        <input type="text" id="student_first_name" name="student_first_name" max="50" required>

        <label for="student_last_name">Student Last Name:</label>
        <input type="text" id="student_last_name" name="student_last_name" max="50" required>
        
        <label for="semester">Semester:</label>
        <select id="semester" name="semester" required>
          <option value="">Please select one</option>
          <option value="Spring">Spring</option>
          <option value="Summer">Summer</option>
          <option value="Fall">Fall</option>
        </select>    

        <label for="year">Year:</label>
        <input type="number" id="year" name="year"required>

        <label for="course_prefix">Course Prefix (e.g., CSCI):</label>
        <input type="text" id="course_prefix" name="course_prefix" max="50" required>

        <label for="course_number">Course Number (e.g., 101, 330, etc.):</label>
        <input type="number" id="course_number" name="course_number" required>

        <label for="course_section">Course Section (e.g., 01, 02):</label>
        <input type="number" id="course_section" name="course_section" required>

        <input type="submit" value="Drop">
      </form>
    </div>
  </body>
</html>