function validateForm() {
    var subject = document.getElementById("subject").value;
    var section = document.getElementById("section").value;
    var subjectError = document.getElementById("subject-error");
    var sectionError = document.getElementById("section-error");
    var isValid = true;
    
    if (subject == "") {
        subjectError.innerHTML = "Subject cannot be blank.";
        isValid = false;
    } else {
        subjectError.innerHTML = "";
    }
    
    if (section == "") {
        sectionError.innerHTML = "Section cannot be blank.";
        isValid = false;
    } else {
        sectionError.innerHTML = "";
    }
    
    return isValid;
}
