<?php
/**
* Asociativní pole
* Deklarujte pole months, které bude mít v hodnotách uložen český název měsíce. Index bude odpovídat pořadovému číslu měsíce.
* a) Za pomocí cyklu zobrazte všechny měsíce.
* b) Za pomocí cyklu zobrazte všechny měsíce z období 6-12.
*/

//reseni

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


$months = [
    "leden ",
    "únor ",
    "březen ",
    "duben ",
    "květen ",
    "červen ",
    "červenec ",
    "srpen ",
    "září ",
    "říjen ",
    "listopad ",
    "prosinec ",
];

foreach ($months as $value) {
    echo $value .'<br />';
}

for ($i = 5; $i < 12; $i++) {
    echo $months[$i];
  }


?>

