<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Formulario</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php

        //Ingreso, declaración y procesamiento de variables recibidas desde el formulario
        $nombre= $_POST["nombre"];
        $cedula= $_POST["cedula"];
        $materia= $_POST["materia"];
        $num1= $_POST["num1"];
        $num2= $_POST["num2"];
        $num3= $_POST["num3"];
        $promedio= ($num1+$num2+$num3)/3;

        //Impresión de la información del Front

        print ("<br> El estudiante se llama: $nombre");

        print ("<br> La cédula del estudiante es: $cedula");

        print ("<br> Materia: $materia");

        print ("<br> Parcial 1: $num1");

        print ("<br> Parcial 2: $num2");

        print ("<br> Parcial 3: $num3");

        //Verificación del estado del promedio

        if($promedio >= 7 && $promedio <= 10){
            print("<br> $nombre pasa de año en $materia con un promedio de: " . number_format($promedio,2));
        }else if($promedio >= 3.6 && $promedio <= 6.9){
            print("<br> $nombre está suspenso en $materia con un promedio de: " . number_format($promedio,2));
        }else if($promedio >= 0 && $promedio <= 3.5 ){
            print("<br> $nombre pierde el año en $materia con un promedio de: " . number_format($promedio,2));
        }
    ?>
    <br>
    <a href="index.html">Regresar al inicio</a>
</body>
</html>
