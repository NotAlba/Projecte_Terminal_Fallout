<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	$lectura = file_get_contents('diccionari_paraules.txt');

	$palabras= str_split($lectura, 5);
	foreach($palabras as $val)
	{
	echo ($val); 
	echo "<br>";
	}
	

?>
</body>
</html>