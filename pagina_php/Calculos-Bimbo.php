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
        $inf1= $_POST['ac1inf'];
        $inf2= $_POST['ac2inf'];
        $inf3= $_POST['ac3inf'];
        $inf4= $_POST['ac4inf'];
        $inf5= $_POST['ac5inf'];
        $inf6= $_POST['ac6inf'];

        //Variables posibles para las actividades de los empleados:
        $em1= $_POST['ac1em'];
        $em2= $_POST['ac2em'];
        $em3= $_POST['ac3em'];

        //Variables posibles para las actividades de la imprenta:
        $imp1= $_POST['ac1imp'];
        $imp2= $_POST['ac2imp'];
        $imp3= $_POST['ac3imp'];

        //Condicionales:
    //Infraestructura:
        //Actividad 1:
        if ($_REQUEST['activInf'] == 'ac1inf'{
            echo "La actividad seleccionada es:" . $inf1 ."del área de hacking";
            echo "<h2>Peligro:</h2></br>95%</br>

            <h2>Riesgo:</h2></br>
            El riesgo principal está en perder todos</br>
            los datos de la empresa e inclusive</br>
            el hardware de la infraestructura.</br></br>

            <h2>Consecuencia:</h2></br>
            Caída constante del sistema,</br>
            intrusión de personas ajenas a la empresa,</br> 
            pérdida de datos e información, </br>
            colapso del sistema.</br></br></br>";
        }

        //Actividad 2:
        if ($_REQUEST['activInf'] == 'ac2inf'{
            echo "La actividad seleccionada es:" . $inf2 ."del área de hacking";
            echo "<h2>Peligro:</h2></br>60%</br>
            
            <h2>Riesgo:</h2></br>
            Posible brecha de seguridad en los</br>
            equipos que hacen parte de la</br>
            infraestructura.</br></br>

            <h2>Consecuencia:</h2></br>
            Posible intrusión hacker.</br></br></br>";
        }

        //Actividad 3:
        if ($_REQUEST['activInf'] == 'ac3inf'{
            echo "La actividad seleccionada es:" . $inf3 ."del área de hacking";
            echo "<h2>Peligro:</h2></br>70%</br>
            
            <h2>Riesgo:</h2></br>
            Posible brecha de seguridad en </br>
            lo servidores de la empresa.</br></br>

            <h2>Consecuencia:</h2></br>
            Posible intrusión hacker, además de en</br>
            caso de no tener la licencia, podría ganar</br> 
            una multa millonaria por parte de</br>
            cmicrosoft.</br></br></br>";
        }

        //Actividad 4:
        
        if ($_REQUEST['activInf'] == 'ac4inf'{
            echo "La actividad seleccionada es:" . $inf4 ."del área de hacking";
            echo "<h2>Peligro:</h2></br>50%</br>
            
            <h2>Riesgo:</h2></br>
            Filtración de datos importantes </br>
            con cargos ejecutivos.</br></br>

            <h2>Consecuencia:</h2></br>
            Pérdida de información importante en la</br>
            empresa, además de que podría haber</br> 
            una posible filtración de cifras como</br>
            ventas, clientes, etc (terceros).</br></br></br>";
        }

        //Actividad 5:
        if ($_REQUEST['activInf'] == 'ac5inf'{
            echo "La actividad seleccionada es:" . $inf5 ."del área de hacking";
            echo "<h2>Peligro:</h2></br>80%</br>
            
            <h2>Riesgo:</h2></br>
            Daño de los archivos de la empresa,</br>
            sistemas operativos y software,</br>
            además de una posible entrada</br>
            trasera</br></br>.

            <h2>Consecuencia:</h2></br>
            Posible brecha de seguridad por donde</br>
            habría intrusión hacker, además de una</br> 
            posible falla de los sistemas de tecnologías</br>
            de información en general.</br></br></br>";
        }

        //Actividad 6:
        if ($_REQUEST['activInf'] == 'ac6inf'{
            echo "La actividad seleccionada es:" . $inf6 ."del área de hacking";
            echo "<h2>Peligro:</h2></br>20%%</br>
            
            <h2>Riesgo:</h2></br>
            No tener windows 10 pro</br></br>

            <h2>Consecuencia:</h2></br>
            No conectarse a un gpo y ser un usuario,</br>
            inactivo dentro de la empresa.</br></br></br>";
        }

    //Empleados:
        //Actividad 1:
        if ($_REQUEST['activEmp'] == 'ac1em'{
            echo "La actividad seleccionada es:" . $em1 ."del área de Empleados";
            echo "<h2>Peligro:</h2></br>40%</br>
            
            <h2>Riesgo:</h2></br>
            Se puede ver afectado el rendimiento</br>
            de los servidores.</br></br>

            <h2>Consecuencia:</h2></br>
            Pérdidas de datos y sustentabilidad</br>
            de las tecnologías de la información.</br></br></br>";
        }
        
        //Actividad 2:
        if ($_REQUEST['activEmp'] == 'ac2em'{
            echo "La actividad seleccionada es:" . $em2 ."del área de Empleados";
            echo "<h2>Peligro:</h2></br>50%</br>
            
            <h2>Riesgo:</h2></br>
            Daño en el hardware de los servidores.</br></br>
    
            <h2>Consecuencia:</h2></br>
            Pérdidas millonarias para la empresa.</br></br></br>";
        } 

        //Actividad 3:
        if ($_REQUEST['activEmp'] == 'ac3em'{
            echo "La actividad seleccionada es:" . $em3 ."del área de Empleados";
            echo "<h2>Peligro:</h2></br>70%</br>
            
            <h2>Riesgo:</h2></br>
            No tener un plan de mantenimiento</br>
            bien estructurado.</br></br>
    
            <h2>Consecuencia:</h2></br>
            Cambio del rendimiento de la empresa,</br>
            además de posibles bajones de</br>
            procesamiento de datos, por lo cual hará</br>
            que los procesos sean mucho más lentos y</br>
            no dinámicos.</br></br></br>";
        }
            
    //Imprenta:
        //Actividad 1:
        if ($_REQUEST['activImp'] == 'ac1imp'{
            echo "La actividad seleccionada es:" . $imp1 ."del área de Imprenta";
            echo "<h2>Peligro:</h2></br>20%</br>
            
            <h2>Riesgo:</h2></br>
            Etiquetado corrido en los empaques</br>
            de los productos.</br></br>
    
            <h2>Consecuencia:</h2></br>
            Pérdida de clientela en la empresa,</br>
            lo que significan pérdidas de ingresos.</br></br></br>";
        }
           
        //Actividad 2:
        if ($_REQUEST['activImp'] == 'ac2imp'{
            echo "La actividad seleccionada es:" . $imp2 ."del área de Imprenta";
            echo "<h2>Peligro:</h2></br>15%</br>
            
            <h2>Riesgo:</h2></br>
            Falta de mantenimiento en las</br>
            máquinas impresoras.</br></br>
    
            <h2>Consecuencia:</h2></br>
            Compra de nuevas máquinas en un tiempo</br>
            periódico muy corto, haciendo que la</br>
            inversión a largo plazo sea más costosa..</br></br></br>";
        }

        //Actividad 3:
        if ($_REQUEST['activImp'] == 'ac3imp'{
            echo "La actividad seleccionada es:" . $imp3 ."del área de Imprenta";
            echo "<h2>Peligro:</h2></br20>%</br>
            
            <h2>Riesgo:</h2></br>
            La desactualización del etiquetado,</br>
            podría causar que algunos productos</br>
            no tengan la etiqueta respectiva</br>
            debido a fallos del software.</br></br>
    
            <h2>Consecuencia:</h2></br>
            Reclamos de pedidos dentro de la empresa,</br>
            posterior cambio del producto y</br>
            pérdida de ingresos..</br></br></br>";
        }
    ?>
    </center>

    <!--Formulario para volver a llenar los datos -->

    <form action="http://localhost:8080/pagina_php/Pagina-Bimbo.html" method="post">
        <center><p><input type="submit" name="submit" value="<< Volver pagina de inicio"/></p></center>
    </form>
</body>
</html>