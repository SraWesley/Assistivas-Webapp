<?php
	
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "Projeto_Soletrando";

	$conexao = mysqli_connect($host, $usuario, $senha, $bd) or die (mysqli_error());
	mysqli_select_db($conexao, $bd);
	
?>
<?php

	$number = 1;
	for( $i = 1; $i < 4; $i++){

		$path = "words/".$number."/";
		$diretorio = dir($path);


		
		while($arquivo = $diretorio -> read()){

			$files = array();
			$dificuldade = $number;
			$caminho = "C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\palavras\words\ $number";


			if($arquivo !== '.' && $arquivo !== '..' && $arquivo !== ' '){
			
				$file = substr($arquivo, 0, -4);  
				
				
				
				$sql = "INSERT INTO palavras (palavra, dificuldade, caminho) VALUES ('$file','$dificuldade','$caminho')";

				if (mysqli_query($conexao, $sql)) {
				    
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
				}
			}

		}

		$number++;
		$diretorio -> close();
		
	}
	
	mysqli_close($conexao);
	
?>
