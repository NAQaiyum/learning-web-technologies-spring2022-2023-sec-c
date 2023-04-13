<!DOCTYPE html>
<html>
<head>
	<title>Show Sub</title>
</head>
<body>
	<?php
	// Include the function from the other PHP file
	require_once('../models/subdb.php') ;

	// Call the function to retrieve the user information
	$info = readsub();
	?>

    <center><h1>Remaining All Subject & Section</h1></center>
	<table width="30%">
		<tr>
			<td><h1>Name</h1></td>
			<td><h1>Section</h1></td>
			<!-- <th>Course</th> -->
		</tr>
		<?php
		// Loop through each user and display their information in a table row
		if ($info->num_rows > 0) {
			while($row = $info->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["sec"] . "</td>";
				// echo "<td>" . $row["course"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "0 results";
		}
		?>
	</table>

    <br>
    <a href="subreg.php">Back</a>
</body>
</html>