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
    
  
  <div class="main">
  <h2 id = "intro">Introduction</h2>
  <p>This manual provides information on how to use and make changes to the Module 4 code. This includes HTML, CSS, JavaScript, and php.</p>
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


    <li id = "login"> <b> Add Course Page  </b> </li>
    <ul>
      <li> This is a web page that allows the addition of new courses to a system. The page includes a form with several fields to fill in such as the semester, year, course name, and room number. Some fields are required, such as semester, year, course prefix, course number, and course section. The page also includes some hidden dropdown lists for selecting times based on the days of the week, which will appear once the corresponding day is selected.
      </li> 
    </ul>
    <br>
    
    <li id = "Session"> <b> Add Course Results  </b> </li>
    <ul>
      <li> This is a PHP script that inserts course information into a database table. The script retrieves course information from a web form using the HTTP POST method, then prepares an SQL statement to insert the data into the "courses" table. If the insertion is successful, the script outputs a success message. Otherwise, an error message is outputted.
      </li> 
    </ul>
    <br>
    
    <li id = "footer"> <b> User Page  </b> </li>
    <ul>
      <li> This website checks if the user is an admin before allowing access to the page, and denies access if the username is not 'admin'. It provides a form to add a new instructor to the database, which requires a first name, last name, email, and rank, with the option to include a department. Upon submitting the form, the data is sent to the "addInstructorResults.php" page for processing.
      </li> 
    </ul>
    <br>

    <li id = "crs"> <b> Add Intructor   </b> </li>
    <ul>
      <li> This PHP script is used to insert data into a MySQL database table called "instructors". The code retrieves the data submitted through a form and uses prepared statements to insert the data into the appropriate fields in the database. If successful, a message stating that a new instructor has been added will be displayed, otherwise an error message will be displayed. The database connection details are stored in a separate "config.php" file.
      </li> 
    </ul>
    <br>

    <li id = "vsr"> <b> Add Intructor Results  </b> </li>
    <ul>
      <li>  This is a PHP script that inserts data into a database table named "instructors" using PDO prepared statements. The script retrieves values from a submitted form through $_POST variables, and binds them to parameters in the prepared statement. The script will either output a success message or an error message, depending on whether the execution was successful or not.
      </li> 
    </ul>
    <br>

    <li id = "cti"> <b>  Config Page </b> </li>
    <ul>
      <li>  This code establishes a connection to a MySQL database server using PDO (PHP Data Objects) with error reporting enabled. The server name, database name, username, and password are specified as variables. If the connection fails, an error message is displayed.
      </li> 
    </ul>
    <br>


    <li id = "srs"> <b>  Courses Taught Page </b> </li>
    <ul>
      <li>  This website is a restricted page that allows access only to logged-in users who have specific roles like admin or instructor. Based on the user role, different content is displayed, and the courses taught by an instructor are fetched from the database and displayed in an HTML table. The page also includes navigation, a form container, and a footer.
      </li> 
    </ul>
    <br>

    <li id = "srs"> <b> Registered Courses Page  </b> </li>
    <ul>
      <li>  This PHP script displays a list of courses a student has registered for. If the user is an admin, they have the ability to view the courses of any student by selecting a different student from a dropdown menu. Access is restricted to users who are either admins or students, and other users are denied access to the page. The course information is displayed in a table with columns for course prefix, number, section, name, days, times, room, credit hours, instructor, and enrollment capacity.
      </li> 
    </ul>
    <br><li id = "srs"> <b>  Login Page </b> </li>
    <ul>
      <li>  This is a PHP script that handles user authentication. It first starts a session and sets a maximum lifetime of 60 seconds for the session. It requires a configuration file and gets the user's email address and username from a login form. It then checks if the username is valid, prepares an SQL query to check if a record with the submitted email address exists, and redirects the user to the home page or dashboard if the email address exists in the database or if the user is an admin. If the email address does not exist in the database, it displays an error message and redirects the user to the login page. To modify this script, you may need to change the SQL queries or add additional logic to handle different cases.
      </li> 
    </ul>
    <br><li id = "srs"> <b> Nav Bar File  </b> </li>
    <ul>
      <li>  This is a navigation bar for a web application with different links for different user roles. The logo links to the login page, and the "Hello" message displays the user's display name. The menu contains links to different pages based on user role, such as enrolling students, adding instructors, modifying courses, registering/dropping courses, viewing courses/students, and accessing user and programmer manuals. To change the website, you can modify the HTML and PHP code to add or remove links, change the logo or icons, and customize the navigation menu based on user roles.
      </li> 
    </ul>
    <br><li id = "srs"> <b>  Register Course Page </b> </li>
    <ul>
      <li>  This is a PHP file that displays a form for registering a course for a student. The page checks if the user is either an admin or a student, and if not, access is denied. The form allows the user to select a student and a course from two separate drop-down menus, and then submit the form to register the selected course for the selected student. If you want to make changes to this page, you can modify the SQL queries to retrieve different data or change the form fields and their labels.
      </li> 
    </ul>
    <br><li id = "srs"> <b> New Registration To The Database Script  </b> </li>
    <ul>
      <li>  This PHP script is responsible for adding a new registration to the database. To change it, the programmer can modify the input variables $student_id and $course_id, as well as the SQL query to match the desired changes. However, it's important to make sure that the modified query is safe from SQL injection attacks. Finally, after testing the modifications, the script can be uploaded to the server to take effect.
      </li> 
    </ul>
    <br><li id = "srs"> <b> Schedule Page  </b> </li>
    <ul>
      <li>  The provided code snippet contains a PHP include statement to 'timeout.php' and a HTML table that displays time slots for seven days. To change the table contents, edit the table tags or update the data source providing the table with data. To change the layout and styling of the table, modify the CSS in the head section. To modify the content of the header or the navigation, change the included files 'timeout.php' and 'navigation.php' in the PHP include statement at the top and below the header respectively.
      </li> 
    </ul>
    <br>
    <br><li id = "srs"> <b> Select Course Page  </b> </li>
    <ul>
      <li>  This is a PHP script that controls access to a webpage based on the user's role. If the user is not an admin or an instructor, they will be denied access to the page. The script then uses SQL queries to retrieve a list of courses that the user has permission to view based on their role. Finally, the script generates a dropdown menu with options to select a course from the retrieved list. To modify the webpage, the programmer should modify the SQL queries to retrieve different data or change the HTML code to change the appearance of the dropdown menu.
      </li> 
    </ul>
    <br>
    <br><li id = "srs"> <b> Admin Select Instructor Page  </b> </li>
    <ul>
      <li>  This is an admin page that displays a list of instructors and allows the admin to select one of them to view the courses that they teach. To make changes, modify the SQL query to retrieve specific data and adjust the form action accordingly. Be sure to update the validation function if changes are made to the form.
      </li> 
    </ul>
    <br>
    <br><li id = "srs"> <b>  Select Semester </b> </li>
    <ul>
      <li>  This is a login-protected webpage that allows only the user with the username "admin" to access the content. The webpage contains a form to select a semester, and the options are hard-coded within the form. If you need to change the semester options, edit the options in the select tag.
      </li> 
    </ul>
    <br>
    <br><li id = "srs"> <b>  Admin Select Student Page </b> </li>
    <ul>
      <li>  This PHP script checks for admin permissions, includes a configuration file, and generates a web page with a form to select a student. To change the page, modify the SQL query in the $sql variable to select the desired fields from the database table, and adjust the HTML in the form element as needed. Make sure to also update the action attribute of the form element to point to the correct PHP script that will handle the form submission.
      </li> 
    </ul>
    <br>
    <br><li id = "srs"> <b>  View Registered Students </b> </li>
    <ul>
      <li>  This is a web page for viewing registered students in courses. The page accesses a database using SQL, so any changes to the database will require changes to the SQL queries used on this page. Changes to the HTML code can be made to adjust the layout or appearance of the page, and JavaScript functions can be modified to change user interactions with the page, such as form validation or button behaviors.
      </li> 
    </ul>
    <br>
    <br><li id = "srs"> <b> Drop Course Page  </b> </li>
    <ul>
      <li>  This is a PHP script that requires a user to have admin or student privileges to access a page. If the user doesn't have the appropriate permissions, they will receive an error message and be directed back to the homepage. The script then includes a navigation file, displays a form to select a student and course from the database, and submits the form data to the dropCourseResults.php file for processing. To change the behavior of this script, a programmer can modify the SQL queries used to fetch data from the database or update the HTML code to change the look and feel of the page.
      </li> 
    </ul>
    <br>
    <br><li id = "srs"> <b> Drop Course Page  </b> </li>
    <ul>
      <li>  This PHP script is used to delete a course registration record from the database. To modify it, the computer scientist can change the names of the variables passed in through the $_POST array, or modify the SQL query if needed. They can also add additional error handling or success messages if necessary.
      </li> 
    </ul>
    <br>
    <br><li id = "srs"> <b> User Page  </b> </li>
    <ul>
      <li>  This is a web page that checks if the user accessing it is an admin or not. If the user is not an admin, it will display an "Access Denied" message and exit. To change this page, you can modify the validation conditions in the if statement, the HTML content of the page, and the form action and method to suit your needs. Additionally, the page includes a navigation and footer PHP file that can be customized to your preference.
      </li> 
    </ul>
    <br>
    <br><li id = "srs"> <b> New Student Page  </b> </li>
    <ul>
      <li>  This PHP script inserts a new student into the database. To modify it, you can change the values of the $first_name, $last_name, $email, $major, and $year variables to the desired values. You can also modify the SQL query in $stmt to suit your needs, such as changing the table or columns being inserted into. Finally, ensure that the database connection details in config.php are correct.
      </li> 
    </ul>
    <br>
    <br><li id = "srs"> <b> Students Page  </b> </li>
    <ul>
      <li>  This is a simple PHP page that displays a table of students and their information. To modify the data displayed in the table, modify the SELECT statement in the PHP code to query the desired data from the database. To change the appearance of the table or page, modify the HTML and CSS code accordingly.
      </li> 
    </ul>
    <br>
    <br><li id = "srs"> <b> Students Registered in Course Page  </b> </li>
    <ul>
      <li>  This is a PHP script that displays a table of students registered in a specific course. It first checks if the user is an admin or instructor, and if not, it denies access. To change the script, you can modify the SQL query to retrieve different information from the database or change the HTML and CSS to change the layout and styling of the page. You can also modify the access control logic to restrict or allow access to different users or roles.
      </li> 
    </ul>
    <br>
    <br><li id = "srs"> <b> Timeout Page  </b> </li>
    <ul>
      <li>  This PHP code starts a session and checks if the user is logged in and if their session has expired. If the session has expired, it will unset and destroy the session and redirect the user to the login page. The current user's username is also stored in the $username variable. To make changes to this code, one could adjust the session timeout duration or modify the redirection to a different page.
      </li> 
    </ul>
    <br>
    <br><li id = "srs"> <b> User Manual  </b> </li>
    <ul>
      <li>  To change the website, navigate to the directory where the website files are stored and locate the file timeout.php, which contains additional code that is not displayed here. After modifying the desired sections of timeout.php, save the changes and refresh the website to reflect the updates. To modify the content displayed on each page, locate the corresponding section in the HTML file and edit the text within the tags, such as <h2> for section headers and <p> for paragraphs. The website also includes a navigation menu that can be edited by modifying the links and corresponding anchor tags. Remember to save any changes made and test the website to ensure that it is functioning as intended.
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


      <li> restrictEmailInput(input): </li>
      <ul> <li>     Restricts input values to only include letters, numbers, '@' and '.' characters. Validates if the input value matches the regular expression pattern for a valid email address. </li> </ul>

      <li> validateEnrollStudentForm() </li>
      <ul> <li>     Retrieves input fields for email, first name, last name, and major.
    Validates if all inputs are valid using the restrictEmailInput and restrictNameInput functions. </li> </ul>

      <li> alidateAddInstructorForm() </li>
      <ul> <li> Retrieves input fields for email, first name, last name, and department.
Validates if all inputs are valid using the restrictEmailInput and restrictNameInput functions. </li> </ul>

      <li> restrictUserNameInput(input, error_id): </li>
      <ul> <li>     Validates if the input value matches the regular expression pattern for valid user types (student, instructor, admin).
    Displays an error message if the input value is invalid. </li> </ul>

      <li> validateAcceptUserForm(): </li>
      <ul> <li>     Retrieves input field for username.
    Validates if the input is a valid user type using the restrictUserNameInput function. </li> </ul>


    </ul>
  </ul>
  </div>
    <?php include 'footer.php'; ?>
  </body>
</html>