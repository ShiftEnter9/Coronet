<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$phone_no = $_POST['number'];
	$message = $_POST['query/feedback'];
	

	$email_from = 'website@coronet.com';

	$email_subject = 'Query/Feedback';

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";

	$to = "coronet@coronet.in";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);
	header("Location:contact us.html");

?>