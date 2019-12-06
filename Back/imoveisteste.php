<?php include "inc/topo.php"; ?>
<div class="conteudo">
	<div class="lateral">
		<h2>Imóveis</h2>
		<ul>
			<li><a href="imoveis.php?tipo=Apartamento">Apartamentos</a></li>
			<li><a href="imoveis.php?tipo=Casa">Casas</a></li>
			<li><a href="imoveis.php?tipo=Galpoe">Galpões</a></li>
			<li><a href="imoveis.php?tipo=Terreno">Terrenos</a></li>
		</ul>
	</div>
	<div class="conteudo-principal">
		
		<?php

		$imoveis = mysqli_query($con,"SELECT * FROM imoveis ");
		$imoveis_rows = mysqli_num_rows($imoveis); 
		
		
$nomeproprietario = $_GET['nome'];
$imoveis = mysqli_query($con,"SELECT * FROM imoveis WHERE nomeproprietario LIKE '%".$nomeproprietario."%'");
$imoveis_rows = mysqli_num_rows($imoveis);
			

			if($imoveis_rows > 0)
			{
				echo "há $imoveis_rows resultado(s) no momento.";
		?>
		
		<br>
		<table>
		<th>
			<td><b>Foto</b></td>
			<td><b>Descricao</b></td>
			<td><b>Tipo</b></td>
			<td><b>Preço</b></td>
		</th>
		
		
		<?php
				
				while ($imoveis_result = mysqli_fetch_array($imoveis)):
	
			?>
			
				<tr>
			
					<td><?=$usuarios_result['nomeproprietario'];?></td>
					<td><?=$usuarios_result['telefone'];?></td>
					<td><?=$usuarios_result['preco'];?></td>
					
				</tr>
			
			
		<?php endwhile; ?>
		
		
		</table>
		
		
		
		
		<?php } else { echo  "Não há resultados no momento."; } ?>
	</div>
</div>
<?php include "inc/rodape.php"; ?>                        
