<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://grupobimbo-com-custom01-assets.s3.amazonaws.com/s3fs-public/favicon.ico" type="image/vnd.microsoft.icon" />
    <title>Grupo Bimbo | Perfil </title>
</head>
<body>
    <font face="Tahoma" </font>
    <?php
        //Titulo
        echo '<center><h1>Visitante a la matriz de riesgo</h1></center></style>';
    ?>
    <body bgcolor="B0DDF9">
    <font face="Arimo" </font>
    <center>
    <?php
        //Variable para el nombre del usuario visitante
        $Nombre= $_POST['Nombre'];
        echo "<h5>El nombre es: " . $Nombre . "<br/></h5>";

        //Variable para el apellido del usuario visitante
        $Apellido= $_POST['Apellido'];
        echo "<h5>El apellido es: " . $Apellido . "<br/></h5>";
  
        //Variable para el cargo del usuario visitante
        $cargo= $_POST['cargo'];
        echo "<h5>El cargo del visitante es: " . $cargo . "<br/></h5>";

        //Variable para el correo del usuario visitante
        $Correo= $_POST['Correo'];
        echo "<h5>Su correo electronico es: " . $Correo . "<br/></h5>";

        //Variable para la confirmación del correo del usuario visitante
        $Confirmación_correo= $_POST['Confirmación_correo'];
        echo "<h5>Su correo electronico es: " . $Confirmación_correo . "<br/></h5>";

        //Variable para el # de celular del usuario visitante
        $Celular= $_POST['Celular'];
        echo "<h5>Su número de celular es: " . $Celular . "<br/></h5>";

        //Variable para la contraseña del usuario visitante
        $Contraseña= $_POST['Contraseña'];
        echo "<h5>Su contraseña es: " . $Contraseña . "<br/></h5>";

        //Variable para la confirmación de contraseña del usuario visitante
        $Confirmación_contraseña= $_POST['Confirmación_contraseña'];
        echo "<h5>Su contraseña es: " . $Confirmación_contraseña . "<br/></h5>";

        //Variables para la fecha del día de entrada
        $dia= $_POST['dia'];
        echo "<h5>El día de consulta es: " . $dia . "<br/></h5>";

        $mes= $_POST['mes'];
        echo "<h5>El mes de consulta es: " . $mes . "<br/></h5>";

        $año= $_POST['año'];
        echo "<h5>El año de consulta es: " . $año . "<br/></h5>";

        echo "<h5>Le enviaremos un correo el día: ". $dia+3 ." del mes ". $mes . " del año " . $año . ", Por favor esté atento.</h5>"
    ?>
    </center>
    <!--Formulario para volver a la pagina de ingreso de datos-->
    <form action="Formulario_Inicial.html" method="post">
    <center><p><input type="submit" name="submit" value="<< Volver"/></p></center>
    </form>
    
    <!--Formulario para ir a la matriz de riezgo desde los datos obtenitos-->
    <form action="Matriz_de_Riesgo.html" method="post">
    <center><p><input type="submit" name="submit" value="Ir a la matriz de Riezgo >>"/></p></center>
    </form>
</body>
</html>