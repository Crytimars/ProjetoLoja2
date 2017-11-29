<?php 
require_once("cabecalho.php");
require_once("banco-categorias.php");
require_once("logica-usuario.php");
	
	verificaUsuario();

	$categorias = listaCategorias($conexao);
	$produto = array("nome" => "", "preco" => "", "descricao" => "", "categoria_id" => "1");
	$usado = "";
?>
	<h1>Formulário de Cadastro</h1></br>
	<form action="adiciona-produto.php" method="post">
		<table class="table">

			<?php require_once("produto-formulario-base.php"); ?>

			<tr>
				<td></td>
				<td><input class="btn-primary" type="submit" value="Cadastrar"/></td>
			</tr>
		</table>
	</form>
<?php require_once("rodape.php");?>