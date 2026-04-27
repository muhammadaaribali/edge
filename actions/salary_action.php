<?php
include("../config/db.php");

if(isset($_POST['employee_id'])){

    $employee_id=$_POST['employee_id'];
    $amount=$_POST['amount'];
    $bonus = $_POST['bonus'] ?: 0;
    $deductions = $_POST['deductions'] ?: 0;
    $date = $_POST['effective_date'];

    $sql = "INSERT INTO Salary (employee_id, amount, bonus, deductions, effective_date)
            VALUES ('$employee_id', '$amount', '$bonus', '$deductions', '$date')";

    if($conn->query($sql)){
        header("Location: ../modules/salary/view.php");
    } else {
        echo "Error: " . $conn->error;
    }
}