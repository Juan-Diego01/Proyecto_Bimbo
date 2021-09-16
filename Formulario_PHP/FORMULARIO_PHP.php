<?php
//estas son las variables principales
$nombre = $_POST['nombre'];
$Snombre = $_POST['Snombre'];
$apellido = $_POST['apellido'];
$Sapellido = $_POST['Sapellido'];
$cargo = $_POST['cargo'];
$nombreE = $_POST['nombreE'];
$ContactoE = $_POST['contactoE'];
$SedeP = $_POST['SedeP'];
$CodPos = $_POST['CodPos'];
$Npersonal = $_POST['Npersonal'];
$Contacto = $_POST['Contacto'];
$Mensaje = $_POST['Mensaje'];
$fecha = $_POST['fecha'];

//estas son las variables erróneas
$nombreErr = $_POST['nombre'];
$apellidoErr = $_POST['apellido'];
$cargoErr = $_POST['cargo'];
$nombreEErr = $_POST['nombreE'];
$SedePErr = $_POST['SedeP'];
$ContactoErr = $_POST['contactoE'];
$fechaErr = $_POST['fecha'];

//estas son las cantidades posibles
$cant1 = $_POST['cant1'];
$cant2 = $_POST['cant2'];
$cant3 = $_POST['cant3'];
$cant4 = $_POST['cant4'];
$cant5 = $_POST['cant5'];
$cant6 = $_POST['cant6'];

//Este es el total de los precios por la cantidad
$totgans = $gans * $cant1;
$tottort = $tort * $cant2;
$totping = $ping * $cant3;
$totpanart = $panart * $cant4;
$totpanbl = $panbl * $cant5;
$totpanint = $panint * $cant6;

//estas son las variables de selección múltiple
$gans = 2000;
$tort = 5000;
$ping = 1500;
$panart = 4500;
$panbl = 5000;
$panint = 6000;
$subtotal = $totgans + $tottort + $totping + $totpanart + $totpanbl + $totpanint;
$desc = $subtotal * 0.2;
$total = $subtotal - $desc;

/*
Dentro de la llave del anterior formulario se encuentra
el id de cada valor dentro del formulario en html
*/

echo "<h1>Datos del formulario recibidos desde la página web</h1>";
echo "El nombre del solicitante es: " . $nombre . "<br/>";
echo "El segundo nombre del solicitante es: " . $Snombre . "<br/>";
echo "El apellido del solicitante es: " . $apellido . "<br/>";
echo "El segundo apellido del solicitante es: " . $Sapellido . "<br/>";
echo "El cargo del solicitante es: " . $cargo . "<br/>";
echo "El email del usuario solicitante es: " . $ContactoE . "<br/>";
echo "El nombre de la empresa del solicitante es: " . $nombreE . "<br/>";
echo "La sede principal de la empresa del solicitante es: " . $SedeP . "<br/>";
echo "El código postal de la sede es: " . $CodPos . "<br/>";
echo "El número del personal en la empresa es: " . $Npersonal . "<br/>";
echo "El contacto de la empresa es: " . $Contacto . "<br/>";
echo "El mensaje dejado por el solicitando es: " . $Mensaje . "<br/>";
echo "La fecha del día de la solicitud: " . $fecha . "<br/>";
echo "El subtotal de los productos comprados es:" . $subtotal . "<br/>";

//Los siguientes son condicionales para los campos obligatorios:
    if (!$_POST) {
        header('Location:Formulario_HTML.html');
    }

    if (empty($_POST['nombre'])) {
        echo "El nombre es requerido";
    }

    if (empty($_POST['apellido']) {
        echo "El apellido es requerido";
    }

    if (empty($_POST['cargo'])) {
        echo "Su cargo es requerido";
    }

    if (empty($_POST['nombreE']) {
        echo "El nombre de la empresa es requerido";
    }

    if (empty($_POST['SedeP'])) {
        echo "La sede principal es requerida";
    }

    if (empty($_POST['Contacto'])) {
        echo "El email de contacto con la empresa es requerido";
    }

    if (empty($_POST['fecha'])) {
        echo "La fecha es requerida";
    }

//en esta parte se hacen los cálculos para poder determinar los descuentos.
    if ($subtotal > 30000) {
        $desc = $subtotal * 0.2;
        echo "¡Felicidades!, el monto total es mayor a $30.000, te regalamos un descuento del 20%. En total tienes que pagar:" . $total . "<br/>"
    } elseif {
        ($subtotal = 30000) {
            $desc = $subtotal * 0.1;
            echo "¡Felicidades!, el monto total es igual a $30.000, te regalamos un descuento del 10%. En total tienes que pagar:" . $total . "<br/>"
    } else {
        ($subtotal <30000)
        echo "Lo sentimos, tu monto de productos no alcanza los $30.000, por lo tanto no podemos ofrecerte el descuento del 15%."
    }
}
?>