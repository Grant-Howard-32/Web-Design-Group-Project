

function updateTimes(){
    const course_day = document.getElementById("days");

    if (course_day.value == ""){
        document.getElementById("label-times-mwf").style.display = "none";
        document.getElementById("times-mwf").style.display = "none";
        document.getElementById("label-times-tth").style.display = "none";
        document.getElementById("times-tth").style.display = "none";
        document.getElementById("label-times-day").style.display = "none";
        document.getElementById("times-day").style.display = "none";
    }

    else if (course_day.value == "mwf") {
        document.getElementById("label-times-mwf").style.display = "contents";
        document.getElementById("times-mwf").style.display = "block";
        document.getElementById("label-times-tth").style.display = "none";
        document.getElementById("times-tth").style.display = "none";
        document.getElementById("label-times-day").style.display = "none";
        document.getElementById("times-day").style.display = "none";
    }
    else if (course_day.value == "tth") {
        document.getElementById("label-times-mwf").style.display = "none";
        document.getElementById("times-mwf").style.display = "none";
        document.getElementById("label-times-tth").style.display = "contents";
        document.getElementById("times-tth").style.display = "block";
        document.getElementById("label-times-day").style.display = "none";
        document.getElementById("times-day").style.display = "none";
    }
    else if (course_day.value == "mon" || course_day.value == "tue" || course_day.value == "wed" || course_day.value == "thu") {
        document.getElementById("label-times-mwf").style.display = "none";
        document.getElementById("times-mwf").style.display = "none";
        document.getElementById("label-times-tth").style.display = "none";
        document.getElementById("times-tth").style.display = "none";
        document.getElementById("label-times-day").style.display = "contents";
        document.getElementById("times-day").style.display = "block";
    }
}

function validateAddCourseForm() {
    const year = document.getElementById("year");
    const course_prefix = document.getElementById("course_prefix");
    const course_number = document.getElementById("course_number");
    const course_section = document.getElementById("course_section");
    const course_room = document.getElementById("course_room");
    const credit_hours = document.getElementById("credit_hours");
    const instructor_first_name = document.getElementById("instructor_first_name");
    const instructor_last_name = document.getElementById("instructor_last_name");
    const enrollment_cap = document.getElementById("enrollment_cap");

    if (isNaN(year.value)) {
        alert("Year must be a number");
        year.focus()
        return false;
    }
    if (year.value < 2023 || year.value > 9999) {
        alert("Year must be after 2022");
        year.focus()
        return false;
    }

    if (!/^[A-Z]{3,4}$/.test(course_prefix.value)) {
        alert("Course Prefix must be 3 or 4 uppercase letters");
        course_prefix.focus();
        return false;
    }

    if (course_number.value < 1 || course_number.value > 499) {
        alert("Course Number Must be Between 001 and 499");
        course_number.focus()
        return false;
    }

    if (course_section.value < 1 || course_section.value > 99) {
        alert("Course Section Number Must be Between 1 and 99");
        course_section.focus()
        return false;
    }
    if (course_section.value.toString().length < 2) {
        alert("Course Section Number Must be Two Digits");
        course_section.focus()
        return false;
    }

    //Characters, Space, 2-3 Digits, Optional Character
    if (!/^[A-Za-z0-9]+\s[0-9]{2,3}[A-Za-z]?$/.test(course_room.value)) {
        alert("Please enter a valid room number");
        course_room.focus();
        return false;
    }

    if (credit_hours.value < 1 || credit_hours.value > 4) {
        alert("Credit Hours Must be Between 0 and 4");
        credit_hours.focus()
        return false;
    }

    if (!/^[a-zA-Z0-9 ]*$/.test(instructor_first_name.value)) {
        alert("Please enter a valid First Name");
        instructor_first_name.focus();
        return false;
    }
    if (!/^[a-zA-Z0-9 ]*$/.test(instructor_last_name.value)) {
        alert("Please enter a valid Last Name");
        instructor_last_name.focus();
        return false;
    }

    if (enrollment_cap.value < 1 || enrollment_cap.value > 99) {
        alert("Enrollment Cap Must be Between 1 and 99");
        enrollment_cap.focus()
        return false;
    }
    if (enrollment_cap.value.toString().length < 2) {
        alert("Enrollment Cap Must be Two Digits");
        enrollment_cap.focus()
        return false;
    }

    alert(
        "Semester: " + document.getElementById("semester").value  + "\n" +
        "Year: " + year.value  + "\n" +
        "Course Prefix: " + course_prefix.value  + "\n" +
        "Course Number: " + course_number.value  + "\n" +
        "Course Section: " + course_section.value + "\n" +
        "Course Name: " + document.getElementById("course_name").value  + "\n" +
        "Course Room: " + course_room.value + "\n" +
        "Days Offered: " + document.getElementById("days_offered").value  + "\n" +
        "Time: " + document.getElementById("time").value  + "\n" +
        "Credit Hours: " + credit_hours.value + "\n" +
        "Instructor First Name: " + instructor_first_name.value + "\n" +
        "Instructor Last Name: " + instructor_last_name.value  + "\n" + 
        "Enrollment Cap: " + enrollment_cap.value + "\n"
    );
    
    return true;
}

function validateRegisterDropCourseForm() {
    const student_first_name = document.getElementById("student_first_name");
    const student_last_name = document.getElementById("student_last_name");
    const year = document.getElementById("year");
    const course_prefix = document.getElementById("course_prefix");
    const course_number = document.getElementById("course_number");
    const course_section = document.getElementById("course_section");

    if (!/^[a-zA-Z0-9 ]*$/.test(student_first_name.value)) {
        alert("Please enter a valid First Name");
        student_first_name.focus();
        return false;
    }

    if (!/^[a-zA-Z0-9 ]*$/.test(student_last_name.value)) {
        alert("Please enter a valid Last Name");
        student_last_name.focus();
        return false;
    }

    if (isNaN(year.value)) {
        alert("Year must be a number");
        year.focus()
        return false;
    }
    if (year.value < 2023 || year.value > 9999) {
        alert("Year must be after 2022");
        year.focus()
        return false;
    }

    if (!/^[A-Z]{3,4}$/.test(course_prefix.value)) {
        alert("Course Prefix must be 3 or 4 uppercase letters");
        course_prefix.focus();
        return false;
    }

    if (course_number.value < 1 || course_number.value > 499) {
        alert("Course Number Must be Between 001 and 499");
        course_number.focus()
        return false;
    }

    if (course_section.value < 1 || course_section.value > 99) {
        alert("Course Section Number Must be Between 1 and 99");
        course_section.focus()
        return false;
    }
    if (course_section.value.toString().length < 2) {
        alert("Course Section Number Must be Two Digits");
        course_section.focus()
        return false;
    }

    alert(
        "Student First Name: " + student_first_name.value + "\n" +
        "Student Last Name: " + student_last_name.value  + "\n" + 
        "Semester: " + document.getElementById("semester").value  + "\n" +
        "Year: " + year.value  + "\n" +
        "Course Prefix: " + course_prefix.value  + "\n" +
        "Course Number: " + course_number.value  + "\n" +
        "Course Section: " + course_section.value
    );

    return true;
}


function restrictNameInput(input, error_id) {
    
    const regex = /[^a-zA-Z\s]/g;
    const error = document.getElementById(error_id);
    if (regex.test(input.value)) {
        input.value = "";
        error.innerHTML = 'Name can only contain letters and spaces.';
        error.classList.add("error");
        return false;
    } else {
        error.textContent = "";
        input.classList.remove("error");
        return true;
    }
    }

function restrictEmailInput(input) {
    input.value = input.value.replace(/[^a-zA-Z0-9@.]/g, "");
    const regex = /^[a-zA-Z]{3}[0-9]{3}@marietta.edu$/;
    const error = document.getElementById("email_error");
    if (!regex.test(input.value)) {
        // Invalid email address
        input.value = "";
        const exampleEmail = "abc123@marietta.edu";
        error.innerHTML = `Invalid email address!<br>Ex. ${exampleEmail}`;
        error.classList.add("error");
        return false;
    }   else {
        error.textContent = "";
        error.classList.remove("error");
        return true;
    }
    }

function validateEnrollStudentForm() {
    const email_input = document.getElementById("email");
    const first_name_input = document.getElementById("first_name")
    const last_name_input = document.getElementById("last_name")
    const major = document.getElementById("major")

    const email_flag = restrictEmailInput(email_input);
    const first_name_flag = restrictNameInput(first_name_input, "first_name_error");
    const last_name_flag = restrictNameInput(last_name_input, "last_name_error");
    const major_flag = restrictNameInput(major, "major_error");

    if (!email_flag || !first_name_flag || !last_name_flag || !major_flag) {
        return false;
    }

    alert(
        "Student First Name: " + first_name_input.value + "\n" +
        "Student Last Name: " + last_name_input.value  + "\n" + 
        "Email: " + email_input.value  + "\n" +
        "Major: " + major.value
    );

    return true;
    }

function validateAddInstructorForm() {
    const email_input = document.getElementById("email");
    const first_name_input = document.getElementById("first_name")
    const last_name_input = document.getElementById("last_name")
    const department = document.getElementById("department")

    const email_flag = restrictEmailInput(email_input);
    const first_name_flag = restrictNameInput(first_name_input, "first_name_error");
    const last_name_flag = restrictNameInput(last_name_input, "last_name_error");
    const department_flag = restrictNameInput(department, "department_error");

    if (!email_flag || !first_name_flag || !last_name_flag || !department_flag) {
        return false;
    }

    alert(
        "Instructor First Name: " + first_name_input.value + "\n" +
        "Instructor Last Name: " + last_name_input.value  + "\n" + 
        "Email: " + email_input.value  + "\n" +
        "Department: " + department.value
    );

    return true;
    }
