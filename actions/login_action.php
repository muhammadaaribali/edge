<?php

session_start();
include("../config/db.php");

//getting useername and passsword from index.php form
//used post method instead of GET becuase username and password is provate

$username= $_POST['username'];
$password= $_POST['password'];

$sql="SELECT * FROM User WHERE username='$username' AND password='$password'";

//result of query operation
$result= $conn->query($sql);

//we are expecting one user per login thats why row==1

if($result->num_rows==1){

//converts database row into associative array
$user=$result->fetch_assoc();

//to rememeber user across pages we create session
$_SESSION['user_id']=$user['user_id'];
$_SESSION['username']=$user['username'];

//redirect to next page
header("Location: ../dashboard.php");
}
else{
    echo "invalid username and password";
}

