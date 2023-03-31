<?php
session_start();

// Redirect the user to the login page if not logged in or session has timed out
if (!isset($_SESSION['username']) || (time()-$_SESSION["login_time_stamp"] > 60)) {
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
    <title>Programmer's Manual</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
      #second-nav a {
          margin-right: 20px; /* add spacing between each link */
      }
  </style>
  </head>
  <body>
    <?php include 'navigation.php'; ?>
    
    <h1 id="title">Programmer's Manual</h1>

    <div id="secondary-nav">
      <a href="#intro">Introduction</a>
      <a href="#install">Installation</a>
      <a href="#usage">Usage</a>
      <a href="#navigation">Navigation Menu</a>
      <a href="#overview">Overview of the Course Registration System</a>

      <a href="#login">Login Page</a>
      <a href="#Session">Session PHP Page</a>
      <a href="#footer">Footer PHP Page</a>
      <a href="#crs">View Courses Registered by Student</a>
      <a href="#vsr">View Students Registered in Course</a>
      <a href="#cti">View Courses Taught by Instructor</a>
      <a href="#srs">View Students Registered by Semester</a>

      <a href="#summary">Summary of the Contents of Each Page</a>
      <a href="#formel">Desciption of All Form Elements</a>
      <a href="#additional">Additional Features</a>
      <a href="#funcs">JavaScript Functions</a>
    </div>
    <br>
  
  <div class="main">
  <h2 id = "intro">Introduction</h2>
  <p>This manual provides information on how to use and make changes to the Module 3 code. This includes HTML, CSS, JavaScript, and php.</p>
  <br>
  <h2 id = "install">Installation</h2>
  <p>To install this webpage's code, follow these steps:</p>
  <ol>
    <li>Clone the repository from "https://github.com/Grant-Howard-32/Web-Design-Group-Project".</li>
    <li>Request the necessary permissions to commit to the repo.</li>
    <li>Edit the code and commit to github once code is ready.</li>
  </ol>
  <br>

  <h2 id = "usage">Usage</h2>
  <p>This section will give a brief description of the system; moreover, only users with the necessary permissions will be able to access certain pages:</p>
  <ul>
    <li id = "navigation"> <b> Navigation Menu: This menu can be seen at the top of each webpage and it's code within the first (nav) section of the body. </b> </li>
    <ul> 
    <li> The a and href tags link the item to an html file</li>
    <li> Each image can be found within the icon folder</li>
    <li> Some icons have dropdown sections, which can be edited within their respectful div section</li>
    </ul>
    <br>

    <li id = "overview"> <b> Overview of the Course Registration System: </b> </li>
    <ul>
      <li> This registration system is a webstite, build with HTML and CSS, to allow students to register, add, or drop a couurse, add an instructor, 
        and other functions. However, it currently has no database to store any of the information logged. The webpages follow a typical HTML structure
        that allows each web page its individual structure. The Icons folder holds all the icons that the website references and utilizes as buttons.
        Moreover, the fonts folder introduces the the "chipotle" font within the website. Moreover, alongisde all the html files, the css document 
        holds all the information for the website to stay consistent. To change the color schemes, font sizes, fonts, backgrounds, reference the "styles.css"
        file.
      </li> 
    </ul>
    <br>


    <li id = "login"> <b> Login Page </b> </li>
    <ul>
      <li> Upon clicking the login button, the page should verify the entered user name, store it as a session variable, 
        and redirect the user to the main menu page or display an error message if the user name is invalid. This page is written in PHP, HTML, CSS, and JS. There are only 
        three options for the user login.
      </li> 
    </ul>
    <br>
    
    <li id = "Session"> <b> Session PHP Page </b> </li>
    <ul>
      <li> This is a PHP page that keeps track of the user session; a label on top greets the user. If the user chooses to log out, then the session ends.
      </li> 
    </ul>
    <br>
    
    <li id = "footer"> <b> Footer PHP Page </b> </li>
    <ul>
      <li> This is a PHP page creates a link that takes the user back to the home page.
      </li> 
    </ul>
    <br>

    <li id = "crs"> <b> View Courses Registered by Student </b> </li>
    <ul>
      <li> This is a page that creates a table of courses registered by students, which uses php to keep track of the person accesing the page as well as 
        switcing the table based on student.
      </li> 
    </ul>
    <br>

    <li id = "vsr"> <b> View Students Registered in Course </b> </li>
    <ul>
      <li> This is a page that creates a table of students registered for a course, which uses php to keep track of the person accesing the page as well as 
        switcing the table based on course.
      </li> 
    </ul>
    <br>

    <li id = "cti"> <b> View Courses Taught by Instructor </b> </li>
    <ul>
      <li> This is a page that creates a table of courses that are taught by each instructor. 
        In PHP, the table data can be populated from a database using SQL queries and then displayed using loops and HTML table tags.
      </li> 
    </ul>
    <br>


    <li id = "srs"> <b> View Students Registered by Semester </b> </li>
    <ul>
      <li> This is a page that creates a table of students registered for each semester. The user can select a semester, which will take them to a subsequent page with
        a table of students registered for that specific semester. 
        In PHP, the table data can be populated from a database using SQL queries and then displayed using loops and HTML table tags.
      </li> 
    </ul>
    <br>


    <li id="summary"> <b> Summary of the Contents of Each Page</b> </li>
    <ul>
      <li> List of web-pages: accountInfo.html, addCourse.html, addInstructor.html, dropCourse.html, enrollStudent.html, home.html, registerCourse.html, schedule.html, usermanualv4.html</li>
      <li><a href="usermanualv4.html">Web Pages, Descriptions, and Instructions</a> </li>
    </ul>
    <br>

    <li id="formel"><b>Desciption of All Form Elements</b></li>
    <ul> For example of the addCourse page, as all other pages use the same forms, this HTML file implements a web page to add a course. The page includes a form that allows the user to provide details about the course, such as the semester, year, prefix, number, section, name, room, days offered, and time. The form is submitted to the addCourse.php file and the form inputs are validated using the validateForm() JavaScript function. The page also includes a navigation bar with links to other pages, including Home, Add Instructor, Enroll Student, Add Course, Register Course, Drop Course, Schedule, User Manual, and Account Info. The page uses a CSS file named styles.css for styling.</ul>
    <br>

    <li id="additional"><b>Additional Features</b></li>
    <ul> For example, the webpages now process the information entered to assure correct input. There is data validation in fields that require input, where all necessary attributes are required and the webpage will throw an error if the input is invalid. Moreover, an additional javascript feature can be seen where one field is displayed only based on previously selected drop down value, which can be seen in the js file.</ul>
    <br>

    <li id="funcs"> <b> JavaScript Functions </b> </li>
    <ul> 
      <li> The functions can be found within the script.js file </li>
      <li> restrictNameInput(input):</li>
      <ul> <li> Input parameter: input (HTML input element) </li> <li> Description: The function takes an HTML input element as its parameter. It then replaces all characters in the input's value that do not match the regular expression /[^a-zA-Z]/g with an empty string. This means that the function only allows alphabetic characters (lowercase and uppercase) in the input field. </li> </ul>
      
      <li> restrictEmailInput(input): </li>
      <ul> <li> Input parameter: input (HTML input element) </li> <li> Description: The function takes an HTML input element as its parameter. It then replaces all characters in the input's value that do not match the regular expression /[^a-zA-Z0-9@.]/g with an empty string. This means that the function only allows alphanumeric characters, the at sign (@), and the period (.) in the input field. </li> </ul>
      
      <li> validateForm(): </li>
      <ul> <li> Input parameters: None </li> <li> Description: The function does not take any parameters. It selects all the select elements in the form using the querySelectorAll method and loops through them. If any of the selected elements has a value equal to an empty string, the function displays an alert message and returns false. If all select elements have a value, the function returns true. </li> </ul>
      
      <li> updateTimes():</li>
      <ul> <li> Input parameters: None </li> <li> Description: This function is used to update the visibility of certain HTML elements on a web page based on the user's selection of a day value. Specifically, it gets the value of a drop-down list element with an id of "days" and uses this value to determine which time select elements to show or hide. First, all time select elements are hidden by setting their display property to "none". Then, depending on the selected value of the "days" element, the corresponding time select element is shown by setting its display property to "block". This function is likely part of a larger web application that allows the user to select certain days and times for some purpose, such as scheduling appointments or selecting classes. </li> </ul>


    </ul>
  </ul>
  </div>
    <?php include 'footer.php'; ?>
  </body>
</html>