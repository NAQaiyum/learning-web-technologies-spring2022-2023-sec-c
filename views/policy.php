<!DOCTYPE html>
<html>
<head>
	<title>Policy</title>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
	<div class="bg">
		<div class="o">
			<?php
	// Include the function from the other PHP file
	require_once('../models/policydb.php') ;
	
	// Call the function to retrieve the user information
	$info = readpol();
	?>
	
    <center><h1>Policy</h1></center><br><br>
	<table width="80%">
		<tr>
			<td><b>Policy</b></td>
			<td><b>Type</b></td>
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

    <br><br><br>
    <a href="about.php">Back</a>
	
			</div>
		</div>
</body>
</html>