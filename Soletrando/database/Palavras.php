<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "Projeto_Soletrando";


	$conexao = new mysqli($host, $username, $password,$database);

	if ($conexao->connect_error) {
	    die("A conexão falhou: " . $conexao->connect_error);
	} 

	$sql = "CREATE TABLE IF NOT EXISTS Palavras (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	palavra VARCHAR(46) UNIQUE NOT NULL,
	dificuldade INTEGER,
	caminho VARCHAR(100)
	)";


	if ($conexao->query($sql) === TRUE) {
	    echo "A tabela Palavras foi criada com sucesso!";
	} else {
	    echo "Erro criando a tabela: " . $conexao->error;
	}

	$conexao->close();
?>