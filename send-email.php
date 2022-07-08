<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$myEmail = "projetos@athosarquitetura.net";//é necessário informar um e-mail do próprio domínio
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

$body = "Formulário enviado\n";
$body .= "Nome: " . $name . "\n";
$body .= "Email: " . $email . "\n";
$body .= "Celular: " . $phone . "\n";
$body .= "Mensagem: " . $message . "\n";

$email_to = 'projetos@athosarquitetura.net';

$status = mail($email_to, $subject, $corpo, $headers);

if ($status) {
  $response = "E-mail enviado com sucesso!";
} else {
  $response = "Falha ao enviar o e-mail.";
}
?>