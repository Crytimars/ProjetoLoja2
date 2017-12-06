<tr>
	<td align="left">Produto</td>
	<td><input class="form-control" type="text" name="nome" value="<?=$produto->getNome()?>" /></td>
</tr>
<tr>	
	<td align="left">Preço</td>
	<td><input class="form-control" type="number" name="preco" value="<?=$produto->getPreco()?>" /></td>
</tr>	
<tr>	
	<td align="left">Descrição</td>
	<td><textarea class="form-control" name="descricao"><?=$produto->getDescricao()?></textarea></td>
</tr>
<tr>
	<td></td>
	<td align="left">
		<input type="checkbox" name="usado" <?=$produto->getUsado()?> value="true"> Usado
	</td>
</tr>
<tr>	
	<td align="left">Categoria</td>
	<td align="left">
		<select name="categoria_id" class="form-control">
			<?php foreach ($categorias as $categoria) : 
				$categoriaProduto = $produto->getCategoria()->getId() == $categoria->getId();
				$selecao = $categoriaProduto ? "selected='selected'" : "" ?>;

				<option value="<?=$categoria->getId()?>" <?=$selecao?>>  
					<?=$categoria->getNome()?>
				</option>
			<?php endforeach ?>
		</select>
	</td>
</tr>
<tr>
	<td align="left">Tipo do Produto</td>
	<td align="left">
		<select name="tipoProduto" class="form-control">
			<optgroup label="Livros"> 
			<?php 
				$tipos = array("Livro Fisico" , "Ebook");
				foreach ($tipos as $tipo) :
					$tipoSemEspaco = str_replace(" ", "", $tipo);
					$esseEhOTipo = get_class($produto) == $tipoSemEspaco;
					$selecaoTipo = $esseEhOTipo ? "selected='selected'" : "" 
				?>;
					<option value="<?=$tipoSemEspaco?>" <?=$selecaoTipo?>>  
						<?=$tipo?>
					</option>	
				<?php endforeach ?> 
			</optgroup>
		</select>
	</td>
</tr>
<tr>
	<td align="left">ISBN (Caso seja um Livro)</td>
	<td>
		<input class="form-control" type="text" name="isbn" 
		value="<?php 
			if($produto->temIsbn()){ 
				echo $produto->getIsbn();
			}
		?>"/>
	</td>
</tr>
<tr>
	<td align="left">Taxa de Impressão (Caso seja um Livro Físico)</td>
	<td>
		<input class="form-control" type="text" name="taxaImpressao"
		value="<?php 
			if($produto->temTaxaImpressao()){
				echo $produto->getTaxaImpressao();
			}
		?>">
	</td>
</tr>
<tr>
	<td align="left">Water Mark (Caso seja um Ebook)</td>
	<td>
		<input class="form-control" type="text" name="waterMark" 
		value="<?php 
			if($produto->temWaterMark()){
				echo $produto->getWaterMark();
			}
		?>">
	</td>
</tr>
