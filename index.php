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
</body>
</html>
