<?php session_start();

//session is like a temporary memory for each user 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form action="actions/login_action.php" method="POST">
    <input type="text" name="username" placeholder="Usernname" required><br><br>
    <input type="password" name="password" placehoder="Password" required><br><br>

    <button type="submit">Login</button>

</form>
    
</body>
</html>