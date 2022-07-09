<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = "Contato - " . $name;

$myEmail = "projetos@athosarquitetura.net";

$headers  = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

$body .= "Formulário de contato enviado do site\n";
$body .= "Nome: $name\n";
$body .= "E-mail: $email\n";
$body .= "Celular: $phone\n";
$body .= $message;

$email_to = 'projetos@athosarquitetura.net';

$status = mail($email_to, $subject, $body, $headers);

if ($status) {
  $response = "E-mail enviado com sucesso!";
} else {
  $response = "Falha ao enviar o e-mail.";
}

header("Location: contact.php?status={$response}");
exit;
?>