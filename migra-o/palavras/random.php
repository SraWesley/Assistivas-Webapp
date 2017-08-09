<?php

	include("../database/connect.php");

	$levels = 0;

	if(isset($_POST['level'])){
		$levels = $_POST['level'];
		$path = "words/".$levels."/";
		$diretorio = dir($path);
		$files = array();

		while($arquivo = $diretorio -> read()){

			if($arquivo !== '.' && $arquivo !== '..' && $arquivo !== ' ' && $arquivo !== 'random.php') {
				array_push($files, $arquivo);
			}

			shuffle($files);

		}

		$soundfile = strval("words/".$levels."/".$files[0]);
		$sound = utf8_encode($soundfile);

		
		echo 	"<audio controls>
				<source src=\"$sound\" type=\"audio/mpeg\" id=\"sound\"><br>
				Your browser does not support the audio element.
				</audio><br>
				";	

	} else {
		echo "Você precisa selecionar um nível.";
		$levels = 1;
	}
	
	
	
?>

<html>
	<head>
		<h1> Jogo </h1>
	</head>
	<body>
		<form action = "teste.php" method = "POST">
			Em qual nível deseja jogar?
			<input type = "radio" required name = "level" value = "1"> Nível 1	
			<input type = "radio" required name = "level" value = "2"> Nível 2
			<input type = "radio" required name = "level" value = "3"> Nível 3
			<br><br>
			<input type = "submit" value = "Enviar">
		</form>
	</body>
</html>