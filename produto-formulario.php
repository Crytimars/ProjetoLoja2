<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");
	
verificaUsuario();
$categoriaDao = new CategoriaDao($conexao);
$categorias = $categoriaDao->listaCategorias($conexao);

$categoria = new Categoria();
$categoria->setId(1);

$produto = new LivroFisico("", "", "", $categoria, "");
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