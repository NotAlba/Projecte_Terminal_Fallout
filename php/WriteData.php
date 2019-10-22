<?php 
	
	if(isset($_POST["nombre"]) and isset($_POST["tiempo"]) and isset($_POST["intentos"])){
		echo $_POST["tiempo"];
		$jugador = array('nombre' => $_POST["nombre"], 
						 'fallos' => $_POST["intentos"],
						 'tiempo' => $_POST["tiempo"]);

		$json_string = json_encode($jugador,JSON_PRETTY_PRINT);
		$file = '../resources/dataPlayers.json';
		file_put_contents($file, $json_string,FILE_APPEND);

	}
 ?>