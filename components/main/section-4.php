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

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-container">

            <div class="styledctr">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control styled" name="nombre" id="nombre" placeholder="Ingresa tu nombre"
                        maxlength="30" minlength="5" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono de contacto:</label>
                    <input type="text" class="form-control styled" name="telefono" id="telefono"
                        placeholder="Numero de telefono a 10 digitos" maxlength="10" minlength="10"
                        value="<?php if(!$enviado && isset($telefono)) echo $telefono ?>" required>
                </div>
            </div>

            <div class="styledctr">
                <div class="form-group">
                    <label for="correo">Correo electronico:</label>
                    <input type="email" class="form-control styled" name="correo" id="correo" placeholder="ejemplo@gmail.com"
                        value="<?php if(!$enviado && isset($correo)) echo $correo ?>" required>
                </div>

                <div class="form-group">
                    <label for="espacio">Inmueble</label>
                    <select class="form-control styled" name="espacio" id="espacio"
                        value="<?php if(!$enviado && isset($espacio)) echo $espacio ?>" >
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
                    <select class="form-control styled" name="habitaciones" id="habitaciones"
                        value="<?php if(!$enviado && isset($habitaciones)) echo $habitaciones ?>" >
                        <option value="0" selected>Selecciona una opción</option>
                        <option value="1">1 habitacion</option>
                        <option value="2">2 habitaciones</option>
                        <option value="3">3 habitaciones</option>
                        <option value="4 o mas">4 o mas habitaciones</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="patio">¿Cuenta con patio y/o cochera?</label>
                    <select class="form-control styled" name="patio" id="patio"
                        value="<?php if(!$enviado && isset($patio)) echo $patio ?>" >
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
                        placeholder="Superficie aproximada en m2" maxlength="10"
                        value="<?php if(!$enviado && isset($superficie)) echo $superficie ?>" required>
                </div>

                <div class="form-group">
                    <label for="medio">Por que medio se entero de nuestros servicios:</label>
                    <input type="text" class="form-control styled" name="medio" id="medio"
                        placeholder="Redes sociales (facebook, intagram,etc.), Uber, Google, etc." maxlength="30"
                        value="<?php if(!$enviado && isset($medio)) echo $medio ?>" required>
                </div>
            </div>

            <?php if (!empty($errores)):?>
            <div class="alert error">
                <?php echo $errores; ?>
            </div>
            <?php elseif ($enviado): ?>
            <div class="alert success">
                <p>Hemos recibido tus datos y en breve uno de nuestros ejecutivos te contactara para darle seguimento a tu cotizacion.</p>
                <p>Gracias por tu preferencia.</p>
            </div>
            <?php endif ?>
            
            <div class="styledctr">
                <div class="contenedor-terminos">
                    <input type="checkbox" name="terminos" id="terminos" required>
                    <label for="terminos">Acepto los <a href="#term" data-toggle="modal" data-target="#terminos-modal">terminos de uso y privacidad</a></label>
                </div>
            </div>

            <button class="form-button" type="submit" name="submit">Enviar cotización</button>
            
        </form>
    </div>

    <hr class="section__divider">
</div>

