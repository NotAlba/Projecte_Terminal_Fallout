<?php 
	
	if(isset($_POST["nombre"]) and isset($_POST["tiempo"]) and isset($_POST["intentos"])){


		$datosRanking = obtenerDatos();
		$jugador = array('nombre' => $_POST["nombre"], 
						 'fallos' => $_POST["intentos"],
						 'tiempo' => $_POST["tiempo"]);


		array_push($datosRanking,$jugador);

		$json_string = json_encode($datosRanking,JSON_PRETTY_PRINT);
		$file = '../resources/dataPlayers.json';
		file_put_contents($file, $json_string);
	}



		function obtenerDatos(){
			$data = file_get_contents("../resources/dataPlayers.json");

			if($data == ""){
				return array();
			}
			return json_decode($data,true);
		}
 ?>