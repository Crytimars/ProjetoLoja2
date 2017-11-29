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

							<option value="<?=$categoria['categoria_Id']?>" <?=$selecao?>>  
								<?=$categoria['categoria_nome']?>
							</option>
						<?php endforeach ?>
					</select>
				</td>
			</tr>