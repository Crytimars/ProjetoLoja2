<?php 
include("cabecalho.php");
include("conect.php");
include("banco-categorias.php");

	$categorias = listaCategorias($conexao);
?>
	<h1>Formulário de Cadastro</h1>
	<form action="adiciona-produto.php" method="post">
		<table class="table">
			<tr>
				<td>Produto</td>
				<td><input class="form-control" type="text" name="nome"/></td>
			</tr>
			<tr>	
				<td>Preço</td>
				<td><input class="form-control" type="number" name="preco"/></td>
			</tr>	
			<tr>	
				<td>Descrição</td>
				<td><textarea class="form-control" name="descricao"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td align="left">
					<input type="checkbox" name="usado" value="true"> Usado
				</td>
			</tr>
			<tr>	
				<td>Categoria</td>
				<td align="left">
					<select name="categoria_id" class="form-control">
						<?php foreach ($categorias as $categoria) : ?>
							<option value="<?=$categoria['categoria_Id']?>">  
								<?=$categoria['categoria_nome']?>
							</option>
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn-primary" type="submit" value="Cadastrar"/></td>
			</tr>
		</table>
	</form>
<?php include("rodape.php");?>