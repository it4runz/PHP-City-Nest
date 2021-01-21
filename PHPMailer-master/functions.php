<?php

function sendmail($to_email, $to_name, $subject, $body) {
	require 'PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->SMTPDebug = 0;                              // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'cryptocurrencytradingwg@gmail.com';                 // SMTP username
	$mail->Password = 'Cryptoworld@123';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('cryptotradingwg@gmail.com', 'CITY NEST');
	$mail->addAddress($to_email, $to_name);     // Add a recipient

	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = $subject;
	$mail->Body    = $body;

	if(!$mail->send()) {
		return false;
	} else {
		return true;
	}
}

function generateRandomString($length = 10) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}
