<?php
	$host = "localhost";
	$username = "root";
	$password = "";

	$conexao = mysqli_connect($host, $username, $password);

	if (!$conexao) {
	    die("A conexão falhou: " . mysqli_connect_error());
	}


	$sql = "CREATE DATABASE IF NOT EXISTS Projeto_Soletrando";
	if (mysqli_query($conexao, $sql)) {
	    echo "Banco de dados criado com sucesso!";
	} else {
	    echo "Erro ao criar banco de dados: " . mysqli_error($conexao);
	}
?>