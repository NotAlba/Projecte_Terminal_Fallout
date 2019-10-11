<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$ruta='./resources/diccionari_paraules.txt';
		$arr_palabras = file($ruta);

		foreach ($arr_palabras as $linea){
			echo $linea;
		}
	?>

	<?php
		$size_array_palabras=count($arr_palabras);
		$posicion_aleatoria=0;
		$posicion_aleatoria_anterior=0;
		$posicion_max=68;
		$posicion_min=1;
		$arr_posiciones_aleatorias=[];
		$contador=0;
		
		$arr_palabras_elegidas=[];
		$i=0;

		while ($i<6){
			$random_index=rand(0,$size_array_palabras);
			if (in_array($random_index, $arr_posiciones_aleatorias)) {
				while () {
					$random_index=rand(0,$size_array_palabras);
					}	
			}
			
			$arr_posiciones_aleatorias[] = $random_index;	
			$i=$i+1;
		}

		foreach ($arr_posiciones_aleatorias as $index) {
			echo $index;
			
		}
		
		
		

		
		
	?>
</body>
</html>
