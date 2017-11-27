<?php 
include("cabecalho.php");
include("conect.php");
include("banco-produtos.php");

	$id = $_POST['id'];
	removeProduto($conexao, $id);

	header("Location: produto-lista.php?removido=true");
	die();
?>

<?php include("rodape.php");?>