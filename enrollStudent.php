<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>User Page</title>
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

    
    <h1 id="title">Enroll Student</h1>
    <div class="form_container">
      <form onsubmit="return validateEnrollStudentForm()" action="enroll.php" method="post">
        <title>Enroll Student</title>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" max="50" required>
        <p id="first_name_error"></p>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" max="50" required>
        <p id="last_name_error"></p>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" max="35" required>
        <p id="email_error"></p>

        <label for="major">Major:</label>
        <input type="text" id="major" name="major" max="50" required>
        <p id="major_error"></p>

        <label for="year">Year:</label>
        <select id="year" name="year" required>
          <option value="">Please select one</option>
          <option value="Freshmen">Freshmen</option>
          <option value="Softmore">Sophmore</option>
          <option value="Junior">Junior</option>
          <option value="Senior">Senior</option>
        </select>

        <input type="submit" value="Enroll">
      </form>
    </div>