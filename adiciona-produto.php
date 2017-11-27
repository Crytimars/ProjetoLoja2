<?php 
include("cabecalho.php");
include("conect.php");
include("banco-produtos.php");
?>
	<?php
		$produto = $_POST["nome"];
		$preco = $_POST["preco"];
		$descricao = $_POST["descricao"];
		$categoriaId = $_POST["categoria_id"];
		
		if (array_key_exists("usado", $_POST)){
			$usado = "true";
		}else{
			$usado = "false";
		}

		
		if(insereProduto($conexao, $produto, $preco, $descricao, $categoriaId, $usado)){
	?>
		<p class="alert-success">Produto <?= $produto; ?>, com valor R$<?= $preco; ?> foi adicionado! </p>
	<?php 
		} else { 
			$erro = mysqli_error($conexao);
	?>	
		<p class="alert-danger">Produto <?= $produto; ?>, não foi adicionado! <?= $erro?> </p>
	<?php 
		} 
	?>
<?php include("rodape.php");?>