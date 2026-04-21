<?php
session_start();

//if user is not logged in then send back him to login page
if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit();
}

?>