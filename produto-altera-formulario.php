<?php 
require_once("cabecalho.php");
require_once("banco-categorias.php");
require_once("banco-produtos.php");
	
	$id = $_POST['id'];
	$produto = buscaProduto($conexao, $id);
	$categorias = listaCategorias($conexao);

	$usado = $produto['produto_usado'] ? "checked = 'checked'" : "";
?>
	<h1>Formulário de Alteração</h1></br>
	<form action="altera-produto.php" method="post">

		<input type="hidden" name="id" value="<?=$produto['produto_Id']?>">
		
		<table class="table">
			
			<?php require_once("produto-formulario-base.php"); ?>

			<tr>
				<td></td>
				<td><input class="btn-primary" type="submit" value="Alterar"/></td>
			</tr>
		</table>
	</form>
<?php require_once("rodape.php");?>