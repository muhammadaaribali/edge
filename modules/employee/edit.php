<?php

include("../../config/db.php");
include("../../includes/header.php");
$id=$_GET['id'];


$result=$conn->query("SELECT e.employee_id, e.name, e.email, e.phone, e.department_id, e.role_id, d.department_name, r.role_name
    FROM Employee e
    LEFT JOIN Department d ON e.department_id = d.department_id
    LEFT JOIN Role r ON e.role_id = r.role_id
    WHERE employee_id =$id");

$departments = $conn->query("SELECT * FROM Department");
$roles = $conn->query("SELECT * FROM Role");

/*

$row = [
  "employee_id" => 5,
  "name" => "Ali",
  "email" => "ali@gmail.com",
  "phone" => "0300"
];

*/

$row=$result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Employee</title>
</head>
<body>

<form action="../../actions/employee_action.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $row['employee_id']; ?>">
    <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
    <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>

     <select name="department_id">
        <option value="">Select Department</option>
        <?php while($d=$departments->fetch_assoc()){
            ?>
            <option value="<?php echo $d['department_id'];?>">
                <?php if($d['department_id'] == $row['department_id']) echo "selected>"; ?>
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
                <?php if($r['role_id'] == $row['role_id']) echo "selected>"; ?>

                <?php echo $r['role_name']; ?>
            
            </option>
        <?php } ?>
    </select><br><br>


    <button type="submit" name="update_employee">Update</button>

</form>
    
</body>
</html>

<?php include("../../includes/footer.php"); ?>