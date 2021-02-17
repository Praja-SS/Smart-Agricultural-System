<?php
include("dbconnection.php");
if (isset($_POST))
	{
	
    
    $to_Email = $_POST['email'];
    $subject = "Response from Agricultural Management System";
    $body = $_POST['message'];
	$headers = "From: sender\'s email";

    $to = $to_Email;
	$sql ="UPDATE ares.contact_us SET stat='Replied' WHERE email='$to'";
	mysqli_query($con,$sql);
		if (mail($to_email, $subject, $body, $headers)) {
		echo '<script>alert("Email sent successfully !")</script>';
		echo '<script>window.location.href="feeds.php";</script>';
	} else {
		echo "Email sending failed...";
	}

	}
?>