<?php

$login=$_GET["u"];
$sql="delete from usuarios
where login='$login'";

include"conexao.php";
mysqli_query($con,$sql) or
die ("Erro.".mysqli_error($con));
echo "Usuário Excluido <br>";
echo "clique <a href= 'listausuarios.php'> aqui </a> para continuar";


?>