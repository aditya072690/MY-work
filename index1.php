<?php include('server.php');
if (empty($_session['username'])){
    header('location=login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>user to registration system using php and mysql</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Home page</h2>
    </div>
   <div class="content">
   <?php if (isset($_session['success'])):?>
    <div class="error succes">
        <?php 
            echo $_session['success'];
            unset($_session['success']);
        ?>
    </div>
   <?php endif?>
   <?php if (isset($_session["username"])):?>
        <p> welcome <strong><?php echo $_session['username'];?></strong></p>
        <p><a href="index1.php?logout='1'" style="coler: red;">Logout</a></p>
   <?php endif ?>
   </div>
</body>
</html>