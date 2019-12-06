<?php session_start();
	// salvar como operacional.php
	if(!isset($_SESSION['nivel']))
	{
		// Não passou pelo login.html
		die("Faça login!!!");
	}
	else
	{
		// Já encerrou a sessão? (nivel=vazio?)
		if($_SESSION["nivel"]=="")
			die("A sessão foi encerrada!");
		
		// Pode acessar como Operador ou Supervisor
		if ( ($_SESSION['nivel'] == "O") || 
			 ($_SESSION['nivel'] == "S") )
		 {
			echo "Seja bem vindo(a) ";
				
			if($_SESSION['nivel'] == "O")
				echo "Operador(a) ";
			else
				echo "Supervisor(a) ";

			echo "<b>".$_SESSION['nome'].'</b><br>';
			echo "<a href='logout.php'>Logout</a>";
		}
		else
		{
			// Não é!!
			die('Voce não tem nível de acesso 
			para esta rotina. <br>Acesso 
			de <b>SUPERVISOR</b> ou <b>OPERADOR</b>
			 requisitado!.');
		}
	}
?>
