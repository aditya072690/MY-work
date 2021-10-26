<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","contact");
  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['Name']);
$Email = $con->real_escape_string($_POST['Email']);
$Phone = $con->real_escape_string($_POST['number']);
$comments = $con->real_escape_string($_POST['text']);
  //query to insert the variable data into the database
$sql="INSERT INTO contact (Name, Email, phone, comments) VALUES ('".$Name."','".$Email."', '".$Phone."', '".$comments."')";
  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "Thank you! We will get in touch with you soon";
   header( "refresh:3;url=contact.php" );
}
?>