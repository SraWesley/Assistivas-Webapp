<?php
	
	$host = "localhost";
	$usuario = "root";
	$pwd = "";
	$bd = "Projeto_Soletrando";

	$conexao = mysqli_connect($host, $usuario, $pwd, $bd) or die (mysqli_error());
	mysqli_select_db($conexao, $bd);

?>

<html>
	<head>
		<meta charset = "utf-8">
		<title> Login </title>
	</head>
	<body>
		<?php
			session_start();
			$login = $_POST['login'];
			$senha = $_POST['senha'];

			$sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
			$res = mysqli_query($conexao, $sql);

			if( ($array = mysqli_fetch_array($res)) > 0 ){
				$_SESSION['login'] = $login;
				$_SESSION['senha'] = $senha;
				echo "<script> alert('Você será redirecionado a página principal.'); </script>";
				header("refresh: 3; url=home_usuario.php");
			} else {

				echo "<script> alert('Você ainda não está cadastrado. Será redirecionado para a página de cadastro.'); </script>";
				header("refresh: 3; url=cadastro.php");
			}
			
			
		?>
	</body>
</html>