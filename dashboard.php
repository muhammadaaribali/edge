<?php
include("includes/auth.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Dashboard</title>
</head>
<body>

<H2>Welcome <?php echo $_SESSION['username']?></H2>

<a href="logout.php">Logout</a>
    
</body>
</html>