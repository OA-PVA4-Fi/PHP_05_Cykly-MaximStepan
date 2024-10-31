<?php

/*
 * Pole - auta
 * Zjistěte kolik aut máte na skladě a počet prodaných kusů
 */

$cars = array (
	//značka, prodané množství, skladové množství
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Skoda",1203,763),
	array("Hundai",2143,329),
	array("Audi",22,8),
	array("Porsche",4,1),
	array("Saab",5,2),
	array("Land Rover",17,15)
);

echo'
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>';

$prodej=0;
$sklad=0;

foreach ($cars as $value) {
	$prodej = $value[1] + $prodej;
	$sklad = $value[2] + $sklad;
}
echo "prodej ", $prodej;
echo " sklad ", $sklad;
//reseni

?>