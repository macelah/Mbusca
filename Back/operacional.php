<?php session_start();
	// salvar como operacional.php
	if(!isset($_SESSION['nivel']))
	{
		// N�o passou pelo login.html
		die("Fa�a login!!!");
	}
	else
	{
		// J� encerrou a sess�o? (nivel=vazio?)
		if($_SESSION["nivel"]=="")
			die("A sess�o foi encerrada!");
		
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
			// N�o �!!
			die('Voce n�o tem n�vel de acesso 
			para esta rotina. <br>Acesso 
			de <b>SUPERVISOR</b> ou <b>OPERADOR</b>
			 requisitado!.');
		}
	}
?>
