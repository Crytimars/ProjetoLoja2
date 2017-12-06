<?php 
require_once("cabecalho.php");

	$categoria_id = $_POST["categoria_id"];
	$tipoProduto = $_POST["tipoProduto"];
	$id = $_POST["id"];

	$factory = new ProdutoFactory();
	$produto = $factory->criarPor($tipoProduto, $_POST);
	$produto->atualizaBaseadoEm($_POST);

	$produto->setId($id);
	$produto->getCategoria()->setId($categoria_id);
	

	if (array_key_exists("usado", $_POST)){
		$produto->usado = true;
	}else{
		$produto->usado = false;
	}

	$produtoDao = new ProdutoDao($conexao);

	if($produtoDao->alteraProduto($produto)){
	?>
		<p class="alert-success">Produto <?= $produto->getNome(); ?>, com valor R$<?= $produto->getPreco(); ?> foi alterado! </p>
	<?php 
		} else { 
			$erro = mysqli_error($conexao);
	?>	
		<p class="alert-danger">Produto <?= $produto->getNome(); ?>, não foi alterado!:  <?= $erro?> </p>
	<?php 
		} 
	?>
<?php require_once("rodape.php");?>