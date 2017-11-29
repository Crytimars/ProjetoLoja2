<?php 
require_once("cabecalho.php");
require_once("banco-produtos.php");

	$id = $_POST['id'];
	$produto = $_POST["nome"];
	$preco = $_POST["preco"];
	$descricao = $_POST["descricao"];
	$categoriaId = $_POST["categoria_id"];
	
	if (array_key_exists("usado", $_POST)){
		$usado = "true";
	}else{
		$usado = "false";
	}

	
	if(alteraProduto($conexao, $id, $produto, $preco, $descricao, $categoriaId, $usado)){
	?>
		<p class="alert-success">Produto <?= $produto; ?>, com valor R$<?= $preco; ?> foi alterado! </p>
	<?php 
		} else { 
			$erro = mysqli_error($conexao);
	?>	
		<p class="alert-danger">Produto <?= $produto; ?>, não foi alterado!:  <?= $erro?> </p>
	<?php 
		} 
	?>
<?php require_once("rodape.php");?>