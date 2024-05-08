<?php
// PHP dasar
// Sintaks PHP


//Standard Output
//echo, print
//print_r
// var_dump

echo 'kiwRogerr';
echo "<br>";
print 'masskiwrogerr2';
echo "<br>";
print_r('masskiwRogerr3');
echo "<br>";
var_dump('massKiwwrogerr4');
echo "<br>";
//boolean
echo true;
echo "<br>";
echo false;


//Penulisan sintaks php
// 1. PHP dalam html
// 2. html dalam PHP



// Variable dan tipe data
// Variable
$nama = 'massKiwwRogerr';
echo "<br>";
?>

<!-- PHP dalam HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hallo, selamat datang <?php echo $nama;?></h1>
    <p><?php echo 'Selamat Belajar'. "<br>"; ?></p>
</body>
</html>

<!-- HTML Dalam PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Hai Bang</h1>";
        echo $nama;
        echo "<br>";
    ?>
</body>
</html>


<!-- Operator Aritmatika -->
<?php

$x = 20;
$y = 30;
$z = $x + $y;

echo $z;
echo "<br>";
?>

<!-- Penggabung string / concat -->
<!-- . -->
<?php

$n_depan = "Diki";
$n_belakang = "Sunanda";
echo $n_lengkap = $n_depan . " " . $n_belakang;
echo "<br>";
// Assignment

$x = 1;
$x += 2;
echo $x;

echo "<br>";

$nama = 'Diki';
$nama .= ' ';
$nama .= 'Sunanda';

echo $nama;
echo '<br>';

//Operator perbandingan
// <, >, <=, >=, ==

var_dump(1 == "5");
var_dump(1 == "1");

echo "<br>";

//Operator Identitas (Tipe Data)
var_dump(1 === "1");
echo '<br>';

//Operator Logika &&, ||, !
$x = 40;
var_dump($x > 20 && $x % 2 == 0);
var_dump($x == 40 || $x % 2 == 1);







