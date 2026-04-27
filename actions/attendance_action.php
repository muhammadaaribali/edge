<?php
include("../config/db.php");

if(isset($_POST['add_attendance'])){

    $employee_id = $_POST['employee_id'];
    $date = $_POST['date'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $status = $_POST['status'];

    $sql="INSERT INTO Attendance (employee_id, date, check_in, check_out, status) VALUES ('$employee_id', '$date', '$check_in', '$check_out', '$status')";

    if($conn->query($sql)){
        header("Location: ../modules/attendance/view.php");
    } else{
        echo"Error: " . $conn->error;    
    }
}