<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>COMIENZA EL JUEGO</h1>
	<h2>Elige una puerta</h2>

<?php
	$numeroPuertas = 2;
	$puertaSiguiente = rand(0, $numeroPuertas - 1);

	for($i=0; $i<$numeroPuertas; $i++){
		if($puertaSiguiente == $i){
			echo "<a href='1.php'><img src='puerta.jpg' width='250' height='375' /></a>";
		} else {
			echo "<a href='2.php'><img src='puerta.jpg' width='250' height='375' /></a>";
		}
		
	}
?>
</body>
</html>


