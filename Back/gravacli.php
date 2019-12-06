<?php


	$nome=	$_POST ["nome"];
	$senha=	$_POST ["senha"];
	$email=	$_POST ["email"];
	$tel=	$_POST ["tel"]; 
	$cel=	$_POST [cel];
	$renda=	$_POST ["renda"];
	$sexo=	$_POST ["sexo"];
	$ec=	$_POST ["ec"];
	$obs=	$_POST ["obs"];
	{
	if (isset ($_POST ["recemails"]))
		$recemails=$_POST["recemails"];
	else
		$recemails=0;
			
		}
		
		echo "<h2> dados recebidos		</h2>";
		echo "Nome:				$nome	<br>";
		echo "Senha:			$senha	<br>";
		echo "e-mail:			$email	<br>";
		echo "tel:				$tel	<br>";
		echo "cel:				$cel	<br>";
		echo "Renda:			$renda	<br>";
		echo "Sexo:				$sexo	<br>";
		echo "Estado civil: 	$ec		<br>";
		echo "Receber e-mail?:	$recemails <br>"; 
		echo "Observações: 		$obs	<br>";
	
	
	?>
	
	