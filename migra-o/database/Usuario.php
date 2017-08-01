<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "Projeto_Soletrando";


	$conexao = new mysqli($host, $username, $password,$database);

	if ($conexao->connect_error) {
	    die("A conexão falhou: " . $conexao->connect_error);
	} 

	$sql = "CREATE TABLE IF NOT EXISTS Usuario (
	usuario_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	login VARCHAR(12) NOT NULL,
	email VARCHAR(60),
	senha VARCHAR(15)
	)";


	if ($conexao->query($sql) === TRUE) {
	    echo "A tabela Usuário foi criada com sucesso!";
	} else {
	    echo "Erro criando a tabela: " . $conexao->error;
	}

	$conexao->close();
?>