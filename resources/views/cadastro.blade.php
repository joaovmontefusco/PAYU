<!DOCTYPE html>
<html>
	<head>
		<title>PAYU - Cadastro</title>
		<link rel="icon" href="img/payu.png">
		<meta charset="utf-8">
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;1,200&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>


	<body>
		<div class="container">
			<div class="row">
				<form class="col s6 offset-s3" method="post" action="submit">
					@csrf
					<div class="row">
						<div class="center col s12">
							<img alt="Logo da Payu" class="logo" src="img/payu.png">
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="nome" name="nome" type="text" class="validate">
							<label for="nome">Nome</label>
						</div>
						<div class="input-field col s6">
							<input id="sobrenome" name="sobrenome" type="text" class="validate">
							<label for="sobrenome">Sobrenome</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="email" name="email" type="email" class="validate">
							<label for="email">Email</label>
						</div>
						<div class="input-field col s6">
							<input id="senha"  name="senha" type="password" class="validate">
							<label for="senha">Senha</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="cidade" name="cidade" type="text" class="validate">
							<label for="cidade">Cidade</label>
						</div>
						<div class="input-field col s6">
							<input id="estado" name="estado" type="text" class="validate">
							<label for="estado">Estado</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="data-nascimento" name="nascimento" type="date">
							<label for="data-nascimento">Data de Nascimento</label>
						</div>
						<div class="input-field col s6">
							<input id="filhos" name="filhos" type="number" class="validate">
							<label for="filhos">Quantos filhos você tem?</label>
						</div>
					</div>
					<label for="genero">Qual o seu genêro?</label>
					<div class="row">

						<div class="col s3">

							<label>
								<input name="genero" id="feminino" value="Feminino" type="radio" required/>
								<span for="feminino">Feminino</span>
							</label>
						</div>
						<div class="col s3">
							<label>
								<input name="genero" id="masculino" value="Masculino" type="radio" required/>
								<span for="masculino">Masculino</span>
							</label>
						</div>
						<div class="col s3">
							<label>
								<input name="genero" id="outro" value="Outro" type="radio" required/>
								<span for="outro">Outro</span>
							</label>
						</div>
						<div class="col s3">
							<label>
								<input name="genero" id="naodizer" value="Não dizer" type="radio" required/>
								<span for="naodizer">Não dizer</span>
							</label>
						</div>
					</div>
                    <div class="file-field input-field">
                        <div class="waves-effect waves-light btn-small">
                            <span><i class="material-icons">add</i></span>
                            <input id="foto-perfil" type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Adicione uma foto de perfil">
                        </div>
                    </div>
					<div class="row">
						<div class='col s12 center'>
							<button type="submit">cadastrar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
