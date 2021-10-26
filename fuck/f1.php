<html>
    <head>
<title> Likes </title> </head> 
<body><button onclick="Likes()"> LIKE </button><br>
<?php 
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "for_lectures"; 
$con = mysqli_connect($servername,$username,$password,$dbname); 
$sql = "select likes from likes;"; 
$result = mysqli_query($con, $sql); 
echo "<p id='demo'> Number of Likes: " .mysqli_fetch_assoc($re sult)["likes"]. "</p>"; 
?> 
        <script>
            function Likes()
{var xhr = new XMLHttpRequest(); xhr.open("GET", "likescount.php", true); xhr.send(); 
xhr.onload = function() { 
document.getElementById("demo").innerHTML="Number of Likes : " + this.responseText; 
} } 
</script>
</body>
</html>