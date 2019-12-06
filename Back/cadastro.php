<?php
 include "inc/conexao.php"; // Inclui o arquivo de conexão neste aqui
 
 if(isset($_POST["submit_cadastro"])):
 //Caso o formulário seja enviado executa os comandos abaixo.

  $nome= $_POST ["nome"];
  $senha= $_POST ["senha"];
  $email= $_POST ["email"];
  $res= $_POST ["res"]; 
  $cel= $_POST ["cel"];
  $renda= $_POST ["renda"];
  $sexo= $_POST ["sexo"]; 
  $ec= $_POST ["ec"];
  $obs= $_POST ["obs"];
  
  
  mysqli_query($con, "INSERT INTO usuarios (nome,senha,email,tel,cel,renda,sexo,ec,obs)
  VALUES ('$nome', '$senha', '$email', '$res', '$cel', '$renda', '$sexo', '$ec', '$obs')");
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
  
   Nome: <input type = "text" name="nome" id="nome" maxlength="50" size = "50"required> <br>
   Senha: <input type = "password" name = "senha" id= "senha" maxlength="15" size="15"required> <br>
   e-mail: <input type = "text" name = "email" id= "email" maxlength="100" size="40"required> <br>
   Telefone Res: <input type = "text" name = "res" id= "res" maxlength="100" size="34"required> <br>
   Celular: <input type = "text" name = "cel" id= "cel" maxlength="100" size="39"required> <br>
   
   <input type="checkbox" name="recemails" id="recemails"value="1" checked>
   Desejo receber e-mails <br>
   Renda Mensal : <input type = "text" name = "renda" id= "renda" maxlength= "9" size ="15"required> <br>
   <fieldset>
   <legend>Sexo</legend>
   <input type = "radio" name = "sexo" id="sexom" value = "Masculino" checked> Masculino
   <input type = "radio" name = "sexo" id="sexof" value = "Feminino" >Feminino
   </fieldset>
   Estado civil: 
   <select name = "ec" id="ec" > 
      <option value = "Solteiro" selected> Solteiro </option>
   <option value = "Casado"> Casado </option>
   <option value = "Divorciado"> Divorciado </option>
   <option value = "Viúvo"> Viúvo </option>
   </select> <br>
   
   Observações <br>
 <textarea name= "obs" id = "obs" rows= "5" cols = "100" placeholder= "Insira dados do tipo do imóvel desejado" required></textarea><hr>
   <input type ="Submit" value = "Enviar"  name="submit_cadastro"> 
    <input type  ="reset" Value = "Limpar campos">
  </form >		


	</div>

</div>
<?php include "inc/rodape.php"; ?>