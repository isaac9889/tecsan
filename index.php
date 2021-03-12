<?php

$errores ='';
$enviado ='';

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $espacio = $_POST['espacio'];
    $habitaciones = $_POST['habitaciones'];
    $patio = $_POST['patio'];
    $superficie = $_POST['superficie'];
    $medio = $_POST['medio'];
    $terminos = $_POST['terminos'];

    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else{
        $errores .= 'Por favor ingresa tu nombre <br>';
    }

    if (!empty($telefono)) {
        $telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);

        if (!filter_var($telefono, FILTER_VALIDATE_INT)) {
            $errores .= 'Por favor ingresa un numero de telefono valido valido <br>';
        }
    } else{
        $errores .= 'Por favor ingresa tu telefono <br>';
    }

    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor ingresa un correo valido <br>';
        }
    } else{
        $errores .= 'Por favor ingresa tu correo <br>';
    }

    if ($espacio == 0) {
        $errores .= 'Por favor selecciona tu tipo de inmueble  <br>';
    } else{
        $espacio = trim($espacio);
    }

    if ($habitaciones == 0) {
        $errores .= 'Por favor selecciona tu numero de habitaciones  <br>';
    } else{
        $habitaciones = trim($habitaciones);
    }

    if ($patio == 0) {
        $errores .= 'Por favor selecciona si tu inmueble cuenta con un patio  <br>';
    } else{
        $patio = trim($patio);
    }

    if (!empty($superficie)) {
        $superficie = htmlspecialchars($superficie);
        $superficie = trim($superficie);
        $superficie =stripcslashes($superficie);
    } else{
        $errores .= 'Por favor ingresa la superficie aproximada de tu inmueble  <br>';
    }

    if (!empty($medio)) {
        $medio = htmlspecialchars($medio);
        $medio = trim($medio);
        $medio =stripcslashes($medio);
    } else{
        $errores .= 'Por favor ingresa por que medio te enteraste de nuestros servicios  <br>';
    }

    if ($terminos == false) {
        $errores .= 'Por favor acepta nuestros terminos de uso y privacidad  <br>';
    }

    if(!$errores){
        $enviar_a = 'vargasweb@outlook.com';
        $asunto = 'Correo enviado desde Tecsanplus.com para cotizacion:';
        $mensaje_listo = "De: $nombre \n";
        $mensaje_listo .= "Telefono: $telefono \n";
        $mensaje_listo .= "Correo: $correo \n";
        $mensaje_listo .= "Los datos del inmueble son los siguientes: ";
        $mensaje_listo .= "El inmueble es de tipo: $espacio \n";
        $mensaje_listo .= "Con $habitaciones habitaciones \n";
        $mensaje_listo .= "El inmueble cuenta o no con patio $patio \n";
        $mensaje_listo .= "La superficie del lugar es de un aproximado de $superficie \n";
        $mensaje_listo .= "El cliente se entero de nuestros servicios por medio de $medio \n";

        mail($enviar_a, $asunto, $mensaje_listo);
        $enviado = true;
    }
}

require 'index.view.php';

