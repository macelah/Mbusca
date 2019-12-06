<html> <!-- salvar como listaUsuarios.php -->
	<head>
		<title>Lista de Usuários</title>
	</head>
	<body>
		<h2>Listagem de Usuários</h2>
	
	<?php 
		include "conexao.php";
		$sql= "SELECT * FROM usuarios ORDER BY id";
		
		$rs = mysqli_query($con,$sql) OR DIE ("ERRO" . mysqli_error($con));
		
		$linhas=mysqli_num_rows($rs);
		
		if($linhas<1)
		
		{
			die ("Nenhum usuário encontrado");
		}
		
		echo "nome|senha|email|tel|cel|renda|sexo|ec|foto";  
		echo "<br>";
		
		for ($n=0;$n<$linhas;$n++)
			{
 			$dados=mysqli_fetch_array($rs,1);
			
			
			echo $dados["nome"]. "|";
			echo $dados["senha"] . "|";
			echo $dados["email"] . "|";
			echo $dados["tel"] . "|";
			echo $dados["cel"] . "|";
			echo $dados["renda"] . "|";
			echo $dados["sexo"] . "|";
			echo $dados["ec"] . "|";
			echo $dados["obs"] . "|";
			echo $dados["nivel"] . "|";
			echo $dados["foto"] . "|";
				
			$id=$dados["id"];
			$nome=$dados["nome"];
			$senha=$dados["senha"];
			$email=$dados["email"];
			$tel=$dados["tel"];
			$cel=$dados["cel"];
			$renda=$dados["renda"];
			$sexo=$dados["sexo"];
			$ec=$dados["obs"];
			$nivel=$dados["nivel"];
			$foto=$dados["foto"];
			
			echo"<a href='alterauser.php?u=$id'>alterar</a>";
			echo "/";
			
			echo "<a href='excluiuser.php?u=$id'>excluir</a>";
			
			echo "<br>";
			}	
		
		?>
		</body>
		</html>