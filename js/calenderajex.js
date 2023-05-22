function loadUsers() {
    // Create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Set the URL and method for the request
    xhr.open('GET', '../controllers/calender_ajexcontrol.php');


    // Define a function to handle the response
    xhr.onload = function () {
        if (xhr.status === 200 && xhr.readyState === 4) {
            let cal= JSON.parse(xhr.response);
            let html = '';
            html += '<tr>';
            html += '<td><h3>Month</h3></td>';
            html += '<td><h3>Date</h3></td>';
            html += '<td><h3>Activites</h3></td>';
            html += '<td>';
            html += '</tr>';



            for (let i = 0; i < cal.length; i++) {
                html += '<tr>';
                html += '<td>' + cal[i].month + '</td>';
                html += '<td>' + cal[i].date + '</td>';
                html += '<td>' + cal[i].activites + '</td>';
                html += '</tr>';
            }
            document.getElementById('info-data').innerHTML = html;

        } else {
            // There was an error, handle it here
            console.log('Error: ' + xhr.status);
        }
    };

    // Send the request
    xhr.send();
}

function removeData() {
    document.getElementById('info-data').innerHTML = '';
}