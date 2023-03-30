<?php
session_start();

// Redirect the user to the login page if not logged in or session has timed out
if (!isset($_SESSION['username']) || (time()-$_SESSION["login_time_stamp"] > 5)) {
    session_unset();
    session_destroy();
    header("Location: login.html");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
  <span id="session" style="font-family: sans-serif; color: #22313f;">Hello, <?php echo $username; ?>.</span>
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

    <div class="menu">
      <br>
      <div style="display: flex; align-items: center;">
        <img src="Icons/home.svg">
        <h1 style="margin: 0 10px;">Home</h1>
      </div>
      <p>This is the page you are currently on. This page simply labels each of the buttons in the Navigation Bar at the top of the screen, so you know where to go for what you need.</p>
      <div style="display: flex; align-items: center;">
        <img src="Icons/user-plus.svg">
        <h1 style="margin: 0 10px;">Add Instructor / Enroll Student</h1>
      </div>
      <p>These two pages allow you to add an instructor or enroll a new student. Simply hover over the icon, and select one of the two pages from the dropdown menu that appears.</p>
      <div style="display: flex; align-items: center;">
        <img src="Icons/plus-circle.svg">
        <h1 style="margin: 0 10px;">Modify Courses</h1>
      </div>
      <p>This consists of three separate pages for adding a course, registering for a course, or dropping a course. Simply hover over the icon, and select one of the three pages from the dropdown menu that appears.</p>
      <div style="display: flex; align-items: center;">
        <img src="Icons/calendar.svg">
        <h1 style="margin: 0 10px;">Calendar</h1>
      </div>
      <p>This page allows you to view your schedule as it currently stands.</p>
      <div style="display: flex; align-items: center;">
        <img src="Icons/paperclip.svg">
        <h1 style="margin: 0 10px;">User Manual</h1>
      </div>
      <p>This page gives clear instructions for using the several features of the program.</p>
      <div style="display: flex; align-items: center;">
        <img src="Icons/user.svg">
        <h1 style="margin: 0 10px;">Programmer's Manual</h1>
      </div>
      <p>This page details the code used to implement the entire program, along with how a programmer can access it.</p>
    </div>  
    <?php include 'footer.php'; ?>
  </body>
</html>