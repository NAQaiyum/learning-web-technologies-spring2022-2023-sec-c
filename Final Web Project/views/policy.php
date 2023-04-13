<!DOCTYPE html>
<html>
<head>
	<title>Policy</title>
</head>
<body>
	<?php
	// Include the function from the other PHP file
	require_once('../models/policydb.php') ;

	// Call the function to retrieve the user information
	$info = readpol();
	?>

    <center><h1>Policy</h1></center>
	<table width="60%">
		<tr>
			<td><h1>Policy</h1></td>
			<td><h1>Type</h1></td>
			<!-- <th>Course</th> -->
		</tr>
		<?php
		// Loop through each user and display their information in a table row
		if ($info->num_rows > 0) {
			while($row = $info->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["policy"] . "</td>";
				echo "<td>" . $row["type"] . "</td>";
				// echo "<td>" . $row["course"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "0 results";
		}
		?>
	</table>

    <br>
    <a href="about.php">Back</a>
</body>
</html>