<?php

$nama = 'saima';
$umur = 23;
$hobi = 'membaca';

//echo $nama;
// echo 'welcome';
// echo 'welcome ' . $nama . 'dengan umur ' . $umur ;

define('PHI', 3.14);
$jari = 10;

$keliling = 2 * PHI * $jari;
$luas = PHI * $jari * $jari;

//echo $keliling;
//echo '<br>' . $luas;

$title = 'Praktikum 1';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>    <?php   echo $title   ?>  </h1>
    <h1>    <?= $title   ?>  </h1>
</body>
</html>