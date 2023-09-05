<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN”
“http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
     <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>

<?php
//CODIGO PHP
$_myvar;
$_7var; 
//myvar; invalida
$myvar; 
$var7; 
$_element1;
//$house*5; invalida

echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '</ul>';

?>

<h2>Ejercicio 2</h2>
<p>Proporcionar los valores de $a, $b, $c como sigue:</p>
<p>$a = “ManejadorSQL”;
$b = 'MySQL’;
$c = &$a;</p>

<?php
$a = "ManejadorSQL";
$b = 'MySQL';
$c = &$a;

echo 'La variable $a'.$a;
echo 'La variable $b'.$b;
echo 'La variable $c'.$c;


?>

</body>
</html>