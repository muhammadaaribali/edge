<?php
include("../config/db.php");

if(isset($_POST['add_leave'])){

    $employee_id = $_POST['employee_id'];
    $start = $_POST['start_date'];
    $end = $_POST['end_date'];
    $type = $_POST['leave_type'];
    $status = $_POST['status'];

    $sql = "INSERT INTO LeaveRecord (employee_id, start_date, end_date, leave_type, status)
            VALUES ('$employee_id', '$start', '$end', '$type', '$status')";

    if($conn->query($sql)){
        header("Location: ../modules/leave/view.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>