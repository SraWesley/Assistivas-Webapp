<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet">
	<link href="css/simple-sidebar.css" rel="stylesheet">
	<link rel="icon" href="/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
	function checkPasswordMatch() {
		var password = $("#senha").val();
		var confirmPassword = $("#senha2").val();

		if (password != confirmPassword){
			$("#divCheckPasswordMatch").php("<strong>Fracasso!</strong> As senhas não conferem.");
			$("#divCheckPasswordMatch").addClass("alert alert-danger");
		}
	}
	</script>
	
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
				<a href="../home.php"> HOME
				</a>
			</li>
			<li>
				<a href="./login.php">Já tem cadastro?</a>
			</li>
		</ul>
	</div>

	<div class="container">
	<h2 style="text-align: center;">CADASTRO</h2>
		<form class="form-horizontal" role="form" method="post" action="Cadastrando.php">
			<div class="form-group">
				<label class="control-label col-sm-2" for="login">Login:</label>
				<div class="col-sm-2">
					<input type="login" pattern="[A-Za-z0-9]{4,8}" title = "O Login deve conter entre 4 e 8 letras ou números" class="form-control" required name="login" maxlength="12" placeholder="Enter Login">
				</div> 
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email:</label>
				<div class="col-sm-3">
					<input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name= "email" placeholder="Enter email">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="senha">Senha:</label>
				<div class="col-sm-3">
					<input type="password" id="senha" pattern=".{6,}" title = "A senha deve ter mais de seis caracteres" class="form-control" name="senha" placeholder="Enter password">
				</div>			
				<div class="form-group">
					<label class="control-label col-sm-2" for="senha_novamente">Senha Novamente:</label>
					<div class="col-sm-3">
						<input type="password"  id="senha2" pattern=".{6,}" title = "As senhas não conferem" class="form-control" required placeholder="Enter password" onChange="checkPasswordMatch();" name = "senha">
					</div>	
					<button href="home" type="submit" class="btn btn-default" value = "Cadastrar">Cadastrar</button>	
				</div>
			</form>
			<div id="divCheckPasswordMatch"></div>	
		</div>
	</body>
	</html>
