<?php

session_start();

function usuarioEstaLogado(){
	return isset($_SESSION["usuario_logado"]);
}

function usuarioLogado(){
	return $_SESSION["usuario_logado"];
}

function verificaUsuario(){
	if (!usuarioEstaLogado()) {
		$_SESSION["danger"] = "Para acessar essa função você precisa estar logado!";
		header("Location: index.php?falhaDeSeguranca=true");
		die();
	}	
}

function logaUsuario($email){
	$_SESSION["usuario_logado"] = $email;
}

function logout(){
	session_destroy();
	session_start();
}