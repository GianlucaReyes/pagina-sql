<!doctype html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8" />
	<title>Proyecto Integrador 1A</title>
	<link rel="stylesheet" href="css/dropzone.min.css">
</head>

<body>
	<center>
	<h1>Pagina Web BD</h1>
	</center>
	<form id="myDrop" class="dropzone" action="upload.php">
		<input type="file" name="file">
	</form>
	<br>
	<i><b>Nota: </b>Debes de seleccionar tu archivo excel obligatoriamente.</i>
	<?php
        include_once('conexion.php');
    ?>
	
	<br>
	<br>

<form method="post" action="select.php">
	<label for="select_option">Selecciona una opción:</label>
	<select id="select_option" name="select_option">
    <option value="opcion1">Opción 1</option>
    <option value="opcion2">Opción 2</option>
    <option value="opcion3">Opción 3</option>
</select>
	<button type="submit" name="submit">Enviar</button>
</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/dropzone.min.js"></script>
	<script src="js/dropzone.options.js"></script>
</body>

</html>