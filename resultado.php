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
        print ("El estudiante se llama: $nombre");
        print "<br>"; 

        $cedula= $_POST["cedula"];
        print ("La cédula del estudiante es: $cedula");
        print "<br>"; 

        $materia= $_POST["materia"];
        print ("Materia: $materia");
        print "<br>"; 

        $num1= $_POST["num1"];
        print ("Parcial 1: $num1");
        print "<br>";

        $num2= $_POST["num2"];
        print ("Parcial 2: $num2");
        print "<br>";

        $num3= $_POST["num3"];
        print ("Parcial 3: $num3");
        print "<br>";

        $promedio= ($num1+$num2+$num3)/3;
        print ("Promedio general de $materia: $promedio");
        print "<br>";
    ?>
</body>
</html>
