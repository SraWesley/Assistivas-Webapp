<?php
    session_start();
    $levels = 1;

    if(isset($_POST['level'])){
        $levels = $_POST['level'];
        $path = "./palavras/words/".$levels."/";
        $diretorio = dir($path);
        $files = array();


        while($arquivo = $diretorio -> read()){

            if($arquivo !== '.' && $arquivo !== '..' && $arquivo !== ' ' && $arquivo !== 'random.php') {
                array_push($files, $arquivo);
            }

            shuffle($files);

        }
        
        $_SESSION['levels'] = $levels;

        for($i = 0; $i < 2;$i++){
            $_SESSION['f'.$i] = $files[$i];
        }
       

        
        header("Location: jogo.php");
    }
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
    
    <title>HOME</title>
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
    <form action = "home.php" method = "POST">
        Em qual nível deseja jogar?
        <input type = "radio" required name = "level" value = "1"> Nível 1  
        <input type = "radio" required name = "level" value = "2"> Nível 2
        <input type = "radio" required name = "level" value = "3"> Nível 3
        <br><br>
        <input type = "submit" value = "Enviar">
    </form>

</body>
</html>
