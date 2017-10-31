<?php
	
	include("../database/connect.php");


	if(isset($_FILES['arquivo'])){

		$extention = strtolower(substr($_FILES['arquivo']['name'], -4));
		$new_name = $_FILES['arquivo']['name'];
		$path = "upload/";
		$dificuldade = $_POST['level'];
		$caminho = realpath($_FILES['arquivo']['name']);

		move_uploaded_file($_FILES['arquivo']['tmp_name'], $path.$new_name);

		$sql = "INSERT INTO upload (palavra, dificuldade, caminho) VALUES ('$new_name', '$dificuldade', '$caminho')";

		if (mysqli_query($conexao, $sql)) {

			echo "Upload feito com sucesso.";
				    
		} else {

			echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
		}
	}

	//$diretorio -> close();
?>

<html>
	<head>
		<h1> Upload de Arquivos </h1>
	</head>
	<body>
		<form action = "upload.php" method = "POST" enctype = "multipart/form-data">
			Arquivo:
			<label for = "arquivo"><input type = "file" required name = "arquivo"></label>
			<br><br>
			Dificuldade:
			<label for = "nível1"><input type = "radio" required name = "level" value = "1"> Nível 1 </label>
			<label for = "nível2"><input type = "radio" required name = "level" value = "2"> Nível 2 </label>
			<label for = "nível3"><input type = "radio" required name = "level" value = "3"> Nível 3 </label>
			<br><br>
			<input type = "submit" value = "Salvar Arquivo">
		</form>
	</body>
</html>
