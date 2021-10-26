<?php include('sever.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>user to registration system using php and mysql</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form method="post" action="Login.php">
        <div class="input-grop">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-grop">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-grop">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
           Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>
</body>
</html>