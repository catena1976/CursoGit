<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>

</head>

<body>
<?php
    // Operadores logicos

    $num1 = 5;
    $num2 = 10;
    $num3 = 5;
    $num4 = 20;
    $num5 = 5;
    $activo1 = true;
    $activo2 = false;

if ( $num1 == $num3 && $num3 == $num5){
    echo ( "Iguales");
    echo ( "<br>");
}else{
    echo ( "No iguales");
}
    echo ("<p>");
    if ( $num1 == $num3 || $num3 == $num4){
        echo ( "Iguales");
        echo ( "<br>");
    }else{
        echo ( "Iguales");
        echo ( "<br>");
    }
    echo ("<p>");
    if ( !$activo1){
        echo ( "False");
        echo ( "<br>");
    }else{
        echo ( "True");
    }
?>
</body>
</html>
