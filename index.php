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

		foreach ($arr_palabras as $linea){
			echo $linea;
		}
	?>
</body>
</html>
