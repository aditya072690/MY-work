<?php include('server.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>user to registration system using php and mysql</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form method="post" action="register.php">
        <?php include('erros.php');?>
        <div class="input-grop">
            <label>Username</label>
            <input type="text" name="username"value="<?php echo $username;?>">
        </div>
        <div class="input-grop">
            <label>Email</label>
            <input type="text" name="email"value="<?php echo $email;?>">
        </div>
        <div class="input-grop">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-grop">
            <label>Confirm Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-grop">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>
</body>
</html>