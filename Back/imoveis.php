<?php include "inc/topo.php"; ?>
<div class="conteudo">
	<div class="lateral">
		<h2>Imóveis</h2>
		<body>
<br>
	<center><a href="index.php">Ir para Página Inicial!</a></center>
	
</br>
</body>

		<ul>
			<li><a href="imoveis.php?tipo=Apartamento">Apartamentos</a></li>
			<li><a href="imoveis.php?tipo=Casa">Casas</a></li>
			<li><a href="imoveis.php?tipo=Galpao">Galpões</a></li>
			<li><a href="imoveis.php?tipo=Terreno">Terrenos</a></li>
		</ul>
	</div>
	<div class="conteudo-principal">
		
		<?php
			$tipoimovel = $_GET['tipo'];
			$imoveis = mysqli_query($con,"SELECT * FROM imoveis WHERE tipoimovel LIKE '%".$tipoimovel."%'");
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
					<td><img src="<?=$imoveis_result['foto'];?>" style="width: 300px;"></td>
					<td><?=$imoveis_result['descricao'];?></td>
					<td><?=$imoveis_result['tipoimovel'];?></td>
					<td><?=$imoveis_result['preco'];?></td>
				</tr>
			
			
		<?php endwhile; ?>
		
		
		</table>
		
		
		
		
		<?php } else { echo  "Não há resultados no momento."; } ?>
	</div>
</div>
<?php include "inc/rodape.php"; ?>