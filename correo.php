<?php

if(isset($_POST['Enviar'])){
	if(!empty($_POST['titulo'])&& 
	!empty($_POST['t-solicitante'])&&
	!empty($_POST['n-solicitante'])&& 
	!empty($_POST['correo'])&& 
	!empty($_POST['materia'])){
		
		$titulo = $_POST['titulo'];
		$autor = $_POST['autor'];
		$isbn = $_POST['isbn'];
		$tiposolicitante = $_POST['t-solicitante'];
		$nombresolicitante = $_POST['n-solicitante'];
		$correo = $_POST['correo'];
		$materia = $_POST['materia'];
		$carrera = $_POST['carrera'];
		$observaciones = $_POST['observaciones'];

		$info = "Titulo: " . $titulo . "\r\n" ;
		$info .= "Autor: " . $autor . "\r\n";
		$info .= "ISBN: " . $isbn . "\r\n";
		$info .= "Solicitante: " . $tiposolicitante . "\r\n";
		$info .= "Nombre: " . $nombresolicitante . "\r\n";
		$info .= "Correo: " . $correo . "\r\n";
		$info .= "Materia: " . $materia . "\r\n";
		$info .= "Carrera: " . $carrera  . "\r\n";
		$info .= "Observaciones: " . $observaciones . "\r\n".

		$header = "from: noreply@example.com" . "\r\n";
		$header.="Reply-To: noreply@example.com" . "\r\n";
		$header.="X-Mailer: PHP/". phpversion();
		$asunto = "Sugerencia";

		$mail = @mail("marcoesteban291@gmail.com",$asunto,utf8_decode($info),$header);
		if($mail){
		echo"<h4>¡Sugerencia enviada exitosamente!</h4>";	
		}
		
	}
}
?>