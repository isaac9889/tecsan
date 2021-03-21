<div class="section4" id="cotizacion">

    <div class="section__title">
        <h2 class="section__text-title">Realiza tu cotización</h2>
    </div>

    <div class="section__body">
        <div class="section__imagectr">
            <picture loading="lazy">
                <source srcset="assets/images/quote.webp" type="image/webp" loading="lazy" />
                <source srcset="assets/images/quote.png" type="image/png" />
                <img class="section__imagesection1" src="assets/images/quote.png" title="Tecsan Logo" alt="Tecsan Logo">
            </picture>
        </div>

        <form action="" method="" class="form-container" id="formulario">

            <div class="styledctr">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control styled" name="nombre" id="nombre" placeholder="Ingresa tu nombre"
                        maxlength="30" minlength="5">
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono de contacto:</label>
                    <input type="text" class="form-control styled" name="telefono" id="telefono"
                        placeholder="Numero de telefono a 10 digitos" maxlength="10" minlength="10">
                </div>
            </div>

            <div class="styledctr">
                <div class="form-group">
                    <label for="correo">Correo electronico:</label>
                    <input type="email" class="form-control styled" name="correo" id="correo" placeholder="ejemplo@gmail.com">
                </div>

                <div class="form-group">
                    <label for="espacio">Inmueble</label>
                    <select class="form-control styled" name="espacio" id="espacio">
                        <option value="0" selected>Selecciona una opción</option>
                        <option value="Casa">Casa</option>
                        <option value="Departamento">Departamento</option>
                        <option value="Oficinas">Oficinas</option>
                        <option value="Local Comercial">Local Comercial</option>
                        <option value="Bodegas">Bodegas</option>
                    </select>
                </div>
            </div>

            <div class="styledctr">
                <div class="form-group">
                    <label for="habitaciones"># de habitaciones/cuartos</label>
                    <select class="form-control styled" name="habitaciones" id="habitaciones">
                        <option value="0" selected>Selecciona una opción</option>
                        <option value="1">1 habitacion</option>
                        <option value="2">2 habitaciones</option>
                        <option value="3">3 habitaciones</option>
                        <option value="4 o mas">4 o mas habitaciones</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="patio">¿Cuenta con patio y/o cochera?</label>
                    <select class="form-control styled" name="patio" id="patio">
                        <option value="0" selected>Selecciona una opción</option>
                        <option value="Patio">Patio</option>
                        <option value="Cochera">Cochera</option>
                        <option value="Ambos">Ambos</option>
                        <option value="No tiene">No cuento con patio ni cochera</option>
                    </select>
                </div>
            </div>

            <div class="styledctr">
                <div class="form-group">
                    <label for="superficie">Superficie aproximada del inmueble:</label>
                    <input type="text" class="form-control styled" name="superficie" id="superficie"
                        placeholder="Superficie aproximada en m2" maxlength="10">
                </div>

                <div class="form-group">
                    <label for="medio">Por que medio se entero de nuestros servicios:</label>
                    <input type="text" class="form-control styled" name="medio" id="medio"
                        placeholder="Redes sociales (facebook, intagram,etc.), Uber, Google, etc." maxlength="30">
                </div>
            </div>
            
            <div class="styledctr">
                <div class="contenedor-terminos">
                    <input type="checkbox" name="terminos" id="terminos" required>
                    <label for="terminos">Acepto los <a href="#term" data-toggle="modal" data-target="#terminos-modal">terminos de uso y privacidad</a></label>
                </div>
            </div>

            <div class="loader" id="loader"></div>

            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="alert alert-danger mt-3 error_box" id="error_box">
                            <p class="mb-0">
                                Se ha producido un error.
                                <?php echo $errores; ?>
                            </p>
                        </div>

                        <div class="alert alert-success mt-3 send_box" id="send_box">
                            <p class="mb-0">
                                <strong>Enviado!!</strong><br>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                Hemos recibido tus datos y en breve uno de nuestros ejecutivos te contactara para darle seguimento a tu cotizacion.
                                <br>Gracias por tu preferencia.
                                <br>TECSANplus+.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <button class="form-button" type="submit" name="submit">Enviar cotización</button>
            
        </form>
    </div>

    <hr class="section__divider">
</div>

