<?php
include("../..config/db.php");
include("../../includes/auth.php");

$result=$conn->query("SELECT * FROM Employee");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Employee</title>
</head>
<body>

<h2>Employees List</h2>

<a href="add.php">Add New Employee</a>

<br><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    
    <?php
    //fetch one row at a time
    while($row=$result->fetch_assoc()){ ?>

    <tr>
        <td><?php echo $row['employee_id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
    </tr>

    <?php } ?>

</table>
    
</body>
</html>
