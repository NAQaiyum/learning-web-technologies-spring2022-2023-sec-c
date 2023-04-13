<!DOCTYPE html>
<html>
<head>
	<title>Car</title>
</head>
<body>
	<?php
	// Include the function from the other PHP file
	require_once('../models/cardb.php') ;

	// Call the function to retrieve the user information
	$info = readcar();
	?>

    <center><h1>Car Prking Schedule</h1></center>
	<table width="60%">
		<tr>
			<td><h1>Schedule</h1></td>
			<td><h1>Time</h1></td>
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

    <br>
    <a href="parking.php">Back</a>
</body>
</html>