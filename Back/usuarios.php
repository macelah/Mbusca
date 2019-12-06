<?php include "inc/topo.php"; ?>
<div class="conteudo">
	<div class="lateral">
		<h2>Imóveis</h2>
		<ul>
			<li><a href="imoveis.php?tipo=Apartamento">Apartamentos</a></li>
			<li><a href="imoveis.php?tipo=Casa">Casas</a></li>
			<li><a href="imoveis.php?tipo=Galpao">Galpões</a></li>
			<li><a href="imoveis.php?tipo=Terreno">Terrenos</a></li>
		</ul>
	</div>
	<div class="conteudo-principal">
		
		<?php

		$usuarios = mysqli_query($con,"SELECT * FROM usuarios");
		$usuarios_rows = mysqli_num_rows($usuarios); 


			if($usuarios_rows > 0 )
			{
				echo "há $usuarios_rows resultado(s) no momento.";
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
				
				while ($usuarios_result = mysqli_fetch_array($usuarios)):
	
			?>
			
				<tr>
			
					<td><?=$usuarios_result['nome'];?></td>
					<td><?=$usuarios_result['email'];?></td>
					<td><?=$usuarios_result['tel'];?></td>
					
				</tr>
			
			
		<?php endwhile; ?>
		
		
		</table>
		
		
		
		
		<?php } else { echo  "Não há resultados no momento."; } ?>
	</div>
</div>
<?php include "inc/rodape.php"; ?>                        
