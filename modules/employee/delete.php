<?php

include("../../config/db.php");
include("../../includes/header.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="DELETE FROM Employee WHERE employee_id = $id";

    if($conn->query($sql)){
        header("Location: view.php");
    } else{
        echo "Error: " . $conn->error;
    }
}

include("../../includes/footer.php"); ?>