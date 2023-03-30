<!DOCTYPE html>
<html>
  <head>
    <title>Add Course Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'navigation.php'; ?>

    <h1 id="title">Add Course</h1>
    <div class="form_container">
      <form onsubmit="return validateAddCourseForm();" action="addCourse.php" method="post">
        <label for="semester">Semester:</label>
        <select id="semester" name="semester" required>
          <option value="">Please select one</option>
          <option value="Spring">Spring</option>
          <option value="Summer">Summer</option>
          <option value="Fall">Fall</option>
        </select>    

        <label for="year">Year:</label>
        <input type="number" id="year" name="year" required>

        <label for="course_prefix">Course Prefix (e.g., CSCI):</label>
        <input type="text" id="course_prefix" name="course_prefix" max="4" required>

        <label for="course_number">Course Number (e.g., 101, 330, etc.):</label>
        <input type="number" id="course_number" name="course_number" required>

        <label for="course_section">Course Section (e.g., 01, 02):</label>
        <input type="number" id="course_section" name="course_section" required>

        <label for="course_name">Course Name:</label>
        <input type="text" id="course_name" name="course_name" max="50">

        <label for="course_room">Room (i.e., Building and Room Number):</label>
        <input type="text" id="course_room" name="course_room" max="50">

        <label for="days">Select Days:</label>
        <select id="days" onchange="updateTimes()">
          <option value="">--Select--</option>
          <option value="mwf">Monday, Wednesday, Friday</option>
          <option value="tth">Tuesday, Thursday</option>
          <option value="mon">Monday</option>
          <option value="tue">Tuesday</option>
          <option value="wed">Wednesday</option>
          <option value="thu">Thursday</option>
        </select>

        <label for="times-mwf" id="label-times-mwf" style="display:none;">Select Times:</label>
        <select id="times-mwf" name="times-mwf" style="display:none;">
          <option value="">--Select--</option>
          <option value="8am">8:00 AM - 8:50 AM</option>
          <option value="9am">9:00 AM - 9:50 AM</option>
          <option value="10am">10:00 AM - 10:50 AM</option>
          <option value="11am">11:00 AM - 11:50 AM</option>
          <option value="12pm">12:00 PM - 12:50 PM</option>
          <option value="1pm">1:00 PM - 1:50 PM</option>
          <option value="2pm">2:00 PM - 2:50 PM</option>
          <option value="3pm">3:00 PM - 3:50 PM</option>
        </select>

        <label for="times-tth" id="label-times-tth" style="display:none;">Select Times:</label>
        <select id="times-tth" name="times-tth" style="display:none;">
          <option value="">--Select--</option>
          <option value="8am">8:00 AM - 9:15 AM</option>
          <option value="9am">9:30 AM - 10:45 AM</option>
          <option value="11am">11:00 AM - 12:15 PM</option>
          <option value="1pm">1:00 PM - 2:15 PM</option>
          <option value="23pm">2:30 PM - 3:45 PM</option>
        </select>

        <label for="times-day" id="label-times-day" style="display:none;">Select Times:</label>
        <select id="times-day" name="times-day" style="display:none;">
          <option value="">--Select--</option>
          <option value="1pm">1:00 PM - 4:00 PM</option>
          <option value="2pm">2:00 PM - 5:00 PM</option>
          <option value="7pm">7:00 PM - 9:30 PM</option>
        </select>



        <label for="credit_hours">Credit Hours:</label>
        <input type="number" id="credit_hours" name="credit_hours" required>

        <label for="instructor_first_name">Instructor First Name:</label>
        <input type="text" id="instructor_first_name" name="instructor_first_name" max="50" required>

        <label for="instructor_last_name">Instructor Last Name:</label>
        <input type="text" id="instructor_last_name" name="instructor_last_name" max="50" required>

        <label for="enrollment_cap">Enrollment Cap:</label>
        <input type="number" id="enrollment_cap" name="enrollment_cap" required>

        <input type="submit" value="Add">
      </form>
    </div>
  </body>
</html>