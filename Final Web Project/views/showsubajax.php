<!DOCTYPE html>
<html>
<head>
	<title>Show all sub</title>
	<link rel="stylesheet" href="../css/showsub.css" />
</head>
<body>
	

	<center><h1>All Sybject & Section</h1></center>
	<button style = "background : skyblue; color: black" onclick="loadUsers()">Subject</button>
	<button style = "background : skyblue; color: black" onclick="removeData()">Hide All</button>
	<table style="color:black" width = "40%">
		
		<tbody id="info-data">
		
		</tbody>
	</table>
		

	<script src="../js/showsubajax.js"></script>
    <br><br><br>

    <a href="subreg.php">Back</a>
</body>
</html>