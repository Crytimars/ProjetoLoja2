<?php 
include("cabecalho.php");
include("conect.php");
include("banco-categorias.php");
include("banco-produtos.php");
	
	$id = $_POST['id'];
	$produto = buscaProduto($conexao, $id);
	$categorias = listaCategorias($conexao);

	$usado = $produto['produto_usado'] ? "checked = 'checked'" : "";
?>
	<h1>Formulário de Alteração</h1>
	<form action="altera-produto.php" method="post">

		<input type="hidden" name="id" value="<?=$produto['produto_Id']?>">
		
		<table class="table">
			<tr>
				<td>Produto</td>
				<td><input class="form-control" type="text" name="nome" value="<?=$produto['produto_nome']?>" /></td>
			</tr>
			<tr>	
				<td>Preço</td>
				<td><input class="form-control" type="number" name="preco" value="<?=$produto['produto_preco']?>" /></td>
			</tr>	
			<tr>	
				<td>Descrição</td>
				<td><textarea class="form-control" name="descricao"><?=$produto['produto_descricao']?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td align="left">
					<input type="checkbox" name="usado" <?=$usado?> value="true"> Usado
				</td>
			</tr>
			<tr>	
				<td>Categoria</td>
				<td align="left">
					<select name="categoria_id" class="form-control">
						<?php foreach ($categorias as $categoria) : 
							$categoriaProduto = $produto['categoria_Id'] == $categoria['categoria_Id'];
							$selecao = $categoriaProduto ? "selected='selected'" : "" ?>;

							<option value="<?=$categoria['categoria_Id']?>">  
								<?=$categoria['categoria_nome']?>
							</option>
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn-primary" type="submit" value="Alterar"/></td>
			</tr>
		</table>
	</form>
<?php include("rodape.php");?>