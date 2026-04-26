<?php

include("../../config/db.php");
$id=$_GET['id'];


$result=$conn->query("SELECT * FROM Employee WHERE employee_id =$id");

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

    <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
    <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>
    
</body>
</html>