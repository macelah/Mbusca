<?php
	include_once "conexao.php";

	if(isset($_POST['login'])):
		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$query = mysqli_query($con,"SELECT * FROM usuarios WHERE nome = '$nome' AND senha ='$senha'");
		$result_c = mysqli_num_rows($query); // Contagem de número de dados encontrados.
		if($result_c > 0):
			$result_array = mysqli_fetch_array($query,1);
			echo "Login Efetuado com sucesso";
			//Criação de Sessão
			$dados = [
				'nome'	=>	$result_array['nome'],
			];
			$_SESSION["Usuario"] = $dados;

		else:
			echo "Nome de usuário / Senha não encontrados.";
		endif;
	endif;
?>
<html>
	<head><title>Login</title></head>
	<body>
		<form method="post">
		<input type="text" name="nome" placeholder="Nome de Usuário" required><br>
		<input type="password" name="senha" placeholder="Senha" required><br>
		<input type="submit" name="login" value"Entrar">
		</form>
	</body>
</html>