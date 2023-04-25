function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var usernameError = document.getElementById("username-error");
    var passwordError = document.getElementById("password-error");
    var isValid = true;
    
    if (username == "") {
        usernameError.innerHTML = "Username cannot be blank.";
        isValid = false;
    } else {
        usernameError.innerHTML = "";
    }
    
    if (password == "") {
        passwordError.innerHTML = "Password cannot be blank.";
        isValid = false;
    } else {
        passwordError.innerHTML = "";
    }
    
    return isValid;
}
