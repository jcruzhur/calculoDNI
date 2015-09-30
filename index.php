<?php
	$dni = $_GET['dni'];

	$letra = substr("TRWAGMYFPDXBNJZSQVHLCKE",strtr($dni,"XYZ","012")%23,1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mi primer script PHP</title>
</head>
<body>

<?php

?>
	
	<h1>CIF: <?=$dni; ?>-<?=$letra;?></h1>
</body>
</html>