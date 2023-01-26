function restrictNameInput(input) {
    input.value = input.value.replace(/[^a-zA-Z]/g, "");
}

function restrictEmailInput(input) {
    input.value = input.value.replace(/[^a-zA-Z0-9@.]/g, "");
}

function validateForm() {
    var selects = document.querySelectorAll("select");
    for (var i = 0; i < selects.length; i++) {
        if (selects[i].value == "") {
            alert("Please select one from all the options");
            return false;
        }
    }
    return true;
}