<?php
include('PHPMailer.php');
echo "<script>alert('Send Email to Conference Invitees');</script>";
$mail = new PHPMailer();  
try {
	$mail->SMTPSecure = "tls";  
	$mail->Host='smtp.gmail.com';  
	$mail->Port=587;   
	$mail->Username = 'raophpmailer@gmail.com';
	$mail->Password = 'Ganesha_789';
	$mail->SMTPKeepAlive = true;  
	$mail->Mailer = "smtp"; 
	$mail->IsSMTP(); // telling the class to use SMTP  
	$mail->SMTPAuth   = true;                  // enable SMTP authentication  
    //Recipients
    $mail->setFrom('raophpmailer@gmail.com','NCCC 2019 Committee ');
    $mail->addAddress('reshma13an@gmail.com', 'Reshma');     // 
    //Content
    $mail->isHTML(true);                                  // Set email 
	//$mail->Subject = $_POST["subject"];
    //$mail->Body    = $_POST["content"];
	    $mail->Subject = "Hi Reshma saif!";
		$mail->Body = "Welcome to NCCC Conference!
we cordially invite MR.Mohamed zahid for the NCCC confferece dated on 26-27th of april";
    $mail->send();
    
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

