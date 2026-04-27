<?php
include("includes/auth.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Dashboard</title>
</head>
<body>

<H2>Welcome <?php echo $_SESSION['username']?></H2>

<a href="modules/employee/add.php">Add Employee</a><br><br>
<a href="modules/employee/view.php">View Employees</a><br><br>
<a href="modules/attendance/add.php">Mark Attendance</a><br><br>
<a href="modules/attendance/view.php">View Attendance</a><br><br>

<a href="logout.php">Logout</a>
    
</body>
</html>