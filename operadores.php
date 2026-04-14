<head>
    <title>Operadores</title>
</head>
<?php
        #operadores aritmetica
    $x = 7;
    $y = 8;
    $res = $x + $y;
    echo "X  es igual a:".$x;
    echo "<br>Y  es igual a:".$y;
    echo "<br> La suma es:".$res;
    $res = $x * $y;
    echo " <br> La multiplicación es:".$res;

        #operadores de comparacion < > <= >= == !=
    $c1 = ($x == $y);
    echo "<br> X es igual a Y:".$c1;
    $c2 = ($x > $y);
    echo "<br> X es mayor a Y:".$c2;
    $c3 = ($y > $x);
    echo "<br> Y es mayor a X:".$c3;
    echo "<br> X es distinto de Y:".($x != $y);

        #operadores logicos and && or ||

    $user = "admin";
    $password = "12345";
    if($user == "admin" && $password == "12345")

    {
            echo "<br>Acceso Correcto";
        }
    else {
            echo "<br>Acceso Denegado";
        }
?>
