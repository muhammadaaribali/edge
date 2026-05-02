<?php include("config/db.php"); 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="center-screen">
    <div class="glass-card">
        <h2>Login</h2>

        <form action="actions/login_action.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit" name="login">Login</button>
        </form>
    </div>
</div>

</body>
</html>