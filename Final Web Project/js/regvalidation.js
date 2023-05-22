function validateForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;

    var username_error = document.getElementById("username_error");
    var email_error = document.getElementById("email_error");
    var password_error = document.getElementById("password_error");
    var confirm_password_error = document.getElementById("confirm_password_error");

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

    if (password == "") {
        password_error.innerHTML = "Password cannot be blank";
        valid = false;
    } else {
        password_error.innerHTML = "";
    }

    if (confirm_password == "") {
        confirm_password_error.innerHTML = "Confirm Password cannot be blank";
        valid = false;
    } else if (password != confirm_password) {
        confirm_password_error.innerHTML = "Passwords do not match";
        valid = false;
    } else {
        confirm_password_error.innerHTML = "";
    }

    return valid;
}
