<?php
	session_start();
	
	$level = $_SESSION['levels'];
	$file = array();
	$wrong_words = $_SESSION['wrong_words'];
	$contador = $_SESSION['count'];
	$id = $_SESSION['identify'];
	$end = false;
	

	for($i = 0; $i < 3; $i++){
		$file[$i] = utf8_encode($_SESSION['f'.$i]);
	}
	
	$answer = "";

	if($_SESSION['identify'] < 3){
		$soundfile = strval("./palavras/words/".$level."/".$file[$id]);
		$id = $_SESSION['identify']++;
		
	} else {
		$soundfile = strval("./palavras/words/".$level."/".$file[0]);
		$end = true;
	}


	if(isset($_POST['answer'])){

		$answer = $_POST['answer'];
		

		$compare = substr($file[$contador], 0, - 4); 
		$contador = $_SESSION['count']++;
		

		if($compare === $answer){
			echo "<script>alert('Você acertou!');</script>";

			if($level === "1"){
				$_SESSION['points'] = $_SESSION['points'] + 1;
			} 

			if($level === "2"){
				$_SESSION['points'] = $_SESSION['points'] + 2;
			}

			if($level === "3"){
				$_SESSION['points'] = $_SESSION['points'] + 3;
			}
			
			

		} else {
			echo "<script>alert('Não foi dessa vez!');</script>";
			$_SESSION['mistakes'] = $_SESSION['mistakes'] + 1;
			$mistakes = $_SESSION['mistakes'];
			array_push($_SESSION['wrong_words'], $compare);
			$wrong_words = $_SESSION['wrong_words'];
		}
		
		$points = $_SESSION['points'];
	}
	

	if($end){
		$split = array();
		for($i = 0; $i < sizeof($wrong_words);$i++){
			$test = str_split($wrong_words[$i]);
			array_push($split, $test);
		}

		$_SESSION['split'] = $split;
		
		/*
		for($i = 0; $i < sizeof($split); $i++){
			foreach ($split[$i] as $value) {
		    	echo "Split: $value<br />\n";
			}
			echo "<br>";
		}
		
		//echo "Pontos: ".$points."<br>";
		//echo "Erros: ".$mistakes."<br>";
		*/

		header("Refresh:1; url = end.php"); // mudar para Location quando resolver os pontos
	}

	echo "<audio controls>
		<source src=\"$soundfile\" type=\"audio/mpeg\" id=\"sound\"><br>
		Your browser does not support the audio element.
		</audio><br>
		";	
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <script src="js/jquery.js"></script
    <script src="js/bootstrap.min.js"></script>
    
    <title> Jogo </title>
</head>
<body>

    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Soletrando
                </a>
            </li>
            <li>
                <a href="./cadastro/cadastro.php"> Faça seu cadastro </a>
                
            </li>
            <li>
               <a href="./cadastro/login.php">Login</a>
           </li>
        </ul>
    </div>

    <br><br><br><br>
    <form action = "jogo2.php" method = "POST">
        Escreva a palavra que escutou:
        <input type = "text" required name = "answer">
        <input type = "submit" value = "Enviar">
    </form>

</body>
</html>
