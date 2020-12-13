<!DOCTYPE html>
<html>
	<head>
		<title>PAYU - Home</title>
		<link rel="icon" href="../img/payu.png">
		<meta charset="utf-8">
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;1,200&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
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
                    <h1>Sobre o que você quer falar?</h1>
                </div>
                <div class="col s12 right-align">
                    <a href="/novaCategoria?id=<?php echo $id ?>" class="center waves-effect waves-light btn">Solicitar nova categoria</a>
                </div>
            </div>
            <div class="row">
                    <?php
                    foreach($categorias as $categoria){
                    ?>
                    <div class="col s4">
                        <div class="card category-card">
                            <div class="card-image">
                                <img src="../img/<?php echo $categoria->nome ?>.jpg" class="card-img-size">
                            </div>
                            <div class="card-content">
                                <span class="card-title"><?php echo $categoria->nome ?></span>
                                <p><?php echo $categoria->descricao ?></p>
                            </div>
                            <div class="card-action">
                                <a href="feed?id=<?php echo $id ?>&categoria=<?php echo $categoria->id ?>">Ver mais</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
            </div>
        </div>
    </body>
</html>
