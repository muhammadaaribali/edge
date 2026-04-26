<?php

include("../config/db.php");
if(isset($_POST['add_employee'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO Employee (name, email, phone) 
    VALUES ('$name', '$email', '$phone')";

    if ($conn->query($sql)){
        header("Location: ../modules/employee/view.php");
    } else {
        echo "Error: " . $conn->error;
    }
}

if(isset($_POST['update_employee'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql="UPDATE Employee 
            SET name='$name', email='$email', phone='$phone'
            WHERE employee_id=$id";

    if($conn->query($sql)) {
        header("Location: ../modules/employee/view.php");
    } else {
        echo "Error: " . $conn->error;
    }


}
?>