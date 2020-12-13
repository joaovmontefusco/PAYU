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
                        <div class="modal-content">
                            <h4><?php echo $post->nome_user ?></h4>
                            <p><?php echo $post->data ?></p>
                            <p><?php echo $post->conteudo ?></p>
                            <p></p>
                            <hr></hr>
                            <h4 class="comments-title">Comentários</h4>
                            <?php
                            foreach($comentarios as $comentario){
                            ?>
                            <div class="comment">
                                <h4 class="comment-author"><?php echo $comentario->nome_user ?></h4>
                                <p class="comment-body"><?php echo $comentario->data ?></p>
                                <p class="comment-body"><?php echo $comentario->conteudo ?></p>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    <form class="col s12" method="post" action="comentar">
                        @csrf
                        <input class="item-invisivel" id="id_user" name="id_user" type="text" value=<?php echo $id ?>>
                        <input class="item-invisivel" id="nome_user" name="nome_user" type="text" value=<?php echo $user->nome ?>>
                        <input class="item-invisivel" id="sobrenome_user" name="sobrenome_user" type="text" value=<?php echo $user->sobrenome ?>>
                        <input class="item-invisivel" id="id_post" name="id_post" type="text" value=<?php echo $post->id ?>>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="conteudo" name="conteudo" type="text">
                                <label for="conteudo">Comentar...</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class='col s12 center'>
                                <button type="comentar">Comentar</button>
                            </div>
                        </div>
                    </form>
                </div>
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
