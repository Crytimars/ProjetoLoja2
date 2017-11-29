<!DOCTYPE html>
<?php
	error_reporting(E_ALL ^ E_NOTICE);
	require_once("mostra-alerta.php");
?>
<html>
<head>
	<title>Minha Loja</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/loja.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">Minha Loja</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="produto-formulario.php">Cadastrar Produto</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="produto-lista.php">Lista de Produtos</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="contato.php">Contato</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<div class="container">
		<div class="principal">
		<?php 
		mostraAlerta("success"); 
		mostraAlerta("danger"); ?>
	<!-- fim do cabeçalho.php -->