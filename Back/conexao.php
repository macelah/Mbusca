<?php 
	 $host = "localhost";
 $user = "root";
 $pass = "";
 $banco = "imobiliaria";
 $con = mysqli_connect($host, $user, $pass, $banco);
 if (mysqli_connect_errno()) trigger_error(mysqli_connect_error()); 
 
 ?>

 