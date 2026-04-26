
<?php

//means go back to auth and see if the user is loged in or not then further do the thing

include("../../includes/auth.php"); ?>


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