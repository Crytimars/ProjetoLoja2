<?php 
require_once("cabecalho.php");

	mostraAlerta("success");

	$produtoDao = new ProdutoDao($conexao);
	$produtos = $produtoDao->listaProdutos();	
?>

<h1>Produtos Cadastrados</h1></br>
<table class="table table-striped table-bordered">
	<?php
		foreach ($produtos as $produto) :
	?>
		<tr>
			<td><?=$produto->getNome()?></td>
			<td><?=$produto->getPreco()?></td>
			<td><?=$produto->calculaImposto()?></td>
			<td><?=substr($produto->getDescricao(), 0, 40)?></td>
			<td><?php 
					if($produto->temIsbn()){
						echo "ISBN: ". $produto->getIsbn();
					}
				?></td>
			<td><?=$produto->getCategoria()->getNome()?></td>
			<td>
				<form action="produto-altera-formulario.php" method="post">
					<input type="hidden" name="id" value="<?=$produto->getId()?>">
					<button class="btn btn-primary"> Alterar </button> 
				</form>
			</td>
			<td>
				<form action="remove-produto.php" method="post">
					<input type="hidden" name="id" value="<?=$produto->getId()?>">
					<button class="btn btn-danger"> Remover </button> 
				</form>
			</td>
		</tr>
	<?php
		endforeach
	?>
</table>


<?php require_once("rodape.php");?>