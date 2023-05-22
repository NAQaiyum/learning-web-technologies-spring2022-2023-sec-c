function loadUsers() {
    // Create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Set the URL and method for the request
    xhr.open('GET', '../controllers/bikeajaxcontrol.php');


    // Define a function to handle the response
    xhr.onload = function () {
        if (xhr.status === 200 && xhr.readyState === 4) {
            let parking = JSON.parse(xhr.response);
            let html = '';
            html += '<tr>';
            html += '<td><h3>Type</h3></td>';
            html += '<td><h3>Time</h3></td>';
            html += '<td>';
            html += '</tr>';



            for (let i = 0; i < parking.length; i++) {
                html += '<tr>';
                html += '<td>' + parking[i].schedule + '</td>';
                html += '<td>' + parking[i].time + '</td>';
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

