function loadNot() {
    // Create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Set the URL and method for the request
    xhr.open('GET', '../controllers/NotificationJSON.php', true);


    // Define a function to handle the response
    xhr.onload = function () {
        if (xhr.status === 200 && xhr.readyState === 4) {
            let notification = JSON.parse(xhr.response);
            let html = '';
            html += '<button onclick="removeNot()">Hide</button>';
            html += '<tr>';
            html += '<td><h3>Notice</h3></td>';
            html += '<td><h3>Time</h3></td>';
            html += '<td>';
            html += '</tr>';
            for (let i = 0; i < notification.length; i++) {
                html += '<tr>';
                html += '<td>' + notification[i].notice + '</td>';
                html += '<td>' + notification[i].time + '</td>';
                html += '</tr>';
            }
            document.getElementById('notify').innerHTML = html;

        } else {
            // There was an error, handle it here
            console.log('Error: ' + xhr.status);
        }
    };

    // Send the request
    xhr.send();
}

function removeNot() {
    document.getElementById('notify').innerHTML = '';
}