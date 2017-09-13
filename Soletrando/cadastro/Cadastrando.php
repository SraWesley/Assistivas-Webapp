<?php

	
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "Projeto_Soletrando";

	$conexao = mysqli_connect($host, $usuario, $senha, $bd) or die (mysqli_error());
	mysqli_select_db($conexao, $bd);
?>

<html>
	<head>
		<meta charset = "utf-8">
		<title> Cadastro </title>
	</head>
	<body>
		<?php
			$login = $_POST['login'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];

			$sql = "INSERT INTO usuario (login, email, senha) VALUES ('$login','$email','$senha')";
			if (mysqli_query($conexao, $sql)) {
			    echo "Cadastrado com sucesso.";
			    echo "<br><a href = './login.php'> Login.</a>";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
			}

			mysqli_close($conexao);
		?>
	</body>
</html>