<?php
if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['number']) && !empty($_POST['number']))){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['number'];
	$message = $_POST['text'];
	
	$to = "adityachauhan2110@gmail.com";
	$headers = "From : " . $email;
	
	if( mail($to, $subject, $message, $headers)){
		echo "E-Mail Sent successfully, we will get back to you soon.";
	}
}
?>