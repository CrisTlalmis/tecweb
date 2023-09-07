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

//Segundo bloque de instrucciones

$a = "PHP server";
$b = &$a;
//impresion de variables
echo 'La variable $a contiene: '.$a;
echo '<br>';
echo 'La variable $b contiene: '.$b;
echo '<br>';
echo 'La variable $c contiene: '.$c;
echo '<br>';

echo '<p>En el segundo bloque de las instrucciones cambiamos el valor de nuestras variables $a, $b y $c
por PHP server, se cambia en todas ya que estamos indicando que $a tendra ese contenido, $b esta apuntando al 
contenido de $a y $c en el primer bloque esta apuntando a $a pero como cambiamos su contenido tambien cambiara
el de $c
</p>'
?>

<h2>Ejercicio 3</h2>
<p>Muestra el contenido de cada variable inmediatamente después de cada asignación,
verificar la evolución del tipo de estas variables (imprime todos los componentes de los
arreglo): <br>
$a = “PHP5”;<br>
$z[] = &$a;<br>
$b = “5a version de PHP”;<br>
$c = $b*10;<br>
$a .= $b;<br>
$b *= $c;<br>
$z[0] = “MySQL”; <br> </p>

</body>
</html>