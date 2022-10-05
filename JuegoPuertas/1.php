<!DOCTYPE html>
<html>
<head>
	<title>Sala1</title>
</head>
<body>
<h1>SIGUES VIVO</h1>
<?php
	$numeroPuertas = rand(2,4);
	$puertaSiguiente = rand(0, $numeroPuertas - 1);

	for($i=0; $i<$numeroPuertas; $i++){
		if($puertaSiguiente == $i){
			echo "<a href='3.php'><img src='puerta.jpg' width='250' height='375' /></a>";
		} else {
			echo "<a href='2.php'><img src='puerta.jpg' width='250' height='375' /></a>";
		}
		
	}
?>
</body>
</html>