function loadUsersGrades() {
    // Create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Set the URL and method for the request
    xhr.open('GET', '../controllers/allGrade.php', true);


    // Define a function to handle the response
    xhr.onload = function () {
        if (xhr.status === 200 && xhr.readyState === 4) {
            let grades = JSON.parse(xhr.response);
            let html = '';
            html += '<button onclick="removeGrade()">Hide Grades</button>';
            html += '<tr>';
            html += '<td><h3>Username</h3></td>';
            html += '<td><h3>Marks</h3></td>';
            html += '<td><h3>Course</h3></td>';
            html += '<td>';
            html += '</tr>';
            for (let i = 0; i < grades.length; i++) {
                html += '<tr>';
                html += '<td>' + grades[i].username + '</td>';
                html += '<td>' + grades[i].marks + '</td>';
                html += '<td>' + grades[i].course + '</td>';
                html += '</tr>';
            }
            document.getElementById('gradeData').innerHTML = html;

        } else {
            // There was an error, handle it here
            console.log('Error: ' + xhr.status);
        }
    };

    // Send the request
    xhr.send();
}

function removeGrade() {
    document.getElementById('gradeData').innerHTML = '';
}