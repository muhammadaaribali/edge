
<?php

//means go back to auth and see if the user is loged in or not then further do the thing

include("../../includes/auth.php");
include("../../config/db.php");

$departments=$conn->query("SELECT * FROM Department");
$roles=$conn->query("SELECT * FROM Role");

?>


<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>

<h2>Add Employee</h2>

<form action="../../actions/employee_action.php" method="POST">

<!-- employee details -->
    
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="text" name="phone" placeholder="Phone"><br><br>

    <!-- department details -->

    <select name="department_id">
        <option value="">Select Department</option>
        <?php while($d=$departments->fetch_assoc()){
            ?>

            <!-- this thing written in value will be send to backend when we sumit form as id will be send to backend -->

            <option value="<?php echo $d['department_id'];?>">
                <?php echo $d['department_name']; ?>
            
            </option>
        <?php } ?>
    </select><br><br>
    
    <!-- role details -->
        <select name="role_id">
        <option value="">Select Role</option>
        <?php while($r=$roles->fetch_assoc()){
            ?>
            <option value="<?php echo $r['role_id'];?>">
                <?php echo $r['role_name']; ?>
            
            </option>
        <?php } ?>
    </select><br><br>


    <button type="submit" name="add_employee">Add Employee</button>

</form>

</body>
</html>