<!DOCTYPE html>
<html lang="en">
	<head class="ser">
        <meta http-equiv="Expires" content="0">
		<meta http-equiv="Last-Modified" content="0">
		<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
		<meta http-equiv="Pragma" content="no-cache">
		<!--Para caché/!-->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sugerencias de adquisición de materiales</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="shortcut icon" href="img/upvm.jpg" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
	</head>
	<body>
		<header class="ser">
			<section class="textos-header">
				<h1>Sugerencias de Adquisición de Materiales</h1>
				<img src="/img/upvm.jpg" id="logo">
			</section>
        </header>

        <section class="contenedor-formulario">
            <form method="post">
				<label class="aste">Campos Obligatorios*</label><br><br>

				<label>Título</label><label class="aste">*</label>
				<input class="controls" type="text" name="titulo" id="titulo" required>
				<label>Autor</label>
				<input class="controls"  type="text" name="autor" id="autor">
				<label>ISBN</label>
				<input class="controls"  type="text" name="isbn" id="isbn">

				
				<label>Tipo de solicitante</label><label class="aste">*</label><br>
				<input class="radio" type="radio" name="t-solicitante" value="Alumno" id="alumno" >
				<label class="et" for="alumno">Alumno</label>
				<input class="radio" type="radio" name="t-solicitante" value="Colaborador" id="colaborador">
				<label class="et" for="colaborador">Colaborador</label>
				<input class="radio" type="radio" name="t-solicitante" value="Profesor" id="profesor">
				<label class="et" for="profesor">Profesor</label>
				<br>

				<label>Nombre de solicitante</label><label class="aste">*</label>
				<input class="controls" type="text" name="n-solicitante" id="n-solicitante" required>
				<label>Correo electrónico</label><label class="aste">*</label>
				<input class="controls"  type="email" name="correo" id="correo" required>
				<label>Materia</label><label class="aste">*</label>
				<input class="controls" type="text" name="materia" id="materia" required>
				<label>Carrera</label>
				<input class="controls" type="text" name="carrera" id="carrera">
				<label>Observaciones</label>
				<input class="controls" type="text" name="observaciones" id="observaciones">
				<br><br>
				
				<p>Verfique sus respuestas antes de enviar</p>
				<input class="botons" name="Enviar" type="submit">
			</form>
			<?php

			include(correo.php);

			?>
        </section>


		<footer>
			<div class="contenedor-footer">
				<div class="content-foo">
					<h4>Universidad Politécnica del Valle de México</h4>
				</div>
				
			<h2 class="titulo-final">&copy; All rights reserved.</h2>
		</footer>
	</body>
</html>