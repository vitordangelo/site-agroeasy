<?php

if($_POST)
{
	$to_email = "contato@agroeasy.agr.br"; //Recipient email, Replace with own email here
	
	//Sanitize input data using PHP filter_var().
	$user_name		= filter_var($_POST["name"], FILTER_SANITIZE_STRING);
	$user_email		= filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$subject		= filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
	$message		= filter_var($_POST["message"], FILTER_SANITIZE_STRING);
	$telefone		= filter_var($_POST["telefone"], FILTER_SANITIZE_STRING);
	
	//email body
	$message_body = $message."\n\n".$user_name."\nEmail: ".$user_email."\nTelefone: ".$telefone;
	
	//proceed with PHP email.
	$headers = 'From: '.$user_name.'' . "\n" .
	$headers = "Content-type: text/plain; charset=utf-8". "\n".
	'Reply-To: '.$user_email.'' ."\n" .
	'X-Mailer: PHP/' . phpversion();
	
	$send_mail = mail($to_email, $subject, $message_body, $headers, "-r".$to_email);

	header("location:index.php?info=ok");
	
}
?>