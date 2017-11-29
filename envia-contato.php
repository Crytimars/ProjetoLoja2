<?php
session_start();

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("vendor/PHPMailer/PHPMailerAutoload.php");

$mail= new PHPMailer();

$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPSecure='tls';
$mail->SMTPAuth=true;
$mail->Username="rafinharsaa@gmail.com";
$mail->Password="gaara.27";


$mail->setFrom("rafinharsaa@gmail.com","Alura Curso PHP e MySQL");
$mail->addAddress("rafinharsaa@gmail.com");
$mail->Subject="Email de contato da loja";

$mail->msgHTML("<html> de:{$nome}<br/> email:{$email}<br/>mensagem:{$mensagem}</html>");
$mail->AltBody="de:{$nome}\nemail:{$email}\nmensagem:{$mensagem}";

if($mail->send()){
	$_SESSION["success"] = "Mensagem enviada com sucesso";
	header("Location: index.php");
}else{
	$_SESSION["danger"] = "Erro no envio da mensagem " . $mail->ErrorInfo;
	header("Location: contato.php");
}
die();