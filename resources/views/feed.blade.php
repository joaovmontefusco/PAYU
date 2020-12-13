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
                    <h1><?php echo $categoria->nome ?></h1>
                </div>
                <div class="col s9 right-align">
                    <a href="#modal-post" class="center waves-effect waves-light btn modal-trigger">Novo post</a>
                </div>
                <div class="col s9">
                    <div id="modal-post" class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <h4>Novo Post</h4>
                            <form class="col s12" method="post" action="novoPost">
                                @csrf
                                <div class="row">
                                <input class="item-invisivel" id="id_user" name="id_user" type="text" value=<?php echo $id ?>>
                                    <input class="item-invisivel" id="id_categoria" name="id_categoria" type="text" value=<?php echo $categoria->id ?>>
                                    <input class="item-invisivel" id="nome_user" name="nome_user" type="text" value=<?php echo $user->nome ?>>
                                    <input class="item-invisivel" id="sobrenome_user" name="sobrenome_user" type="text" value=<?php echo $user->sobrenome ?>>
                                    <div class="input-field col s12">
                                        <textarea id="conteudo" name="conteudo" class="materialize-textarea" data-length="1000"></textarea>
                                        <label for="conteudo">Escreva aqui o que você quer falar!</label>
                                    </div>
                                </div>
                                <div class="file-field input-field">
                                </div>
                                <button type="novoPost">Postar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                        </div>
                </div>
            </div>

            <div class="row">
                <!-- Post 1 -->
                <?php
                foreach($posts as $post){
                ?>
                <div class="col s6 offset-s3">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title"><?php echo $post->nome_user ?></span>
                            <p><?php echo $post->data ?></p>
                            <p><?php echo $post->conteudo ?></p>
                        </div>
                        <div class="card-action">
                            <a href="/comentarios?id=<?php echo $id ?>&post=<?php echo $post->id ?>" class="modal-trigger">Comentários</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.modal');
                var instances = M.Modal.init(elems);
            });
        </script>
    </body>
</html>
