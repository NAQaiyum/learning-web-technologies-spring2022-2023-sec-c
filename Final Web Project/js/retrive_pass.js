function validateForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    

    var username_error = document.getElementById("username_error");
    var email_error = document.getElementById("email_error");


    var valid = true;

    if (username == "") {
        username_error.innerHTML = "Username cannot be blank";
        valid = false;
    } else {
        username_error.innerHTML = "";
    }

    if (email == "") {
        email_error.innerHTML = "Email cannot be blank";
        valid = false;
    } else {
        email_error.innerHTML = "";
    }

    return valid;
}
