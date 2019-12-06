<?php
 include "inc/conexao.php"; // Inclui o arquivo de conexão neste aqui
 
 if(isset($_POST["submit_cadastro"])):
 //Caso o formulário seja enviado executa os comandos abaixo.

 
  $email = $_POST ["email"];
  $nomeproprietario = $_POST ["nome"];
  $telefone = $_POST ["telefone"];
  $celular = $_POST ["celular"]; 
  $tipoimovel = $_POST ["tipoimovel"];
  $codigo = $_POST ["codigo"];
  $status =  $_POST ["status"];
  $preco = $_POST ["preco"]; 
  $foto = $_POST ["foto"];
  $descricao = $_POST ["descricao"];
  
  mysqli_query($con, "INSERT INTO imoveis (email,nome,telefone,celular,tipoimovel,
  codigo,preco,foto,descricao,dimensoes)
  VALUES ('$email', '$nome', '$telefone', '$celular', '$tipoimovel', '$codigo', '$preco', 
  '$foto', '$descricao')");
  
  echo "Cadastro efetuado com sucesso"; 

 endif; //Final do if
?> 


                        <?php include "inc/topo.php"; ?>
<div class="conteudo">
	<div class="lateral">
		<h2>Menu</h2>
		<ul>
			<li><a href="index.php">Voltar</a></li>
		</ul>
	</div>
	<div class="conteudo-principal">
  
  
  <h1> Cadastro de Clientes </h1>  
  <form method= "POST" action="func/cadastrar_usuario.php">
 
   e-mail: <input type = "text" name = "email" id= "email" maxlength="100" size="40"required> <br>
   Nome: <input type = "text" name="nome" id="nome" maxlength="50" size = "50"required> <br>
   Telefone: <input type = "text" name = "telefone" id= "telefone" maxlength="15" size="15"required> <br>
   Celular:  <input type = "text" name = "celular" id= "celular" maxlength="15" size="15"required> <br>
   Tipo Imóvel: <input type = "text" name = "tipoimovel" id= "tipoimovel" maxlength="100" size="34"required> <br>
   Código: <input type = "text" name = "codigo" id= "codigo" maxlength="100" size="39"required> <br>
   Preço: <input type = "text" name = "preco" id= "preco" maxlength="100" size="39"required> <br>
   Foto: <input type = "text" name = "foto" id= "foto" maxlength="100" size="39"required> <br>
   Descrição :<input type = "text" name = "descricao" id= "descricao" maxlength="100" size="39"required> <br>
   Dimensões: <input type = "text" name = "dimensoes" id= "dimensoes" maxlength="100" size="39"required> <br>
  
 <fieldset>
   <legend>Status</legend>
   <input type = "radio" name = "status" id="at" value = "1" checked> Ativo
   <input type = "radio" name = "status" id="al" value = "2" >Aluguel
   <input type = "radio" name = "status" id="ve" value = "3" >Vender
   </fieldset>
  
   Observações <br>
 <textarea name= "obs" id = "obs" rows= "5" cols = "100" placeholder= "Insira dados do tipo do imóvel desejado" required></textarea><hr>
   <input type ="Submit" value = "Enviar"  name="submit_cadastro"> 
    <input type  ="reset" Value = "Limpar campos">
  </form >		


	</div>

</div>
<?php include "inc/rodape.php"; ?>