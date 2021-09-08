<?php
	require_once('PHPMailer/PHPMailerAutoload.php');
	
	$mail= new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = '465';
	$mail->isHTML();
	$mail->Username = 'nikitasamtrai@gmail.com';
	$mail->Password = 'nikita03@&&$';
	$mail->setForm('no-reply@domain.com');
	$mail->Subject = 'hello world';
	$mail->Body = 'demo mail';
	$mail->AddAddress('diksharamnani1@gmail.com');
	
	$mail->Send();
	
	?>
	