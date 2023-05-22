<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Admin Portal</title>
</head>
<body>
    <div class="bg">
        <div class="o">
        <h1>Welcome Home Admin</h1> <br> <br>
        
        


        <!-- =========================Alvi Start================================================ -->
        <!-- All students Information -->
        <button onclick="loadUsers()">Show All students Information</button>
        <table style="color:white" width="20%">
		<tbody id="info-data">
            
            </tbody>
        </table>
        <!-- All students Information -->
        
        
        <!-- All students Grades -->
        <button onclick="loadUsersGrades()">Show All students Grades</button>
        <table style="color:white" width="20%">
		<tbody id="gradeData">
            
            </tbody>
        </table>
        <!-- All students Grades -->
        
        <a href="findUs.php">Find Us</a><br> <br>
        <a href="adminAnnounce.php">Announce</a>
        <a href="adminMarks.php">Give marks</a>
        <a href="add-fees.php">Give fees</a><br> <br> 
        <!-- =========================Alvi End================================================ -->
        
        <!-- =========================Nayeem Start================================================ -->
        <a href="about.php">Update About Info</a>
        <a href="terms.php">Update Terms & Conditions</a>
        <a href="parking.php">Update Parking Schedule</a> <br> <br>
        <a href="thesis.php">Confirm Thesis Applicatios</a>
        <a href="subreg.php">Confirm Subject Registration</a><br> <br>
        <!-- =========================Nayeem End================================================ -->
        
        
        
        
        <!-- =========================Shafina Start================================================ -->
        
        <!-- =========================Shafina End================================================ -->
        
        <a href="../controllers/logout.php">Log Out</a>
    </div>
</div>


<script src="../Asset/loadUserData.js"></script>
<script src="../Asset/loadUserGrade.js"></script>

</body>
</html>
<!-- <button onclick="loadUsers()">Load Data</button>
<table style="color:#fff">
    <thead>
    <tr>
        <th>Username</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody id="info-data">
    
    </tbody>
</table> -->