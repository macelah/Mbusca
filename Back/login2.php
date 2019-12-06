<?php session_start();
	include "conexao.php";
	
	$login = $_POST['login'];
	$senha= $_POST['senha'];
	$SQL = "SELECT * FROM usuarios WHERE login='$login' AND senha='$senha'";
	echo $SQL . '<br>';
	$rs = mysqli_query($con, $SQL) or 
		die("Erro na conexão com MYSQL: " . mysqli_error($con));
	if( mysqli_num_rows($rs)<1)
	{
		die( "Login não encontrado ou senha incorreta.<br> Tente novamente.");
	}
	
	echo 'Login encontrado. <br>';
	$dados = mysqli_fetch_array($rs,1);
	echo 'Nivel de Acesso: ' . $dados['nivelAcesso'];
	$_SESSION['nivel'] = $dados['nivelAcesso'];
	$_SESSION['nome'] = $dados['nome'];;
?>
<br>
<a href="administrativa.php">Acessar area administrativa</a>
