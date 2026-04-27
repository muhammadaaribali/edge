<?php
include("../../config/db.php");
include("../../includes/auth.php");

$result=$conn->query("SELECT e.employee_id, e.name, e.email, e.phone, d.department_name, r.role_name
    FROM Employee e
    LEFT JOIN Department d ON e.department_id = d.department_id
    LEFT JOIN Role r ON e.role_id = r.role_id");
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
        <th>Department</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>

    
    <?php
    //fetch one row at a time
    while($row=$result->fetch_assoc()){ ?>

    <tr>
        <td><?php echo $row['employee_id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['department_name']; ?></td>
        <td><?php echo $row['role_name']; ?></td>
        <td><a href="edit.php?id=<?php echo $row['employee_id']; ?>">Edit</a> |
        <a href="delete.php?id=<?php echo $row['employee_id']; ?>">Delete</a>
        </td>
    </tr>

    <?php } ?>

</table>
    
</body>
</html>
