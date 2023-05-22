function validateForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var usernameError = document.getElementById("username-error");
    var emailError = document.getElementById("email-error");
    var passwordError = document.getElementById("password-error");
    var isValid = true;
    
    if (username == "") {
        usernameError.innerHTML = "Username cannot be blank.";
        isValid = false;
    } else {
        usernameError.innerHTML = "";
    }
    if(email == ""){
        emailError.innerHTML = "Email cannot be blank.";
        isValid = false;
    } else {
        emailError.innerHTML = "";
    }
    
    if (password == "") {
        passwordError.innerHTML = "Password cannot be blank.";
        isValid = false;
    } else {
        passwordError.innerHTML = "";
    }
    
    return isValid;
}