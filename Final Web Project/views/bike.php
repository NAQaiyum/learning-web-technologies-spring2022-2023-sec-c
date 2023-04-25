<!DOCTYPE html>
<html>
<head>
	<title>Bike</title>
	<link rel="stylesheet" type="text/css" href="../css/bike.css"><br>
</head>
<body>
	<?php
	// Include the function from the other PHP file
	require_once('../models/bikedb.php') ;

	// Call the function to retrieve the user information
	$info = readbike();
	?>

    <center><h1>Bike Schedule</h1></center><br><br>
	<table width="80%">
		<tr>
			<td><b>Schedule</b></td>
			<td><b>Time</b></td>
			<!-- <th>Course</th> -->
		</tr>
		
		<?php
		// Loop through each user and display their information in a table row
		if ($info->num_rows > 0) {
			while($row = $info->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["schedule"] . "</td>";
				echo "<td>" . $row["time"] . "</td>";
				// echo "<td>" . $row["course"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "0 results";
		}
		?>
	</table>

    <br><br><br>
    <a href="parking.php">Back</a>
</body>
</html>