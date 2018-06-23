<?php
if( isset($_POST['email']) )
{
	$to = 'info@appniq.com'; // Replace with your email
	
	$subject = 'Subscribe request for Newsletter';
	$message = 'Email: '. $_POST['email']."\n";
	$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	
	mail($to, $subject, $message, $headers);		
}
?>