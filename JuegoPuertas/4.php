<html>
<head>
	<title>Sala3</title>
</head>
<body>
<h1>SIGUES VIVO</h1>
<?php
	$numeroPuertas = rand(6,12);
	$puertaSiguiente = rand(0, $numeroPuertas - 1);

	for($i=0; $i<$numeroPuertas; $i++){
		if($puertaSiguiente == $i){
			echo "<a href='win.php'><img src='puerta.jpg' width='250' height='375' /></a>";
		} else {
			echo "<a href='2.php'><img src='puerta.jpg' width='250' height='375' /></a>";
		}
		
	}
?>
</body>
</html>