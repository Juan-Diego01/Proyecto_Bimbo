<?php
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

$nombreErr = $_POST['nombre'];
$apellidoErr = $_POST['apellido'];
$cargoErr = $_POST['cargo'];
$nombreEErr = $_POST['nombreE'];
$SedePErr = $_POST['SedeP'];
$ContactoErr = $_POST['contactoE'];
$fechaErr = $_POST['fecha'];

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

//Las siguientes son variables obligatorias completas

$nombre = $apellido = $cargo = $nombreE = $SedeP = $Contacto = $fecha ="";

//Las siguientes son variables obligatorias vacías

$nombreErr = $apellidoErr = $cargoErr = $nombreEErr = $SedePErr = $ContactoErr = $fechaErr ="";

//Los siguientes son condicionales para los campos obligatorios:

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nombre'])) {
        $nombreErr = "El nombre es requerido";
    } else {
        $nombre = test_input($_POST['nombre']);
    }

    if (empty($_POST['apellido'])) {
        $apellidoErr = "El apellido es requerido";
    } else {
        $apellido = test_input($_POST['apellido']);
    }

    if (empty($_POST['cargo'])) {
        $cargoErr = "Su cargo es requerido";
    } else {
        $cargo = test_input($_POST['cargo']);
    }

    if (empty($_POST['nombreE'])) {
        $nombreEErr = "El nombre de la empresa es requerido";
    } else {
        $nombreE = test_input($_POST['nombreE']);
    }

    if (empty($_POST['SedeP'])) {
        $SedePErr = "La sede principal es requerida";
    } else {
        $SedeP = test_input($_POST['SedeP']);
    }

    if (empty($_POST['Contacto'])) {
        $ContactoErr = "El email de contacto con la empresa es requerido";
    } else {
        $Contacto = test_input($_POST['Contacto']);
    }

    if (empty($_POST['fecha'])) {
        $fechaErr = "La fecha es requerida";
    } else {
        $fecha = test_input($_POST['fecha']);
    }
}

function test_input ($data) {
    $data = trim($data); //elimina espacios en blanco y carácteres al principio y final de la cadena
    $data = strimsplashes($data); //quita las barras de la cadena con comillas espaciadas
    return $data; //devuelve el valor ingresado
}

?>