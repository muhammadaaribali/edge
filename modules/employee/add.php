<?php include("../../includes/auth.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>

<h2>Add Employee</h2>

<form action="../../actions/employee_action.php" method="POST">
    
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="text" name="phone" placeholder="Phone"><br><br>

    <button type="submit" name="add_employee">Add Employee</button>

</form>

</body>
</html>