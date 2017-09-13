<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/simple-sidebar.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet">
	<link rel="icon" href="/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
				<a href="../home.php"> HOME </a>
			</li>
			<li>
				<a href="./cadastro.php"> Faça seu cadastro</a>
			</li>
		</ul>
	</div>
	
	<div class="container">
		<h2 style="text-align: center;">LOGIN</h2>
		<form class="form-horizontal" role="form" method="post" action="Logando.php">
			<div class="form-group">
				<label class="control-label col-sm-2" for="login">Login:</label>
				<div class="col-sm-2">
					<input type="login" pattern="[A-Za-z0-9]{4,8}" title = "O Login deve conter entre 4 e 8 letras ou números" class="form-control" name="login" maxlength="12" placeholder="Enter Login">
				</div> 
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Senha:</label>
				<div class="col-sm-3">
					<input type="password" id="senha" pattern=".{6,}" title = "A senha deve ter mais de seis caracteres" class="form-control" required name="senha" placeholder="Enter password">
				</div>			
				<div class="form-group">
					<br>	
					<button href="home" type="submit" class="btn btn-default">Logar</button>	
				</div>
			</form>
	</div>
</body>
</html>