<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <div class="bg">
        <div class="o">
            
			<?php
			// Include the function from the other PHP file
			require_once('../models/coursedb.php') ;
			
			// Call the function to retrieve the user information
			$info = readfirstsemester();
			?>
			
			<center><h1>First_Semester</h1></center><br><br>
			<table width="50%">
				<tr>
					<td><b>Name</b></td>
					<td><b>Code</b></td>
					<!-- <th>Course</th> -->
				</tr>
				
				<?php
				// Loop through each user and display their information in a table row
				if ($info->num_rows > 0) {
					while($row = $info->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row["name"] . "</td>";
						echo "<td>" . $row["code"] . "</td>";
						// echo "<td>" . $row["course"] . "</td>";
						echo "</tr>";
					}
				} else {
					echo "0 results";
				}
				?>
			</table>
			
			<br><br><br>
			<a href="coursedetails.php">Back</a>
        </div>
    </div>
</body>
</html>