<?php
session_start();

// Redirect the user to the login page if not logged in or session has timed out
if (!isset($_SESSION['username']) || (time()-$_SESSION["login_time_stamp"] > 1000)) {
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
    <title>User Manual</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <?php include 'navigation.php'; ?>
    <h1 id="title">User Manual</h1>

    <div id="secondary-nav">
      <a href="#introduction">Introduction</a>
      <a href="#login">Login</a>
      <a href="#home-page">Home Page</a>
      <a href="#add-instructor">Adding an Instructor</a>
      <a href="#enroll-student">Enrolling a Student</a>
      <a href="#add-course">Adding a Course</a>
      <a href="#register-course">Registering for a Course</a>
      <a href="#drop-course">Dropping a Course</a>
      <a href="#courses-registered">Courses Registered</a>
      <a href="#students-registered-to-course">Students Registered to Course</a>
      <a href="#courses-taught">Courses Taught</a>
      <a href="#students-registered-by-semester">Students Registered by Semester</a>
    </div>
    <br>

    <div class="main">
      <h2 id="introduction">Introduction</h2>
      <p>This manual will give you clear instructions on how to properly use the program. To begin, simply click on one of the links on the left to be taken to a set of instructions for completing various tasks.</p>
      <p>Any instruction marked with "*" denotes a required field.</p>
      <br>
    </div>

    <div class="main">
      <h2 id="login">Login</h2>
      <p>This page is accessible to anyone.</p>
      <p>When you first open the program, you will be brought to a Login screen. In the future, this screen will use a database to keep record of new users and what kind of user they are (Student, Instructor, or Admin). However, for now, to sign in as a student, enter "student". To sign in as an instructor, enter "instructor". To sign in as an admin, enter "admin".</p>
      <br>
    </div>

    <div class="main">
      <h2 id="home-page">Home Page</h2>
      <p>This page is accessible to all Student, Instructor, and Admin users.</p>
      <p>This page acts acts as the start of the program, giving descriptions of each page in the program.</p>
    <br>
    </div>

    <div class="main">
      <h2 id="add-instructor">Adding an Instructor</h2>
      <p>This page is only accessible to Admin users.</p>
      <p>This page can be used to add a new Instructor to the program by adding their information, including their name, email address, department, and rank.</p>
      <p>To add an Instructor, follow these steps:</p>
      <ol>
        <li>Hover over the "User Plus" icon in the navigation menu.</li>
        <li>Select "Add Instructor" from the dropdown menu.</li>
        <li>Enter the Instructor's first name.*</li>
        <li>Enter the Instructor's last name.*</li>
        <li>Enter the Instructor's email address.*</li>
        <li>Enter the department that the Instructor is affiliated with.</li>
        <li>Choose the Instructor's official rank (their job title essentially).</li>
        <li>Click the "Add" button to add the Instructor.</li>
      </ol>
    <br>
    </div>

    <div class="main">
      <h2 id="enroll-student">Enrolling a Student</h2>
      <p>This page is only accessible to Admin users.</p>
      <p>This page can be used to enroll a new Student into the program by adding their information, including their name, email address, major, and academic year.</p>
      <p>To enroll a Student, follow these steps:</p>
      <ol>
        <li>Hover over the "User Plus" icon in the navigation menu.</li>
        <li>Select "Enroll Student" from the dropdown menu.</li>
        <li>Enter the Student's first name.*</li>
        <li>Enter the Student's last name.*</li>
        <li>Enter the Student's email address.*</li>
        <li>Enter the Student's major.</li>
        <li>Choose the Student's academic year.</li>
        <li>Click the "Enroll" button to enroll the Student.</li>
      </ol>
      <br>
    </div>

    <div class="main">
      <h2 id="add-course">Adding a Course</h2>
      <p>This page is only accessible to Instructor and Admin users.</p>
      <p>This page can be used to add a new Course to the program by entering the Course's relevant information.</p>
      <p>To add a Course, follow these steps:</p>
      <ol>
        <li>Hover over the "Plus Circle" icon in the navigation menu.</li>
        <li>Select "Add Course" from the dropdown menu.</li>
        <li>Choose the semester the Course is offered.</li>
        <li>Enter the year in which the Course is offered.*</li>
        <li>Enter the Course Prefix (CSCI, MATH, CHEM, etc.).*</li>
        <li>Enter the Course Number.*</li>
        <li>Enter the Course Section.*</li>
        <li>Enter the official name of the Course.</li>
        <li>Enter the room number and building in which the Course will be taking place.</li>
        <li>Choose the day(s) that the Course takes place.</li>
        <li>Choose the time slot that the Course covers.</li>
        <li>Enter the amount of credit hours the Course is worth.*</li>
        <li>Enter the first name of the Instructor of the Course.*</li>
        <li>Enter the last name of the Instructor of the Course.*</li>
        <li>Enter the maximum number of Students allowed to enroll in the Course.*</li>
        <li>Click the "Add" button to add the Course.</li>
      </ol>
      <br>
    </div>

    <div class="main">
      <h2 id="register-course">Registering for a Course</h2>
      <p>This page is only accessible to Student and Admin users.</p>
      <p>This page can be used to register for an added Course in the program by entering the Course's relevant information.</p>
      <p>To register for a Course, follow these steps:</p>
      <ol>
        <li>Hover over the "Plus Circle" icon in the navigation menu.</li>
        <li>Select "Register Course" from the dropdown menu.</li>
        <li>Enter the Student's first name.*</li>
        <li>Enter the Student's last name.*</li>
        <li>Choose the semester for the desired Course.</li>
        <li>Enter the year for the desired Course.*</li>
        <li>Enter the Course Prefix (CSCI, MATH, CHEM, etc.).*</li>
        <li>Enter the Course Number.*</li>
        <li>Enter the Course Section.*</li>
        <li>Click the "Register" button to register for the Course.</li>
      </ol>
      <br>
    </div>

    <div class="main">
      <h2 id="drop-course">Dropping a Course</h2>
      <p>This page is only accessible to Student and Admin users.</p>
      <p>This page can be used to drop a Course from the program by entering the Course's relevant information.</p>
      <p>To drop a Course, follow these steps:</p>
      <ol>
        <li>Hover over the "Plus Circle" icon in the navigation menu.</li>
        <li>Select "Drop Course" from the dropdown menu.</li>
        <li>Enter the Student's first name.*</li>
        <li>Enter the Student's last name.*</li>
        <li>Choose the semester for the Course.</li>
        <li>Enter the year for the Course.*</li>
        <li>Enter the Course Prefix (CSCI, MATH, CHEM, etc.).*</li>
        <li>Enter the Course Number.*</li>
        <li>Enter the Course Section.*</li>
        <li>Click the "Drop" button to drop the Course.</li>
      </ol>
      <br>
    </div>

    <div class="main">
      <h2 id="courses-registered">Courses Registered</h2>
      <p>This page is only accessible to Student and Admin users.</p>
      <p>This page will appear differently depending on if the user is logged in as a Student or an Admin.</p>
      <p>If the user is logged in as a Student, the page has no functionality and consists of an empty table. In the future, this page will display a database of courses registered for by the Student user.</p>
      <p>If the user is logged in as an Admin, the page will ask the Admin user to select an enrolled student. In the future, the choices for students will consist of a list of enrolled students from a database, but for now, the Admin user is only able to select "Student 1", "Student 2", or "Student 3". After selecting an enrolled student, the page will display the chosen student's registered courses.</p>
      <br>
    </div>

    <div class="main">
      <h2 id="students-registered-to-course">Students Registered to Course</h2>
      <p>This page is only accessible to Instructor and Admin users.</p>
      <p>This page will appear differently depending on if the user is logged in as an Instructor or an Admin.</p>
      <p>If the user is logged in as an Instructor, the page has no functionality and consists of an empty table. In the future, this page will display a database of students registered for a particular course.</p>
      <p>If the user is logged in as an Admin, the page will ask the Admin user to select an added course. In the future, the choices for the courses will consist of a list of added courses from a database, but for now, the Admin user is only able to select "Course 1", "Course 2", or "Course 3". After selecting an added course, the page will display the chosen course's student roster.</p>
      <br>
    </div>

    <div class="main">
      <h2 id="courses-taught">Courses Taught</h2>
      <p>This page is only accessible to Instructor and Admin users.</p>
      <p>This page will appear differently depending on if the user is logged in as an Instructor or an Admin.</p>
      <p>If the user is logged in as an Instructor, the page has no functionality and consists of an empty table. In the future, this page will display a database of courses taught by the Instructor user who is logged in.</p>
      <p>If the user is logged in as an Admin, the page will ask the Admin user to select an added instructor. In the future, the choices for the instructors will consist of a list of added instructors from a database, but for now, the Admin user is only able to select "Instructor 1", "Instructor 2", or "Instructor 3". After selecting an added instructor, the page will display the courses that the chosen instructor teaches.</p>
      <br>
    </div>

    <div class="main">
      <h2 id="students-registered-by-semester">Students Registered by Semester</h2>
      <p>This page is only accessible to Admin users.</p>
      <p>When first accessed, the page will ask the Admin user to select a semester. Currently, the choices are "Fall 2022", "Spring 2023", and "Summer 2023". After selecting a semester, the page will display a list of enrolled students that are registered for the chosen semester.</p>
      <br>
    </div>

    <?php include 'footer.php'; ?>
  </body>
</html>