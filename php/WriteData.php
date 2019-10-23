<?php 
	
	if(isset($_POST["nombre"]) and isset($_POST["tiempo"]) and isset($_POST["intentos"])){


		$datosRanking = obtenerDatos();
		$jugador = array('nombre' => $_POST["nombre"], 
						 'fallos' => $_POST["intentos"],
						 'tiempo' => $_POST["tiempo"]);


		array_push($datosRanking,$jugador);

		$datosOrdenados = array_orderby($datosRanking,'fallos',SORT_ASC,'tiempo',SORT_ASC, 'nombre',SORT_ASC);
		$json_string = json_encode($datosOrdenados,JSON_PRETTY_PRINT);
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

function array_orderby() {
    $args = func_get_args();
    $data = array_shift($args);
    foreach ($args as $n => $field) {
        if (is_string($field)) {
            $tmp = array();
            foreach ($data as $key => $row)
                $tmp[$key] = $row[$field];
            $args[$n] = $tmp;
            }
    }
    $args[] = &$data;
    call_user_func_array('array_multisort', $args);
    return array_pop($args);
	}

 ?>