<nav>
    <div class="logo">
    <a href="login.html">
        <img src="Icons/aperture.svg">
    </a>
    
    </div>
    <span><?php echo 'Hello ' . $_SESSION['display_name']; ?></span>
    <div class="menu">
    <a href="home.php">
        <img src="Icons/home.svg" title="Home">
    </a>
    <?php if ($_SESSION['username'] == 'admin') {
        echo <<<'HTML'
            <div class="dropdown">
                <img src="Icons/user-plus.svg" title="Add Instructor / Enroll Student">
                <div class="dropdown-content">
                    <a href="enrollStudent.php">Enroll Student</a>
                    <a href="addInstructor.php">Add Instructor</a>
                </div>
            </div>
        HTML;
    }?>
    <div class="dropdown">
        <img src="Icons/plus-circle.svg" title="Modify Courses">
        <div class="dropdown-content">
        <?php if ($_SESSION['username'] == 'admin' || $_SESSION['username'] == 'instructor') {
            echo <<<'HTML'
                <a href="addCourse.php">Add Course</a>
            HTML;
        }?>
        <?php if ($_SESSION['username'] == 'admin' || $_SESSION['username'] == 'student') {
            echo <<<'HTML'
                <a href="registerCourse.php">Register Course</a>
            HTML;
        }?>
        <?php if ($_SESSION['username'] == 'admin' || $_SESSION['username'] == 'student') {
            echo <<<'HTML'
                <a href="dropCourse.php">Drop Course</a>
            HTML;
        }?>
        </div>
    </div>
    <div class="dropdown">
        <img src="Icons/calendar.svg" title="Courses and Students">
        <div class="dropdown-content">
        <?php if ($_SESSION['username'] == 'admin') {
            echo <<<'HTML'
                <a href="selectStudent.php">Courses Registered</a>
            HTML;
        }?>
        <?php if ($_SESSION['username'] == 'student') {
            echo <<<'HTML'
                <a href="coursesRegistered.php">Courses Registered</a>
            HTML;
        }?>
        <?php if (($_SESSION['username'] == 'admin') || ($_SESSION['username'] == 'instructor')) {
            echo <<<'HTML'
                <a href="selectCourse.php">Students Registered to Course</a>
            HTML;
        }?>
        <?php if ($_SESSION['username'] == 'admin') {
            echo <<<'HTML'
                <a href="selectInstructor.php">Courses Taught</a>
            HTML;
        }?>
        <?php if ($_SESSION['username'] == 'instructor') {
            echo <<<'HTML'
                <a href="coursesTaught.php">Courses Taught</a>
            HTML;
        }?>
        <?php if ($_SESSION['username'] == 'admin') {
            echo <<<'HTML'
                <a href="selectSemester.php">Students Registered by Semester</a>
            HTML;
        }?>
        </div>
    </div>
    <a href="usermanualv4.php">
        <img src="Icons/paperclip.svg" title="User Manual">
    </a>
    <a href="accountInfo.php">
        <img src="Icons/user.svg" title="Programmer's Manual">
    </a>
    </div>
</nav>