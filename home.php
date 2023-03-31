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
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <?php include 'navigation.php'; ?>

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
  </body>
</html>