<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="js/jsWork.js"></script>
</head>
<body>
	<?php
		$ruta='./resources/diccionari_paraules.txt';
		$arr_palabras = file($ruta);
	

		
	?>

	<?php
		$size_array_palabras=count($arr_palabras)-1;
		$random_posicion=0;
		$arr_eleccion_palabra_indice=[];
		$arr_palabras_elegidas=[];
		$arr_posicion_palabras=[];
		$i=0;
		$x=0;
		$numero_caracteres_totales=384;
		$arr_especiales=['!' , '"' , '$' , '%' , '&' , '/' , '(' , ')' , '=' , '?' , '|' , '#' , '>', '{' , ']' , '[' , '}'];
		$string='';

		
		while ($i<6){
			$random_index=rand(0,$size_array_palabras);
			if (in_array($random_index, $arr_eleccion_palabra_indice)) {
				while (in_array($random_index, $arr_eleccion_palabra_indice)) {
					$random_index=rand(0,$size_array_palabras);
					}	
			}
			
			$arr_eleccion_palabra_indice[] = $random_index;	
			$arr_palabras_elegidas[]= $arr_palabras[$random_index];
			$i=$i+1;


		}
		
		$size_array_elegidas=count($arr_palabras_elegidas);
		

		for ($a=0; $a < $numero_caracteres_totales ; $a++) { 

			$caracter=array_rand($arr_especiales);
			$string=$string.$arr_especiales[$caracter];
			
			
		}
		
		for ($y=0; $y < $size_array_elegidas; $y++){
			$no_es_simbolo=0;
			$size_palabra=strlen($arr_palabras_elegidas[$y]);
			$random_posicion=rand(1,$numero_caracteres_totales-$size_palabra);
			$arr_split=str_split(substr($string, $random_posicion-1,$size_palabra+2));
			foreach ($arr_split as $caracter) {
				if (!in_array($caracter, $arr_especiales)) {
					$no_es_simbolo=$no_es_simbolo+1;
				}
				
			}
			if ($no_es_simbolo==0) {
				$string=substr_replace($string, $arr_palabras_elegidas[$y],$random_posicion,$size_palabra );
				
			}else{
				
				$y-=1;
			}
			

			
			
		}
		echo $string;
		
		
		

		
		
		
		  
	
		
		
		

		
		
	?>

	
</body>
</html>
