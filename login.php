<?php 
require_once("banco-usuario.php");
require_once("logica-usuario.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$usuario = buscaUsuario($conexao, $email, $senha);

if($usuario == null){
	$_SESSION["danger"] = "Usuario ou senha inválido! Tente novamente.";
	header("Location: index.php");
}else{
	logaUsuario($email);
	$_SESSION["success"] = "Usuário Logado.";
	header("Location: index.php");
}
die();