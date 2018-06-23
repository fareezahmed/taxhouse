<?php




$email=$_POST['samplees'];


$to='info@appniq.com';

$headers = 'From: '.$email."\r\n" .
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
$subject = 'Subscribe request for Newsletter';


$body.='Email: '.$email."\n";

	
if(mail($to, $subject, $body, $headers)) {
	die('Subscription complete.');
} else {
	die('Error: Mail failed');
}

?>