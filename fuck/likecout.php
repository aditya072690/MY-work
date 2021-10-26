<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "like";
$con = mysqli_connect($servername,$username,$password,$dbname); 
$sql = "update likes set likes = likes + 1;";
mysqli_query($con, $sql);
$sql = "select likes from likes;"; 
$result = mysqli_query($con, $sql);
echo mysqli_fetch_assoc($result)["likes"]; ?>