<?php 
session_start();

$username="";
$email="";
$errors=array();

$db =mysqli_connect('localhost','root','','registration');

if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($email)){
        array_push($errors,"email is required");
    }
    if(empty($password_1)){
        array_push($errors,"password is required");
    }
    if($password_1 != $password_2){
        array_push($errors, "The two password do not macth");
    }

    if(count($errors)==0){
        $password=md5($password_1);
        $sql ="INSERT INTO users (username,email,password)
                    values('$username',$email','$password')";
        mysqli_query($db,$sql);
        $_SESSION['username']=$username;
        $_SESSION['success']="you are now logged in";
        header('location: index1.php');
    }

    if(isset($_POST['Login'])){
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
    
        if(empty($username)){
            array_push($errors,"Username is required");
        }
        if(empty($password)){
            array_push($errors,"password is required");
        }

        if (count($errors)==0){
            $password =md5($password);
            $query="SELECT * FROM users WHERE username='$username' AND password='$password' ";
            $result =mysqli_query($db, $query);
            if (mysqli_num_rows($result)==1){
                $_SESSION['username']=$username;
                $_SESSION['success']="you are now logged in";
                header('location: index1.php');
            }else{
                array_push($errors,"Wrong username/password comination");
            }
        }
    }
    
    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location= login.php');
    }
}
?>