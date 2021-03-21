var error_box = document.getElementById('error_box'),
    send_box = document.getElementById('send_box'),
    loader = document.getElementById('loader');
var nombre,
    telefono,
    correo,
    espacio,
    habitaciones,
    patio,
    superficie,
    medio,
    terminos;

function enviarMensaje(e) {
    e.preventDefault();

    var peticion = new XMLHttpRequest();

    peticion.open('POST', 'php/enviar.php');

    nombre = formulario.nombre.value.trim();
    telefono = parseInt(formulario.telefono.value.trim());
    correo = formulario.correo.value.trim();
    espacio = formulario.espacio.value;
    habitaciones = formulario.habitaciones.value;
    patio = formulario.patio.value;
    superficie = formulario.superficie.value.trim();
    medio = formulario.medio.value.trim();
    terminos = formulario.terminos.checked;



    if (formulario_valido()) {
        error_box.classList.remove('active');
        var parametros = 'nombre=' + nombre + '&telefono=' + telefono +
            '&correo=' + correo + '&espacio=' + espacio + '&habitaciones=' + habitaciones +
            '&patio=' + patio + '&superficie=' + superficie + '&medio=' + medio + '&terminos=' + terminos;
        peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        loader.classList.add('active');
        formulario.nombre.value = '';
        formulario.telefono.value = '';
        formulario.correo.value = '';
        formulario.superficie.value = '';
        formulario.medio.value = '';
        // formulario.terminos.checked = false;

        peticion.onreadystatechange = function() {
            if (peticion.readyState == 4 && peticion.status == 200) {
                loader.classList.remove('active');
            }
        };

        peticion.send(parametros);
        send_box.classList.add('active');

    } else {
        error_box.classList.add('active');
        error_box.innerHTML = 'Tu consulta es muy importante para nosotros, por favor completa todos los campos del formulario correctamente';
    }

}

formulario.addEventListener('submit', function(e) {
    enviarMensaje(e);
});

function formulario_valido() {
    if (nombre == '') {
        return false;
    } else if (isNaN(telefono)) {
        return false;
    } else if (correo == '') {
        return false;
    } else if (espacio == 0) {
        return false;
    } else if (habitaciones == 0) {
        return false;
    } else if (patio == 0) {
        return false;
    } else if (superficie == '') {
        return false;
    } else if (medio == '') {
        return false;
    } else if (terminos == false) {
        return false;
    }
    return true;
}