<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://grupobimbo-com-custom01-assets.s3.amazonaws.com/s3fs-public/favicon.ico" type="image/vnd.microsoft.icon" />
    <title>Grupo Bimbo | Resultados Matriz de Riesgo </title>
</head>
<body>
    <font face="Tahoma" </font>
    <?php
        //Titulo
        echo '<center><h1>Resultados de la Matriz de Riesgo</h1></center>';
    ?>

    <!--Formulario para conocer el nivel de riesgo-->

    <body bgcolor="B0DDF9">
    <font face="Arimo" </font>
    <center>
    <?php
        //Variables posibles para las actividades de la infraestructura:
        $infraestructura = $_POST['infraestructura'];

        //Variables posibles para las actividades de los empleados:
        $empleados = $_POST['empleados'];

        //Variables posibles para las actividades de la imprenta:
        $imprenta = $_POST['imprenta'];

        //Condicionales:
    //Infraestructura:
        //Actividad 1:
        if ($_REQUEST['infraestructura'] == 1) {
            echo "<h2>La actividad seleccionada es: <b>Hacking</b> del área de infraestructura</h2>";
            echo "<h2>Peligro:</h2>95%</br>

            <h2>Riesgo:</h2>
            El riesgo principal está en perder todos</br>
            los datos de la empresa e inclusive</br>
            el hardware de la infraestructura.</br></br>

            <h2>Consecuencia:</h2>
            Caída constante del sistema,</br>
            intrusión de personas ajenas a la empresa,</br> 
            pérdida de datos e información, </br>
            colapso del sistema.</br></br></br>";
        }

        //Actividad 2:
        elseif ($_REQUEST['infraestructura'] == 2) {
            echo "<h2>La actividad seleccionada es: <b>Actualizaciones</b> del área de infraestructura</h2>";
            echo "<h2>Peligro:</h2>60%</br>
            
            <h2>Riesgo:</h2>
            Posible brecha de seguridad en los</br>
            equipos que hacen parte de la</br>
            infraestructura.</br></br>

            <h2>Consecuencia:</h2>
            Posible intrusión hacker.</br></br></br>";
        }

        //Actividad 3:
        elseif ($_REQUEST['infraestructura'] == 3) {
            echo "<h2>La actividad seleccionada es: <b>Sistema Operativo</b> del área de infraestructura</h2>";
            echo "<h2>Peligro:</h2>70%</br>
            
            <h2>Riesgo:</h2>
            Posible brecha de seguridad en </br>
            lo servidores de la empresa.</br></br>

            <h2>Consecuencia:</h2>
            Posible intrusión hacker, además de en</br>
            caso de no tener la licencia, podría ganar</br> 
            una multa millonaria por parte de</br>
            cmicrosoft.</br></br></br>";
        }

        //Actividad 4:
        
        elseif ($_REQUEST['infraestructura'] == 4) {
            echo "<h2>La actividad seleccionada es: <b>File Server</b> del área de infraestructura</h2>";
            echo "<h2>Peligro:</h2>50%</br>
            
            <h2>Riesgo:</h2>
            Filtración de datos importantes </br>
            con cargos ejecutivos.</br></br>

            <h2>Consecuencia:</h2>
            Pérdida de información importante en la</br>
            empresa, además de que podría haber</br> 
            una posible filtración de cifras como</br>
            ventas, clientes, etc (terceros).</br></br></br>";
        }

        //Actividad 5:
        elseif ($_REQUEST['infraestructura'] == 5) {
            echo "<h2>La actividad seleccionada es: <b>Malware</b> del área de infraestructura</h2>";
            echo "<h2>Peligro:</h2>80%</br>
            
            <h2>Riesgo:</h2>
            Daño de los archivos de la empresa,</br>
            sistemas operativos y software,</br>
            además de una posible entrada</br>
            trasera</br></br>.

            <h2>Consecuencia:</h2>
            Posible brecha de seguridad por donde</br>
            habría intrusión hacker, además de una</br> 
            posible falla de los sistemas de tecnologías</br>
            de información en general.</br></br></br>";
        }

        //Actividad 6:
        elseif($_REQUEST['infraestructura'] == 6) {
            echo "<h2>La actividad seleccionada es: <b>Equipos empresariales</b> del área de infraestructura</h2>";
            echo "<h2>Peligro:</h2>20%</br>
            
            <h2>Riesgo:</h2>
            No tener windows 10 pro</br></br>

            <h2>Consecuencia:</h2>
            No conectarse a un gpo y ser un usuario,</br>
            inactivo dentro de la empresa.</br></br></br>";
        }

    //Empleados:
        //Actividad 1:
        if ($_REQUEST['empleados'] == 1) {
            echo "<h2>La actividad seleccionada es: <b>Empleados capacitados</b> del área de Empleados</h2>";
            echo "<h2>Peligro:</h2>40%</br>
            
            <h2>Riesgo:</h2>
            Se puede ver afectado el rendimiento</br>
            de los servidores.</br></br>

            <h2>Consecuencia:</h2>
            Pérdidas de datos y sustentabilidad</br>
            de las tecnologías de la información.</br></br></br>";
        }
        
        //Actividad 2:
        elseif ($_REQUEST['empleados'] == 2) {
            echo "<h2>La actividad seleccionada es: <b>Mal uso de servidores</b> del área de Empleados</h2>";
            echo "<h2>Peligro:</h2>50%</br>
            
            <h2>Riesgo:</h2>
            Daño en el hardware de los servidores.</br></br>
    
            <h2>Consecuencia:</h2>
            Pérdidas millonarias para la empresa.</br></br></br>";
        } 

        //Actividad 3:
        elseif ($_REQUEST['empleados'] == 3) {
            echo "<h2>La actividad seleccionada es: <b>Plan de mantenimiento</b> del área de Empleados</h2>";
            echo "<h2>Peligro:</h2>70%</br>
            
            <h2>Riesgo:</h2>
            No tener un plan de mantenimiento</br>
            bien estructurado.</br></br>
    
            <h2>Consecuencia:</h2>
            Cambio del rendimiento de la empresa,</br>
            además de posibles bajones de</br>
            procesamiento de datos, por lo cual hará</br>
            que los procesos sean mucho más lentos y</br>
            no dinámicos.</br></br></br>";
        }
            
    //Imprenta:
        //Actividad 1:
        if ($_REQUEST['imprenta'] == 1) {
            echo "<h2>La actividad seleccionada es: <b>Etiquetado</b> del área de Imprenta</h2>";
            echo "<h2>Peligro:</h2>20%</br>
        
            <h2>Riesgo:</h2>
            Etiquetado corrido en los empaques</br>
            de los productos.</br></br>
    
            <h2>Consecuencia:</h2>
            Pérdida de clientela en la empresa,</br>
            lo que significan pérdidas de ingresos.</br></br></br>";
        }
           
        //Actividad 2:
        elseif ($_REQUEST['imprenta'] == 2) {
            echo "<h2>La actividad seleccionada es: <b>Máquinas impresoras</b> del área de Imprenta</h2>";
            echo "<h2>Peligro:</h2>15%</br>
            
            <h2>Riesgo:</h2>
            Falta de mantenimiento en las</br>
            máquinas impresoras.</br></br>
    
            <h2>Consecuencia:</h2>
            Compra de nuevas máquinas en un tiempo</br>
            periódico muy corto, haciendo que la</br>
            inversión a largo plazo sea más costosa..</br></br></br>";
        }

        //Actividad 3:
        elseif ($_REQUEST['imprenta'] == 3) {
            echo "<h2>La actividad seleccionada es: <b>Software de imprenta</b> del área de Imprenta</h2>";
            echo "<h2>Peligro:</h2>20%</br>
            
            <h2>Riesgo:</h2>
            La desactualización del etiquetado,</br>
            podría causar que algunos productos</br>
            no tengan la etiqueta respectiva</br>
            debido a fallos del software.</br></br>
    
            <h2>Consecuencia:</h2>
            Reclamos de pedidos dentro de la empresa,</br>
            posterior cambio del producto y</br>
            pérdida de ingresos.</br></br></br>";
        }

    ?>
    </center>

    <!--Formulario para volver a llenar los datos -->

    <form action="Formulario_Inicial.html" method="post">
        <center><p><input type="submit" name="submit" value="<< Volver pagina de inicio"/></p></center>
    </form>

    <form action="Matriz_de_riesgo.html" method="post">
        <center><p><input type="submit" name="submit" value="<< Volver a la matriz"/></p></center>
    </form>
</body>
</html>