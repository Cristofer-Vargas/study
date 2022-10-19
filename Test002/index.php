<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <!-- //Portabilidade para outros dispositivos -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Essa página é um teste, e isso é uma descrição">

    <title>Test002</title>
    <link rel="stylesheet" href="./Components/style/estilo.css">
    <link rel="stylesheet" href="./Components/style/fonts.css">

</head>
<body>

<section>
	<div id="DivSection">
		<h1>Acesse sua conta</h1>
		<div>
			<label for="textUsuario">Usuario</label>
			<input type="text" name="inputText" id="textUsuario">

			</br>

			<label for="textSenha">Senha</label>
			<input type="text" name="inputText" id="textSenha">
		</div>

		<?php

		include("./Components/database/conexao.php");

		?>
	</div>
</section>
</body>