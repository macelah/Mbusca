
<?php include "inc/topo.php"; ?>
<div class="conteudo">
	<div class="lateral">
		<h2>Menu</h2>
		<ul>
			<li><a href="index.php">Voltar</a></li>
		</ul>
	</div>
	<div class="conteudo-principal">
  
  
  <h1> Cadastrar Imóvel </h1>  
  <form method= "POST" action="func/cadastrar_imovel.php">
  
Nome do Proprietário: <input type = "text" name="nomeproprietario" id="nomeproprietario" maxlength="50" size = "50"required> <br>
Tipo de Imóvel: <input type = "text" name = "tipoimovel" id= "tipoimovel" maxlength="15" size="15"required> <br>
Preço: <input type = "text" name = "preco" id= "preco" maxlength="100" size="40"required> <br>
E-mail:  <input type = "text" name = "email" id= "email" maxlength="100" size="40"required> <br>
Telefone: <input type = "text" name = "telefone" id= "telefone" maxlength="100" size="34"required> <br>
Celular: <input type = "text" name = "celular" id= "celular" maxlength="100" size="39"required> <br>
Foto:   <input type = "text" name = "foto" id= "foto" maxlength="865" size="34"required>

<br>Descrição: <br>
<textarea name= "descricao" id = "descricao" rows= "5" cols = "100" 
placeholder= "*Informe o Endereço de seu Imóvel antes de descrevê-lo*" required></textarea><hr>	 

	<input type="submit" name="submit_cadastro" value="Cadastrar">

	</form>
	</div>

</div>
<?php include "inc/rodape.php"; ?>