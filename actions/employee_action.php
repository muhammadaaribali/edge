<?php

include("../config/db.php");
if(isset($_POST['add_employee'])){

    $department_id=$_POST['department_id'];
    $role_id=$_POST['role_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO Employee (name, email,phone, department_id, role_id)
        VALUES ('$name', '$email', '$phone', '$department_id', '$role_id')";

    if ($conn->query($sql)){
        header("Location: ../modules/employee/view.php");
    } else {
        echo "Error: " . $conn->error;
    }
}

if(isset($_POST['update_employee'])){

    $department_id=$_POST['department_id'];
    $role_id=$_POST['role_id'];
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql="UPDATE Employee 
            SET name='$name', email='$email', phone='$phone',department_id='$department_id',role_id='$role_id'
            WHERE employee_id=$id";

    if($conn->query($sql)) {
        header("Location: ../modules/employee/view.php");
    } else {
        echo "Error: " . $conn->error;
    }


}
?>