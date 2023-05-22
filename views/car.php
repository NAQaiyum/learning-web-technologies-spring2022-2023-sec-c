<!DOCTYPE html>
<html>
<head>
	<title>Car</title>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
	<div class="bg">
		<div class="o">
			<?php
	// Include the function from the other PHP file
	require_once('../models/cardb.php') ;
	
	// Call the function to retrieve the user information
	$info = readcar();
	?>

    <center><h1>Car Schedule</h1></center><br><br>
	<table width="80%">
		<tr>
			<td><b>Schedule</b></td>
			<td><b>Time</b></td>
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
	
			</div>
		</div>
</body>
</html>