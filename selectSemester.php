<!DOCTYPE html>
<html>
  <head>
    <title>Select Semester</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
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
    <h1 id="title">Select Semester</h1>
    <div class="form_container">
        <form onsubmit="return validateSemesterForm();" action="studentbysemester.html" method="post">
            <label for="semester">Semester:</label>
            <select id="semester" name="semester" onchange="this.form.submit()" required>
              <option value="">Please select one</option>
              <option value="Fall 2022">Fall 2022</option>
              <option value="Spring 2023">Spring 2023</option>
              <option value="Summer 2023">Summer 2023</option>
            </select>
        </form>
    </div>
  </body>
</html>