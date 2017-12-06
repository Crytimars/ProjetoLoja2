<?php 
require_once("cabecalho.php");

	$id = $_POST['id'];
	$produtoDao = new ProdutoDao($conexao);
	$produtoDao->removeProduto($id);

	$_SESSION["success"] = "Produto removido com sucesso.";
	header("Location: produto-lista.php");
	die();
?>

<?php require_once("rodape.php");?>