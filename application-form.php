<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$phone_no = $_POST['number'];
	$message = $_POST['about'];
	$document = $_POST['file'];
	$position = $_POST['applied_for'];
	

	$email_from = 'website@coronet.com';

	$email_subject = 'Application-form';

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n".
							"User Resume/CV: $document.\n".
								"User Applied for: $position.\n";

	$to = "coronet@coronet.in";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);
	header("Location:career.html");

?>