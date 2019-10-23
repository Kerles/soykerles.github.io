<?php	
	if(empty($_POST['name_46872']) && strlen($_POST['name_46872']) == 0 || empty($_POST['email_46872']) && strlen($_POST['email_46872']) == 0 || empty($_POST['message_46872']) && strlen($_POST['message_46872']) == 0)
	{
		return false;
	}
	
	$name_46872 = $_POST['name_46872'];
	$email_46872 = $_POST['email_46872'];
	$message_46872 = $_POST['message_46872'];
	
	$to = 'kerles_94@hotmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Mensagem de um site de Blocs.";
	$email_body = "Você recebeu uma nova mensagem. \n\n".
				  "Name_46872: $name_46872 \nEmail_46872: $email_46872 \nMessage_46872: $message_46872 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_46872";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>