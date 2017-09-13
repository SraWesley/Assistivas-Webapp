<?php
	
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "Projeto_Soletrando";

	$conexao = mysqli_connect($host, $usuario, $senha, $bd) or die (mysqli_error());
	mysqli_select_db($conexao, $bd);
	
?>
