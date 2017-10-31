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
		$soundfile = strval("../palavras/words/".$level."/".$file[$id]);
		$id = $_SESSION['identify']++;
		
	} else {
		$soundfile = strval("../palavras/words/".$level."/".$file[0]);
		$end = true;
	}
	if(isset($_POST['answer'])){
		$answer = $_POST['answer'];
		
		$compare = substr($file[$contador], 0, - 4); 
		$contador = $_SESSION['count']++;
		
		if($compare === $answer){
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
			$_SESSION['mistakes'] = $_SESSION['mistakes'] + 1;
			array_push($_SESSION['wrong_words'], $compare);
			$wrong_words = $_SESSION['wrong_words'];
		}
		$mistakes = $_SESSION['mistakes'];
		$points = $_SESSION['points'];
	}
	
	if($end){
		if($_SESSION['mistakes'] !== 0){
			$split = array();
			$matches = array();
			for($i = 0; $i < sizeof($wrong_words);$i++){

				preg_match_all('/./u', $wrong_words[$i], $array);
				$matches[$i] = $array[0];
				array_push($split, $matches[$i]);
				
			}
			
			$_SESSION['split'] = $split;
			echo '<script>alert("Pontos: '.$points.'\n'.'Erros: '.$mistakes.'");</script>';
			header("Refresh:1; url = end_trial.php");
		} else {
			
			echo '<script>alert("Pontos: '.$points.'\n'.'Você não cometeu nenhum erro. Parabéns!!!");</script>';
			header("Refresh:1; url = end2.php");
		}
	}
	echo "<audio id =\"palavra\" src=\"$soundfile\" type=\"audio/mpeg\"></audio><br>
		<div>
		  <button onclick=\"document.getElementById('palavra').play()\">Reproduzir o áudio</button>
		  <button onclick=\"document.getElementById('palavra').pause()\">Pausar o áudio</button>
		  <button onclick=\"document.getElementById('palavra').volume+=0.1\">Aumentar o volume</button>
		  <button onclick=\"document.getElementById('palavra').volume-=0.1\">Diminuir o volume</button>
		</div>
		<br>
		";	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=\"utf-8">
	<meta name=\"viewport" content=\"width=device-width, initial-scale=1">
    <link href=\"css/bootstrap.min.css" rel=\"stylesheet">
    <link href=\"css/simple-sidebar.css" rel=\"stylesheet">
    <link rel=\"icon" href=\"/favicon.ico" type=\"image/x-icon"/>
    <link rel=\"shortcut icon" href=\"/favicon.ico" type=\"image/x-icon"/>
    <script src=\"js/jquery.js"></script
    <script src=\"js/bootstrap.min.js"></script>
    
    <title> Jogo </title>
</head>
<body>

    <div id=\"sidebar-wrapper">
        <ul class=\"sidebar-nav">
            <li class=\"sidebar-brand">
                <a href=\"#">
                    Soletrando
                </a>
            </li>
            <li>
                <a href=\"../cadastro/cadastro.php"> Faça seu cadastro </a>
                
            </li>
            <li>
               <a href=\"../cadastro/login.php">Login</a>
           </li>
        </ul>
    </div>

    <br><br><br><br>
    <form action = "jogo.php" method = "POST">
        Escreva a palavra que escutou:
        <label for = "resposta">
        <input type = "text" required name = "answer" autocomplete = "off">
    	</label>
        <input type = "submit" value = "Enviar Resposta">
    </form>

</body>
</html>
