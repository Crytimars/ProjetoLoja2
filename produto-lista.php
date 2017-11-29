<?php 
require_once("cabecalho.php");
require_once("banco-produtos.php");

	mostraAlerta("success");
	$produtos = listaProdutos($conexao);	
?>

<h1>Produtos Cadastrados</h1></br>
<table class="table table-striped table-bordered">
	<?php
		foreach ($produtos as $produto) :
	?>
		<tr>
			<td><?=$produto['produto_nome']?></td>
			<td><?=$produto['produto_preco']?></td>
			<td><?=substr($produto['produto_descricao'], 0, 40)?></td>
			<td><?=$produto['categoria_nome']?></td>
			<td>
				<form action="produto-altera-formulario.php" method="post">
					<input type="hidden" name="id" value="<?=$produto['produto_Id']?>">
					<button class="btn btn-primary"> Alterar </button> 
				</form>
			</td>
			<td>
				<form action="remove-produto.php" method="post">
					<input type="hidden" name="id" value="<?=$produto['produto_Id']?>">
					<button class="btn btn-danger"> Remover </button> 
				</form>
			</td>
		</tr>
	<?php
		endforeach
	?>
</table>


<?php require_once("rodape.php");?>