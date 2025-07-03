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

        $nombre= $_POST["nombre"];
        $cedula= $_POST["cedula"];
        $materia= $_POST["materia"];
        $num1= $_POST["num1"];
        $num2= $_POST["num2"];
        $num3= $_POST["num3"];
        $promedio= ($num1+$num2+$num3)/3;

        print ("<br> El estudiante se llama: $nombre");

        print ("<br> La cédula del estudiante es: $cedula");

        print ("<br> Materia: $materia");

        print ("<br> Parcial 1: $num1");

        print ("<br> Parcial 2: $num2");

        print ("<br> Parcial 3: $num3");

        print ("<br> Promedio general de $materia: ". number_format($promedio,2));
    ?>
</body>
</html>
