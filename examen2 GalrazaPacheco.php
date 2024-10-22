<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$cars = [
    ["name" => "Acura", "Precio" => 1049900],
    ["name" => "Alfa Romeo", "Precio" => 1319900],
    ["name" => "Aston Martin", "Precio" => 4500000],
    ["name" => "Audi", "Precio" => 1019900],
    ["name" => "BAIC", "Precio" => 479900],
];


usort($cars, function($a, $b) {
    return $a['Precio'] - $b['Precio'];
});

echo "carros ordenados por precio:\n";echo "<P>";
foreach ($cars as $car) {
    echo $car['name'] . " - $" . $car['Precio'] . "\n";echo "<p>";
}

array_push($cars, ["name" => "Bentley", "Precio" => 6500000]);
array_push($cars, ["name" => "BMW", "Precio" => 999000 ]);


usort($cars, function($a, $b) {
    return $a['Precio'] - $b['Precio'];
});


echo "<p>";;echo "\ncarros actualizados ordenados por precio:\n";echo "<p>";
foreach ($cars as $car) {
    echo $car['name'] . " - $" . $car['Precio'] . "\n";echo "<p>";
}
?>


</body>
</html>