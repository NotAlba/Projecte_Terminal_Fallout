<?php
	define('CARACTERES_TOTALES','384');

	$arr_especiales=['!' , '"' , '$' , '%' , '&' , '/' , '(' , ')' , '=' , '?' , '|' , '#' , '>', '{' , ']' , '[' , '}'];
	define('SIMBOLOS',$arr_especiales);

	function obtenerPalabrasConSimbolitos(){
		$a =  CARACTERES_TOTALES;
		$array = leerArchivo();
		$palabras_elegidas = eleccionPalabras($array);
		$simbolosString = creacionStringBase();
		$stringFinal = stringFinal($palabras_elegidas, $simbolosString);
		return $stringFinal;
	}

	function leerArchivo(){
		$ruta='../resources/diccionari_paraules.txt';
		return $arr_palabras = file($ruta);	
	}

	function eleccionPalabras($arr_palabras){
		$arr_eleccion_palabra_indice=[];
		$arr_palabras_elegidas=[];
		$i=0;
		$size_array_palabras=count($arr_palabras)-1;
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
		return $arr_palabras_elegidas;
	}
		
		
		
	function creacionStringBase(){
		$string = '';
		
		return $string;
	}


	function stringFinal($arr_palabras_elegidas,$string){
		$random_posicion=0;
		$size_array_elegidas=count($arr_palabras_elegidas);
		for ($y=0; $y < $size_array_elegidas; $y++){
			$no_es_simbolo=0;
			$size_palabra=strlen($arr_palabras_elegidas[$y]);
			$random_posicion=rand(1,CARACTERES_TOTALES-$size_palabra);
			$arr_split=str_split(substr($string, $random_posicion-1,$size_palabra+2));
			foreach ($arr_split as $caracter) {
				if (!in_array($caracter, SIMBOLOS)) {
					$no_es_simbolo=$no_es_simbolo+1;
				}
				
			}
			$palabra=$arr_palabras_elegidas[$y];
			

			if ($no_es_simbolo==0) {
				$string=substr_replace($string, "<span>".$palabra."</span>",$random_posicion,$size_palabra );
				
			}else{
				
				$y-=1;
			}
		}
		return $string;
	}	
?>