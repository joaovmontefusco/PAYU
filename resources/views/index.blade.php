<!DOCTYPE html>
<html>
	<head>
		<title>PAYU - Login</title>
		<link rel="icon" href="img/payu.png">
		<meta charset="utf-8">
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;1,200&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body>
		<div class="my-wrapper valign-wrapper center-align">
			<div class="container">
				<div class="row">
					<div class="col s12 center">
						<img alt="Logo da Payu" src="img/payu.png">
					</div>
					<div class="col s4 offset-s4 center">
						<form class="col s12" method="post" action="login">
							@csrf
							<div class="row">
								<div class='input-field col s12'>
									<label for='email'>Email</label>
									<input class='validate' type='email' name='email' id='email' required/>
								</div>
							</div>
							<div class="row">
								<div class='input-field col s12'>
									<input class='validate' type='password' name='senha' id='senha' required/>
									<label for='senha'>Senha</label>
								</div>
							</div>
							<div class="row">
								<div class='col s12'>
								<button type="login">Entrar</button>
								</div>
							</div>
							<div class="row">
								<div class='col s12'>
									<a href="cadastro" class="center entrar waves-effect waves-light link">Não possui cadastro?</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>