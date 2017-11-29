<?php
require_once("conect.php");
function buscaUsuario($conexao, $email, $senha){
	$senhaMD5 = md5($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "SELECT * FROM usuarios WHERE usu_email = '{$email}' AND usu_senha = '{$senhaMD5}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);

	return $usuario;
}