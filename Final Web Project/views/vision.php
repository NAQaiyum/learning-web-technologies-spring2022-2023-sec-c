<!DOCTYPE html>
<html>
<head>
	<title>Vision</title>
	<link rel="stylesheet" type="text/css" href="../css/vision.css"><br>
</head>
<body>
	<?php
	// Include the function from the other PHP file
	require_once('../models/visiondb.php') ;

	// Call the function to retrieve the user information
	$info = readvis();
	?>

    <center><h1>Vision</h1></center><br><br>
	<table width="80%">
		<tr>
			<td><b>Vision</b></td>
			<td><b>Date</b></td>
			<!-- <th>Course</th> -->
		</tr>
		
		<?php
		// Loop through each user and display their information in a table row
		if ($info->num_rows > 0) {
			while($row = $info->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["vision"] . "</td>";
				echo "<td>" . $row["date"] . "</td>";
				// echo "<td>" . $row["course"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "0 results";
		}
		?>
	</table>

    <br><br><br>
    <a href="about.php">Back</a>
</body>
</html>