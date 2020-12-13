<!DOCTYPE html>
<html>
	<head>
		<title>PAYU - Home</title>
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
        <nav>
            <div class="nav-wrapper">
                <a href="/categorias?id=<?php echo $id?>" class="brand-logo nav-logo">PAYU</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/categorias?id=<?php echo $id?>">Categorias</a></li>
                    <li><a href="/perfil?id=<?php echo $id?>">Perfil</a></li>
                    <li><a href="/">Sair</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col s12 center">
                    <h1>Solicitação de nova categoria</h1>
                </div>
            </div>
            <div class="row">
                <form class="col s12" method="post" action="novaCategoria">
                    @csrf
                    <input class="item-invisivel" id="id_user" name="id_user" type="text" value=<?php echo $id ?>>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nome-categoria" name="nome" type="text" data-length="10">
                            <label for="nome-categoria">Insira o nome da categoria que deseja solicitar</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="descricao" name="conteudo" class="materialize-textarea" data-length="1000"></textarea>
                            <label for="descricao">Descreve um pouco mais sobre a categoria e como ela pode ser útil para a comunidade</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class='col s12 center'>
                        <button type="novaCategoria">Solicitar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
