<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

	verificaUsuario();

	$tipoProduto = $_POST["tipoProduto"];
	$categoria_id = $_POST["categoria_id"];

	$factory = new ProdutoFactory();
	$produto = $factory->criarPor($tipoProduto, $_POST);
	$produto->atualizaBaseadoEm($_POST);

	$produto->getCategoria()->setId($categoria_id);
	
	if (array_key_exists("usado", $_POST)){
		$produto->usado = true; 
	}else{
		$produto->usado = false; 
	}
	
	$produtoDao = new ProdutoDao($conexao);

	if($produtoDao->insereProduto($produto)){	
	?>
		<p class="alert-success">Produto <?= $produto->getNome(); ?>, com valor R$<?= $produto->getPreco(); ?> foi adicionado! </p>
	<?php 
		} else { 
			$erro = mysqli_error($conexao);
	?>	
		<p class="alert-danger">Produto <?= $produto->getNome(); ?>, não foi adicionado! <?= $erro?> </p>
	<?php 
		} 
	?>
<?php require_once("rodape.php");?>