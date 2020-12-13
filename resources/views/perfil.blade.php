<!DOCTYPE html>
<html>
	<head>
		<title>PAYU - Home</title>
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
        <nav>
            <div class="nav-wrapper">
                <a href="/categorias?id=<?php echo $user->id?>" class="brand-logo nav-logo">PAYU</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/categorias?id=<?php echo $user->id?>">Categorias</a></li>
                    <li><a href="/perfil?id=<?php echo $user->id?>">Perfil</a></li>
                    <li><a href="/">Sair</a></li>
                </ul>
            </div>
        </nav>
		<div class="container">
			<div class="row">
				<form class="col s6 offset-s3" method="post" action="atualizar">
                    @csrf
					<div class="row">
						<div class="center col s12">
							<img alt="Foto de perfil" class="profile-image" src="img/<?php echo $user->nome?>.jpg">
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="nome" name="nome" type="text" class="validate" value=<?php echo $user->nome ?>>
							<label for="nome">Nome</label>
						</div>
						<div class="input-field col s6">
							<input id="sobrenome" name="sobrenome" type="text" class="validate" value=<?php echo $user->sobrenome ?>>
							<label for="sobrenome">Sobrenome</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="email" name="email" type="email" class="validate" value=<?php echo $user->email ?>>
							<label for="email">Email</label>
						</div>
						<div class="input-field col s6">
							<input id="senha" name="senha" type="password" class="validate"  value=<?php echo $user->senha ?>>
							<label for="senha">Senha</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="cidade" name="cidade" type="text" class="validate" value=<?php echo $user->cidade ?>>
							<label for="cidade">Cidade</label>
						</div>
						<div class="input-field col s6">
							<input id="estado" name="estado" type="text" class="validate" value=<?php echo $user->estado?>>
							<label for="estado">Estado</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="data-nascimento" name="nascimento" type="date" value=<?php echo $user->nascimento ?>>
							<label for="data-nascimento">Data de Nascimento</label>
						</div>
						<div class="input-field col s6">
							<input id="filhos" name="filhos" type="number" class="validate"  value=<?php echo $user->filhos ?>>
							<label for="filhos">Quantos filhos você tem?</label>
						</div>
					</div>

                    <div class="row">
						<div class="col s3">
							<label>
								<input id="feminino" name="genero" value="Feminino" type="radio" required <?php if(strcmp($user->genero, "Feminino")==0){ echo "checked";}?>/>
								<span for="feminino">Feminino</span>
							</label>
						</div>
						<div class="col s3">
							<label>
								<input id="masculino" name="genero" value="Masculino" type="radio" required <?php if(strcmp($user->genero, "Masculino")==0){echo "checked";}?>/>
								<span for="masculino">Masculino</span>
							</label>
						</div>
						<div class="col s3">
							<label>
								<input id="outro" name="genero" value="Outro" type="radio" required <?php if(strcmp($user->genero, "Outro")==0){echo "checked";}?>/>
								<span for="outro">Outro</span>
							</label>
						</div>
						<div class="col s3">
							<label>
								<input id="naodizer" name="genero" value="Não dizer" type="radio" required <?php if(strcmp($user->genero, "Não dizer")==0){echo "checked";}?>/>
								<span for="naodizer">Não dizer</span>
							</label>
						</div>
					</div>
                    <input class="item-invisivel" id="id" name="id" type="text" value=<?php echo $user->id ?>>
					<div class="file-field input-field">
						<div class="waves-effect waves-light btn-small">
							<span><i class="material-icons">edit</i></span>
							<input id="foto-perfil" type="file">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" placeholder="Altere sua foto de perfil">
						</div>
					</div>
					<div class="row">
						<div class='col s12 center'>
                            <button type="atualizar">Salvar alterações</button>
						</div>
					</div>
				</form>
			</div>
		</div>
    </body>
</html>
