<?php 
require_once("cabecalho.php");

$produtoDao = new ProdutoDao($conexao);
$categoriaDao = new CategoriaDao($conexao);

$id = $_POST["id"];
$produto = $produtoDao->buscaProduto($id);
$categorias = $categoriaDao->listaCategorias();

$selecao_usado = $produto->getUsado() ? "checked = 'checked'" : "";
$produto->setUsado($selecao_usado);
?>
<h1>Formulário de Alteração</h1></br>
<form action="altera-produto.php" method="post">

	<input type="hidden" name="id" value="<?=$produto->getId()?>">
	
	<table class="table">
		
		<?php require_once("produto-formulario-base.php"); ?>

		<tr>
			<td></td>
			<td><input class="btn-primary" type="submit" value="Alterar"/></td>
		</tr>
	</table>
</form>
<?php require_once("rodape.php");?>