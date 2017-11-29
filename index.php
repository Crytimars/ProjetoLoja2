<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");
?>
	<h1>Bem Vindo!</h1>
	</br></br>

	<h2>Formulário de Login</h2> </br>

	<?php if(usuarioEstaLogado()){ ?>
		<p class="text-success">Você está logado como <?=usuarioLogado()?></p></br>
		<a class="btn btn-danger" href="logout.php">Deslogar</a>
	<?php } else { ?>

		<form action="login.php" method="post">
			<table class="table">
				<tr>
					<td>E-mail</td>
					<td><input class="form-control" type="email" name="email"></td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input class="form-control" type="password" name="senha"></td>
				</tr>
				<tr>
					<td>
						<button type="submit" class="btn btn-primary">Logar</button>
					</td>
				</tr>
			</table>
		</form>
	<?php } ?>
<?php require_once("rodape.php");?>