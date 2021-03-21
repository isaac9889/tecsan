<?php

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$espacio = $_POST['espacio'];
$habitaciones = $_POST['habitaciones'];
$patio = $_POST['patio'];
$superficie = $_POST['superficie'];
$medio = $_POST['medio'];
$terminos = $_POST['terminos'];

    $nombre = htmlspecialchars($nombre);
    $nombre = trim($nombre);
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);
    $correo = htmlspecialchars($correo);
    $correo = trim($correo);
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
    $superficie = htmlspecialchars($superficie);
    $superficie = trim($superficie);
    $superficie =stripcslashes($superficie);
    $medio = htmlspecialchars($medio);
    $medio = trim($medio);
    $medio =stripcslashes($medio);

    function validarDatos ($nombre, $telefono, $correo, $espacio, $habitaciones, $patio, $superficie, $medio){
        if($nombre ==''){
            return false;
        } elseif($telefono == ''){
            return false;
        } elseif($correo == ''){
            return false;
        } elseif($espacio == 0){
            return false;
        } elseif($habitaciones == 0){
            return false;
        } elseif($patio == 0){
            return false;
        } elseif($superficie == ''){
            return false;
        } elseif($medio == ''){
            return false;
        }
        return true;
    }

    

    if(validarDatos($nombre, $telefono, $correo, $espacio, $habitaciones, $patio, $superficie, $medio)){
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
        $respuesta = [];
    } else{
        $respuesta = ['error' => true];
    }