<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$email = htmlspecialchars(trim($_POST['email']));
	$name = htmlspecialchars(trim($_POST['name']));
	$sub = htmlspecialchars(trim($_POST["sub"]));
	$message = htmlspecialchars(trim($_POST['message']));
	$error = '';
	if(!$name) {$error .= 'Name is required. ';}
	if(!$email) {$error .= 'Email is required. ';}
	if(!$sub) {$error .= 'Subject is required. ';}
	if(!$message || strlen($message) < 1) {$error .= 'Message is required. ';}
	if(!$error) {
		$address = "info@anoft.com";
		$mes = "Email: ".$email."\n\nName: ".$name."\n\nSubject: " .$sub."\n\nMessage: ".$message."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nReply-To:$email\r\nFrom:$name <contact>");
		if($send) {echo 'MESSAGE HAS BEEN SENT';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>